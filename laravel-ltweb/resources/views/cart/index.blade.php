@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card" style="background-color: rgb(228, 228, 228)">
        <div class="card-header" style="background-color: rgb(199, 244, 199)">
            <i class="fa-solid fa-cart-shopping"></i> Sản Phẩm Trong Giỏ Hàng
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td><img src="{{ asset('/storage/' . $product -> getImage()) }}" style="width: 150px; height: 100px;"></td>
                            <td>{{ $product->getName() }}</td>
                            <td>{{ $product->getPrice() }} VND</td>
                            <td>{{ session('products')[$product->getId()] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="text-end">
                    <p ><b>Tổng tiền phải trả:</b> {{ $viewData['total'] }} VND</p>
                    @if (count($viewData["products"]) > 0)
                    <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Thanh toán</a>
                    <a href="{{ route('cart.delete') }}">
                        <button class="btn btn-danger mb-2">
                            Xóa tất cả sản phẩm trong giỏ hàng
                        </button>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection