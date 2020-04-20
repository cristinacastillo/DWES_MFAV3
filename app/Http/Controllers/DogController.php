<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DogController extends Controller
{
    /**
     * Call all the dogs in the
     * database to list them
     *
     * @return Illuminate\Support\Facades\View
     *
     */
    function list() {

        //dog = Dog::all();
        $dog = DB::table('dog')->simplePaginate(6);

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
	    if(!$req->has('id'))
		    
		    return redirect()->route('dogs.list');

	    $dog = Dog::find($req->input('id'));

	    // if the dog we are looking for does not
	    // exist we redirect to the main page
	    if(!$dog)
	    	return redirect()->route('dogs.list');

	    return view('dog.view', ['dog' => $dog]);

    }

}
