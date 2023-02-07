<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metadata;

class ServiceController extends Controller
{
    public function servicesUSA()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('services',compact('meta'));
    }

    public function servicesAustralia()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('australia',compact('meta'));
    }

    public function servicesCanada()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('canada',compact('meta'));
    }

    public function servicesUk()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('uk',compact('meta'));
    }

    public function servicesUae()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('uae',compact('meta'));
    }

    public function servicesIndia()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('india',compact('meta'));
    }

    public function servicesOtherCountries()
    {
        $routeName = request()->route()->uri;
        $meta = Metadata::where('page_title',$routeName)->first();
        return view('othercountries',compact('meta'));
    }
}
