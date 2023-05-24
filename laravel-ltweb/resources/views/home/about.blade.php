@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

<section class="about_section layout_padding bg-white text-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="img/about-img.png" alt="" />
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="detail-box ">
            <div class="heading_container">
              <h2>Chứng tôi là Gryffindor</h2>
            </div>
            <p>
              Gryffindor xin chào !! Với những món ăn vặt sấy khô thì tại Gryffindor cung cấp đầy đủ những món như da heo tỏi ớt, nui sấy khô bò lá chanh, cơm cháy lắc khô, khô bò miếng, trái cây thực phẩm sấy khô, khoai lang sấy mix, khô mực, đậu hà lan wasabi… tất cả đều được chế biến và đóng gói rất chuyên nghiệp và cẩn thận, có nhãn hiệu, giúp bạn có thể yên tâm hơn khi mua những món ăn vặt được chế biến tại nhà mà không lo lo lắng về vệ sinh an toàn thực phẩm.
            </p>
            <a href="" style="text-decoration: none;"> Đọc thêm </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection