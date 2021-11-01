<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"D:\phpStudy\PHPTutorial\WWW\taian\public/../application/index\view\search\search.html";i:1561597015;s:73:"D:\phpStudy\PHPTutorial\WWW\taian\application\index\view\public\head.html";i:1552125373;s:75:"D:\phpStudy\PHPTutorial\WWW\taian\application\index\view\public\footer.html";i:1551940781;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广东泰安模具科技股份有限公司</title>
<meta name="description" content="ThinkPHP5.0" />
<meta name="keywords" content="ThinkPHP5.0" />
<link href="/static/index/style/bootstrap.css" rel="stylesheet">
    <script src="/static/index/style/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="/static/index/style/style.css" />
    <script src="/static/index/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="/static/index/style/jquery.error.js" type="text/javascript"></script>
    <script src="/static/index/style/jtemplates.js" type="text/javascript"></script>
    <script src="/static/index/style/jquery.form.js" type="text/javascript"></script>
    <script src="/static/index/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="/static/index/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="/static/index/style/voterajax.js"></script>
    <script type="text/javascript" src="/static/index/style/userregister.js"></script>

    <link rel="stylesheet" href="/static/index/style/votestyles.css" type="text/css" />
    <link rel="stylesheet" href="/static/index/style/voteitup.css" type="text/css" />
   <link rel="stylesheet" href="/static/index/style/list.css" type="text/css" />
</head>
<body id="list_style_2" class="list_style_2">
 <script>
 function subForm()
 {

 formsearch.submit();
 //form1为form的id
 }
 </script>
<script type="text/javascript">
    function showMask() {
        $("#mask").css("height", $(document).height());
        $("#mask").css("width", $(document).width());
        $("#mask").show();
    }
</script>
<div id="mask" class="mask" onclick="CloseMask()"></div>
<div id="header_wrap">
    <div id="header">
        <div style="float: left; width: 310px;">
            <h1>
                <a href="<?php echo url('index/index'); ?>" style="background:url(/static/index/images/logo1.png) no-repeat 0 0;" title="广东泰安模具科技股份有限公司">
                </a>
                <div class="" id="logo-sub-class">
                </div>
            </h1>
        </div>
        <div id="navi">

<ul id="jsddm">

<li><a class="navi_home" href="<?php echo url('index/index'); ?>">首页</a></li>
<?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
<li><a <?php if($cate['children'] != 0): ?> class="havechild" <?php endif; ?> href="/index.php/index/<?php if($cate['type'] == 1): ?>artlist<?php elseif($cate['type'] == 3): ?>imglist<?php elseif($cate['type'] == 2): ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>"><?php echo $cate['catename']; ?></a>
<?php if($cate['children'] != 0): ?>
<ul>
<?php foreach ($cate['children'] as $k2 => $v2):?>
<li><a href="/index.php/index/<?php if($v2['type'] == 1): ?>artlist<?php elseif($v2['type'] == 3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $v2['id']; ?>"><?php echo $v2['catename'];?></a></li>
<?php endforeach;?>
</ul>
<?php endif; ?>
 </li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

            <div style="clear: both;">
            </div>


        </div>
        <div style="float: right; width: 209px;">
            <div class="widget" style="height: 30px; padding-top: 20px;">
                <div style="float: left;">
      <form  name="formsearch" action="<?php echo url('search/index'); ?>" method="get">
<input name="keywords" type="text" style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go" value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}"  onblur="if(this.value==''){this.value='在这里搜索...';}" />
        </form>
                        </div>
                <div style="float: left;">
                    <img src="/static/index/images/search-new.png" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="subForm()"  /></div>
                <div style="clear: both;">
                </div>
            </div>
        </div>

    </div>
</div>

