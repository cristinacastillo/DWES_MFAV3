<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function infoUser()
    {

        $adops = Adoption::showAdoptionsUser(auth()->user()->idUse);
        $requests = Adoption::showRequestUser(auth()->user()->idUse);

        return view('auth.profile', ['adops' => $adops, 'requests' => $requests]);

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

        return redirect()->route('user.profile')->with('message', 'Your password has been updated succesfully.');

    }

    public function deleteAccount(Request $req)
    {

        // check if the id exists

        if (!$req->has('idUse') && !$req->input('idUse')) {
            return redirect('/');
        }

        $user = User::find($req->input('idUse'));

        if ($user):

            // if the user is the same as registered
            if ($req->input('idUse') == auth()->user()->idUse):

                /* echo "idUSE". $req->has('idUse');
                echo "<br>idUSEREgistrado". auth()->user()->idUse;

                dd();*/

                Auth::logout();
                $user->delete();
                return redirect('/')->with('message', __('messages.deleteAccount'));

            elseif (($req->input('idUse') != auth()->user()->idUse) && (auth()->user()->profile == 1)):

                //echo auth()->user()->admin; dd();

                $user->delete();
                return redirect('admin')->with('message', __('The user ' . $user->name . ' ' . $user->surnames . ' has been deleted'));

            endif;

        endif;

        return redirect('/');

    }

    public function edit(Request $req)
    {

       // dd($req);

        // if the idUse is not obtained you will be redirected to the main view
        if (!$req->has('idUse')) {
            return redirect()->route('user.profile');
        }

        // earch for the user we want to edit
        $user = User::find($req->input('idUse'));

        if (!$user) {
            return redirect()->route('user.profile');
        }

        // save the line in a variable to update the date

        $updated = $user->updated_at = Carbon::now();

        // keep the redirection path of that user in a variable
        $redirect = redirect()->route('user.profile', ['id' => $user->idUse])->with('message', __('messages.update'));


        $req->validate([
            'name'        => 'string|required|max:100',
            'surnames'    => 'string|required|max:100',
            'phoneNumber' => 'required|numeric|digits:9',
            

        ]);

            
            if($req->name) $user->name = $req->input('name');
           
            if($req->surnames) $user->surnames = $req->input('surnames');
           
            if($req->phoneNumber) $user->phoneNumber = $req->input('phoneNumber');

            

            if($req->photo):

                //dd($req->photo);

                $req->validate([
                    'photo' => 'image|required|mimes:jpeg,png',
                ]);

                $file = $req->file('photo');

                // If two users upload a photo with the same name, they will overlap,
                // for them they added a brand generated with the email that will
                // be unique in the name of the photo so that they do not coincide.

                $namePhoto = Hash::make($user->email) .$file->getClientOriginalName();

                $file->storeAs('public/users', $namePhoto);

                $user->photo = $namePhoto;
                /*$updated;
                $user->save();*/

            endif;

            $updated;
            $user->save();

/*
$req->validate([
                    'photo' => 'image|required|mimes:jpeg,png',
                ]);

                $file = $req->file('photo');

                $namePhoto = $file->getClientOriginalName();

                $file->storeAs('public/users', $namePhoto);

                /*echo "file ".$file."<br>";
                echo "name ".$namePhoto."<br>";

                dd();
                 */
              /*  if ($user->photo != $namePhoto):

                    $user->photo = $namePhoto;
                    $updated;
                    $user->save();

                endif;*/
               

            return $redirect;
    }

    public function search(Request $req)
    {

        //Check if $req contains ajax or clear
        if ($req->ajax() && $req->search != ""):

            $output = "";
            $data   = "";
            $data   = DB::table('user')->where('name', 'LIKE', '%' . $req->search . "%")->OrWhere('surnames', 'LIKE', '%' . $req->search . "%")->get();

            if ($data):
                foreach ($data as $item):
                    /* $output.='<tr>'.
                    "<td><a href=". "localhost/mfa/mfa/public/users/view?id=".$item->idUse.""."\">".$item->idUse."</a></td>".
                    '</tr>';*/
                    //$output.='<p>'."<a href="."{{ route('user.info', ['id' => $item->idUse."}}"."\">". $item->name ."</a>".'</p><br>';
                    //$output.='<p>'. $item->name .'</p><br>';

                    $output .= '<p>' .
                    "<a href=" . "user/userInfo?id=" . $item->idUse . "" . ">" . $item->name . " " . $item->surnames . "</a>" .
                        '</p>';
                endforeach;

                return response($output);
            endif;
        endif;

    }

    public function userInfo(Request $req)
    {

        //echo $req->input('id');

        // if an id is not provided we will return
        // to the listing page
        if (!$req->has('id') || $req->input('id') == null) {
            return redirect()->route('users.list');
        }

        $user = User::find($req->input('id'));

        // if the user we are looking for doesn't
        // exist we redirect to the users list page

        if (!$user) {
            return redirect()->route('users.list');
        }

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
