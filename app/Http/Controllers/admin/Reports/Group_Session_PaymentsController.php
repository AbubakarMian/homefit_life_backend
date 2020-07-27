<?php

namespace App\Http\Controllers\admin\Reports;

use App\Http\Controllers\Controller;
use App\Libraries\ExcelExport;
use App\Models\Training_Class;
use App\Models\Training_Class_Users;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\Trainer;
use Illuminate\Support\Facades\Config;
use Maatwebsite\Excel\Facades\Excel;
class Group_Session_PaymentsController extends Controller
{
    public function index(Request $request)
    {
        $search_text = $request->user;

        $group_session_payments= $this->query($search_text  )->paginate(10);

        return \View::make('admin.reports.group_session_payments.index', compact(
            'group_session_payments',
            'search_text'));
        }

    public function query($search_text  )
    {
        $report = Training_Class_Users::whereHas('trainingclass',function($q)use($search_text){
            $q->whereHas('trainer',function($t) use($search_text){
                $t->where('name','like','%'.$search_text.'%');
            });
        });

        $report = $report->whereHas('user',function($q)use($search_text){
            $q->where('name','like','%'.$search_text.'%');
        });

        $report = $report->orderBy('created_at');

        return $report->select(
            'id',
            'total_purchased_session',
            'session_left','user_id','training_class_id'
        );
    }



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
