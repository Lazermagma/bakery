<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Tasty &amp;amp; Fresh, Our Bakery offers classic, scratch-made baked goods for every occasion., Today&amp;apos;s Menu, Check our menu, Our Contact">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('nicepage.css') }}" media="screen">
<link rel="stylesheet" href="{{ asset('Home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400|Merriweather:300,300i,400,400i,700,700i,900,900i">
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
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
      <div class="u-custom-menu u-nav-container">
        <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" href="{{asset('home')}}" style="padding: 10px 8px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" href="{{asset('/About-Us')}}" style="padding: 10px 8px;">About Us</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" href="{{asset('/menu')}}" style="padding: 10px 8px;">Menu</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" href="{{asset('/our-blog')}}" style="padding: 10px 8px;">Blog</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-1 u-text-grey-90 u-text-hover-grey-90" href="{{asset('/Contact-Us')}}" style="padding: 10px 5px 10px 8px;">Contact Us</a>
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

<li class="u-nav-item" > 
  @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      @auth
          <li ><x-app-layout >
          </x-app-layout>
          </li>
      @else
          <li ><a href="{{ route('login') }}" class="u-button-style u-nav-link" >Log in</a></li>
  
          @if (Route::has('register'))
              <li ><a href="{{ route('register') }}" class="u-button-style u-nav-link" >Register</a></li>
          @endif
      @endauth
  @endif
