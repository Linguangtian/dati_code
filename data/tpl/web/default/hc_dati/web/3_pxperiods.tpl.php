<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs" id="snav">
    <li><a href="<?php  echo url('site/entry/paihangbang',array('m'=>'hc_dati'));?>">基础设置</a></li>
    <li><a href="<?php  echo url('site/entry/Pxjiangpin',array('m'=>'hc_dati'));?>">奖品管理</a></li>
    <li class="active"><a href="<?php  echo url('site/entry/Pxfafang',array('m'=>'hc_dati'));?>">排行榜期数</a></li>
    <li><a href="<?php  echo url('site/entry/Pxhexiao',array('m'=>'hc_dati'));?>">排行榜核销</a></li>
</ul>
<div class="panel-body">
    <div class="col-xs-12 col-sm-8 col-lg-2">
        <a onclick="closeWindow('./index.php?c=site&amp;a=entry&amp;do=jiesuan&amp;m=hc_dati')" class="btn btn-success btn-sm">结算</a>
    </div>
    <div class='help-block'>点击“结算”后，下方的期数会直接生成当天的日期。并从这个期数的“中奖详情”看到上次结算到这次结算之间的用户领取记录。并给用户发货。</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            排行榜期数
        </h3>
    </div>
    <div class="panel-body">
       <form action="" method="post" class="form-horizontal form">
       <div class="alert alert-info url_div hide" role="alert">
       </div>
            <input type="hidden" name="storeid" value="">
            <div class="table-responsive panel-body">
                <table class="table table-hover">
                    <thead class="navbar-inner">
                    <tr>
                        <th>id</th>
                        <th>期数名</th>
                        <th style="text-align:right;">操作</th>
                    </tr>
                    </thead>
                    <tbody id="level-list">
                    <?php  if(is_array($pxperiods)) { foreach($pxperiods as $item) { ?>
                     <tr>
                         <td><div class="type-parent"><?php  echo $item['id'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['periods'];?></div></td>
                         <td style="text-align:right;">
                             <a class="btn btn-default btn-sm" href="<?php  echo url('site/entry/pxxiangqing',array('id'=>$item['id'],'m'=>'hc_dati'));?>" title="中奖详情">中奖详情</a>&nbsp
                         </td>
                    </tr>
                    <?php  } } ?>     
                    </tbody>
                </table>
                 <?php  echo $pager;?>   
            </div>
        </form>
    </div>
</div>
<style type="text/css">
    .hide{display: none}
</style>
<script>

    function closeWindow(url)
    {
        var iWidth=300;//弹出窗口的宽度;
        var iHeight=150;//弹出窗口的高度;
        var iTop = (window.screen.availHeight - 30 - iHeight) / 2; //获得窗口的垂直位置
        var iLeft = (window.screen.availWidth - 10 - iWidth) / 2; //获得窗口的水平位置
        myWindow = window.open(url,"myWindow",'height=' + iHeight + ',,innerHeight=' + iHeight + ',width=' + iWidth + ',innerWidth=' + iWidth + ',top=' + iTop + ',left=' + iLeft + ',status=no,toolbar=no,menubar=no,location=no,resizable=no,scrollbars=0,titlebar=no');
        // myWindow.document.write("运行中，请稍后...");
        //window.opener=null;
        window.setTimeout(function(){
            // myWindow.close();
            // location.href="<?php  echo $this->createWebUrl('jichu')?>"
        }, 500);

    }
</script>
<script type="text/javascript">
    $(function(){
        $('.url_btn').click(function(){
            var str=$(this).children('.urlvalue').text();
            $('.url_div').text('跳转地址：'+str);
            $('.url_div').removeClass('hide');
        })
    })
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>