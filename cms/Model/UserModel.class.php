<?php
/**
 * Created by phpIde.
 * User: safari
 * Date: 2015/2/27
 * Time: 19:15
 */

namespace Model;
use       Think\Model;

class UserModel extends Model{

    // 是否批处理验证
    protected $patchValidate    =   true;

    // 实现项目表单验证
    // 通过重写父类属性_validate实现表单验证
    // 自动验证定义：首先将array（）括号打开
    // 自动验证定义
    protected $_validate        =   array(
        // 验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        // 验证用户名 require 必须填写项目
        array('username', 'require', '用户名必须填写'),
        array('password', 'require', '密码必须填写'),
        // 可以为同一个项目添加多个验证
        array('password2', 'require', '确认密码必须填写'),
        // 与密码的值是相一致的
        array('password2', 'password', '与密码相一致', 0, 'confirm'),
        // 验证邮箱
        array('email', 'email', '邮箱格式不正确', 2),
        // 验证昵称，通过正则表达式
        array('nickname', '/^[\x{4e00}-\x{9fa5}]+$/u', '昵称需全为汉字'), // /^[\x{4e00}-\x{9fa5}]+$/u
    );

    /**
     * 对用户名和密码进行校验
     * @param $username 用户名
     * @param $pwd      密码
     * @return bool     校验成功返回查询出来的数据，否则返回false
     */
    function checkNamePwd($username, $pwd){
        // 1.根据$username查询是否有此记录
        // getByXxx()函数返回一维数组
        $info = $this->getByUsername($username);
        // $info = null 说明用户名错误
        // $info = 一维数组，用户名正确
        // $info不为null就可以继续往下验证密码
        if($info != null){
            //验证密码，用户查询出来的密码与用户输入的密码进行比对
            if($info['password'] != $pwd){
                return false;
            }else{
                return $info;
            }
        }else{
            return false;
        }
    }

    /**
     * 获取网站所有注册的用户名信息
     * @return array 存储网站所有注册的用户名
     */
    function getAllUserNames(){
        $rzt = $this -> select();
        $info =  array();
        foreach($rzt as $_v){
            $info[] = $_v['username'];
        }
        return $info;
    }

}
