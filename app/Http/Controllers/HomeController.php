<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Service;
use App\SubService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $allService =  Service::all();
        $photos = Photo::all();
        return view('home', ['groupeService' => $allService, 'photos' => $photos]);
    }

    public function category($id){
        $category = DB::table('services')
            ->join('sub_services', 'services.id', '=', 'sub_services.service_id')
            ->select('services.name', 'services.id', 'sub_services.sub_service_name')->where('services.alias', '=', $id)
            ->get();


        if ($category -> isEmpty()){
            abort(403, 'Page not find');
        }

        else{
            return view('singleService' , ['singleService' => $category]);
        }
    }

    public function prices()
    {
        $prices = DB::table('services')
            ->join('sub_services', 'services.id', '=', 'sub_services.service_id')
            ->select('services.name', 'sub_services.sub_service_name','sub_services.price' , 'sub_services.time' )
            ->get() ;

        $grouped = $prices->groupBy('name') -> toArray();

        return view('cennik', ['prices' => $grouped]);
    }

    public function about()
    {
        return view('aboutUs');
    }


}
