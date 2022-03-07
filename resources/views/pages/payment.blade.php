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
        <form action="" method="POST">
          @foreach($result as $order_info)
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
          <input class="date-use" type="text" name="" value="{{$order_info->date_use}}" readonly="readonly" />

          <label class="infomation">Thông tin liên hệ</label>
          <input class="cus-info" type="text" name="" value="{{$order_info->user_order}}" readonly="readonly" />


          <label class="phone-num">Số điện thoại</label>
          <input class="phone-cus-num" type="text" name="" value="{{$order_info->phone_number}}" readonly="readonly" />

          <label class="email-cus">Email</label>
          <input class="mail-cus-1" type="text" name="" value="{{$order_info->email}}" readonly="readonly" />
          @endforeach
          <img class="btn-date-pay" src="images/btn-datetime.svg" />
          <label class="num_cre">Số thẻ</label>
          <input class="number_credit" type="number" min="0" name="credit_number" placeholder="Số thẻ" />

          <label class="name_cre">Họ và tên chủ thẻ</label>
          <input class="name_credit" type="text" name="credit_number" placeholder="Họ và tên" />

          <label class="date_cre_end">Ngày hết hạn</label>
          <input class="date_end" type="datetime" name="datetime" placeholder="--/--/--" />

          <label class="numCVC">CVV/CVC</label>
          <input class="num_cre_cvc" type="password" maxlength="3" name="num_cvv" placeholder="CVV/CVC" />

          <input class="btn-payment" type="submit" value="Thanh toán" name="payment" />
        </form>
      </div>
@endSection