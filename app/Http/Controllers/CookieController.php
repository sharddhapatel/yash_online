<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CookieController extends Controller {
   public function setCookie(Request $request)
   {
        $r = new Response('Hello World');
      $r->withCookie(cookie('name', 'ss',));
      return $r;
   }
   public function getCookie(Request $request)
   {
       $value = $request->cookie('name');
      echo $value;
   }
}
