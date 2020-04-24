<?php
namespace app\common\validate;

use think\Validate;     // 内置验证类


class Book extends Validate
{
     protected $rule = [
        'user' => 'length:2,25 ,名称最多不能超过25个字符',
        'pwd'  => 'length:6,16',      
        'email' => 'email',
    ];

}
