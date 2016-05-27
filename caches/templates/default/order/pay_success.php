<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","list_head",TPLID); ?>

<!-- ---------------------------------- -->
<!-- nav -->
<!-- ---------------------------------- -->
<div class="car-qu">
    <nav class="navbar navbar-default nav-erji">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand margin_right30" href="<?php echo WEBURL;?>">
                    <img alt="Brand" src="<?php echo R;?>html-page/image/car_logo.png">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li ><a href="#">首页</a></li>
                    <li class="active"><a href="#">团购</a></li>
                    <li><a href="#">特价车</a></li>
                    <li><a href="#">热卖车型</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right margin_top10 select-search">
                    <form class="form-inline" role="form" method="get" action="/index.php">
                        <input type="hidden" name="m" value="content">
                        <input type="hidden" name="f" value="search">
                        <input type="hidden" name="modelid" id="modelid" value="1001">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span id="option_modelid">热卖车型</span> <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="javascript:set_option('modelid',1000,'团购');">团购</a></li>
                                    <li><a href="javascript:set_option('modelid',1001,'特价车');">热卖车型</a></li>
                                </ul>
                            </div>
                            <input type="text" name="keywords" class="form-control" placeholder="请输入关键词">
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">
                            <span class="glyphicon glyphicon-search  font_weight"></span>
                        </button>
                        </span>
                        </div>
                    </form>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</div>


<!--路径导航-->
<div class="lujing-navgg">
    <div class="container">
        <ol class="breadcrumb">
            您现在的位置：
            <li><a href="#">首页</a></li>
            <li><a href="#">买车帮</a></li>
            <li>团购</li>
            <li class="active">报名</li>
        </ol>
    </div>
</div>
<!-- ---------------------------------- -->
<!-- car-tuangou-->
<!-- ---------------------------------- -->
<div class="container">
    <div class="dingdan-box ">
        <div class="row">
            <h2 class=" text-center ">预订成功！</h2>
            <hr>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-right"><div class="thumbnail" style="border: none"><img src="<?php echo R;?>html-page/image/zhifu.jpg"></div></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h3>订单号：<span class=""><?php echo $order_no;?></span></h3>

                <p style="line-height: 2">
                    您是旅行宝会员：<span class="color_qiyecheng font_weight font_size24">正在享受本期免费服务！</span><br>
                    </p>
                <hr>
                <a href="<?php echo WEBURL;?>index.php?m=pay&f=payment&v=listing&keytype=6">查看订单详情</a>
            </div>
        </div>
    </div>
</div>


<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","foot",TPLID); ?>


