<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        "id",
        "name",
        "address",
        "email",
        "dob",
        "phone",
        "line",
        "git",
        "ktp",
        "cv",
        "score"

    ];
}
