<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>客户信息管理</h3>
    <table border="1">
        <tr>
            <td>客户id</td>
            <td>客户名称</td>
            <td>客户编码</td>
            <td>客户简称</td>
            <td>地区</td>
            <td>客户来源</td>
            <td>客户类别</td>
            <td>销售方式</td>
            <td>行业属性</td>
            <td>企业性质</td>
        </tr>
        @foreach($data as $k=>$v)
            <tr>
                <td>{{$v->ke_id}}</td>
                <td>{{$v->ke_name}}</td>
                <td>{{$v->ke_code}}</td>
                <td>{{$v->ke_jian}}</td>
                <td>{{$v->diqu}}</td>
                <td>
                    @if($v->ke_type==1)
                        机票客户
                    @elseif($v->ke_type==2)
                        火车票客户
                    @else
                        大巴客户
                    @endif
                </td>
                <td>
                    @if($v->ke_yuan==1)
                        电话
                    @elseif($v->ke_yuan==2)
                        电视
                    @else
                        网络
                    @endif
                </td>
                <td>{{$v->xiaoshou}}</td>
                <td>{{$v->hang_shuxing}}</td>
                <td>{{$v->qi_xingzhi}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
