<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Prices;
use App\Service;
use App\SubService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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

    public function oferta()
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
