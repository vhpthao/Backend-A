@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
@forelse ($viewData["orders"] as $order)
<div class="card mb-4">
<div class="card-header">
Hóa đơn {{ $order->getId() }}
</div>
<div class="card-body">
{{-- insert code card-body --}}
<b>Ngày mua:</b> {{ $order->getCreatedAt() }}<br />
<b>Tổng tiền:</b> {{ $order->getTotal() }} VND<br />
<table class="table table-bordered table-striped text-center mt-3">
<thead>
<tr>
<th scope="col">Số thư tự</th>

<th scope="col">Tên sản phẩm</th>
<th scope="col">Giá tiền</th>
<th scope="col">Số lượng</th>
</tr>
</thead>
<tbody>
@foreach ($order->getItems() as $item)
<tr>
<td>{{ $item->getId() }}</td>

<td>
<a class="link-success"
href="{{ route('product.show', ['id' => $item->getProduct()->getId()]) }}">
{{ $item->getProduct()->getName() }}
</a>
</td>
<td>{{ $item->getPrice() }} VND</td>
<td>{{ $item->getQuantity() }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>

</div>
@empty
<div class="alert alert-danger" role="alert">
    Có vẻ như bạn chưa mua bất cứ thứ gì trong cửa hàng của chúng tôi</div>
@endforelse
@endsection