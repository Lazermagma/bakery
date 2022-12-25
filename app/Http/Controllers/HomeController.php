<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Menu;
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
        $data = Menu::all();
        return view("menu",compact("data"));
    }

    public function blogs_data(){
        $data = blog::all();
        return view("blog",compact("data"));
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

