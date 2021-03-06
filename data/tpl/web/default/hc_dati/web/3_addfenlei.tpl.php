<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            添加分类
        </h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="post" action="" name="submit">
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">名字</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="name">
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-2 control-label">排序(越大越靠前)</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  name="sort" style="width: 100px;">
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
				<label for="lastname" class="col-sm-2 control-label">每个分类的首页背景图</label>
				<div class="col-sm-7">
					<?php  echo tpl_form_field_image('bg_img');?>
					<div class='help-block' style="color: red">这个图是用户点击不同的分类，跳转到首页，首页的背景图显示这个地方上传的图片</div>
				</div>

				<div class="clo-sm-3">
					每个分类的首页背景图：宽度1080*1742像素,png格式
				</div>

			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-2 control-label">每个分类的首页导航图</label>
				<div class="col-sm-7">
					 <?php  echo tpl_form_field_image('img');?>
					<div class='help-block' style="color: red">这个图是用户点击不同的分类，跳转到首页，首页的导航图显示这个地方上传的图片</div>
				</div>
				<div class="clo-sm-3">
					每个分类的首页导航图：宽度648*461像素,png格式
				</div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-2 control-label">一行一个图标</label>
				<div class="col-sm-7">
					<?php  echo tpl_form_field_image('img1');?>
					<div class='help-block' style="color: red">这个在基础设置-分类设置下设置一行一个的情况下会显示</div>
				</div>
				<div class="clo-sm-3">
					图标：978*332（像素）
				</div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-2 control-label">一行两个图标</label>
				<div class="col-sm-7">
					<?php  echo tpl_form_field_image('img2');?>
					<div class='help-block' style="color: red">这个在基础设置-分类设置下设置一行两个的情况下会显示</div>
				</div>
				<div class="clo-sm-3">
					图标：468*322（像素）
				</div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-2 control-label">一行四个图标</label>
				<div class="col-sm-7">
					<?php  echo tpl_form_field_image('img3');?>
					<div class='help-block' style="color: red">这个在基础设置-分类设置下设置一行四个的情况下会显示</div>
				</div>
				<div class="clo-sm-3">
					图标：264*264（像素）
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