<?php
namespace app\index\controller;
use app\index\model\Article as ArticleModel;
class Article extends Common
{
    public function index()
    {
    	$artid=input('artid');
        //点击量自增1
    	db('article')->where(array('id'=>$artid))->setInc('click');
    	$articles=db('article')->find($artid);
    	$article= new ArticleModel();
    	$hotRes=$article->getHotRes($articles['cateid']);
    	$this->assign(array(
    		'articles'=>$articles,
    		'hotRes'=>$hotRes,
            'artid'=>$artid,

    		));
        return $this->fetch('article');

    }

}
