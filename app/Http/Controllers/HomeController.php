<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use App\Mail\MyTestMail;


class HomeController extends Controller
{


    /**
     * Send My Test Mail Example
     *
     * @return void
     */
    public function myTestMail()
    {
        $myEmail = 'shaymaaragab1234@gmail.com';
        Mail::to($myEmail)->send(new MyTestMail());


        dd("Mail Send Successfully");
    }


}