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
    <h3>综合查询</h3>
    <br><br>
    <h4>客户查询</h4>
    <form action="{{url('synthesize/client')}}" method="get">
        <input type="text" name="ke_name" placeholder="客户名称">
        <input type="text" name="ke_code" placeholder="客户编码">
        <input type="text" name="ke_jian" placeholder="客户简称"><br>
        <input type="text" name="tel" placeholder="电话">
        <input type="text" name="diqu" placeholder="地区">
        <select name="ke_type">
            <option value="">--请选择--</option>
            <option value="1">机票客户</option>
            <option value="2">火车票客户</option>
            <option value="3">大巴客户</option>
        </select><br>
        <select name="ke_yuan">
            <option value="">--请选择--</option>
            <option value="1">电话</option>
            <option value="2">电视</option>
            <option value="3">网络</option>
        </select><br>
        <input type="submit" value="查询">
    </form>

    <br><br>

    <h4>服务类型</h4>
    <form action="{{url('synthesize/service')}}" method="get">
        <input type="text" name="fu_type" placeholder="服务类型">
        <input type="text" name="user_name" placeholder="联系人">
        <input type="submit" value="查询">
    </form>

    <br><br>

    <h4>联系人查询</h4>
    <form action="{{url('synthesize/here')}}" method="get">
        <input type="text" name="ke_name" placeholder="客户单位">
        <input type="text" name="user_zhi" placeholder="联系人职位">
        <input type="text" name="user_name" placeholder="姓名"><br>
        <input type="text" name="tel" placeholder="联系方式">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="qq" placeholder="QQ号码"><br>
        <input type="submit" value="查询">
    </form>
</body>
</html>
