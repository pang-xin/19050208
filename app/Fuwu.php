<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuwu extends Model
{
    public $primaryKey='fu_id';

    protected $table = 'fuwu';

    protected $fillable = ['fu_id','fu_type','fu_time','ke_name','user_name','fu_yugu','time_money','fu_desc','ke_desc','fankui','desc','beizhu'];

    public $timestamps = false;
}
