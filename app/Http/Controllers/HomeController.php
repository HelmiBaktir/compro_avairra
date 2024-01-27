<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DailyTask;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            if(Auth::user()->role == 'admin'){
                return view('admin.page.home.index');
            }
            else{
                return view('admin.page.dailytask.index');
            }
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
