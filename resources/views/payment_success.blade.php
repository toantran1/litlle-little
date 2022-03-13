<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ asset('public/frontend/') }}/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
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
                <a  href="{{URL::to('/')}}">Trang chủ</a>
              </li>
              <li>
                <a href="#">Sự kiện</a>
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

      <div class="header-container">
        <div class="wrapper-payment-success">
            <img src="images/Thanh toán thành công.svg"/>
        </div>
    
      
        <div class="group_payment_success">         
          <img src="images/Group_border.svg" width="85%"/>
            @foreach($order_detail as $get_data)
            <form action ="{{URL::to('send-mail')}}" method="GET">
          <div class="border-ticket" style="text-align: center;">
              <img class="ticket-img" src="images/QRcode.svg"/>
              <div class="ticket-body">
                <h4 class="card-title">{{$get_data->package_code}}</h5>
                <h5 class="card-title">VÉ CỔNG</h5>
                <h6 class="card-title">{{$get_data->package_name}}</h6>
                <p class="card-text">Ngày sử dụng: {{$get_data->date_use}}</p>
                
            </div>
            <img class="green-tick" src="images/tick 1.svg">
          </div>
          <div class="border-ticket" style="text-align: center; margin-left:215px">
            <img class="ticket-img" src="images/QRcode.svg"/>
            <div class="ticket-body">
            <h4 class="card-title">{{$get_data->package_code}}</h5>
                <h5 class="card-title">VÉ CỔNG</h5>
                <h6 class="card-title">{{$get_data->package_name}}</h6>
                <p class="card-text">Ngày sử dụng: {{$get_data->date_use}}</p>
              
          </div>
          <img class="green-tick" src="images/tick 1.svg">
        </div>

        <div class="border-ticket" style="text-align: center; margin-left:430px">
            <img class="ticket-img" src="images/QRcode.svg"/>
            <div class="ticket-body">
            <h4 class="card-title">{{$get_data->package_code}}</h5>
                <h5 class="card-title">VÉ CỔNG</h5>
                <h6 class="card-title">{{$get_data->package_name}}</h6>
                <p class="card-text">Ngày sử dụng: {{$get_data->date_use}}</p>
              
          </div>
          <img class="green-tick" src="images/tick 1.svg">
        </div>

        <div class="border-ticket" style="text-align: center; margin-left:645px">
            <img class="ticket-img" src="images/QRcode.svg"/>
            <div class="ticket-body">
            <h4 class="card-title">{{$get_data->package_code}}</h5>
                <h5 class="card-title">VÉ CỔNG</h5>
                <h6 class="card-title">{{$get_data->package_name}}</h6>
                <p class="card-text">Ngày sử dụng: {{$get_data->date_use}}</p>
              
          </div>
          <img class="green-tick" src="images/tick 1.svg">
        </div>

        <p class="text-date">Số lượng: {{$get_data->quantity_ticket}} vé</p>
        <p class="page">Trang 1/3</p>

        

        <a href="{{URL::to('/download-ticket')}}" class="btn-download"><p class="cnt_value">Tải về</p></a>
        <input class="btn-sendmail" type="submit" value="Gửi mail" name="" />
            </form>
            @endforeach
        </div>
     
       
        
 
        <div class="alvin">
          <img src="images/Alvin_Arnold_Votay1 1.svg"/>
        </div>
        <img class="pre_btn" src="images/previous btn.svg"/>
        <img class="next_btn" src="images/next btn.svg"/>

        
      </div>
</body>
</html>