</div>
    <div id="wrapper">


    <div id="xh_container">
        <div id="xh_content">

        <div class="path">搜索<font style="color:red; margin:0 5px;"><?php echo $keywords; ?></font>结果：</div><div class="clear"></div>
            <div class="xh_area_h_3" style="margin-top: 40px;">
            <?php if($keywords != ''): if(is_array($serRes) || $serRes instanceof \think\Collection || $serRes instanceof \think\Paginator): $i = 0; $__LIST__ = $serRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                        <div class="xh_post_h_3 ofh">
                            <div class="xh">
                                <a target="_blank" href="<?php echo url('Article/index',array('artid'=>$art['id'])); ?>" title="<?php echo $art['title']; ?>">
                                    <img src="<?php echo $art['thumb']; ?>" alt="<?php echo $art['title']; ?>" height="240" width="400"></a></div>
                            <div class="r ofh">
                                <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                                    <a target="_blank" href="<?php echo url('Article/index',array('artid'=>$art['id'])); ?>" title="<?php echo $art['title']; ?>"><?php echo $art['title']; ?></a>
                                </h2>
                                <span class="time"><?php echo date("Y-m-d",$art['time']); ?></span>
                                <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                                                                        <?php echo $art['desc']; ?>

                                </div>
                                <div class="b">
                                    <a href="<?php echo url('Article/index',array('artid'=>$art['id'])); ?>" class="xh_readmore" rel="nofollow">查看详情</a> <span title="0人赞" class="xh_love"><span class="textcontainer"><span>0</span></span> </span> <span title="<?php echo $art['click']; ?>人浏览" class="xh_views">
                                                    <?php echo $art['click']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; else: ?>
             没有搜索关键词
             <?php endif; ?>
                <div id="pagination"><div class="wp-pagenavi">
                <?php if($keywords != ''): ?>
                <?php echo $serRes->render(); endif; ?>
                </div></div>
            </div>
        </div>
        <div id="xh_sidebar">
<!-- 右侧 -->

         <div class="widget">

<div style="background: url('/static/index/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
</div>
<ul id="ulHot">
<?php if(is_array($serHot) || $serHot instanceof \think\Collection || $serHot instanceof \think\Paginator): $i = 0; $__LIST__ = $serHot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="<?php echo url('Article/index',array('artid'=>$art['id'])); ?>" target="_blank"><img src="<?php echo $art['thumb']; ?>" width="83" title="<?php echo $art['title']; ?>" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="<?php echo url('Article/index',array('artid'=>$art['id'])); ?>" target="_blank" title="<?php echo $art['title']; ?>"><?php echo $art['title']; ?></a></div>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>



</ul>
                </div>

            <div class="widget portrait">
    <div>

    </div>
</div>

        </div>
        <div class="clear">
        </div>
    </div>
    <div class="boxBor"></div>

    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
    <script type="text/javascript">
        $(function () {
            var imgHoverSetTimeOut = null;
            $('.xh_265x265 img').hover(function () {
                var oPosition = $(this).offset();
                var oThis = $(this);
                $(".boxBor").css({
                    left: oPosition.left,
                    top: oPosition.top,
                    width: oThis.width(),
                    height: oThis.height()
                });
                $(".boxBor").show();
                var urlText = $(this).parent().attr("href");
                $("#hdBoxbor").val(urlText);
            }, function () {
                imgHoverSetTimeOut = setTimeout(function () { $(".boxBor").hide(); }, 500);
            });
            $(".boxBor").hover(
                function () {
                    clearTimeout(imgHoverSetTimeOut);
                }
                , function () {
                    $(".boxBor").hide();
                }
            );
        });
        function IBoxBor() {
            window.open($("#hdBoxbor").val());
        }
        function goanewurl() {
            window.open($("#hdUrlFocus").val());
        }
</script>

    </div>

<div id="footer_wrap">
    <div id="footer">
        <div class="footer_navi">

            <ul id="menu-%e5%b0%be%e9%83%a8%e5%af%bc%e8%88%aa" class="menu">
            <span style="float: left;">底部推荐</span>
                <?php if(is_array($recBottom) || $recBottom instanceof \think\Collection || $recBottom instanceof \think\Paginator): $i = 0; $__LIST__ = $recBottom;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                <li style="margin-left: 20px" id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                    <a href="/index.php/index/<?php if($cate['type'] == 1): ?>artlist<?php elseif($cate['type'] == 3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>" target="_blank"><?php echo $cate['catename']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="footer_info">
            <span class="legal">Copyright &#169; 2016-2020 qq群：484519446 版权所有&#160;&#160;&#160;<a href="#">
                琼ICP备******号</a>&#160;&#160;&#160;

        </div>
    </div>
</div>
<!-- /尾部 -->
<div style="display: none;" id="scroll">
</div>
<script type="text/javascript" src="/static/index/style/z700bike_global.js"></script>

</body>
</html>
