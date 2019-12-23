<?php

namespace App\Http\Controllers\front;


use App\Blogpost;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class SendController extends Controller
{


    public function send_mail(Request $request)

    {
        //dd($request);
        $toEmail = 'chiheb@1waycom.com';
        $emailTitle = $request['subject'];
        $source = $request['email'];

        Mail::send('mail.contact', ['request' => $request], function ($message) use ($toEmail, $emailTitle, $source) {
            $message->from($source);
            $message->to($toEmail, '')->subject($emailTitle);
        });


        return ('Votre message a été envoyé');

    }
}
