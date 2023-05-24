@extends('layouts.app')
@section('content')
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="img/about-img.png" alt="" style="height: 500px;">
          </div>
          <div class="col">
              <div class="billing-details">
               @include('contacts.messages') 
                <form id="checkout-form" action="{{route("storemessage")}}" class="clearfix" method="post">
                    @csrf
                    <div class="form-group mb-3">
                      <label class="form-label" for="name">Tên của bạn:</label>
                      <input class="input form-control" name="name" type="text" placeholder="Tên của bạn" data-sb-validations="required" />
                      <div class="invalid-feedback" data-sb-feedback="name:required">Yêu cầu nhập tên .</div>
                    </div>
                    <div class="form-group mb-3">
                      <label class="form-label" for="phone">Số điện thoại của bạn:</label>
                      <input class="input form-control" name="phone" type="tel" placeholder="Số điện thoại" data-sb-validations="required, tel" />
                      <div class="invalid-feedback" data-sb-feedback="phone:required">Yêu cầu nhập Số điện thoại.</div>
                      <div class="invalid-feedback" data-sb-feedback="phone:email">Số điện thoại không hợp lệ.</div>
                    </div>
                    <div class="form-group mb-3">
                      <label class="form-label" for="emailAddress">Email của bạn:</label>
                      <input class="input form-control" name="email" type="email" placeholder="Địa chỉ Email" data-sb-validations="required, email" />
                      <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Yêu cầu nhập Email.</div>
                      <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Địa chỉ Email không hợp lệ.</div>
                    </div>
                    <div class="form-group mb-3">
                      <label class="form-label" for="phone">Lời nhắn:</label>
                      <textarea class="input form-control" name="message" type="text" placeholder="Nội dung lời nhắn" style="height: 10rem;" data-sb-validations="required"></textarea>
                      <div class="invalid-feedback" data-sb-feedback="message:required">Yêu cầu nhập lời nhắn.</div>
                    </div>
        
                <div class="form-group d-grid">
                  <input class="input btn btn-warning btn-lg col-2 offset-5" type="submit" value="Gửi" >
                </div>
              </form>
              </div>
        </div>
        </div>
      </div>
    </div>

    @endsection