<?php

namespace App\Http\Controllers;
use App\Models\HomeModel;

use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function home(){
        $HomeModel = new HomeModel();
            return view('home') -> with('content', $HomeModel-> content());
    }
    public function product_list(){
        $HomeModel = new HomeModel();
        return view('product') -> with('product_list', $HomeModel-> product_list());
    }
    public function profile(){
        $HomeModel = new HomeModel();
        return view('profile') -> with('profile', $HomeModel-> profile());
    }
}
