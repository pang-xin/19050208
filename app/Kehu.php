<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehu extends Model
{
    public $primaryKey='ke_id';
    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['ke_name','ke_code','ke_jian','tel','ke_url','email','diqu','youbian','xiang','ke_type','ke_yuan','xiaoshou','qi_gaikuang','hang_shuxing','qi_xingzhi','qi_desc','beizhu'];

    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'kehu';

    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;
}
