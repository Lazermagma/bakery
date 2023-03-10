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
            grid-template-columns: repeat(1, 2fr);
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
          color: #7524f8; 
        }
        .bakeryMenu-form label{
            color: #7524f8; 
        }
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
        .bakeryMenu-form textarea{
            resize: none;
            height: 200px;
        }
        .bakeryMenu-form form .btn{
            display: inline-black;
             background: #7524f8;
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
            border: 2px solid #7524f8;
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
    <form action="{{url('/upload_BakeryMenu')}}" method="post"  enctype="multipart/form-data" class="bakeryMenu">
             
        @csrf

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
            
            <input type="submit" value="Save" class="btn">
        </div>

    </form>
   </div>
                 {{-- table styling --}}
   <style>
    .table-info{

     position:relative;
     top:150px;
    left: 20px;
    width: 500px;


    }
    .table-style ,th ,td{
     border: 3px solid;
     color: pink;
    
     border-color:greenyellow;
    }


    </style>
      
      
      {{-- end of table styling --}}


      <div class="table-info">
<table class="table-style">
    
    <tr>
        <th style="padding:30px">title</th>
        <th style="padding:30px">price</th>
        <th style="padding:30px">image</th>
        <th style="padding:30px">descritption</th>
    </tr>

    @foreach ( $data as $data )
    

    <tr align="center">
        <td>{{$data->title}}</td>
        <td>{{$data->price}}</td>
        <td><img src="menuImage/{{$data->image}}" style="width: 100px; height: 100px;"></td>
        <td>{{$data->description}}</td>
        <td><a href="{{url('/deleteMenu',$data->id)}}">Delete</a></td>
        <td><a href="{{url('/updateMenu',$data->id)}}">Update</a></td>
        
        
       
        
    </tr>

    @endforeach

</table>
</div>


@include("admin.adminscript")

     
   
    
  </body>
</html>
