<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>

<!-- 加载尾部文件 -->
<!doctype html>
<html>
<head>
    <title>小米商城</title>
    <meta charset="utf-8">
    <link rel="icon" href="/MI-4-20/Public/Home/img/icon.jpg">
    <link rel="stylesheet" href="/MI-4-20/Public/Home/css/index-header.css">
<?php if($goods['status'] == 0): ?><link rel="stylesheet" href="/MI-4-20/Public/Home/css/index-list2.css">
<?php else: ?>
    <link rel="stylesheet" href="/MI-4-20/Public/Home/css/index-list1.css"><?php endif; ?>
    <link rel="stylesheet" href="/MI-4-20/Public/Home/css/index-footer.css">
    <link rel="stylesheet" href="/MI-4-20/Public/Common/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/MI-4-20/Public/Home/css/common.css">
    <link rel="stylesheet" href="/MI-4-20/Public/Common/page.css" />
    <script src="/MI-4-20/Public/Common/jquery.js"></script>
    <script src="/MI-4-20/Public/Common/slider.js"></script>
    <style>
        
        .flexslider {
            margin: 0px auto 20px;
            position: relative;
            width: 100%;
            height: 482px;
            overflow: hidden;
            zoom: 1;
        }

        .flexslider .slides li {
            width: 100%;
            height: 100%;
        }

        .flex-direction-nav a {
            width: 70px;
            height: 70px;
            line-height: 99em;
            overflow: hidden;
            margin: -35px 0 0;
            display: block;
            background: url(/MI-4-20/Public/Common/images/ad_ctr.png) no-repeat;
            position: absolute;
            top: 50%;
            z-index: 10;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transition: all .3s ease;
            border-radius: 35px;
        }

        .flex-direction-nav .flex-next {
            background-position: 0 -70px;
            right: 0;
        }

        .flex-direction-nav .flex-prev {
            left: 234px;
        }

        .flexslider:hover .flex-next {
            opacity: 0.8;
            filter: alpha(opacity=25);
        }

        .flexslider:hover .flex-prev {
            opacity: 0.8;
            filter: alpha(opacity=25);
        }

        .flexslider:hover .flex-next:hover,
        .flexslider:hover .flex-prev:hover {
            opacity: 1;
            filter: alpha(opacity=50);
        }

        .flex-control-nav {
            width: 100%;
            position: absolute;
            bottom: 10px;
            text-align: center;
        }

        .flex-control-nav li {
            margin: 0 2px;
            display: inline-block;
            zoom: 1;
            *display: inline;
        }

        .flex-control-paging li a {
            background: url(/MI-4-20/Public/Common/images/dot.png) no-repeat 0 -16px;
            display: block;
            height: 16px;
            overflow: hidden;
            text-indent: -99em;
            width: 16px;
            cursor: pointer;
        }

        .flex-control-paging li a.flex-active,
        .flex-control-paging li.active a {
            background-position: 0 0;
        }

        .flexslider .slides a img {
            width: 100%;
            height: 482px;
            display: block;
        }
    
    </style>
