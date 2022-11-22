<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use input;
use Session;

class CatagoryController extends Controller
{
     public function insertcategory(Request $request)
  {
    if ($request->isMethod('get'))
    {
        return view('Admin.catagory');
    }
   else
   {
      $data = $request->all();
      $same=DB::table('catagory')->where('name',$data['cname'])->count();
      if($same>0)
      {
        return redirect()->back()->with('error','exist');
      }
       else
       {
            if($data['cname']!='')
            {
                 DB::table('catagory')->insert(["name"=>$data['cname']]);

                return redirect()->back()->with('message','Insert Category Successfully');
             }
            else
            {
                return redirect()->back()->with('error','Category Are Not Inserted');
             }
        }
    }
  }

  public function show(Request $request)
  {
    $requestData = ['id','name'];
    $search=$request->input('search');
      $data = DB::table('catagory')
    ->where(function($q) use($requestData, $search) {
            foreach ($requestData as $field)
              $q->orWhere($field, 'like', "%{$search}%");
    })
    ->Paginate(5);
    return view('Admin.showcatagory')->with(['data'=>$data,"search"=>$search]);
  }

  public function editca(Request $request,$id)
  {
      $data=DB::table('catagory')->where('id',$id)->first();
      return view ('Admin.edit')->with('data',$data);
  }

  public function editcatagory(Request $request)
{
    $data = $request->all();
     if($data['cname']!='' )
     {
      DB::table('catagory')->where('id',$data['id'])->update(["name"=>$data['cname']]);
        return redirect()->back()->with('message','Update Successfully!');
      }
  else
  {
   return redirect()->back()->with('error',' Are Not Updated!');
  }
    //   echo"<pre>";
    //   print_r($data);
    //   die();

}
public function deletecatagory(Request $request, $id)
    {
        $data = DB::table('catagory')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'delete succesfully');
    }
}
