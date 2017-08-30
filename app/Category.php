<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guard_name = 'web';

    protected $fillable = ['name', 'description'];

    public function posts()
    {
        return $this->hasMany('App\Posts', 'category_id');
    }

    public function parent() {
        return $this->belongsTo(static::class, 'parent_id');
    }

    // Each category may have multiple children
    public function children() {
        return $this->hasMany(static::class, 'parent_id');
    }
}
