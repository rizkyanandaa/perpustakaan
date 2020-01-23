<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'role', 'password',
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

    public function role_r(){
        return $this->belongsTo('App\User', 'role');
    }

    public function profil_r(){
        return $this->hasMany('App\Models\ModelProfil', 'user');
    }

    public function get_foto(){
        if(!$this->foto){
            return asset('profil/default.jpg');
        }
        return asset('profil/'.$this->foto);
    }
}
