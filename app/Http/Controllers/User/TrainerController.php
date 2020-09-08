<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    
    public function index(Request $request){

        
    
        $search_text = $request->trainer??'';

        $all_trainers= $this->query($search_text ,'all');

        $featured_trainers= $this->query($search_text ,'featured');
        return \View('user.trainer.index',compact('featured_trainers','all_trainers'));
    }

    public function query($search_text, $type){
      
      if($type == 'all'){
        $report = Trainer::where('name','like','%'.$search_text.'%');
        return $report->get();
      }  
      else{
        $report = Trainer::where('name','like','%'.$search_text.'%')->where('is_featured',1);
        return $report->get();
      }
    }

}
