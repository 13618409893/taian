<?php
/**
 * @Author: anchen
 * @Date:   2019-02-25 15:25:34
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-02-28 16:53:41
 */
namespace app\admin\model;
use think\Model;

class Article extends Model
{

    protected static function init()
    {
        Article::event('before_insert',function($article){
          if($_FILES['thumb']['tmp_name']){
                $file = request()->file('thumb');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    //$thumb='/luntan/' . 'public' . DS . 'uploads'.'/'.$info->getSaveName();
                    $thumb='\uploads'.'/'.$info->getSaveName();
                    $article['thumb']=$thumb;
                }
            }
        });


        Article::event('before_update',function($article){
          if($_FILES['thumb']['tmp_name']){
                $arts=Article::find($article->id);
                //获取图片路径
                $thumbpath=$_SERVER['DOCUMENT_ROOT'].$arts['thumb'];
                //检测图片是否存在
                if(file_exists($thumbpath)){
                    //删除该图片的路径
                    @unlink($thumbpath);
                }
                $file = request()->file('thumb');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    $thumb='\uploads'.'/'.$info->getSaveName();
                    $article['thumb']=$thumb;
                }

            }
        });


        Article::event('before_delete',function($article){

                $arts=Article::find($article->id);
                $thumbpath=$_SERVER['DOCUMENT_ROOT'].$arts['thumb'];
                if(file_exists($thumbpath)){
                    @unlink($thumbpath);
                }
        });


    }
}