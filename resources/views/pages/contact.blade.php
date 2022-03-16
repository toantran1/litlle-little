@extends('contact_layout')
@section('contact_content')
<img src="images/Groupmain1.svg" width="90%"/>
          <div class="contact-info">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.</p>
            <form action="{{URL::to('send-recommend')}}" method="POST">
            {{csrf_field()}}
              <input class="name" type="text" name="contact_name" placeholder="Tên" required/>
              <input class="email" type="email" name="contact_email" placeholder="Email" required/>
              <input class="phone" type="number" name="contact_phone" placeholder="Số điện thoại" required/>
              <input class="address-ct" type="text" name="cus_address" placeholder="Địa chỉ" required/>
              <textarea rows="5" cols="71" class="subject" style="resize: none;" type="text" name="message_cus" placeholder="Lời nhắn" required></textarea>

              <button class="btn-send" type="submit" name="send">Gửi liên hệ</button>
            </form>
   
          </div>
@endSection