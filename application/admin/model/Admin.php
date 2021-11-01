<?php
/**
 * @Author: anchen
 * @Date:   2019-02-20 21:00:05
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-02-21 18:38:53
 */
namespace app\admin\model;
use think\Model;

class Admin extends Model
{
    public function addadmin($data){
        if(empty($data) || !is_array($data)){
            return false;
        }
        if($data['password']){
            $data['password']=md5($data['password']);
        }
        if($this->save($data)){
            return true;
        }else{
            return false;
        }
    }

    public function getadmin(){
        return $this::paginate(5);
    }

    public function updateadmin($data,$admins){
        if(!$data['username']){
            return 2;//管理员名称为空的情况下
        }
        if(!$data['password']){
            $data['password']=$admins['password'];
        }else{
            $data['password']=md5($data['password']);
        }

        return $this::update(['username'=>$data['username'],'password'=>$data['password'],'id'=>$data['id']]);
    }

    public function deladmin($id){
        $res=$this::destroy($id);
        if($res){
            return 1;
        }else{
            return 2;
        }
    }

    public function login($data){
        $admin=Admin::get(['username'=>$data['username']]);
        //dump($admin);die;
        if($admin){
            if($admin['password']==md5($data['password'])){
                session('id',$admin['id']);
                session('username',$admin['username']);
                return 2;//密码正确
            }else{
                return 3;//密码不正确
            }
        }else{
            return 1;//管理员不存在
        }
    }



}