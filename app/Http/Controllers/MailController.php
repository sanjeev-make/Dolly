<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => ' this is a testing mail',
            'body' => 'this is testing mail from email.'
        ];
        Mail::to("ujjval0011@gmail.com")->send(new TestMail($details));
        return "Email sent";
    }
}
