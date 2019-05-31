<?php

//decode by http://www.yunlu99.com/
global $_W, $_GPC;

if ($_GPC["flag"] == 1) {
}
$settings = $this->module["config"];
empty($settings["amd_qmrwtg_recharge"]) && ($settings["amd_qmrwtg_recharge"] = "5.00");
empty($settings["amd_qmrwtg_recharge_qua"]) && ($settings["amd_qmrwtg_recharge_qua"] = "5.00");
empty($settings["amd_qmrwtg_recharge_year"]) && ($settings["amd_qmrwtg_recharge_year"] = "5.00");
empty($settings["amd_qmrwtg_scale"]) && ($settings["amd_qmrwtg_scale"] = "0.28");
empty($settings["amd_qmrwtg_pscale"]) && ($settings["amd_qmrwtg_pscale"] = "0");
empty($settings["amd_qmrwtg_author_scale"]) && ($settings["amd_qmrwtg_author_scale"] = "0.7");
empty($settings["center_intro"]) && ($settings["center_intro"] = '');
empty($settings["amd_qmrwtg_title"]) && ($settings["amd_qmrwtg_title"] = $_W["account"]["name"] . '');
empty($settings["amd_qmrwtg_num"]) && ($settings["amd_qmrwtg_num"] = 20);
empty($settings["shang_status"]) && ($settings["shang_status"] = 1);
empty($settings["min_tixian"]) && ($settings["min_tixian"] = 1);
empty($settings["isneedcheck"]) && ($settings["isneedcheck"] = 2);
empty($settings["as_menu_show"]) && ($settings["as_menu_show"] = 1);
empty($settings["g_menu_show"]) && ($settings["g_menu_show"] = 1);
empty($settings["bottom_menu"]) && ($settings["bottom_menu"] = "客户");
$startfile = IA_ROOT . "/addons/amd_qmrwtg/" . $_W["uniacid"] . "start.txt";
$endfile = IA_ROOT . "/addons/amd_qmrwtg/" . $_W["uniacid"] . "end.txt";
$runflagf = IA_ROOT . "/addons/amd_qmrwtg/" . $_W["uniacid"] . "runflag.txt";
$runflag = is_file($runflagf);
$startflag = is_file($startfile);
$endflag = is_file($endfile);
if (!$runflag) {
	$runfile = fopen($runflagf, "w");
	fwrite($runfile, "0");
	fclose($runfile);
} else {
	$runfile = fopen($runflagf, "r");
	$lastruntime = fread($runfile, filesize($runflagf));
	fclose($runfile);
	$lastruntime = intval($lastruntime);
	if ($startflag && $lastruntime < time() - 50) {
		$runstatus = -1;
		unlink($startfile);
	} else {
		$runstatus = 1;
	}
}
if ($_GPC["flag"] == 1) {
	$runfile = fopen($runflagf, "w");
	fwrite($runfile, "1");
	fclose($runfile);
	$runfile = fopen($runflagf, "r");
	$lastruntime = fread($runfile, filesize($runflagf));
	fclose($runfile);
	var_dump($lastruntime);
	exit;
}
if ($startflag) {
	unlink($endfile);
}
if (checksubmit()) {
	if (floatval($_GPC["amd_qmrwtg_pscale"]) >= 1) {
		message("上级提成比例设置应该小于1", '', "error");
	}
	if (floatval($_GPC["amd_qmrwtg_scale"]) >= 1) {
		message("上上级提成比例设置应该小于1", '', "error");
	}
	if (floatval($_GPC["amd_qmrwtg_pscale"] + $_GPC["amd_qmrwtg_scale"]) >= 1) {
		message("提成比例设置合计应小于1", '', "error");
	}
	$dat["isneedcheck"] = $_GPC["isneedcheck"];
	$dat["amd_qmrwtg_recharge"] = $_GPC["amd_qmrwtg_recharge"];
	$dat["amd_qmrwtg_recharge_qua"] = $_GPC["amd_qmrwtg_recharge_qua"];
	$dat["amd_qmrwtg_recharge_year"] = $_GPC["amd_qmrwtg_recharge_year"];
	$dat["amd_qmrwtg_scale"] = $_GPC["amd_qmrwtg_scale"];
	$dat["amd_qmrwtg_author_scale"] = $_GPC["amd_qmrwtg_author_scale"];
	$dat["amd_qmrwtg_pscale"] = $_GPC["amd_qmrwtg_pscale"];
	$dat["amd_qmrwtg_title"] = $_GPC["amd_qmrwtg_title"];
	$dat["amd_qmrwtg_num"] = $_GPC["amd_qmrwtg_num"];
	$dat["center_intro"] = $_GPC["center_intro"];
	$dat["my_intro"] = $_GPC["my_intro"];
	$dat["pay_template"] = $_GPC["pay_template"];
	$dat["min_tixian"] = $_GPC["min_tixian"];
	$dat["qrcode_desc"] = $_GPC["qrcode_desc"];
	$dat["shang_status"] = $_GPC["shang_status"];
	$dat["detailtoppic"] = $_GPC["detailtoppic"];
	$dat["detailbottompic"] = $_GPC["detailbottompic"];
	$dat["detailtoppicurl"] = $_GPC["detailtoppicurl"];
	$dat["detailbottompicurl"] = $_GPC["detailbottompicurl"];
	$dat["amd_qmrwtg_myintrotitle"] = $_GPC["amd_qmrwtg_myintrotitle"];
	$dat["bg_music"] = $_GPC["bg_music"];
	$dat["projecttitle"] = $_GPC["projecttitle"];
	$dat["bottom_menu"] = $_GPC["bottom_menu"];
	$dat["push_diy_m_message"] = $_GPC["push_diy_m_message"];
	$dat["push_diy_a_message"] = $_GPC["push_diy_a_message"];
	$dat["base_add_user"] = intval($_GPC["base_add_user"]);
	$dat["base_views"] = intval($_GPC["base_views"]);
	$dat["g_menu_show"] = intval($_GPC["g_menu_show"]);
	$dat["as_menu_show"] = intval($_GPC["as_menu_show"]);
	if (!$this->saveSettings($dat)) {
		message("设置失败", '', "error");
	} else {
		message("设置成功", '', "success");
	}
}
include $this->template("setting");