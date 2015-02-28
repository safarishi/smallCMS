<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>个人网站首页</title>
    <script type="text/javascript" src="<?php echo (JS_URL); ?>jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php echo ($smarty["const"]["JS_URL"]); ?>bootstrap.js"></script>
    <link href="<?php echo ($smarty["const"]["CSS_URL"]); ?>bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo ($smarty["const"]["CSS_URL"]); ?>bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo ($smarty["const"]["HOME_CSS_URL"]); ?>style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<!-- tst -->
<div class="container">
    <div id="page-head" class="clearfix">
        <div class="pull-left"> <a href="<?php echo ($smarty["const"]["/Proj_05_grwz/bcms/index.php/Home/Index/index"]); ?>"><img src="<?php echo ($smarty["const"]["HOME_IMG_URL"]); ?>logo/logo.png" style="height:80px;" alt="个人网站LOGO" /></a> </div>
        <div id="page-head-right">
            <div id="main-login" class="pull-right">
                <!--a id="" class="twi-btn-left" name="login" href="#/servlet/LoginUIServlet">
                    <span>登录</span>
                </a>
                <a id="" class="twi-btn-right" name="register" href="#/servlet/RegisterUIServlet">
                    <span>注册</span>
                </a-->

                <!-- 测试登录、注册、注销-->
                {if $smarty.session.username!=null}
                欢迎您：<?php echo ($smarty["session"]["username"]); ?>
                <a class="twi-btn-right" name="logout" href="<?php echo ($smarty["const"]["/Proj_05_grwz/bcms/index.php/home"]); ?>/User/logout">
                    <span>注销</span>
                </a>
                <a href="#/servlet/WriteArticleUIServlet">投稿</a>
                {else}
                <a class="twi-btn-left" name="login" href="<?php echo ($smarty["const"]["/Proj_05_grwz/bcms/index.php/home"]); ?>/User/login">
                    <span>登录</span>
                </a>
                <a class="twi-btn-right" name="register" href="<?php echo ($smarty["const"]["/Proj_05_grwz/bcms/index.php/home"]); ?>/User/register">
                    <span>注册</span>
                </a>
                {/if}
                <!-- 测试登录、注册、注销-->

            </div>
            <div id="main-menu">
                <a href="<?php echo ($smarty["const"]["/Proj_05_grwz/bcms/index.php/home"]); ?>/Article/showlist">网站文章</a>
                <a href="<?php echo ($smarty["const"]["/Proj_05_grwz/bcms/index.php/home"]); ?>/User/leavemsg">给我留言</a>
            </div>
        </div>
    </div>

    <hr />

    <div id="carousel_box" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#carousel_box" data-slide-to="0" class="active"></li>
            <li data-target="#carousel_box" data-slide-to="1"></li>
            <li data-target="#carousel_box" data-slide-to="2"></li>
            <li data-target="#carousel_box" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active" style="margin-left:420px;"> <a href="javascript:void(0);"><img src="<?php echo ($smarty["const"]["HOME_IMG_URL"]); ?>pb/pb4.jpg" alt="picture" style="height: 360px;" /></a>

            </div>
            <div class="item" style="margin-left:370px;"> <a href="javascript:void(0);"><img src="<?php echo ($smarty["const"]["HOME_IMG_URL"]); ?>pb/naruto-hinata.jpg" alt="Naruto and Hinata" style="height: 350px;" ></a>

            </div>
            <div class="item" style="margin-left:450px;"> <a href="javascript:void(0);"><img src="<?php echo ($smarty["const"]["HOME_IMG_URL"]); ?>pb/15.jpg" alt="一护" style="height: 370px;" /></a>

            </div>
            <div class="item" style="margin-left:350px;"> <a href="javascript:void(0);"><img src="<?php echo ($smarty["const"]["HOME_IMG_URL"]); ?>pb/luffy.jpg" alt="Luffy" style="height: 370px;" /></a>

            </div>
        </div>
        <a class="left carousel-control" href="#carousel_box" data-slide="prev">&lsaquo;<a class="left carousel-control" href="#carousel_box" data-slide="prev">&lsaquo;</a> <a class="right carousel-control" href="#carousel_box" data-slide="next">&rsaquo;</a> </a> <a class="right carousel-control" href="#carousel_box" data-slide="next">&rsaquo;</a>

    </div>

    <hr />

    <div class="row">
        <div class="span6">
            <div class="page-header" id="more-story">
                <h3 class="title"> <span>推荐文章</span> <a href="<?php echo ($smarty["const"]["/Proj_05_grwz/bcms/index.php/home"]); ?>/Article/showmore"><small>更多&gt&gt</small></a> </h3>
            </div>
            <div class="row">

                <div class="span potrait">article0</div>
                <div class="span4">
                    <div class="quote">
                        &lt;&lt;github 上一些优秀的 php 开源项目&gt;&gt;
                        <br />
                        <a href="<?php echo ($smarty["const"]["/Proj_05_grwz/bcms/index.php/home"]); ?>/Article/articlecontent/id/8">
                            A curated list of amazingly awesome PHP libraries, resources and shiny things.
                            Package Management...
                        </a>
                    </div>
                    <div class="quote-author">—— <a href="javascript:void(0)">admin</a></div>
                </div>

            </div>

            <div class="row">
                <div class="span potrait">article1</div>
                <div class="span4">
                    <div class="quote">
                        &lt;&lt;为什么总有无数的Bug困扰着程序员&gt;&gt;
                        <br />
                        <a href="<?php echo ($smarty["const"]["/Proj_05_grwz/bcms/index.php/home"]); ?>/Article/articlecontent/id/10">
                            在代码上耗费的时间和资金越多，程序防御力就越强——但是黑客们...
                        </a>
                    </div>
                    <div class="quote-author">—— <a href="javascript:void(0)">admin</a></div>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="row">
                <div class="span4">
                    <h3>我的信息</h3>
                    <hr />
                    <div class="quote">
                        姓名：ADMIN
                    </div>
                    <div class="quote">
                        性别：MALE
                    </div>
                    <div class="quote">
                        QQ：1071766043
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span4">
                    <h3>我的推荐</h3>
                    <hr />
                    <div class="quote">
                        火影忍者
                    </div>
                    <div class="quote">
                        海贼王
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="copyright">
        <br /><br />
        版权所有 copyright for sshfl
    </div>
</footer>

</body>
</html>