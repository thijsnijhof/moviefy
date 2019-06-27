<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model {

// normally automatically created as plural in db
// specifically define singular table
    protected $table = 'site';

    protected $fillable = [
        'address', 'b_hours', 'phone'
    ];
}
