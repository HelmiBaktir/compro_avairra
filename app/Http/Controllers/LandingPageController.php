<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        //
        $banner = Banner::all();
        return view('frontend.page.home.index',compact('banner'));
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
