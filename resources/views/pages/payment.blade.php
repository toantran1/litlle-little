@extends('payment_layout')
@section('content_payment')
<?php

if (!function_exists('currency_format')) {

  function currency_format($number, $suffix = ' vnđ')
  {
    if (!empty($number)) {
      return number_format($number, 0, ',', '.') . "{$suffix}";
    }
  }
}
?>
<img src="images/Groupmain2.svg" width="400px" />
      <div class="content-payment-info">
        <form action="{{URL::to('insert_orderdetail')}}" method="POST">
        {{csrf_field()}}
          @foreach($result as $order_info)
          <input type="hidden" name="package_id" value="{{$order_info->package_id}}" readonly="readonly"/>
          <input type="hidden" name="package_name" value="{{$order_info->package_name}}" readonly="readonly"/>
          <input type="hidden" name="package_code" value="{{$order_info->package_code}}" readonly="readonly"/>
          <label class="money">Số tiền thanh toán</label>
          <input class="money-1" type="text" name="total_price" value="<?php
                                                                        $package_price = $order_info->package_price;
                                                                        $percent = $package_price * 0.01;
                                                                        $one_ticket = 180000;
                                                                        $quantity_ticket = $order_info->quantity_ticket;
                                                                        $total_price = $one_ticket * $percent * $quantity_ticket;
                                                                        echo currency_format($total_price);
                                                                        ?>" readonly="readonly" />


          <label class="total-quantity-ticket">Số lượng vé</label>
          <label class="ticket">Vé</label>
          <input class="total-ticket" type="text" name="quantity_ticket" value="{{$order_info->quantity_ticket}}" readonly="readonly" />


          <label class="date">Ngày sử dụng</label>
          <input class="date-use" type="text" name="date_use" value="{{$order_info->date_use}}" readonly="readonly" />

          <label class="infomation">Thông tin liên hệ</label>
          <input class="cus-info" type="text" name="username_order" value="{{$order_info->user_order}}" readonly="readonly" />


          <label class="phone-num">Số điện thoại</label>
          <input class="phone-cus-num" type="text" name="user_phone" value="{{$order_info->phone_number}}" readonly="readonly" />

          <label class="email-cus">Email</label>
          <input class="mail-cus-1" type="text" name="user_email" value="{{$order_info->email}}" readonly="readonly" />
          @endforeach
          <img class="btn-date-pay" src="images/btn-datetime.svg" />
          <label class="num_cre">Số thẻ</label>
          <input class="number_credit" type="number" min="0" name="credit_number" placeholder="Số thẻ" required/>

          <label class="name_cre">Họ và tên chủ thẻ</label>
          <input class="name_credit" type="text" name="username_credit" placeholder="Họ và tên" required/>

          <label class="date_cre_end">Ngày hết hạn</label>
          <input class="date_end" type="datetime" name="date_end" placeholder="dd/mm/yy" required/>

          <label class="numCVC">CVV/CVC</label>
          <input class="num_cre_cvc" type="password" minlength="3" maxlength="3" name="num_cvv" placeholder="CVV/CVC" required/>

          <input class="btn-payment" type="submit" value="Thanh toán" name="payment" />
        </form>
      </div>
@endSection