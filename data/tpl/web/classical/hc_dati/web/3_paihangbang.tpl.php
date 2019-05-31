<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<script src="/addons/hc_dati/template/web/img/color.js"></script>
<style>

    .set_div{

        display: none;

    }

    .help-block{

        color: red !important;

    }

    .xuanze img,.xuanzeone img{
        display: inline-block;
        max-width: 100%;
        height:100px;
        padding: 4px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }
    .xuanze .quia,.xuanzeone .quia{
        border:2px solid red;
    }

</style>
<ul class="nav nav-tabs" id="snav">
    <li class="active"><a href="<?php  echo url('site/entry/paihangbang',array('m'=>'hc_dati'));?>">基础设置</a></li>
    <li><a href="<?php  echo url('site/entry/Pxjiangpin',array('m'=>'hc_dati'));?>">奖品管理</a></li>
    <li><a href="<?php  echo url('site/entry/Pxfafang',array('m'=>'hc_dati'));?>">排行榜期数</a></li>
    <li><a href="<?php  echo url('site/entry/Pxhexiao',array('m'=>'hc_dati'));?>">排行榜核销</a></li>
</ul>

<form action="" method="post" class="form-horizontal form">

    <div class="panel panel-default set_div" style="display: block;">
        <div class="panel-heading">基础设置</div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">排行榜规则一</label>
            <div class="col-sm-9 col-xs-12">
                <input class='form-control' placeholder="" name='pxguize1' value="<?php  echo $setup['pxguize1'];?>">
                <div class="help-block"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">排行榜规则二</label>
            <div class="col-sm-9 col-xs-12">
                <input class='form-control' placeholder="" name='pxguize2' value="<?php  echo $setup['pxguize2'];?>">
                <div class="help-block"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">排行榜规则三</label>
            <div class="col-sm-9 col-xs-12">
                <input class='form-control' placeholder="" name='pxguize3' value="<?php  echo $setup['pxguize3'];?>">
                <div class="help-block"></div>
            </div>
        </div>
		<!--
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">排行榜规则四</label>
            <div class="col-sm-9 col-xs-12">
                <input class='form-control' placeholder="" name='pxguize4' value="<?php  echo $setup['pxguize4'];?>">
                <div class="help-block"></div>
            </div>
        </div>-->
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">排行榜规则四</label>
            <div class="col-sm-9 col-xs-12">
                <input class='form-control' placeholder="" name='pxguize4' value="<?php  echo $setup['pxguize4'];?>">
                <div class="help-block"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">截止时间</label>
            <div class="col-sm-9">
                <?php  echo _tpl_form_field_date('pxend_time', $setup['pxend_time'], $withtime = true) ?>
                <div class='help-block'>当前期数截止时间</div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">每个用户弹框显示次数</label>
            <div class="col-sm-9 col-xs-12">
                <input class='form-control' placeholder="" name='tankuang_cishu' value="<?php  echo $setup['tankuang_cishu'];?>">
                <div class="help-block"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">排行榜参与人数背景图</label>
            <div class="col-sm-9">
                <?php  echo tpl_form_field_image('pxnum_img',$setup['pxnum_img'])?>
                <div class='help-block'>排行榜参与人数背景图；220*126像素</div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">排行榜倒计时背景图</label>
            <div class="col-sm-9">
                <?php  echo tpl_form_field_image('pxdaojishi_img',$setup['pxdaojishi_img'])?>
                <div class='help-block'>排行榜倒计时背景图；220*126像素</div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">排行榜规则背景图</label>
            <div class="col-sm-9">
                <?php  echo tpl_form_field_image('pxguize_img',$setup['pxguize_img'])?>
                <div class='help-block'>排行榜规则背景图；220*126像素</div>
            </div>
        </div>
    </div>


    <input name="submit" type="submit" id="submit_info" value="提交" class="btn btn-primary span3" />

    <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />

</form>



</body>
</html>