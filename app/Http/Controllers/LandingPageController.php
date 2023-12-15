<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        //
        return view('frontend.page.home.index');
    }

    public function product()
    {
        //
        return view('frontend.page.product.index');
    }

    public function productDetail()
    {
        //
        return view('frontend.page.product.index');
    }

    public function aboutUs()
    {
        //
        return view('frontend.page.about_us.index');
    }

    public function contact()
    {
        return view('frontend.page.contact.index');
    }
}
