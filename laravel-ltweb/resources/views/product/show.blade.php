@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card mb-3">
<div class="row g-0">
<div class="col-md-4">
<img src="{{ asset('/storage/' . $viewData["product"]->getImage()) }}"
class="img-fluid rounded-start">
</div>
<div class="col-md-8">
<div class="card-body">
<h3 class="card-title" style="font-family: 'Georgia', cursive; font-size: 30px">
    
{{ $viewData['product']['name'] }}

</h3>
<h5> {{ $viewData['product']['price'] }} VND</h5>
<p class="card-text mt-3">{{ $viewData['product']['description'] }}</p>
<form method="POST" action="{{ route('cart.add', ['id' => $viewData['product'] -> getId()]) }}" >
    <div class="row ">
        @csrf
        <div class="col-auto">
            <div class="input-group col-auto">
                <div class="input-group-text">Số lượng</div>
                <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
            </div>
        </div>
        <div class="col-auto">
            <button class="btn btn-outline-success " type="submit">Thêm vào giỏ hàng</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
@endsection