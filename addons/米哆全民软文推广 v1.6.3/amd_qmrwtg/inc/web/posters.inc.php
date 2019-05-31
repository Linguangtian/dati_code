<?php

//decode by http://www.yunlu99.com/
global $_W, $_GPC;
load()->func("tpl");
$operation = !empty($_GPC["op"]) ? $_GPC["op"] : "display";
$uniacid = $_W["uniacid"];
if ($operation == "post") {
	$id = $_GPC["id"];
	$sql = "select * from " . tablename("amd_qmrwtg_posters") . " where uniacid=:uniacid and id=:id";
	$parms = array(":uniacid" => $uniacid, ":id" => $id);
	$banner = pdo_fetch($sql, $parms);
	if (checksubmit()) {
		
		empty($_GPC["postertitle"]) && message("海报标题没有设置");
		empty($_GPC["picurl"]) && message("海报图片没有上传");
		$data = array("uniacid" => $uniacid, "displayorder" => $_GPC["displayorder"], "typeid" => $_GPC["typeid"], "postertitle" => $_GPC["postertitle"], "picurl" => $_GPC["picurl"], "status" => $_GPC["status"], "createtime" => TIMESTAMP);
		if (empty($_GPC["id"])) {
			$re = pdo_insert("amd_qmrwtg_posters", $data);
		} else {
			$re = pdo_update("amd_qmrwtg_posters", $data, array("id" => $id));
		}
		if ($re) {
			message("设置成功", $this->createWebUrl("posters"), "success");
		}
	}
}
if ($operation == "delete") {
	$id = $_GPC["id"];
	$re = pdo_delete("amd_qmrwtg_posters", array("id" => $id));
	if ($re) {
		message("删除成功", $this->createWebUrl("posters"), "success");
	}
}
$list = pdo_fetchall("select p.*,t.poster_type from " . tablename("amd_qmrwtg_posters") . " p left join " . tablename("amd_qmrwtg_poster_type") . " t on  t.id=p.typeid where p.uniacid={$uniacid} order by p.displayorder desc");
$posterstype = pdo_fetchall("select * from " . tablename("amd_qmrwtg_poster_type") . " where uniacid={$uniacid} order by displayorder desc");
include $this->template("posters");