<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>文章显示列表页</title>
    <script type="text/javascript" src="<?php echo (JS_URL); ?>jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php echo (JS_URL); ?>bootstrap.js"></script>
    <link href="<?php echo (CSS_URL); ?>bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo (CSS_URL); ?>bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo (HOME_CSS_URL); ?>style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo (HOME_CSS_URL); ?>main.css" rel="stylesheet" type="text/css" />


</head>

<body>

<!-- tst -->
<div class="container">
    <div id="page-head" class="clearfix">
        <div class="pull-left">
            <a href="/0228/smallCMS/cms/index.php/Home/Index/index">
                <img src="<?php echo (HOME_IMG_URL); ?>logo/logo.png" alt="个人网站LOGO" style="height:60px;" />
            </a>
        </div>
        <div id="page-head-right">
            <div id="main-menu">
                <a href="/0228/smallCMS/cms/index.php/Home/Index/index">网站首页</a>
                <!--a href="#/servlet/ListArticleUIServlet">网站文章</a-->
                <a href="javascript:void(0);">给我留言</a>
            </div>
        </div>
    </div>

    <div class="ad">
        <img src="<?php echo (HOME_IMG_URL); ?>pb/naruto-hinata.jpg" style="height:270px;width:100%;" />
    </div>

    <!-- test -->
    <div class="list_main">
        <div class="article_type">
            <h2>文章列表</h2>
            <div class="article_type_content">
                <ul>
                    <li><a href="/0228/smallCMS/cms/index.php/Home/Article/showlist/flag/0">默认分类</a></li>
                    <li><a href="/0228/smallCMS/cms/index.php/Home/Article/showlist/flag/1">日记</a></li>
                    <li><a href="/0228/smallCMS/cms/index.php/Home/Article/showlist/flag/2">摘录</a></li>
                    <li><a href="/0228/smallCMS/cms/index.php/Home/Article/showlist/flag/3">杂谈</a></li>
                    <li><a href="/0228/smallCMS/cms/index.php/Home/Article/showlist/flag/4">随笔</a></li>
                </ul>
            </div><!--article_type_content结束-->
        </div><!--article_type结束-->
        <div class="list_box">
            <h2>文章详情</h2>
            <h1><?php echo ($info["title"]); ?></h1>
            <p class="list_box_articleInfo">发布人：<?php echo ($info["author"]); ?> 发布时间：<?php echo ($info["finishtime"]); ?></p>
            <div class="list_box_articleContent">
                <?php echo ($info["content"]); ?>
            </div><!--list_box_newsContent结束-->


        </div><!--list_box结束-->
    </div><!--list_main结束-->
</div>
<!-- test end -->



</body>
</html>