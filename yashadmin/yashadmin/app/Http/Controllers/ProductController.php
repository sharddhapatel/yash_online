<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use input;
use Session;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    public function productcatagory(Request $request)
  {
      $data=DB::table('catagory')->get();
    return view ('product')->with(['data'=>$data]);
   }
   public function insertpc(Request $request)
    {

        if ($request->isMethod('get'))
        {
            return view('product');
        }
        else
        {
            $data=$request->all();
              $img=array();
            if($files=$request->file('img'))
            {
              foreach($files as $file)
              {
                $name=$file->getClientOriginalName();
                 $t=time().$name;
                // $t=time().".".$name;
                $img = explode(".",$t);

               $file->move(public_path('item_img'),$t );
                $image[]=$t;
              }
            }
              if($img [1] =='png' ||  $img [1] == "jpg" ||  $img [1] =="jpeg")
              {
              $ans=DB::table('product')->insert(["cname"=>$data['cname'],"brand"=>$data['brand'],"title"=>$data['title'],"descripation"=>$data['descripation'],"price"=>$data['price'],"img"=>implode(",",$image)]);
              return redirect()->back()->with("message","Insert Sucessfully...");
              }
              else
             {
               return redirect()->back()->with('error','Invalid Image Type');
             }
        }
    }
    public function show(Request $request)
    {
      $requestData = ['id','cname','brand','title','price'];
      $search=$request->input('search');
        $data = DB::table('product')
      // ->where('cname','LIKE','%'.$search.'%')
      ->where(function($q) use($requestData, $search) {
              foreach ($requestData as $field)
                $q->orWhere($field, 'like', "%{$search}%");
      })
      ->Paginate(5);
      // echo"<pre>";
      // print_r($data);
      // die();
      return view('showpc')->with(['data'=>$data,"search"=>$search]);
    }

   public function editcustomer(Request $request,$id)
  {
      $data=DB::table('product')->where('id',$id)->first();
      return view ('editpc')->with('data',$data);

  }
  public function editdata(Request $request)
  {
  	$time=date('Y-m-d H:i:s',time());
    $data= $request->all();

    $data = $request->all();
    // if($price!=0)
    // {
      if(@$data['img']!='')
      {
        $img=array();
        if($files=$request->file('img'))
        {
          foreach($files as $file)
          {
            $name=$file->getClientOriginalName();
            $img = explode(".",$name);
            $t=time().".".$img[1] ;
            if($img [1] =='png' ||  $img [1] == "jpg" ||  $img [1] =="jpeg")
            {
              $file->move(base_path('public/item_img'),$t );
              DB::table('product')->where('id',$data['id'])->update(["brand"=>$data['brand'],"title"=>$data['title'],"descripation"=>$data['descripation'],"price"=>$data['price'],"item_img"=>$t,'updated_at'=>$time]);


              $photo = $request->input('oldimg');

              if($photo!='')
              {
                if(file_exists('public/item_img/'.$photo))
                {
                 unlink('public/item_img/'.$photo);
                }
                else
                {
                    echo "file not exist";
                }
              }

            }
            else
            {
              return redirect()->back()->with('error','Invalid Image Type');
            }
          }
           return redirect()->back()->with('message','Update Product Sucessfully!');
        }
      }
      else
      {
        // echo $data['id'];
        // die();

        DB::table('product')->where('id',$data['id'])->update(["brand"=>$data['brand'],"title"=>$data['title'],"descripation"=>$data['descripation'],"price"=>$data['price'],'updated_at'=>$time]);

        return redirect()->back()->with('message','Update Product Sucessfully!');
      }
}
public function deleteproduct(Request $request,$id)
  {
      $data=DB::table('product')->where('id',$id)->delete();
      return redirect()->back()->with('message','delete succesfully');
  }
  // public function login(Request $request)
  // {
  //   return view('login');
  // }

//   public function logindata(Request $request)
// {
//         // $data=$request->all();
//     $email=$request->Input('email');
//     $password=$request->Input('password');
//     $a=DB::table('login')->where('email',$email)->first();

//     // echo "<pre>";
//     // print_r($email);
//     // die();

//     if(($email!='') && ($password!=''))
//     {
//       session::put('admin_id',$a->id);
//             session::put('admin_name',$a->name);
//             session::put('admin_email',$a->email);

//     }
//     {
//         if(($a->email == $email) && ($a->password == $password))
//         {
//             Session::put('id',$a->id);
//             return redirect('/')->with(['a'=>	$a,'user'=>$user,'postad'=>$postad,'order'=>$order]);

//         }
//         else
//         {
//             return redirect('login')->with('message','login not sucess...');
//         }
//         else
//         {
//             return redirect('login')->with('message','fill all the fildes');
//         }
//   }

//     public function logout()
//     {
//         Session()->forget('admin_id');
//         Session()->forget('admin_name');
//         Session()->forget('admin_email');

//         return redirect('login');
//     }


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

   return view('showproductdetail')->with(["data"=>$data]);
 }

}
