<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use DataTables;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return view('admin.page.banner.index');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function tableDataAdmin(){
        $banner = Banner::all();
        $counter = 1;
        if (request()->ajax())
        {
            return Datatables::of($banner)
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
                    return $preview;
                })
                ->addColumn('Posision', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->posision.'</span>';
                })
                ->addColumn('Action', function ($item) {
                    $encryptedIdString = "'".strval(encrypt($item->id))."'";
                    $delete_button = '';
                    if($item->posision == 'Home'){
                        $delete_button = '<div class="menu-item px-3">
                        <a href="#" onclick="deleteBanner('.$encryptedIdString.')" class="menu-link px-3">Delete</a>
                    </div>';
                    }
                    else{
                        $delete_button = '';
                    }
                   
                    $button =
                    '
                    <div class="dropdown">
                        <button class="btn btn-sm btn-light btn-flex btn-center btn-active-light-success" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                            Action
                            <i class="ki-duotone ki-down fs-5 ms-1"></i>
                        </button>
                        <div class="position-absolute dropdown-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-150px py-1" aria-labelledby="menu-" data-popper-placement="bottom-start" style="inset: 0px auto auto 0px; margin: 0px; transform: translate(-48px, 54px);">
                            <div class="menu-item px-3">
                                <a href="#" onclick="updateBanner('.$encryptedIdString.')"  class="menu-link px-3">Update</a>
                            </div>
                            '.$delete_button.'
                        </div>
                    </div>
                    ';   
                    return $button;
                })
                ->rawColumns(['No','Image','Posision','Action'])
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
            return response()->json(array('status' => 'success','msg' =>  view('admin.page.banner.modal.create')->render()), 200);
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
                'posision' => 'required',
                'image' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(array('status' => 'error','msg' => 'Failed Insert Banner','err'=>'Harap Periksa Kembali Inputan'), 200);
            }
            else{
                $banner = new Banner();
                $banner->posision = $request->get('posision');
                $banner->save();
                // $id_new = $product->id;
                $image = $request->file('image');
                if($image){
                    $path = public_path('banner/' . $request->get('posision'));
                    $fileName =  $image->getClientOriginalName();
                    if (!File::isDirectory($path)) {
                        File::makeDirectory($path, 0777, true, true);
                        $image->move($path, $fileName);
                    } else {
                        $image->move($path, $fileName);
                    }
                    // Add To Database
                    $banner->image_path = 'banner/'.$request->get('posision').'/'.$fileName;
                    $banner->save();
                }
                return response()->json(array('status' => 'success','msg' => 'Success Insert Banner'), 200);
            }
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Insert Banner','err'=>$th->getMessage()), 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($banner)
    {
        try {
            $id = decrypt($banner);
            $banner = Banner::find($id);
            return response()->json(array('status' => 'success','msg' =>  view('admin.page.banner.modal.update',compact('banner'))->render()), 200);
        } catch (\Throwable $e) {
            return response()->json(array('status' => 'error','msg' => 'Failed Show Form Edit','err'=>$e->getMessage()), 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $banner)
    {
        try {
            $validator = Validator::make($request->all(), [
                'posision' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(array('status' => 'error','msg' => 'Failed Update Product','err'=>'Harap Periksa Kembali Inputan'), 200);
            }
            else{
                $id = decrypt($banner);
                $banner = Banner::find($id);
                $banner->posision = $request->get('posision');
                $banner->save();
                // $id_new = $product->id;
                $image = $request->file('image');
                if($image){
                    $path = public_path('banner/' .$request->get('posision'));
                    $fileName =  $image->getClientOriginalName();
                    if (!File::isDirectory($path)) {
                        File::makeDirectory($path, 0777, true, true);
                        $image->move($path, $fileName);
                    } else {
                        $image->move($path, $fileName);
                    }
                    // Add To Database
                    $banner->image_path = 'banner/'.$request->get('posision').'/'.$fileName;
                    $banner->save();
                }
                return response()->json(array('status' => 'success','msg' => 'Success Update Banner'), 200);
            }
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Update Banner','err'=>$th->getMessage()), 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($banner)
    {
        try {
            $id = decrypt($banner);
            $banner = Banner::find($id);
            $banner->delete();
            return response()->json(array('status' => 'success','msg' => 'Success Delete Banner'), 200);
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Delete Banner','err'=>$th->getMessage()), 200);
        }
    }
}
