<?php use Illuminate\Support\Facades\Session; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Thông tin vé của bạn</title>
</head>
<body>
    <?php
     $name = Session::get('username');
     $qty = Session::get('qty_ticket');
     $code = Session::get('Code_ticket');
     $name_pac = Session::get('package_name_ticket');
     $dateUse = Session::get('date');
     $total_price = Session::get('price');
    ?>
    
    <h1>Thông tin vé của bạn</h1>
    <p>Họ và Tên: <b><?php echo $name; ?></b>. </p>
    <p>Gói:  <b><?php echo $name_pac; ?></b>. </p>
    <p>Số lượng:  <b><?php echo $qty; ?>  vé</b>.</p>
    <p>Mã vé:  <b><?php echo $code; ?> </b>.</p>
    <p>Ngày sử dụng:  <b><?php echo $dateUse; ?> </b>.</p>
    <p>Tổng tiền:  <b><?php echo $total_price; ?> </b>.</p>

</body>
</html>