<?php use App\PackageTicket; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<base href="{{ asset('public/frontend/') }}/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome </title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    
    
</head>
<body>
  <div class="header-container">
    <div class="wrapper">
        <div class="logo-ds">
            <img src="images/image-2@2x.png"/>
        </div>
        <div class="content">
          <!-- <h2>ĐẦM SEN PARK</h2> -->
          <img class="damsen" src="images/ĐẦM SEN.svg"/>
          <img class="park" src="images/PARK.svg"/>
        </div>
    </div>

    <div class="khinhcau1">
      <img src="images/v194_408.png" width="140px"/>
    </div>
    <div class="khinhcau2">
      <img src="images/18451--converted--03-2@2x.png" width="140px"/>
    </div>
    <div class="khinhcau3">
      <img src="images/18451--converted--02-1@2x.png" width="70px"/>
    </div>
    <div class="khinhcau4">
      <img src="images/18451--converted--05-1@2x.png" width="150px"/>
    </div>
    <div class="khinhcau5">
      <img src="images/18451--converted--04-1@2x.png" width="150px"/>
    </div>
    <div class="group_main-1">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. 
        Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis molestie lectus consequat a.</p>
      <img src="images/Groupmain1.svg" width="90%"/>
      <div class="vector-star1">
        <img src="images/star-vector.svg"/>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
      <div class="vector-star2">
        <img src="images/star-vector.svg"/>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
      <div class="vector-star3">
        <img src="images/star-vector.svg"/>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
      <div class="vector-star4">
        <img src="images/star-vector.svg"/>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
      
    </div>
   <div class="render-fix-hair-1">
     <img src="images/render-fix-hair-1@1x.png" width="85%"/>
   </div>
   <div class="vector-bia">
    <img src="images/Vector-bia.svg" width="88.9px"/>
  </div>
    <div class="group_main-2">
    <img src="images/Groupmain2.svg" width="341px"/>    
    @yield('content')
    </div>
    
    <div class="vector-datve">
      <img src="images/vector-datve1.svg" width="230px"/>
    </div>
   
   

    <div class="lisa">
      <img src="images/lisa-arnold-lay-do-f2-3@1x.png" width="63%"/>
    </div>
  </div>

  <div class="nav-container">
    <div class="wrapper">
      <nav>
        <div class="logo">
          <img src="images/little---little-logo--ngang--1@2x.png" width="180px" />
        </div>
        <ul class="nav-items">
          <li class="main-home">
            <a  href="{{URL::to('/')}}">Trang chủ</a>
          </li>
          <li>
            <a href="event.html">Sự kiện</a>
          </li>
          <li>
            <a href="{{URL::to('/contact')}}">Liên Hệ</a>
          </li>
 
        </ul>
        <div class="contact">
          <ul  class="nav-items">
            <li class="vector-contact">
              <img src="images/Vector (Stroke).svg"/>
            </li>
            <li>
              <a href="#">0123456789</a>
            </li>
          </ul> 
            
        </div>
      </nav>
      
    </div>
  </div>

 </body>
</html>