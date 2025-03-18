<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailTesting;

class MailController extends Controller
{
    // Shivam Yadav customized this feature by using stubs.
    public function sendingMail(){
        $to='hakunamatata3527@gmail.com';
        $msg='This is the dummy mail from hakuna';
        $subject = 'Namo Namami';
        Mail::to($to)->send(new MailTesting($subject, $msg));

    }

}
