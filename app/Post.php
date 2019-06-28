<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

class Post extends Model implements ViewableContract
{
    use Sluggable;
    use SluggableScopeHelpers;
    use Viewable;

    protected $fillable = [
        'user_id', 'category_id', 'photo_id', 'name', 'review','title','description'
    ];

    public function sluggable(){
        return [
            'slug' => [
                'source' => ['name','title']
            ]
        ];
    }
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
