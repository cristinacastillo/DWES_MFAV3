<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Adoption;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * 
     * 
     * @return view
     */
    public function index(){

    	$users = DB::table('user')->where('profile',0)->paginate(10, ['*'], 'users');

        $adops = Adoption::showForAdmin();

        
        //$dog = DB::table('dog')->where('status', 0)->simplePaginate(6);

        //dd($adops->isEmpty());

        return view('admin.index', ['users' => $users,'adops' => $adops]);

    }

    public function users(){

    	//$users = User::all()->paginate(15);

        $users = DB::table('user')->where('profile',0)->paginate(15);
        //$dog = DB::table('dog')->where('status', 0)->simplePaginate(6);

    	return view('admin.index', ['users' => $users]);
    }

   
}
