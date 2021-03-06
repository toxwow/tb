<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Service;
use App\SubService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function category($id){
        $serviceAll = Service::all();
        $group = Service::where('alias', '=', $id) ->get();
        $category = DB::table('services')
            ->join('sub_services', 'services.id', '=', 'sub_services.service_id')
            ->select('services.name', 'services.id', 'sub_services.sub_service_name', 'sub_services.sub_service_alias')->where('services.alias', '=', $id)
            ->get();
        $photo = Photo::where('alias', '=', $id)->get();
        if ($group -> isEmpty()){
            abort(403, 'Page not found');
        }
        else{
            return view('singleService' , ['singleService' => $category, 'category' => $group, 'photo' => $photo, 'serviceAll' => $serviceAll]);
        }
    }

    public function subcategory($id, $id2)
    {
        $serviceAll = Service::all();
        $serviceGroupe = Service::where('alias', '=', $id) -> get();
        $sericeSingle = SubService::where('sub_service_alias', '=', $id2) -> get();
        return view('singleSubService', ['serviceGroupe' => $serviceGroupe, 'service' => $sericeSingle, 'serviceAll' => $serviceAll]);
    }

    public function showAll()
    {
        if (Auth::check()) {
            $allService = Service::with('test')->get();
            return view('admin.subCategory', ['allService' => $allService]);
        }

        else{
            return redirect ('/');
        }
    }

    public function addView()
    {
        if (Auth::check()) {
            $category = Service::all();
            return view('admin.addSubcategory', ['category' => $category]);
        }

        else{
            return redirect ('/');
        }
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

            $this->validate($request,[
                'description' => 'required|min:5'
            ]);

            $alias_new = SubService::ConvertToPolish($request->name);
            $sub_service = new SubService();
            $sub_service->service_id = $request->category;
            $sub_service->sub_service_name = $request->name;
            $sub_service->sub_service_alias = $alias_new;
            $sub_service->price = 0;
            $sub_service->time = 0;
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
            $sub_service->description = $detail;
            $sub_service-> save();

            return redirect('/admin/podkategorie/')->with('sucess', 'Podkategoria dodana prawidłowo');
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
            $category = Service::all();
            $service = SubService::findOrFail($id);
            return view('admin.editSubcategory', ['service' => $service, 'category' => $category]);
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
            $service = SubService::find($id);
            $alias_new = SubService::ConvertToPolish($request->name);
            $service->sub_service_name = $request->name;
            $service->service_id = $request->category;
            $service->sub_service_alias = $alias_new;
            $detail=$request->description;
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
            $service->description = $detail;
            $service->save();
            return redirect('/admin/podkategorie/')->with('sucess', 'Podkategoria zedtydowana prawidłowo');
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
        SubService::where(['id' => $id])->delete();
        return redirect('/admin/podkategorie/')->with('sucess', 'Podkategoria usunięta prawidłowo');
    }
}
