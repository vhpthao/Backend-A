<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contacts.show');
    }

    public function storemessage(Request $request)
    {
        // dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contacts.show')->with('info', 'Lời nhắn của bạn đã được gửi. Cảm ơn!');

    }
}