<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function showAll()

    {   $category = Service::all();
        $photos = Photo::all();
        return view ('admin.gallery', ['photos' => $photos, 'category' => $category]);
    }

    public function uploadImage(Request $request)

    {
        if (Auth::check()) {
            $image = $request->image;
            $category = $request->category;
            $alias = $request->alias;
            $name = $request->name;
            $alt = $request->alt;
            list($type, $image) = explode(';', $image);
            list(, $image) = explode(',', $image);
            $image = base64_decode($image);
            $image_name = time() . '.png';
            $path = public_path() . '/img/slider/' . $image_name;
            file_put_contents($path, $image);

            $photo = new Photo();
            $photo->path = $image_name;
            $photo->name = $name;
            $photo->alias = $alias;
            $photo->alt = $alt;
            if($photo->save()){

                return response()->json(["response" =>true,"photo"=>$photo]);
            }
            return response()->json(["response" =>false,"photo"=>$photo]);
        }

        else{
            return redirect ('/');
        }
    }

    public function destroy($id)
    {
        if (Auth::check()) {
            Photo::where(['id' => $id])->delete();
            return response()->json(['status' => true]);
        }

        else{
            return redirect ('/');
        }
    }
}
