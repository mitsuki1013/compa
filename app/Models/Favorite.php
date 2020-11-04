<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //
    protected $primaryKey = [
        'favoriting_id',
        'favorited_id'
    ];
    
    public $timestamps = false;
    public $incrementing = false;
}
