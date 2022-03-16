<!DOCTYPE html>
<html lang="en">
<head>
<base href="{{ asset('public/frontend/') }}/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sự kiện</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
  <div class="header-container">
   @yield('content')
  </div>


    <div class="nav-container">
        <div class="wrapper">
          <nav>
            <div class="logo">
              <img src="images/little---little-logo--ngang--1@2x.png" width="180px" />
            </div>
            <ul class="nav-items">
              <li>
                <a  href="{{URL::to('trang-chu')}}">Trang chủ</a>
              </li>
              <li class="main-home">
                <a href="{{URL::to('event')}}">Sự kiện</a>
              </li>
              <li>
                <a href="{{URL::to('contact')}}">Liên Hệ</a>
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
  

 
</body>
</html>