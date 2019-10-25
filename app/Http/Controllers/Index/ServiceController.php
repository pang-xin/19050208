<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fuwu;
use DB;

class ServiceController extends Controller
{
    //服务页面
    public function create(){
        return view('service/create');
    }

    //服务添加
    public function create_do(){
        $data = request()->except('_token');
        
        $res = Fuwu::create($data);
        if($res){
            return redirect('service/list');
        }
    }

    //服务列表展示
    public function list(){
        // echo "33333";

        // $data = db::table('Fuwu')->get()->toArray();
        // dd($data);
        //分页
        $pagesize = 2;
        $data = Fuwu::paginate($pagesize);
        $query = request()->all();
        if($data){
            return view('service/list',['data'=>$data,'query'=>$query]);
        }
        
    }
}
