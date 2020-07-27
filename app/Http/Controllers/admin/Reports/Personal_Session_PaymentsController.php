<?php

namespace App\Http\Controllers\admin\Reports;

use App\Http\Controllers\Controller;
use App\Models\Training_Session_Personal;
use Illuminate\Http\Request;

class Personal_Session_PaymentsController extends Controller
{
    public function index(Request $request)
    {
        $search_text = $request->user ??'';

        $personal_session_payments= Training_Session_Personal::paginate(10);
//        dd($personal_session_payments);
        return \View::make('admin.reports.personal_session_payments.index', compact(
            'personal_session_payments',
            'search_text'));
    }

    public function query($search_text  )
    {
        $report = Training_Session_Personal::whereHas('trainer',function($q)use($search_text){
            $q->where('name','like','%'.$search_text.'%');
        });;

        $report = $report->whereHas('user',function($q)use($search_text){
            $q->where('name','like','%'.$search_text.'%');
        });

        $report = $report->orderBy('created_at');

        return $report->select(
            'id',
            'price'
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
