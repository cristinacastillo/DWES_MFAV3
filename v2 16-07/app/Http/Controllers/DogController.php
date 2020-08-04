<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use App\Models\Adoption;
use App\Models\User;
use App\Models\CommentDog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;



class DogController extends Controller
{

    public function __construct(){

        //$this->middleware('auth');
    }
    /**
     * Call all the dogs in the
     * database to list them
     * 
     * Show dogs that are not adopted
     *
     * @return Illuminate\Support\Facades\View
     *
     */
    function list() {

        //dog = Dog::all();
        $dog = DB::table('dog')->where('status', 0)->simplePaginate(6);

        return view('dog.index', ['dog' => $dog]);

    }

    /**
     *
     * Shows the information of a certain
     * dog with its id
     *
     * @param  Request $req
     * @return
     */

    public function view(Request $req)
    {
    	
	    // if an id is not provided we will return
	    // to the listing page
	    if(!$req->has('id') || $req->input('id') == null)
		    
		    return redirect()->route('dogs.list');

	    $dog = Dog::find($req->input('id'));

        // if the dog we are looking for doesn't
        // exist we redirect to the main page
        if(!$dog)
            return redirect()->route('dogs.list');

        // check if the logged in user has already requested this adoption
        $comp = Adoption::checkUserRequest($dog->idDog);

        // collect the comments of a certain dog
        $comment = CommentDog::commentsDog($req->input('id'));

        $comment->withPath('info?id='.$req->input('id'));

        // If the dog is already adopted and a normal user wants to enter, it will not let him
        if($dog->status == 1 && auth()->user()->profile == 0)

            return back();

	    return view('dog.view', ['dog' => $dog, 'comp' => $comp, 'comment' => $comment]);

    }


    /**
     * The add function collects the data entered in a 
     * form and adds it to the dog table to create a new dog
     * 
     * @param  Request $req
     * @return
     */

    public function add(Request $req)
    {

        $req->validate([
            'name' => 'string|required',
            'breed' => 'string|required',
            'birthdate' => 'date|required',
            'gender' => 'string|required',
            'description' => 'string|required',
            'photo' => 'image|required|dimensions:min_width=250|mimes:jpeg,png'
        ]);

        // comprobar si existe el idDog
        if (!$req->has('idDog')) {

            return view('admin');

        }

        // get the photo frame with the file attribute
        $file = $req->file('photo');

        $namePhoto = $file->getClientOriginalName();
        $exts = $file->extension();

        // the path where the photos are stored
        $file->storeAs('public/dogs', $namePhoto);

        // create a new dog
        Dog::create([
                    'name' => $req->input('name'),
                    'breed' => $req->input('breed'),
                    'birthdate' => $req->input('birthdate'),
                    'gender' => $req->input('gender'),
                    'description' => $req->input('description'),
                    'photo' => $namePhoto,
                    ]);


        // get the last idDog to show the information to the view
        $dog = Dog::all()->last();
        //dd($dog->idDog);


        //return view('dog.view', ['dog' => $dog]);
        return redirect()->route('dog.info',['id' => $dog->idDog]);

    }


    /**
     * when a user requests an adoption it is added to requet adopt
     * 
     * @param  Request $req
     * @return
     */

    public function requestAdop(Request $req)
    {

        $req->validate([
            'reason' => 'string|required',
            'idUse' => 'numeric|required',
            'idDog' => 'numeric|required',
        ]);


        /*$idUse = $req->input('idUse');
        $idDog = $req->input('idDog');
        $reason = $req->input('reason');*/

        //  check if everything is correct
        if ($req->has('reason') && $this->check($req)) :

            if($req->input('idUse') != 0 || $req->input('idDog') != 0):

            // create a new adoption (request)
               Adoption::create([
                        'idDog' => $req->input('idDog'),
                        'idUse' => auth()->user()->idUse,
                        'dateAdop' => Carbon::now(),
                        'reason' => $req->input('reason'),
                        
                        ]);
            endif;

        else:
            // redirect here if there is any error
            return redirect()->route('dogs.list');

        endif;
        // redirect here if there is every thing is correct
        return back();
        //return redirect()->route('dog.info',['id' => $req->input('idDog')]);


    }

    /**
     * create comments about dogs
     * 
     * @param  Request $req
     * @return
     */
    public function addComment(Request $req){

        $req->validate([
            'comment' => 'string|required',
            'idUse' => 'numeric|required',
            'idDog' => 'numeric|required',
        ]);


        // check if everything is correct
        if ($req->has('comment') && $this->check($req)) :

            if($req->input('idUse') != 0 || $req->input('idDog') != 0):

               CommentDog::create([
                        'idDog' => $req->input('idDog'),
                        'idUse' => auth()->user()->idUse,
                        'dateComment' => Carbon::now(),
                        'comment' => $req->input('comment'),
                        
                        ]);
            endif;

        else:
            // redirect here if there is any error
            return redirect()->route('dogs.list');

        endif;

        // redirect here if there is every thing is correct
        return redirect()->route('dog.info',['id' => $req->input('idDog')]);
        
    }


    public function edit(Request $req){

        // if the idDog is not obtained you will be redirected to the main view
        if(!$req->has('idDog')) return redirect()->route('dogs.list');

        // earch for the dog we want to edit
        $dog = Dog::find($req->input('idDog'));

        // keep the redirection path of that dog in a variable
        $redirect = redirect()->route('dog.info',['id' => $dog->idDog]);

        // in the switch / case we will look for what value is being sent to 
        // be able to modify it, a check is made so that the bbdd is not 
        // updated in case it is the same value
        switch ($req) {

            case $req->has('name'):

                $req->validate([
                    'name' => 'string|required',
                ]);

                if($dog->name != $req->input('name')):

                    $dog->name = $req->input('name');
                    $dog->save();

                endif;

                return $redirect;

                break;

            case $req->has('breed'):

                 $req->validate([
                    'breed' => 'string|required',
                ]);

                if($dog->breed != $req->input('breed')):

                    $dog->breed = $req->input('breed');
                    $dog->save();

                endif;

                return $redirect;

                break;

            case $req->has('gender'):

                 $req->validate([
                    'gender' => 'string|required',
                ]);

                if($dog->gender != $req->input('gender')):

                    $dog->gender = $req->input('gender');
                    $dog->save();

                endif;

                return $redirect;

                break;

            case $req->has('birthdate'):

                 $req->validate([
                    'birthdate' => 'date|required',
                ]);

                if($dog->birthdate != $req->input('birthdate')):

                    $dog->birthdate = $req->input('birthdate');
                    $dog->save();

                endif;

                return $redirect;

                break;

            case $req->has('description'):

                 $req->validate([
                    'description' => 'string|required',
                ]);

                if($dog->description != $req->input('description')):

                    $dog->description = $req->input('description');
                    $dog->save();

                endif;

                return $redirect;

                break;
            
            default:
                return redirect()->route('dogs.list');

                break;
        }


    }




    private function check(Request $req)
    {

        if (!$req->filled('idDog'))
            return redirect()->route('dogs.list') ;
        //

        if (!$req->filled('idUse'))

            return redirect()->route('dog.info', ['id' => $req->input('idDog')]) ;
        //

        $dog = Dog::find($req->input('idDog')) ;

        if (!$dog)

            return redirect()->route('dogs.list') ;

        //
        return true ;
    }



    


}
