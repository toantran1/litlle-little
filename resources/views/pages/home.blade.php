@extends('welcome')
@section('content')
<?php use Illuminate\Support\Facades\Session; ?>
<div class="content-info">
        <form method="POST" action="{{URL::to('order-ticket')}}">
        {{csrf_field()}}
        
          <select class="combo" name="package">
            <option value="0">--Chọn gói vé--</option>
            @foreach($packageTicket as $package)
           
            <option value="{{ $package->package_id}}">{{ $package->package_name}} </option>
            @endforeach
          </select>
          
            <img class="btn-combo" src="images/btn-date.svg"/>
            <img class="btn-date" src="images/btn-datetime.svg"/>
          
          <input class="quantity-ticket" type="number" min="0" name="quantity_ticket" placeholder="Số lượng vé" required/>
          <input class="date-book" type="date" name="date_book" placeholder="Ngày đặt vé" required/>
          <input class="name" type="text" name="username_order" placeholder="Họ và Tên" required/>
          <input class="phone" type="number" min="0" name="phone" placeholder="Số điện thoại" required/>
          <input class="mail" type="email" name="email" placeholder="Địa chỉ email" required/>

          <input class="btn-ticket" type="submit" value="Đặt vé" name="get-ticket" />
        </form>
      </div>
@endSection