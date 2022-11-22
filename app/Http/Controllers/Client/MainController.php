<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use products;
use PayPal\Api\Search;
use Session;

class MainController extends Controller
{
    public function home(Request $request)
    {
        $requestData = ['name','cname','brand','title','descripation','price','img'];
        $search=$request->input('search');
        $brands = $request->has('brands') ? $request->get('brands') : [] ;
        $categorys=DB::table('catagory')->get();

        $data =DB::table('catagory')
        ->join('product','product.cname','=','catagory.name')
        ->select('catagory.name','product.*')
        ->orderBy('product.created_at','DESC');

        if(isset($brands))
        {
            foreach($brands as $product)
            {
                $data->orWhere('name','=', $product);
            }
        }
        $result=$data->get();
        // echo"<pre>";
        // print_r($result);
        return view('Client.home')->with(['data'=>$result,'search'=>$search,'brands'=>$brands,'categorys'=>$categorys]);
    }

//  public function show(Request $request)
//     {
//       $requestData = ['id','cname'];
//       $search=$request->input('search');
//         $data = DB::table('product')
//       // ->where('cname','LIKE','%'.$search.'%')
//       ->where(function($q) use($requestData, $search) {
//               foreach ($requestData as $field)
//                 $q->orWhere($field, 'like', "%{$search}%");
//       })
//       ->Paginate(5);
//     //   echo"<pre>";
//     //   print_r($requestdata);
//     //   die();
//       return view('Client.home')->with(['data'=>$data,"search"=>$search]);
//     }

    public function showproductdetail($id,$cname)
  {
    $ans =DB::table('catagory')
    ->join('product','product.cname','=','catagory.name')
    ->select('catagory.name','product.*')
    ->where("product.id",$id)
    ->first();

    $similar =DB::table('catagory')
    ->join('product','product.cname','=','catagory.name')
    ->select('catagory.name','product.*')
    ->where("product.cname",$cname)
    ->where('product.id','!=',$id)
    ->get();
    //$similar =DB::table('product')->where("cname",$_REQUEST['cname'])->get();
    // echo "<pre>";
    // print_r($ans);

    // die;

    return view('Client.productdetail')->with(["ans"=>$ans,"similar"=>$similar]);
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
                "cname" => $d->cname,
                "quantity" => 1,
                "price" => $d->price,
                "img" => $d->img,
            ];
        }
        //    echo "<pre>";
        //         print_r($cart);
        //         die();
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
