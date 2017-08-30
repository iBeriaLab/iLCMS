<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';
    protected $guard_name = 'web';

    //protected $fillable = ['title', 'meta', 'description', 'color', 'logo', 'user_id', 'language', 'facebook_api_key', 'facebook_api_secret'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
