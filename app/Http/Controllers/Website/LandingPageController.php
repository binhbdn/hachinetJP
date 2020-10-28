<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class LandingPageController extends Controller
{
    //

    public function index(Request $request, $slug) {
        
    }

    public function sendmail(Request $request) 
    {
        if(isset($request['name']) && isset($request['email'])){
            $name = $request['name'];
            $email = $request['email'];
            $address = $request['address'];
            $company = $request['company'];
            
            $dataEmail = array(
                'name'  =>  $name,
                'email'  =>  $email,
                'subject'  =>  "Data Online Seminar",
                'content'  =>  'DỮ LIỆU NHẬN ĐƯỢC <br>  Email: ' .$email . '<br> Họ tên: ' .$name . '<br> Địa chỉ: ' .$address . '<br> Công ty: ' .$company
            );
            Mail::send('mail_contact', $dataEmail, function($message) {
                $message->to('contact@hachinet.com', 'Hachinet Inc.')->subject("Data Online Seminar");
            });
        
            exit(json_encode(array("status" => 1, "response" => 1)));
        }
    }

    public function sendmailsuccess(Request $request) 
    {
        if(isset($request['nameSuccess']) && isset($request['emailSuccess'])){
            $nameSuccess = $request['nameSuccess'];
            $emailSuccess = $request['emailSuccess'];
            $msg_subject = $request['msg_subject'];
            $message = $request['message'];
            
            $dataEmail = array(
                'name'  =>  $nameSuccess,
                'email'  =>  $emailSuccess,
                'subject'  =>  "Contact Seminar",
                'content'  =>  'DỮ LIỆU NHẬN ĐƯỢC <br>  Name: ' .$nameSuccess . '<br> Email: ' .$emailSuccess . '<br> Nội dung: ' .$msg_subject . '<br> Nội dung: ' .$message
            );
            Mail::send('mail_contact', $dataEmail, function($message) {
                $message->to('contact@hachinet.com', 'Hachinet Inc.')->subject("Data Online Seminar Contact");
            });
        
            exit(json_encode(array("status" => 1, "response" => 1)));
        }
    }
}
