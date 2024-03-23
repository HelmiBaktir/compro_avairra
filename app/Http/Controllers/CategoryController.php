<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return view('admin.page.category.index');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function tableDataAdmin(){
        $category = Category::all();
        $counter = 1;
        if (request()->ajax())
        {
            return Datatables::of($category)
                ->addColumn('No', function () use (&$counter)  {
                    return $counter++;
                })
                ->addColumn('Name', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->name.'</span>';
                })
                ->addColumn('Desc', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->desc.'</span>';
                })
                ->addColumn('Action', function ($item) {
                    $encryptedIdString = "'".strval(encrypt($item->id))."'";
                    $button ='
                    <button onclick="showModalUpdateCategory('.$encryptedIdString.')" class="btn btn-primary border border-1  py-2"><i class="fa-solid fa-pen"></i></button>
                    <button onclick="deleteCategory('.$encryptedIdString.')" class="btn btn-danger border border-1  py-2"><i class="fa-solid fa-trash"></i></button>';
                    return $button;
                })
                ->rawColumns(['No', 'Name','Desc','Action'])
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
            return response()->json(array('status' => 'success','msg' =>  view('admin.page.category.modal.create')->render()), 200);
        } catch (\Throwable $e) {
            return response()->json(array('status' => 'error','msg' => 'Failed Show Form Insert','err'=>$e->getMessage()), 200);
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
                'name' => 'required',
                'desc' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(array('status' => 'error','msg' => 'Failed Insert Category','err'=>'Harap Periksa Kembali Inputan'), 200);
            }
            else{
                $kategori = new Category();
                $kategori->name = $request->get('name');
                $kategori->desc = $request->get('desc');

                $kategori->save();
                return response()->json(array('status' => 'success','msg' => 'Success Insert Category'), 200);
            }
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Insert Category','err'=>$th->getMessage()), 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        try {
            $id = decrypt($category);
            $category = Category::find($id);
            return response()->json(array('status' => 'success','msg' =>  view('admin.page.category.modal.update',compact('category'))->render()), 200);
        } catch (\Throwable $e) {
            return response()->json(array('status' => 'error','msg' => 'Failed Show Form Edit','err'=>$e->getMessage()), 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'desc' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(array('status' => 'error','msg' => 'Failed Update Category, Please Check Input'), 200);
            }
            else{
                $id = decrypt($category);
                $category = Category::find($id);
                $category->name = $request->get('name');
                $category->desc = $request->get('desc');
                $category->save();
                return response()->json(array('status' => 'success','msg' => 'Success Update Category'), 200);
            }
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Update Category','err'=>$th->getMessage()), 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        try {
            $id = decrypt($category);
            $category = Category::find($id);
        
            if ($category->products()->exists()) {
                return response()->json(array('status' => 'error','msg' => 'Cannot delete category. Products are associated with this category.'), 200);
            }
        
            $category->delete();
        
            return response()->json(array('status' => 'success','msg' => 'Success Delete Category'), 200);
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Error Delete Category','err'=>$th->getMessage()), 200);
        }
    }
}
