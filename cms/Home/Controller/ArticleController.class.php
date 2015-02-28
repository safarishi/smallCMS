<?php
/**
 * Created by phpIde.
 * User: safari
 * Date: 2015/2/27
 * Time: 22:37
 */

namespace Home\Controller;
use       Think\Controller;

class ArticleController extends Controller{

    /**
     * 文章显示列表业务逻辑
     * @param int $flag 标志位
     */
    public function showList($flag=0){
        // 实例化一个没有模型文件的Model
        $article = M("Article");
        switch($flag){
            case 1:
                $info = $article -> where("category='日记' AND ischecked=1") -> select();
                break;
            case 2:
                $info = $article -> where("category='摘录' AND ischecked=1") -> select();
                break;
            case 3:
                $info = $article -> where("category='杂谈' AND ischecked=1") -> select();
                break;
            case 4:
                $info = $article -> where("category='随笔' AND ischecked=1") -> select();
                break;
            default:
                $info = $article -> where("category='默认分类' AND ischecked=1") -> select();
        }
        $this -> assign('info', $info);
        // 调用模板引擎，显示模板
        $this -> display();
    }

    /**
     * 显示具体文章的内容：
     * 根据文章ID号查找到对应的文章
     * 将文章传递到视图中
     * @param $id 文章id号
     */
    public function articleContent($id){
        $article = M("Article"); // 实例化一个没有模型文件的Model
        $info = $article -> where("id = $id") -> find(); // 返回的是一维数组

        $this -> assign("info", $info);

        $this -> display();
    }

    public function showMore(){
        $article = M("Article"); // 实例化一个没有模型文件的Model
        $info = $article -> where("ischecked=1") -> order('finishtime DESC') -> select(); // select返回的是二维数组
        $this -> assign('info', $info);
        $this -> display();
    }
}