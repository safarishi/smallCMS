<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>用户注册界面</title>

    <link href="<?php echo (CSS_URL); ?>bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body { padding: 20px; }
    </style>
    <script type="text/javascript" src="<?php echo (HOME_JS_URL); ?>reg.js"></script>
    <script type="text/javascript" src="<?php echo (HOME_JS_URL); ?>functions.js"></script>
    <script>
        var xhr;
        function checkUserName(){
            xhr = getXmlHttpObject(); // 1号线，获得ajax对象
            if(xhr){ // 判断获得的ajax对象
                // 通过post方式提交ajax请求
                var url  = "/0228/smallCMS/cms/index.php/Home/User/checkUsername";
                var data = "username="+byId("userName").value;
                // 打开请求，post
                xhr.open("post",url,true);
                // post请求还有一句话，这句话必须的
                xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                // 指定回调函数，handle是函数名
                xhr.onreadystatechange = handle;
                // 发送请求
                xhr.send(data); // 2号线，对应的是post ajax请求
            }
        }
        // 回调函数
        function handle(){
            if(xhr.readyState == 4){ // 完成
                if(xhr.status ==200){ // 成功
                    var mes = xhr.responseText;
                    // 使用 eval函数将mes字串，转换成对应的对象
                    var mes_obj = eval("("+mes+")");
                    byId("usernameInfo").innerHTML = mes_obj.res;
                }
            }
        }
    </script>
</head>

<body>

<ul class="breadcrumb">
    <li><a href="/0228/smallCMS/cms/index.php/Home/Index/index">网站首页</a> <span class="divider">→ </span></li>
    <li class="active">用户注册</li>
</ul>

<hr />

<form method="post" action="/0228/smallCMS/cms/index.php/Home/User/register" class="form-horizontal" name="register">
    <div class="control-group">
        <div class="control-label">
            <label for="userName">用户名：</label>
        </div>
        <div class="controls">
            <!--<input type="text" id="userName" name="username" required="required" value="" />-->
            <input type="text" id="userName" name="username" required="required" onblur="checkUserName();" />
            <span class="label label-info" id="usernameInfo"></span>
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