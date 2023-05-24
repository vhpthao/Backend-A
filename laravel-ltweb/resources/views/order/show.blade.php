@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData['order']->getId() }}
                    ({{ $viewData['order']->getTotal() }} VND)
                </h5>
                <p class="card-text">Tổng số tiền: {{ $viewData['order']->getTotal() }}</p>
                <p class="card-text"><small class="text-muted">Thêm vào Giỏ hàng</small></p>
            </div>
        </div>
    </div>
</div>
@endsection