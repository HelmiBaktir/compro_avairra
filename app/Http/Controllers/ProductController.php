<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::with('category')->where('status_hapus', '<>', 1)->get();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mendapatkan data untuk dropdown atau sesuatu yang diperlukan
        $category = Category::all()->where('status_hapus',0);
        // Generate nomor produk
        $noProduct = Product::generateProductNumber(); // Sesuaikan dengan metode yang kamu gunakan
        // Mengembalikan view dengan data yang diperlukan
        return view('product.tambah', compact('category', 'noProduct'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $no_product = "";
        try 
        {
            $new = new Product();
            $new->nomor_product = Product::generateProductNumber();
            $new->series_product = $request->input('txtSeriesProduct');
            $new->name_product = $request->input('txtNameProduct');
            $new->desc = $request->input('txtDesc');
            $no_product = $new->nomor_product;
                
            $new->status_hapus = 0;
            $new->category_id = $request->input('txtCategory');
            $new->created_at = now();
            $new->updated_at = now();
            $new->save();

            // INSERT DB LAMPIRAN KE KOLOM image_path di TABEL Product
            if ($request->hasFile('lampiran')) {
                $imagePaths = [];
                foreach ($request->file('lampiran') as $key => $value) {
                    $image = $value;
                    $extensions = $value->getClientOriginalExtension();
                    $filenameToSave = "lampiran_Product_" . $no_product . "_" . now()->format('Ymd') . "_" . ($key + 1) . "." . $extensions;
                    $destinationPath = public_path('/lampiran');
                    $imagePath = "lampiran/" . $filenameToSave;
                    $image->move($destinationPath, $filenameToSave);
                    $imagePaths[] = $imagePath;
                }
                // Simpan paths ke kolom image_path di TABEL Product
                $new->image_path = json_encode($imagePaths);
                 $new->save();
            }
            return response()->json(['error' => 'Data Product gagal disimpan.'], 422);
        }
        catch (\Throwable $th) {
            return response()->json(['error' => 'Data Product gagal disimpan.'], 422);
        }
    }

    
    
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
