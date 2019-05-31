<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            添加奖品
        </h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="post" action="" name="submit">
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">用户名称</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="name" value="<?php  echo $jiangpin['nick_name'];?>">
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">参与次数</label>
				<div class="col-sm-9 col-xs-12">
					<input class='form-control' placeholder="奖品" name='dati_sum' value="<?php  echo $jiangpin['dati_sum'];?>">
					<div class="help-block" style="color: red">会在毅力排行榜中显示“连续挑战多少次”</div>
				</div>
			</div>

			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">成功次数</label>
				<div class="col-sm-9 col-xs-12">
					<input type="text" class="form-control" name="dati_success"  value="<?php  echo $jiangpin['dati_success'];?>">
					<div class='help-block' style="color: red">会在总排行榜中显示“连续答题多少次”用于增加总排行榜虚拟人数。</div>
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">参与机会</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="dati_jihui"  value="<?php  echo $jiangpin['dati_jihui'];?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 用户拉黑</label>
				<div class="col-sm-9 col-xs-12">
					<label style="margin-left: 10px;"><input type="radio" name="status" value="1" <?php  echo $xianshi1;?>> 正常</label>
					<label style="margin-left: 10px;"><input type="radio" name="status" value="0" <?php  echo $xianshi2;?>> 黑名单</label>
					<div class="help-block">正常：用户可进入，黑名单：用户不能进入</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" name="submit" class="btn btn-default">
					
				</div>
			</div>
	</form>
	<?php  echo $page;?>
    </div>
</div>
<script>
    document.getElementById("stact")[<?php  echo $jiangpin['stact'];?>].selected=true;
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>