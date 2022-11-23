<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta Tags -->
    <meta name="description" content="{{ setting('description') }}">
    <meta name="author" content="Sushant Sapkota">

    <!-- Title-->
    <title>{{ config('app.name') }} - @yield('title', 'Page')</title>

    <!-- Styles -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('backend/css/materialadmin-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/materialadmin.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/libs/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/app.css') }}">

    <!-- Page Level Styles -->
    @stack('styles')
</head>
<style media="screen">
     
footer{
    position: buttom;
    bottom: 0;
    left: 0;
    
    right: 0;
    background-color: #9BC3E1;
    height: auto;
    width: 100vw;

    padding-top: 40px;
    color: #fff;
}
.footer-content{
    color: black;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    color: black;
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    color: black;
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 20px;
    color: #cacdd2;
}
.socials{
    color: black;
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}
.socials li{
    color: black;
    margin: 0 10px;
}
.socials a{
    color: black;
    text-decoration: none;
    color: #fff;
    border: 4.1px solid black;
    padding: 20px;

    border-radius: 50%;

}
.socials a i{
    color: black;
    font-size: 3.1rem;
    width: 40px;


    transition: color .4s ease;

}
.socials a:hover i{
    color: aqua;
}

.footer-bottom{
    color: black;   
    width: 100vw;
    padding: 20px;
padding-bottom: 40px;
    text-align: center;
}
.footer-bottom p{
float: left;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom p a{
  color:#44bae8;
  font-size: 16px;
  text-decoration: none;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
.footer-menu{
  float: right;

}
.footer-menu ul{
  display: flex;
}
.footer-menu ul li{
padding-right: 10px;
display: block;
}
.footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
}
.footer-menu ul li a:hover{
  color: #27bcda;
}
      
@media (max-width:500px) {
.footer-menu ul{
  display: flex;
  margin-top: 10px;
  margin-bottom: 20px;
}
}
    </style>
<body class="menubar-hoverable header-fixed menubar-pin themebackground">
    @if (auth()->guest())
        @yield('guest')
    @else
        <!-- BEGIN HEADER -->
        @include('backend.layouts.partials.header')
        <!-- END HEADER -->
        <!-- BEGIN BASE-->
        <div id="base">
            <div id="content">
                @yield('content')
            </div>

          
        </div>
        <div class="sidebar2">
        @include('backend.layouts.partials.menubar')
        </div>
        <footer>
        <div class="footer-content">
            <h1>Clinic Information Management System</h1>
            <h3>Upgrading Medicines, Upgrading Lives.</h3>
            
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
            <ul class="socials">
            
                <li><h3>CALL US:</h3><h4>09481701951</h4></li>
                <li><h3>EMAIL US:</h3><h4>MCIMS@gmail.com</h4></li>
            </ul>
            <ul class="socials">    
                <li><h3>OPEN HOURS:</h3><h4>9:00AM-4:00PM</h4></li>
                <li><h3>ADDRESS:</h3><h4>BRGY:Capalayan, Surigao City</h4></li>
            </ul>

        </div>
   

    </footer>
        <!-- END BASE -->
    @endif

    <!-- Global Script For Setting Session Messages and Active URL -->
    @include('backend.layouts.partials.global-script') 

    <!-- Scripts -->
    <script src="{{ asset('backend/js/libs/jquery/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/spin.js/spin.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/autosize/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/bootbox/bootbox.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/nanoscroller/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/App.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/AppNavigation.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/AppCard.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/AppForm.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/AppVendor.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/AppToast.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/AppBootBox.min.js') }}"></script>
    <script src="{{ asset('backend/js/app.js') }}"></script>

    <!-- Page Level Scripts -->
    @stack('scripts')
    
</body>
</html>