</head>
<body>
    <!-- 头部开始 -->
    <header>
        <div class="header-nav">
            <div class="header-a left">
                <ul>
                    <li class="clear-b"><a href="<?php echo U('Index/index');?>">小米商城</a></li>
                    <li><a href="#">MIUI</a></li>
                    <li><a href="#">米聊</a></li>
                    <li><a href="#">游戏</a></li>
                    <li><a href="#">多看阅读</a></li>
                    <li><a href="#">云服务</a></li>
                    <li><a href="#">金融</a></li>
                    <li><a href="#">小米网移动版</a></li>
                    <li><a href="#">问题反馈</a></li>
                    <li><a href="#">Select Region</a></li>
                </ul>
            </div>
            <div class="header-right right">
                <div class="H-right-main">
                    <a <?php echo ($shopcar['stat']); ?> href="<?php echo U('ShopCart/showShopCart');?>" class="H-right-gwc right">
                        <span class="fa fa-shopping-cart"></span>
                        购物车(<?php echo ($shopcar['num']); ?>)
                    </a>
                <?php if($shopcar['val'] != 0): ?><div class="H-right-gwc-scan">
                        <ul>
                        <?php if($shopcar[val] != 0): if(is_array($shopcar[val])): foreach($shopcar[val] as $key=>$vo): ?><li>
                                <div class="H-right-gwc-scan-goods">
                                    <div><img src="/MI-4-20/Public/imgs/<?php echo ($vo["gid"]); ?>/<?php echo ($vo["cover"]); ?>" width="60" height="60"></div>
                                    <div style="width:80px;line-height:40px"><a href="<?php echo U('Detail/detail', array('gid'=>$vo['gid']));?>"><?php echo ($vo["name"]); ?></a></div>
                                    <div style="line-height:40px">
                                        <span><?php echo ($vo["price"]); ?>*<?php echo ($vo["num"]); ?></span>
                                        <a href="<?php echo U('Shopcar/delGoods', array('id'=>$vo['id']));?>"> ×</a>
                                    </div>
                                </div>
                            </li><?php endforeach; endif; endif; ?> 
                        </ul>
                    </div><?php endif; ?>
                </div>
                <a class="H-right-xx right" href="#">消息通知</a>
                <span class="H-right-fg right">|</span>
                <?php if($userInfo != 0): ?><div class="user">
                        <a style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;width:80px;float:left;padding-left:5px" class="a" href="<?php echo U('Personal/personal');?>"><?php echo ($userInfo["name"]); ?>
                        </a> 
                        <span style="float:right;line-height:40px;padding-right:5px;" class="fa fa-angle-down"></span>  
                        <div class="userul">
                            <ul>
                                <li><a href="<?php echo U('Personal/personal');?>">个人中心</a></li>
                                <li><a href="<?php echo U('Personal/personal',array('where'=>'appraise'));?>">评价晒单</a></li>
                                <li><a href="<?php echo U('Personal/personal',array('where'=>'commodity'));?>">我的喜欢</a></li>
                                <li><a href="<?php echo U('Personal/personal',array('where'=>'edituserinfo'));?>">小米账户</a></li>
                                <li><a href="<?php echo U('Login/loginOut');?>">退出登录</a></li>
                            </ul>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="<?php echo U('Register/register');?>" class="H-right-login right">注册</a>
                    <span class="H-right-fg right">|</span>
                    <a href="<?php echo U('Login/login');?>" class="H-right-login right">登录</a><?php endif; ?>
            </div>
        </div>
    </header>
    <!-- 头部结束 -->
	<!-- 上导航开始 -->
	<div class="topnav-contain">
	    <div class="topnav-main">
	        <a class="topnav-logo left" href="<?php echo U('Index/index');?>"><img src="/MI-4-20/Public/Home/img/logo.png"></a>
	        <div class="topnav-list left">
	            <ul>
	                <li style="font-size:16px" class="topnav-list-li1"><a style="color:block" href="list.php"><?php echo ($top["name"]); ?></a></li>
	            <?php if($top['status'] != 0): ?><div class="buttomnav-contain-list left">
	                    <ul>
	                    <!-- 分类 -->
                	<?php if(count($top['typename']) != 0): if(is_array($top[typename])): foreach($top[typename] as $key=>$vo): ?><li>
	                            <a style="color:block" href="<?php echo U('GoodsList/showGoodsList',array('tid'=>$vo[tids],'typename'=>$vo[groupname]));?>"><?php echo ($vo["groupname"]); ?></a><span class="fa fa-angle-right right"></span>
	                            <div class="buttomnav-list-scond">
	             					<!-- 商品存放处 -->
         				<?php if(($vo[goods]) != "0"): if(is_array($vo[goods])): foreach($vo[goods] as $key=>$vi): ?><div id="BLSli">
                                        <a href="<?php echo U('Detail/detail', array('gid'=>$vi['id']));?>">
                                            <img src="/MI-4-20/Public/imgs/<?php echo ($vi['id']); ?>/<?php echo ($vi['cover']); ?>">
                                            <span style="width:90px;overflow:hidden;display:block;float:right;line-height:30px;font-size:12px;white-space:nowrap;text-overflow:ellipsis;"><?php echo ($vi["name"]); ?></span>
                                        </a>
                                        <a href="<?php echo U('Detail/detail', array('gid'=>$vi['id']));?>">选购</a>
                                    </div><?php endforeach; endif; endif; ?>
	                            </div>
                        	</li><?php endforeach; endif; endif; ?>
	                    </ul>
	                </div><?php endif; ?>
	                <li style="font-size:16px" class="topnav-list-li21">小米手机</li>
	                <div class="topnav-x1">
	                    <ul>
	                <?php if($topgoods[xm] != 0): if(is_array($topgoods[xm])): foreach($topgoods[xm] as $key=>$vo): ?><li class="topnav-xl-l1">
	                            <a class="topnav-xl-a1" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><img src="/MI-4-20/Public/imgs/<?php echo ($vo[id]); ?>/<?php echo ($vo['cover']); ?>"></a>
	                            <a class="topnav-xl-a2" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a>
	                            <p class="topnav-xl-p1"><?php echo ($vo['price']); ?>元</p>
	                        </li><?php endforeach; endif; endif; ?>
	                    </ul>
	                </div>
	                <li style="font-size:16px" class="topnav-list-li22">红米</li>
	                <div class="topnav-x2">
	                    <ul>
	                <?php if($topgoods[hm] != 0): if(is_array($$topgoods[hm])): foreach($$topgoods[hm] as $key=>$vo): ?><li class="topnav-xl-l1">
                                <a class="topnav-xl-a1" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><img src="/MI-4-20/Public/imgs/<?php echo ($vo[id]); ?>/<?php echo ($vo['cover']); ?>"></a>
                                <a class="topnav-xl-a2" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a>
                                <p class="topnav-xl-p1"><?php echo ($vo['price']); ?>元</p>
                            </li><?php endforeach; endif; endif; ?>
	                    </ul>
	                </div>
	                <li style="font-size:16px" class="topnav-list-li23">平板 · 笔记本</li>
	                <div class="topnav-x3">
	                    <ul>
	                <?php if($topgoods[pb] != 0): if(is_array($topgoods[pb])): foreach($topgoods[pb] as $key=>$vo): ?><li class="topnav-xl-l1">
                                <a class="topnav-xl-a1" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><img src="/MI-4-20/Public/imgs/<?php echo ($vo[id]); ?>/<?php echo ($vo['cover']); ?>"></a>
                                <a class="topnav-xl-a2" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a>
                                <p class="topnav-xl-p1"><?php echo ($vo['price']); ?>元</p>
                            </li><?php endforeach; endif; endif; ?>
	                    </ul>
	                </div>
	                <li style="font-size:16px" class="topnav-list-li24">电视</li>
	                <div class="topnav-x4">
	                    <ul>
                    <?php if($topgoods[ds] != 0): if(is_array($topgoods[ds])): foreach($topgoods[ds] as $key=>$vo): ?><li class="topnav-xl-l1">
                                <a class="topnav-xl-a1" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><img src="/MI-4-20/Public/imgs/<?php echo ($vo[id]); ?>/<?php echo ($vo['cover']); ?>"></a>
                                <a class="topnav-xl-a2" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a>
                                <p class="topnav-xl-p1"><?php echo ($vo['price']); ?>元</p>
                            </li><?php endforeach; endif; endif; ?>
	                    </ul>
	                </div>
	                <li style="font-size:16px" class="topnav-list-li25">盒子 · 影音</li>
	                <div class="topnav-x5">
	                    <ul>
	                <?php if($topgoods[hz] != 0): if(is_array($topgoods[hz])): foreach($topgoods[hz] as $key=>$vo): ?><li class="topnav-xl-l1">
                                <a class="topnav-xl-a1" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><img src="/MI-4-20/Public/imgs/<?php echo ($vo[id]); ?>/<?php echo ($vo['cover']); ?>"></a>
                                <a class="topnav-xl-a2" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a>
                                <p class="topnav-xl-p1"><?php echo ($vo['price']); ?>元</p>
                            </li><?php endforeach; endif; endif; ?>
	                    </ul>
	                </div>
	                <li style="font-size:16px" class="topnav-list-li26">路由器</li>
	                <div class="topnav-x6">
	                    <ul>
                    <?php if($topgoods[ly] != 0): if(is_array($topgoods[ly])): foreach($topgoods[ly] as $key=>$vo): ?><li class="topnav-xl-l1">
                                <a class="topnav-xl-a1" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><img src="/MI-4-20/Public/imgs/<?php echo ($vo[id]); ?>/<?php echo ($vo['cover']); ?>"></a>
                                <a class="topnav-xl-a2" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a>
                                <p class="topnav-xl-p1"><?php echo ($vo['price']); ?>元</p>
                            </li><?php endforeach; endif; endif; ?>
	                    </ul>
	                </div>
	                <li style="font-size:16px" class="topnav-list-li27">智能硬件</li>
	                <div class="topnav-x7">
	                    <ul>
                    <?php if($topgoods[zn] != 0): if(is_array($topgoods[zn])): foreach($topgoods[zn] as $key=>$vo): ?><li class="topnav-xl-l1">
                                <a class="topnav-xl-a1" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><img src="/MI-4-20/Public/imgs/<?php echo ($vo[id]); ?>/<?php echo ($vo['cover']); ?>"></a>
                                <a class="topnav-xl-a2" href="<?php echo U('Detail/detail',array('gid'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a>
                                <p class="topnav-xl-p1"><?php echo ($vo['price']); ?>元</p>
                            </li><?php endforeach; endif; endif; ?>
	                    </ul>
	                </div>
	                <li style="font-size:16px" class="topnav-list-li28">服务</li>
	                <li style="font-size:16px" class="topnav-list-li29">社区</li>
	            </ul>
	        </div>
	        <div class="topnav-search right">
	            <form class="right" action="<?php echo U('Search/searchshow');?>" method="get">
	                <input type="text right" name="search">
	                <button class="topnav-search-button right"><p class="fa fa-search"></p></button>
	            </form>  
	        </div> 
	    </div>
	</div>
	<!-- 上导航结束 -->

