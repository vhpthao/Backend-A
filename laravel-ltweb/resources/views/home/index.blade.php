@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
 <!-- slider section -->
  
  <header>
    <div class="hero_area">
      <div class="bg-box ">
        <img src="img/hero-bg.jpg" alt="" />
      </div>
   <section class="slider_section">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-lg-6">
                  <div class="detail-box ms-5">
                    <h1> Ăn Vặt Nhà Gryffindor</h1>
                    <p>
                      Gryffindor xin chào !! Với những món ăn vặt sấy khô thì tại Gryffindor cung cấp đầy đủ những món như da heo tỏi ớt, nui sấy khô bò lá chanh, cơm cháy lắc khô, khô bò miếng, trái cây thực phẩm sấy khô, khoai lang sấy mix, khô mực, đậu hà lan wasabi… tất cả đều được chế biến và đóng gói rất chuyên nghiệp và cẩn thận, có nhãn hiệu, giúp bạn có thể yên tâm hơn khi mua những món ăn vặt được chế biến tại nhà mà không lo lo lắng về vệ sinh an toàn thực phẩm.
                    </p>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          
        </div>
   
  
  </section>
</div>
</header>  


  <!-- end slider section -->
{{-- </div> --}}

<!-- offer section -->

<section class="offer_section layout_padding-bottom">
  <div class="offer_container">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="img/o1.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>Thứ năm sale món</h5>
              <h6><span>20%</span> Off</h6>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="img/o2.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>Ngày nghỉ</h5>
              <h6><span>15%</span> Off</h6>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end offer section -->

<!-- food section -->

<section class="food_section layout_padding-bottom">
<div class="container">
<div class="heading_container heading_center mt-5">
  <h2>Thực đơn của chúng tôi</h2>
</div>
<div class="row">
  @foreach ($viewData['product'] as $product)
  <div class="col-sm-6 col-lg-3 my-3">
    <div class="box" style="border: 1px solid rgb(213, 213, 213);  background-color: #222831; border-radius: 5px">
      <div>
        <div class="">
          <img src="{{ asset('/storage/' . $product -> getImage()) }}"
          class="card-img-top img-card">
</div>
<div class="detail-box">
  <h5 class="p-1  text-center">
    <a href="{{ route('product.show', ['id' => $product -> getId()]) }}"
      class="text-white">{{ $product ->getName() }}</a>
     <p class="text-white small mt-2">{{$product -> getPrice()}} VND</p>
     
  </h5>
 
</div>
</div>
</div>
</div>
@endforeach
</div>
</div>
</section>
</div>
@endsection