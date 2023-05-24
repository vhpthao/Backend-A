<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css.login.css')}}" rel="stysheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title', 'Ăn vặt nhà Gryffindor')</title>
   
</head>

<body style="margin-top: 0">
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark py-4" style="background-color: #222831">
      
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index')}}" style="font-size: 30px">Gryffindor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('home.index') }}">Trang chủ</a>
                    <a class="nav-link active" href="{{ route('product.index') }}">Sản phẩm</a>
                    <a class="nav-link active" href="{{ route('cart.index') }}">Giỏ hàng</a>
                    <a class="nav-link active" href="{{ route('contacts.show') }}">Liên hệ</a>
                    <a class="nav-link active" href="{{ route('home.about') }}">Về chúng mình</a>
                    <a class="nav-link active" href="{{ route('user.index') }}">Người dùng</a>
                    <div class="vr bg-white x-2 d-none d-lg-block"></div>
                    @guest 
                    <a class="nav-link active" href="{{ route('login') }}">Đăng nhập</a>
                    <a class="nav-link acitve" href="{{ route('register') }}">Đăng ký</a>
                    @else
                    <a class="nav-link active" href="{{route('myaccount.orders') }}">Hóa đơn của tôi</a>
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">Đăng Xuất</a>
                        @csrf 
                    </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    
     

    <div class="container my-4">
        @yield('content')
    </div>
    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-col">
            <div class="footer_contact">
              <h4>Liên hệ với chúng tôi</h4>
              <div class="contact_link_box">
                <a href="" class="text-light btn hovera">
                  <i class="fa-sharp fa-solid fa-location-dot" aria-hidden="true"></i>
                  
                  <span> Địa chỉ </span>
                </a>
                <a href="" class="text-light btn hovera">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span> SĐT: 0123456789 </span>
                </a>
                <a href="" class="text-light btn hovera">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span> thegioiamthuc@gmail.com </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 footer-col">
            <div class="footer_detail">
              <a href="" class="footer-logo" style="text-decoration: none;"> Gryffindor </a>
              <p>
                Cần thiết, làm cho điều này trở thành máy phát điện thực sự đầu
                tiên trên Internet. Nó sử dụng một từ điển gồm hơn 200 từ tiếng
                Latinh, kết hợp với
              </p>
              <div class="footer_social">
                <a href="" class="text-dark btn hovera">
                  <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="" class="text-dark btn hovera">
                  <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="" class="text-dark btn hovera" >
                  <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                </a>
                <a href="" class="text-dark btn hovera">
                  <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="" class="text-dark btn hovera">
                  <i class="fa-brands fa-pinterest" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 footer-col">
            <h4>Khung giờ mở của</h4>
            <p>Mỗi ngày</p>
            <p>10.00 Am -10.00 Pm</p>
          </div>
        </div>
        <div class="footer-info">
          <p>
            Copyright - Gryffindor
          </p>
        </div>
      </div>
    </footer>
    <!-- footer section -->
  </body>
  
  </html>