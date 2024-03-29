<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    function index(){
        $blogs=Blog::orderByDESC('id')->where('status',true)->get();
        return view('welcome',compact('blogs'));
    }
    function detail($id){
        $blog=Blog::find($id);
        return view('detail',compact('blog'));
    }
}
