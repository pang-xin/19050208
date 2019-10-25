<table border=1>
    <tr>
        <td>联系人id</td>
        <td>客户单位</td>
        <td>联系人职位</td>
        <td>姓名</td>
        <td>性别</td>
        <td>生日</td>
        <td>爱好</td>
        <td>联系方式</td>
        <td>邮箱</td>
        <td>qq</td>
        <td>备注</td>
        <td>操作</td>
    </tr>
    @foreach($data as $v)
    <tr>
        <td>{{$v->user_id}}</td>
        <td>{{$v->ke_name}}</td>
        <td>{{$v->user_zhi}}</td>
        <td>{{$v->user_name}}</td>
        <td>{{$v->user_sex==1 ?'男':'女'}}</td>
        <td>{{$v->user_sheng}}</td>
        <td>@if($v->user_hobby==1) 唱 @elseif($v->user_hobby==2) 跳 @elseif($v->user_hobby==3) rap @elseif($v->user_hobby==4) 篮球 @else music @endif</td>
        <td>{{$v->tel}}</td>
        <td>{{$v->email}}</td>
        <td>{{$v->qq}}</td>
        <td>{{$v->beizhu}}</td>
        <td><a href="{{url('/delete/'.$v->user_id)}}">删除</a></td>
    </tr>
    @endforeach
</table>
{{$data->links()}}
