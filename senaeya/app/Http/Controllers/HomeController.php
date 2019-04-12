<?php

namespace App\Http\Controllers;

use App\Shop;

class HomeController extends Controller
{

    public function index()
    {
        $shops = Shop::all();
        return $shops;
    }

}
