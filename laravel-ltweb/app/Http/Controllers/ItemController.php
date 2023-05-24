<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Chi tiết - Gryffindor";
        $viewData["subtitle"] = "Danh sách mục";
        $viewData["item"] = Item::all();
        return view('item.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $item = Item::findOrFail($id);
        $viewData["title"] = $item->getQuantity() . " - Gryffindor";
        $viewData["subtitle"] = $item->getQuantity() . " - Chi tiết mục";
        $viewData["item"] = $item;
        return view('item.show')->with("viewData", $viewData);
    }
}