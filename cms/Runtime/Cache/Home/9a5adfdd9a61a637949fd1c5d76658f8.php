<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>用户注册界面</title>

    <link href="<?php echo (CSS_URL); ?>bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body { padding: 20px; }
    </style>
    <!--<script type="text/javascript" src="<?php echo (HOME_JS_URL); ?>reg.js"></script>-->
</head>

<body>

<ul class="breadcrumb">
    <li><a href="/Proj_05_grwz/bcms/index.php/Home/Index/index">网站首页</a> <span class="divider">→ </span></li>
    <li class="active">用户注册</li>
</ul>

<hr />

<form method="post" action="/Proj_05_grwz/bcms/index.php/Home/User/register" class="form-horizontal" name="register">
    <div class="control-group">
        <div class="control-label">
            <label for="userName">用户名：</label>
        </div>
        <div class="controls">
            <!--<input type="text" id="userName" name="username" required="required" value="" />-->
            <input type="text" id="userName" name="username" />
            <span class="label label-info"></span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
            <label for="userPsw">密　码：</label>
        </div>
        <div class="controls">
            <!--<input type="password" id="userPsw" name="password" required="required" value="" />-->
            <input type="password" id="userPsw" name="password" />
            <span class="label label-info"></span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
            <label for="userPsw">确认密码：</label>
        </div>
        <div class="controls">
            <!--<input type="password" id="userPsw2" name="password2" required="required" value="" />-->
            <input type="password" id="userPsw2" name="password2" />
            <span class="label label-info"></span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
            <label for="userEmail">电子邮箱：</label>
        </div>
        <div class="controls">
            <!--<input type="email" id="userEmail" name="email" required="required" value="" />-->
            <input type="email" id="userEmail" name="email" />
            <span class="label label-info"></span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
            <label for="userBirthday">生　日：</label>
        </div>
        <div class="controls">
            <input type="date" id="userBirthday" name="birthday" value="" />
            <span class="label label-info"></span>
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
            <label>性　别：</label>
        </div>
        <div class="controls">
            <input type="radio" name="gender" value="男" />男
            <input type="radio" name="gender" value="女" />女
            <input type="radio" name="gender" value="保密" checked="checked" />保密
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
            <label for="userNickname">昵　称：</label>
        </div>
        <div class="controls">
            <!--<input type="text" id="userNickname" name="nickname" required="required" value="" />-->
            <input type="text" id="userNickname" name="nickname" />
            <span class="label label-info"></span>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn_login" onclick="return checkRegister();">注 册</button>
        </div>
    </div>
</form>


<!-- 引入js文件 -->
<script src="<?php echo (JS_URL); ?>jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo (JS_URL); ?>bootstrap.js" type="text/javascript"></script>
</body>
</html>