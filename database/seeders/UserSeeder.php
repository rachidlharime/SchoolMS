<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            ['username'=>'loremipsum','password'=>Hash::make('lorem123'), 'isAdmin'=>1]
        );
        User::create(
            ['username'=>'johndoe', 'password'=>Hash::make('john123'), 'isTeacher'=>1]
        );
        User::create(
            ['username'=>'jdoe', 'password'=>Hash::make('doe123'), 'isStudent'=>1]
        );
    }
}
