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
            ['email'=>'loremipsum@gmail.com','username'=>'loremipsum',
             'password'=>Hash::make('lorem123'), 'isAdmin'=>1]
        );
        User::create(
            ['username'=>'marknoble', 'password'=>Hash::make('noble789'), 'isTeacher'=>1]
        );
        User::create(
            ['username'=>'merylhawk', 'password'=>Hash::make('hawk456'), 'isTeacher'=>2]
        );
        User::create(
            ['username'=>'johndoe', 'password'=>Hash::make('doe123'), 'isStudent'=>1]
        );
        User::create(
            ['username'=>'natalie', 'password'=>Hash::make('portman'), 'isStudent'=>2]
        );
    }
}
