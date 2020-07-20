<?php

namespace App\Http\Controllers\admin\Reports;

use App\Exports\LeadsExport;
use App\Http\Controllers\Controller;
use App\Libraries\ExcelExport;
use App\Models\Leads;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromArray;


class LeadsController extends Controller
{
    public function index(Request $request)
    {        
        $search_text = $request->user;
        $date = $request->date;
        $status = $request->status;

        $pending = Config::get('constants.request_status.pending');
        $rejected = Config::get('constants.request_status.rejected');
        $confirmed = Config::get('constants.request_status.accepted');

        $status_arr =['All'=>'All',
            Config::get('constants.request_status.pending')=>ucwords($pending) ,
            Config::get('constants.request_status.rejected')=>ucwords($rejected),
            Config::get('constants.request_status.accepted')=>ucwords($confirmed)
        ];

        if(!$status){
            $status='All';
        }

        if(!$date){
            $fromdate = Carbon::now()->subDay()->format('m/d/Y');
            $todate = Carbon::now()->format('m/d/Y');
            $date = $fromdate.' - '.$todate;
        }
        
        $leads = $this->query($search_text ,$date  ,$status)->paginate(10);

        // $leads = Leads::paginate(5, ['id', 'user_id', 'status', 'message']);

        return \View::make('admin.reports.leads.index', compact(
        'leads',
        'search_text',
        'status_arr',
        'status',
        'date'));
    }


    public function accept_trainer(Request $request,$id){

        $lead = leads::find($id);
        dd($request->all());
        $lead->status = 'accepted';
        $lead->save();
        
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.update'),
            'new_value'=>'Accepted'
        ]);
        return $response;
    }

    public function reject_trainer(Request $request,$id){

        $lead = leads::find($id);
        $lead->status = 'rejected';
        $lead->save();
        
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.update'),
            'new_value'=>'Rejected'
        ]);
        return $response;
    }

    public function status_update(Request $request,$id){

        $lead = leads::find($id);
        dd($request->all());
        $lead->status = $request->request_status;
        $lead->save();
        
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.delete'),
            'new_value'=>$request->request_status
        ]);//dd($response );
        return $response;
    }

    public function query($search_text ,$date  ,$status)
    {

        // $data = Leads::select();
        // return $data;

        // $report = DB::table('leads');


        $datearr = explode(' - ', $date);
        $fromdate = date("m/d/Y H:i:s", strtotime(str_replace('-', '/', $datearr[0])));
        $todate = date("m/d/Y H:i:s", strtotime(str_replace('-', '/', $datearr[1])));

        $report = Leads::with('user')
        ->whereRaw('(date(created_at))>= ?',
        [date('Y-m-d H:i:s', strtotime($fromdate))])
        ->whereRaw('(date(created_at))<= ?',
            [date('Y-m-d H:i:s', strtotime($todate))])
        ;
        // dd($todate);

            $report = $report->whereHas('user',function($q)use($search_text){
                $q->where('name','like','%'.$search_text.'%');
            });


       

        if (strtolower($status)!='all') {
            $report = $report->where('status',$status);            
        }
        $report = $report->orderBy('created_at');

        return $report->select(
            'id',
            'user_id',
            'status',
            'message'
        );
    }

    public function index_excel(Request $request)
    {
        $name = $request->user_id;
        $date = $request->status;
        $type = $request->message;
        $data = $this->query($date, $name)->get()->toArray();
        $headings = ['Id', 'Status','Message']; 

        $excel = Excel::download(new ExcelExport($data, $headings), 'leads.xlsx');
        return $excel;
        $response = Response::json(["status" => true
        ]);
        return $response;
        //    return Redirect::back();
    }

}
