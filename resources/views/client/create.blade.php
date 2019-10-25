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
    <h3>新建客户</h3>
    <form action="{{url('client/store')}}" method="post">
        <table>
            <tr>
                <td>客户名称:</td>
                <td><input type="text" name="ke_name"><span style=color:red;>{{$errors->first('ke_name')}}</span></td>
            </tr>
            <tr>
                <td>客户编码:</td>
                <td><input type="text" name="ke_code"><span style=color:red;>{{$errors->first('ke_code')}}</span></td>
            </tr>
            <tr>
                <td>客户简称:</td>
                <td><input type="text" name="ke_jian"><span style=color:red;>{{$errors->first('ke_jian')}}</span></td>
            </tr>
            <tr>
                <td>电话:</td>
                <td><input type="text" name="tel"><span style=color:red;>{{$errors->first('tel')}}</span></td>
            </tr>
            <tr>
                <td>网址:</td>
                <td><input type="text" name="ke_url"><span style=color:red;>{{$errors->first('ke_url')}}</span></td>
            </tr>
            <tr>
                <td>电子邮件:</td>
                <td><input type="text" name="email"><span style=color:red;>{{$errors->first('email')}}</span></td>
            </tr>
            <tr>
                <td>地区:</td>
                <td><input type="text" name="diqu"></td>
            </tr>
            <tr>
                <td>邮政编码:</td>
                <td><input type="text" name="youbian"></td>
            </tr>
            <tr>
                <td>详细地址:</td>
                <td><input type="text" name="xiang"></td>
            </tr>
            <tr>
                <td>客户类型:</td>
                <td>
                    <select name="ke_type">
                        <option value="">--请选择--</option>
                        <option value="1">机票客户</option>
                        <option value="2">火车票客户</option>
                        <option value="3">大巴客户</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>客户来源:</td>
                <td>
                    <select name="ke_yuan">
                        <option value="">--请选择--</option>
                        <option value="1">电话</option>
                        <option value="2">电视</option>
                        <option value="3">网络</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>销售方式:</td>
                <td><input type="text" name="xiaoshou"></td>
            </tr>
            <tr>
                <td>企业概况:</td>
                <td><input type="text" name="qi_gaikuang"></td>
            </tr>
            <tr>
                <td>行业属性:</td>
                <td><input type="text" name="hang_shuxing"></td>
            </tr>
            <tr>
                <td>企业性质:</td>
                <td><input type="text" name="qi_xingzhi"></td>
            </tr>
            <tr>
                <td>企业描述:</td>
                <td><textarea name="qi_desc"></textarea></td>
            </tr>
            <tr>
                <td>备注</td>
                <td><input type="text" name="beizhu"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="客 户 添 加"></td>
            </tr>
        </table>
    </form>
</body>
</html>
