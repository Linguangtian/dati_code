<?php defined('IN_IA') or exit('Access Denied');?><span class="menu-title">
	<i class="wi wi-apply"></i>应用
</span>
<span class="module-info-name">
	<?php  if(file_exists(IA_ROOT. "/addons/". $_W['current_module']['name']. "/icon-custom.jpg")) { ?>
		<img src="<?php  echo tomedia("addons/".$_W['current_module']['name']."/icon-custom.jpg")?>" class="head-app-logo" onerror="this.src='./resource/images/gw-wx.gif'">
	<?php  } else { ?>
		<img src="<?php  echo tomedia("addons/".$_W['current_module']['name']."/icon.jpg")?>" class="head-app-logo" onerror="this.src='./resource/images/gw-wx.gif'">
	<?php  } ?>
	<span class="name"><?php  echo $_W['current_module']['title'];?></span>
</span>

<div class="related-info dropdown module-related-info">
</div>
<script>
	$.post('./index.php?c=module&a=display&do=accounts_dropdown_menu', {'module_name': "<?php  echo $_W['current_module']['name']?>", 'version_id': "<?php  echo $_GPC['version_id']?>"}, function(data){
		$('.module-related-info').html(data);
	}, 'html');
</script>

<div class="related-info dropdown hidden">
	<div class="dropdown-toggle top-view" id="dropdownMenu" data-toggle="dropdown"><a href="javascript:;">公众号公众号</a><span class="caret"></span></div>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
		<li>
			<a href="javascript:;">这是app</a>
			<span class="pipe">+</span>
			<a href="javascript:;">公众号</a>
			<span class="pipe">+</span>
			<a href="javascript:;">小程序</a>
		</li>
	</ul>
</div>

<!-- 兼容历史性问题：模块内获取不到模块信息$module的问题-start -->
<?php  if(CRUMBS_NAV == 1) { ?>
<?php  global $module;?>
<?php  } ?>
<!-- end -->