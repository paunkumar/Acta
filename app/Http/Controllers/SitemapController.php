<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $pages = [
            [
                'url' => url('/'),
                'title' => 'Home',
            ],
            [
                'url' => url('/about-us'),
                'title' => 'About Us',
            ],
            [
                'url' => url('/management-team'),
                'title' => 'Management Team',
            ],
            [
                'url' => url('/our-team'),
                'title' => 'Our Team',
            ],
            [
                'url' => url('/contact-us'),
                'title' => 'Contact Us',
            ],
        ];

        return view('sitemap', compact('pages'));
    }

    public function sitemap()
    {
        // Load the XML file
        $sitemap = file_get_contents(base_path('sitemap.xml'));
        
        // Create a new response and set the content type to XML
        $response = response($sitemap)->header('Content-Type', 'application/xml');

        // Return the response
        return $response;
    }
}
