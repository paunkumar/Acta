<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metadata;
use App\Models\Career;


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

}
