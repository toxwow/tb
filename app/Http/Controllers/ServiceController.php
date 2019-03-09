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
        //
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
            $service = Service::findOrFail($id);
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
            $service->main_description = $request->description;
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
        //
    }
}
