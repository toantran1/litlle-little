<!DOCTYPE html>
<html lang="en">
<head>
<base href="{{ asset('public/frontend/') }}/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
    <div class="header-container">
        <div class="wrapper-contact">
         <img src="images/Liên hệ.svg"/>
        </div>
    
      
        <div class="group_main-1-contact">
         
         @yield('contact_content')
         
        </div>
        <div class="group-main-2-contact">
            <img class="address-contact" src="images/address-vector.svg"/>
            <img class="address-icon" src="images/adress1.svg"/>
            <div class="address-content">
                <div class="content1"><p>Địa chỉ:</p></div>
                <div class="content2"><p>86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p></div>

            </div>
            <img class="email-contact" src="images/address-vector.svg"/>
            <img class="mail-icon" src="images/mail-inbox-app 1.svg"/>
            <div class="mail-content">
              <div class="content-mail-1"><p>Email:</p></div>
              <div class="content-mail-2"><p>investigate@your-site.com</p></div>

          </div>

            <img class="hotline" src="images/address-vector.svg"/>
            <img class="telephone" src="images/telephone 2.svg"/>
            <div class="phone-contact">
              <div class="content-phone-1"><p>Điện thoại:</p></div>
              <div class="content-phone-2"><p>+84 145 689 798</p></div>
            </div>
        </div>
       
    
      
          <img class="alex_AR" src="images/Alex_AR_Lay_Do shadow 1.svg" width="63%"/>
        
      </div>
    
      <div class="nav-container">
        <div class="wrapper">
          <nav>
            <div class="logo">
              <img src="images/little---little-logo--ngang--1@2x.png" width="180px" />
            </div>
            <ul class="nav-items">
              <li >
                <a  href="{{URL::to('/')}}">Trang chủ</a>
              </li>
              <li>
                <a href="#">Sự kiện</a>
              </li>
              <li class="main-home">
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