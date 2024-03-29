<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Adoption;
use App\Models\Dog;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdoptionController extends Controller
{
    
    public function showAdops(){


    	//$adops = Adoption::all()->where('idUse',auth()->user()->idUse);

    	$adops = Adoption::showForUser();

    	return view('dog.adoptions',['adops' => $adops]);

    }


    public function showRequest(){

    	$adops = Adoption::showForAdmin();

    	return view('admin.request',['adops' => $adops]);
    }


    public function changeStatus(Request $req){

    	$adop = $this->check($req);

    	$adop->changeStatus($req->input('value'))->save();

    	if($req->input('value') == 1):

    		$dog = Dog::find($req->input('idDog'));
    		//dd($dog);
    		$dog->changeStatusDog()->save();
    	endif;

    	return redirect()->route('adop.req') ;
    }



    private function check(Request $req)
    {

    	if ( (!$req->filled('idAdop')) && (!$req->filled('value')) )

    		return redirect()->route('admin') ;
    	

    	//
    	$adop = Adoption::find($req->input('idAdop')) ;

    	// 
    	if (!$adop)
    		return redirect()->route('admin') ;

    	//
    	return $adop ;
    }

}
