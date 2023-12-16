<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return view('admin.page.product.index');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function tableDataAdmin(){
        $product = Product::all();
        $counter = 1;
        if (request()->ajax())
        {
            return Datatables::of($product)
                ->addColumn('No', function () use (&$counter)  {
                    return $counter++;
                })
                ->addColumn('Image', function($item) {
                    $preview = '
                    <a class="d-block overlay" data-fslightbox="lightbox-basic" href="'.asset($item->image_path).'">
                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                            style="background-image:url('.asset($item->image_path).')">
                        </div>
                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                            <i class="bi bi-eye-fill text-white fs-3x"></i>
                        </div>
                    </a>
                    ';
                    // return asset($item->image_path);
                    return $preview;
                })
                ->addColumn('Nomor', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->nomor.'</span>';
                })
                ->addColumn('Name', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->name.'</span>';
                })
                ->addColumn('Series', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->series.'</span>';
                })
                ->addColumn('Category', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->category->name.'</span>';
                })
                ->addColumn('Action', function ($item) {
                    $encryptedIdString = "'".strval(encrypt($item->id))."'";
                    $button =
                    '
                    <div class="dropdown">
                        <button class="btn btn-sm btn-light btn-flex btn-center btn-active-light-success" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                            Action
                            <i class="ki-duotone ki-down fs-5 ms-1"></i>
                        </button>
                        <div class="position-absolute dropdown-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-150px py-1" aria-labelledby="menu-" data-popper-placement="bottom-start" style="inset: 0px auto auto 0px; margin: 0px; transform: translate(-48px, 54px);">
                            <div class="menu-item px-3">
                                <a href="#" onclick="showModalDescProduct('.$encryptedIdString.')"  class="menu-link px-3">Show Description</a>
                            </div> 
                            <div class="menu-item px-3">
                                <a href="'.route('products.edit',encrypt($item->id)).'" class="menu-link px-3">Update</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" onclick="deleteProduct('.$encryptedIdString.')" class="menu-link px-3">Delete</a>
                            </div>
                        </div>
                    </div>
                    ';   
                    return $button;
                })
                ->rawColumns(['No','Image','Nomor','Name','Series','Category','Action'])
                ->make(true);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $category = Category::all();
            return view('admin.page.product.create',compact('category'));
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'series' => 'required',
                'name' => 'required',
                'desc' => 'required',
                'category' => 'required',
                'image' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(array('status' => 'error','msg' => 'Failed Insert Product','err'=>'Harap Periksa Kembali Inputan'), 200);
            }
            else{
                $product = new Product();
                $product->nomor = Product::generateProductNumber();
                $product->series = $request->get('series');
                $product->name = $request->get('name');
                $product->desc = $request->get('desc');
                $product->category_id = $request->get('category');
                $product->save();
                // $id_new = $product->id;
                $image = $request->file('image');
                if($image){
                    $path = public_path('product/' . $request->get('series'));
                    $fileName =  $image->getClientOriginalName();
                    if (!File::isDirectory($path)) {
                        File::makeDirectory($path, 0777, true, true);
                        $image->move($path, $fileName);
                    } else {
                        $image->move($path, $fileName);
                    }
                    // Add To Database
                    $product->image_path = 'product/'.$request->get('series').'/'.$fileName;
                    $product->save();
                }
                return response()->json(array('status' => 'success','msg' => 'Success Insert Product'), 200);
            }
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Insert Product','err'=>$th->getMessage()), 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        try {
            $id = decrypt($product);
            $product = Product::find($id);
            return response()->json(array('status' => 'success','msg' =>  view('admin.page.product.modal.desc',compact('product'))->render()), 200);
        } catch (\Throwable $e) {
            return response()->json(array('status' => 'error','msg' => 'Failed Show Desc','err'=>$e->getMessage()), 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        try {
            $id = decrypt($product);
            $product = Product::find($id);
            $category = Category::all();
            return view('admin.page.product.update',compact('category','product'));
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        try {
            $validator = Validator::make($request->all(), [
                'series' => 'required',
                'name' => 'required',
                'desc' => 'required',
                'category' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(array('status' => 'error','msg' => 'Failed Update Product','err'=>'Harap Periksa Kembali Inputan'), 200);
            }
            else{
                $id = decrypt($product);
                $product = Product::find($id);
                $product->series = $request->get('series');
                $product->name = $request->get('name');
                $product->desc = $request->get('desc');
                $product->category_id = $request->get('category');
                $product->save();
                // $id_new = $product->id;
                $image = $request->file('image');
                if($image){
                    $path = public_path('product/' . $request->get('series'));
                    $fileName =  $image->getClientOriginalName();
                    if (!File::isDirectory($path)) {
                        File::makeDirectory($path, 0777, true, true);
                        $image->move($path, $fileName);
                    } else {
                        $image->move($path, $fileName);
                    }
                    // Add To Database
                    $product->image_path = 'product/'.$request->get('series').'/'.$fileName;
                    $product->save();
                }
                return response()->json(array('status' => 'success','msg' => 'Success Update Product'), 200);
            }
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Update Product','err'=>$th->getMessage()), 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        try {
            $id = decrypt($product);
            $product = Product::find($id);
            $product->delete();
            return response()->json(array('status' => 'success','msg' => 'Success Delete Product'), 200);
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Delete Product','err'=>$th->getMessage()), 200);
        }
    }
}
