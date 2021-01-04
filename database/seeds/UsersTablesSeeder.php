<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            User::firstOrCreate([
                'name'      => 'Super admin',
                'email'     => 'admin@mail.com',
                'password'  =>  Hash::make('123456'),
                'role_id'   => '1'
            ]);
        }
    }
}
