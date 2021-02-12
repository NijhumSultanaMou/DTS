<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Area;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function aboutus()
    {
        return view('frontend.aboutus');
    }
     
   
    public function contactus()
    {
        return view('frontend.contactus');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

        public function areaguide()
    {
        return view('frontend.areaguide');
    }

        public function property()
    {
        return view('frontend.property');
    }

        public function user_login()
    {
        return view('frontend.user_login');
    }

        public function user_register()
    {
        return view('frontend.user_register');
    }

}
