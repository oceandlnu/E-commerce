<?php
require_once 'include.php';
$cates = getAllCate();
if (empty($cates)) {
    alertMes("不好意思，网站维护中！", "https://oceandlnu.github.io");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="styles/reset.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <!--[if IE 6]>
    <script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript" src="js/ie6Fixpng.js"></script>
    <![endif]-->
</head>
<body>
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
                <div class="shopClass_show">
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
<div class="banner comWidth clearfix">
    <div class="banner_bar banner_big">
        <ul class="imgBox">
            <li><a href=""><img src="images/banner/banner_01.png" alt=""></a></li>
            <li><a href=""><img src="images/banner/banner_02.png" alt=""></a></li>
        </ul>
        <div class="imgNum">
            <a href="" class="active"></a><a href=""></a>
        </div>
    </div>
</div>
<?php foreach ($cates as $cate): ?>
    <div class="shopTit comWidth">
        <span class="icon"></span>
        <h3><?php echo $cate['cName']; ?></h3>
        <a href="#" class="more">更多&gt;&gt;</a>
    </div>
    <div class="shopList comWidth clearfix">
        <div class="leftArea">
            <div class="banner_bar banner_sm">
                <ul class="imgBox">
                    <li><a href=""><img src="images/banner/banner_sm_02.png" alt=""></a></li>
                    <li><a href=""><img src="images/banner/banner_sm_01.png" alt=""></a></li>
                </ul>
                <div class="imgNum">
                    <a href="" class="active"></a><a href=""></a>
                </div>
            </div>
        </div>
        <div class="rightArea">
            <div class="shopList_top clearfix">
                <?php
                $pros = getProBycId($cate['id']);
                if (!empty($pros)) {
                    foreach ($pros as $pro) {
                        $proImg = getProImgById($pro['id']);
                        ?>
                        <div class="shop_item">
                            <div class="shop_img">
                                <a href="proDetails.php?id=<?php echo $pro['id']; ?>" target="_blank"><img width="187"
                                                                                                           height="200"
                                                                                                           src="images/uploads/<?php echo $proImg['albumPath']; ?>"
                                                                                                           alt=""></a>
                            </div>
                            <h4><?php echo $pro['pName']; ?></h4>
                            <p><?php echo $pro['iPrice']; ?>元</p>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="shopList_sm clearfix">
                <?php
                $prosSmall = getSmallProBycId($cate['id']);
                if (!empty($prosSmall)) {
                    foreach ($prosSmall as $proSmall) {
                        $proSmallImg = getProImgById($proSmall['id']);
                        ?>
                        <div class="shopItem_sm">
                            <div class="shopItem_smImg">
                                <a href="proDetails.php?id=<?php echo $proSmall['id']; ?>" target="_blank"><img
                                            width="95" height="95"
                                            src="images/uploads/<?php echo $proSmallImg['albumPath']; ?>" alt=""></a>
                            </div>
                            <div class="shopItem_text">
                                <h4><?php echo $proSmall['pName']; ?></h4>
                                <p><?php echo $proSmall['iPrice']; ?>元</p>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>
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