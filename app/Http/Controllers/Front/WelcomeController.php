<?php


namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\welcome;
use App\Models\Product;
use App\Models\Category;
use Cart;
class WelcomeController extends Controller
{
    public function index(){

        $products=Product::all();
        $category = Category::all();
        $img=Product::first();


        // dd($products);
        return view('welcome',compact('products','img', 'category' ));

    }

    public function contact(){
        return view('front.frontInterface.contact');
    }
    public function about(){
$product=Product::get()->last();
        return view('front.frontInterface.about',compact('product'));
    }

    public function shop(){
        $products=Product::paginate(3);
        $categories = Category::all();

        return view('front.frontInterface.shop',compact('products','categories'));
    }

    public function shopsingle(){
        return view('front.frontInterface.shop-single');
    }
    public function checkout(){

        $data=cart::instance('shopping')->content();
        // dd($data);
        return view('front.frontInterface.checkout',compact('data'));
    }

    public function thankyou(){
        return view('front.frontInterface.thankyou');
    }


    public function cart(){
        $data = Cart::instance('shopping')->content();
        // dd($data);
            return view('front.frontInterface.cart',compact('data'));

    }
    public function Wishlist(){
        $data = Cart::instance('wishlist')->content();
            return view('front.frontInterface.wishlist',compact('data'));

    }


    public function user_profile(){
        return view('front.frontInterface.user_profile');
    }
    public function user_profile_store(Request $request){
        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $user->image = $filename;
        }
        $user->save();
        return redirect()->route('user_profile.index') ->with('message','Data Updated Successfully!!!');
        // dd($request);

    }
    public function user_profile_index(){

            $user=User::all();

            return view('admin.user_index',compact ('user'));
            }

        //     public function RemoveToWishlist($rowid){
		// $res = array();

		// $response = Cart::instance('wishlist')->remove($rowid);

		// if($response == ''){
		// 	$res['msgType'] = 'success';
		// 	$res['msg'] = __('Data Removed Successfully');
		// }else{
		// 	$res['msgType'] = 'error';
		// 	$res['msg'] = __('Data remove failed');
		// }

		// // return response()->json($res);


        //         return redirect()->route('front.frontInterface.wishlist') ->with('message','Data Remove Successfully!!!');

            //  }
        public function RemoveToWishlist($rowid){
            $res = array();

            $response = Cart::instance('wishlist')->get($rowid);
            // dd( $response);
            if($response == ''){
                $res['msgType'] = 'success';
                $res['msg'] = __('Data Removed Successfully');
            }else{
                $res['msgType'] = 'error';
                $res['msg'] = __('Data remove failed');
            }

            // return response()->json($res);
            return redirect()->route('wishlist')->with('message',"Wishlist remove Successfully!");

    }

    // public function destroy()
    // {
    //     Cart::destroy();
    //     return redirect()->route('index')->with('msg', 'Cart Items Destroyed Successfully!!');
    // }

    // public function remove($rowId)
    // {
    //     Cart::remove($rowId);
    //     return redirect()->route('cart')->with('msg', ' Cart Item removed Successfully!!');
    // }

    // public function checkout()
    // {
    //     $data = Cart::instance('default')->content();
    //     // dd($data);
    //     return view('frontend.check-out', compact('data'));
    //    }

}

