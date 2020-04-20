<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN = 1;

    protected $table      = 'user';
    protected $primaryKey = 'idUse';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surnames', 'email', 'password', 'phoneNumber'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return string
     */
    public function __toString()
    {
        return "{$this->name} {$this->surnames}";
    }

    public function isAdmin()
    {

        // llamar con el operador resolutor de ambito
        return $this->admin == User::ADMIN;
    }

}
