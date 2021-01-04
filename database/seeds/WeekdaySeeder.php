<?php

use App\Models\Weekday;
use Illuminate\Database\Seeder;

class WeekdaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Weekday::insert([
            ['id' => 1,'name' => 'monday'],
            ['id' => 2,'name' => 'tuesday'],
            ['id' => 3,'name' => 'wednesday'],
            ['id' => 4,'name' => 'thursday'],
            ['id' => 5,'name' => 'friday'],
            ['id' => 6,'name' => 'satday'],
            ['id' => 7,'name' => 'sunday'],
        ]);
    }
}
