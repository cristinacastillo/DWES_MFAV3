<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dog;
use App\Models\CommentDog;
use Carbon\Carbon;


class CommentDogController extends Controller
{
    //


    public function edit(Request $req){

    	if(!$req->has('idDog') || !$req->has('idCom') || !$req->has('comment')) return redirect()->route('dogs.list');

    	$req->validate([
            'comment' => 'string|required|max:500',
        ]);

        $comment = CommentDog::find($req->input('idCom'));

        if(!$comment) return redirect()->route('dogs.list');


        if($comment->comment != $req->input('comment')):

        	$comment->comment = $req->input('comment');
            $comment->updated_at = Carbon::now();
            $comment->save();

        endif;

        return redirect()->route('dog.info',['id' => $req->input('idDog')]);

    }

    public function delete(Request $req){
        //dd($req);

    	if(!$req->has('idDog') || !$req->has('idCom') || !$req->has('idUse') || !$req->has('comment')) return redirect()->route('dogs.list');

    	$comment = CommentDog::find($req->input('idCom'));

    	if(!$comment || ($req->has('idUse') != auth()->user()->idUse) ) return redirect()->route('dogs.list');

    	$comment->delete();

    	return redirect()->route('dog.info',['id' => $req->input('idDog')])->with('message', __('messages.deleteComment'));

    }
}
