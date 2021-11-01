<?php
/**
 * @Author: anchen
 * @Date:   2019-02-21 16:59:07
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-02-21 18:47:09
 */
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin;
class Login extends Controller
{
    public function index()
    {
        if(request()->isPost()){
            $admin=new Admin();
            $lognum=$admin->login(input('post.'));

            if($lognum==2){
                $this->success('登录成功','admin/lst');
            }
            if($lognum==3){
                $this->error('登录失败');
            }
            if($lognum==1){
                $this->error('用户不存在');
            }
            return;
        }
        return $this->fetch();

    }
}