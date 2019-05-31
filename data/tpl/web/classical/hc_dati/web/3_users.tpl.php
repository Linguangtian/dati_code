<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            用户管理 <a href="<?php  echo url('site/entry/Addusers',array('m'=>'hc_dati'));?>" style="margin-left: 10px; color: red;">添加虚拟用户</a>
        </h3>
    </div>
    <form action="" method="get" class="form-horizontal" role="form">
        <div class="panel panel-info">
            <div class="panel-heading">筛选</div>
            <div class="panel-body">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="hc_dati" />
                <input type="hidden" name="do" value="users" />
                <div class="form-group">
                    <div class="col-sm-10">
                        <select class="form-control" name="status" style="width: 50%;" id="cate">
                            <option value="0">用户状态</option>
                            <option value="1">拉黑</option>
                            <option value="2">在线</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-lg-6">
                        <input class="form-control" name="keyword" type="text" value="<?php  echo $_GPC['keyword'];?>" placeholder="请输入会员昵称">
                    </div>
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label"></label>
                    <div class=" col-xs-12 col-sm-2 col-lg-2">
                        <button class="btn btn-default" ><i class="fa fa-search"></i> 搜索</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
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
                        <th>open_id</th>
                        <th>用户名</th>
                        <th>参与次数</th>
                        <th>成功次数</th>
                        <th>状态</th>
                        <th>头像</th>
                        <th style="text-align:right;">操作</th>
                    </tr>
                    </thead>
                    <tbody id="level-list">
                    <?php  if(is_array($users)) { foreach($users as $item) { ?>
                     <tr>
                         <td><div class="type-parent"><?php  echo $item['user_id'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['open_id'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['nick_name'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['dati_sum'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['dati_success'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['zhuangtai'];?></div></td>
                         <td><div class="type-parent"><img src="<?php  echo $item['head_pic'];?>" width="30" height="30" /></div></td>
                         <td style="text-align:right;">
                             <a class="btn btn-default btn-sm" href="<?php  echo url('site/entry/Editusers',array('id'=>$item['user_id'],'m'=>'hc_dati'));?>" title="编辑">改</a>&nbsp
                             <a class="btn btn-default btn-sm" href="<?php  echo url('site/entry/Deleteusers',array('id'=>$item['user_id'],'m'=>'hc_dati'));?>" onclick="return confirm('确认删除此用户吗？');return false;" title="删除">删</a>
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
    document.getElementById("cate")[<?php  echo $status;?>].selected=true;
    $(function(){
        $('.url_btn').click(function(){
            var str=$(this).children('.urlvalue').text();
            $('.url_div').text('跳转地址：'+str);
            $('.url_div').removeClass('hide');
        })
    })
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>