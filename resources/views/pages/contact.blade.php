@extends('contact_layout')
@section('contact_content')
<img src="images/Groupmain1.svg" width="90%"/>
          <div class="contact-info">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.</p>
            <form active="" method="">
              <input class="name" type="text" name="contact_name" placeholder="Tên"/>
              <input class="email" type="email" name="contact_email" placeholder="Email"/>
              <input class="phone" type="text" name="contact_phone" placeholder="Số điện thoại"/>
              <input class="address-ct" type="text" name="custome_address" placeholder="Địa chỉ"/>
              <textarea rows="5" cols="71" class="subject" style="resize: none;" type="text" name="content-cus" placeholder="Lời nhắn"></textarea>

              <input class="btn-send" type="submit" value="Gửi liên hệ" name="send" />
            </form>
   
          </div>
@endSection