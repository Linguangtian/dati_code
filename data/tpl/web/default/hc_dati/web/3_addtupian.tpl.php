<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
			添加题库
        </h3>
    </div>
	<div class="panel-body">
		<form class="form-horizontal" role="form" method="post" action="" name="submit">
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">题目</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="timu" value="<?php  echo $tiku['timu'];?>">
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-2 control-label">图片</label>
				<div class="col-sm-7">
					<?php  echo tpl_form_field_image('tupian');?>
				</div>
				<div class="clo-sm-3">
					图标：650*406（像素）
				</div>
			</div>

			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">A选项</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="xxa" value="<?php  echo $tiku['a'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">B选项</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="xxb" value="<?php  echo $tiku['b'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">C选项</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="xxc" value="<?php  echo $tiku['c'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">D选项</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="xxd" value="<?php  echo $tiku['d'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">答案</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="daan" value="<?php  echo $tiku['daan'];?>">
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

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>