<?php
namespace app\admin\validate;
use think\Validate;
class Admin extends  Validate
{
   protected $rule = [
       'username'=>'require|max:25',
       'password'=>'require',
   ];

   protected $message =[
       'username.require'=>'管理员名称不能为空',
       'username.max'=>'管理员名称最长不能超过25个字符',
       'password.require'=>'管理员密码设置不能为空'
   ];
   protected $scene = [
       'add' => ['username','password'],
       'edit' => ['username'=>'require'],
   ];
}
