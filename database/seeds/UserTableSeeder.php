<?php

use App\Auth\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@domain.com',
            'password' => bcrypt('admin')
        ]);
    }

}