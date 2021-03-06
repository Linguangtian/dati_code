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
				<label for="firstname" class="col-sm-2 control-label">奖品名称</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="name">
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-2 control-label">状态</label>
				<div class="col-sm-10">
					 <select class="form-control" name="stact" style="width: 50%;" id="cate">
						 <option value="0">下架</option>
						 <option value="1">上架</option>
					 </select>
				</div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-2 control-label">物品类型</label>
				<div class="col-sm-10">
					<select class="form-control" name="jiangpin_status" style="width: 50%;">
						<option value="0">实物</option>
						<option value="1">核销</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-2 control-label">缩略图</label>
				<div class="col-sm-7">
					 <?php  echo tpl_form_field_image('thumb');?>
				</div>
				<div class="clo-sm-3">
					产品缩略图：346*210（像素）
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">排序(越大越靠前)</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="sort" style="width: 100px;">
				</div>
			</div>
			<div  style="text-indent: 150px; font-size: 16px;">小程序暂时不支持复杂的格式文本，如果发现前台显示空白，请把内容复制到文本文档里中转一下。</div>
			<div class="form-group" id="cotent">
				<label for="lastname" class="col-sm-2 control-label">内容</label>
				<div class="col-sm-10">
					<?php  echo tpl_ueditor('content',$result['content']);?>
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