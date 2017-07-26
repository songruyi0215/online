<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/22 0022
 * Time: 下午 9:05
 */
namespace app\index\controller\v1;
use app\index\model\User as UserModel;

class User {
    public  function getUser(){
        $id=input('id');
        halt($id);
        $user=new UserModel();
        $data=$user->getUser();
        dump($data);
    }
}