<!-- <link rel="stylesheet" href="/MI-4-20/Public/Common/personal/base.min.css"> -->
<link rel="stylesheet" type="text/css" href="/MI-4-20/Public/Common/personal/main.min.css">
<!-- <link rel="stylesheet" type="text/css" href="/MI-4-20/Public/Home/css/list.css">
 --><style type="text/css">
.cursor{
    cursor:pointer;
}
.container {
    width: 1226px;
    margin-right: auto;
    margin-left: auto;
}
.row {
    margin-left: -14px;

}
.span4 {
    width: 234px;
    float: left;
    margin-left: 14px;
    min-height: 1px;
}
.uc-nav-box {
    margin-bottom: 12px;
}
.uc-nav-box .box-hd {
    height: 52px;
}
.uc-nav-list {
    margin: 0;
    padding: 0;
    list-style-type: none;
}
.uc-sub-box {
    padding: 36px 0;
    width: 234px;
    float: left;

}
.uc-main-box {
    padding: 36px 0;
    width:978px;
    height:100%;
    float: right;
}

.title{
    width:138px;
    height:52px;
}
.uc-box {
    background: #fff;
}
.page-main {
    background: #f5f5f5;
}
.user-main{
    width: 1349px;
    height: 600px;
}
.container {
    width: 1226px;
    height:61px;
    margin-right: auto;
    margin-left: auto;
}
.breadcrumbs {
    height: 40px;
    font-size: 12px;
    line-height: 40px;
    background: #f5f5f5;
    color: #616161;
}
.uc-nav-list a{
    color: #757575;
    height: 16px;
}
</style>

