<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use App\Models\Training_Class;
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

    public function advanceSearch(Request $request){

      $trainer = $this->advance_query($request);
      return $trainer ;


    }

    public function advance_query($request){

      $report = Trainer::
      where('name','like','%'.$request->trainer_name.'%')
      ->orWhere('gender',$request->gender)
      ->where('country','like','%'.$request->location.'%');

      return $report->get();

    }

    public function sortByGroupClass(Request $request){

      $group_class =Training_Class::with(['trainer'=> function ($t) use ($request) {
            $t->where('trainer.name','like','%'.$request->trainer_name.'%');
            $t->orWhere('trainer.gender',$request->gender);
            $t->where('trainer.country','like','%'.$request->location.'%');
            }])->get();
             return $group_class;

    }


}
