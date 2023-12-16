<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\SosialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;

class SosialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return view('admin.page.sosial_media.index');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function tableDataAdmin(){
        $sosial_media = SosialMedia::all();
        $counter = 1;
        if (request()->ajax())
        {
            return Datatables::of($sosial_media)
                ->addColumn('No', function () use (&$counter)  {
                    return $counter++;
                })
                ->addColumn('Company', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->company->name.'</span>';
                })
                ->addColumn('Platform', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->platform.'</span>';
                })
                ->addColumn('Link', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->link.'</span>';
                })
                ->addColumn('Action', function ($item) {
                    $encryptedIdString = "'".strval(encrypt($item->id))."'";
                    $button ='
                    <button onclick="showModalUpdateSosialMedia('.$encryptedIdString.')" class="btn btn-primary border border-1  py-2">Update</button>
                    <button onclick="deleteSosialMedia('.$encryptedIdString.')" class="btn btn-danger border border-1  py-2">Delete</button>';
                    return $button;
                })
                ->rawColumns(['No','Company','Platform','Link','Action'])
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
            $company = Company::all();
            return response()->json(array('status' => 'success','msg' =>  view('admin.page.sosial_media.modal.create',compact('company'))->render()), 200);
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
                'company' => 'required',
                'link' => 'required',
                'platform' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(array('status' => 'error','msg' => 'Failed Insert Sosial Media','err'=>'Harap Periksa Kembali Inputan'), 200);
            }
            else{
                $sosial_media = new SosialMedia();
                $sosial_media->company_id = $request->get('company');
                $sosial_media->platform = $request->get('platform');
                $sosial_media->link = $request->get('link');
                $sosial_media->save();
                return response()->json(array('status' => 'success','msg' => 'Success Insert Sosial Media'), 200);
            }
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Insert Sosial Media','err'=>$th->getMessage()), 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SosialMedia  $sosialMedia
     * @return \Illuminate\Http\Response
     */
    public function show(SosialMedia $sosialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SosialMedia  $sosialMedia
     * @return \Illuminate\Http\Response
     */
    public function edit($sosialMedia)
    {
        try {
            $id = decrypt($sosialMedia);
            $sosialMedia = SosialMedia::find($id);
            $company = Company::all();
            return response()->json(array('status' => 'success','msg' =>  view('admin.page.sosial_media.modal.update',compact('sosialMedia','company'))->render()), 200);
        } catch (\Throwable $e) {
            return response()->json(array('status' => 'error','msg' => 'Failed Show Form Edit','err'=>$e->getMessage()), 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SosialMedia  $sosialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sosialMedia)
    {
        try {
            $validator = Validator::make($request->all(), [
                'company' => 'required',
                'link' => 'required',
                'platform' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(array('status' => 'error','msg' => 'Failed Update Sosial Media','err'=>'Harap Periksa Kembali Inputan'), 200);
            }
            else{
                $sosial_media = decrypt($sosialMedia);
                $sosial_media = SosialMedia::find($sosial_media);
                $sosial_media->company_id = $request->get('company');
                $sosial_media->platform = $request->get('platform');
                $sosial_media->link = $request->get('link');
                $sosial_media->save();
                return response()->json(array('status' => 'success','msg' => 'Success Update Sosial Media'), 200);
            }
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Update Sosial Media','err'=>$th->getMessage()), 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SosialMedia  $sosialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy($sosialMedia)
    {
        try {
            $id = decrypt($sosialMedia);
            $sosial_media = SosialMedia::find($id);
            $sosial_media->delete();
            return response()->json(array('status' => 'success','msg' => 'Success Delete Sosial Media'), 200);
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Delete Sosial Media','err'=>$th->getMessage()), 200);
        }
    }
}
