<?php

namespace App\Http\Controllers;

use App\Mail\cartMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function sendMail(Request $request){
        $userDetails = [
        'name' => auth()->user()->username,
        'email' => auth()->user()->email,
    ];

        $formFields = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'info' => 'required',
            'image' => 'required',
        ]);

    Mail::to('test@mail.com')->send(new cartMail($formFields, $userDetails));
    return back()->with('message','your product purchased successfully');

    }
}
