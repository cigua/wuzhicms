<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','head'); ?>
<!--正文部分-->
<style type="text/css">
    label{font-weight: normal;
    }
    .text-blod{font-weight: bold;}
    #Validform_msg .Validform_title {
        background-color: #4585E6;
    }
    #Validform_msg .Validform_info {
        border: 1px solid #4585E6;
    }
</style>
<link href="<?php echo R;?>css/validform.css" rel="stylesheet" />
<script src="<?php echo R;?>js/validform.min.js"></script>
<script src="<?php echo R;?>js/base.js"></script>
<script type="text/javascript" src="<?php echo R;?>js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo R;?>js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo R;?>js/ueditor/ueditor.all.min.js"></script>

<link href="<?php echo R;?>js/jquery-ui/jquery-ui.css" rel="stylesheet">
<script src="<?php echo R;?>js/jquery-ui-1.10.1.custom.min.js"></script>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="memberright">
<ul class="nav nav-tabs">
                        <li class="active"><a href="#tabs1" id="1tab" role="tab" data-toggle="tab" aria-controls="tabs1" aria-expanded="true">投稿</a></li>
                        </li>
                        <li class=""><a href="index.php?m=content&f=contribute&v=listing">我的投稿</a>
                        </li>
                    </ul>

                        <div class="memberbordertop">
                            <form name="myform" class="form-horizontal" action="" method="post" id="myform">
                                        <table class="table-dashed table-striped table-advance">
                                            <tr>
                                                <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right text-blod"><font color="red">*</font> 标题：</label><div class="col-sm-10 text-left">
                                                    <input type="text" style="color:#" name="form[title]" id="title" maxlength="80" value="" class="form-control" datatype="*2-80" nullmsg="请输入标题" errormsg="标题至少2个字符,最多80个字符！">                                       </div></div></td>
                                            </tr>
<tr>
                                                <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right text-blod"><font color="red">*</font> 正文：</label>
                                                    <div class="col-sm-10 text-left">
<textarea class="form-control" id="content" name="form[content]" rows="10" datatype="*50-10000" nullmsg="请输入正文" errormsg="正文至少50个字符,最多10000个字符！"></textarea>
 <?php echo WUZHI_form::editor('form[content]','content',$r['content'],'','ckeditor',1);?>

                                                </div></div></td>
                                            </tr>


                                            <tr>
                                                <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right"> </label><div class="col-sm-3 text-left"><input type="submit" name="submit" id="submit" value="提交" class="btn btn-primary"></div></div></td>
                                            </tr>
                                        </table>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>
<script>
    $(document).ready(function () {
        $('.form-groupinfo').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
    $("#submit").click(function(){
        t=setTimeout("hide_formtips()",3000);
    });
    function hide_formtips() {
        $.Hidemsg();
        clearInterval(t);
    }
    $(function(){
        $(".form-horizontal").Validform({
            tiptype:1
        });
    })
    function remove_obj(obj) {
        $(obj).parent().remove();
    }
    function add_newfile(divid) {
        var str = $('#text_'+divid).val();
        str = '<li>'+str+'</li>';
        $('#'+divid+"_ul").append(str);
    }
</script>
</body>
</html>

