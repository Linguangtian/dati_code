<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            添加商品
        </h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="post" action="" name="submit">
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">次数名称</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="name">
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">描述</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="miaosu">
				</div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-2 control-label">状态</label>
				<div class="col-sm-10">
					 <select class="form-control" name="status" style="width: 50%;" id="cate">
						 <option value="0">下架</option>
						 <option value="1">上架</option>
					 </select>
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">原价</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="yuanjia">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">现价</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="xianjia">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">次数</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="cishu">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义上传图</label>
				<div class="col-sm-9">
					<?php  echo tpl_form_field_image('img')?>
					<div class='help-block'>小程序首页展示的商品背景图；png格式</div>
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">排序(越小越靠前)</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="sort" style="width: 100px;">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">个人支付通知标题</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="gr_title">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">个人支付通知描述</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="gr_miaosu">
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