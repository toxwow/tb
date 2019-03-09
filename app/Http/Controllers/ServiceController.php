<?php

namespace App\Http\Controllers;

use App\Service;
use App\SubService;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
