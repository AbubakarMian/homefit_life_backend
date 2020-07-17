<?php

namespace App\Libraries;
use Response;
use DB;
use Excel;

trait Common
{
    public function prepare_excel($data , $field_not_required = []){
        $users = [];
        foreach ($data as $rec_key => $value){
            foreach ($value as $key=>$v){
                if(!in_array($key , $field_not_required)){
                    $users[$rec_key][str_replace("_"," ",$key)] = $v;
                }
            }
        }
        return $users;
    }


    public function export_excel($report_name,$users){

        Excel::create($report_name, function ($excel) use ($users) {
            $excel->sheet('Sheet 1', function ($sheet) use ($users) {
                $sheet->fromArray($users);
            });
        })->export('xls');

    }

























}