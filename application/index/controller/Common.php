<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Conf;
use app\index\model\Cate;
class Common extends Controller
{

    public function _initialize(){
    	//当前位置
        if(input('cateid')){
            $this->getPos(input('cateid'));
        }
        //如果传入的是文章的id则通过栏目表获取栏目id
        if(input('artid')){
            $articles=db('article')->field('cateid')->find(input('artid'));
            $cateid=$articles['cateid'];
            $this->getPos($cateid);
        }
        //网站配置项
    	$this->getConf();
        //网站栏目导航
        $this->getNavCates();
        //底部导航信息
        $cateM=new Cate();
        $recBottom=$cateM->getRecBottom();
        $this->assign('recBottom',$recBottom);
    }


    //获取顶端导航列表/及二级导航
    public function getNavCates(){
        $cateres=db('cate')->where(array('pid'=>0))->select();
        foreach ($cateres as $k => $v) {
            $children=db('cate')->where(array('pid'=>$v['id']))->select();
            if($children){
                $cateres[$k]['children']=$children;
            }else{
                $cateres[$k]['children']=0;
            }
        }
        $this->assign('cateres',$cateres);
    }

    public function getConf(){
        $conf=new \app\index\model\Conf();
        $_confres=$conf->getAllConf();
        $confres=array();
        foreach ($_confres as $k => $v) {
            $confres[$v['enname']]=$v['cnname'];
        }
        $this->assign('confres',$confres);
    }

    //获取当前位置
    public function getPos($cateid){
        $cate= new Cate();
        $posArr=$cate->getparents($cateid);

        $this->assign('posArr',$posArr);
    }


}
