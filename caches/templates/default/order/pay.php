<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","head",TPLID); ?>

<div class="container">
    <div class="dingdan-box ">
        <div class="row">
            <h2 class=" text-center ">订单已提交，请尽快付款！</h2>
            <hr>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right"><div class="thumbnail" style="border: none"><img src="<?php echo R;?>images/icon/zhifu.jpg"></div></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h3>订单已提交，请尽快付款！</h3>

                <p style="line-height: 2">订单号：<span class=""><?php echo $order_no;?></span>&nbsp;&nbsp;<br>
                    应付定金：<span class="color_qiyecheng font_weight font_size24">￥<?php echo sprintf('%.2f',$total_price);?></span><br>
                    还差一步，请尽快付款（请在24小时之内付清款项，否则订单自动被取消）</p>
                <hr>
                <div style="background-color: #F5F5F5;padding: 5px;font-weight: 900;">在线支付：</div><br><img src="<?php echo R;?>images/icon/alipay.jpg"><br><br>
                <?php echo $pay_link;?>
                <?php if($pay_r2) { ?>
                <br>
                <div style="background-color: #F5F5F5;padding: 5px;font-weight: 900;">线下支付：</div><br>
                开户行：<?php echo $setting['bank_name'];?><br>
                账号：<?php echo $setting['bank_account'];?><br>
                说明：<?php echo $setting['note'];?><br>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","foot",TPLID); ?>