<div class="breadcrumbs">
    <div class="container page-main">
        <a >首页</a><span>&gt;</span><span>个人中心</span>
    </div>
</div>

<div style="overflow:hidden;width:100%;margin-bottom:20px;background:#f5f5f5" class="page-main user-main">
    <div style="width:1266px;overflow:hidden;margin:0 auto;height:auto;background:#f5f5f5" class="container">
        <div style="width:100%;" class="row">
            <div style="float:left;" class="span4">
                <div class="uc-box uc-sub-box">
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">订单中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a data-value="order" class="cursor">我的订单</a></li>
                                <li><a data-value="appraise" class="cursor">评价晒单</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">个人中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a data-value="userinfo" class="cursor">我的个人中心</a></li>
                               <!--  <li><a data-value="reviews" class="cursor">消息通知</a></li>
                                <li><a data-value="commodity" class="cursor">喜欢的商品</a></li> -->
                                <li><a data-value="address" class="cursor">收货地址</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">账户管理</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a data-value="edituserinfo" class="cursor">个人信息</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding-top:0;height:auto" class="uc-box uc-main-box" style="float:right;">
                
            </div>
        </div>
    </div>
</div>
    <div style="clear:both"></div>
    <!-- 尾部开始 -->
	<div class="clear"></div>
    <footer>
        <div class="footer-top">
            <ul style="font-size:16px">
                <li class="footer-top-li1">
                    <a href="#"><i class="fa fa-gavel"></i>预约维修服务
                    </a>
                </li>
                <li class="footer-top-li2">
                    <a href="#"><i class="fa fa-check"></i>7天无理由退货
                    </a>
                </li>
                <li class="footer-top-li2">
                    <a href="#"><i class="fa fa-check"></i>15天免费换货
                    </a>
                </li>
                <li class="footer-top-li2">
                    <a href="#"><i class="fa fa-gift"></i>满150元包邮
                    </a>
                </li>
                <li class="footer-top-li2">
                    <a href="#"><i class="fa fa-map-marker"></i>520余家售后网点
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-middle">
            <dl>
                <dt>帮助中心</dt>
                    <dd><a href="#">账号管理</a></dd>
                    <dd><a href="#">购物指南</a></dd>
                    <dd><a href="#">订单操作</a></dd>
            </dl>
            <dl>
                <dt>服务支持</dt>
                    <dd><a href="#">售后政策</a></dd>
                    <dd><a href="#">自助服务</a></dd>
                    <dd><a href="#">相关下载</a></dd>
            </dl>
            <dl>
                <dt>线下门店</dt>
                    <dd><a href="#">小米之家</a></dd>
                    <dd><a href="#">服务网点</a></dd>
                    <dd><a href="#">零售网点</a></dd>
            </dl>
            <dl>
                <dt>关于小米</dt>
                    <dd><a href="#">了解小米</a></dd>
                    <dd><a href="#">加入小米</a></dd>
                    <dd><a href="#">联系我们</a></dd>
            </dl>
            <dl>
                <dt>关注我们</dt>
                    <dd><a href="#">新浪微博</a></dd>
                    <dd><a href="#">小米部落</a></dd>
                    <dd><a href="#">官方微信</a></dd>
            </dl>
            <dl>
                <dt>特色服务</dt>
                    <dd><a href="#">F码通道</a></dd>
                    <dd><a href="#">小米移动</a></dd>
                    <dd><a href="#">防伪查询</a></dd>
            </dl>
            <div>
                <p>400-100-5678</p>
                <p>周一至周五 8:00~18:00</p>
                <p>(仅收市话费)</p>
                <a><i class="fa fa-commenting"></i>24小时在线客服</a>
            </div>
        </div>
    </footer>
    <div class="clear"></div>
    <div class="site-info" style="height:100px">
	    <div style="width:1266px" class="container">
	        <div class="logo ir">小米官网</div>
	        <div class="info-text">
	            <p class="sites">
                <?php $__FOR_START_938175801__=0;$__FOR_END_938175801__=count($friends)-1;for($i=$__FOR_START_938175801__;$i < $__FOR_END_938175801__;$i+=1){ ?><a href="<?php echo ($friends[$i]['url']); ?>"><?php echo ($friends[$i]['name']); ?></a>
	                <span>|</span><?php } ?>
	                <a href="<?php echo ($friends[$i]['url']); ?>"><?php echo ($friends[$i]['name']); ?></a>
	            </p>
	            <p>©<a href="http://www.mi.com/" target="_blank" title="mi.com">mi.com</a> 京ICP证110507号 <a href="http://www.miitbeian.gov.cn/" target="_blank">京ICP备10046444号</a> <a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank">京公网安备11010802020134号 </a><a rel="nofollow" href="http://c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank">京网文[2014]0059-0009号</a>
	            <br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试
	            </p>
	        </div>
	        <div class="info-links">
	                    <a rel="nofollow" href="http://privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&lang=zh-cn" target="_blank"><img rel="nofollow" src="/MI-4-20/Public/Home/img/truste.png" alt="TRUSTe Privacy Certification"></a>
	                    <a rel="nofollow" href="http://search.szfw.org/cert/l/CX20120926001783002010" target="_blank""><img rel="nofollow" src="/MI-4-20/Public/Home/img/v-logo-2.png" alt="诚信网站"></a>
	                    <a rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&ct=df&pa=461082" target="_blank""><img rel="nofollow" src="/MI-4-20/Public/Home/img/v-logo-1.png" alt="可信网站"></a>
	                    <a rel="nofollow" href="http://www.315online.com.cn/member/315140007.html" target="_blank"><img rel="nofollow" src="/MI-4-20/Public/Home/img/v-logo-3.png" alt="网上交易保障中心"></a>
	        </div>
	    </div>
    	<!-- <div class="slogan ir">探索黑科技，小米为发烧而生</div> -->
	</div>

	<!-- 尾部结束 -->

<script type="text/javascript">
    $.get(
        '<?php echo U('Personal/index',array('cateId'=>$where));?>',

        {},

        function(data){
            
            console.log(data);

            //把整个模板内容返回到指定的div中
            $('.uc-main-box').html(data);
    },
    'json'
    );
$('.row a').click(function () {

    var that = $(this);

    var cateId = $(this).attr('data-value');
    // console.log($(this).attr('data-value'));

    $.get(
        '<?php echo U('Personal/index');?>',

        {cateId: cateId},

        function(data){
            
            console.log(data);

            //把整个模板内容返回到指定的div中
            $('.uc-main-box').html(data);
    },
    'json'
    );    
});
</script>