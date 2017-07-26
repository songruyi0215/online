<?php

namespace app\index\controller;

use app\index\model\User;
use think\Cache;
use think\Config;
use think\response\Json;

class Index
{
    /*
    *添加用户
    */
    public function index()
    {
        $map['nickname']=input('nickname');
        $map['email']=input('email');
        $user=new User();
        $result=$user->setUser($map);
        dump($result);
    }
    /*
     * 更新用户
     * */
    public function updateUser(){
        $id=input('id',0);
        $map['nickname']=input('nickname','');
        $map['email']=input('email','');
        $user=new User();
        $result=$user->updateUser($id,$map);
        dump($result);
    }
    public function deleteUser(){
        $id=1;
        $user=new User();
        $result=$user->deleteUser($id);
        dump($result);
    }
}
