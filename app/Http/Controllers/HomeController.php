<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }

    public function about(){
        return view("About-Us");
    }

    public function contact(){
        return view("Contact-Us");
    }

    public function blog(){
        return view("blog");
    }

    public function menu(){
        return view("menu");
    }

    //checks the user type whether he is an admin or regular user 
    public function redirects(){
        $usertype = Auth::user()->usertype;
        if ($usertype=='1')
        {
            return view('admin.adminhome');
        }
        else{
            return view('home');
        }
    }
}

