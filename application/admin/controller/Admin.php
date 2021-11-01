<?php
/**
 * @Author: anchen
 * @Date:   2019-02-19 15:54:00
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-02-27 18:31:31
 */
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin as AdminModel;

class Admin extends Common
{
    public function lst()
    {
        $admin = new AdminModel();
        $res=$admin->getadmin();
        $this->assign('res',$res);
        return $this->fetch();
    }

    public function add()
    {
        if(request()->isPost()){
            $admin = new AdminModel();
            $data=input('post.');
            $validate = \think\Loader::validate('Admin');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            $res=$admin->addadmin($data);
            if($res){
                $this->success('管理员添加成功','lst');
            }else{
                $this->error('管理员添加失败');
            }
            return;
        }


        return $this->fetch();
    }

    public function edit($id)
    {
        $admins=db('admin')->find($id);

        if(request()->isPost()){
            $data=input('post.');
            $validate = \think\Loader::validate('Admin');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $admin= new AdminModel();
            $res=$admin->updateadmin($data,$admins);
            if($res== '2'){
                $this->error('管理员名称不能为空');
            }
            if($res !== false){
                $this->success('修改成功','lst');
            }else{
                $this->error('修改失败');
            }
            return;
        }
        if(!$admins){
            $this->error('管理员不存在');
        }

        $this->assign('admins',$admins);
        return $this->fetch();
    }

    public function del($id){
        $admin=new AdminModel();
        $res=$admin->deladmin($id);
        if($res=='1'){
            $this->success('管理员删除成功','lst');
        }else{
            $this->error('管理员删除失败');
        }
    }

    public function logout(){
        session(null);
        $this->success('您已经成功退出','login/index');
    }

}