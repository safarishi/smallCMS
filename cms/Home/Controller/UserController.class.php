<?php
/**
 * Created by phpIde.
 * User: safari
 * Date: 2015/2/27
 * Time: 16:48
 */

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{

    public function demo(){
        show_bug($_SESSION);
    }

    /**
     * 用户登录业务逻辑方法
     */
    public function login(){
        if(!empty($_POST)){
            // 表示提交数据成功
            $user = new \Model\UserModel();
            $rst = $user -> checkNamePwd($_POST['username'],$_POST['password']);
            if($rst === false){
                echo "用户名或密码错误";
            }else{
                // 登录信息持久化
                session('username',$rst['username']);

                //页面跳转后台首页redirect()
                $this->redirect('Index/index');
            }
        }else{
            $this -> display();
        }
    }

    /*
     * 用户注销实现：
     * 清除用户的session
     * 跳转到网站首页
     */
    public function logout(){
        session('username' ,null); // 与上面的用户登录成功session信息持久化保存的session key 要相一致
        $this->redirect('Index/index');

    }

    /**
     * 用户注册实现逻辑
     */
    public function register(){

        $user = new \Model\UserModel();

        if(!empty($_POST)){
            if(!$user -> create()){
                // 验证失败，输出错误信息
                show_bug($user->getError());
            }else{
                // 验证成功
                $rst = $user -> add(); // 实现数据添加
                // 判断rst
                if($rst){
                    $this->success('注册成功',U('Index/index'));
                }else{
                    $this->error('注册失败',U('Index/index'));
                }
            }
        }
        $this -> display();
    }
}

