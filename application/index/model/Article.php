<?php
namespace app\index\model;
use think\Model;
use app\index\model\Cate;
class Article  extends Model
{
    //获取所有文章id
    public function getAllArticles($cateid){
        $cate=new Cate();
        $allCateID=$cate->getchilrenid($cateid);
        $artRes=db('article')->where('cateid','in',$allCateID)->order('id desc')->paginate(4);
        return $artRes;
    }

    //获取热门文章id
    public function getHotRes($cateid){
        $cate=new Cate();
        $allCateID=$cate->getchilrenid($cateid);
        $artRes=db('article')->where('cateid','in',$allCateID)->order('click desc')->limit(5)->select();
        return $artRes;
    }

    //搜索页的热点文章
    public function getSerHot(){
       $artRes=db('article')->order('click desc')->limit(5)->select();
        return $artRes;
    }

    //获取热门文章
    public function getSiteHot(){
        $siteHotArt=$this->field('id,title,thumb')->order('click desc')->limit(5)->select();
        return $siteHotArt;
    }

    //获取最新文章id
    public function getNewArticle(){
        $newArtiecleRes=db('article')->field('a.id,a.title,a.desc,a.thumb,a.click,a.zan,a.time,c.catename')->alias('a')->join('lt_cate c','a.cateid=c.id')->order('a.id desc')->limit(10)->select();
        return $newArtiecleRes;
    }

    //获取推荐位
    public function getRecArt(){
        $recArt=$this->where('rec','=',1)->field('id,title,thumb')->order('id desc')->limit(4)->select();
        return $recArt;
    }
}
