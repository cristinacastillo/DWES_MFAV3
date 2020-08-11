<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * 
     * 
     * @return view
     */
    public function index(){

    	return view('admin.index');

    }

    public function users(){

    	$users = User::all();

    	return view('admin.users', ['users' => $users]);
    }

   
}
