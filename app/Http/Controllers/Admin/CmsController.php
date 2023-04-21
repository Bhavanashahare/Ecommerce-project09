<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

use App\Models\Cms;
class CmsController extends Controller
{
    public function admin()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('admin.cms.create');
    }


    public function store(Request $request)
    {
        $this->validate ($request,[
            'title'=>'required',
            'description'=>'required',
            // multiple images
            'images'=>'required',
            'status'=>'required',
        ]);

        $cms = new Cms();
        $cms->title = $request->title;
        // dd($request->all());
        $cms->description = $request->description;
// multiple image code
        if($files=$request->file('images')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
            $file->move('uploads/car/',$name);
            $images[]=$name;
            }
        }
        $cms->images =   implode("|",$images);


        $cms->status = $request->status;


        $cms->save();
        return redirect()->route('cms')->with('message','Data Updated Successfully!!!');
    }

    public function index()
    {

        $cms = Cms::all();
        return view('admin.cms.index', compact('cms'));

    }
    public function edit($id){

        $cms=Cms::find($id);
        return view('admin.cms.edit',compact('cms'));

    }

    public function delete($id){
        $cms=Cms::find($id);
        $cms->delete();
        return redirect()->route('cms')->with('message','Data Delete Successfully!!!');

    }
    public function update(Request $request,$id){
        {
            $this->validate ($request,[
                'title'=>'required',
                'description'=>'required',
                // multiple images  for images
                'images'=>'required',
                'status'=>'required',
            ]);
        $cms=Cms::find($id);
        $cms->title = $request->title;
        $cms->description = $request->description;

        if($files=$request->file('images')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
            $file->move('uploads/car/',$name);
            $images[]=$name;
            }
        }
        $cms->images =   implode("|",$images);

        $cms->status = $request->status;
        $cms->save();
        return redirect()->route('cms')->with ('message','Data Update Successfully!!!');
    }

    }
}



// imp.note
//for multiple image we have to create a folder name as car in in public->uplodes in uplodes we have create car folder

