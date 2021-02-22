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

        Weekday::firstOrCreate(
            ['id' => 1,'name' => 'monday'],
        );
        Weekday::firstOrCreate(
            ['id' => 2,'name' => 'tuesday'],
        );
        Weekday::firstOrCreate(
            ['id' => 3,'name' => 'wednesday'],
        );
        Weekday::firstOrCreate(
            ['id' => 4,'name' => 'thursday'],
        );
        Weekday::firstOrCreate(
            ['id' => 5,'name' => 'friday'],
        );
        Weekday::firstOrCreate(
            ['id' => 6,'name' => 'satday'],
        );
        Weekday::firstOrCreate(
            ['id' => 7,'name' => 'sunday'],
        );
           
    }
}
