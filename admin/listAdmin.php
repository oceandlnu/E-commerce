<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Insert title here</title>
    <link rel="stylesheet" href="styles/backstage.css">
</head>
<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addAdmin()">
        </div>

    </div>
    <!--表格-->
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="15%">编号</th>
            <th width="25%">管理员名称</th>
            <th width="30%">管理员邮箱</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <!--这里的id和for里面的c1 需要循环出来-->
            <td><input type="checkbox" id="c1" class="check"><label for="c1"
                                                                    class="label">001</label>
            </td>
            <td>x</td>
            <td>x</td>
            <td align="center"><input type="button" value="修改" class="btn"><input type="button" value="删除" class="btn">
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>