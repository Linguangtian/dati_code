<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="help-block" style="color: red">客户到店消费可以凭借核销卡后4位数进行筛选，如客户当时使用，需要将状态“未使用”改成“使用</div>
<form action="" method="get" class="form-horizontal" role="form">
    <div class="panel panel-info">
        <div class="panel-heading">筛选</div>
        <div class="panel-body">
            <input type="hidden" name="c" value="site" />
            <input type="hidden" name="a" value="entry" />
            <input type="hidden" name="m" value="hc_dati" />
            <input type="hidden" name="do" value="hexiao" />
            <div class="form-group">
                <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">关键字</label>
                <div class="col-xs-12 col-sm-6 col-lg-6">
                    <input class="form-control" name="keyword" type="text" value="<?php  echo $_GPC['keyword'];?>" placeholder="卡密">
                </div>
                <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label"></label>
                <div class=" col-xs-12 col-sm-2 col-lg-2">
                    <button class="btn btn-default" ><i class="fa fa-search"></i> 搜索</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="panel panel-default">
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
                        <th>奖品名称</th>
                        <th>状态</th>
                        <th>奖品缩略图</th>
                        <th>收货人</th>
                        <th>使用状态</th>
                        <th><?php  echo $danhao;?></th>
                        <th><?php  echo $gongsi;?></th>
                        <th style="text-align:right;">操作</th>
                    </tr>
                    </thead>
                    <tbody id="level-list">
                    <?php  if(is_array($lingjiang)) { foreach($lingjiang as $item) { ?>
                     <tr>
                         <td><div class="type-parent"><?php  echo $item['id'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['goods_name'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['stact'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><img src="<?php  echo tomedia($item['goods_img']);?>" width="60" height="40" /></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['userName'];?></div></td>
                         <td data-id='<?php  echo $item["id"];?>'><?php  if(empty($item['fafang'])) { ?><label class="label label-default">未使用</label><?php  } else { ?><label class="label label-success">已使用</label><?php  } ?></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['kuaididan'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['kuaidigongsi'];?></div></td>
                         <td style="text-align:right;">
                             <a class="btn btn-default btn-sm" href="<?php  echo url('site/entry/Edithexiao',array('id'=>$item['id'],'m'=>'hc_dati'));?>" title="编辑">核销</a>&nbsp
                             <a class="btn btn-default btn-sm" href="<?php  echo url('site/entry/Deletehexiao',array('id'=>$item['id'],'m'=>'hc_dati'));?>" onclick="return confirm('确认删除此奖品吗？');return false;" title="删除">删</a>
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
<script type="text/javascript">
    $(function(){
        $('.url_btn').click(function(){
            var str=$(this).children('.urlvalue').text();
            $('.url_div').text('跳转地址：'+str);
            $('.url_div').removeClass('hide');
        })
    })
</script>
<script>
    $('table label').click(function(){
        var label = $(this);
        $.ajax({
            url:"<?php  echo $this->createWebUrl('hexiao_fafang')?>",
            type:'post',
            data:{id:label.parent().attr('data-id')},
            success:function(status){
                if(status == '1'){
                    if(label.hasClass('label-success')){
                        label.removeClass('label-success').addClass('label-default');
                        label.text('未使用');
                    }else{
                        label.removeClass('label-default').addClass('label-success');
                        label.text('已使用');
                    }
                }
            }
        });
    });
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>