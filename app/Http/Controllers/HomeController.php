<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(){

        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();
        return view("home",compact('count'));
    }

    public function about(){
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();
        return view("About-Us",compact("count"));
    }

    public function contact(){
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();
        return view("Contact-Us",compact("count"));
    }

    public function blog(){
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();
        return view("blog",compact("count"));
         
    }

    public function menu(){
        $data = Menu::all();
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();
        return view("menu",compact("data","count"));
    }

    public function blogs_data(){
        $data = blog::all();
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();
        return view("blog",compact("data","count"));
    }

    //checks the user type whether he is an admin or regular user 
    public function redirects(){
        $usertype = Auth::user()->usertype;
        if ($usertype=='1')
        {
            return view('admin.adminhome');
        }
        else{

            $user_id = Auth::id();
            $count = Cart::where('user_id', $user_id)->count();


            return view('home',compact('count'));
        }
    }

public function addcart(Request $request,$id){

    if(Auth::id()){

            $user_id = Auth::id();
            $foodid = $id;
            $quantity = $request->quantity;

            $cart = new Cart;
            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;

            $cart->save();

            return redirect()->back();
    }
    else{
            return redirect('/login');
    }
}



}

