<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request as FacadesRequest;

class MailController extends Controller
{
    public static $details;
    public function sendMail(){
        $data = ['title' => "Test Mail", 'body' => "nội dung phần mềm gửi mail"];
        $user['email']="sincollmm2001@gmail.com";
        Mail::send('TestMail', $data, function ($message) use ($user) {
            $message->to($user['email']);
            $message->subject('Demo using Gmail on Laravel 8');
        });
        return 'send success';
    }
}
