<?php
/**
 * @Author: anchen
 * @Date:   2019-02-25 15:24:50
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-03-09 17:24:11
 */
namespace app\admin\controller;
use app\admin\model\Cate as CateModel;
use app\admin\model\Article as ArticleModel;
use app\admin\controller\Common;
Class Article extends Common
{
    public function lst(){
        $artres=db('article')->field('a.*,b.catename')->alias('a')->join('lt_cate b','a.cateid=b.id')->order('a.id desc')->paginate(10);
        $this->assign('artres',$artres);
        return $this->fetch();
    }

    public function add(){
        if(request()->isPost()){
            $data=input('post.');
            $data['time']=time();
            $validate = \think\Loader::validate('Article');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            $article=new ArticleModel;
            if($article->save($data)){
                $this->success('添加文章成功',url('lst'));
            }else{
                $this->error('添加文章失败！');
            }
            return;
        }
        $cate=new CateModel();
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        return $this->fetch();
    }


    public function edit(){
        if(request()->isPost()){
            $data=input('post.');
            $validate = \think\Loader::validate('Article');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $article=new ArticleModel;
            $save=$article->update($data);
            if($save){
                $this->success('修改文章成功！',url('lst'));
            }else{
                $this->error('修改文章失败！');
            }
            return;
        }
        $cate=new CateModel();
        $cateres=$cate->catetree();
        //获取文章的id主键
        $arts=db('article')->where(array('id'=>input('id')))->find();
        $this->assign(array(
            'cateres'=>$cateres,
            'arts'=>$arts,
            ));
        return $this->fetch();
    }


    public function del(){
        if(ArticleModel::destroy(input('id'))){
            $this->success('删除文章成功！',url('lst'));
        }else{
            $this->error('删除文章失败！');
        }
    }

}