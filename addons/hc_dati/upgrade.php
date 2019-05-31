<?php
$sql="CREATE TABLE IF NOT EXISTS `ims_dati_canyu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `starttime` varchar(255) DEFAULT NULL,
  `endtime` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '2' COMMENT '2:正在参与1:参与成功0:参与失败',
  `number` int(11) DEFAULT NULL,
  `setup_number` int(11) DEFAULT NULL,
  `lingjiang_status` int(11) NOT NULL DEFAULT '0',
  `jihui` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_fenlei` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `bg_img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_formid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `formid` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_fuhuo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `order_sn` varchar(255) NOT NULL,
  `open_id` varchar(255) DEFAULT NULL,
  `canyu_id` int(11) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `paytime` varchar(255) DEFAULT NULL,
  `money` decimal(10,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_goods` (
  `goods_id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `miaosu` varchar(255) DEFAULT NULL,
  `xianjia` decimal(10,2) DEFAULT NULL,
  `yuanjia` decimal(10,2) DEFAULT NULL,
  `cishu` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `sort` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `gr_title` varchar(255) NOT NULL,
  `gr_miaosu` varchar(255) NOT NULL,
  PRIMARY KEY (`goods_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_guanggao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `miaosu` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `appid` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_jiangpin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `jiangpin_status` int(11) DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  `stact` int(11) NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_lingjiang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `postalCode` varchar(255) DEFAULT NULL COMMENT '邮编',
  `provinceName` varchar(255) DEFAULT NULL COMMENT '省',
  `cityName` varchar(255) DEFAULT NULL COMMENT '市',
  `countyName` varchar(255) DEFAULT NULL COMMENT '区',
  `detailInfo` varchar(255) DEFAULT NULL COMMENT '详细地址',
  `telNumber` varchar(255) DEFAULT NULL COMMENT '电话',
  `jiangpin_id` int(11) DEFAULT NULL,
  `canyu_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `addtime` int(50) NOT NULL,
  `kuaididan` varchar(255) NOT NULL,
  `kuaidigongsi` varchar(255) NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `goods_img` varchar(255) NOT NULL,
  `jiangpin_status` int(11) DEFAULT '0',
  `fafang` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `open_id` varchar(255) DEFAULT NULL,
  `uniacid` int(11) DEFAULT NULL,
  `add_time` varchar(255) DEFAULT NULL,
  `order_money` decimal(10,2) DEFAULT NULL,
  `order_sn` varchar(255) DEFAULT NULL,
  `pay_time` varchar(255) DEFAULT NULL,
  `pay_status` int(11) NOT NULL DEFAULT '0',
  `time` varchar(255) DEFAULT NULL,
  `prepay_id` varchar(255) DEFAULT NULL,
  `goods_id` int(50) NOT NULL,
  `cishu` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_pxcanyu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `lingjiang_status` int(11) DEFAULT '0' COMMENT '0：未领取，1：已领取，2：已发放',
  `pxperiods_id` int(11) DEFAULT NULL,
  `userName` varchar(255) NOT NULL,
  `postalCode` varchar(255) NOT NULL,
  `provinceName` varchar(255) NOT NULL,
  `cityName` varchar(255) NOT NULL,
  `countyName` varchar(255) NOT NULL,
  `detailInfo` varchar(255) NOT NULL,
  `telNumber` varchar(255) NOT NULL,
  `kuaididan` varchar(255) NOT NULL,
  `kuaidigongsi` varchar(255) NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `goods_img` varchar(255) NOT NULL,
  `jiangxiang` varchar(255) NOT NULL,
  `max_success` int(11) NOT NULL,
  `mingci` int(11) NOT NULL,
  `ranking_sort` int(11) NOT NULL,
  `lingjiang_time` varchar(255) NOT NULL,
  `dati_pxcanyu` int(11) NOT NULL DEFAULT '0',
  `hexiao_status` int(11) NOT NULL DEFAULT '0',
  `fafang` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_pxjiangpin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `thumb` varchar(255) DEFAULT NULL,
  `content` text,
  `ranking_name` varchar(255) NOT NULL COMMENT '名次名字',
  `ranking_sort` int(11) NOT NULL COMMENT '名次排行',
  `num` int(11) NOT NULL COMMENT '奖品数量',
  `money` decimal(10,2) NOT NULL,
  `hexiao_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_pxperiods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `periods` varchar(255) DEFAULT NULL COMMENT '参与期数',
  `sumnum` int(11) DEFAULT NULL COMMENT '总人数',
  `periods_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `toubu` varchar(255) DEFAULT NULL,
  `lianxi` varchar(255) DEFAULT NULL,
  `zhifu_status` int(11) DEFAULT '1',
  `zhifu` varchar(255) DEFAULT NULL,
  `daohang_status` int(11) DEFAULT '1',
  `daohang` varchar(255) NOT NULL,
  `xuni_meb` int(255) NOT NULL,
  `xuni_status` int(11) NOT NULL DEFAULT '0',
  `shuzi` int(11) NOT NULL DEFAULT '100',
  `msgid` varchar(255) NOT NULL,
  `msgstr` varchar(255) NOT NULL,
  `jieguo_msg` varchar(255) NOT NULL,
  `guize1` varchar(255) NOT NULL,
  `guize2` varchar(255) NOT NULL,
  `guize3` varchar(255) NOT NULL,
  `guize4` varchar(125) NOT NULL,
  `suiji_status` int(11) NOT NULL DEFAULT '0',
  `canyucishu` int(255) NOT NULL DEFAULT '0',
  `mp3_url` varchar(255) NOT NULL,
  `kefu_title` varchar(255) NOT NULL,
  `kefu_img` varchar(255) NOT NULL,
  `kefu_miaosu` varchar(255) NOT NULL,
  `kefu_url` varchar(255) NOT NULL,
  `youxi_toubu` varchar(255) NOT NULL,
  `zhuanfa_title` varchar(255) NOT NULL,
  `tongcheng` varchar(255) NOT NULL,
  `jiazhi` decimal(11,2) NOT NULL,
  `xcx_name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `stake` varchar(11) NOT NULL DEFAULT '1.0' COMMENT '审核',
  `zhuanfacishu` int(11) NOT NULL DEFAULT '0',
  `fenlei` int(11) NOT NULL DEFAULT '1',
  `fenlei_status` int(11) NOT NULL DEFAULT '1',
  `jiandan` int(11) NOT NULL,
  `zhongdeng` int(11) NOT NULL,
  `kunnan` int(11) NOT NULL,
  `chushicishu` int(11) NOT NULL,
  `danhao` varchar(255) NOT NULL,
  `gongsi` varchar(255) NOT NULL,
  `fenleiname` varchar(50) NOT NULL,
  `zhuanfa_img` varchar(255) NOT NULL,
  `gongzhong_img` varchar(255) NOT NULL,
  `guanggaostr` varchar(255) NOT NULL,
  `huodejihuistr` varchar(255) NOT NULL,
  `huodejihuititle` varchar(255) NOT NULL,
  `zhuanfa_jihui` int(11) NOT NULL,
  `huodejihuitext` varchar(255) NOT NULL,
  `tupian` int(11) NOT NULL,
  `yinyue` int(11) NOT NULL,
  `tupian_time` int(11) NOT NULL,
  `yinyue_time` int(11) NOT NULL,
  `hexiao_str1` varchar(255) NOT NULL,
  `hexiao_str2` varchar(255) NOT NULL,
  `fuzhi` varchar(255) NOT NULL,
  `gonggao` varchar(255) NOT NULL,
  `ald_key` varchar(255) NOT NULL,
  `shenhe_status` int(11) NOT NULL DEFAULT '0',
  `guanggao1_appid` varchar(255) NOT NULL,
  `guanggao2_appid` varchar(255) NOT NULL,
  `guanggao3_appid` varchar(255) NOT NULL,
  `guanggao1_img` varchar(255) NOT NULL,
  `guanggao2_img` varchar(255) NOT NULL,
  `guanggao3_img` varchar(255) NOT NULL,
  `guanggao1_page` varchar(255) NOT NULL,
  `guanggao2_page` varchar(255) NOT NULL,
  `guanggao3_page` varchar(255) NOT NULL,
  `guanggao1_shenhe` varchar(255) NOT NULL,
  `guanggao2_shenhe` varchar(255) NOT NULL,
  `guanggao3_shenhe` varchar(255) NOT NULL,
  `pay_status` int(11) NOT NULL,
  `tl_cusid` varchar(255) NOT NULL,
  `tl_appid` varchar(255) NOT NULL,
  `tl_miyao` varchar(255) NOT NULL,
  `gr_pid` varchar(255) NOT NULL,
  `shouyename` varchar(255) NOT NULL,
  `paihangbangname` varchar(255) NOT NULL,
  `wodename` varchar(255) NOT NULL,
  `shouye_img` varchar(255) NOT NULL,
  `paihangbang_img` varchar(255) NOT NULL,
  `fenlei_img` varchar(255) NOT NULL,
  `wode_img` varchar(255) NOT NULL,
  `bg_color` varchar(255) NOT NULL,
  `lahei_status` int(11) NOT NULL,
  `dibu_color` varchar(255) NOT NULL,
  `wodejiangpin_pic` varchar(255) NOT NULL,
  `lianxiwomen_pic` varchar(255) NOT NULL,
  `liuliangzhu` varchar(255) NOT NULL,
  `pxbpx_bkg` varchar(255) NOT NULL,
  `zhuanfaqun` varchar(255) NOT NULL,
  `toubu_color` varchar(255) NOT NULL,
  `yinyue_end_time` int(11) NOT NULL,
  `qiniu_url` varchar(255) NOT NULL,
  `denglu_bgk` varchar(255) NOT NULL,
  `fuhuo_money` decimal(10,2) NOT NULL,
  `fuhuo_text` varchar(255) NOT NULL,
  `fh_zhuanfa_img` varchar(255) NOT NULL,
  `fh_zhifu_img` varchar(255) NOT NULL,
  `fh_zhifu_status` int(11) NOT NULL DEFAULT '0',
  `today_jihui` int(11) NOT NULL,
  `pxguize1` varchar(255) NOT NULL,
  `pxguize2` varchar(255) NOT NULL,
  `pxguize3` varchar(255) NOT NULL,
  `pxguize4` varchar(255) NOT NULL,
  `guanzhu_str` varchar(255) NOT NULL,
  `fenlei_bgimg` varchar(255) NOT NULL,
  `yanse_bg` varchar(255) NOT NULL,
  `pxend_time` varchar(255) NOT NULL,
  `tankuang_cishu` int(11) NOT NULL,
  `pxnum_img` varchar(255) NOT NULL,
  `pxdaojishi_img` varchar(255) NOT NULL,
  `pxguize_img` varchar(255) NOT NULL,
  `xsjiangpin_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_shenhe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `stact` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `time` int(225) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_tiku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `nandu` int(11) DEFAULT '1',
  `tixing` int(11) DEFAULT NULL,
  `timu` varchar(255) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `fenlei` varchar(255) DEFAULT NULL,
  `daan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_tupian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `nandu` int(11) DEFAULT '1',
  `tixing` int(11) DEFAULT NULL,
  `tupian` varchar(255) NOT NULL,
  `timu` varchar(255) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `fenlei` varchar(255) DEFAULT NULL,
  `daan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `open_id` varchar(255) DEFAULT NULL,
  `nick_name` varchar(255) DEFAULT NULL,
  `head_pic` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `dati_sum` int(11) NOT NULL DEFAULT '0' COMMENT '参与次数',
  `dati_zuida` int(11) NOT NULL DEFAULT '0' COMMENT '参与最大',
  `money` decimal(11,2) NOT NULL DEFAULT '0.00',
  `zhuangtai` int(11) NOT NULL DEFAULT '1',
  `dati_success` int(11) NOT NULL DEFAULT '0' COMMENT '成功次数',
  `dati_jihui` int(11) DEFAULT '1',
  `openGId` varchar(255) NOT NULL COMMENT '最后一次分享群的信息',
  `guanzhu` int(11) NOT NULL DEFAULT '0',
  `today_time` varchar(255) NOT NULL,
  `tankuang_cishu` int(11) NOT NULL,
  `shangqi_success` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_yinyue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `nandu` int(11) DEFAULT '1',
  `tixing` int(11) DEFAULT NULL,
  `yinyue` varchar(255) NOT NULL,
  `timu` varchar(255) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `fenlei` varchar(255) DEFAULT NULL,
  `daan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_dati_zhuanfa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `openid` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `openGId` varchar(255) DEFAULT NULL,
  `timestamp` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
";
pdo_run($sql);
if(!pdo_fieldexists('dati_canyu',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_canyu')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_canyu',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_canyu')." ADD `uniacid` int(50) NOT NULL;");
}
if(!pdo_fieldexists('dati_canyu',  'user_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_canyu')." ADD `user_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_canyu',  'starttime')) {
	pdo_query("ALTER TABLE ".tablename('dati_canyu')." ADD `starttime` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_canyu',  'endtime')) {
	pdo_query("ALTER TABLE ".tablename('dati_canyu')." ADD `endtime` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_canyu',  'status')) {
	pdo_query("ALTER TABLE ".tablename('dati_canyu')." ADD `status` int(11) DEFAULT '2' COMMENT '2:正在参与1:参与成功0:参与失败';");
}
if(!pdo_fieldexists('dati_canyu',  'number')) {
	pdo_query("ALTER TABLE ".tablename('dati_canyu')." ADD `number` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_canyu',  'setup_number')) {
	pdo_query("ALTER TABLE ".tablename('dati_canyu')." ADD `setup_number` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_canyu',  'lingjiang_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_canyu')." ADD `lingjiang_status` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_canyu',  'jihui')) {
	pdo_query("ALTER TABLE ".tablename('dati_canyu')." ADD `jihui` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_fenlei',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_fenlei')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_fenlei',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_fenlei')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_fenlei',  'sort')) {
	pdo_query("ALTER TABLE ".tablename('dati_fenlei')." ADD `sort` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_fenlei',  'name')) {
	pdo_query("ALTER TABLE ".tablename('dati_fenlei')." ADD `name` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_fenlei',  'status')) {
	pdo_query("ALTER TABLE ".tablename('dati_fenlei')." ADD `status` int(11) DEFAULT '1';");
}
if(!pdo_fieldexists('dati_fenlei',  'img1')) {
	pdo_query("ALTER TABLE ".tablename('dati_fenlei')." ADD `img1` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_fenlei',  'img2')) {
	pdo_query("ALTER TABLE ".tablename('dati_fenlei')." ADD `img2` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_fenlei',  'img3')) {
	pdo_query("ALTER TABLE ".tablename('dati_fenlei')." ADD `img3` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_fenlei',  'img')) {
	pdo_query("ALTER TABLE ".tablename('dati_fenlei')." ADD `img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_fenlei',  'bg_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_fenlei')." ADD `bg_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_formid',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_formid')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_formid',  'user_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_formid')." ADD `user_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_formid',  'formid')) {
	pdo_query("ALTER TABLE ".tablename('dati_formid')." ADD `formid` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_formid',  'status')) {
	pdo_query("ALTER TABLE ".tablename('dati_formid')." ADD `status` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_fuhuo',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_fuhuo')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_fuhuo',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_fuhuo')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_fuhuo',  'order_sn')) {
	pdo_query("ALTER TABLE ".tablename('dati_fuhuo')." ADD `order_sn` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_fuhuo',  'open_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_fuhuo')." ADD `open_id` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_fuhuo',  'canyu_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_fuhuo')." ADD `canyu_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_fuhuo',  'addtime')) {
	pdo_query("ALTER TABLE ".tablename('dati_fuhuo')." ADD `addtime` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_fuhuo',  'paytime')) {
	pdo_query("ALTER TABLE ".tablename('dati_fuhuo')." ADD `paytime` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_fuhuo',  'money')) {
	pdo_query("ALTER TABLE ".tablename('dati_fuhuo')." ADD `money` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_fuhuo',  'status')) {
	pdo_query("ALTER TABLE ".tablename('dati_fuhuo')." ADD `status` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_goods',  'goods_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_goods')." ADD `goods_id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_goods',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_goods')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_goods',  'name')) {
	pdo_query("ALTER TABLE ".tablename('dati_goods')." ADD `name` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_goods',  'miaosu')) {
	pdo_query("ALTER TABLE ".tablename('dati_goods')." ADD `miaosu` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_goods',  'xianjia')) {
	pdo_query("ALTER TABLE ".tablename('dati_goods')." ADD `xianjia` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_goods',  'yuanjia')) {
	pdo_query("ALTER TABLE ".tablename('dati_goods')." ADD `yuanjia` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_goods',  'cishu')) {
	pdo_query("ALTER TABLE ".tablename('dati_goods')." ADD `cishu` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_goods',  'status')) {
	pdo_query("ALTER TABLE ".tablename('dati_goods')." ADD `status` int(11) DEFAULT '1';");
}
if(!pdo_fieldexists('dati_goods',  'sort')) {
	pdo_query("ALTER TABLE ".tablename('dati_goods')." ADD `sort` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_goods',  'img')) {
	pdo_query("ALTER TABLE ".tablename('dati_goods')." ADD `img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_goods',  'gr_title')) {
	pdo_query("ALTER TABLE ".tablename('dati_goods')." ADD `gr_title` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_goods',  'gr_miaosu')) {
	pdo_query("ALTER TABLE ".tablename('dati_goods')." ADD `gr_miaosu` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_guanggao',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_guanggao')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_guanggao',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_guanggao')." ADD `uniacid` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_guanggao',  'sort')) {
	pdo_query("ALTER TABLE ".tablename('dati_guanggao')." ADD `sort` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_guanggao',  'name')) {
	pdo_query("ALTER TABLE ".tablename('dati_guanggao')." ADD `name` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_guanggao',  'miaosu')) {
	pdo_query("ALTER TABLE ".tablename('dati_guanggao')." ADD `miaosu` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_guanggao',  'img')) {
	pdo_query("ALTER TABLE ".tablename('dati_guanggao')." ADD `img` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_guanggao',  'appid')) {
	pdo_query("ALTER TABLE ".tablename('dati_guanggao')." ADD `appid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_guanggao',  'page')) {
	pdo_query("ALTER TABLE ".tablename('dati_guanggao')." ADD `page` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_guanggao',  'status')) {
	pdo_query("ALTER TABLE ".tablename('dati_guanggao')." ADD `status` int(11) NOT NULL DEFAULT '1';");
}
if(!pdo_fieldexists('dati_jiangpin',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_jiangpin')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_jiangpin',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_jiangpin')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_jiangpin',  'name')) {
	pdo_query("ALTER TABLE ".tablename('dati_jiangpin')." ADD `name` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_jiangpin',  'jiangpin_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_jiangpin')." ADD `jiangpin_status` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('dati_jiangpin',  'sort')) {
	pdo_query("ALTER TABLE ".tablename('dati_jiangpin')." ADD `sort` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_jiangpin',  'stact')) {
	pdo_query("ALTER TABLE ".tablename('dati_jiangpin')." ADD `stact` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_jiangpin',  'thumb')) {
	pdo_query("ALTER TABLE ".tablename('dati_jiangpin')." ADD `thumb` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_jiangpin',  'content')) {
	pdo_query("ALTER TABLE ".tablename('dati_jiangpin')." ADD `content` text;");
}
if(!pdo_fieldexists('dati_lingjiang',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_lingjiang',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_lingjiang',  'user_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `user_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_lingjiang',  'userName')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `userName` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_lingjiang',  'postalCode')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `postalCode` varchar(255) DEFAULT NULL COMMENT '邮编';");
}
if(!pdo_fieldexists('dati_lingjiang',  'provinceName')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `provinceName` varchar(255) DEFAULT NULL COMMENT '省';");
}
if(!pdo_fieldexists('dati_lingjiang',  'cityName')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `cityName` varchar(255) DEFAULT NULL COMMENT '市';");
}
if(!pdo_fieldexists('dati_lingjiang',  'countyName')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `countyName` varchar(255) DEFAULT NULL COMMENT '区';");
}
if(!pdo_fieldexists('dati_lingjiang',  'detailInfo')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `detailInfo` varchar(255) DEFAULT NULL COMMENT '详细地址';");
}
if(!pdo_fieldexists('dati_lingjiang',  'telNumber')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `telNumber` varchar(255) DEFAULT NULL COMMENT '电话';");
}
if(!pdo_fieldexists('dati_lingjiang',  'jiangpin_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `jiangpin_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_lingjiang',  'canyu_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `canyu_id` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_lingjiang',  'status')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `status` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_lingjiang',  'addtime')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `addtime` int(50) NOT NULL;");
}
if(!pdo_fieldexists('dati_lingjiang',  'kuaididan')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `kuaididan` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_lingjiang',  'kuaidigongsi')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `kuaidigongsi` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_lingjiang',  'goods_name')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `goods_name` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_lingjiang',  'goods_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `goods_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_lingjiang',  'jiangpin_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `jiangpin_status` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('dati_lingjiang',  'fafang')) {
	pdo_query("ALTER TABLE ".tablename('dati_lingjiang')." ADD `fafang` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('dati_order',  'order_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_order')." ADD `order_id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_order',  'open_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_order')." ADD `open_id` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_order',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_order')." ADD `uniacid` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_order',  'add_time')) {
	pdo_query("ALTER TABLE ".tablename('dati_order')." ADD `add_time` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_order',  'order_money')) {
	pdo_query("ALTER TABLE ".tablename('dati_order')." ADD `order_money` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_order',  'order_sn')) {
	pdo_query("ALTER TABLE ".tablename('dati_order')." ADD `order_sn` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_order',  'pay_time')) {
	pdo_query("ALTER TABLE ".tablename('dati_order')." ADD `pay_time` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_order',  'pay_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_order')." ADD `pay_status` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_order',  'time')) {
	pdo_query("ALTER TABLE ".tablename('dati_order')." ADD `time` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_order',  'prepay_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_order')." ADD `prepay_id` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_order',  'goods_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_order')." ADD `goods_id` int(50) NOT NULL;");
}
if(!pdo_fieldexists('dati_order',  'cishu')) {
	pdo_query("ALTER TABLE ".tablename('dati_order')." ADD `cishu` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'user_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `user_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'lingjiang_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `lingjiang_status` int(11) DEFAULT '0' COMMENT '0：未领取，1：已领取，2：已发放';");
}
if(!pdo_fieldexists('dati_pxcanyu',  'pxperiods_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `pxperiods_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'userName')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `userName` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'postalCode')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `postalCode` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'provinceName')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `provinceName` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'cityName')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `cityName` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'countyName')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `countyName` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'detailInfo')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `detailInfo` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'telNumber')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `telNumber` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'kuaididan')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `kuaididan` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'kuaidigongsi')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `kuaidigongsi` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'goods_name')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `goods_name` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'goods_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `goods_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'jiangxiang')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `jiangxiang` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'max_success')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `max_success` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'mingci')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `mingci` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'ranking_sort')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `ranking_sort` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'lingjiang_time')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `lingjiang_time` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxcanyu',  'dati_pxcanyu')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `dati_pxcanyu` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_pxcanyu',  'hexiao_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `hexiao_status` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_pxcanyu',  'fafang')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxcanyu')." ADD `fafang` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_pxjiangpin',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxjiangpin')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_pxjiangpin',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxjiangpin')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxjiangpin',  'name')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxjiangpin')." ADD `name` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_pxjiangpin',  'sort')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxjiangpin')." ADD `sort` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_pxjiangpin',  'status')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxjiangpin')." ADD `status` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_pxjiangpin',  'thumb')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxjiangpin')." ADD `thumb` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_pxjiangpin',  'content')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxjiangpin')." ADD `content` text;");
}
if(!pdo_fieldexists('dati_pxjiangpin',  'ranking_name')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxjiangpin')." ADD `ranking_name` varchar(255) NOT NULL COMMENT '名次名字';");
}
if(!pdo_fieldexists('dati_pxjiangpin',  'ranking_sort')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxjiangpin')." ADD `ranking_sort` int(11) NOT NULL COMMENT '名次排行';");
}
if(!pdo_fieldexists('dati_pxjiangpin',  'num')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxjiangpin')." ADD `num` int(11) NOT NULL COMMENT '奖品数量';");
}
if(!pdo_fieldexists('dati_pxjiangpin',  'money')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxjiangpin')." ADD `money` decimal(10,2) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxjiangpin',  'hexiao_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxjiangpin')." ADD `hexiao_status` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_pxperiods',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxperiods')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_pxperiods',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxperiods')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_pxperiods',  'periods')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxperiods')." ADD `periods` varchar(255) DEFAULT NULL COMMENT '参与期数';");
}
if(!pdo_fieldexists('dati_pxperiods',  'sumnum')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxperiods')." ADD `sumnum` int(11) DEFAULT NULL COMMENT '总人数';");
}
if(!pdo_fieldexists('dati_pxperiods',  'periods_name')) {
	pdo_query("ALTER TABLE ".tablename('dati_pxperiods')." ADD `periods_name` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_setup',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `uniacid` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'toubu')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `toubu` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'lianxi')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `lianxi` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'zhifu_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `zhifu_status` int(11) DEFAULT '1';");
}
if(!pdo_fieldexists('dati_setup',  'zhifu')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `zhifu` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'daohang_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `daohang_status` int(11) DEFAULT '1';");
}
if(!pdo_fieldexists('dati_setup',  'daohang')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `daohang` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'xuni_meb')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `xuni_meb` int(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'xuni_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `xuni_status` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_setup',  'shuzi')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `shuzi` int(11) NOT NULL DEFAULT '100';");
}
if(!pdo_fieldexists('dati_setup',  'msgid')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `msgid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'msgstr')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `msgstr` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'jieguo_msg')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `jieguo_msg` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guize1')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guize1` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guize2')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guize2` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guize3')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guize3` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guize4')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guize4` varchar(125) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'suiji_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `suiji_status` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_setup',  'canyucishu')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `canyucishu` int(255) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_setup',  'mp3_url')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `mp3_url` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'kefu_title')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `kefu_title` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'kefu_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `kefu_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'kefu_miaosu')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `kefu_miaosu` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'kefu_url')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `kefu_url` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'youxi_toubu')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `youxi_toubu` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'zhuanfa_title')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `zhuanfa_title` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'tongcheng')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `tongcheng` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'jiazhi')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `jiazhi` decimal(11,2) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'xcx_name')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `xcx_name` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'time')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `time` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'stake')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `stake` varchar(11) NOT NULL DEFAULT '1.0' COMMENT '审核';");
}
if(!pdo_fieldexists('dati_setup',  'zhuanfacishu')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `zhuanfacishu` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_setup',  'fenlei')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `fenlei` int(11) NOT NULL DEFAULT '1';");
}
if(!pdo_fieldexists('dati_setup',  'fenlei_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `fenlei_status` int(11) NOT NULL DEFAULT '1';");
}
if(!pdo_fieldexists('dati_setup',  'jiandan')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `jiandan` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'zhongdeng')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `zhongdeng` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'kunnan')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `kunnan` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'chushicishu')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `chushicishu` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'danhao')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `danhao` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'gongsi')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `gongsi` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'fenleiname')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `fenleiname` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'zhuanfa_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `zhuanfa_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'gongzhong_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `gongzhong_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanggaostr')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggaostr` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'huodejihuistr')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `huodejihuistr` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'huodejihuititle')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `huodejihuititle` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'zhuanfa_jihui')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `zhuanfa_jihui` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'huodejihuitext')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `huodejihuitext` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'tupian')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `tupian` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'yinyue')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `yinyue` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'tupian_time')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `tupian_time` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'yinyue_time')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `yinyue_time` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'hexiao_str1')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `hexiao_str1` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'hexiao_str2')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `hexiao_str2` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'fuzhi')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `fuzhi` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'gonggao')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `gonggao` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'ald_key')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `ald_key` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'shenhe_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `shenhe_status` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_setup',  'guanggao1_appid')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggao1_appid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanggao2_appid')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggao2_appid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanggao3_appid')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggao3_appid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanggao1_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggao1_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanggao2_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggao2_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanggao3_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggao3_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanggao1_page')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggao1_page` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanggao2_page')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggao2_page` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanggao3_page')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggao3_page` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanggao1_shenhe')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggao1_shenhe` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanggao2_shenhe')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggao2_shenhe` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanggao3_shenhe')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanggao3_shenhe` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'pay_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `pay_status` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'tl_cusid')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `tl_cusid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'tl_appid')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `tl_appid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'tl_miyao')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `tl_miyao` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'gr_pid')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `gr_pid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'shouyename')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `shouyename` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'paihangbangname')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `paihangbangname` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'wodename')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `wodename` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'shouye_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `shouye_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'paihangbang_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `paihangbang_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'fenlei_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `fenlei_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'wode_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `wode_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'bg_color')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `bg_color` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'lahei_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `lahei_status` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'dibu_color')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `dibu_color` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'wodejiangpin_pic')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `wodejiangpin_pic` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'lianxiwomen_pic')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `lianxiwomen_pic` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'liuliangzhu')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `liuliangzhu` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'pxbpx_bkg')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `pxbpx_bkg` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'zhuanfaqun')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `zhuanfaqun` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'toubu_color')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `toubu_color` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'yinyue_end_time')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `yinyue_end_time` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'qiniu_url')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `qiniu_url` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'denglu_bgk')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `denglu_bgk` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'fuhuo_money')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `fuhuo_money` decimal(10,2) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'fuhuo_text')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `fuhuo_text` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'fh_zhuanfa_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `fh_zhuanfa_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'fh_zhifu_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `fh_zhifu_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'fh_zhifu_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `fh_zhifu_status` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_setup',  'today_jihui')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `today_jihui` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'pxguize1')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `pxguize1` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'pxguize2')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `pxguize2` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'pxguize3')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `pxguize3` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'pxguize4')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `pxguize4` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'guanzhu_str')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `guanzhu_str` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'fenlei_bgimg')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `fenlei_bgimg` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'yanse_bg')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `yanse_bg` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'pxend_time')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `pxend_time` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'tankuang_cishu')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `tankuang_cishu` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'pxnum_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `pxnum_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'pxdaojishi_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `pxdaojishi_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'pxguize_img')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `pxguize_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_setup',  'xsjiangpin_status')) {
	pdo_query("ALTER TABLE ".tablename('dati_setup')." ADD `xsjiangpin_status` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_shenhe',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_shenhe')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_shenhe',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_shenhe')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_shenhe',  'stact')) {
	pdo_query("ALTER TABLE ".tablename('dati_shenhe')." ADD `stact` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_shenhe',  'name')) {
	pdo_query("ALTER TABLE ".tablename('dati_shenhe')." ADD `name` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_shenhe',  'time')) {
	pdo_query("ALTER TABLE ".tablename('dati_shenhe')." ADD `time` int(225) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_shenhe',  'sort')) {
	pdo_query("ALTER TABLE ".tablename('dati_shenhe')." ADD `sort` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_shenhe',  'img')) {
	pdo_query("ALTER TABLE ".tablename('dati_shenhe')." ADD `img` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_shenhe',  'content')) {
	pdo_query("ALTER TABLE ".tablename('dati_shenhe')." ADD `content` text;");
}
if(!pdo_fieldexists('dati_tiku',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_tiku')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_tiku',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_tiku')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_tiku',  'nandu')) {
	pdo_query("ALTER TABLE ".tablename('dati_tiku')." ADD `nandu` int(11) DEFAULT '1';");
}
if(!pdo_fieldexists('dati_tiku',  'tixing')) {
	pdo_query("ALTER TABLE ".tablename('dati_tiku')." ADD `tixing` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tiku',  'timu')) {
	pdo_query("ALTER TABLE ".tablename('dati_tiku')." ADD `timu` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tiku',  'a')) {
	pdo_query("ALTER TABLE ".tablename('dati_tiku')." ADD `a` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tiku',  'b')) {
	pdo_query("ALTER TABLE ".tablename('dati_tiku')." ADD `b` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tiku',  'c')) {
	pdo_query("ALTER TABLE ".tablename('dati_tiku')." ADD `c` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tiku',  'd')) {
	pdo_query("ALTER TABLE ".tablename('dati_tiku')." ADD `d` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tiku',  'fenlei')) {
	pdo_query("ALTER TABLE ".tablename('dati_tiku')." ADD `fenlei` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tiku',  'daan')) {
	pdo_query("ALTER TABLE ".tablename('dati_tiku')." ADD `daan` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tupian',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_tupian')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_tupian',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_tupian')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_tupian',  'nandu')) {
	pdo_query("ALTER TABLE ".tablename('dati_tupian')." ADD `nandu` int(11) DEFAULT '1';");
}
if(!pdo_fieldexists('dati_tupian',  'tixing')) {
	pdo_query("ALTER TABLE ".tablename('dati_tupian')." ADD `tixing` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tupian',  'tupian')) {
	pdo_query("ALTER TABLE ".tablename('dati_tupian')." ADD `tupian` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_tupian',  'timu')) {
	pdo_query("ALTER TABLE ".tablename('dati_tupian')." ADD `timu` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tupian',  'a')) {
	pdo_query("ALTER TABLE ".tablename('dati_tupian')." ADD `a` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tupian',  'b')) {
	pdo_query("ALTER TABLE ".tablename('dati_tupian')." ADD `b` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tupian',  'c')) {
	pdo_query("ALTER TABLE ".tablename('dati_tupian')." ADD `c` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tupian',  'd')) {
	pdo_query("ALTER TABLE ".tablename('dati_tupian')." ADD `d` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tupian',  'fenlei')) {
	pdo_query("ALTER TABLE ".tablename('dati_tupian')." ADD `fenlei` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_tupian',  'daan')) {
	pdo_query("ALTER TABLE ".tablename('dati_tupian')." ADD `daan` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_users',  'user_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `user_id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_users',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `uniacid` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_users',  'status')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `status` int(11) DEFAULT '1';");
}
if(!pdo_fieldexists('dati_users',  'city')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `city` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_users',  'country')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `country` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_users',  'gender')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `gender` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_users',  'open_id')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `open_id` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_users',  'nick_name')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `nick_name` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_users',  'head_pic')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `head_pic` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_users',  'province')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `province` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_users',  'dati_sum')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `dati_sum` int(11) NOT NULL DEFAULT '0' COMMENT '参与次数';");
}
if(!pdo_fieldexists('dati_users',  'dati_zuida')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `dati_zuida` int(11) NOT NULL DEFAULT '0' COMMENT '参与最大';");
}
if(!pdo_fieldexists('dati_users',  'money')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `money` decimal(11,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('dati_users',  'zhuangtai')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `zhuangtai` int(11) NOT NULL DEFAULT '1';");
}
if(!pdo_fieldexists('dati_users',  'dati_success')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `dati_success` int(11) NOT NULL DEFAULT '0' COMMENT '成功次数';");
}
if(!pdo_fieldexists('dati_users',  'dati_jihui')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `dati_jihui` int(11) DEFAULT '1';");
}
if(!pdo_fieldexists('dati_users',  'openGId')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `openGId` varchar(255) NOT NULL COMMENT '最后一次分享群的信息';");
}
if(!pdo_fieldexists('dati_users',  'guanzhu')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `guanzhu` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('dati_users',  'today_time')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `today_time` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_users',  'tankuang_cishu')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `tankuang_cishu` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_users',  'shangqi_success')) {
	pdo_query("ALTER TABLE ".tablename('dati_users')." ADD `shangqi_success` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_yinyue',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_yinyue')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_yinyue',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_yinyue')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_yinyue',  'nandu')) {
	pdo_query("ALTER TABLE ".tablename('dati_yinyue')." ADD `nandu` int(11) DEFAULT '1';");
}
if(!pdo_fieldexists('dati_yinyue',  'tixing')) {
	pdo_query("ALTER TABLE ".tablename('dati_yinyue')." ADD `tixing` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_yinyue',  'yinyue')) {
	pdo_query("ALTER TABLE ".tablename('dati_yinyue')." ADD `yinyue` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('dati_yinyue',  'timu')) {
	pdo_query("ALTER TABLE ".tablename('dati_yinyue')." ADD `timu` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_yinyue',  'a')) {
	pdo_query("ALTER TABLE ".tablename('dati_yinyue')." ADD `a` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_yinyue',  'b')) {
	pdo_query("ALTER TABLE ".tablename('dati_yinyue')." ADD `b` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_yinyue',  'c')) {
	pdo_query("ALTER TABLE ".tablename('dati_yinyue')." ADD `c` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_yinyue',  'd')) {
	pdo_query("ALTER TABLE ".tablename('dati_yinyue')." ADD `d` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_yinyue',  'fenlei')) {
	pdo_query("ALTER TABLE ".tablename('dati_yinyue')." ADD `fenlei` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_yinyue',  'daan')) {
	pdo_query("ALTER TABLE ".tablename('dati_yinyue')." ADD `daan` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_zhuanfa',  'id')) {
	pdo_query("ALTER TABLE ".tablename('dati_zhuanfa')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('dati_zhuanfa',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('dati_zhuanfa')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('dati_zhuanfa',  'openid')) {
	pdo_query("ALTER TABLE ".tablename('dati_zhuanfa')." ADD `openid` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_zhuanfa',  'time')) {
	pdo_query("ALTER TABLE ".tablename('dati_zhuanfa')." ADD `time` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_zhuanfa',  'openGId')) {
	pdo_query("ALTER TABLE ".tablename('dati_zhuanfa')." ADD `openGId` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('dati_zhuanfa',  'timestamp')) {
	pdo_query("ALTER TABLE ".tablename('dati_zhuanfa')." ADD `timestamp` int(50) NOT NULL;");
}

?>