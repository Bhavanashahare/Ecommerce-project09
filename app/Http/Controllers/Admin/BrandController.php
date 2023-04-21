<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Brand;
use App\Models\Product;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{

    public function create()
    {
        $products=Product::all();
        $users=User::all();
        // dd($products);
        return view('admin.brands.create',compact('products','users'));
    }

    public function store(Request $request)

{
    {
        $this->validate ($request,[
            'name'=>'required',
            'user_id'=>'required',
            'product_id'=>'required',
        ]);
        // dd($request->all());
        $brand = new Brand();
        $brand->name = $request->name;

        //$brand->user_id = Auth::user_id()->id;
        $brand->user_id = $request->user_id;
       $brand->product_id = $request->product_id;
         $brand->save();
        return redirect()->route('brands') ->with('message','Data Updated Successfully!!!');

    }
}

public function index(){
$brand=Brand::all();

return view('admin.brands.index',compact ('brand'));
}






public function edit($id){

    $brand=Brand::find($id);
    $category=Product::all();
    return view('admin.brands.edit',compact('brand'));

}
public function update(Request $request,$id){

    {
        $this->validate ($request,[
            'name'=>'required',
            'user_id'=>'required',
            'product_id'=>'required',
        ]);

    $brand=Brand::find($id);
    $brand->name = $request->name;
    $brand->user_id = $request->user_id;
    $brand->product_id = $request->product_id;
    $brand->save();
    return redirect()->route('brands')->with ('message','Data Update Successfully!!!');

        }
    }



//         public function delete($id){
//             $brand=Brand::find($id);
//             $brand->delete();
//             return redirect()->route('brands.table');




public function delete($id){
    $brand=Brand::find($id);
    $brand->delete();
    return redirect()->route('brands')->with('message','Data Delete Successfully!!!');


}




}


