<?php
/**
 * @Author: anchen
 * @Date:   2019-02-21 18:40:45
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-02-21 18:44:00
 */
namespace app\admin\controller;
use think\Controller;

class Common extends Controller
{

    public function _initialize(){
        if(!session('id') || !session('username')){
            $this->error('请进行登录','login/index');
        }
    }
}