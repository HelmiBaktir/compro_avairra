<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('status_hapus', '<>', 1)->get();
        return view('category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $validation =  Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'desc' => 'required|string',
            ]);
            if ($validation->fails()) {
                return redirect()->back()->with(['danger_message' => 'Data Category gagal disimpan.']);
            } else {
                $new = new Category();
                $new->name = $request->input('name');
                $new->desc = $request->input('desc');
                $new->created_at = date("Y-m-d H:i:s");
                $new->updated_at = date("Y-m-d H:i:s");
                $new->status_hapus = 0;
                $new->save();
    
                return redirect()->back()->with(['message' => 'Data Category berhasil disimpan.']);
            }
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with(['danger_message' => 'Data Category gagal disimpan.']);
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
        $kategori = Category::find($id);
        echo json_encode($kategori);
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
        try {
            $category = Category::find($id);
            $category->name = $request->get('txtNamaKategoriEdit');
            $category->desc = $request->get('txtDescKategoriEdit');
            $category->updated_at = date("Y-m-d H:i:s");
            $category->save();
            return redirect()->back()->with(['message' => 'Data Kategori berhasil diubah.']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['danger_message' => 'Data Kategori gagal diubah.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {
            if($request->jenis_delete == 'all'){
                $arrId = $request->input('txtDeleteAll');
                foreach ($arrId as $key => $value) {
                    $kategori = Categori::find($value);
                    $kategori->status_hapus = 1;
                    $kategori->updated_at = date("Y-m-d H:i:s");
                    $kategori->save();
                }
                return redirect()->back()->with(['message' => 'Data kategori berhasil dihapus.']);
            }
            else{
                $kategori = Category::find($id);
                $kategori->status_hapus = 1;
                $kategori->updated_at = date("Y-m-d H:i:s");
                $kategori->save();
                return redirect()->back()->with(['message' => 'Data kategori berhasil dihapus.']);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with(['danger_message' => 'Data kategori gagal dihapus.']);
        }
    }
}
