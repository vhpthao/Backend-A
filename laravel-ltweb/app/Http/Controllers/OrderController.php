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
$viewData["title"] = "Đơn hàng của tôi - Gryffindor";
$viewData["subtitle"] = "Đơn hàng của tôi";
$viewData["orders"] = Order::where('user_id', Auth::user()->getId())->get();
return view('myaccount.orders')->with("viewData", $viewData);
}
}
?>