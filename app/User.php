<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function users() {
        return $this->hasMany('App\User', 'user_id');
    }

    public function reseller() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function brand() {
        return $this->belongsTo('App\Brand');
    }

    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function orders() {
        return $this->hasMany('App\Order');
    }

    public function domains() {
        return $this->hasMany('App\Domain');
    }

    public function OauthAcessToken(){
        return $this->hasMany('App\OAuthAccessToken');
    }

    /**
     * Override the mail body for reset password notification mail.
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new \App\Notifications\MailResetPasswordNotification($token));
    }
}
