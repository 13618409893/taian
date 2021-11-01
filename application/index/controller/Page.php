<?php
namespace app\index\controller;
use app\index\model\Cate;
class Page extends Common
{
    public function index()
    {
    	$cates=db('cate')->find(input('cateid'));
        //dump($cates);die;
    	//$cate=new Cate();
        //$cateInfo=$cate->getCateInfo(input('cateid'));
    	// $this->assign(array(
    	// 	'cates'=>$cates,
    	// 	'cateInfo'=>$cateInfo,
    	// 	));
        $this->assign('cates',$cates);
        return $this->fetch('page');
    }
}
