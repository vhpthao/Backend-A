<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" type="" />
    <title>@yield('title', 'Trang quản trị - Ăn vặt nhà Gryffindor')</title>
</head>

<body>
    <div class="row g-0">
        <nav class="navbar navbar-expand-lg bg-dark text-white">
            <div class="container-fluid ms-5">
              <a class="navbar-brand text-white" href="#">
                <img class="img-profile rounded-circle" src="{{ asset('/img/admin.jpg') }}" style=" width: 25px; height: 28px;">
                Quản Trị Nhà Gryffindor</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">Trang Chủ</a></li>
                  <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white">Sản phẩm</a></li>
                  <li><a href="{{ route('admin.message.index') }}" class="nav-link text-white">Liên hệ</a></li>

                </div>
              </div>
            </div>
          </nav>
    </div>
    <div class="g-0 m-5">
        @yield('content')
    </div>
    
    <div class="row g-0 col-1 mb-5 offset-5">
        <button class="btn btn-success"><a href="{{ route('home.index')}}" class="nav-link text-white">Quay lại</a></button>
    </div>

    <!-- footer -->
    <div class="copyright py-4 text-center text-white bg-dark">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    Gryffindor
                </a>
            </small>
        </div>
    </div>