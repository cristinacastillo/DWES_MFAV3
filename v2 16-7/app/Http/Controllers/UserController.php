<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Adoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function infoUser()
    {

        $adops = Adoption::showAdoptionsUser(auth()->user()->idUse);
        

        return view('auth.profile',['adops' => $adops]);


 
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

            Auth::logout();

            if($user) $user->delete();

            return redirect('/');

    }

    public function edit($id){

        echo "hola";


    }

     public function search(Request $req){

       //Check if $req contains ajax or clear
        if($req->ajax() && $req->search != ""):

            $output= "";
            $data="";
            $data = DB::table('user')->where('name','LIKE','%'.$req->search."%")->get();

            if($data):
                foreach ($data as $item):
                    /* $output.='<tr>'.
                    "<td><a href=". "localhost/mfa/mfa/public/users/view?id=".$item->idUse.""."\">".$item->idUse."</a></td>".
                    '</tr>';*/
                    //$output.='<p>'."<a href="."{{ route('user.info', ['id' => $item->idUse."}}"."\">". $item->name ."</a>".'</p><br>';
                    //$output.='<p>'. $item->name .'</p><br>';

                    $output.='<p>'.
                    "<a href=". "user/userInfo?id=".$item->idUse."".">".$item->name."</a>".
                    '</p>';
                endforeach;

                return response ($output);
            endif;
        endif;
             
    }


    public function userInfo(Request $req){

        //echo $req->input('id');

         // if an id is not provided we will return
        // to the listing page
        if(!$req->has('id') || $req->input('id') == null)
            
            return redirect()->route('users.list');

        $user = User::find($req->input('id'));

        // if the user we are looking for doesn't
        // exist we redirect to the users list page

        if(!$user)
            return redirect()->route('users.list');


        // check if the user has adopted dogs
        $adops = Adoption::showAdoptionsUser($req->input('id'));

        //dd($adops);

        // collect the comments of a certain dog
       /* $comment = CommentDog::commentsDog($req->input('id'));

        $comment->withPath('info?id='.$req->input('id'));*/



        return view('admin.userInfo', ['user' => $user, 'adops' => $adops]);

        //return view('admin.userInfo');
    }




    
}
