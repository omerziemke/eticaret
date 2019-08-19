<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="{{config('app.locale')}}">
  <head>
    <meta charset="utf-8">
    <title>@yield('title',config('app.name'))</title>
    @include('kullanici.partials.head')
    @yield('head')
    <style>
      .div {
    
    float: left;
    display: inline-block;
    height: 250px;
    width: 250px;
    margin: 10px;
    margin-bottom: 180px;


}


.margin-alt{
  margin-top: 100px;
  margin-bottom: 100px;
}

.oturum-mt{
  margin-top: 50px;
  margin-bottom: 50px
}




#ana_div {


    margin-right: 10px;
    margin-left: 10px;
  
    
}
    </style>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
 
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions"> <a href="{{route('kullanici.oturumac')}}">Giris & Kaydol</a>
                    <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#"><img src="{{asset('images/flag/usa.svg')}}"> USD</a></li>
                        <li><a href="#"><img src="{{asset('images/flag/singapore.svg')}}"> SGD</a></li>
                        <li><a href="#"><img src="{{asset('images/flag/japan.svg')}}"> JPN</a></li>
                      </ul>
                    </div>
                    <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Japanese</a></li>
                        <li><a href="#">Chinese</a></li>
                      </ul>
                    </div>
                     <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        
                        <li><a href="#">Sepetim</a></li>
                       
                        <li><a href="{{route('kullanici.cikis')}}">Cıkış</a></li>
                       
                      </ul>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
     @include('kullanici.partials.navbar')
    </header>
     <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      </div>
    </div>
     @yield('content')
     @include('kullanici.partials.footer')

    <!-- JS Library-->
    @include('kullanici.partials.script')
    @yield('footer')
  </body>
</html>