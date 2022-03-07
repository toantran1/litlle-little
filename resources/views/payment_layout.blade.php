<?php

use Illuminate\Support\Facades\Session; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <base href="{{ asset('public/frontend/') }}/">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thanh Toán</title>
  <?php
  // $id = session::get('order_id');
  //     dd($id);
  ?>

  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
 
  <div class="nav-container">
    <div class="wrapper">
      <nav>
        <div class="logo">
          <img src="images/little---little-logo--ngang--1@2x.png" width="180px" />
        </div>
        <ul class="nav-items">
          <li>
            <a href="{{URL::to('/')}}">Trang chủ</a>
          </li>
          <li>
            <a href="#">Sự kiện</a>
          </li>
          <li>
            <a href="contact.html">Liên Hệ</a>
          </li>

        </ul>
        <div class="contact">
          <ul class="nav-items">
            <li class="vector-contact">
              <img src="images/Vector (Stroke).svg" />
            </li>
            <li>
              <a href="#">0123456789</a>
            </li>
          </ul>

        </div>
      </nav>

    </div>
  </div>

  <div class="header-container">
    <div class="wrapper-payment">
      <img src="images/Thanh toán.svg" />
    </div>


    <div class="group_main-1-payment">
      <img src="images/Group_3.svg" width="93%" />
      <!-- <div class="content-pay">
             <form action="" method="GET">
              
          
            </form>
         </div> -->

    </div>

    <div class="vector-bia-payment">
      <img src="images/Vector-bia-pay.svg" width="94.4px" />
    </div>

    <div class="group_main-2-payment">
    @yield('content_payment')
    </div>

    <div class="vector-info">
      <img src="images/info_vec1.svg" width="300px" />
    </div>
    <div class="ticket-vector">
      <img src="images/ticket-vect.svg" width="300px" />
    </div>
    <div class="trini">
      <img src="images/Trini_Arnold_Votay1 2.svg" width="210%" />
    </div>
  </div>
</body>

</html>