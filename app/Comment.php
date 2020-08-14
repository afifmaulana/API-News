<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

//    public function reviews()
//    {
//        return $this->hasMany(Review::class, 'review_id', 'id');
//    }

}
