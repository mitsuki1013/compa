<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\CustomResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'profile_img',
        'pr_comment',
        'gender',
        'age',
        'location',
        'hobby',
        'job',
        'smoking',
        'number_people',
        'day',
        'sake',
        'teg_1',
        'teg_2',
        'teg_3',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // お気に入りされる
    public function favoriters()
    {
        return $this->belongsToMany(self::class, 'favorites', 'favorited_id', 'favoriting_id');
    }

    // お気に入りする
    public function favorites()
    {
        return $this->belongsToMany(self::class, 'favorites', 'favoriting_id', 'favorited_id');
    }

    // Chatテーブルとのリレーション
    public function chats()
    {
        return $this->hasMany('App\Models\Chat');
    }

    // お気に入り
    public function favorite(Int $user_id)
    {
        return $this->favorites()->attach($user_id);
    }

    // お気に入り解除する
    public function unFavorite(Int $user_id)
    {
        return $this->favorites()->detach($user_id);
    }

    // お気に入りしているか
    public function isFavoriting(Int $user_id)
    {
        return (boolean) $this->favorites()->where('favorited_id', $user_id)->first(['id']);
    }

    // お気に入りされているか
    public function isFavorited(Int $user_id) 
    {
        return (boolean) $this->favoriters()->where('favoriting_id', $user_id)->first(['id']);
    }

    // public function matchUsers($data)
    // {
    //     return $this->favorites()->where('favorited_id', $data);
    // }

    // デフォルトのメール送信設定を上書（password resetメール）
    public function sendPasswordResetNotification($token)
    {

        $this->notify(new CustomResetPassword($token));

    }
}
