<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function infoUser()
    {

        return view('auth.profile');
    }

    public function changePass(Request $req)
    {
    	//$pass = auth()->user()->password;

    	//echo $pass;
    	$req->validate([
                    'password'         => 'required|min:5|confirmed',
           			'current_password' => 'isCurrentPassword',
        ]);
      
        $req->user()->fill([
            'password' => Hash::make($req->password),
        ])->save();

        return redirect()->route('user.profile')->with('info', 'Your password has been updated succesfully.');

    }

    public function deleteAccount(Request $req){

        // check if the id exists

        if(!$req->has('idUse') && !$req->input('idUse'))

            return redirect('/');

            $user =  User::find($req->input('idUse'));

            if($user) $user->delete();

            return redirect('/');

    }
}
