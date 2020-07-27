<?php

namespace App\Http\Controllers\admin\Reports;

use App\Http\Controllers\Controller;
use App\Models\Request as ModelsRequest;
use App\Models\Trainer;
use App\Models\Training_Class;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Libraries\ExcelExport;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;

class RegisterdStudentsController extends Controller
{
    public function index(Request $request)
    {
        $search_text = $request->user;

        $registered_students= $this->query($search_text )->paginate(10);

        return \View::make('admin.reports.registered_students.index', compact(
            'registered_students',
            'search_text'));
    }

    public function query($search_text  )
    {
        $report = Training_Class::with('trainer');

         $report = $report->whereHas('trainer',function($q)use($search_text){
             $q->where('name','like','%'.$search_text.'%');
         });

        $report = $report->orwhere('name','like','%'.$search_text.'%');

        $report = $report->orderBy('created_at');

        return $report->select(
            'id',
            'name',
            'trainer_id',
            'type_id'
        );
    }

//    public function status_update(Request $request,$id){
//
//        $modelRequest = ModelsRequest::find($id);
//        $modelRequest->status = $request->status;
//        $modelRequest->save();
//
//        $response = Response::json(["status"=>true,
//            'action'=>Config::get('constants.ajax_action.delete'),
//            'new_value'=>ucwords($request->status)
//        ]);//dd($response );
//        return $response;
//    }

    public function index_excel(Request $request)
    {
        $all = Config::get('constants.request_status.all');

        $search_text = $request->user;
        $date = $request->date;
//        $status = $request->status ?? $all;
        $data = $this->query($search_text ,$date )->get()->toArray();
        $headings = ['Id', 'Status','Message'];

        $excel = Excel::download(new ExcelExport($data, $headings), 'leads.xlsx');
        return $excel;
    }
}
