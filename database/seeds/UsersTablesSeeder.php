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
            User::create([
                'name'      => 'ameer maavia',
                'email'     => 'ameer.maavia@gmail.com',
                'password'  =>  Hash::make('abc123'),
                'role_id'   => '1'
            ]);
        }
    }
}
