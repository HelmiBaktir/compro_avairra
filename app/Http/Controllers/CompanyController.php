<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return view('admin.page.company.index');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
    public function tableDataAdmin(){
        $company = Company::all();
        $counter = 1;
        if (request()->ajax())
        {
            return Datatables::of($company)
                ->addColumn('No', function () use (&$counter)  {
                    return $counter++;
                })
                ->addColumn('Name', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->name.'</span>';
                })
                ->addColumn('Email', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->email.'</span>';
                })
                ->addColumn('Phone Number', function($item) {
                    $phone_number =  explode('//', $item->phone_number);
                    $list = '<ul>';
                    foreach ($phone_number as $key => $value) {
                        $list .= '<li>'.$value.'</li>';
                    }
                    $list .= '</ul>';
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$list.'</span>';
                })
                ->addColumn('Address', function($item) {
                    $address =  explode('//', $item->address);
                    $list = '<ul>';
                    foreach ($address as $key => $value) {
                        $list .= '<li>'.$value.'</li>';
                    }
                    $list .= '</ul>';
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$list.'</span>';
                })
                ->addColumn('Action', function ($item) {
                    $encryptedIdString = "'".strval(encrypt($item->id))."'";
                    $button ='
                    <button onclick="showModalUpdateCompany('.$encryptedIdString.')" class="btn btn-primary border border-1  py-2">Update</button>';
                    //<button onclick="deleteCompany('.$encryptedIdString.')" class="btn btn-danger border border-1  py-2">Delete</button>';
                    return $button;
                })
                ->rawColumns(['No','Name','Email','Phone Number','Address','Action'])
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
            return response()->json(array('status' => 'success','msg' =>  view('admin.page.company.modal.create')->render()), 200);
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
                'email' => 'required',
                'phone_number' => 'required',
                'address' => 'required',

            ]);
            if ($validator->fails()) {
                return response()->json(array('status' => 'error','msg' => 'Failed Insert Company','err'=>'Harap Periksa Kembali Inputan'), 200);
            }
            else{
                // Adresss
                $address = $request->get('address');
                $address_compile = implode('//', $address);
                // Phone Number
                $phone_number = $request->get('phone_number');
                $phone_compile = implode('//', $phone_number);
                // Insert
                $company = new Company();
                $company->name = $request->get('name');
                $company->email = $request->get('email');
                $company->phone_number = $phone_compile;
                $company->address = $address_compile;
                $company->save();
                return response()->json(array('status' => 'success','msg' => 'Success Insert Company'), 200);
            }
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Insert Company','err'=>$th->getMessage()), 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($company)
    {
        try {
            $id = decrypt($company);
            $company = Company::find($id);
            return response()->json(array('status' => 'success','msg' =>  view('admin.page.company.modal.update',compact('company'))->render()), 200);
        } catch (\Throwable $e) {
            return response()->json(array('status' => 'error','msg' => 'Failed Show Form Edit','err'=>$e->getMessage()), 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $company)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
                'address' => 'required',

            ]);
            if ($validator->fails()) {
                return response()->json(array('status' => 'error','msg' => 'Failed Update Company','err'=>'Harap Periksa Kembali Inputan'), 200);
            }
            else{
                // Adresss
                $address = $request->get('address');
                $address_compile = implode('//', $address);
                // Phone Number
                $phone_number = $request->get('phone_number');
                $phone_compile = implode('//', $phone_number);
                // Insert
                $company = decrypt($company);
                $company = Company::find($company);
                $company->name = $request->get('name');
                $company->email = $request->get('email');
                $company->phone_number = $phone_compile;
                $company->address = $address_compile;
                $company->save();
                return response()->json(array('status' => 'success','msg' => 'Success Update Company'), 200);
            }
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Update Company','err'=>$th->getMessage()), 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($company)
    {
        try {
            $id = decrypt($company);
            $company = Company::find($id);
            $company->delete();
            return response()->json(array('status' => 'success','msg' => 'Success Delete Company'), 200);
        } catch (\Throwable $th) {
            return response()->json(array('status' => 'error','msg' => 'Failed Delete Company','err'=>$th->getMessage()), 200);
        }
    }
}
