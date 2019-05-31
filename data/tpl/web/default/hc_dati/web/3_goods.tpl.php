<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            购买挑战次数管理 <a href="<?php  echo url('site/entry/Addgoods',array('m'=>'hc_dati'));?>" style="margin-left: 10px; color: red;">添加次数</a>
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
                        <th>排序</th>
                        <th>次数名称</th>
                        <th>状态</th>
                        <th>价格</th>
                        <th>获得次数</th>
                        <th>背景图</th>
                        <th style="text-align:right;">操作</th>
                    </tr>
                    </thead>
                    <tbody id="level-list">
                    <?php  if(is_array($goods)) { foreach($goods as $item) { ?>
                     <tr>
                         <td><div class="type-parent"><?php  echo $item['goods_id'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['sort'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['name'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['status'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['xianjia'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['cishu'];?></div></td>
                         <td><div class="type-parent"><img src="<?php  echo tomedia($item['img']);?>" width="60" height="40" /></div></td>
                         <td style="text-align:right;">
                             <a class="btn btn-default btn-sm" href="<?php  echo url('site/entry/Editgoods',array('goods_id'=>$item['goods_id'],'m'=>'hc_dati'));?>" title="编辑">改</a>&nbsp
                             <a class="btn btn-default btn-sm" href="<?php  echo url('site/entry/Deletegoods',array('goods_id'=>$item['goods_id'],'m'=>'hc_dati'));?>" onclick="return confirm('确认删除此商品吗？');return false;" title="删除">删</a>
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

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>