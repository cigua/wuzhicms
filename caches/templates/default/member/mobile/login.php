<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <link rel="icon" href="../../favicon.ico">
    <title>登录</title>
<!--cs-->
<link type="text/css" rel="stylesheet" href="<?php echo R;?>member/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="<?php echo R;?>css/login_style.css">
<link href="<?php echo R;?>css/validform.css" rel="stylesheet">
<!--js-->
<script type="text/javascript" src="<?php echo R;?>member/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo R;?>member/js/bootstrap.js"></script>
<script src="<?php echo R;?>js/validform.min.js"></script>
    <style>
        .login_othor{ text-align: center; padding: 16px 0px;}
        .login_othor li{ list-style: none;display: inline-block;}
        .login_othor li+li{margin-left: 8px;}
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.wuzhicms.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="<?php echo R;?>js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="header-mobile" >
    <a href="javascript:history.back();">
        <span></span>
    </a>
    <h2>会员登录</h2>
</div>

<div class="login--page">
    <div class="container login" >
        <div class="verticalcenter">
            <div class="row">

                <form action="index.php?m=member&f=index&v=login" method="post" class="form-horizontal">
                    <div class="form-group">
                        <!--<label  class="control-label col-xs-4" >&lt;!&ndash;用户名&ndash;&gt;</label>-->
                        <div class="col-xs-12">
                            <input  type="text" class="form-control" id="username" placeholder="用户名/Email/手机号码"
                                   name="username" datatype="/^[a-z0-9@\.\u4E00-\u9FA5\uf900-\ufa2d\-]{3,20}$/i"
                                   errormsg="用户名为3-20位数字、字母、汉字和-组成" sucmsg="输入正确" autoComplete="off">
                            <span  class="Validform_checktip"><!--用户名应该为2-20位之间--></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <!--<label class="control-label col-xs-4">&lt;!&ndash;密码&ndash;&gt;</label>-->
                        <div class="col-xs-12">
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="请输入密码" datatype="*" errormsg="请输入密码" sucmsg="输入正确"/>
                            <span class="Validform_checktip"><!--请输入密码--></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <!--<label class="control-label col-xs-4">&lt;!&ndash;验证码&ndash;&gt;</label>-->
                        <div class="col-xs-12">
                            <input  type="text" name="checkcode" class="form-control" id="Verificationcode"
                                   placeholder="请输入验证码" datatype="*4-4" errormsg="请输入验证码" sucmsg="输入正确"
                                   onfocus="if($('#code_img').attr('src') == '<?php echo R;?>images/logincode.gif')$('#code_img').attr('src', '<?php echo WEBURL;?>api/identifying_code.php?w=112&h=40&rd='+Math.random());" ajaxurl="api/identifying_code_check.php"/>
                            <img src="<?php echo R;?>images/logincode.gif" id="code_img" alt="点击刷新" onclick="$(this).attr('src', '<?php echo WEBURL;?>api/identifying_code.php?w=112&h=40&rd='+Math.random());" style=" margin-top:2px; position: absolute; top: 1px; right: 16px; max-height: 35px;">
                            <span class="Validform_checktip"><!--请输入验证码--></span>
                        </div>
                    </div>

                    <div class="form-group" style="padding-left: 5px;">
                        <!--<label class="control-label col-xs-4"></label>-->
                        <input type="checkbox" class="checkbox " name="savecookie" value="1" checked/> 下次自动登录 &nbsp;&nbsp;<a href="<?php echo WEBURL;?>index.php?m=member&v=public_find_password_email" style="color: #999">忘记密码？</a>
                        <div style="float: right;padding-right: 20px;"><a href="index.php?m=member&v=register" style="color: #999"> 注册 </a></div>
                    </div>

                    <div class="form-group">
                        <!--<label class="control-label col-xs-4"> </label>-->
                        <div class="col-xs-12">
                            <input type="hidden" name="forward" value="<?php echo $forward;?>"/>
                            <input  type="submit" name="submit" class="btn btn-primary btn-lg btn-block " value="登录"/>
                        </div>
                    </div>

                </form>
<div class="form-group">
                        <!--<label class="control-label col-xs-4"> </label>-->
                        <div class="col-xs-12 login_othor">
                            <span style="letter-spacing:2px; color: #999999; ">使用第三方账号登录</span>
                            <br><br>
                    <?php if($this->setting['qq_appid']) { ?><li><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=auth&type=qq"><img src="<?php echo R;?>images/qqlogin.png" alt="使用QQ帐号登录" title="使用QQ帐号登录" width="40px"></a></li><?php } ?>
                    <?php if(isset($this->setting['sina_key'])) { ?><li><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=auth&type=sina"><img src="<?php echo R;?>images/weibologin.png" alt="使用微博帐号登录" title="使用微博帐号登录" width="40px"></a></li><?php } ?>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div><!--login--page-->


<div class="login--bottom">
    <div class="container">
        <div class="col-xs-12" style="text-align: center">版权所有 @ wuzhicms
		</div>
    </div>
</div>



<script type="text/javascript">
    $(function () {
        $(".form-horizontal").Validform({
            tiptype: function (msg, o, cssctl) {
                var objtip = o.obj.siblings("span");
                cssctl(objtip, o.type);
                objtip.text(msg);
            }
        });
    });
</script>

</body>
</html>
