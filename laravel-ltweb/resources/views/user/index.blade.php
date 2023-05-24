@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

<div class="container">


   
    <table class="table table-bordered  text-center">
   
            <tr>
                <th >ID</th>
                <th >Tên</th>
            </tr>
            @foreach ($viewData['user'] as $user)
            <tr>    
                    <td >{{ route('user.show', ['id' => $user['id']]) }}</td>
                    <td><a href="{{ route('user.show', ['id' => $user['id']]) }}" style="color:rgb(43, 34, 39)">{{ $user -> getName() }}</a></td>
            </tr>
            @endforeach 
        </tbody>
    </table>


</div>
@endsection