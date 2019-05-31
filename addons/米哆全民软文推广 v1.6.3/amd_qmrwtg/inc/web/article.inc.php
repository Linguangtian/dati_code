<?php

//decode by http://www.yunlu99.com/
global $_W, $_GPC;
$op = !empty($_GPC["op"]) ? $_GPC["op"] : "display";
$uniacid = $_W["uniacid"];
load()->func("tpl");

$category = pdo_fetchall("SELECT * FROM " . tablename("amd_qmrwtg_category") . " WHERE uniacid ={$uniacid} ORDER BY parentid ASC, displayorder ASC, id ASC ", array(), "id");
$parent = array();
$children = array();
if (!empty($category)) {
	$children = '';
	foreach ($category as $cid => $cate) {
		if (!empty($cate["parentid"])) {
			$children[$cate["parentid"]][] = $cate;
		} else {
			$parent[$cate["id"]] = $cate;
		}
	}
}
if (!empty($_GPC["Deleteall"]) && !empty($_GPC["select"])) {
	foreach ($_GPC["select"] as $k => $v) {
		pdo_delete("amd_qmrwtg", array("id" => $v, "uniacid" => $_W["uniacid"]));
	}
	message("成功删除选中的软文！", referer(), "success");
}
if ($_GPC["type"] == "sy") {
	$sy_id = $_GPC["sy_id"];
	$recommend = pdo_get("amd_qmrwtg", array("id" => $sy_id));
	if ($recommend["recommend"] == 1) {
		$recommend["recommend"] = 2;
	} else {
		$recommend["recommend"] = 1;
	}
	pdo_update("amd_qmrwtg", array("recommend" => $recommend["recommend"]), array("id" => $sy_id));
	header("content-type:application/json;charset=utf8");
	$res["success"] = 1;
	echo json_encode($res);
	exit;
}
if ($op == "on") {
	$id = $_GPC["id"];
	$uniacid = $_W["uniacid"];
	$art = pdo_fetch("select * from " . tablename("amd_qmrwtg") . " where id=:id", array(":id" => $id));
	$result = array();
	if ($art["status"] == 1) {
		$data = array("status" => 2, "ispubluc" => 1);
		$result["res"] = 1;
	} else {
		$data = array("status" => 1, "ispubluc" => 0);
	}
	pdo_update("amd_qmrwtg", $data, array("id" => $id));
	header("Content-type:application/json");
	echo json_encode($result);
	exit;
}
if ($op == "appo") {
	$id = $_GPC["id"];
	$uniacid = $_W["uniacid"];
	$art = pdo_fetch("select * from " . tablename("amd_qmrwtg") . " where id=:id", array(":id" => $id));
	$result = array();
	if ($art["appoint"] == 1) {
		$data = array("appoint" => 2);
		$result["res"] = 1;
	} else {
		$data = array("appoint" => 1);
	}
	pdo_update("amd_qmrwtg", $data, array("id" => $id));
	header("Content-type:application/json");
	echo json_encode($result);
	exit;
}
if ($op == "appoint") {
	$num = pdo_fetchcolumn("select count(*) from " . tablename("amd_qmrwtg_user") . " where openid=:openid and\r\n    uniacid=:uniacid and info_status=2", array(":openid" => $_GPC["openid"], ":uniacid" => $_GPC["uniacid"]));
	var_dump($num);
	if (empty($num)) {
	}
}
if ($op == "display") {
	if (!empty($_GPC["displayorder"])) {
		foreach ($_GPC["displayorder"] as $id => $displayorder) {
			pdo_update("amd_qmrwtg", array("displayorder" => $displayorder), array("id" => $id));
		}
		message("软文排序更新成功！", $this->createWebUrl("article", array("op" => "display")), "success");
	}
	$pindex = max(1, intval($_GPC["page"]));
	$psize = 10;
	$condition = '';
	$params = array();
	if (!empty($_GPC["akeyword"])) {
		$condition .= " AND title LIKE :keyword";
		$params[":keyword"] = "%{$_GPC["akeyword"]}%";
	}
	if (!empty($_GPC["catagroy"]["childid"])) {
		$cid = intval($_GPC["catagroy"]["childid"]);
		$condition .= " AND ccate = '{$cid}'";
	} else {
		if (!empty($_GPC["catagroy"]["parentid"])) {
			$cid = intval($_GPC["catagroy"]["parentid"]);
			$condition .= " AND pcate = '{$cid}'";
		}
	}
	$list = pdo_fetchall("SELECT * FROM " . tablename("amd_qmrwtg") . " WHERE uniacid = '{$uniacid}' {$condition} ORDER BY displayorder DESC ,id desc LIMIT " . ($pindex - 1) * $psize . "," . $psize, $params);
	foreach ($list as &$akey) {
		if ($akey["userid"]) {
			$akey["user"] = pdo_fetch("select * from " . tablename("amd_qmrwtg_user") . "  where id=:id and uniacid=:uniacid ", array("uniacid" => $akey["uniacid"], "id" => $akey["userid"]));
		}
	}
	unset($akey);
	$total = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename("amd_qmrwtg") . " WHERE uniacid = '{$uniacid}'");
	$pager = pagination($total, $pindex, $psize);
} else {
	if ($op == "post") {
		$brands = pdo_fetchall("SELECT * FROM " . tablename("amd_qmrwtg_brands") . " WHERE uniacid = :uniacid and status=1 order by displayorder", array(":uniacid" => $uniacid));
		$id = intval($_GPC["id"]);
		load()->func("file");
		$pcate = $_GPC["pcate"];
		$ccate = $_GPC["ccate"];
		if ($id > 0) {
			$item = pdo_fetch("SELECT * FROM " . tablename("amd_qmrwtg") . " WHERE id = :id", array(":id" => $id));
			if (empty($item)) {
				message("抱歉，软文不存在或是已经删除！", '', "error");
			}
			$pcate = $item["pcate"];
			$ccate = $item["ccate"];
			$akeywords = pdo_fetchcolumn("SELECT content FROM " . tablename("rule_keyword") . " WHERE id = :id AND uniacid = :uniacid ", array(":id" => $item["kid"], ":uniacid" => $_W["uniacid"]));
			$item["type"] = explode(",", $item["type"]);
			$item["credit"] = iunserializer($item["credit"]) ? iunserializer($item["credit"]) : array();
			if (!empty($item["credit"]["limit"])) {
				$credit_num = pdo_fetchcolumn("SELECT SUM(credit_value) FROM " . tablename("mc_handsel") . " WHERE uniacid = :uniacid AND module = :module AND sign = :sign", array(":uniacid" => $_W["uniacid"], ":module" => "amd_qmrwtg", ":sign" => md5(iserializer(array("id" => $id)))));
				if (is_null($credit_num)) {
					$credit_num = 0;
				}
				$credit_yu = $item["credit"]["limit"] - $credit_num < 0 ? 0 : $item["credit"]["limit"] - $credit_num;
			}
			$ausql = "select * from " . tablename("amd_qmrwtg_author") . " where id=:aid and uniacid=:uniacid";
			$parms = array(":aid" => $item["author_id"], ":uniacid" => $uniacid);
			$saler = pdo_fetch($ausql, $parms);
		} else {
			$item["bg_music_switch"] = "1";
			$item["credit"] = array();
		}
		if (checksubmit("submit")) {
			empty($_GPC["title"]) ? message("亲,标题不能为空") : ($title = $_GPC["title"]);
			empty($_GPC["content"]) ? message("亲,内容不能为空") : ($content = $_GPC["content"]);
			$selbrands = '';
			if (!empty($_GPC["brands"])) {
				$selbrands = ",";
				foreach ($_GPC["brands"] as $key) {
					$selbrands .= $key . ",";
				}
			}
			$data = array("uniacid" => $_W["uniacid"], "pcate" => intval($_GPC["catagroy"]["parentid"]), "ccate" => intval($_GPC["catagroy"]["childid"]), "title" => $title, "brands" => $selbrands, "brandid" => intval($_GPC["brandid"]), "pay_money" => $_GPC["pay_money"], "content" => htmlspecialchars_decode($_GPC["content"]), "description" => $_GPC["description"], "displayorder" => intval($_GPC["displayorder"]), "tel" => $_GPC["tel"], "clickNum" => $_GPC["clickNum"], "zanNum" => intval($_GPC["zanNum"]), "author" => $_GPC["author"], "createtime" => TIMESTAMP, "author_id" => $_GPC["sid"], "pay_num" => $_GPC["pay_num"], "bg_music" => $_GPC["bg_music"], "bg_music_set" => $_GPC["bg_music_set"], "wailian" => $_GPC["wailian"], "fx_title" => $_GPC["fx_title"], "fx_desc" => $_GPC["fx_desc"], "fx_img" => $_GPC["fx_img"]);
			if (!empty($_GPC["thumb"])) {
				$data["thumb"] = $_GPC["thumb"];
			} else {
				if (!empty($_GPC["autolitpic"])) {
					$match = array();
					preg_match("/attachment\\/(.*?)(\\.gif|\\.jpg|\\.png|\\.bmp)/", $_GPC["content"], $match);
					if (!empty($match[1])) {
						$data["thumb"] = $match[1] . $match[2];
					} else {
						preg_match("/(http|https):\\/\\/(.*?)(\\.gif|\\.jpg|\\.png|\\.bmp)/", $_GPC["content"], $match);
						$data["thumb"] = $match[0];
					}
				}
			}
			if (!empty($_GPC["akeyword"])) {
				$rule["uniacid"] = $_W["uniacid"];
				$rule["name"] = "软文：" . $_GPC["title"] . " 触发规则";
				$rule["module"] = "news";
				$rule["status"] = 1;
				$keyword = array("uniacid" => $_W["uniacid"]);
				$keyword["module"] = "news";
				$keyword["content"] = $_GPC["akeyword"];
				$keyword["status"] = 1;
				$keyword["type"] = 1;
				$keyword["displayorder"] = 1;
				$reply["title"] = $_GPC["title"];
				$reply["description"] = $_GPC["description"];
				$reply["thumb"] = $data["thumb"];
				$reply["url"] = murl("entry/module/detail", array("m" => "amd_qmrwtg", "id" => $id));
			}
			if (!empty($_FILES["thumb"]["tmp_name"])) {
				file_delete($_GPC["thumb_old"]);
				$upload = file_upload($_FILES["thumb"]);
				if (is_error($upload)) {
					message($upload["message"], '', "error");
				}
				$data["thumb"] = $upload["path"];
			}
			if (empty($id)) {
				if (!empty($_GPC["akeyword"])) {
					pdo_insert("rule", $rule);
					$rid = pdo_insertid();
					$keyword["rid"] = $rid;
					pdo_insert("rule_keyword", $keyword);
					$kid = pdo_insertid();
					$reply["rid"] = $rid;
					pdo_insert("news_reply", $reply);
					$data["rid"] = $rid;
					$data["kid"] = $kid;
				}
				pdo_insert("amd_qmrwtg", $data);
				$aid = pdo_insertid();
				pdo_update("news_reply", array("url" => murl("entry/module/detail", array("m" => "amd_qmrwtg", "id" => $aid))), array("rid" => $rid));
			} else {
				unset($data["createtime"]);
				pdo_delete("rule", array("id" => $item["rid"], "uniacid" => $_W["uniacid"]));
				pdo_delete("rule_keyword", array("rid" => $item["rid"], "uniacid" => $_W["uniacid"]));
				pdo_delete("news_reply", array("rid" => $item["rid"]));
				if (!empty($_GPC["akeyword"])) {
					pdo_insert("rule", $rule);
					$rid = pdo_insertid();
					$keyword["rid"] = $rid;
					pdo_insert("rule_keyword", $keyword);
					$kid = pdo_insertid();
					$reply["rid"] = $rid;
					pdo_insert("news_reply", $reply);
					$data["rid"] = $rid;
					$data["kid"] = $kid;
				} else {
					$data["rid"] = 0;
					$data["kid"] = 0;
				}
				pdo_update("amd_qmrwtg", $data, array("id" => $id));
			}
			message("软文更新成功！", $this->createWebUrl("article", array("foo" => "display")), "success");
		}
	} else {
		if ($op == "delete") {
			load()->func("file");
			$id = intval($_GPC["id"]);
			$row = pdo_fetch("SELECT id, thumb FROM " . tablename("amd_qmrwtg") . " WHERE id = :id", array(":id" => $id));
			if (empty($row)) {
				message("抱歉，软文不存在或是已经被删除！");
			}
			if (!empty($row["thumb"])) {
				file_delete($row["thumb"]);
			}
			if (!empty($row["rid"])) {
				pdo_delete("rule", array("id" => $row["rid"], "uniacid" => $_W["uniacid"]));
				pdo_delete("rule_keyword", array("rid" => $row["rid"], "uniacid" => $_W["uniacid"]));
				pdo_delete("news_reply", array("rid" => $row["rid"]));
			}
			pdo_delete("amd_qmrwtg_collect", array("article_id" => $id));
			pdo_delete("amd_qmrwtg", array("id" => $id));
			message("删除成功！", referer(), "success");
		}
	}
}
include $this->template("article");