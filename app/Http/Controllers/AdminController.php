<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function editUsername()
    {
        return view('settings.username', ['title'=>'SchoolMS - Change your username']);
    }

    public function updateUsername(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'password' => ['required', new MatchOldPassword],
            'con_password' => ['same:password'],
        ],
        [
            'same' => 'password must match'
        ]);
   
        User::find(Auth::user()->id)->update(['username'=>$req->username]);

        return redirect()->route('home')->with('msg','You have changed your username');
    }

    public function editPassword()
    {
        return view('settings.password', ['title'=>'SchoolMS - Change your password']);
    }

    public function updatePassword(Request $req)
    {
        $req->validate([
            'cur_pwd' => ['required', new MatchOldPassword],
            'new_pwd' => ['required','min:6'],
            'con_new_pwd' => ['same:new_pwd'],
        ],
        [
            'min' => 'Your password must contain at least 6 characters',
            'same' => 'password must match'
        ]);
   
        User::find(Auth::user()->id)->update(['password'=>Hash::make($req->new_pwd)]);

        return redirect()->route('home')->with('msg','You have changed your password');
    }
}
