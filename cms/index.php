<?php
/**
 * Created by phpIde.
 * User: safari
 * Date: 2015/2/27
 * Time: 16:02
 */

// 项目应用入口文件
header('content-type: text/html; charset=utf-8');

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 制作一个输出调试函数
function show_bug($msg){
    echo "<pre>";
    var_dump($msg);
    echo "</pre>";
}

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义css, img, js常量
// 注意一点，先定义常量，在引入核心文件之前 ThinkPHP/ThinkPHP.php
define("SITE_URL", "http://localhost/0228/smallCMS/");

define("CSS_URL", SITE_URL."cms/public/bootstrap/css/"); // css
define("IMG_URL", SITE_URL."cms/public/bootstrap/img/"); // img
define("JS_URL", SITE_URL."cms/public/bootstrap/js/"); // js

define("HOME_CSS_URL", SITE_URL."cms/public/Home/css/"); // css
define("HOME_IMG_URL", SITE_URL."cms/public/Home/img/"); // img
define("HOME_JS_URL", SITE_URL."cms/public/Home/js/"); // js

// 定义应用目录
define('APP_PATH','../cms/');

// 引入ThinkPHP入口文件
require '../ThinkPHP/ThinkPHP.php'; // require 出错时，将导致脚本中止