<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Cmgmyr\Messenger\Traits\Messagable;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;
    use Messagable;
   // use \Illuminate\Auth\Authenticatable;


    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function posts()
    {
        return $this->hasMany('App\Posts', 'author_id');
    }

    public function role()
    {
        return $this->hasMany('App\Roles');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

}
