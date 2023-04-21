<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Review;
class ReviewController extends Controller
{
    public function index(){
        $data=Review::all();
        return view('admin.review.index',compact('data'));
}
}
