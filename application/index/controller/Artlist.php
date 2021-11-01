<?php
namespace app\index\controller;
use app\index\model\Article;
use app\index\model\Cate;
class Artlist extends Common
{
    public function index()
    {
    	$article=new Article();
        $cateid=input('cateid');
    	$artRes=$article->getAllArticles($cateid);//文章id
    	$hotRes=$article->getHotRes($cateid);//热门文章id
        $cate=new Cate();
        $cateInfo=$cate->getCateInfo($cateid);
    	$this->assign(array(
    		'artRes'=>$artRes,
    		'hotRes'=>$hotRes,
            'cateInfo'=>$cateInfo,
    		));
        return $this->fetch('artlist');
    }
}
