<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kehu;
use App\Fuwu;
use App\User;

class IndexController extends Controller
{
    public function index(){
        return view('synthesize.index');
    }

    public function client(){
        $data=request()->all();
        $where=[];
        if(isset($data['ke_name'])){
            $where[]=['ke_name','like',"%".$data['ke_name']."%"];
        }

        if(isset($data['ke_code'])){
            $where[]=['ke_code','like',"%".$data['ke_code']."%"];
        }

        if(isset($data['ke_jian'])){
            $where[]=['ke_jian','like',"%".$data['ke_jian']."%"];
        }

        if(isset($data['tel'])){
            $where[]=['tel','like',"%".$data['tel']."%"];
        }

        if(isset($data['diqu'])){
            $where[]=['diqu','like',"%".$data['diqu']."%"];
        }

        if(isset($data['ke_type'])){
            $where[]=['ke_type','=',$data['ke_type']];
        }

        if(isset($data['ke_yuan'])){
            $where[]=['ke_yuan','=',$data['ke_yuan']];
        }

        $res=Kehu::where($where)->get();
        return view('synthesize.client',['res'=>$res]);
    }

    public function service(){
        $data=request()->all();
        $where=[];
        if(isset($data['fu_type'])){
            $where[]=['fu_type','like',"%".$data['fu_type']."%"];
        }

        if(isset($data['user_name'])){
            $where[]=['user_name','like',"%".$data['user_name']."%"];
        }

        $res=Fuwu::where($where)->get();
        return view('synthesize.service',['res'=>$res]);
    }

    public function here(){
        $data=request()->all();
        $where=[];
        if(isset($data['ke_name'])){
            $where[]=['ke_name','like',"%".$data['ke_name']."%"];
        }

        if(isset($data['user_zhi'])){
            $where[]=['user_zhi','like',"%".$data['user_zhi']."%"];
        }

        if(isset($data['user_name'])){
            $where[]=['user_name','like',"%".$data['user_name']."%"];
        }

        if(isset($data['tel'])){
            $where[]=['tel','like',"%".$data['tel']."%"];
        }

        if(isset($data['email'])){
            $where[]=['email','like',"%".$data['email']."%"];
        }

        if(isset($data['qq'])){
            $where[]=['qq','like',"%".$data['qq']."%"];
        }
        $res=User::where($where)->get();
        return view('synthesize.here',['res'=>$res]);
    }
}
