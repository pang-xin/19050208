<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="">
        <table border="1">
            <tr>
                <td>id</td>
                <td>服务类型</td>
                <td>服务日期</td>
                <td>客户名称</td>
                <td>联系人</td>
                <td>服务预估成本</td>
                <td>时间成本</td>
                <td>服务内容描述</td>
                <td>客户反馈</td>
                <td>客户反馈意见</td>
                <td>描述</td>
                <td>备注</td>
                <td>操作</td>
            </tr>
            @foreach($res as $v)
                <tr>
                    <td>{{$v->fu_id}}</td>
                    <td>{{$v->fu_type}}</td>
                    <td>{{$v->fu_time}}</td>
                    <td>{{$v->ke_name}}</td>
                    <td>{{$v->user_name}}</td>
                    <td>{{$v->fu_yugu}}</td>
                    <td>{{$v->time_money}}</td>
                    <td>{{$v->fu_desc}}</td>
                    <td>{{$v->ke_desc}}</td>
                    <td>{{$v->fankui}}</td>
                    <td>{{$v->desc}}</td>
                    <td>{{$v->beizhu}}</td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </form>
</body>
</html>
