<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function admin()
    {
        return view('welcome');
    }
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate ($request,[
            'title'=>'required',
            'status'=>'required',
        ]);

        $category = new Category();
        $category->title = $request->title;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $category->image = $filename;
        }
        $category->status = $request->status;
        // $data->category = $request->category;

        $category->save();
        return redirect()->route('categories')->with('message','Data Updated Successfully!!!');
    }
    public function index()
    {

        $category = Category::all();
        return view('admin.category.index', compact('category'));

    }
    public function edit($id){

        $category=Category::find($id);
        return view('admin.category.edit',compact('category'));

    }

    public function delete($id){
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('categories')->with('message','Data Delete Successfully!!!');

    }
    public function update(Request $request,$id){
        {
            $this->validate ($request,[
                'title'=>'required',
                'status'=>'required',
            ]);
        $category=Category::find($id);
        $category->title = $request->title;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $category->image = $filename;
        }
        $category->status = $request->status;
        $category->save();
        return redirect()->route('categories')->with ('message','Data Update Successfully!!!');
    }
}

}


