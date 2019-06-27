<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'photo_id', 'name', 'review','title','description'
    ];

    // relationship with user
    public function user(){
        return $this->belongsTo('App\User');
    }
    // relationship with category
    public function category(){
        return $this->belongsTo('App\Category');
    }
    // relationship with photo
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
