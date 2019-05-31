<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<style>

    .xiusaj{
        color: #ca4242;
        padding: 10px 30px;
        font-size: 20px;
    }
</style>
<div class="xiusaj">从题目分类管理里面添加的自定义题库会显示在这个地方，进行修改和删除</div>
<form action="" method="get" class="form-horizontal" role="form">
    <div class="panel panel-info">
        <div class="panel-heading">筛选</div>
        <div class="panel-body">
            <input type="hidden" name="c" value="site" />
            <input type="hidden" name="a" value="entry" />
            <input type="hidden" name="m" value="hc_dati" />
            <input type="hidden" name="do" value="tiku" />
            <div class="form-group">
                <div class="col-xs-12 col-sm-6 col-lg-6">
                    <input class="form-control" name="keyword" type="text" value="<?php  echo $_GPC['keyword'];?>" placeholder="请输入题目">
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
                        <th>难度</th>
                        <th>题目</th>
                        <th>A选项</th>
                        <th>B选项</th>
                        <th>C选项</th>
                        <th>D选项</th>
                        <th>分类</th>
                        <th>答案</th>
                        <th style="text-align:right;">操作</th>
                    </tr>
                    </thead>
                    <tbody id="level-list">
                    <?php  if(is_array($tiku)) { foreach($tiku as $item) { ?>
                     <tr>
                         <td><div class="type-parent"><?php  echo $item['id'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['nandu'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['timu'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['a'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['b'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['c'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['d'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['fenlei'];?></div></td>
                         <td><div class="type-parent" style="text-align: center;"><?php  echo $item['daan'];?></div></td>
                         <td style="text-align:right;">
                             <a class="btn btn-default btn-sm" href="<?php  echo url('site/entry/Edittiku',array('id'=>$item['id'],'m'=>'hc_dati'));?>" title="编辑">改</a>&nbsp
                             <a class="btn btn-default btn-sm" href="<?php  echo url('site/entry/Deletetiku',array('id'=>$item['id'],'m'=>'hc_dati'));?>" onclick="return confirm('确认删除此题吗？');return false;" title="删除">删</a>
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