<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/22 0022
 * Time: 下午 2:08
 */

namespace app\index\model;

use think\Db;
use think\Loader;
use think\Model;

class User extends Model
{
    // 设置返回数据集的对象名
    protected $resultSetType = 'collection';

    /**
     * 测试方法
     */
    public function setUser($map)
    {
        $user=new User;
        $result=$user->validate(true)->save($map);
        if($result===false){
            return $user->getError();
        }else{
            return true;
        }
    }

    public function updateUser($id, $data)
    {
        $user = new User;
        return $user->where('id', 16)->update(['nickname' => '123', 'email' => '1213']);
    }
    public function getUser(){
       $data=User::where('id',17)->field('nickname')
           ->find()
           ->toArray();
       halt($data);
    }

}