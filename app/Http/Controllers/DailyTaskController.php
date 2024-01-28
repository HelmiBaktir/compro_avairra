<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DailyTask;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use DataTables;

class DailyTaskController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $dailyTasks = $user->dailyTasks;

        return view('admin.page.dailytask.index', compact('dailyTasks'));
        
    }

    public function tableData(){
        $user = Auth::user();
        $user = User::find($user->id);

        if($user->hasRole('staff')){
            $dailyTask = DailyTask::where('user_id',$user->id)->get();
        }
        else{
            $dailyTask = DailyTask::all();
        }
        $counter = 1;
        if (request()->ajax())
        {
            return Datatables::of($dailyTask)
                ->addColumn('No', function () use (&$counter)  {
                    return $counter++;
                })
                ->addColumn('User', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->user->name.'</span>';
                })
                ->addColumn('Report Date', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.date('d F y', strtotime($item->report_date)).'</span>';
                })
                ->addColumn('Afternoon Progress', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->afternoon_progress.'</span>';
                })
                ->addColumn('Action', function($item) {
                    $encryptedIdString = "'".strval(encrypt($item->id))."'";
                    return '<a onclick="showPreview('.$encryptedIdString.')" class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-info-circle"></i> Review
                            </a>';
                })
                ->rawColumns(['No','User','Report Date','Afternoon Progress','Action'])
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
    
        return view('admin.page.dailytask.create');
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
                'report_date' => 'required|date',
                'morning_task' => 'required',
                'afternoon_progress' => 'required',
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'msg' => 'Failed to create DailyTask',
                    'err' => $validator->errors(),
                ], 200);
            }
    
            // Buat DailyTask baru
            $user = Auth::user();
            $dailyTask = new DailyTask();
            $dailyTask->user_id = $user->id;
            $dailyTask->report_date = $request->report_date;
            $dailyTask->morning_task = $request->morning_task;
            $dailyTask->afternoon_progress = $request->afternoon_progress;
            $dailyTask->save();
    
            return response()->json([
                'status' => 'success',
                'msg' => 'DailyTask created successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'msg' => 'Failed to create DailyTask',
                'err' => $th->getMessage(),
            ], 200);
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
        try {
            $id = decrypt($id);
            $dailyTask = DailyTask::find($id);
            return response()->json(array('status' => 'success','msg' =>  view('admin.page.dailytask.modal.preview',compact('dailyTask'))->render()), 200);
        } catch (\Throwable $e) {
            return response()->json(array('status' => 'error','msg' => 'Failed Show Preview','err'=>$e->getMessage()), 200);
        }
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
