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


    <style>

        section{
            padding:  40px 15%;
        }
        .bakeryMenu{
            /* background: #26262b; */
            height: 30%;
            width: 100%;
            right:-50px ;
            min-height: 100vh;
            display: grid;
            grid-template-columns: repeat(2, 2fr);
            align-items: center;
            grid-gap: 6rems;
        }
        
        .bakeryMenu-form {
            font-size: 50px;
            color: #fff;
            margin-bottom: 20px;
        }
       
        .Contact-form p{
            color: #c6c9d8bf;
            letter-spacing: 1px;
            line-height: 26px;
            font-size: 1.2rem;
            margin-bottom: 3.8rem;
        }
        
        .bakeryMenu-form span{
          color: #1d78e8; 
        }
        .bakeryMenu-form label{
            color: #1d78e8; 
        }7524f8
        .bakeryMenu-form form{
            position: relative;
        }
        .bakeryMenu-form form input,
        form textarea{
            width: 65%;
            padding: 17px;
            border: none;
            outline: none;
            background: #191919;
            color: #fff;
            font-size: 1.1rem;
            margin-bottom: 0.7rem;
            border-radius: 10px;
        }
        .bakeryMenu-form form select{
            width: 45%;
            padding: 17px;
            border: none;
            outline: none;
            background: #191919;
            color: #fff;
            font-size: 1.1rem;
            margin-bottom: 0.7rem;
            border-radius: 10px;
        }
        .bakeryMenu-form textarea{
            resize: none;
            height: 200px;
           
        }
        .bakeryMenu-form form .btn{
            display: inline-black;
             background: #1d78e8;
             font-size: 1.1rem;
             letter-spacing: 1px;
             text-transform: uppercase;
             font-weight: 600;
             border: 2px solid transparent;
             border-radius: 10px;
             width: 220px;
             transition: ease .20s;
             cursor: pointer;
        }		
        .bakeryMenu-form form .btn:hover{
            border: 2px solid #1d78e8;
            background: transparent;
            transform: scale(1.1);
        }
        @media (max-width: 1570px){
            section{
                padding: 80px 3%;
                transition: .2s;
            }
           
        }
        @media (max-width: 1000px){
            .bakeryMenu{
                grid-template-columns: 1fr;
            }
            .bakeryMenu-form {
                order: 2;
            }
           
        }
</style>


   <div class="container-scroller">
@include("admin.navbar")

   <div class="bakeryMenu-form">
    <form action="{{url('/upload_blog')}}" method="post"  enctype="multipart/form-data" class="upload_blog">
             
        @csrf

        <div>
            <label>Title</label>
            <input type="text" name="title" placeholder="Write title here" required>
        </div>
        <div>
        <label>text</label><br>
        <textarea  name="text" rows="30" cols="10"  placeholder="Write text here" required></textarea>
            {{-- <input type="text" name="text" placeholder="Write text here" required> --}}
        </div>
        <div>
            <label>Image</label>
            <input type="file" name="image"  required>
        </div>
        <div>
            <label>Category</label>
            <select name="category" id="category" required>
                <option value="Cake">Cake</option>
                <option value="Drink">Drink</option>
            </select>
        </div>
        <div>
            <label>Date</label>
            <input type="date" name="dates"  required>
        </div>
        <div>
            
            <input type="submit" value="Save" class="btn">
        </div>

    </form>
   </div>

</div>
@include("admin.adminscript")

     
   
    
  </body>
</html>
