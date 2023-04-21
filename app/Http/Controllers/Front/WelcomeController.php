<?php


namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\welcome;
use App\Models\Product;
use App\Models\Category;
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
        return view('front.frontInterface.checkout');
    }

    public function thankyou(){
        return view('front.frontInterface.thankyou');
    }

    public function cart(){
        return view('front.frontInterface.cart');
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

    }


