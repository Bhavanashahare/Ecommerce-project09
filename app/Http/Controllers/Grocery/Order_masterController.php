<?php

namespace App\Http\Controllers\Grocery;

use App\Http\Controllers\Controller;
use App\Models\Order_master;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;
class Order_masterController extends Controller
{
    public function LoadMakeOrder(Request $request)
    {
         $request->validate(
        [
           'country'=>'required',
        'fname'=>'required',
        'lname'=>'required',
        'companyname'=>'required',
        'address'=>'required',
        'state'=>'required',
        'city'=>'required',
        'zip_code'=>'required',
        'email'=>'required',
        'phone'=>'required',


        ]);

        $data=new Order_master();
        $i=1;

        $random_code = random_int(100000, 999999);
        $data->user_id=Auth::user()->id;

        $data->order_no='ORD-'.$random_code.$i;

                // dd($request);
        $data->country=$request->country;
        $data->fname=$request->fname;
        $data->lname=$request->lname;
       $data->companyname=$request->companyname;
        $data->address=$request->address;
        $data->state=$request->state;
        $data->city=$request->city;
        $data->zip_code =$request->zip_code;
        $data->email=$request->email;
        $data->phone=$request->phone;
        //  $data->comments=$request->comments;
        // $data->status=$request->status;
        //  dd($data);
         $data->payment_method=4;
         $data->payment_status=1;
         $data->order_status=1;
          $data->qty=200;
         $data->amount=400;
        $data->save();
     return redirect()->route('front.frontInterface.my-orders');
    }
    public function Myorders()
     {
        $loggin = Auth::User();

         $data=Order_master::where('user_id',$loggin->id)->get();

        return view('front.frontInterface.my-order',compact('data'));

 }
// public function orderview($id){

//     $data=Product::find($id);
//     return view('order-view',compact('data'));
// }



}
