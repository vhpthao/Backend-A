@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card">
        <div class="card-header">
            Hoàn tất mua hàng
        </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Xin chúc mừng, giao dịch mua đã hoàn tất. số thứ tự là
                <b>{{ $viewData['order']->getId() }}</b>
            </div>
        </div>
    </div>
@endsection