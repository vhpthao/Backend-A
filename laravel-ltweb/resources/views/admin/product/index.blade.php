@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4  " style="background-color: 	rgb(191, 227, 250)">
        <div class="card-header text-center" style="font-family: 'Georgia', cursive; font-size:30px">
            Thêm mới sản phẩm
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data" style="margin-left: 22%">
                @csrf <!– bảo vệ sự tấn công CSRF-->
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Tên sản phẩm:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12" >
                        <input name="name" value="{{ old('name') }}" type="text" class="form-control" >
                    </div>
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Giá tiền:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="price" value="{{ old('price') }}" type="number" class="form-control">
                    </div>
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Sản phẩm:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="mb-3">
                        <label class="col-lg-2 col-md-6 col-sm-12 form-label mt-3">Chi tiết sản phẩm</label>
                   <div class="col-lg-10 col-md-6 col-sm-12">
                    <textarea class="form-control" name="description" rows="3">{{ old('description') }}
                    </textarea>
                   </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary" style="margin-left: 42%">Tạo</button>
            </form>
        </div>
    </div>

   
    <div class="card">
        <div class="card-header" style="background-color: rgb(240, 255, 255)">
            Quản lý sản phẩm
        </div>
        <div class="card-body" >
            <table class="table table-bordered table-striped" style="text-align: center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Chỉnh sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td><img src="{{ asset('/storage/' . $product -> getImage()) }}" style="width: 150px; height: 100px;"></td>
                            <td>{{ $product->getName() }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.product.edit', ['id' => $product->getId()]) }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.product.delete', $product->getId()) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection