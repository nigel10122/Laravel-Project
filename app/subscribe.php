<?php

namespace App;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\subscribe as Authenticatable;
use Illuminate\Notifications\Notifiable;

class subscribe extends Authenticatable

{
    use Notifiable;
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'subscribe'
    ];

    protected $table='subscribe';
    
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
}
