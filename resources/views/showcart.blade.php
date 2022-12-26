
<base href="/public">
<link rel="stylesheet" href="{{asset('nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('about-Us.css')}}" media="screen">
    <link rel="stylesheet" href="bakeryMenu/style.css">
   
    <script class="u-script" type="text/javascript" src="{{asset('jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('nicepage.js')}}" defer=""></script>
    <meta name="generator" content="bakery shop">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
  
    
    <script type="application/ld+json">{
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": ""
  }</script>
      <meta name="theme-color" content="#478ac9">
      <meta property="og:title" content="Contact Us">
      <meta property="og:type" content="website">
    </head>
    <body class="u-body u-xl-mode" data-lang="en">
      <header class="u-clearfix u-header u-header" id="sec-433c"><div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
    </g></svg>
            </a>
          </div>
  
  
          <style>
  
            .navbar-space{
              position: relative;
               left:100px;
            }
          </style>
          <div class="navbar-space">
          <div class="u-custom-menu u-nav-container">
            
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1" ><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" href="{{asset('home')}}" style="padding: 10px 8px;">Home</a>
    </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" href="{{asset('/About-Us')}}" style="padding: 10px 8px;">About Us</a>
    </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" href="{{asset('/menu')}}" style="padding: 10px 8px;">Menu</a>
    </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" href="{{asset('/our-blog')}}" style="padding: 10px 8px;">Blog</a>
    </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" href="{{asset('/Contact-Us')}}" style="padding: 10px 5px 10px 8px;">Contact Us</a>
    </li>
    <li class="u-nav-item" style="">
      
  
      <style>
                 .cart-color:hover{
                   color: orange;
                 }
                 .cart-color{
                   font-weight: 500;
                 }
      </style>
      <table class="cart-color">
        <tr> 
         <td><i class="fa-solid fa-cart-shopping" "></i></td>
         <td>
           
          @auth
          <a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" style="padding: 10px 5px 10px 8px;  " href="{{url('/showcart',Auth::user()->id)}}">
            Cart[{{$count}}]
           </a>
            @endauth
          @guest
           <a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" style="padding: 10px 5px 10px 8px;  "> Cart[0]</a>
          @endguest
          
         
         
         </a>
         
         </td>
        </tr>
       </table>
      
  
    </li>
    
    
    <li class="u-nav-item" > 
      @if (Route::has('login'))
      
          @auth
              <li class="u-nav-item"><x-app-layout>
      
              </x-app-layout>
              </li>
          @else
              <li class="u-nav-item"><a href="{{ route('login') }}" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" style="padding: 10px 8px;">Log in</a></li>
      
              @if (Route::has('register'))
                  <li class="u-nav-item"><a href="{{ route('register') }}" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" style="padding: 10px 8px;">Register</a></li>
              @endif
          @endauth
      
      @endif
    </li>
    
    
    
    </ul>
          </div>
          
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{asset('/home')}}">Home</a>
    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{asset('/About-Us')}}">About Us</a>
    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{asset('/menu')}}">Menu</a>
    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{asset('/our-blog')}}">Blog</a>
    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{asset('/Contact-Us')}}">Contact Us</a>
    </li>
    <li class="u-nav-item" style="">
      
  
      <style>
                 .cart-color2:hover{
                   color: orange;
                 }
                 .cart-color2{
                   font-weight: 500;
                   color: white;
                  position: relative;
                  left: 10px;
                  font-weight: 500;
                 }
                
      </style>
      <table class="cart-color2">
        <tr> 
         <td><i class="fa-solid fa-cart-shopping" "></i></td>
         <td>
           
           @auth
         <a class="u-button-style u-nav-link" style="padding: 10px 5px 10px 8px;  " href="{{url('/showcart',Auth::user()->id)}}">
           Cart[{{$count}}]
          </a>
           @endauth
         @guest
          <a class="u-button-style u-nav-link" style="padding: 10px 5px 10px 8px;  "> Cart[0]</a>
         @endguest
         
         
         
         
         </td>
        </tr>
       </table>
      
  
    </li>
    
    <li> 
      @if (Route::has('login'))
      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
          @auth
              <li class="u-nav-item"><x-app-layout >
              </x-app-layout>
              </li>
          @else
              <li class="u-nav-item"><a href="{{ route('login') }}" class="u-button-style u-nav-link" >Log in</a></li>
      
              @if (Route::has('register'))
                  <li class="u-nav-item"><a href="{{ route('register') }}" class="u-button-style u-nav-link" >Register</a></li>
              @endif
          @endauth
      @endif
    </li>
    </ul>
   </div>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        
          <p class="u-text u-text-default u-text-1">
            <span style="font-weight: 700;">myBakery</span>
            
            <span style="font-weight: 700;"></span>
          </p>
      </div></header>
       {{-- ---------------End of navbar section----------------- --}}


       <style>

    .table-style{
        position: relative;
        left: 400px;
        border: 2px solid;
        background-color: rgb(251, 251, 251);
    }
       </style>
<section>
    <table class="table-style" >
    
        <tr>
            <th  style="padding: 30px;">Name</th>
            <th style="padding: 30px;">Price</th>
            <th style="padding: 30px;">Quantity</th>
            <th style="padding: 30px;">Image</th>
        </tr>
    @foreach ($data as $data )

    <tr>
        <td style="padding: 30px;">{{$data->title}}</td>
        <td style="padding: 30px;">{{$data->price}}</td>
        <td style="padding: 30px;">{{$data->quantity}}</td>
        <td style="padding: 30px; width:200px; height:200px;">
             <img src="menuImage/{{$data->image}}" alt="img"> 
             
           
        </td>
    </tr>
        
    @endforeach
    </table>
</section>



       {{-- footer section --}}
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-6597"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> All rights reserved © 2022&nbsp; myBakery</p>
      </div>
    </footer>
    
</body>
</html>