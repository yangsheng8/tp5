<?php
namespace app\admin\validate;
use think\Validate;
class Links extends  Validate
{
   protected $rule = [
       'title'=>'require|max:25',
       'url'=>'require',
   ];

   protected $message =[
       'title.require'=>'友情链接标题不能为空',
       'title.max'=>'友情链接标题最长不能超过25个字符',
       'url.require'=>'友情链接地址不能为空'
   ];
   protected $scene = [
       'add' => ['title','url'],
       'edit' => ['title','url'],
   ];
}
