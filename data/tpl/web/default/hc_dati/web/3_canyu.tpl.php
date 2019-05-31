<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
           参与记录
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
                        <th>姓名</th>
                        <th>头像</th>
                        <th>需要挑战的题目数</th>
                        <th>挑战到的题目数</th>
                        <th>状态</th>
                        <th>开始时间</th>
                        <th>结束时间</th>
                    </tr>
                    </thead>
                    <tbody id="level-list">
                    <?php  if(is_array($canyu)) { foreach($canyu as $item) { ?>
                     <tr>
                         <td><div class="type-parent"><?php  echo $item['id'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['name'];?></div></td>
                         <td><div class="type-parent"><img src="<?php  echo $item['head_pic'];?>" width="30" height="30" /></div></td>
                         <td><div class="type-parent"><?php  echo $item['setup_number'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['number'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['status'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['starttime'];?></div></td>
                         <td><div class="type-parent"><?php  echo $item['endtime'];?></div></td>
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