<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

use COM;

class ProductController extends Controller
{
    public function create()
    {
        $categories = Category::where('status','=',1)->get();
        // dd($categories);

        return view('admin.product.create', compact('categories'));
    }
    public function store(Request $request){
    $this->validate($request,[
        'title'=>'required',
        'description'=>'required',
        'image'=>'required',
        'category_id'=>'required',
    ]);
    {
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $product->image = $filename;
        }
        $product->save();
        return redirect()->route('products')->with ('message','Data Store Successfully!!!');
    }

}

    public function index()
    {
        $product = Product::with('category')->get();

// dd($product);
        return view('admin.product.index', compact('product'));
    }
    public function edit($id)
    {
       $product = Product::find($id);
       $cat=Category::all();
//
        return view('admin.product.edit', compact('product','cat'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',

            'category_id'=>'required',
        ]);


        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $product->image = $filename;
        }
        $product->save();
        return redirect()->route('products')->with ('message','Data Updated Successfully!!!');
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products')->with ('message','Data Delete Successfully!!!');
    }



}
