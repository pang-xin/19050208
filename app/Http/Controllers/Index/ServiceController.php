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
    public function create_do(Request $request){
        $data = request()->except('_token');  

        $validatedData = $request->validate([
            'fu_type' => 'required',
            'fu_time' => 'required',
            'ke_name' => 'required',
            'user_name' => 'required',
            'fu_yugu' => 'required',
            'time_money' => 'required',
            'fu_desc' => 'required',
            'ke_desc' => 'required',
            'fankui' => 'required',
            'desc' => 'required',
            'beizhu' => 'required',
        ],[
            'fu_type.required'=>'服务类型不能为空',
            'fu_time.required'=>'服务日期不能为空',     
            'ke_name.required'=>'客户名称不能为空',
            'user_name.required'=>'联系人不能为空',   
            'fu_yugu.required'=>'服务预估成本不能为空',
            'time_money.required'=>'时间成本不能为空',   
            'fu_desc.required'=>'服务内容描述不能为空',
            'ke_desc.required'=>'客户反馈不能为空',   
            'fankui.required'=>'客户反馈意见不能为空',
            'desc.required'=>'描述不能为空',   
            'beizhu.required'=>'备注不能为空',   
        ]);

            
        $res = Fuwu::create($data);
        if($res){
            return redirect('service/list');
        }
    }

    //服务列表展示
    public function list(){
        $where = [];
        $fu_type = request()->fu_type;
        if($fu_type){
            $where[] = ['fu_type','like',"%$fu_type%"];
        }

        $ke_name = request()->ke_name;
        if($ke_name){
            $where[] = ['ke_name','like',"%$ke_name%"];
        }

        //分页
        $pagesize = 2;
        $data = Fuwu::where($where)->paginate($pagesize);
        $query = request()->all();
        if($data){
            return view('service/list',['data'=>$data,'query'=>$query]);
        }
        
    }

    //删除
    public function delete($id){
        $res = Fuwu::where('fu_id',$id)->delete();
        if($res){
            return redirect('service/list');
        }
    }

    //修改页面
    public function update($id){
        $data = Fuwu::find($id);
        return view('service/update',['data'=>$data]);
    }

    //修改执行
    public function update_do(Request $request,$id){
        $data = request()->all();
        $validatedData = $request->validate([
            'fu_type' => 'required',
            'fu_time' => 'required',
            'ke_name' => 'required',
            'user_name' => 'required',
            'fu_yugu' => 'required',
            'time_money' => 'required',
            'fu_desc' => 'required',
            'ke_desc' => 'required',
            'fankui' => 'required',
            'desc' => 'required',
            'beizhu' => 'required',
        ],[
            'fu_type.required'=>'服务类型不能为空',
            'fu_time.required'=>'服务日期不能为空',     
            'ke_name.required'=>'客户名称不能为空',
            'user_name.required'=>'联系人不能为空',   
            'fu_yugu.required'=>'服务预估成本不能为空',
            'time_money.required'=>'时间成本不能为空',   
            'fu_desc.required'=>'服务内容描述不能为空',
            'ke_desc.required'=>'客户反馈不能为空',   
            'fankui.required'=>'客户反馈意见不能为空',
            'desc.required'=>'描述不能为空',   
            'beizhu.required'=>'备注不能为空',   
        ]);
        $res = Fuwu::where('fu_id',$id)->update($data);
        if($res){
            return redirect('service/list');
        }
        
    }
}
