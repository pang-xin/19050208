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

    public function store(Request $request){
        $data=request()->post();
        $validatedData = $request->validate([
            'ke_name' => 'required',
            'ke_code' => 'required',
            'ke_jian'=>'required',
            'tel'=>'required',
            'ke_url'=>'required',
            'email'=>'required'
        ],[
            'ke_name.required'=>'客户名称必填',
            'ke_code.required'=>'客户编码必填',
            'ke_jian.required'=>'客户简称必填',
            'tel.required'=>'电话必填',
            'ke_url.required'=>'网址必填',
            'email.required'=>'电子邮件必填',
        ]);
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
