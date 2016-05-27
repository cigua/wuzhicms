<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--让部分国产浏览器默认采用高速模式渲染页面,而非兼容模式-->
    <title>登录</title>
    <!--cs-->
    <link type="text/css" rel="stylesheet" href="<?php echo R;?>member/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo R;?>css/login_style.css">
    <link href="<?php echo R;?>css/validform.css" rel="stylesheet">
    <!--js-->
    <script type="text/javascript">
        if(window!=window.top){
            window.top.location.href=window.location.href;
        }
    </script>
    <script type="text/javascript" src="<?php echo R;?>js/jquery-1.12.1.js"></script>
    <script type="text/javascript" src="<?php echo R;?>member/js/bootstrap.js"></script>
    <script src="<?php echo R;?>js/validform.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdn.wuzhicms.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.wuzhicms.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="login--page">
    <div class="container login">
        <div class="verticalcenter">
            <div class="row">
                <div class="col-xs-3 disanfang_ico">
                    <span style="letter-spacing:2px; color: #999999">使用第三方账号登录</span>
                    <hr>
                    <?php if($this->setting['qq_appid']) { ?><li><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=auth&type=qq"><img src="<?php echo R;?>images/qqlogin.png" alt="使用QQ帐号登录" title="使用QQ帐号登录" width="40px"></a></li><?php } ?>
                    <?php if(isset($this->setting['sina_key'])) { ?><li><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=auth&type=sina"><img src="<?php echo R;?>images/weibologin.png" alt="使用微博帐号登录" title="使用微博帐号登录" width="40px"></a></li><?php } ?>
                    <li><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=auth&type=weixin"><img src="<?php echo R;?>images/weichatlogin.png" alt="使用微信帐号登录" title="使用微信帐号登录" width="40px"></a></li>
                    <hr>
                    <span style="color: #999999">还不是会员？<a style="color: #ba0600" href="<?php echo WEBURL;?>index.php?m=member&v=register">立即注册</a></span>
                    <div class="login-logo thumbnail" style="border-radius: 50%;" ><img  alt="Brand" src="<?php echo R;?>images/login-logo.png" class="img-circle" ></div>
                </div>

                <div class="col-xs-8">
                <h4 style="padding-left: 40px; color: #666; padding-top: 50px; padding-bottom: 10px;">会员登录</h4>
                    <div class="row">
                        <form action="index.php?m=member&f=index&v=login" method="post" class="form-horizontal" id="loginform">
                            <div class="form-group">
                                <label  class="control-label col-xs-1" ><!--用户名--></label>
                                <div class="col-xs-11 form-inline">
                                    <input style="width: 60%" type="text" class="form-control" id="username" placeholder="用户名/Email/手机号码"
                                           name="username" datatype="/^[a-z0-9@\.\u4E00-\u9FA5\uf900-\ufa2d\-]{3,40}$/i"
                                           errormsg="请输入正确的用户名" sucmsg="输入正确" autoComplete="off">
                                    <span  class="Validform_checktip"><!--用户名应该为2-20位之间--></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-1"><!--密码--></label>
                                <div class="col-xs-11 form-inline ">
                                    <input style="width: 60%" type="password" class="form-control" id="password" name="password"
                                           placeholder="请输入密码" datatype="*" errormsg="请输入密码" sucmsg="输入正确"/>
                                    <span class="Validform_checktip"><!--请输入密码--></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-1"><!--验证码--></label>
                                <div class="col-xs-11 form-inline" style="position: relative;">
                                    <input  style="width: 60%" type="text" name="checkcode" class="form-control" id="checkcode" placeholder="请输入验证码" datatype="*4-4"	errormsg="请输入验证码" sucmsg="输入正确" onfocus="if($('#code_img').attr('src') == '<?php echo R;?>images/logincode.gif')$('#code_img').attr('src', '<?php echo WEBURL;?>api/identifying_code.php?w=112&h=40&rd='+Math.random());" ajaxurl="api/identifying_code_check.php" onkeyup="form_keyup()" />
                                     <img src="<?php echo R;?>images/logincode.gif" id="code_img" alt="点击刷新" onclick="$(this).attr('src', '<?php echo WEBURL;?>api/identifying_code.php?w=112&h=40&rd='+Math.random());" style="margin-top:2px; position: absolute; top: 0;right: 41%; max-height: 35px;">
                                    <span class="Validform_checktip"><!--请输入验证码--></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-1"></label>
                                <input type="checkbox" class="checkbox " name="savecookie" value="1" checked style="margin-left: 16px;"/> 下次自动登录 <a href="<?php echo WEBURL;?>index.php?m=member&v=public_find_password_mobile">忘记密码？</a>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-1"> </label>
                                <div class="col-xs-11">
                                    <input type="hidden" name="forward" value="<?php echo $forward;?>"/>
                                    <input style="width: 60%"   type="submit" name="submit" class="btn btn-primary btn-lg " value="登录"/>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div><!--login--page-->


<!--footer-->
<nav class="navbar navbar-default navbar-fixed-bottom login--bottom">
    <div class="container">
        <div class="col-xs-12" style="text-align: center">Copyright©2005-2015 版权所有 五指CMS 京ICP备14036160号-1 Powered by 五指CMS</div>
    </div>
</nav>


<script type="text/javascript">
    var wzform = '';
    function form_keyup() {
        var len_text = $("#checkcode").val();
        if(len_text.length==4) {
            wzform.resetStatus();
            $("#loginform").submit();
            $("#checkcode").focus();
        }
    }
    $(function(){
        wzform = $(".form-horizontal").Validform({
            tiptype:3
        });

    })
</script>

</body>
</html>
