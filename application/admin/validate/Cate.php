<?php
namespace app\admin\validate;
use think\Validate;
class Cate extends  Validate
{
   protected $rule = [
       'catename'=>'require|max:25|unique:Cate',
   ];

   protected $message =[
       'catename.require'=>'栏目名称不能为空',
       'catename.max'=>'栏目名称最长不能超过25个字符',
       'catename.unique'=>'栏目已存在',
   ];
   protected $scene = [
       'add' => ['catename'=>'require|unique:Cate'],
       'edit' => ['catename'=>'require|unique:Cate'],
   ];
}
