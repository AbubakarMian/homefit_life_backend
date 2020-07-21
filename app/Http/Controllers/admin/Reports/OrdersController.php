<?php

namespace App\Http\Controllers\admin\Reports;

use App\Http\Controllers\Controller;
use App\Libraries\ExcelExport;
use App\Models\Request as ModelsRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;

class OrdersController extends Controller
{
    public function index(Request $request)
    {
        $all = Config::get('constants.order_status.all');
        $pending = Config::get('constants.order_status.pending');
        $inprogress = Config::get('constants.order_status.inprogress');
        $completed = Config::get('constants.order_status.completed');
        $rejected = Config::get('constants.order_status.rejected');

        $search_text = $request->user;
        $date = $request->date;
        $status = $request->status ?? $all;

        $status_arr =[
            $all=>ucwords($all) ,
            $pending=>ucwords($pending) ,
            $inprogress=>ucwords($inprogress) ,
            $completed=>ucwords($completed),
            $rejected=>ucwords($rejected)
        ];

        if(!$date){
            $fromdate = Carbon::now()->subDay()->format('m/d/Y');
            $todate = Carbon::now()->format('m/d/Y');
            $date = $fromdate.' - '.$todate;
        }
        
        $orders = $this->query($search_text ,$date  ,$status)->paginate(10);

        // $leads = Leads::paginate(5, ['id', 'user_id', 'status', 'message']);

        return \View::make('admin.reports.orders.index', compact(
        'orders',
        'search_text',
        'status_arr',
        'status',
        'date'));
    }

    public function query($search_text ,$date  ,$status)
    {
        $datearr = explode(' - ', $date);
        $fromdate = date("m/d/Y H:i:s", strtotime(str_replace('-', '/', $datearr[0])));
        $todate = date("m/d/Y H:i:s", strtotime(str_replace('-', '/', $datearr[1])));

        $report = ModelsRequest::with('request_items')
        ->whereRaw('(date(created_at))>= ?',
        [date('Y-m-d H:i:s', strtotime($fromdate))])
        ->whereRaw('(date(created_at))<= ?',
            [date('Y-m-d H:i:s', strtotime($todate))]) ;

            $report = $report->whereHas('user',function($q)use($search_text){
                $q->where('name','like','%'.$search_text.'%');
            })
            ;

        if (strtolower($status)!='all') {
            $report = $report->where('status',$status);            
        }
        $report = $report->orderBy('created_at');

        return $report->select(
            'id',
            'user_id',
            'address',
            'total_price',
            'status'
        );
    }

    public function status_update(Request $request,$id){

        $modelRequest = ModelsRequest::find($id);
        $modelRequest->status = $request->status;
        $modelRequest->save();
        
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.delete'),
            'new_value'=>ucwords($request->status)
        ]);//dd($response );
        return $response;
    }

    public function index_excel(Request $request)
    {        
        $all = Config::get('constants.request_status.all');

        $search_text = $request->user;
        $date = $request->date;
        $status = $request->status ?? $all;
        $data = $this->query($search_text ,$date  ,$status)->get()->toArray();
        $headings = ['Id', 'Status','Message']; 

        $excel = Excel::download(new ExcelExport($data, $headings), 'leads.xlsx');
        return $excel;
    }
}
