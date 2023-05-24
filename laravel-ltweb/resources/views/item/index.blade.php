@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="row">
    @foreach ($viewData['item'] as $item)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <div class="card-body text-center">
                <a href="{{ route('item.show',  ['id' => $item->getId()]) }}" class="btn bg-primary text-white">{{ $item->getQuantity() }}
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection