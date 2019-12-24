<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        "id",
        "username",
        "password",
        "leader",
        "member1",
        "member2",
        "payment_status",
        "payment"

    ];

    protected $table = 'users';

    protected $primaryKey = 'id';

    public function leader(){

        return $this->hasOne('App\Member', 'id', 'leader_id');
    }

    public function member1(){

        return $this->hasOne('App\Member', 'id', 'member1_id');
    }

    public function member2(){

        return $this->hasOne('App\Member', 'id', 'member2_id');
    }

}
