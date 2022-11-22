<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use input;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function apply()
    {
        return view('Client.contact');
    }
    public function insertcontact(Request $request)
    {
        $data = $request->all();
        $emails = $request->input('email');
                    // echo"<pre>";
                    //   print_r($emails);
                    //   die();
    $ans = DB::table('contact')->insert(["name" => $data['name'], "email" => $data['email'], "phoneno" => $data['phoneno'], "message" => $data['message']]);
    }
    // Mail::raw($data['message'], function($message) use ($emails){
    //     $message->from($emails);
    //     $message->to('sharddhagarsondiya365@gmail.com');
    //     $message->subject("contact message");
    //     });
    //         return redirect()->with('message',
    // 'The success message!');
        public function contactsubmit(Request $request)
        {

            Mail:: raw('emails.contactmail',[
        'name'=> $request->name,
        'email'=> $request->email,
        'phoneno'=> $request->phoneno,
        'message'=> $request->message,

            ],function($mail) use($request){
                $mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
                $mail->to("sharddhagarsondiya365@gmail.com")->subject('Contact Us Me');
            });
            return "Message has been sent successful! ";
        }
}
