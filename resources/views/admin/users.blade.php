<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> users</title>
</head>
<body>
    

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
           .table-info{

            position:relative;
            top:60px;
            right:-150px


           }
           .table-style ,th ,td{
            border: 3px solid;
            color: pink;
           
            border-color:greenyellow;
           }


           </style>




        <div class="container-scroller">
    @include("admin.navbar")
    
   <div class="table-info" >
        <table class="table-style" >
            <tr>
                <th style="padding:30px">Name</th>
                <th style="padding:30px">E-mail</th>
                <th style="padding:30px">Action</th>
            </tr>
           @foreach ( $data as $data )
    

            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>


                @if ($data->usertype=="0")
                <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                
                @else
                <td><a >Not Allowed</a></td>
                @endif
                
            </tr>

            @endforeach
        </table>

   </div>




</div>
    
    
    @include("admin.adminscript")
    
         
       
        
      </body>
    </html>
    


</body>
</html>