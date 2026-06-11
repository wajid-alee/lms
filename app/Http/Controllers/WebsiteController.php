<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('frontend.website');
    }
    // public function about()
    // {
    //     return view('frontend.about');
    // }
    // public function contact()
    // {
    //     return view('frontend.contact');
    // }
    // public function services()
    // {
    //     return view('frontend.services');
    // }
    // public function gallery()
    // {
    //     return view('frontend.gallery');
    // }
    // public function news()
    // {
    //     return view('frontend.news');
    // }
    // public function staff()
    // {
    //     return view('frontend.staff');
    // }
}
