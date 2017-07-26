<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/23 0023
 * Time: 下午 1:19
 */
namespace app\index\validate;
use think\Validate;

class User extends Validate{
    protected $rule = [
        'nickname'  =>  'require|max:2',
        'email' =>  'require|email',
    ];
    protected $message  =   [
        'nickname.require' => '名称必须',
        'nickname.max'     => '名称最多不能超过2个字符',
        'email.email'        => '邮箱格式错误',
        'email.require'        => '邮箱不能为空',
    ];
}