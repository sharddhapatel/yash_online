<?php

namespace App\Http\Controllers;

use DB;
use Session;
use input;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function apply()
    {
        return view('Client.contact');
    }
    public function insertcontact(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Client.contact');
        } else {
            $data = $request->all();

            $ans = DB::table('contact')->insert(["name" => $data['name'], "email" => $data['email'], "phoneno" => $data['phoneno'], "message" => $data['message']]);
            //   echo"<pre>";
            //   print_r($ans);
            //   die();
            return redirect()->with('message', 'The success message!');
        }
    }

}
