<?php
namespace app\index\controller;
use app\index\model\Article;
use app\index\model\Cate;
class Imglist extends Common
{
    public function index()
    {
    	$article=new Article();
    	$artRes=$article->getAllArticles(input('cateid'));
    	// $cate=new Cate();
     //    $cateInfo=$cate->getCateInfo(input('cateid'));
    	// $this->assign(array(
    	// 	'artRes'=>$artRes,
    	// 	'cateInfo'=>$cateInfo,
    	// 	));
        $this->assign('artRes',$artRes);
        return $this->fetch('imglist');
    }
}
