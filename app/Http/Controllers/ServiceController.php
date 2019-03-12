<?php

namespace App\Http\Controllers;

use App\Service;
use App\SubService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allService =  Service::all();
        $allSericeMarge = $allService;
        foreach ($allService as $key => $service){
            $findSubService = SubService::where('service_id', $service->id)->get();
            $stackName = array();
            $stackAlias = array();
            foreach ($findSubService as $item){
                array_push($stackName, $item->sub_service_name);
                array_push($stackAlias, $item->sub_service_alias);
            }
            $allSericeMarge[$key] -> {'uslugi'} = $stackName;
            $allSericeMarge[$key] -> {'alias_sub'} = $stackAlias;

        }

        return view('offer', ['groupeService' => $allService,  'groupeServiceTest' => $allSericeMarge]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showAll()
    {
        if (Auth::check()) {

            $allService = Service::all();
            return view('admin.category', ['allService' => $allService]);
        }

        else{
            return redirect ('/');
        }
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {

            $upload_path = 'public/img/category';
            $name = $request->file('img')->hashName();
            $path = $request->file('img')->move(public_path('img/category/'), $name);
            $alias_new = Service::ConvertToPolish($request->name);
            $service = new Service();
            $service->name = $request->name;
            $service->alias = $alias_new;
            $service->image = $name;
            $detail=$request->description;
            $dom = new \domdocument();
            $dom->loadHtml('<?xml encoding="UTF-8">'.$detail);
            $images = $dom->getelementsbytagname('img');
            foreach($images as $k => $img) {
                $data = $img->getattribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);
                $image_name = time() . $k . '.png';
                $path = public_path() . '/img/description/' . $image_name;
                file_put_contents($path, $data);
                $img->removeattribute('src');
                $img->setattribute('src', asset('/img/description/'. $image_name));
                $img->setattribute('old', true);
            }
                $detail = $dom->savehtml();
                $service->main_description = $detail;
                $service-> save();
            return redirect('/admin/kategorie/');
        }

        else{
            return redirect ('/');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::check()) {
            $service = Service::find($id);
            $findSubService = SubService::where('service_id', $service->id)->get();
            return view('admin.showCategory', ['service' => $service, 'test' => $findSubService]);
        }

        else{
            return redirect ('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
            $service = Service::findOrFail($id);
            return view('admin.editCategory', ['service' => $service]);
        }

        else{
            return redirect ('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::check()) {


            $service = Service::find($id);
            $service->name = $request->name;
            $detail=$request->description;
            $alias_new = Service::ConvertToPolish($request->name);
            $dom = new \domdocument();
            $dom->loadHtml('<?xml encoding="UTF-8">'.$detail);
            $images = $dom->getelementsbytagname('img');
            foreach($images as $k => $img) {
                $data = $img->getattribute('src');
                $data1 = $img->getattribute('old');
                if($data1 == true){
                    continue;
                }
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);
                $image_name = time() . $k . '.png';
                $path = public_path() . '/img/description/' . $image_name;
                file_put_contents($path, $data);
                $img->removeattribute('src');
                $img->setattribute('src', asset('/img/description/'. $image_name));
                $img->setattribute('old', true);
            }
            $detail = $dom->savehtml();
            $service->main_description = $detail;
            $service->alias = $alias_new;


            if ($request->file('img')){
                $upload_path = '/public/img/category';

                $name = $request->file('img')->hashName();
                $path = $request->file('img')->move(public_path('img/category/'), $name);
                $service->image = $name;
            }
            $service->save();


            return redirect('/admin/kategorie/'. $id);
        }

        else{
            return redirect ('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::where(['id' => $id])->delete();
        return redirect('/admin/kategorie/');
    }
}
