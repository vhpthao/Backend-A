@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card">
        <div class="card-header text-center" style="background-color: rgb(240, 255, 255); font-family: 'Georgia', cursive; font-size:30px">
          Liên hệ
        </div>
        <div class="card-body" >
            <table class="table table-bordered table-striped" style="text-align: center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Lời nhắn</th>
                        <th scope="col" style="width: 40px">Xóa</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($viewData['message'] as $message)
                        <tr>
                            <td>{{$message->getId()}}</td>
                            <td>{{ $message->getName() }}</td>
                            <td>{{$message->getPhone()}}</td>
                            <td>{{$message->getEmail() }}</td>
                            <td>{{$message->getMessage()}}</td>
                            <td>
                                <form action="{{ route('admin.message.delete', $message->getId()) }}" method="POST">
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