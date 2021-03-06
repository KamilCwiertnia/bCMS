<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;


class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'surname',
        'avatar',
        'email', 
        'password',
        'description',
        'facebook_url',
        'gplus_url',
        'instagram_url',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function loginlogs(){
        return $this->hasMany('App\LoginLogs')->orderBY('last_login', 'DESC');
    }
    
    public function loginlogsCount(){
        return $this->loginlogs()->count();
    }


}
