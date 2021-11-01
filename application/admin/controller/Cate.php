<?php
/**
 * @Author: anchen
 * @Date:   2019-02-22 16:38:36
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-02-27 18:20:29
 */
namespace app\admin\controller;
use app\admin\model\Cate as CateModel;
use app\admin\model\Article as ArticleModel;
use app\admin\controller\Common;
class cate extends Common
{
    //前置操作
    protected $beforeActionList = [
        // 'first',
        // 'second' =>  ['except'=>'hello'],
        'delsoncate'  =>  ['only'=>'del'],
    ];

    public function lst(){
        $cate = new CateModel();
        if(request()->isPost()){
            $sorts=input('post.');
            foreach($sorts as $k=>$v){
                $cate->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success('更新排序成功','lst');
            return;
        }

        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        return $this->fetch();

    }

    public function add(){
        $cate=new CateModel();
        if(request()->isPost()){
            $data=input('post.');
            $validate = \think\Loader::validate('Cate');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            $add=$cate->save($data);
            if($add){
                $this->success('添加栏目成功','lst');
            }else{
                $this->error('添加栏目失败');
            }
        }
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        return $this->fetch();
    }

    public function edit(){
        $cate=new CateModel();
        if(request()->isPost()){
            $data=input('post.');
            $validate = \think\Loader::validate('Cate');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $save=$cate->save($data,['id'=>$data['id']]);//获取信息，并获取主键id
            if($save !== false){
                $this->success('修改栏目成功！',url('lst'));
            }else{
                $this->error('修改栏目失败！');
            }
            return;
        }
        $cates=$cate->find(input('id'));//获取分类的id
        $cateres=$cate->catetree();
        $this->assign(array(
            'cateres'=>$cateres,
            'cates'=>$cates,
            ));
        return $this->fetch();
    }

    public function del(){
        $del=db('cate')->delete(input('id'));
        if($del){
            $this->success('删除栏目成功','lst');
        }else{
            $this->error('删除栏目失败');
        }
    }

    public function delsoncate(){
        $cateid=input('id');//获取删除当前栏目的id
        $cate=new CateModel();
        $sonids=$cate->getchilrenid($cateid);
        $allcateid=$sonids;
        $allcateid[]=$cateid;
        foreach ($allcateid as $k=>$v) {
            $article=new ArticleModel;
            $article->where(array('cateid'=>$v))->delete();
        }
        if($sonids){
            db('cate')->delete($sonids);
        }

    }

}