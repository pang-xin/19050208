<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/jquery.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <form action="{{url('/service/update_do/'.$data->fu_id)}}" method="post">

    <h3>服务信息修改</h3><hr>
        
        <table>
        <input type="hidden" name="fu_id" value="{{$data->fu_id}}">
            <tr>
                <td>服务类型：</td>
                <td>
                    <input type="text" name="fu_type" id="fu_type" value="{{$data->fu_type}}">
                    <font style="font-size:12px" color="red">{{$errors->first('fu_type')}}</font>
                </td>
            </tr>
            <tr>
                <td>服务日期：</td>
                <td>
                    <input type="date" name="fu_time" id="fu_time" value="{{$data->fu_time}}">
                    <font style="font-size:12px" color="red">{{$errors->first('fu_time')}}</font>
                </td>
            </tr>
            <tr>
                <td>客户名称：</td>
                <td>
                    <input type="text" name="ke_name" id="ke_name" value="{{$data->ke_name}}">
                    <font style="font-size:12px" color="red">{{$errors->first('ke_name')}}</font>
                </td>
            </tr>
            <tr>
                <td>联系人：</td>
                <td>
                    <input type="text" name="user_name" id="user_name" value="{{$data->user_name}}">
                    <font style="font-size:12px" color="red">{{$errors->first('user_name')}}</font>
                </td>
            </tr>
            <tr>
                <td>服务预估成本：</td>
                <td>
                    <input type="text" name="fu_yugu" id="fu_yugu" value="{{$data->fu_yugu}}">
                    <font style="font-size:12px" color="red">{{$errors->first('fu_yugu')}}</font>
                </td>
            </tr>
            <tr>
                <td>时间成本：</td>
                <td>
                    <input type="text" name="time_money" id="time_money" value="{{$data->time_money}}">
                    <font style="font-size:12px" color="red">{{$errors->first('time_money')}}</font>
                </td>
            </tr>
            <tr>
                <td>服务内容描述：</td>
                <td>
                    <textarea name="fu_desc" id="fu_desc" cols="30" rows="4">{{$data->fu_desc}}</textarea>
                    <font style="font-size:12px" color="red">{{$errors->first('fu_desc')}}</font>
                </td>
            </tr>
            <tr>
                <td>客户反馈：</td>
                <td>
                    <textarea name="ke_desc" id="ke_desc" cols="30" rows="4">{{$data->ke_desc}}</textarea>
                    <font style="font-size:12px" color="red">{{$errors->first('ke_desc')}}</font>
                </td>
            </tr>
            <tr>
                <td>客户反馈意见：</td>
                <td>
                    <textarea name="fankui" id="fankui" cols="30" rows="4">{{$data->fankui}}</textarea>
                    <font style="font-size:12px" color="red">{{$errors->first('fankui')}}</font>
                </td>
            </tr>
            <tr>
                <td>描述：</td>
                <td>
                    <textarea name="desc" id="desc" cols="30" rows="4">{{$data->desc}}</textarea>
                    <font style="font-size:12px" color="red">{{$errors->first('desc')}}</font>
                </td>
            </tr>
            <tr>
                <td>备注：</td>
                <td>
                    <textarea name="beizhu" id="beizhu" cols="30" rows="4" >{{$data->beizhu}}</textarea>
                    <font style="font-size:12px" color="red">{{$errors->first('beizhu')}}</font>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="修改" id="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<script>
</script>