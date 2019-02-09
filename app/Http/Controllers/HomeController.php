<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $allService =  Service::all();


        return view('home', ['groupeService' => $allService]);
    }

    public function category($id){
        $category = DB::table('services')
            ->join('sub_services', 'services.id', '=', 'sub_services.service_id')
            ->select('services.id', 'sub_services.name')->where('services.alias', '=', $id)
            ->get();

        if ($category -> isEmpty()){
            abort(403, 'Page not find');
        }

        else{
            return view('singleService' , ['singleService' => $category]);
        }
    }


}
