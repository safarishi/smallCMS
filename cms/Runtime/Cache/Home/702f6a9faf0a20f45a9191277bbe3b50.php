<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>用户登录界面</title>
    <link href="<?php echo (CSS_URL); ?>bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body { padding: 20px; }
    </style>

    <script type="text/javascript">
        function checkLogin()
        {
            String.prototype.trim = function()
            {
                return this.replace(/(^\s*) | (\s*$)/g, '');
            };

            var username = login.username.value;
            var password = login.password.value;

            if(username.trim()=="")
            {
                alert("请输入用户名！！");
                login.username.select();
                return false;
            }

            if(password.trim()=="")
            {
                alert("请输入密码！！");
                login.password.select();
                return false;
            }

        }
    </script>
</head>

<body>

<ul class="breadcrumb">
    <li><a href="/0228/smallCMS/cms/index.php/Home/Index/index">网站首页</a> <span class="divider">→ </span></li>
    <li class="active">用户登录</li>
</ul>

<hr />

<form method="post" action="/0228/smallCMS/cms/index.php/Home/User/login" class="form-horizontal" name="login">
    <div class="control-group">
        <div class="control-label">
            <label for="userName">用户名：</label>
        </div>
        <div class="controls">
            <input type="text" id="userName" name="username" required="required" />
        </div>
    </div>
    <div class="control-group">
        <div class="control-label">
            <label for="userPsw">密　码：</label>
        </div>
        <div class="controls">
            <input type="password" id="userPsw" name="password" required="required" />
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn_login" onclick="return checkLogin();">登 陆</button>
        </div>
    </div>
</form>

<!-- 引入js文件 -->
<script src="<?php echo (JS_URL); ?>jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php echo (JS_URL); ?>bootstrap.js" type="text/javascript"></script>
</body>
</html>