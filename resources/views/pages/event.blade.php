@extends('event_layout')
@section('content')
<img class="phu-kien1" src="images/co1.svg"/>
    <img class="phu-kien2" src="images/co2.svg"/>
    <img class="phu-kien3" src="images/phukien3.svg" width=""/>
    <img class="title-evt" src="images/Sự kiện nổi bật.svg"/>

    
    <div class="group_event">
      <div class="event1">
        <img class="ticket-img" src="images/event1.svg"/>
        <div class="body_content">
          <h4 class="card-title">Sự Kiện 1</h5>           
          <h5 class="card-title">Đầm Sen Park</h5>
          <img class="" src="images/Vector-calendar.svg"/>
          <h6 class="card-title">30/5/2022 - 1/06/2022</h6>
          <p class="card-text">25.0000 VND</p>  

          <a href="{{URL::to('/event-detail')}}" class="btn-detail">Xem chi tiết</a>
      </div>
      </div>

      <div class="event1" style= "margin-left:250px;">
        <img class="ticket-img" src="images/event1.svg"/>
        <div class="body_content">
          <h4 class="card-title">Sự Kiện 1</h5>           
          <h5 class="card-title">Đầm Sen Park</h5>
          <img class="" src="images/Vector-calendar.svg"/>
          <h6 class="card-title">30/5/2022 - 1/06/2022</h6>
          <p class="card-text">25.0000 VND</p>  
          <a href="{{URL::to('/event-detail')}}" class="btn-detail">Xem chi tiết</a>
      </div>
      </div>

      <div class="event1" style= "margin-left:500px;">
        <img class="ticket-img" src="images/event1.svg"/>
        <div class="body_content">
          <h4 class="card-title">Sự Kiện 1</h5>           
          <h5 class="card-title">Đầm Sen Park</h5>
          <img class="" src="images/Vector-calendar.svg"/>
          <h6 class="card-title">30/5/2022 - 1/06/2022</h6>
          <p class="card-text">25.0000 VND</p> 
          <a href="{{URL::to('/event-detail')}}" class="btn-detail">Xem chi tiết</a> 
      </div>
      </div>

      <div class="event1" style= "margin-left:750px;">
        <img class="ticket-img" src="images/event1.svg"/>
        <div class="body_content">
          <h4 class="card-title">Sự Kiện 1</h5>           
          <h5 class="card-title">Đầm Sen Park</h5>
          <img class="" src="images/Vector-calendar.svg"/>
          <h6 class="card-title">30/5/2022 - 1/06/2022</h6>
          <p class="card-text">25.0000 VND</p>  
          <a href="{{URL::to('/event-detail')}}" class="btn-detail">Xem chi tiết</a>
      </div>
      </div>

      <img class="pre_btn" src="images/previous btn.svg"/>
      <img class="next_btn" src="images/next btn.svg"/>
    </div>
@endSection