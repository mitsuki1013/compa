<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //
    protected $fillable = [
        'id',
        'user_id',
        'other_id',
        'chat_message',
        'created_at',
    ];

    // Usersテーブルとのリレーション
    public function users()
    {
        return $this->hasMany('App\Models\User', 'id', 'user_id');
    }
}
