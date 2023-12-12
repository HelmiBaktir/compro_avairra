<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;

class CompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        // Mengelola data perusahaan
        $companyData = [];
        foreach ($companies as $company) {
            $phoneNumbers = explode(' // ', $company->phone_number);
            $addresses = explode(' // ', $company->address);
    
            $companyData[] = [
                'company' => $company,
                'phoneNumbers' => $phoneNumbers,
                'addresses' => $addresses,
            ];
        }
    
        return view('compro.index', ['companies' => $companyData]);
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
        // Ambil ID perusahaan dari input form jika ada (untuk keperluan update)
        $companyId = $request->input('company_id');

        // Jika ID perusahaan ada, maka ini adalah proses update
        if ($companyId) {
            $company = Company::findOrFail($companyId);
        } else {
            // Jika ID perusahaan tidak ada, maka ini adalah proses tambah baru
            $company = new Company();
        }

        $company->name = $request->input('txtCompanyName');
        
        // Simpan phone numbers ke dalam format yang sesuai (implode dengan ' // ')
        $company->phone_number = implode(' // ', $request->input('txtPhoneNumbers'));

        // Simpan alamat ke dalam format yang sesuai (implode dengan ' // ')
        $company->address = implode(' // ', $request->input('txtAddresses'));

        // ... tambahkan bagian lain dari data yang ingin Anda simpan ...

        $company->save();

        return redirect()->back()->with('success', 'Data perusahaan berhasil disimpan.');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
