<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Adoption;
use App\Models\Dog;
use App\Models\User;

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

        //dd($adops[2]->nameDog);

    	return view('admin.request',['adops' => $adops]);
    }


    public function changeStatus(Request $req){

    	$adop = $this->check($req);

    	$adop->changeStatus($req->input('value'))->save();

    	if($req->input('value') == 1):

    		$dog = Dog::find($req->input('idDog'));
    		//dd($dog);
            $adop->dateAdop = Carbon::now();
            $adop->save();
    		$dog->changeStatusDog()->save();
    	endif;
        
        return back();
    	//return redirect()->route('adop.req') ;
    }

    public function deleteAdop(Request $req){


        if(!$req->has('idAdop') || !$req->has('idUse')) return back();

        $adop = Adoption::find($req->input('idAdop'));

        if(!$adop || ($req->has('idUse') != auth()->user()->idUse) ) return back();

        $adop->delete();

        return back();

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


    public function search2(Request $req){

       //Check if $req contains ajax or clear
        if($req->ajax2() && $req->search2 != ""):

            $output= "";
            $data="";

            $data = DB::table('user')->where('name','LIKE','%'.$req->search2."%")->get();

            if($data):
                foreach ($data as $item):
                    /* $output.='<tr>'.
                    "<td><a href=". "localhost/mfa/mfa/public/users/view?id=".$item->idUse.""."\">".$item->idUse."</a></td>".
                    '</tr>';*/
                    //$output.='<p>'."<a href="."{{ route('user.info', ['id' => $item->idUse."}}"."\">". $item->name ."</a>".'</p><br>';
                    //$output.='<p>'. $item->name .'</p><br>';

                    $output.='<p>'.
                    "<td class='myTd' data-label='Due Date'>hola</td>".
                    '</p>';
                endforeach;

                return response ($output);
            endif;
        endif;
             
    }

}
