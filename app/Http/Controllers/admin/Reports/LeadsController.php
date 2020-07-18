<?php

namespace App\Http\Controllers\admin\Reports;

use App\Exports\LeadsExport;
use App\Http\Controllers\Controller;
use App\Libraries\ExcelExport;
use App\Models\Leads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromArray;


class LeadsController extends Controller
{
    public function index()
    {

        $leads = Leads::paginate(5, ['id', 'user_id', 'status', 'message']);

        return \View::make('admin.reports.leads.index', compact('leads'));
    }

    public function destroy_undestroy($id){

        $leads = leads::find($id);
        if($leads){
            leads::destroy($id);
            $new_value = 'Activate';
        }
        else{
            leads::withTrashed()->find($id)->restore();
            $new_value = 'Deactivate';
        }
        $response = Response::json(["status"=>true,
            'action'=>Config::get('constants.ajax_action.update'),
            'new_value'=>$new_value
        ]);
        return $response;
    }


    public function query($date, $name)
    {

        $data = Leads::select('id','status','message');
        return $data;

        $report = DB::table('leads');

        $datearr = explode(' - ', $date);
        $fromdate = date("m/d/Y H:i:s", strtotime(str_replace('-', '/', $datearr[0])));
        $todate = date("m/d/Y H:i:s", strtotime(str_replace('-', '/', $datearr[0])));

        $report = $report->whereRaw('(date(created_at))>= ?',
            [date('Y-m-d H:i:s', strtotime($fromdate))])
            ->whereRaw('(date(created_at))<= ?',
                [date('Y-m-d H:i:s', strtotime($todate))])
            ->orderBy('created_at');

        if ($name) {
            $report = $report->where('name', 'like', '%' . $name . '%');
        }

        return $report->select(
            'id',
            'user_id',
            'status',
            'message'
        );
    }

    public function index_excel(Request $request)
    {
        // $data = array(
        //     array('data11', 'data12'),
        //     array('data19', 'data19')
        // );
        
        // $header = ['Heading 11', 'Heading 12']; //headers
        
        // $excel = Excel::download(new ExcelExport($data, $header), 'leads.xlsx');
        // return $excel;
        #Null comparision
        // return Excel::download(new LeadsExport, 'leads.xlsx');
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
