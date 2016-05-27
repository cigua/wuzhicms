<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","head",TPLID); ?>
<?php //print_r($data_r);?>
<link rel="stylesheet" href="<?php echo R;?>js/dialog/ui-dialog.css" />
<script src="<?php echo R;?>js/dialog/dialog-plus.js"></script>
<!--路径导航-->
<div style="background: #f3f3f3">
    <div class="container">
        <ol class="breadcrumb" style="margin-bottom: 0px">
            您现在的位置：
            <li><a href="<?php echo WEBURL;?>">首页</a><span> &gt;</span> </li>
            <?php echo catpos($cid);?>
            <li class="active">正文</li>
        </ol>
    </div>
</div>

<!-- ---------------------------------- -->
<!-- wzcms-tuangou-->
<!-- ---------------------------------- -->
<div class="wzcms-tuangou">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="wzcms-tuangou-list " style="margin-bottom: 0px;">
                    <span class="coupon"><?php echo $categorys[$cid]['name'];?></span>
                    <h3 class="tuan-list-title "><a href=""><?php echo $title;?></a></h3>
                    <p><?php echo $subtitle;?></p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6  col-xs-12">

                            <a href="#" class="thumbnail ">
                                <img src="<?php echo $thumb;?>" alt="...">
                            </a>


                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6  col-xs-12">
                            <div class="text-center pading_top_20px">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span> 团购倒计时
                                <?php if($data_r['endtime'] < SYS_TIME) { ?>
                                <h4>团购结束</h4>
                                <?php } else { ?>
                                <h4>
                                    <span id="t_d" class="color_qiyecheng">0</span><small>天</small>
                                    <span id="t_h" class="color_qiyecheng">0</span><small>时</small>
                                    <span id="t_m" class="color_qiyecheng">0</span><small>分</small>
                                    <span id="t_s" class="color_qiyecheng">0</span><small>秒</small>
                                </h4>
                                <?php } ?>
                                <div class="baozhengjin"><strong class="font_size32 float_left">￥<?php echo $price;?> <small class="font_size14">4.8折</small></strong>
                                    <button  type="button" id="order_button" onclick="goods_buy(<?php echo $id;?>);" class="btn <?php if($data_r['endtime']<SYS_TIME) { ?> btn-default <?php } else { ?> btn-primary <?php } ?> font_size16 float_right margin_top10" <?php if($data_r['endtime']<SYS_TIME) { ?> disabled="disabled" <?php } ?>>
                                    <strong> &nbsp;&nbsp;立即购买&nbsp;&nbsp; </strong>
                                    </button>
                                </div>
                                <h4><strong class="color_primary"><?php echo intval($apply_quantity+$cheat_num);?></strong>人已购买</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ---------------------------------- -->
<!-- wzcms-tuangou-content-->
<!-- ---------------------------------- -->
<div class="wzcms-tuangou-content">
    <div class="container">
        <div class="row">
            <div class="col-xs-9">
                <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                    <ul id="myTabs" class="nav nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">商品详情</a></li>
                        <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">参与流程</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content wzcms-tuangou-about">
                        <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                            <p><?php echo $content;?></p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                            123
                            <p class="help-block help-word"><strong class="color_qiyecheng font_size14"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> 保证金退还政策:</strong><br>
                                <?php echo $cylc;?>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="tg-content-box">
                    <h3 id="xltd" class=" color_qiyelv"> <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> 常见问题 </h3>
                    <hr>
                    <p><?php echo $FAQ;?></p>

                </div>


            </div>
            <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="tuangou-right-box">
                    <h3><a href=""  title="查看更多往期团购">往期团购</a></h3>
                    <?php $pretime = SYS_TIME;$where = " `endtime` < '$pretime'";?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {
	echo "<div class=\"visual_div\" pc_action=\"content\" data=\"\"><a href=\"javascript:void(0)\" class=\"visual_edit\">修改</a>";
}
if(!class_exists('content_template_parse')) {
	$content_template_parse = load_class("content_template_parse", "content");
}
if (method_exists($content_template_parse, 'listing')) {
	$rs = $content_template_parse->listing(array('cid'=>$cid,'where'=>$where,'order'=>'sort ASC,id DESC','start'=>'0','pagesize'=>'5','page'=>'0',));
	$pages = $content_template_parse->pages;$number = $content_template_parse->number;}?>
                        <?php $n=1;if(is_array($rs)) foreach($rs AS $r) { ?>
                            <a href="<?php echo $r['url'];?>"  class="thumbnail">
                                <img src="<?php echo imagecut($r['thumb'],213,133,4);?>"  alt="<?php echo $r['title'];?>">
                                <p class=" margin_top10 manhangyichu text-center"><?php echo $r['title'];?></p>
                            </a>
                        <?php $n++;}?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
        </div>


    </div>
</div>
<!--内容页底部4广告图-->
<?php if(defined('IN_ADMIN') && !defined('HTML')) {
	echo "<div class=\"visual_div\" pc_action=\"content\" data=\"\"><a href=\"javascript:void(0)\" class=\"visual_edit\">修改</a>";
}
if(!class_exists('content_template_parse')) {
	$content_template_parse = load_class("content_template_parse", "content");
}
if (method_exists($content_template_parse, 'block')) {
	$rs = $content_template_parse->block(array('type'=>'1','blockid'=>'45','start'=>'0','pagesize'=>'10','page'=>'0',));
	$pages = $content_template_parse->pages;$number = $content_template_parse->number;}?>
<div class="container">
<div class="row">               
<?php $n=1;if(is_array($rs)) foreach($rs AS $r) { ?>
<div class="col-xs-3"><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="273" height="92"></a></div>
<?php $n++;}?>
</div>
</div> 
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo R;?>t3/js/jquery.min.js"></script>
<script src="<?php echo R;?>t3/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo R;?>t3/js/ie10-viewport-bug-workaround.js"></script>

<script src="<?php echo R;?>t3/js/my.js"></script>
<!--缩略图幻灯片 stard-->
<script src="<?php echo R;?>t3/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    window.setInterval(function(){GetRTime('<?php echo $endtime;?>','t_');}, 0);
    function goods_buy(id,csid) {
        if(_uid==null) {
            $.get("/index.php?m=member&f=checklogin&v=check", { time: Math.random() },
                    function(data){
                        if(data=='0') {
                            login_form('/index.php?m=member&v=public_mini_login','login','会员登录',640,350);
                            return false;
                        } else {
                            goto_buy(id,csid);
                        }
                    });
        } else {
            goto_buy(id,csid);
        }
    }
    function goto_buy() {
        gotourl('<?php echo WEBURL;?>index.php?m=order&f=tuangou&v=checkinfo&cid=<?php echo $cid;?>&id=<?php echo $id;?>&csid=<?php echo $csid;?>');
    }

    $(function() {
        $('#thumbs').carouFredSel({
            synchronise: ['#images', false, true],
            auto: false,
            width: 520,
            items: {
                visible: 5,
                start: -1
            },
            scroll: {
                onBefore: function( data ) {
                    data.items.old.eq(0).removeClass('selected');
                    data.items.visible.eq(1).addClass('selected');
                }
            },
            prev: '#prev',
            next: '#next'
        });

        $('#images').carouFredSel({
            auto: false,
            items: 1,
            scroll: {
                fx: 'fade'
            }
        });

        $('#thumbs img').click(function() {
            $('#thumbs').trigger( 'slideTo', [this, -1] );
        });
        $('#thumbs img:eq(1)').addClass('selected');
    });
</script>
<!--缩略图幻灯片 end-->
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","foot",TPLID); ?>