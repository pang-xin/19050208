<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/service/create_do')}}" method="post">

    <h3>服务信息添加</h3><hr>
        <table>
            <tr>
                <td>服务类型：</td>
                <td>
                    <input type="text" name="fu_type">
                </td>
            </tr>
            <tr>
                <td>服务日期：</td>
                <td>
                    <input type="date" name="fu_time">
                </td>
            </tr>
            <tr>
                <td>客户名称：</td>
                <td>
                    <input type="text" name="ke_name">
                </td>
            </tr>
            <tr>
                <td>联系人：</td>
                <td>
                    <input type="text" name="user_name">
                </td>
            </tr>
            <tr>
                <td>服务预估成本：</td>
                <td>
                    <input type="text" name="fu_yugu">
                </td>
            </tr>
            <tr>
                <td>时间成本：</td>
                <td>
                    <input type="text" name="time_money">
                </td>
            </tr>
            <tr>
                <td>服务内容描述：</td>
                <td>
                    <textarea name="fu_desc" id="" cols="30" rows="4"></textarea>
                </td>
            </tr>
            <tr>
                <td>客户反馈：</td>
                <td>
                    <textarea name="ke_desc" id="" cols="30" rows="4"></textarea>
                </td>
            </tr>
            <tr>
                <td>客户反馈意见：</td>
                <td>
                    <textarea name="fankui" id="" cols="30" rows="4"></textarea>
                </td>
            </tr>
            <tr>
                <td>描述：</td>
                <td>
                    <textarea name="desc" id="" cols="30" rows="4"></textarea>
                </td>
            </tr>
            <tr>
                <td>备注：</td>
                <td>
                    <textarea name="beizhu" id="" cols="30" rows="4"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="添加">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>