<?php

namespace App\Http\Controllers\Grocery;

use App\Http\Controllers\Controller;
use App\Models\Order_master;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailDemo;
use Auth;
use Cart;
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
        //  $data->user_id=Auth::user()->id;

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
        //  $data->payment_method=4;
        $data->payment_method=$request->payment_method;
        // dd($data);
        $data->payment_status=1;
        $data->order_status=1;
        $data->qty=200;
        $data->amount=400;
        // dd($data);
        //  mail trap
        // dd($data);
         $data->save();
        $mailData = [
            'fname' => $data->fname,
            'address' => $data->address,
            'email' => $data->email,
            'phone' => $data->phone,
            'order_no' => $data->order_no,

            'title' => 'Demo Email',
            'url' => 'https://www.positronx.io'
        ];

        Mail::to($request->email)->send(new EmailDemo($mailData));

// mail trap end
// check the instance from demoemail.blade check mail tax,subtotal,total
// $data = Cart::instance('shopping')->tax();
// $data = Cart::instance('shopping')->subtotal();
// $data = Cart::instance('shopping')->total();

     return redirect()->route('front.frontInterface.my-orders');
    }
    public function Myorders()
     {
        $loggin = Auth::User();

         $data=Order_master::where('user_id',$loggin->id)->get();
        return view('front.frontInterface.my-order',compact('data'));

 }
 public function orderview($id){
    $data=Product::find($id);
    // dd($data);
    //check product id xaamp
    return view('front.frontInterface.orderview', compact('data'));
 }
//  public function emailmsg(){
//     return view('Email.demoEmail');
// }

}
