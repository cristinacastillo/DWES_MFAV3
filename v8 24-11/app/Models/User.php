<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    private const ADMIN = 1;
    private const USER = 0;
    /*USER = 0, ADMIN = 1*/
    private const PROFILES = ['user', 'admin'];
    private const ROUTES = ['dogs.list', 'admin'];

    protected $table = 'user';
    protected $primaryKey = 'idUse';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surnames',
        'email',
        'password',
        'phoneNumber',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

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
        return $this->profile == User::ADMIN;
    }

    public function adoptions()
    {
        return $this->belongsToMany(
            'App\Models\User',
            'Adoption',
            'idUse',
            'idUse'
        )
            ->withPivot('idAdop', 'dateAdop', 'reason')
            ->get();
        //return $this->belongsToMany('App\Models\User')->using('App\Models\Adoption')->get();
    }

    public function profile(string $profile): bool
    {
        // Buscamos un perfil u otro

        if ($profile == 'admin' and $this->profile == User::ADMIN) {
            return true;
        }

        if ($profile == 'user' and $this->profile == User::USER) {
            return false;
        }

        return false;

        /*********************************/
        // array_Serche devuelve el indice en el que se encuentra el perfil. Si no se encuentra devuelve falso
        //return $this->profile == array_search($profile, User::PROFILES);
        //return false;
    }

    static public function findName(int $id)
    {
        $name = User::from('user as u')
            ->join('adoption as a', function ($join) {
                $join->on('a.idUse', '=', 'u.idUse');
            })
            ->select('u.name', 'u.surnames')
            ->where('a.idDog', '=', $id);

        return $name;
    }

    /**
     * Returns the path to the indicated profile
     *
     * @param
     * @return String
     *
     */

    public function route(): string
    {
        return User::ROUTES[$this->profile];
    }

    public static function apiToken(string $token)
    {
        dd($token);

        return $token;
    }
}