</li>
</ul>
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


  {{-- ------------------End of navbar----------- --}}
    <section class="u-clearfix u-image u-shading u-section-1" id="carousel_64fb">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center-sm u-align-center-xs u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle-lg u-valign-middle-xs u-container-layout-1">
            <p class="u-text u-text-custom-color-2 u-text-1">
              <span style="font-weight: 700; font-size: 3rem;">myBakery</span>
             
              <span style="font-size: 3rem;">
                <span style="font-weight: 700;"></span>
              </span>
            </p>
            <h1 class="u-align-center-md u-align-center-xl u-custom-font u-font-merriweather u-text u-title u-text-2">Tasty &amp; Fresh</h1>
            <h4 class="u-align-center-md u-align-center-xl u-custom-font u-font-merriweather u-text u-text-3">Bakery</h4>
            <div class="u-border-3 u-border-palette-5-light-2 u-line u-line-horizontal u-line-1"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-5-light-1 u-section-2" id="carousel_9598">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-custom-font u-font-merriweather u-text u-text-1">Our Bakery offers classic, scratch-made baked goods for every occasion.</h2>
            <p class="u-align-center u-custom-font u-font-merriweather u-text u-text-2">We believe in the goodness of real food, made from scratch. We source only the finest ingredients and hand-craft our baked goods daily.</p>
            <div class="u-align-left u-border-3 u-border-custom-color-2 u-line u-line-horizontal u-line-1"></div>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-20 u-size-60-md">
                <div class="u-layout-row">
                  <div class="u-container-style u-image u-layout-cell u-left-cell u-size-60 u-image-1">
                    <div class="u-container-layout"></div>
                  </div>
                </div>
              </div>
              <div class="u-size-40 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-2">
                    <div class="u-container-layout">
                      <p class="u-custom-font u-font-merriweather u-text u-text-3">Our bakery and store-front hours are Monday-Friday 8:30-6:00pm and Saturday’s 10:00-2:00pm. Our phone and order hours are Monday-Friday 8:30-3:00pm and Saturday’s 10:00-2:00pm. Whether you are searching for a special
                                            birthday cake or simply looking for a sweet ending to an everyday meal, The Cake Shop offers something for everyone. This is a one of a kind bakery, where the aroma of home-style baking weakens even the strongest
                                            will. </p>
                    </div>
                  </div>
                  <div class="u-container-style u-expand-resize u-layout-cell u-right-cell u-size-40 u-layout-cell-3">
                    <div class="u-container-layout">
                      <img class="u-image u-image-2" src="images/pexelsphoto839220.jpg">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="carousel_f0db">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-1">
              <div class="u-container-layout"></div>
            </div>
            <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-container-style u-layout-cell u-size-20 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                <h2 class="u-align-center-xl u-custom-font u-font-merriweather u-text u-text-1">Today's Menu</h2>
                <p class="u-align-center-xl u-custom-font u-font-merriweather u-text u-text-grey-40 u-text-2">22 / Dec / 2022</p>
                <p class="u-align-center-xl u-custom-font u-font-merriweather u-text u-text-3">Delight in three layers of cake paired with two generous layers of filling. DeEtta's uses real buttercream, offers a variety of flavors and fillings, and tailors everything — from taste to design — to your personal preferences.</p>
                <div class="u-align-left u-border-3 u-border-grey-40 u-line u-line-horizontal u-line-1"></div>

                                                                              {{-- --------------Daily Menu----------- --}}
                <a href="/menu" class="u-btn u-button-style u-custom-font u-font-merriweather u-palette-5-light-1 u-btn-1">view menu</a>


              </div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-2">
              <div class="u-container-layout"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-expand-resize u-section-4" id="carousel_a0e3">
      <img class="u-expanded-width u-image u-image-1" src="images/pexelsphoto324028.jpg">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-custom-font u-font-merriweather u-text u-text-body-alt-color u-text-1">Check our Special menu</h2>
            <p class="u-custom-font u-font-merriweather u-text u-text-body-alt-color u-text-2">The Cake Shop offers something for everyone. This is a one of a kind bakery, where the aroma of home-style baking weakens even the strongest will. The Cake Shop offers a wide variety of freshly baked goods daily; gourmet cookies, fresh
                        apple cake, cheesecake slices, chocolate eclairs, strawberry torte, pound cake, lemon bars, decadent brownies, shortbread, and over 20 flavors of cupcakes that no one can resist.</p>

                              {{-- --------button linking to menu page------------- --}}

            <a href="/menu" class="u-border-none u-btn u-button-style u-custom-color-2 u-custom-font u-font-merriweather u-hover-custom-color-3 u-btn-1">Menu</a>

                               {{-- ------------------------------------------- --}}

          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-5-light-1 u-section-5" id="carousel_a1e7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-expand-resize u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout">
                  <img class="u-image u-image-1" src="images/pexelsphoto907142.jpeg">
                  <p class="u-custom-font u-font-merriweather u-text u-text-1">Danishes, muffins, and scones ... oh my! Start your morning off right with a sweet treat from our bakery. Need a little pick-me-up any time of day? Look no further than our delicious selection of cookies, brownies, macarons,
                                    eclairs, and other goodies.</p>
                </div>
              </div>
              <div class="u-container-style u-expand-resize u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout">
                  <p class="u-custom-font u-font-merriweather u-text u-text-2">There is nothing like the aroma and taste of freshly-baked bread. We use traditional methods (without additives or preservatives) to ensure the best taste and quality possible. You can find us working in the wee hours of
                                    the morning mixing, kneading, and making each loaf by hand.</p>
                  <div class="u-align-left u-border-3 u-border-custom-color-2 u-line u-line-horizontal u-line-1"></div>
                  <img class="u-expanded-width u-image u-image-2" src="images/pexelsphoto1028711.jpeg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-6" id="carousel_23e9">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-1">
              <div class="u-container-layout"></div>
            </div>
            <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <h2 class="u-custom-font u-font-merriweather u-text u-text-1">Our Contact</h2>
                <p class="u-custom-font u-font-merriweather u-text u-text-grey-40 u-text-2">65 el zamalek&nbsp;<br>Email: mybakery@gmail.com<br>010084569113
                </p>
                <p class="u-custom-font u-font-merriweather u-text u-text-3">Tuesday 6:30AM – 6:00PM<br>Wednesday 6:30AM – 6:00PM<br>Thursday 6:30AM – 6:00PM<br>Friday 6:30AM – 6:00PM<br>Saturday 6:30AM – 2:00PM<br>Sunday 8:00AM - 12:00PM<br>Monday CLOSED
                </p>
                <div class="u-border-3 u-border-grey-40 u-line u-line-horizontal u-line-1"></div>
                                                   
                                        {{-- ---------linking to contact us page----------- --}}
                <a href="/Contact-Us" class="u-border-none u-btn u-button-style u-custom-font u-font-merriweather u-hover-custom-color-3 u-palette-5-light-1 u-btn-1">contact us</a>



              </div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-2">
              <div class="u-container-layout"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-6597"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> All rights reserved © 2022&nbsp; myBakery</p>
      </div></footer>
    
       
    </section>
  
</body></html>