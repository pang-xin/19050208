<h2>联系人信息添加</h2>
<form action="{{url('/createDo')}}" method="post">
    <table border=1>
        <tr>
            <td>客户单位：</td>
            <td><input type="text" name="ke_name" id=""></td>
        </tr>
        <tr>
            <td>联系人职位：</td>
            <td><input type="text" name="user_zhi" id=""></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="user_name" id=""></td>
        </tr>
        <tr>
            <td>性别：</td>
            <td><input type="radio" name="user_sex" value="1" id="">男
                <input type="radio" name="user_sex" value="2" id="">女</td>
        </tr>
        <tr>
            <td>生日：</td>
            <td><input type="date" name="user_sheng" id=""></td>
        </tr>
        <tr>
            <td>爱好：</td>
            <td><select name="user_hobby" id="">
                    <option value="">--请选择--</option>
                    <option value="1">唱</option>
                    <option value="2">跳</option>
                    <option value="3">rap</option>
                    <option value="4">篮球</option>
                    <option value="5">music</option>
                </select></td>
        </tr>
        <tr>
            <td>联系方式：</td>
            <td><input type="tel" name="tel" id=""></td>
        </tr>
        <tr>
            <td>email：</td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td>qq号码：</td>
            <td><input type="text" name="qq" id=""></td>
        </tr>
        <tr>
            <td>备注：</td>
            <td><input type="text" name="beizhu" id=""></td>
        </tr>
        <tr>
            <td><input type="submit" value="添加"></td>
            <td></td>
        </tr>
    </table>
</form>
