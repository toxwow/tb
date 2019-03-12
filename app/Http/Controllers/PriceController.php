<?php

namespace App\Http\Controllers;

use App\Prices;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PriceController extends Controller
{
    public function prices()
    {
        $price = Service::with('phone')->get()->groupBy('services.name') ->first();
        return view('cennik', ['priceNew' => $price]);
    }


    public function showAll()
    {
        if (Auth::check()) {
            $price = Service::with('phone')->get()->groupBy('services.name') ->first();
            return view('admin.price', ['price' => $price]);
        }

        else{
            return redirect ('/');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check()) {


            $item = new Prices();
            $item->service_id = $request->service_id;
            $item->name = $request->name;
            $item->price = $request->price;
            $item->time = '0';
            $item-> save();
            return redirect('/admin/cennik/')->with('sucess', 'Usługa w cenniku dodana prawidłowo');;
        }

        else{
            return redirect ('/');
        }

    }

    public function update(Request $request, $id)
    {
        $item = Prices::find($id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->save();
        return redirect('/admin/cennik')->with('sucess', 'Usługa w cenniku zedtydowana prawidłowo');;
    }

    public function destroy($id)
    {
        if (Auth::check()) {
            Prices::where(['id' => $id])->delete();
            return redirect('/admin/cennik/')->with('sucess', 'Usługa w cenniku usunięta prawidłowo');;
        }

        else{
            return redirect ('/');
        }

    }
}
