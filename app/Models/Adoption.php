<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Adoption extends Model
{
    //
     // define the table name
    protected $table = 'Adoption';

    // set the primary key field
    protected $primaryKey = 'idAdop';

    // use the updated_at and created_at fields
    // the default value of $ timestamps is true
    public $timestamps = false;

    //
    public $fillable = ['idDog','idUse','reason', 'dateAdop','status'];




    public static function checkUserRequest(int $idDog):bool{

        $sql = DB::table('adoption')->where('idUse', auth()->user()->idUse)->where('idDog', $idDog)->count();


        if($sql) return true;

        if(!$sql ) return false;

    }


    public static function showForUser(){

        //$adops =  DB::table('adoption AS ad')->join('dog AS do','ad.idDog','=','do.idDog')->get()  ;

        /*$sql = "SELECT d.name, a.reason, a.status, d.idDog, a.idUse, a.dateAdop
                from adoption a join dog d on(a.idDog = d.idDog)
                where a.idUse= ?";
        $adops = DB::select($sql,array(auth()->user()->idUse));*/

         $adops = Adoption::from('adoption as a')
                         ->join('dog as d',function($join){
                             $join->on('a.idDog','=','d.idDog');
                            })    
                         ->select("a.*","d.name")
                         ->where('a.idUse','=',auth()->user()->idUse)
                         ->get();


        return $adops;
    }

    public static function showForAdmin(){

        
        $adop = DB::table('dog as d')
                        ->join('adoption as a',function($join){
                             $join->on('a.idDog','=','d.idDog');
                            })    
                        ->join('user as u',function($join){
                             $join->on('a.idUse','=','u.idUse');
                            })
                         ->select("a.*","d.name as nameDog","u.name as nameUse")
                         ->where('a.status','=', 0)
                         ->get();

       

        //dd($adop);

        return $adop;
    }

    /**
     * Change the status 
     * 
     * @return Adoption
     * 
     */

    public function changeStatus(int $value):Adoption{

        $this->status = $value;

        return $this;

    }


    



}



