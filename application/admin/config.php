<?php
return [
    // 视图输出字符串内容替换
    'view_replace_str'       => [
        '__PUBLIC__' => SITE_URL.'/public/static/admin',
        '__ROOT__'=>'/',
    ],
    'template'               => [
        // 模板后缀
        'view_suffix'  => 'htm',
    ],
];
