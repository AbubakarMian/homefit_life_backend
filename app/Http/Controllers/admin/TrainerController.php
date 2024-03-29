<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use App\Models\Trainer_Training_Type;
use App\Models\Training_Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;



class TrainerController extends Controller
{
    public function index()
    {

        $trainer = Trainer::withTrashed()->paginate(5, ['id', 'user_id', 'name', 'gender', 'rating', 'specialities', 'is_featured', 'deleted_at']);

        return \View::make('admin.modules.trainer.index', compact('trainer'));
    }
    public function edit($id)
    {
        $all_training_type = Training_Type::pluck('name', 'id');

        $training_type_arr = Training_Type::leftjoin('trainer_training_types', function ($q) use ($id) {
            $q->whereRaw('training_type.id = trainer_training_types.training_type  and trainer_training_types.trainer =' . $id)
                ->whereNull('trainer_training_types.deleted_at');
        })

            ->get([
                'training_type.name', 'training_type.id',
                DB::Raw('case when trainer_training_types.id is null 
                                                    then "unchecked"
                                                    else "checked"
                                                end as training_types')
            ])->split(2)
            ->toArray();


        $control = 'edit';
        $trainer = Trainer::withTrashed()->find($id);
        return \View::make('admin.modules.trainer.create', compact('control', 'all_training_type', 'trainer', 'training_type_arr'));
    }
    public function update(Request $request, $id)
    {
        $trainer = Trainer::withTrashed()->find($id);
        $this->add_or_update($request, $trainer);
        return Redirect('admin/trainer');
    }
    public function add_or_update(Request $request, $trainer)
    {
        $trainer->name = $request->name;
        $trainer->gender = $request->gender == '1' ? 1 : 0;
        $trainer->rating = $request->rating;
        $trainer->specialities = $request->specialities;
        $trainer->is_featured = $request->is_featured == 'on' ? 1 : 0;

        $trainer->save();

        Trainer_Training_Type::where('trainer', $trainer->id)->delete();

        foreach ($request->all() as $key => $input) {

            if (strpos($key, 'training_type_') !== false) {

                $trainer_training_type = new Trainer_Training_Type();
                $trainer_training_type->trainer = $trainer->id;
                $trainer_training_type->training_type = $input;
                $trainer_training_type->save();
            }
        }
        return true;
    }
    public function destroy_undestroy($id)
    {

        $trainer = Trainer::find($id);
        if ($trainer) {
            Trainer::destroy($id);
            $new_value = 'Enable';
        } else {
            Trainer::withTrashed()->find($id)->restore();
            $new_value = 'Disable';
        }
        $response = Response::json([
            "status" => true,
            'action' => Config::get('constants.ajax_action.update'),
            'new_value' => $new_value
        ]);
        return $response;
    }
}
