<?php

namespace App\Http\Controllers\admin\Reports;

use App\Http\Controllers\Controller;
use App\Libraries\ExcelExport;
use App\Models\Training_Session_Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Maatwebsite\Excel\Facades\Excel;

class Personal_Session_PaymentsController extends Controller
{
    public function index(Request $request)
    {
        $search_text = $request->user ??'';
        // dd($search_text);
        $personal_session_payments= $this->query($search_text )->paginate(10);
        // $personal_session_payments= Training_Session_Personal::paginate(10);
        // dd($personal_session_payments);
        return \View::make('admin.reports.personal_session_payments.index', compact(
            'personal_session_payments',
            'search_text'));
    }

    public function query($search_text)
    {
       
        $report = Training_Session_Personal::whereHas('trainer',function($q)use($search_text){
            $q->where('name','like','%'.$search_text.'%');
        });
        $report = $report->whereHas('user',function($q)use($search_text){
            $q->where('name','like','%'.$search_text.'%');
        });

        $report = $report->orderBy('created_at');

        return $report->select(
            'id',
            'price',
            'class_date',
            'class_time',
            'user_id',
            'payment_id',
            'trainer_id',
        );
    }



    public function index_excel(Request $request)
    {
        $all = Config::get('constants.request_status.all');
        // dd($request);
        $search_text = $request->user_excel;
        $date = $request->date;
//        $status = $request->status ?? $all;
        $data = $this->query($search_text ,$date )->get()->toArray();
        $headings = ['Id', 'Price','Class Date','Class Time'];
        $excel = Excel::download(new ExcelExport($data, $headings), 'personal session.xlsx');
        return $excel;
    }
}
