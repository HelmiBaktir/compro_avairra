<?php

namespace App\Http\Controllers;

use DataTables;
use Carbon\Carbon;
use App\Models\User;
use App\Models\DailyTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        if($user->getRoleNames()->first()  == 'staff'){
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
                ->addColumn('Morning Task', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.$item->morning_task.'</span>';
                })
                ->addColumn('Morning Task Datetime', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.Carbon::parse($item->morning_task_time)->format('d-m-Y H:i:s').'</span>';
                })
                ->addColumn('Afternoon Progress', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.($item->afternoon_progress ? $item->afternoon_progress : '-').'</span>';
                })
                ->addColumn('Afternoon Progress Datetime', function($item) {
                    return '<span  class="text-gray-800 fs-5 fw-bold mb-1">'.($item->afternoon_progress ? Carbon::parse($item->afternoon_progress_time)->format('d-m-Y H:i:s') : '-').'</span>';
                })
                ->addColumn('Action', function($item) {
                    $encryptedIdString = "'".strval(encrypt($item->id))."'";
                    $update = '';
                    if(!$item->afternoon_progress){
                        $update ='<a onclick="showModalUpdate('.$encryptedIdString.')" class="btn btn-info btn-sm me-3" href="#">
                            <i class="fas fa-pen"></i> Update
                        </a>';
                    }
                    return $update.'<a onclick="showPreview('.$encryptedIdString.')" class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-info-circle"></i> Review
                            </a>';
                })
                ->rawColumns(['No','User','Report Date','Morning Task','Morning Task Datetime','Afternoon Progress','Afternoon Progress Datetime','Action'])
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
            return response()->json(array('status' => 'success','msg' =>  view('admin.page.dailytask.modal.create')->render()), 200);
        } catch (\Throwable $e) {
            return response()->json(array('status' => 'error','msg' => 'Failed Show Form Insert','err'=>$e->getMessage()), 200);
        }
        // return view('admin.page.dailytask.create');
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
            $dailyTask->morning_task_time = Carbon::now('Asia/Jakarta');

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
        try {
            $id = decrypt($id);
            $dailyTask = DailyTask::find($id);
            return response()->json(array('status' => 'success','msg' =>  view('admin.page.dailytask.modal.update',compact('dailyTask'))->render()), 200);
        } catch (\Throwable $e) {
            return response()->json(array('status' => 'error','msg' => 'Failed Show Form Update','err'=>$e->getMessage()), 200);
        }
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
            // dd($request->afternoon_progress);
            $validator = Validator::make($request->all(), [
                'afternoon_progress_update' => 'required',
            ]);
            // har tes
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'msg' => 'Failed to create DailyTask',
                    'err' => $validator->errors(),
                ], 200);
            }
            $dailyTask = DailyTask::find(decrypt($id));
            $dailyTask->afternoon_progress = $request->afternoon_progress_update;
            $dailyTask->afternoon_progress_time = Carbon::now('Asia/Jakarta');
            $dailyTask->save();
    
            return response()->json([
                'status' => 'success',
                'msg' => 'DailyTask update successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'msg' => 'Failed to update DailyTask',
                'err' => $th->getMessage(),
            ], 200);
        }
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
