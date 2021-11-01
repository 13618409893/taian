<?php
/**
 * @Author: anchen
 * @Date:   2019-02-19 18:09:20
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-03-05 13:12:14
 */
namespace app\index\controller;
use think\Controller;

class Articles extends Common
{
    public function articles()
    {
        return $this->fetch();
    }
}