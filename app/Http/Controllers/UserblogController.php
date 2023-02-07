<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Metadata;

class UserblogController extends Controller
{
    public function allBlog()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        $blogs = Blog::where('deleted_at','Active')->where('status',1)
                    ->orderBy('created_at', 'desc')->paginate(6);
        $latests = Blog::where('deleted_at','Active')->where('status',1)
                    ->latest()->take(5)->get();
        return view('blog.allblog',compact('meta','blogs','latests'));
    }

    public function blogDetails(Request $request,$id,$meta)
    {
        $meta = Metadata::where('id',$meta)->first();
        $latests = Blog::where('deleted_at','Active')->where('status',1)
                    ->latest()->take(5)->get();
        $blog = Blog::where('id',$id)->first();
        return view('blog.specificblog',compact('meta','blog','latests'));
    }

    public function blogSearch(Request $request,$id)
    {
        $meta = Metadata::where('id',$id)->first();
        $latests = Blog::where('deleted_at','Active')->where('status',1)
                    ->latest()->take(5)->get();
        $blogs = Blog::where('blog_title','LIKE',"%{$request->search}%")
                    ->where('status',1)->take(6)->get();
        return view('blog.blogsearch',compact('meta','blogs','latests'));
    }
}
