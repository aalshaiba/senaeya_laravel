<?php

namespace App\Http\Controllers;

use App\User;

class DashboardController extends Controller
{


    public function userShops() {
        if (auth()->guest()) {
            return view('welcome');

        } else {
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('welcome')->with('shops', $user->shops);
        }

    }
}
