<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        "name0",
        "email0",
        "address",
        "phone",
        "git",
        "line",
        "dob",
        "score",
        "ktp",
        "cv",
        // "id1",
        "name1",
        "email1",
        "address1",
        "phone1",
        "git1",
        "line1",
        "dob1",
        "score1",
        "ktp1",
        "cv1",
        // "id2",
        "name2",
        "email2",
        "address2",
        "phone2",
        "git2",
        "line2",
        "dob2",
        "score2",
        "ktp2",
        "cv2",
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
}
