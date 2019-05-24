<?php

namespace App\Http\Controllers;

use App\Shop;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ShopsController extends Controller
{

    public function index()
    {

        $query = Input::get('q');
        $result = Shop::query()
            ->where('name', 'LIKE', "%" . $query . "%")
            ->orWhere('address', 'LIKE', "%" . $query . "%")->get();

        return view('pages.shops')->with('shops', $result);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add');
    }

    public function store(Request $request)
    {
//        $this->validate($request, [
//            'workshop_name' => 'required',
//            'workshop_number' => 'required',
//            'workshop_address' => 'required',
//            'workshop_url' => 'required'
//        ]);

        $shop = new Shop();
        $shop->name = request('workshop_name');
        $shop->address = request('workshop_address');
        $shop->url = request('workshop_url');
        $shop->number = request('workshop_number');
        $shop->promotions = request('promotions');
        $shop->services = request('workshop_services');
        $shop->car_models = request('car_models');
        if (request('categories') === null) {
            $shop->categories = null;
        } else {
            $shop->categories = implode(",", request('categories'));
        }
        $shop->mobile = request('workshop_mobile_number');
        $shop->user_id = auth()->user()->id;
        $shop->save();

        return redirect('/')->with('success', 'Shop created');

    }

    public function show($id)
    {
        $shop = Shop::find($id);
        return view('pages.confirm_deletion')->with('shop', $shop);
    }


    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('pages.edit')->with('shop', $shop);
    }


    public function update(Request $request, Shop $shop)
    {
//        $this->validate($request, [
//            'workshop_name' => 'required',
//            'workshop_number' => 'required',
//            'workshop_address' => 'required',
//            'workshop_url' => 'required'
//        ]);

        $shop->name = $request->workshop_name;
        $shop->url = $request->workshop_url;
        $shop->address = $request->workshop_address;
        $shop->number = $request->workshop_number;
        $shop->promotions = $request->promotions;
        $shop->services = $request->workshop_services;
        $shop->car_models = $request->car_models;
        if (request('categories') === null) {
            $shop->categories = null;
        } else {
            $shop->categories = implode(",", request('categories'));
        }
        $shop->mobile = $request->workshop_mobile_number;
        $shop->save();
        return redirect('/')->with('update', 'Shop Updated');
    }


    public function destroy(Shop $shop)
    {
        $shop->delete();
        return redirect('/')->with('error', 'Shop Deleted');
    }

    public function goingBack()
    {
        return redirect('/');
    }

    public function name()
    {
        return view('pages.name_view');
    }

    public function change_name()
    {

        $user = User::find(Auth::user()->id);
        $user->name = request('name');
        $user->save();
        return redirect('/');
    }

    public function link_existing()
    {
        return view('pages.link_business');
    }

}
