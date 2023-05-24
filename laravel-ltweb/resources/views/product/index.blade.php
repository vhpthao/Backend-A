@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

<div class="row">
  @foreach ($viewData['products'] as $product)
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
            class="text-white ">{{ $product ->getName() }}</a>
           <p class="text-white small mt-2">{{$product -> getPrice()}} VND</p>
        
        </h5>
       
      </div>
    </div>
  </div>
</div>
@endforeach
</div>

@endsection