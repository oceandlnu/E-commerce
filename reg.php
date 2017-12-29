<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="styles/reset.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <!--[if IE 6]>
    <script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript" src="js/ie6Fixpng.js"></script>
    <![endif]-->
</head>
<body>
<div class="headerBar">
    <div class="logoBar reg_logo">
        <div class="comWidth">
            <div class="logo fl">
                <a href="index.php"><img src="images/logo.png" alt="电商网站"></a>
            </div>
            <h3 class="welcome_title">欢迎注册</h3>
        </div>
    </div>
</div>
<div class="regBox">
    <div class="login_cont">
        <form action="doAction.php?act=reg" method="post" enctype="multipart/form-data">
            <ul class="login">
                <li><span class="reg_item"><i>*</i>用户名：</span>
                    <div class="input_item"><input type="text" class="login_input user_icon" name="username"
                                                   placeholder="请输入用户名"></div>
                </li>
                <li><span class="reg_item"><i>*</i>设置密码：</span>
                    <div class="input_item"><input type="password" class="login_input passwd_icon" name="password"
                                                   placeholder="请输入密码"></div>
                </li>
                <li><span class="reg_item"><i>*</i>确认密码：</span>
                    <div class="input_item"><input type="password" class="login_input passwd_icon" name="confirmPwd"
                                                   placeholder="请确认密码"></div>
                </li>
                <li><span class="reg_item"><i>*</i>邮箱：</span>
                    <div class="input_item"><input type="email" class="login_input" name="email"
                                                   placeholder="请输入合法邮箱"></div>
                </li>
                <li><span class="reg_item"><i>*</i>性别：</span>
                    <div class="input_item"><input type="radio" name="sex" value="男">男 <input
                                type="radio" name="sex" value="女">女 <input type="radio" name="sex" value="保密" checked="checked">保密
                    </div>
                </li>
                <li><span class="reg_item"><i>*</i>头像：</span>
                    <div class="input_item"><input type="file" name="face"></div>
                </li>
                <li class="autoLogin"><span class="reg_item">&nbsp;</span><input type="checkbox" id="t1"
                                                                                 class="checked"><label for="t1">我已阅读并同意<a
                                href="">《用户注册协议》</a></label></li>
                <li><span class="reg_item">&nbsp;</span><input type="submit" value="" class="reg_btn"></li>
            </ul>
        </form>
    </div>
</div>
<div class="hr_25"></div>
<div class="footer">
    <p><a href="">本站简介</a><i>|</i><a href="">本站公告</a><i>|</i><a href="">招贤纳士</a><i>|</i><a href="">联系我们</a><i>|</i>客服热线:888-888-8888
    </p>
    <p>Copyright &copy; 2014-2017 本站版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号123456789123</p>
    <p class="web"><a href=""><img src="images/footer/foot_01.png" alt=""></a><a href=""><img
                    src="images/footer/foot_02.png" alt=""></a><a href=""><img src="images/footer/foot_03.png"
                                                                               alt=""></a><a
                href=""><img src="images/footer/foot_04.png" alt=""></a></p>
</div>
</body>
</html>