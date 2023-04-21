<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;
use App\Models\Product;
class ColorController extends Controller
{
    public function create(){
        $products=Product::all();
        return view('admin.colors.create',compact ('products'));
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
            $color = new Color();
            $color->name = $request->name;
            $color->user_id = $request->user_id;
            $color->product_id = $request->product_id;


            $color->save();

        return redirect()->route('colors')->with ('message','Data Update Successfully!!!');
// return redirect('color/table');   ->  (url)
    }
}
public function index(){


    $color=Color::all();
    return view('admin.colors.index',compact ('color'));
    }









    public function edit($id){

        $color=Color::find($id);

        $category=Product::all();
        return view('admin.colors.edit',compact('color'));

    }

    public function update(Request $request,$id){

        {
            $this->validate ($request,[
                'name'=>'required',
                'user_id'=>'required',
                'product_id'=>'required',
            ]);


        $color=Color::find($id);
        $color->name = $request->name;
        $color->user_id = $request->user_id;
        $color->product_id = $request->product_id;
        $color->save();
        return redirect()->route('colors')->with ('message','Data Update Successfully!!!');

        }
    }
public function delete($id){
    $color=Color::find($id);
    $color->delete();
    return redirect()->route('colors')->with('message','Data Delete Successfully!!!');


}
}

