<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\tag', 'post_tags');
    }
}
