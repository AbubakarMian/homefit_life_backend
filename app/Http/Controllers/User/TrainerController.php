<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Trainer;
use App\Models\Trainer_Gallery;
use App\Models\Trainer_Training_Type;
use App\Models\Training_Class;
use App\Models\Training_Class_Users;
use App\Models\Training_Type;
use Illuminate\Http\Request;

class TrainerController extends Controller
{

  public function index(Request $request)
  {



    $search_text = $request->trainer ?? '';

    $all_trainers = $this->query($search_text, 'all');

    $featured_trainers = $this->query($search_text, 'featured');
    return \View('user.trainer.index', compact('featured_trainers', 'all_trainers'));
  }

  public function query($search_text, $type)
  {

    if ($type == 'all') {
      $report = Trainer::where('name', 'like', '%' . $search_text . '%');
      return $report->get();
    } else {
      $report = Trainer::where('name', 'like', '%' . $search_text . '%')->where('is_featured', 1);
      return $report->get();
    }
  }

  public function advanceSearch(Request $request)
  {

    $trainer = $this->advance_query($request);
    return $trainer;
  }

  public function advance_query($request)
  {

    $report = Trainer::where('name', 'like', '%' . $request->trainer_name . '%')
      ->orWhere('gender', $request->gender)
      ->where('country', 'like', '%' . $request->location . '%');

    return $report->get();
  }

  public function sortByGroupClass(Request $request)
  {

    $group_class = Training_Class::with(['trainer' => function ($t) use ($request) {
      $t->where('trainer.name', 'like', '%' . $request->trainer_name . '%');
      $t->orWhere('trainer.gender', $request->gender);
      $t->where('trainer.country', 'like', '%' . $request->location . '%');
    }])->get();
    return $group_class;
  }


  public function trainerclassprofile(Request $request)
  {

    $trainer = Trainer::with('user')->find($request->trainer);
    $trainer_categories = Trainer_Training_Type::with('training_type')->where('trainer', $request->trainer)->get();
    $items_list = Training_Class_Users::where('user_id', $trainer->user->id)->with('user', 'trainingclass', 'package')->get();
    $per_page = 4;
    $trainig_class = $this->get_items_per_page($items_list, $per_page);
    $packages= Package::where('trainer_id',$request->trainer)->get();
    $trainer_gallery= Trainer_Gallery::where('trainer_id',$request->trainer)->get();


    return \View('user.trainerprofile.index', compact('trainer', 'trainer_categories', 'trainig_class','packages','trainer_gallery'));
  }

  public function get_items_per_page($items_list, $per_page)
  {
    $items_count = $items_list->count();
    $items_split_count = $items_count / $per_page;
    $items_split_count = is_float($items_split_count) ? floor($items_split_count) + 1 : $items_split_count;
    $items_list = $items_list->split($items_split_count);
    return $items_list;
  }
}
