<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
@include("admin.navbar")

<style>
 .welcome{
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  position: relative;
  left: 260px;
  top: 50px;
 
 }

 .welc_img {
  width: 350px;
  height: 350px;
  position: relative;
  top: 150px;
  left: -200px;
 }
</style>

<h1 class="welcome"> Welcome to the admin Dashboard 👋</h1>
<img  class =" welc_img"src="images/hamburger.png" alt="image">

</div>
@include("admin.adminscript")

     
   
    
  </body>
</html>
