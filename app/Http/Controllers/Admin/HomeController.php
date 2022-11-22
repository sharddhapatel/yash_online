<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use input;
use League\CommonMark\Extension\Table\TableRow;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller

{
    public function dashbord()
    {
       $data=DB::table('product')->get();
        $b = DB::table('contact')->get();
        $a = DB::table('catagory')->get();
        $c = DB:: table('color')->get();
        return view('Admin.dashbord')->with(['data' => $data, 'a' => $a,'b' => $b,'c'=>$c]);
    }

    public function table()
    {
        return view('Admin.table');
    }

    public function catagory()
    {
        return view('Admin.catagory');
    }
    public function login(Request $request)
    {
        return view('Admin.login');
    }

    public function adminlogin(Request $request)
    {
        $data = $request->all();
        $email = $request->Input('email');
        $password = $request->Input('password');
        $same = DB::table('login')->where(['email' => $email, 'password' => $password])->count();
        $a = DB::table('login')->where('email', $email)->first();

        // echo "<pre>";
        // print_r($email);
        // print_r($password);
        // print_r($same);
        if (($email != " ") && ($password != " ")) {
            if ($same > 0) {
                Session::put('login_id', $a->id);
                Session::put('login_email', $a->email);

                return redirect('dashboad')->with(['a' => $a]);
            } else {
                return redirect('login')->with('error', 'Email and Password has been wrong....');
            }
        } else {
            return redirect('login')->with('error', 'Email and Password Empty...');
        }
    }

    
    public function logout()
    {
        Session()->forget('login_id');
        Session()->forget('login_email');

        return redirect('login');
    }

    public function callus()
    {
        return view('Admin.contact');
    }

    public function insertcall(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Admin.contact');
        } else {
            $data = $request->all();

            $ans = DB::table('contact')->insert(["name" => $data['name'], "email" => $data['email'], "phoneno" => $data['phoneno'], "message" => $data['message']]);
            //   echo"<pre>";
            //   print_r($ans);
            //   die();
            return redirect()->back()->with("message", "Insert Sucessfully...");
        }
    }
    public function showcontact(Request $request)
    {
        $data = DB::table('contact')
            ->get();
        return view('Admin.showcontact')->with('data', $data);
    }
    public function deletecontact(Request $request, $id)
    {
        $data = DB::table('contact')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'delete succesfully');
    }

}
