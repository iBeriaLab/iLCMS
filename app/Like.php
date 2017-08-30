<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable;

class Like extends Model
{


    protected $table = 'likes';


    //protected $dates = ['post_id'];

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'posts_id',
        'like',
    ];


    /**
     * Get all of the posts that are assigned this like.
     */
    public function posts()
    {
        return $this->morphedByMany('App\Post', 'posts');
    }

    public function user()
    {
        return $this->morphedByMany('App\User', 'users');
    }
}