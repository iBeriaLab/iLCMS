<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;

use Auth;

class Posts extends Model
{
   // use Searchable;

    protected $table = 'posts';
    protected $guard_name = 'web';

    protected $fillable = ['title', 'meta', 'body', 'category_id', 'image', 'author_id'];

    public function author()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}

