<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        $banner = Banner::where('posision', 'home')->get();
        return view('frontend.page.home.index',compact('banner'));
    }

    public function product()
    {
        $categories = Category::withCount('products')->get();
        $productCount = Product::count();
        return view('frontend.page.product.index',compact('categories','productCount'));
    }

    public function dataProduct($category)
    {
        try {
            if($category == 'all'){
                $product = Product::paginate(6);
            }
            else{
                $product = Product::where('category_id',$category)->paginate(6);
            }
            $pagination = [
                'total' => $product->total(),
                'per_page' => $product->perPage(),
                'current_page' => $product->currentPage(),
                'last_page' => $product->lastPage(),
                'from' => $product->firstItem(),
                'to' => $product->lastItem(),
                'first_page_url' => $product->url(1),
                'last_page_url' => $product->url($product->lastPage()),
                'next_page_url' => $product->nextPageUrl(),
                'prev_page_url' => $product->previousPageUrl(),
                'url' => url()->current()
            ];
            // dd($pagination);
            return response()->json(array(
                'status' => 'success',
                'msg' => view('frontend.page.product.content',compact('product','pagination'))->render(),
                
            ), 200);
        } catch (\Throwable $e) {
            return response()->json(array(
                'status' => 'error',
                'msg' => 'Failed Show Product',
                'error' => $e->getMessage()
            ), 200);
        }
        
    }

    public function searchProduct(Request $request)
    {
        try {
            $query = $request->get('query');
            $product = Product::where('name', 'like', '%' . $query . '%')->paginate(6);
            $pagination = [
                'total' => $product->total(),
                'per_page' => $product->perPage(),
                'current_page' => $product->currentPage(),
                'last_page' => $product->lastPage(),
                'from' => $product->firstItem(),
                'to' => $product->lastItem(),
                'first_page_url' => $product->url(1),
                'last_page_url' => $product->url($product->lastPage()),
                'next_page_url' => $product->nextPageUrl(),
                'prev_page_url' => $product->previousPageUrl(),
                'url' => url()->current()
            ];
            // dd($pagination);
            return response()->json(array(
                'status' => 'success',
                'msg' => view('frontend.page.product.content',compact('product','pagination'))->render(),
                
            ), 200);
        } catch (\Throwable $e) {
            return response()->json(array(
                'status' => 'error',
                'msg' => 'Failed Show Product',
                'error' => $e->getMessage()
            ), 200);
        }
        
    }

    public function productDetail($product)
    {
        $product = decrypt($product);
        $product = Product::find($product);
        return view('frontend.page.product.detail',compact('product'));
    }

    public function aboutUs()
    {
        $banner_1 = Banner::where('posision', 'About_Us_1')->first();
        $banner_2 = Banner::where('posision', 'About_Us_2')->first();
        return view('frontend.page.about_us.index',compact('banner_2', 'banner_1'));
    }

    public function contact()
    {
        return view('frontend.page.contact.index');
    }
}
