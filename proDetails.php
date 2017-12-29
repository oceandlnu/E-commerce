<?php
require_once 'include.php';
$id = $_REQUEST['id'];
$proInfo = getProById($id);
$proImgs = getProImgsById($id);
//var_dump($proImgs);
if (empty($proImgs)) {
    alertMes("商品图片错误", "index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>产品介绍</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="styles/reset.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" media="all" href="styles/jquery.jqzoom.css"/>
    <script src="scripts/jquery-1.6.js" type="text/javascript"></script>
    <script src="scripts/jquery.jqzoom-core.js" type="text/javascript"></script>
    <!--[if IE 6]>
    <script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript" src="js/ie6Fixpng.js"></script>
    <![endif]-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('.jqzoom').jqzoom({
                zoomType: 'standard',
                lens: true,
                preloadImages: false,
                alwaysOn: false,
                title: false,
                zoomWidth: 410,
                zoomHeight: 410
            });

        });
    </script>
</head>
<body class="grey">
<div class="headerBar">
    <div class="topBar">
        <div class="comWidth">
            <div class="leftArea">
                <a href="#" class="collection">收藏本站</a>
            </div>
            <div class="rightArea">
                欢迎来到电商网站！
                <?php if (!empty($_SESSION['loginFlag'])): ?>
                    <span>欢迎您</span><?php echo $_SESSION['username']; ?>
                    <a href="doAction.php?act=userOut">[退出]</a>
                <?php else: ?>
                    <a href="login.php">[登录]</a><a href="reg.php">[免费注册]</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="logoBar">
        <div class="comWidth">
            <div class="logo fl">
                <a href="#"><img src="images/logo.png" alt="慕课网"></a>
            </div>
            <div class="search_box fl">
                <input type="text" class="search_text fl">
                <input type="submit" value="搜 索" class="search_btn fr">
            </div>
            <div class="shopCar fr">
                <span class="shopText">购物车</span>
                <span class="shopNum">20</span>
            </div>
        </div>
    </div>
    <!--导航栏-->
    <div class="navBox">
        <div class="comWidth">
            <div class="shopClass fl">
                <h3>全部商品分类<i></i></h3>
                <div class="shopClass_show hide">
                    <dl class="shopClass_item">
                        <dt><a href="" class="b">手机</a> <a href="" class="b">数码</a> <a href="" class="aLink">合约机</a>
                        </dt>
                        <dd><a href="">荣耀3X</a> <a href="">单反</a> <a href="">智能设备</a></dd>
                    </dl>
                    <dl class="shopClass_item shopClass_active">
                        <dt><a href="" class="b">电脑</a> <a href="" class="b">硬件外设</a> <a href="" class="aLink">装机宝</a>
                        </dt>
                        <dd><a href="">笔记本</a> <a href="">台式机</a> <a href="">超级本</a> <a href="">平板</a></dd>
                    </dl>
                    <dl class="shopClass_item">
                        <dt><a href="" class="b">大家电</a></dt>
                        <dd><a href="">电视</a> <a href="">空调</a> <a href="">冰箱</a> <a href="">洗衣机</a></dd>
                    </dl>
                    <dl class="shopClass_item">
                        <dt><a href="" class="b">厨房电器</a> <a href="" class="b">生活电器</a></dt>
                        <dd><a href="">空气净化器</a> <a href="">微波炉</a> <a href="">取暖设备</a></dd>
                    </dl>
                    <dl class="shopClass_item">
                        <dt><a href="" class="b">食品/饮料/生鲜</a> <a href="" class="aLink">粮油</a></dt>
                        <dd><a href="">进口</a> <a href="">方便面</a> <a href="">零食</a> <a href="">保健</a></dd>
                    </dl>
                </div>
                <div class="shopClass_list hide">
                    <div class="shopClass_cont">
                        <dl class="shopList_item">
                            <dt>电脑整机</dt>
                            <dd>
                                <a href="">笔记本</a><a href="">超级本</a><a href="">上网本</a><a href="">平板电脑</a><a
                                        href="">台式机</a>
                            </dd>
                        </dl>
                        <dl class="shopList_item">
                            <dt>装机配件</dt>
                            <dd>
                                <a href="">CPU</a><a href="">硬盘</a><a href="">SSD固态硬盘</a><a href="">内存</a><a
                                        href="">显示器</a><a href="">智能显示器</a><a href="">主板</a><a href="">显卡</a><a
                                        href="">机箱</a><a href="">电源</a><a href="">散热器</a><a href="">刻录机/光驱</a><a
                                        href="">声卡</a><a href="">拓展卡</a><a href="">服务器配件</a><a href="">DIY小附件</a><a
                                        href="">装机/配件安装</a>
                            </dd>
                        </dl>
                        <dl class="shopList_item">
                            <dt>整机附件</dt>
                            <dd>
                                <a href="">电脑包</a><a href="">电脑桌</a><a href="">电池</a><a href="">电源适配器</a><a
                                        href="">贴膜</a><a href="">清洁用品</a><a href="">笔记本散热器</a><a href="">USB拓展</a><a
                                        href="">平板配件</a><a href="">特色附件</a><a href="">插座网线/电话线</a><a href="">影音线材</a><a
                                        href="">电脑线材</a>
                            </dd>
                        </dl>
                        <dl class="shopList_item">
                            <dt>电脑外设</dt>
                            <dd>
                                <a href="">鼠标</a><a href="">键盘</a><a href="">游戏外设</a><a href="">移动硬盘</a><a
                                        href="">摄像头</a><a href="">高清播放器</a><a href="">外置盒</a><a href="">移动硬盘包</a><a
                                        href="">手写板/绘图板</a>
                            </dd>
                        </dl>
                        <dl class="shopList_item">
                            <dt>网络设备</dt>
                            <dd>
                                <a href="">路由器</a><a href="">网卡</a><a href="">3G无线上网</a><a href="">交换机</a><a href="">网络存储</a><a
                                        href="">布线工具</a><a href="">网络配件</a><a href="">正版软件</a>
                            </dd>
                        </dl>
                        <dl class="shopList_item">
                            <dt>音频设备</dt>
                            <dd>
                                <a href="">音箱</a><a href="">耳机/耳麦</a><a href="">麦克风</a><a href="">声卡</a><a
                                        href="">音频附件</a><a href="">录音笔</a>
                            </dd>
                        </dl>
                        <div class="shopList_links">
                            <a href="">电脑整机频道<span></span></a><a href="">硬件/外设频道<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav fl">
                <li><a href="#" class="active">数码城</a></li>
                <li><a href="#">天黑黑</a></li>
                <li><a href="#">团购</a></li>
                <li><a href="#">发现</a></li>
                <li><a href="#">二手特卖</a></li>
                <li><a href="#">名品会</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="userPosition comWidth">
    <strong><a href="">首页</a></strong>
    <span>&nbsp;&gt;&nbsp;</span>
    <a href=""><?php echo $proInfo['cName']; ?></a>
    <!--    <span>&nbsp;&gt;&nbsp;</span>-->
    <!--    <a href="">平板电脑</a>-->
    <!--    <span>&nbsp;&gt;&nbsp;</span>-->
    <!--    <a href="">apple 苹果</a>-->
    <span>&nbsp;&gt;&nbsp;</span>
    <em><?php echo $proInfo['pSn']; ?></em>
