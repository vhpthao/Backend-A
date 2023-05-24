@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="row">
    @foreach ($viewData['order'] as $order)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <div class="card-body text-center">
                <a href="{{ route('order.show',  ['id' => $order->getId()]) }}" class="btn bg-primary text-white">{{$order->getTotal() }}
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection