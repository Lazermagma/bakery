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

   <div>
    <form action="">
        <div>
            <label>Title</label>
            <input type="text" name="title" placeholder="Write title here" required>
        </div>
        <div>
            <label>Price</label>
            <input type="num" name="price" placeholder="Write price here" required>
        </div>
        <div>
            <label>Image</label>
            <input type="file" name="image"  required>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Write description here" required>
        </div>
        <div>
            
            <input type="submit" value="Save">
        </div>

    </form>
   </div>

</div>
@include("admin.adminscript")

     
   
    
  </body>
</html>
