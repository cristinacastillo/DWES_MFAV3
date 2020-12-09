<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentDog extends Model
{
    //

    // define the table name
    protected $table = 'commentDog';

    // set the primary key field
    protected $primaryKey = 'idCom';

    // use the updated_at and created_at fields
    // the default value of $ timestamps is true
    public $timestamps = false;

    //
    public $fillable = ['idDog', 'idUse', 'comment', 'dateComment'];



    public static function commentsDog(int $id){

        $comment = CommentDog::from('commentDog as c')
                         ->join('user as u',function($join){
                             $join->on('c.idUse','=','u.idUse');
                            })    
                         ->select("c.*","u.name","u.surnames","u.photo")
                         ->where('c.idDog','=', $id)
                         ->orderBy('dateComment','desc')
                         ->paginate(3);


        return $comment;
    }
}