</div>
<div class="description_info comWidth">
    <div class="description clearfix">
        <div class="leftArea">
            <div class="description_imgs">
                <div class="big">
                    <a href="images/uploads/image_800/<?php echo  $proImgs[0]['albumPath'];?>" class="jqzoom" rel='gal1'  title="triumph" >
                        <img width="309" height="340" src="images/uploads/<?php  echo $proImgs[0]['albumPath'];?>"  title="triumph">
                    </a>
                </div>
                <ul class="des_smimg clearfix" id="thumblist" >
                    <?php foreach($proImgs as $key=>$proImg):?>
                        <li><a class="<?php echo $key==0?"zoomThumbActive":"";?> active" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'images/uploads/image_350/<?php echo $proImg['albumPath'];?>',largeimage: 'images/uploads/image_800/<?php echo $proImg['albumPath'];?>'}"><img src="images/uploads/image_50/<?php echo $proImg['albumPath'];?>" alt=""></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <div class="rightArea">
            <div class="des_content">
                <h3 class="des_content_tit"><?php echo $proInfo['pName']; ?></h3>
                <div class="dl clearfix">
                    <div class="dt">价格</div>
                    <div class="dd"><span class="des_money"><em>￥</em><?php echo $proInfo['iPrice']; ?></span></div>
                </div>
                <div class="dl clearfix">
                    <div class="dt">优惠</div>
                    <div class="dd"><span class="hg"><i class="hg_icon">满换购</i><em>购ipad加价优惠够配件或USB充电插座</em></span>
                    </div>
                </div>
                <div class="des_position">
                    <div class="dl clearfix">
                        <div class="dt">送到</div>
                        <div class="dd clearfix">
                            <div class="select">
                                <h3>海淀区五环内</h3><span></span>
                                <ul class="show_select">
                                    <li>上帝</li>
                                    <li>五道口</li>
                                </ul>
                            </div>
                            <span class="theGoods">有货，可当日出库</span>
                        </div>
                    </div>
                    <div class="dl clearfix">
                        <div class="dt colorSelect">选择颜色</div>
                        <div class="dd clearfix">
                            <div class="des_item des_item_active">
                                白色
                            </div>
                            <div class="des_item">
                                黑色
                            </div>
                            <div class="des_item">
                                灰色
                            </div>
                        </div>
                    </div>
                    <div class="dl clearfix">
                        <div class="dt des_select_more">选择规格</div>
                        <div class="dd clearfix">
                            <div class="des_item des_item_sm des_item_active">
                                WIFI 16G
                            </div>
                            <div class="des_item des_item_sm">
                                WIFI 32G
                            </div>
                            <div class="des_item des_item_sm">
                                WIFI 64G
                            </div>
                            <div class="des_item des_item_sm">
                                WIFI 16G
                            </div>
                            <div class="des_item des_item_sm">
                                WIFI 32G
                            </div>
                            <div class="des_item des_item_sm">
                                WIFI 64G
                            </div>
                            <div class="des_item des_item_sm">
                                WIFI 16G
                            </div>
                            <div class="des_item des_item_sm">
                                WIFI 32G
                            </div>
                            <div class="des_item des_item_sm">
                                WIFI 64G
                            </div>
                        </div>
                    </div>
                    <div class="dl">
                        <div class="dt des_num">数量</div>
                        <div class="dd clearfix">
                            <div class="des_number">
                                <div class="reduction">-</div>
                                <div class="des_input">
                                    <input type="text">
                                </div>
                                <div class="plus">+</div>
                            </div>
                            <div class="xg">限购<em>9</em>件</div>
                        </div>
                    </div>
                </div>
                <div class="des_select">
                    已选择 <span>"白色|WIFI 16G"</span>
                </div>
                <div class="shop_buy">
                    <a href="" class="shopping_btn"></a>
                    <span class="line"></span>
                    <a href="" class="buy_btn"></a>
                </div>
                <div class="notes">
                    注意：此商品可提供普通发票，不提供增值税发票
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hr_15"></div>
<div class="des_info comWidth clearfix">
    <div class="leftArea">
        <div class="recommend">
            <h3 class="tit">同价位</h3>
            <div class="item">
                <div class="item_cont">
                    <div class="img_item">
                        <a href=""><img src="images/shop/shop_01.png" alt=""></a>
                    </div>
                    <p><a href="">Canon 佳能 IXUS 132数码相机 粉色（1600像素 2.7" LCD</a></p>
                    <p class="money">￥699.00</p>
                </div>
            </div>
            <div class="item">
                <div class="item_cont">
                    <div class="img_item">
                        <a href=""><img src="images/shop/shop_01.png" alt=""></a>
                    </div>
                    <p><a href="">Canon 佳能 IXUS 132数码相机 粉色（1600像素 2.7" LCD</a></p>
                    <p class="money">￥699.00</p>
                </div>
            </div>
            <div class="item">
                <div class="item_cont">
                    <div class="img_item">
                        <a href=""><img src="images/shop/shop_01.png" alt=""></a>
                    </div>
                    <p><a href="">Canon 佳能 IXUS 132数码相机 粉色（1600像素 2.7" LCD</a></p>
                    <p class="money">￥699.00</p>
                </div>
            </div>
        </div>
        <div class="recommend">
            <h3 class="tit">看了最终买</h3>
            <div class="item">
                <div class="item_cont">
                    <div class="img_item">
                        <a href=""><img src="images/shop/shop_01.png" alt=""></a>
                    </div>
                    <p><a href="">Canon 佳能 IXUS 132数码相机 粉色（1600像素 2.7" LCD</a></p>
                    <p class="money">￥699.00</p>
                </div>
            </div>
            <div class="item">
                <div class="item_cont">
                    <div class="img_item">
                        <a href=""><img src="images/shop/shop_01.png" alt=""></a>
                    </div>
                    <p><a href="">Canon 佳能 IXUS 132数码相机 粉色（1600像素 2.7" LCD</a></p>
                    <p class="money">￥699.00</p>
                </div>
            </div>
            <div class="item">
                <div class="item_cont">
                    <div class="img_item">
                        <a href=""><img src="images/shop/shop_01.png" alt=""></a>
                    </div>
                    <p><a href="">Canon 佳能 IXUS 132数码相机 粉色（1600像素 2.7" LCD</a></p>
                    <p class="money">￥699.00</p>
                </div>
            </div>
        </div>
    </div>
    <div class="rightArea">
        <div class="des_infoContent">
            <ul class="des_tit">
                <li class="active"><span class="js">产品介绍</span></li>
                <li><span class="pj">商品评价(2488)</span></li>
            </ul>
            <div class="ad">
                <a href=""><img src="images/proDes/ad.png" alt=""></a>
            </div>
            <div class="info_text">
                <div class="info_tit">
                    <h3>强烈推荐</h3><h4>货比三家，还选</h4>
                </div>
                <p>
                    现在就是买mini的好时候！换代清仓直降，但苹果品质不变！A5双核，内置lightning闪电接口，正反可插，方便人性。小身材，绚丽的7.9英寸显示屏，7.2mm的厚度，薄如铅笔。女生包包随身携带更时尚！facetime视频通话，与密友24小时畅聊不断线。微信倾力打造，你的智能助理。苹果的牌子就不用我说了，1111补仓，存货不多哦！</p>
                <div class="hr_45"></div>
                <div class="info_tit">
                    <h3>精美图片</h3>
                </div>
                <p>苹果ipad7.9英寸显示屏课带来新的ipad体验，绚丽的显示屏，在每一寸画面中呈现灵动鲜活的美妙影像。</p>
                <div class="hr_45"></div>
                <img src="images/proDes/ipad.png" alt="" class="center">
                <div class="hr_45"></div>
            </div>
        </div>
        <div class="hr_15"></div>
        <div class="des_infoContent">
            <h3 class="shopDes_tit">商品评价</h3>
            <div class="score_box clearfix">
                <div class="score">
                    <span>4.7</span><em>分</em>
                </div>
                <div class="score_speed">
                    <ul class="score_speed_text">
                        <li class="speed_01">非常不满意</li>
                        <li class="speed_02">不满意</li>
                        <li class="speed_03">一般</li>
                        <li class="speed_04">满意</li>
                        <li>非常满意</li>
                    </ul>
                    <div class="score_num">
                        4.7<i></i>
                    </div>
                    <p>共8939人参与评分</p>
                </div>
            </div>
            <div class="review_tab">
                <ul class="review fl">
                    <li><a href="" class="active">全部</a></li>
                    <li><a href="">满意</a></li>
                    <li><a href="">一般</a></li>
                    <li><a href="">不满意</a></li>
                </ul>
                <div class="review_sort fr">
                    <a href="" class="review_time">时间排序</a>
                    <a href="" class="review_reco">推荐排序</a>
                </div>
            </div>
            <div class="review_listBox">
                <div class="review_list clearfix">
                    <div class="review_userHead fl">
                        <div class="review_user">
                            <img src="images/proDes/jinse.png" alt="">
                            <p>61***42</p>
                            <p>金色会员</p>
                        </div>
                    </div>
                    <div class="review_cont">
                        <div class="review_t clearfix">
                            <div class="starsBox fl"><span class="stars"></span><span class="stars"></span><span
                                        class="stars"></span><span class="stars"></span><span class="stars"></span>
                            </div>
                            <span class="stars_text fl">5分 满意</span>
                        </div>
                        <p>挺不错的</p>
                        <p><a href="" class="ding">顶(0)</a><a href="" class="cai">踩(0)</a></p>
                    </div>
                </div>
                <div class="review_list clearfix">
                    <div class="review_userHead fl">
                        <div class="review_user">
                            <img src="images/proDes/tongse.png" alt="">
                            <p>61***42</p>
                            <p>铜色会员</p>
                        </div>
                    </div>
                    <div class="review_cont">
                        <div class="review_t clearfix">
                            <div class="starsBox fl"><span class="stars"></span><span class="stars"></span><span
                                        class="stars"></span><span class="stars"></span><span class="stars"></span>
                            </div>
                            <span class="stars_text fl">5分 满意</span>
                        </div>
                        <p>挺不错的</p>
                        <p><a href="" class="ding">顶(0)</a><a href="" class="cai">踩(0)</a></p>
                    </div>
                </div>
                <div class="hr_15"></div>
                <div class="page">
                    <a href="">上一页</a><a href="">1</a><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a><a
                            href="">6</a><a href="">7</a><a href="">8</a><span class="hl">...</span><a href="">200</a><a
                            href="">下一页</a><span class="morePage">共200页，到第<input type="text" class="pageNum"><span
                                class="page_text">页</span><input type="button" value="确定" class="page_btn"></span>
                </div>
                <div class="hr_25"></div>
            </div>
        </div>
        <div class="hr_25"></div>
        <div class="des_infoContent">
            <div class="advisory_box clearfix">
                <div class="advisory fl">
                    <h3>全部咨询</h3>
                </div>
                <div class="create_advisory fr">
                    <a href="" class="active">发表咨询</a>
                </div>
            </div>
            <div class="review_tab">
                <p>提示：因厂家更改产品包装、产地或者更换随机附件等没有任何提前通知，且每位咨询者购买情况、提问时间不同，为此一下回复信息仅供参考！若由此给您带来不便请多多谅解，谢谢！</p>
            </div>
            <div class="review_listBox">
                <div class="review_list clearfix">
                    <div class="review_userHead fl">
                        <div class="review_user">
                            <img src="images/proDes/tuxing.png" alt="">
                            <p>61***42</p>
                            <p>土星会员</p>
                        </div>
                    </div>
                    <div class="review_cont">
                        <div class="review_t clearfix">
                            <span class="stars_text fl">[商品咨询]</span>
                        </div>
                        <p>还能再便宜点吗？</p>
                        <p><a href="" class="ding">顶(0)</a><a href="" class="cai">踩(0)</a></p>
                    </div>
                </div>
                <div class="review_list clearfix">
                    <div class="review_userHead fl">
                        <div class="review_user">
                            <img src="images/proDes/tuxing.png" alt="">
                            <p>61***42</p>
                            <p>土星会员</p>
                        </div>
                    </div>
                    <div class="review_cont">
                        <div class="review_t clearfix">
                            <span class="stars_text fl">[商品咨询]</span>
                        </div>
                        <p>价格还有商量的余地吗？</p>
                        <p><a href="" class="ding">顶(0)</a><a href="" class="cai">踩(0)</a></p>
                    </div>
                </div>
                <div class="hr_15"></div>
                <div class="page">
                    <a href="">上一页</a><a href="">1</a><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a><a
                            href="">6</a><a href="">7</a><a href="">8</a><span class="hl">...</span><a href="">200</a><a
                            href="">下一页</a><span class="morePage">共200页，到第<input type="text" class="pageNum"><span
                                class="page_text">页</span><input type="button" value="确定" class="page_btn"></span>
                </div>
                <div class="hr_25"></div>
            </div>
        </div>
    </div>
</div>
<div class="hr_25"></div>
<div class="footer">
    <p><a href="">本站简介</a><i>|</i><a href="">本站公告</a><i>|</i><a href="">招贤纳士</a><i>|</i><a href="">联系我们</a><i>|</i>客服热线:888-888-8888
    </p>
    <p>Copyright &copy; 2014-2017 本站版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号123456789123</p>
    <p class="web"><a href=""><img src="images/footer/foot_01.png" alt=""></a><a href=""><img
                    src="images/footer/foot_02.png" alt=""></a><a href=""><img src="images/footer/foot_03.png"
                                                                               alt=""></a><a
                href=""><img src="images/footer/foot_04.png" alt=""></a></p>
</div>
</body>
</html>