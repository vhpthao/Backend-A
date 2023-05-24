<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // public static $user = [
    //     ["id" => "1", "name" => "Võ Ngọc Châu", "email" => "chauvo25102003@gmail.com", "password" => "chauvo2510", "rote" => "vip", "balance" => "500"],
    //     ["id" => "2", "name" => "Trần N. Như Ngọc", "email" => "ngocngoc2003@gmail.com", "password" => "ngocdepgai", "rote" => "vip", "balance" => "500"],
    //     ["id" => "3", "name" => "Trần Quang Đạt", "email" => "trangquangdat@gmail.com", "password" => "daiceo123", "rote" => "vip", "balance" => "500"],
    //     ["id" => "4", "name" => "Văn Công Bảo", "email" => "congbao@gmail.com", "password" => "baodaigia151", "rote" => "vip", "balance" => "500"],
    //     ["id" => "5", "name" => "Phạm Ngọc Trâm", "email" => "tramtram@gmail.com", "password" => "tramdethun014", "rote" => "vip", "balance" => "500"],
    //     ["id" => "6", "name" => "Đặng Hồng Quân", "email" => "quandaubui@gmail.com", "password" => "quanoccho41", "rote" => "vip", "balance" => "500"],
    // ];


    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Người Dùng - Gryffindor";
        $viewData["subtitle"] = "Danh Sách Người Dùng";
        $viewData["user"] = User::all();
        return view('user.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $user = User::findOrFail("$id");
        // $user = UserController::$user[$id - 1];
        $viewData["title"] = $user->getName() . " - Gryffindor";
        $viewData["subtitle"] = $user->getName() . " - Thông Tin Người Dùng";
        $viewData["user"] = $user;
        return view('user.show')->with("viewData", $viewData);
    }

    public function delete($id)
    {
        $viewData = [];
        Product::destroy($id);
        return back();
        return view('cart.index')->with("viewData", $viewData);
    }
}