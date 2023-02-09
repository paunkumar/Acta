<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metadata;
use App\Models\Career;
use App\Models\Blog;


class HomeController extends Controller
{
    public function index()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title','index')->first();
        return view('index',compact('meta'));
    }

    public function whyacta()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('why-acta',compact('meta'));
    }

    public function aboutus()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('about-us',compact('meta'));
    }

    public function dataSecurity()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('data-security',compact('meta'));
    }
    
    public function management()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('management-team',compact('meta'));
    }

    
    public function ourTeam()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('our-team',compact('meta'));
    }

    public function careerActa()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        $careers = Career::all();
        return view('career', compact('careers','meta'));
    }

    
    public function careerView($id)
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title','careers')->first();
        $career = Career::find($id);
        return view('career-view', compact('career','meta'));
    }

    public function contactus()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('contact-us',compact('meta'));
    }

    public function privacypolicy()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('privacy-policy',compact('meta'));
    }

    public function blog()
    {
        $routeName = request()->route()->uri;
        $blogs = Blog::where('status',1)->paginate(6);
        $recentblog = Blog::where('status',1)->limit(3)->get();
        $categories = ['Offshore accounting','Offshore staffing','Cyber security','Quick books'];
        $meta = Metadata::where('page_title','index')->first();
        return view('blog',compact('meta','blogs','recentblog','categories'));
    }

    public function blogView(Request $request, $url)
    {
        $routeName = request()->route()->uri;
        $blog = Blog::where('status',1)->first();
        $categories = ['Offshore accounting','Offshore staffing','Cyber security','Quick books'];
        $meta = Metadata::where('page_title','index')->first();
        return view('blog-view',compact('meta','blog','categories'));
    }

    public function blogCategoryView(Request $request, $category)
    {
        $routeName = request()->route()->uri;
        $blog = Blog::where('status',1)->first();
        $categories = ['Offshore accounting','Offshore staffing','Cyber security','Quick books'];
        $meta = Metadata::where('page_title','index')->first();
        return view('blog-category',compact('meta','blog','categories'));
    }

}
