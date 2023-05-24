@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header text-center" style="background-color: aliceblue; font-family: 'Georgia', cursive; font-size:30px" >
           Chỉnh sửa sản phẩm
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <!-- add form -->
            <form method="POST" action="{{ route('admin.product.update', ['id' => $viewData['product']->getId()]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--add element form: name, price, image, description-->
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Tên sản phẩm:</label>
                            <div class="col-lg-9 col-md-6 col-sm-12">
                                <input name="name" value="{{ $viewData['product']->getName() }}" type="text"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Giá tiền:</label>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <input name="price" value="{{ $viewData['product']->getPrice() }}" type="number"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Hình ảnh:</label>
                            <div class="col-lg-9 col-md-6 col-sm-12">
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Chi tiết sản phẩm</label>
                    <textarea class="form-control" name="description" rows="3">{{ $viewData['product']->getDescription() }}</textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary" style="margin-left: 42%">Chỉnh sửa</button>
            </form>
        </div>
    </div>
@endsection
