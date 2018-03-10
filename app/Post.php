<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function postimage()
    {
        return $this->hasMany(PostImage::class);
    }

    protected $fillable =
        [
        'user_id','title','description'
        ];
}
