<?php

namespace App\Http\Controllers;

use App\Mail\PostApprovedMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function create_mail(){
        return view('mail.create_mail');
    }
    public function send(Request $request){
//        Mail::raw('hello', function ($message){
//            $message->to(request('mail'))
//                ->subject('H1');
//        });

        $data = [
            "text" =>'post approved'
        ];

        Mail::to(request('mail'))->send(new PostApprovedMail($data));
        return redirect()->route('create_mail');
    }
}
