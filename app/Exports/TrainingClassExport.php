<?php

namespace App\Exports;

use App\Models\Training_Class as ModelsTraining_Class;
use App\Training_Class;

use Maatwebsite\Excel\Concerns\FromCollection;

class TrainingClassExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ModelsTraining_Class::all();
    }
}
