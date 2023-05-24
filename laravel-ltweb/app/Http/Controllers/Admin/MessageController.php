<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Trang quản trị - Liên hệ - Ăn vặt nhà Gryffindor";
        $viewData["message"] = Message::all();
        return view('admin.message.index')->with("viewData", $viewData);
    }

    public function delete($id)
    {
        Message::destroy($id);
        return back();
    }

}
