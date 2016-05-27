<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','head'); ?>
<!--正文部分-->
<div class="row">
        <div class="col-sm-9">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="m-b-md">
                                    <a href="?m=content&f=contribute&v=edit&id=<?php echo $id;?>" class="btn btn-white btn-xs pull-right">编辑项目</a>
                                    <h2><?php echo $data['title'];?></h2>
                                </div>
                                <dl class="dl-horizontal">
                                    <dt>状态：</dt>
                                    <dd><?php if($data['status']==0) { ?><span class="label label-default">已删除</span><?php } elseif ($data['status']==9) { ?><span class="label label-primary">审核通过</span><?php } else { ?><span class="label label-danger">待审核</span><?php } ?>
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <dl class="dl-horizontal">
                                    <dt>添加时间</dt>
                                    <dd>
                                        <small><?php echo date('Y-m-d H:i:s',$data['addtime']);?></small>
                                    </dd>
                                </dl>
                            </div>
                        </div>
<div class="row">
                            <div class="col-sm-12">
                                <dl class="dl-horizontal">
                                    <dt>更新时间</dt>
                                    <dd>
                                        <small><?php echo date('Y-m-d H:i:s',$data['updatetime']);?></small>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row m-t-sm">
                            <div class="col-sm-12">
                                <div class="panel blank-panel">


                                    <div class="panel-body">

                                        <div class="tab-content">
                                           <?php echo $data['content'];?>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>

</body>
</html>

