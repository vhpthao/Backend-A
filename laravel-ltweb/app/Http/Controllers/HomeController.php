<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
class HomeController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Trang chủ - Gryffindor";
$viewData["product"] = Product::all();
return view('home.index')->with("viewData", $viewData);
}

public function about(){
    $viewData = [];
    $viewData["title"] = "Về chúng mình - Gryffindor";
    $viewData["subtitle"] = "Về chúng mình";
    $viewData["description"] = "Đây là một trang giới thiệu ...";
    $viewData["author"] = "Nhà phát triển: Gryffindor";
    return view('home.about')->with("viewData", $viewData);
    }
    
}
?>