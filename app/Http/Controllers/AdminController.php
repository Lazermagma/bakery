<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Menu;
class AdminController extends Controller
{
   public function user(){
      $data = user::all();
        return view("admin.users",compact("data"));
   }

   public function deleteuser($id){
      $data = user::find($id);
      $data->delete();
        return redirect()->back();
   }

   public function BakeryMenu(){

      $data = Menu::all();
      return view("admin.BakeryMenu",compact("data"));
   }
   public function upload(Request $request){

      $data = new Menu;

      $image = $request->image;
      // will give every image in the database a unique name 
      $imagename = time() . '.' . $image->getClientOriginalExtension();
      // then set the image into a folder called menuImage 
      $request->image->move('menuImage', $imagename);
      $data->image = $imagename;

      $data->title = $request->title;
      $data->price = $request->price;
      $data->description = $request->description;

      $data->save();
      return redirect()->back();
        
 }

 public function blog_update(){
      
     return view("admin.blog");
}

public function deleteMenu($id){
          $data = Menu::find($id);
          $data->delete();
          return redirect()->back();
}
public function updateMenu($id){
     $data = Menu::find($id);
     
     return view("admin.updateMenu",compact("data"));
}

public function update(Request $request ,$id){
     $data = Menu::find($id);

      $image = $request->image;
      // will give every image in the database a unique name 
      $imagename = time() . '.' . $image->getClientOriginalExtension();
      // then set the image into a folder called menuImage 
      $request->image->move('menuImage', $imagename);
      $data->image = $imagename;

      $data->title = $request->title;
      $data->price = $request->price;
      $data->description = $request->description;

      $data->save();
      return redirect()->back();
        
}

 public function upload_blog(Request $request){

     $data = new blog;

     $image = $request->image;
     // will give every image in the database a unique name 
     $imagename = time() . '.' . $image->getClientOriginalExtension();
     // then set the image into a folder called menuImage 
     $request->image->move('blogImage', $imagename);
     $data->image = $imagename;

     $data->title = $request->title;
     $data->text = $request->text;
     $data->category = $request->category;
     $data->dates = $request->dates;
    

     $data->save();
     return redirect()->back();
       
}


}
