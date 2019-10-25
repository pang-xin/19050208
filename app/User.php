<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    /**
     * 表明模型是否应该被打上时间戳
     ** @var bool
     */
    public $timestamps = false;
    protected $fillable  = ['ke_name', 'user_zhi', 'user_name', 'user_sex', 'user_sheng', 'user_hobby', 'tel', 'email', 'qq', 'beizhu'];
}
