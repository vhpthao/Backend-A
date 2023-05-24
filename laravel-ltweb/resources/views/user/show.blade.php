@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card mb-3">
<div class="row g-0">
<div class="col-md-4">
        <img src="{{ asset('/img/user.jpg') }}" width="250px" height="250px">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title">
{{ $viewData['user'] -> getName() }} 
</h5>
        <div class="text-lg-left">
        <p class="card-text text-left">Email: {{ $viewData['user'] -> getEmail() }}</p>
        <p class="card-text">Mật khẩu: {{ $viewData['user'] -> getPassword() }}</p>
        <p class="card-text">Vai trò: {{ $viewData['user'] ->getRole() }}</p>
        <p class="card-text">Tiền còn lại: {{ $viewData['user'] -> getBalance()}}</p>
        </div>
</div>
</div>
</div>
</div>
@endsection