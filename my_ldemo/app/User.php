<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'user_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];
    //受保护的字段不希望被重写

    public $timestamps = false;

    protected  $guarded = ['user_id'];

    /**
     * 指定想隐藏的属性
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userAdd(){
        $this->username = 'Chong';
        $this->age = 23;
        $this->save();
    }

    public function userTest(){
        return $this->all();
    }
}
