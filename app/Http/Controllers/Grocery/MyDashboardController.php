<?php

namespace App\Http\Controllers\Grocery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class MyDashboardController extends Controller
{
    public function Dashboard(){

        $dashuser=Auth::user();
        // dd($dasuser);
        return view('dashboard2',compact('dashuser'));
    }

}
