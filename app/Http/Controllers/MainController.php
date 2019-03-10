<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Service;
use App\SubService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
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
        $photos = Photo::all();
        return view('home', ['groupeService' => $allService, 'photos' => $photos, 'groupeServiceTest' => $allSericeMarge]);
    }


    public function prices()
    {
        $pricesNew = Service::with('phone')->get()->groupBy('services.name') ->first();
        return view('cennik', ['priceNew' => $pricesNew]);
    }
    public function about()
    {
        return view('aboutUs');
    }
    public function gallery()
    {
        $photo = Photo::all();
        return view('gallery', ['photo' => $photo]);
    }
}
