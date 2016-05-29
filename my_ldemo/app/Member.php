<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //数据库表名关联
    protected $table = 'member';
    //默认的主键名id
    protected $primaryKey='id';

}
