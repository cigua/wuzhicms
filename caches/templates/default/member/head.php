<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><!DOCTYPE html>
<?php $set_iframe = isset($GLOBALS['set_iframe']) ? intval($GLOBALS['set_iframe']) : 0;?>
<?php $memberinfo = $this->memberinfo;?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($seo_title)) { ?><?php echo $seo_title;?><?php } else { ?>会员中心<?php } ?> -  Powered by wuzhicms</title>
    <meta name="description" content="五指CMS网站内容管理系统,www.wuzhicms.com">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="<?php echo R;?>member/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo R;?>member/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo R;?>member/css/animate.css" rel="stylesheet">
    <link href="<?php echo R;?>member/css/style.css?v=4.0.0" rel="stylesheet">
    <?php if($set_iframe==0) { ?>
    <link href="<?php echo R;?>member/css/ie8.css" rel="stylesheet">
    <?php } ?>
    <!-- 全局js -->
    <script type="text/javascript">
        var cookie_pre="<?php echo COOKIE_PRE;?>";var cookie_domain = '<?php echo COOKIE_DOMAIN;?>';var cookie_path = '<?php echo COOKIE_PATH;?>';
    </script>

    <script src="//cdn.wuzhicms.com/jquery/1.12.1/jquery.min.js?v=2.1.4"></script>
    <script src="<?php echo R;?>js/base.js"></script>
    <link rel="stylesheet" href="<?php echo R;?>js/dialog/ui-dialog.css" />
    <script src="<?php echo R;?>js/dialog/dialog-plus.js"></script>

    <script src="<?php echo R;?>member/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="<?php echo R;?>member/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo R;?>member/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo R;?>member/js/plugins/layer/layer.min.js"></script>

    <!--[if lt IE 9]>
    <script src="//cdn.wuzhicms.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="<?php echo R;?>member/js/respond.min.js"></script>
    <![endif]-->
</head>