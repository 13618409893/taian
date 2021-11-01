<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\phpStudy\PHPTutorial\WWW\taian\public/../application/index\view\index\index.html";i:1561291596;s:73:"D:\phpStudy\PHPTutorial\WWW\taian\application\index\view\public\head.html";i:1552125373;s:75:"D:\phpStudy\PHPTutorial\WWW\taian\application\index\view\public\footer.html";i:1551940781;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<title>广东泰安模具科技股份有限公司</title>
<meta name="description" content="广东泰安模具科技股份有限公司" />
<meta name="keywords" content="广东泰安模具科技股份有限公司" />
<link rel="stylesheet" type="text/css" media="all" href="/static/index/style/style.css" />
    <script type="text/javascript" src="/static/index/style/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="/static/index/style/jquery.js"></script>
    <script src="/static/index/style/jquery.error.js" type="text/javascript"></script>
    <script src="/static/index/style/jtemplates.js" type="text/javascript"></script>
    <script src="/static/index/style/jquery.form.js" type="text/javascript"></script>
    <script src="/static/index/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="/static/index/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="/static/index/style/voterajax.js"></script>
    <script type="text/javascript" src="/static/index/style/userregister.js"></script>
    <link rel="stylesheet" href="/static/index/style/pagenavi-css.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/static/index/style/votestyles.css" type="text/css" />
    <link rel="stylesheet" href="/static/index/style/voteitup.css" type="text/css" />
<script type="text/javascript">
    function IFocuse(th, o) {
        var t = $(th);
        var c = t.attr("class");
        if (o) {
            t.removeClass(c).addClass(c+"-over");
        }
        else {
            t.removeClass(c).addClass(c.replace("-over",""));
        }
    }
</script>
</head>
<body class="xh_body">
<script src="/static/index/style/common.js" type="text/javascript"></script>
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

<!-- 头部 -->
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
<!-- /头部 -->
<!-- .sitemap{overflow:hidden;width:1180px;margin:0 auto;border-top:4px solid #333;padding-bottom:20px;padding-top:20px;} -->
    <div id="xh_wrapper" style="padding-bottom: 20px;">

<input type="hidden" id="hdUrlFocus" />
    <div class="xh_h_show">
        <div class="xh_h_show_in">
        <div id="zSlider">
            <div id="picshow">
    <div id="picshow_img">
        <ul>
            <?php if(is_array($recArt) || $recArt instanceof \think\Collection || $recArt instanceof \think\Paginator): $i = 0; $__LIST__ = $recArt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                <li style="display: list-item;">
                    <a href="<?php echo url('Article/index',array('artid'=>$art['id'])); ?>" target="_blank">
                        <img src="<?php echo $art['thumb']; ?>" alt="<?php echo $art['title']; ?>">
                    </a>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<div id="select_btn">
    <ul>
        <li class="current"></li><li class=""></li><li class=""></li><li class=""></li>
    </ul>
</div>
            <div class="focus-bg-title">
            <div id="focus-center" class="focus-title">
            <div style="float:left;width:580px;padding-left:10px;font-size:18px;" id="focus-tl-s"></div>
            <div style="float:right;width:200px;"></div>
            </div>
            </div>
            </div>
            <div id="picshow_right">

    <img src="/static/index/images/timg.jpg"  width="255px" height="420px">


            </div>
        </div>
    </div>
                </div>

            <!-- <div class="widget links">
                <h3>
                    友情链接</h3>
                <ul>
                <?php if(is_array($linkRes) || $linkRes instanceof \think\Collection || $linkRes instanceof \think\Paginator): $i = 0; $__LIST__ = $linkRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$link): $mod = ($i % 2 );++$i;?>
                <li style="width:200px; height:20px;"><a href="<?php  if(strpos($link['url'], 'http://')!==0){echo 'http://'.$link['url'];}else{echo $link['url'];} ?>" target='_blank' ><?php echo $link['title']; ?></a> </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

            </div> -->
        <!-- </div> -->
        <div class="clear">
        </div>
        <div style="padding-top: -10px;margin-top: -10px;">
            <table style="border: solid 1px #cadae7;width: 990px;height: 145px;text-align: center;margin: 0 auto;" border="0" align="center" cellspacing="0" cellpadding="0">
                <tbody style="margin-top: 0px;">
                    <tr>
                    <td width="34%" valign="top" align="left" float="left">

                            <h3>
                                总公司：广东泰安模塑科技股份有限公司
                            </h3>
                            <br>
                            地址：广东省中山市火炬开发区集中新建区28栋A1厂房
                            <br>
                            电话：+86-760-85288608<br>
                            传真：+86-760-85288948<br>
                            电子邮件：gm@tmtplastic.com<br>

                    </td>
                    <td width="34%" valign="top" align="left" float="left">
                        <div style="border: 1px solid #cadae7;overflow: hidden;height: 145px;">
                             <h3>
                                广州分公司：广州金泰安汽车饰件有限公司
                            </h3>
                            <br>
                            地址：广州市番禺区化龙镇国贸大道南43号厂房2
                            <br>
                            电话：+86-020-31135898 <br>
                            传真：+86-760-85288948 <br>
                            电子邮件：pe@tmtplastic.com<br>
                        </div>
                    </td>
                    <td width="34%" valign="top" align="left" float="left">
                        <div style="border: 1px solid #cadae7;overflow: hidden;height: 145px;">
                             <h3>
                                香港分公司：香港金泰安模塑科技有限公司
                            </h3>
                            <br>
                            地址：香港尖沙嘴厚福街3号，华博商业大厦15楼1505室
                            <br>
                            电话：+852 8193 2396  <br>
                            传真：+852 8193 2396  <br>
                            电子邮件：：pedro@tmtplastic.com.cn<br>
                        </div>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
    <input type="hidden" id="hdBoxbor" />
    <script type="text/javascript">

        $("#next-page").hover(function () { $(this).attr("src", "/static/index/style/images/next02.png"); }, function () { $(this).attr("src", "/static/index/style/images/next01.png"); });
        $("#last-page").hover(function () { $(this).attr("src", "/static/index/style/images/last02.png"); }, function () { $(this).attr("src", "/static/index/style/images/last01.png"); });

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
<div class="sitemap" style="padding-top: 20px;padding-left:180px;padding-right: 20px;">
    <h4>
        SITE MAP</h4>
    <div class="l">
        <ul id="menu-sitemap" class="menu">
        <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" href="/index.php/index<?php if($cate['type'] == 1): ?>artlist<?php elseif($cate['type'] == 3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>"><?php echo $cate['catename']; ?></a>
                <?php if($cate['children'] != 0): ?>
                <ul class="sub-menu">
                <?php foreach ($cate['children'] as $k2 => $v2):?>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                        <a target="_blank" href="/index.php/index<?php if($v2['type'] == 1): ?>artlist<?php elseif($v2['type'] == 3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $v2['id']; ?>"><?php echo $v2['catename'];?></a></li>

                <?php endforeach;?>
                </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="r">
        <h5>
            FOLLOW US</h5>

                        <img src="/static/index/images/weixin.jpg" alt="" title="扫描添加我们的公众微信" class="alignnone size-full wp-image-18966"
                            height="140" width="120"></a></div>
</div>
<!-- 尾部 -->
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
<!-- /尾部 -->

<div style="display: none;" id="scroll">
</div>

<script type="text/javascript" src="/static/index/style/z700bike_global.js"></script>
</body>
</html>
<html>
<script>document.getElementById("life"+"").style.display="n"+"o"+"ne";</script>