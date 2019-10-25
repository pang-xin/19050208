<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kehu;

class ClientController extends Controller
{
    //客户添加视图
    public function create(){
        return view('client.create');
    }

    public function store(){
        $data=request()->post();
        $res=Kehu::create($data);
        if($res){
            return redirect('client/index');
        }
    }

    public function index(){
        $data=Kehu::get();
        return view('client.index',['data'=>$data]);
}
}
