<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
  
    // define the table name
    protected $table = 'Dog';

    // set the primary key field
    protected $primaryKey = 'idDog';

    // use the updated_at and created_at fields
    // the default value of $ timestamps is true
    public $timestamps = false;

    //
    public $fillable = ['name', 'birthdate', 'breed', 'gender', 'description', 'photo', 'status'];



    public function adoptions(){

    	return $this->belongsToMany('App\Models\Dog','Adoption','idDog','idDog')->withPivot('idAdop','dateAdop','reason')->get();

    	//return $this->belongsToMany('App\Models\Dog','Adoption')->using('App\Models\Adoption')->get();

    }


    public function changeStatusDog():Dog{

        $this->status = !$this->status;

        return $this;

    }


    
}
