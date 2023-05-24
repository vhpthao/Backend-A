<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class MyAccountController extends Controller
{
public function orders()
{
$viewData = [];
$viewData["title"] = "Hóa Đơn Của Tôi - Online Store";
$viewData["subtitle"] = "Hóa Đơn Của Tôi";
$viewData["orders"] = Order::where('user_id', Auth::user()->getId())->get();
return view('myaccount.orders')->with("viewData", $viewData);
}
}