<?php
namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Product;
use input;
use Session;

class MainController extends Controller
{
    public function home(Request $request)
    {

        $data =DB::table('catagory')
        ->join('product','product.cname','=','catagory.name')
        ->select('catagory.name','product.*')
        ->orderBy('product.created_at','DESC')
        ->get();
        // echo "<pre>";
        // print_r($data);
        // die();

        return view('Client.home')->with(['data'=>$data]);
    }

    public function showproductdetail($imageid)
  {
    $data =DB::table('catagory')
    ->join('product','product.cname','=','catagory.name')
    ->select('catagory.name','product.*')
    ->where("product.id",$imageid)
    ->get();

//   echo "<pre>";
//   print_r($data);
//   die();

    return view('Client.productdetail')->with(["data"=>$data]);
  }


    public function addToCart($id)
    {
        $d= Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');

        } else {
            $cart[$id] = [
                "name" => $d->name,
                "quantity" => 1,
                "price" => $d->price,
                "image" => $d->image
            ];
        }
                // echo "<pre>";
                // print_r($d);
                // die();
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function card()
    {
    return view('Client.detail');
    }

    // public function update(Request $cartdata)
    // {
    //     $cart = Session::get('cart');

    //     $cartQty = 1;

    //     foreach ($cartdata->all() as $id => $val)
    //     {
    //         if ($cartQty != 1) {
    //             $cart[$id]['qty'] = $val;
    //             if ($val < 1) {
    //                 unset($cart[$id]);
    //             }
    //         }
    //         $cartQty++;
    //     }
    //     Session::put('cart', $cart);
    //     return redirect()->back();
    // }

    public function update(Request $request)
    {
       if($request->id and $request->quantity)
        {
          $user=Session::get('user');
          $cart = session()->get('cart'.$user);
          $cart[$request->id]["quantity"] = $request->quantity;
          session()->put('cart'.$user, $cart);
          session()->flash('message', 'Cart Updated Successfully');
        }
         return redirect()->back();
    }


    public function remove(Request $request)
    {

        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function strip(Request $request)
{
    return view('Client.strip');
}
public function stripePayment(Request $request)
{
    stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    stripe\Charge::create ([

            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
    ]);

    Session::get('success', 'Payment successful!');

    return back();
}

}



