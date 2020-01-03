<?php
/**
 *   Author: Yanlongli <jobs@yanlongli.com>
 *   Date:   2019/12/28
 *   IDE:    PhpStorm
 *   Desc:  反射测试
 */


class a
{
    public string $a;

    public function ss()
    {
        echo $this->a;
    }
}


$a = new a();
$a->ss();
