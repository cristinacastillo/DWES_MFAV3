<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    /**
     * Function to log in through the api
     *
     * @param Request @req
     *
     */

    public function login(Request $req)
    {

        //dd($req);

        // validate that the email and password are correct
        // 'validate' is not used because if it fails it returns a form
       $validation = Validator::make($req->all(),
            [
                "email"    => "required|email|max:100",

                "password" => "required|string|min:4|max:9",
            ]);

        // If the validation fails we return an error message
        if ($validation->fails()) 

            return response()->json([
                'error'   => true,
                'message' => $validation->errors()->first()
            ], 401);

        

        // If the validation does not fail we log in the user
        // The attempt method will be that does the user login process
        if ( !Auth::attempt( request(['email', 'password']) ) ) :

            return response()->json([
                'error'   => true,
                'message' => 'Email or password incorrect.',

            ], 401);
        endif;

        //if the user logs in correctly we generate a token for this user
        $token = Auth::user()->createToken(Auth::user()->email);


        /*$updateApiToken = DB::table('user')
              ->where('email', request('email'))
              ->update(['api_token' => $token->accessToken]);*/

        // If everything is done correctly we will send you a message that everything is correct
              //dd( Auth::user());
        return response()->json([
            'error'   => false,
            'message' => '',
            'token'   => $token->accessToken,
            'message' => 'All right!',

        ], 200);

        //dd(Auth::user());
    }

    public function logout()
    {
        dd( Auth::user());
//if (Auth::check()):
        //dd( Auth::user()->api_token());
        //dd(Auth::check());
       Auth::user()->token()->revoke();
        return response()->json(['error' => false,
            'message'                     => 'Desconexión correcta.'], 200);
//endif ;
    }
}
