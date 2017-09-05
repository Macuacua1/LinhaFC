<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'nome', 'email', 'password','estado','avatar','escritorio','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public  function role(){
        return $this->belongsTo(Role::class);
    }
    public  function caso(){
        return $this->hasMany(Caso::class);
    }
    public  function contacto(){
        return $this->hasMany(Contacto::class);
    }
}
