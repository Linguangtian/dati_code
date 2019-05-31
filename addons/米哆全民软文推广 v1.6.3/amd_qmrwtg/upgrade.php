<?php
//升级数据表
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `credit` varchar(255) DEFAULT '0',
  `pcate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '一级分类',
  `ccate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '二级分类',
  `clickNum` int(10) unsigned NOT NULL DEFAULT '0',
  `zanNum` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(500) NOT NULL DEFAULT '' COMMENT '缩略图',
  `description` mediumtext NOT NULL COMMENT '简介',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `author` varchar(100) DEFAULT '' COMMENT '作者',
  `type` varchar(10) NOT NULL,
  `kid` int(10) unsigned NOT NULL,
  `rid` int(10) unsigned NOT NULL,
  `tel` varchar(15) NOT NULL,
  `pay_money` decimal(10,2) unsigned DEFAULT '0.00',
  `author_id` int(11) DEFAULT NULL COMMENT '作者id',
  `pay_num` int(11) DEFAULT NULL COMMENT '虚拟支付人数',
  `bg_music` varchar(250) DEFAULT NULL COMMENT '背景音乐',
  `bg_music_set` tinyint(4) DEFAULT '1' COMMENT '背景音乐开启',
  `status` tinyint(4) DEFAULT '1' COMMENT '软文状态',
  `key` varchar(20) DEFAULT NULL COMMENT '作者发布参数',
  `wailian` varchar(300) DEFAULT NULL COMMENT '外链',
  `appoint` tinyint(4) DEFAULT '1' COMMENT '指定用户不开启',
  `appo_users` varchar(300) DEFAULT NULL COMMENT '分组id',
  `marketing` varchar(300) DEFAULT '0',
  `top` int(10) DEFAULT '0',
  `recommend` int(10) DEFAULT '1',
  `savefrom` varchar(500) NOT NULL DEFAULT '本地',
  `ispubluc` tinyint(3) NOT NULL DEFAULT '1',
  `userid` int(11) NOT NULL DEFAULT '0',
  `fx_title` varchar(255) NOT NULL DEFAULT '',
  `fx_desc` varchar(255) NOT NULL DEFAULT '',
  `fx_img` varchar(500) NOT NULL DEFAULT '',
  `brands` varchar(255) NOT NULL DEFAULT '',
  `brandid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `uniacid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg','title')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `title` varchar(100) NOT NULL DEFAULT ''");}
if(!pdo_fieldexists('amd_qmrwtg','content')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `content` mediumtext NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg','credit')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `credit` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg','pcate')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `pcate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '一级分类'");}
if(!pdo_fieldexists('amd_qmrwtg','ccate')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `ccate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '二级分类'");}
if(!pdo_fieldexists('amd_qmrwtg','clickNum')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `clickNum` int(10) unsigned NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg','zanNum')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `zanNum` int(10) unsigned NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg','thumb')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `thumb` varchar(500) NOT NULL DEFAULT '' COMMENT '缩略图'");}
if(!pdo_fieldexists('amd_qmrwtg','description')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `description` mediumtext NOT NULL COMMENT '简介'");}
if(!pdo_fieldexists('amd_qmrwtg','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg','displayorder')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序'");}
if(!pdo_fieldexists('amd_qmrwtg','author')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `author` varchar(100) DEFAULT '' COMMENT '作者'");}
if(!pdo_fieldexists('amd_qmrwtg','type')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `type` varchar(10) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg','kid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `kid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg','rid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `rid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg','tel')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `tel` varchar(15) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg','pay_money')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `pay_money` decimal(10,2) unsigned DEFAULT '0.00'");}
if(!pdo_fieldexists('amd_qmrwtg','author_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `author_id` int(11) DEFAULT NULL COMMENT '作者id'");}
if(!pdo_fieldexists('amd_qmrwtg','pay_num')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `pay_num` int(11) DEFAULT NULL COMMENT '虚拟支付人数'");}
if(!pdo_fieldexists('amd_qmrwtg','bg_music')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `bg_music` varchar(250) DEFAULT NULL COMMENT '背景音乐'");}
if(!pdo_fieldexists('amd_qmrwtg','bg_music_set')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `bg_music_set` tinyint(4) DEFAULT '1' COMMENT '背景音乐开启'");}
if(!pdo_fieldexists('amd_qmrwtg','status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `status` tinyint(4) DEFAULT '1' COMMENT '软文状态'");}
if(!pdo_fieldexists('amd_qmrwtg','key')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `key` varchar(20) DEFAULT NULL COMMENT '作者发布参数'");}
if(!pdo_fieldexists('amd_qmrwtg','wailian')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `wailian` varchar(300) DEFAULT NULL COMMENT '外链'");}
if(!pdo_fieldexists('amd_qmrwtg','appoint')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `appoint` tinyint(4) DEFAULT '1' COMMENT '指定用户不开启'");}
if(!pdo_fieldexists('amd_qmrwtg','appo_users')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `appo_users` varchar(300) DEFAULT NULL COMMENT '分组id'");}
if(!pdo_fieldexists('amd_qmrwtg','marketing')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `marketing` varchar(300) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg','top')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `top` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg','recommend')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `recommend` int(10) DEFAULT '1'");}
if(!pdo_fieldexists('amd_qmrwtg','savefrom')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `savefrom` varchar(500) NOT NULL DEFAULT '本地'");}
if(!pdo_fieldexists('amd_qmrwtg','ispubluc')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `ispubluc` tinyint(3) NOT NULL DEFAULT '1'");}
if(!pdo_fieldexists('amd_qmrwtg','userid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `userid` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg','fx_title')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `fx_title` varchar(255) NOT NULL DEFAULT ''");}
if(!pdo_fieldexists('amd_qmrwtg','fx_desc')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `fx_desc` varchar(255) NOT NULL DEFAULT ''");}
if(!pdo_fieldexists('amd_qmrwtg','fx_img')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `fx_img` varchar(500) NOT NULL DEFAULT ''");}
if(!pdo_fieldexists('amd_qmrwtg','brands')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `brands` varchar(255) NOT NULL DEFAULT ''");}
if(!pdo_fieldexists('amd_qmrwtg','brandid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg')." ADD   `brandid` int(11) NOT NULL DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_adv` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL COMMENT '公众号id',
  `displayorder` int(11) DEFAULT NULL COMMENT '排序',
  `adg_name` varchar(200) DEFAULT NULL COMMENT '幻灯片名字',
  `adv_img` varchar(300) DEFAULT NULL COMMENT '幻灯片',
  `adv_href` varchar(250) DEFAULT NULL COMMENT '幻灯片链接',
  `adv_status` tinyint(4) DEFAULT NULL COMMENT '显示状态',
  `createtime` int(11) DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_adv','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_adv')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_adv','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_adv')." ADD   `uniacid` int(11) DEFAULT NULL COMMENT '公众号id'");}
if(!pdo_fieldexists('amd_qmrwtg_adv','displayorder')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_adv')." ADD   `displayorder` int(11) DEFAULT NULL COMMENT '排序'");}
if(!pdo_fieldexists('amd_qmrwtg_adv','adg_name')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_adv')." ADD   `adg_name` varchar(200) DEFAULT NULL COMMENT '幻灯片名字'");}
if(!pdo_fieldexists('amd_qmrwtg_adv','adv_img')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_adv')." ADD   `adv_img` varchar(300) DEFAULT NULL COMMENT '幻灯片'");}
if(!pdo_fieldexists('amd_qmrwtg_adv','adv_href')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_adv')." ADD   `adv_href` varchar(250) DEFAULT NULL COMMENT '幻灯片链接'");}
if(!pdo_fieldexists('amd_qmrwtg_adv','adv_status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_adv')." ADD   `adv_status` tinyint(4) DEFAULT NULL COMMENT '显示状态'");}
if(!pdo_fieldexists('amd_qmrwtg_adv','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_adv')." ADD   `createtime` int(11) DEFAULT NULL COMMENT '时间'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_author` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uniacid` int(11) NOT NULL COMMENT '公众号ID',
  `avatar` varchar(255) DEFAULT NULL COMMENT '头像',
  `nickname` varchar(255) DEFAULT NULL COMMENT '昵称',
  `openid` varchar(255) DEFAULT NULL COMMENT '用户openid',
  `realname` varchar(255) DEFAULT NULL COMMENT '真实姓名',
  `mobile` varchar(64) DEFAULT NULL COMMENT '手机号',
  `money` decimal(10,2) DEFAULT NULL COMMENT '余额',
  `createtime` int(11) DEFAULT NULL COMMENT '时间',
  `scale` decimal(5,2) DEFAULT NULL COMMENT '抽成比例',
  `parentid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_author','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_author')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID'");}
if(!pdo_fieldexists('amd_qmrwtg_author','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_author')." ADD   `uniacid` int(11) NOT NULL COMMENT '公众号ID'");}
if(!pdo_fieldexists('amd_qmrwtg_author','avatar')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_author')." ADD   `avatar` varchar(255) DEFAULT NULL COMMENT '头像'");}
if(!pdo_fieldexists('amd_qmrwtg_author','nickname')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_author')." ADD   `nickname` varchar(255) DEFAULT NULL COMMENT '昵称'");}
if(!pdo_fieldexists('amd_qmrwtg_author','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_author')." ADD   `openid` varchar(255) DEFAULT NULL COMMENT '用户openid'");}
if(!pdo_fieldexists('amd_qmrwtg_author','realname')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_author')." ADD   `realname` varchar(255) DEFAULT NULL COMMENT '真实姓名'");}
if(!pdo_fieldexists('amd_qmrwtg_author','mobile')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_author')." ADD   `mobile` varchar(64) DEFAULT NULL COMMENT '手机号'");}
if(!pdo_fieldexists('amd_qmrwtg_author','money')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_author')." ADD   `money` decimal(10,2) DEFAULT NULL COMMENT '余额'");}
if(!pdo_fieldexists('amd_qmrwtg_author','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_author')." ADD   `createtime` int(11) DEFAULT NULL COMMENT '时间'");}
if(!pdo_fieldexists('amd_qmrwtg_author','scale')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_author')." ADD   `scale` decimal(5,2) DEFAULT NULL COMMENT '抽成比例'");}
if(!pdo_fieldexists('amd_qmrwtg_author','parentid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_author')." ADD   `parentid` int(11) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `brandtitle` varchar(64) NOT NULL,
  `displayorder` int(11) DEFAULT '0',
  `userid` int(11) DEFAULT '0',
  `groupid` int(11) DEFAULT '0',
  `ispublic` tinyint(3) DEFAULT '1',
  `createtime` int(11) DEFAULT '0',
  `status` tinyint(3) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_brands','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_brands')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_brands','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_brands')." ADD   `uniacid` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_brands','brandtitle')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_brands')." ADD   `brandtitle` varchar(64) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_brands','displayorder')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_brands')." ADD   `displayorder` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_brands','userid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_brands')." ADD   `userid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_brands','groupid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_brands')." ADD   `groupid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_brands','ispublic')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_brands')." ADD   `ispublic` tinyint(3) DEFAULT '1'");}
if(!pdo_fieldexists('amd_qmrwtg_brands','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_brands')." ADD   `createtime` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_brands','status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_brands')." ADD   `status` tinyint(3) DEFAULT '1'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属帐号',
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `parentid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类ID,0为第一级',
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `thumb` varchar(1024) NOT NULL DEFAULT '' COMMENT '分类图片',
  `kid` int(10) unsigned NOT NULL COMMENT '关键词ID',
  `rid` int(10) unsigned NOT NULL COMMENT 'rid',
  `type` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL DEFAULT '' COMMENT '分类描述',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `index_show` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_category','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_category')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_category','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_category')." ADD   `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属帐号'");}
if(!pdo_fieldexists('amd_qmrwtg_category','name')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_category')." ADD   `name` varchar(50) NOT NULL COMMENT '分类名称'");}
if(!pdo_fieldexists('amd_qmrwtg_category','parentid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_category')." ADD   `parentid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类ID,0为第一级'");}
if(!pdo_fieldexists('amd_qmrwtg_category','displayorder')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_category')." ADD   `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序'");}
if(!pdo_fieldexists('amd_qmrwtg_category','thumb')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_category')." ADD   `thumb` varchar(1024) NOT NULL DEFAULT '' COMMENT '分类图片'");}
if(!pdo_fieldexists('amd_qmrwtg_category','kid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_category')." ADD   `kid` int(10) unsigned NOT NULL COMMENT '关键词ID'");}
if(!pdo_fieldexists('amd_qmrwtg_category','rid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_category')." ADD   `rid` int(10) unsigned NOT NULL COMMENT 'rid'");}
if(!pdo_fieldexists('amd_qmrwtg_category','type')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_category')." ADD   `type` varchar(10) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_category','description')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_category')." ADD   `description` varchar(100) NOT NULL DEFAULT '' COMMENT '分类描述'");}
if(!pdo_fieldexists('amd_qmrwtg_category','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_category')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_category','index_show')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_category')." ADD   `index_show` tinyint(3) NOT NULL DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_collect` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL COMMENT '公众号id',
  `article_id` int(11) DEFAULT NULL COMMENT '软文id',
  `uid` int(11) DEFAULT NULL COMMENT '个人中心id',
  `openid` varchar(255) DEFAULT NULL COMMENT '用户OPENID',
  `createtime` int(11) DEFAULT NULL COMMENT '时间',
  `author_id` int(11) DEFAULT NULL,
  `serialize_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_collect','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_collect')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_collect','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_collect')." ADD   `uniacid` int(11) DEFAULT NULL COMMENT '公众号id'");}
if(!pdo_fieldexists('amd_qmrwtg_collect','article_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_collect')." ADD   `article_id` int(11) DEFAULT NULL COMMENT '软文id'");}
if(!pdo_fieldexists('amd_qmrwtg_collect','uid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_collect')." ADD   `uid` int(11) DEFAULT NULL COMMENT '个人中心id'");}
if(!pdo_fieldexists('amd_qmrwtg_collect','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_collect')." ADD   `openid` varchar(255) DEFAULT NULL COMMENT '用户OPENID'");}
if(!pdo_fieldexists('amd_qmrwtg_collect','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_collect')." ADD   `createtime` int(11) DEFAULT NULL COMMENT '时间'");}
if(!pdo_fieldexists('amd_qmrwtg_collect','author_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_collect')." ADD   `author_id` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_collect','serialize_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_collect')." ADD   `serialize_id` int(11) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_dis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL COMMENT '公众号ID',
  `aritcle_id` int(11) NOT NULL COMMENT '软文ID',
  `openid` varchar(100) NOT NULL COMMENT 'openid',
  `nickname` varchar(200) NOT NULL COMMENT '昵称',
  `avatar` varchar(300) NOT NULL COMMENT '头像',
  `discuss` text COMMENT '评论',
  `createtime` int(11) DEFAULT NULL COMMENT '时间',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '显示状态',
  `reply` text COMMENT '作者回复',
  `zannum` int(11) DEFAULT NULL COMMENT '评论点赞数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_dis','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_dis')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_dis','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_dis')." ADD   `uniacid` int(11) NOT NULL COMMENT '公众号ID'");}
if(!pdo_fieldexists('amd_qmrwtg_dis','aritcle_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_dis')." ADD   `aritcle_id` int(11) NOT NULL COMMENT '软文ID'");}
if(!pdo_fieldexists('amd_qmrwtg_dis','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_dis')." ADD   `openid` varchar(100) NOT NULL COMMENT 'openid'");}
if(!pdo_fieldexists('amd_qmrwtg_dis','nickname')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_dis')." ADD   `nickname` varchar(200) NOT NULL COMMENT '昵称'");}
if(!pdo_fieldexists('amd_qmrwtg_dis','avatar')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_dis')." ADD   `avatar` varchar(300) NOT NULL COMMENT '头像'");}
if(!pdo_fieldexists('amd_qmrwtg_dis','discuss')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_dis')." ADD   `discuss` text COMMENT '评论'");}
if(!pdo_fieldexists('amd_qmrwtg_dis','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_dis')." ADD   `createtime` int(11) DEFAULT NULL COMMENT '时间'");}
if(!pdo_fieldexists('amd_qmrwtg_dis','status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_dis')." ADD   `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '显示状态'");}
if(!pdo_fieldexists('amd_qmrwtg_dis','reply')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_dis')." ADD   `reply` text COMMENT '作者回复'");}
if(!pdo_fieldexists('amd_qmrwtg_dis','zannum')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_dis')." ADD   `zannum` int(11) DEFAULT NULL COMMENT '评论点赞数'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_diszan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL COMMENT '公众号ID',
  `disid` int(11) DEFAULT NULL COMMENT '评论id',
  `artid` int(11) DEFAULT NULL COMMENT '软文id',
  `openid` varchar(200) DEFAULT NULL COMMENT '用户id',
  `createtime` int(11) DEFAULT NULL COMMENT '时间',
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_diszan','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_diszan')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_diszan','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_diszan')." ADD   `uniacid` int(11) DEFAULT NULL COMMENT '公众号ID'");}
if(!pdo_fieldexists('amd_qmrwtg_diszan','disid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_diszan')." ADD   `disid` int(11) DEFAULT NULL COMMENT '评论id'");}
if(!pdo_fieldexists('amd_qmrwtg_diszan','artid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_diszan')." ADD   `artid` int(11) DEFAULT NULL COMMENT '软文id'");}
if(!pdo_fieldexists('amd_qmrwtg_diszan','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_diszan')." ADD   `openid` varchar(200) DEFAULT NULL COMMENT '用户id'");}
if(!pdo_fieldexists('amd_qmrwtg_diszan','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_diszan')." ADD   `createtime` int(11) DEFAULT NULL COMMENT '时间'");}
if(!pdo_fieldexists('amd_qmrwtg_diszan','status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_diszan')." ADD   `status` tinyint(2) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(512) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `openid` varchar(50) DEFAULT NULL,
  `createtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_feedbacks','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_feedbacks')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_feedbacks','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_feedbacks')." ADD   `uniacid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_feedbacks','userid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_feedbacks')." ADD   `userid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_feedbacks','nickname')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_feedbacks')." ADD   `nickname` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_feedbacks','title')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_feedbacks')." ADD   `title` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_feedbacks','content')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_feedbacks')." ADD   `content` varchar(512) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_feedbacks','tel')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_feedbacks')." ADD   `tel` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_feedbacks','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_feedbacks')." ADD   `openid` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_feedbacks','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_feedbacks')." ADD   `createtime` int(11) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL COMMENT '公众号id',
  `groupname` varchar(250) NOT NULL COMMENT '分组名称',
  `createtime` int(11) DEFAULT NULL COMMENT '创建时间',
  `userid` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_group','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_group')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_group','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_group')." ADD   `uniacid` int(11) NOT NULL COMMENT '公众号id'");}
if(!pdo_fieldexists('amd_qmrwtg_group','groupname')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_group')." ADD   `groupname` varchar(250) NOT NULL COMMENT '分组名称'");}
if(!pdo_fieldexists('amd_qmrwtg_group','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_group')." ADD   `createtime` int(11) DEFAULT NULL COMMENT '创建时间'");}
if(!pdo_fieldexists('amd_qmrwtg_group','userid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_group')." ADD   `userid` longtext");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_income` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uniacid` int(11) NOT NULL COMMENT '公众号ID',
  `author_id` int(11) NOT NULL COMMENT '作者ID',
  `income_money` decimal(10,2) DEFAULT NULL COMMENT '提现金额',
  `income_time` int(11) DEFAULT NULL COMMENT '提现时间',
  `income_status` tinyint(4) DEFAULT NULL COMMENT '提现状态',
  `createtime` int(11) DEFAULT NULL COMMENT '申请提现时间',
  `transaction_id` varchar(200) DEFAULT NULL COMMENT '交易流水号',
  `batch_num` varchar(100) DEFAULT NULL COMMENT '批次号',
  `openid` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `timed` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_income','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_income')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID'");}
if(!pdo_fieldexists('amd_qmrwtg_income','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_income')." ADD   `uniacid` int(11) NOT NULL COMMENT '公众号ID'");}
if(!pdo_fieldexists('amd_qmrwtg_income','author_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_income')." ADD   `author_id` int(11) NOT NULL COMMENT '作者ID'");}
if(!pdo_fieldexists('amd_qmrwtg_income','income_money')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_income')." ADD   `income_money` decimal(10,2) DEFAULT NULL COMMENT '提现金额'");}
if(!pdo_fieldexists('amd_qmrwtg_income','income_time')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_income')." ADD   `income_time` int(11) DEFAULT NULL COMMENT '提现时间'");}
if(!pdo_fieldexists('amd_qmrwtg_income','income_status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_income')." ADD   `income_status` tinyint(4) DEFAULT NULL COMMENT '提现状态'");}
if(!pdo_fieldexists('amd_qmrwtg_income','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_income')." ADD   `createtime` int(11) DEFAULT NULL COMMENT '申请提现时间'");}
if(!pdo_fieldexists('amd_qmrwtg_income','transaction_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_income')." ADD   `transaction_id` varchar(200) DEFAULT NULL COMMENT '交易流水号'");}
if(!pdo_fieldexists('amd_qmrwtg_income','batch_num')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_income')." ADD   `batch_num` varchar(100) DEFAULT NULL COMMENT '批次号'");}
if(!pdo_fieldexists('amd_qmrwtg_income','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_income')." ADD   `openid` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_income','role_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_income')." ADD   `role_id` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_income','timed')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_income')." ADD   `timed` int(11) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(200) NOT NULL DEFAULT '',
  `displayorder` int(10) NOT NULL DEFAULT '0',
  `xian` int(1) NOT NULL DEFAULT '0',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_menu','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_menu')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_menu','weid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_menu')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_menu','title')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_menu')." ADD   `title` varchar(100) NOT NULL DEFAULT ''");}
if(!pdo_fieldexists('amd_qmrwtg_menu','url')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_menu')." ADD   `url` varchar(200) NOT NULL DEFAULT ''");}
if(!pdo_fieldexists('amd_qmrwtg_menu','displayorder')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_menu')." ADD   `displayorder` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_menu','xian')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_menu')." ADD   `xian` int(1) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_menu','thumb')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_menu')." ADD   `thumb` varchar(100) NOT NULL DEFAULT ''");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `userid` int(11) DEFAULT '0',
  `openid` varchar(50) DEFAULT NULL,
  `pushdate` varchar(32) DEFAULT NULL,
  `pushcontent` varchar(512) DEFAULT NULL,
  `createtime` int(11) DEFAULT '0',
  `pushtype` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_messages','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_messages')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_messages','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_messages')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_messages','userid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_messages')." ADD   `userid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_messages','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_messages')." ADD   `openid` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_messages','pushdate')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_messages')." ADD   `pushdate` varchar(32) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_messages','pushcontent')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_messages')." ADD   `pushcontent` varchar(512) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_messages','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_messages')." ADD   `createtime` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_messages','pushtype')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_messages')." ADD   `pushtype` varchar(16) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_money_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `out_trade_no` varchar(255) DEFAULT NULL,
  `fromopenid` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `fromtype` varchar(16) DEFAULT NULL,
  `openid` varchar(255) DEFAULT NULL,
  `money` decimal(10,2) DEFAULT '0.00',
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_money_record','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_money_record')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_money_record','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_money_record')." ADD   `uniacid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_money_record','userid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_money_record')." ADD   `userid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_money_record','out_trade_no')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_money_record')." ADD   `out_trade_no` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_money_record','fromopenid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_money_record')." ADD   `fromopenid` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_money_record','remark')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_money_record')." ADD   `remark` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_money_record','fromtype')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_money_record')." ADD   `fromtype` varchar(16) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_money_record','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_money_record')." ADD   `openid` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_money_record','money')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_money_record')." ADD   `money` decimal(10,2) DEFAULT '0.00'");}
if(!pdo_fieldexists('amd_qmrwtg_money_record','addtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_money_record')." ADD   `addtime` int(11) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `article_id` int(10) unsigned NOT NULL COMMENT '软文ID',
  `openid` varchar(40) NOT NULL COMMENT '支付人',
  `oauth_openid` varchar(40) DEFAULT NULL,
  `transaction_id` varchar(200) DEFAULT NULL COMMENT '交易流水号',
  `out_trade_no` varchar(100) DEFAULT NULL,
  `pay_money` decimal(10,2) DEFAULT '0.00' COMMENT '支付金额',
  `order_status` tinyint(3) DEFAULT '0' COMMENT '支付状态',
  `pay_time` int(11) DEFAULT NULL COMMENT '支付时间',
  `fromer` varchar(250) DEFAULT NULL COMMENT '分享者openid',
  `author_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `role_money` decimal(10,2) DEFAULT NULL,
  `serialize_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_payment','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_payment','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `uniacid` int(10) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_payment','article_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `article_id` int(10) unsigned NOT NULL COMMENT '软文ID'");}
if(!pdo_fieldexists('amd_qmrwtg_payment','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `openid` varchar(40) NOT NULL COMMENT '支付人'");}
if(!pdo_fieldexists('amd_qmrwtg_payment','oauth_openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `oauth_openid` varchar(40) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_payment','transaction_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `transaction_id` varchar(200) DEFAULT NULL COMMENT '交易流水号'");}
if(!pdo_fieldexists('amd_qmrwtg_payment','out_trade_no')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `out_trade_no` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_payment','pay_money')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `pay_money` decimal(10,2) DEFAULT '0.00' COMMENT '支付金额'");}
if(!pdo_fieldexists('amd_qmrwtg_payment','order_status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `order_status` tinyint(3) DEFAULT '0' COMMENT '支付状态'");}
if(!pdo_fieldexists('amd_qmrwtg_payment','pay_time')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `pay_time` int(11) DEFAULT NULL COMMENT '支付时间'");}
if(!pdo_fieldexists('amd_qmrwtg_payment','fromer')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `fromer` varchar(250) DEFAULT NULL COMMENT '分享者openid'");}
if(!pdo_fieldexists('amd_qmrwtg_payment','author_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `author_id` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_payment','role_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `role_id` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_payment','role_money')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `role_money` decimal(10,2) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_payment','serialize_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_payment')." ADD   `serialize_id` int(11) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_poster_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `poster_type` varchar(50) DEFAULT NULL,
  `createtime` int(11) DEFAULT NULL,
  `displayorder` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_poster_type','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_poster_type')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_poster_type','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_poster_type')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_poster_type','poster_type')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_poster_type')." ADD   `poster_type` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_poster_type','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_poster_type')." ADD   `createtime` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_poster_type','displayorder')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_poster_type')." ADD   `displayorder` int(11) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_posters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `typeid` int(11) DEFAULT NULL,
  `postertitle` varchar(50) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL,
  `clicknum` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT '2',
  `createtime` int(11) DEFAULT '0',
  `displayorder` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_posters','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_posters')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_posters','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_posters')." ADD   `uniacid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_posters','typeid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_posters')." ADD   `typeid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_posters','postertitle')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_posters')." ADD   `postertitle` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_posters','picurl')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_posters')." ADD   `picurl` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_posters','clicknum')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_posters')." ADD   `clicknum` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_posters','status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_posters')." ADD   `status` tinyint(3) DEFAULT '2'");}
if(!pdo_fieldexists('amd_qmrwtg_posters','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_posters')." ADD   `createtime` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_posters','displayorder')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_posters')." ADD   `displayorder` int(11) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_recharge` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL COMMENT '公众号ID',
  `openid` varchar(100) NOT NULL COMMENT '用户ID',
  `transaction_id` varchar(200) DEFAULT NULL COMMENT '交易流水号',
  `out_trade_no` varchar(200) DEFAULT NULL,
  `recharge` decimal(10,2) DEFAULT NULL COMMENT '购买会员的金额',
  `rec_time` int(11) DEFAULT NULL COMMENT '支付时间',
  `rec_status` tinyint(3) DEFAULT NULL COMMENT '支付状态',
  `month` int(11) DEFAULT NULL COMMENT '月份',
  `mode` int(11) NOT NULL DEFAULT '1' COMMENT '付费方式,3为年付费,2位季度付费,1位月付费',
  `fopenid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_recharge','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_recharge')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_recharge','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_recharge')." ADD   `uniacid` int(11) NOT NULL COMMENT '公众号ID'");}
if(!pdo_fieldexists('amd_qmrwtg_recharge','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_recharge')." ADD   `openid` varchar(100) NOT NULL COMMENT '用户ID'");}
if(!pdo_fieldexists('amd_qmrwtg_recharge','transaction_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_recharge')." ADD   `transaction_id` varchar(200) DEFAULT NULL COMMENT '交易流水号'");}
if(!pdo_fieldexists('amd_qmrwtg_recharge','out_trade_no')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_recharge')." ADD   `out_trade_no` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_recharge','recharge')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_recharge')." ADD   `recharge` decimal(10,2) DEFAULT NULL COMMENT '购买会员的金额'");}
if(!pdo_fieldexists('amd_qmrwtg_recharge','rec_time')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_recharge')." ADD   `rec_time` int(11) DEFAULT NULL COMMENT '支付时间'");}
if(!pdo_fieldexists('amd_qmrwtg_recharge','rec_status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_recharge')." ADD   `rec_status` tinyint(3) DEFAULT NULL COMMENT '支付状态'");}
if(!pdo_fieldexists('amd_qmrwtg_recharge','month')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_recharge')." ADD   `month` int(11) DEFAULT NULL COMMENT '月份'");}
if(!pdo_fieldexists('amd_qmrwtg_recharge','mode')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_recharge')." ADD   `mode` int(11) NOT NULL DEFAULT '1' COMMENT '付费方式,3为年付费,2位季度付费,1位月付费'");}
if(!pdo_fieldexists('amd_qmrwtg_recharge','fopenid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_recharge')." ADD   `fopenid` varchar(255) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_serialize` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uniacid` int(11) NOT NULL,
  `author_openid` varchar(255) DEFAULT NULL COMMENT 'openid',
  `author_nickname` varchar(255) DEFAULT NULL,
  `author_avatar` varchar(200) DEFAULT NULL,
  `serialize_title` varchar(200) DEFAULT NULL,
  `serialize_img` varchar(255) DEFAULT NULL,
  `serialize_desc` varchar(255) DEFAULT NULL,
  `serialize_price` varchar(255) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `pcate` int(255) DEFAULT NULL,
  `ccate` int(10) DEFAULT NULL,
  `displayorder` int(10) DEFAULT NULL,
  `pay_num` int(10) DEFAULT NULL,
  `bg_music` varchar(255) DEFAULT NULL,
  `bg_music_set` int(10) DEFAULT NULL,
  `recommend` int(10) DEFAULT '1',
  `status` int(10) DEFAULT '1',
  `clickNum` int(10) DEFAULT '0',
  `free_chapter` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_serialize','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id'");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `uniacid` int(11) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','author_openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `author_openid` varchar(255) DEFAULT NULL COMMENT 'openid'");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','author_nickname')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `author_nickname` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','author_avatar')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `author_avatar` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','serialize_title')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `serialize_title` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','serialize_img')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `serialize_img` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','serialize_desc')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `serialize_desc` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','serialize_price')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `serialize_price` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','create_time')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `create_time` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','pcate')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `pcate` int(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','ccate')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `ccate` int(10) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','displayorder')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `displayorder` int(10) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','pay_num')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `pay_num` int(10) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','bg_music')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `bg_music` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','bg_music_set')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `bg_music_set` int(10) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','recommend')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `recommend` int(10) DEFAULT '1'");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `status` int(10) DEFAULT '1'");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','clickNum')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `clickNum` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_serialize','free_chapter')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serialize')." ADD   `free_chapter` int(10) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_serializedis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `serialize_id` int(11) NOT NULL,
  `openid` varchar(100) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `discuss` varchar(255) DEFAULT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `createtime` int(11) DEFAULT NULL,
  `status` int(10) DEFAULT '1' COMMENT '2 显示   1不显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_serializedis','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializedis')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_serializedis','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializedis')." ADD   `uniacid` int(11) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serializedis','serialize_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializedis')." ADD   `serialize_id` int(11) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serializedis','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializedis')." ADD   `openid` varchar(100) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serializedis','nickname')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializedis')." ADD   `nickname` varchar(200) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serializedis','avatar')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializedis')." ADD   `avatar` varchar(255) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serializedis','discuss')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializedis')." ADD   `discuss` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serializedis','reply_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializedis')." ADD   `reply_id` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serializedis','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializedis')." ADD   `createtime` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serializedis','status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializedis')." ADD   `status` int(10) DEFAULT '1' COMMENT '2 显示   1不显示'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_serializefb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `serialize_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '专栏id',
  `clickNum` int(10) unsigned NOT NULL DEFAULT '0',
  `zanNum` int(10) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(500) NOT NULL DEFAULT '' COMMENT '缩略图',
  `description` mediumtext NOT NULL COMMENT '简介',
  `createtime` int(15) unsigned NOT NULL DEFAULT '0',
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `bg_music` varchar(250) DEFAULT NULL COMMENT '背景音乐',
  `bg_music_set` tinyint(4) DEFAULT '1' COMMENT '背景音乐开启',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '软文状态',
  `wailian` varchar(300) DEFAULT NULL COMMENT '外链',
  `appoint` tinyint(4) NOT NULL DEFAULT '1' COMMENT '指定状态',
  `free_chapter` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_serializefb','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `uniacid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','title')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `title` varchar(100) NOT NULL DEFAULT ''");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','content')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `content` mediumtext NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','serialize_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `serialize_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '专栏id'");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','clickNum')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `clickNum` int(10) unsigned NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','zanNum')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `zanNum` int(10) unsigned NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','thumb')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `thumb` varchar(500) NOT NULL DEFAULT '' COMMENT '缩略图'");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','description')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `description` mediumtext NOT NULL COMMENT '简介'");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `createtime` int(15) unsigned NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','displayorder')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序'");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','bg_music')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `bg_music` varchar(250) DEFAULT NULL COMMENT '背景音乐'");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','bg_music_set')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `bg_music_set` tinyint(4) DEFAULT '1' COMMENT '背景音乐开启'");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '软文状态'");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','wailian')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `wailian` varchar(300) DEFAULT NULL COMMENT '外链'");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','appoint')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `appoint` tinyint(4) NOT NULL DEFAULT '1' COMMENT '指定状态'");}
if(!pdo_fieldexists('amd_qmrwtg_serializefb','free_chapter')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_serializefb')." ADD   `free_chapter` int(10) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_shang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uniacid` int(11) NOT NULL COMMENT '公众号ID',
  `article_id` int(11) NOT NULL COMMENT '软文ID',
  `openid` varchar(255) DEFAULT NULL COMMENT 'openid',
  `oauth_openid` varchar(255) DEFAULT NULL COMMENT '借权openid',
  `transaction_id` varchar(200) DEFAULT NULL COMMENT '交易流水号',
  `out_trade_no` varchar(200) DEFAULT NULL,
  `shang_money` decimal(10,2) DEFAULT NULL COMMENT '支付金额',
  `shang_status` tinyint(4) DEFAULT NULL COMMENT '赞赏状态',
  `shang_time` int(11) DEFAULT NULL COMMENT '赞赏时间',
  `headimg` varchar(255) NOT NULL COMMENT '用户头像',
  `author_id` int(11) DEFAULT NULL,
  `reward_id` int(11) DEFAULT NULL,
  `special_id` int(11) DEFAULT NULL,
  `reward_num` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_shang','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id'");}
if(!pdo_fieldexists('amd_qmrwtg_shang','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `uniacid` int(11) NOT NULL COMMENT '公众号ID'");}
if(!pdo_fieldexists('amd_qmrwtg_shang','article_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `article_id` int(11) NOT NULL COMMENT '软文ID'");}
if(!pdo_fieldexists('amd_qmrwtg_shang','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `openid` varchar(255) DEFAULT NULL COMMENT 'openid'");}
if(!pdo_fieldexists('amd_qmrwtg_shang','oauth_openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `oauth_openid` varchar(255) DEFAULT NULL COMMENT '借权openid'");}
if(!pdo_fieldexists('amd_qmrwtg_shang','transaction_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `transaction_id` varchar(200) DEFAULT NULL COMMENT '交易流水号'");}
if(!pdo_fieldexists('amd_qmrwtg_shang','out_trade_no')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `out_trade_no` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_shang','shang_money')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `shang_money` decimal(10,2) DEFAULT NULL COMMENT '支付金额'");}
if(!pdo_fieldexists('amd_qmrwtg_shang','shang_status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `shang_status` tinyint(4) DEFAULT NULL COMMENT '赞赏状态'");}
if(!pdo_fieldexists('amd_qmrwtg_shang','shang_time')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `shang_time` int(11) DEFAULT NULL COMMENT '赞赏时间'");}
if(!pdo_fieldexists('amd_qmrwtg_shang','headimg')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `headimg` varchar(255) NOT NULL COMMENT '用户头像'");}
if(!pdo_fieldexists('amd_qmrwtg_shang','author_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `author_id` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_shang','reward_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `reward_id` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_shang','special_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `special_id` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_shang','reward_num')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_shang')." ADD   `reward_num` int(11) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_share` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL COMMENT '公众号ID',
  `sharetitle` varchar(255) NOT NULL COMMENT '分享标题',
  `shareimg` varchar(255) NOT NULL COMMENT '分享图片',
  `sharedesc` varchar(255) NOT NULL COMMENT '分享描述',
  `createtime` int(11) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

");

if(!pdo_fieldexists('amd_qmrwtg_share','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_share')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_share','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_share')." ADD   `uniacid` int(11) NOT NULL COMMENT '公众号ID'");}
if(!pdo_fieldexists('amd_qmrwtg_share','sharetitle')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_share')." ADD   `sharetitle` varchar(255) NOT NULL COMMENT '分享标题'");}
if(!pdo_fieldexists('amd_qmrwtg_share','shareimg')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_share')." ADD   `shareimg` varchar(255) NOT NULL COMMENT '分享图片'");}
if(!pdo_fieldexists('amd_qmrwtg_share','sharedesc')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_share')." ADD   `sharedesc` varchar(255) NOT NULL COMMENT '分享描述'");}
if(!pdo_fieldexists('amd_qmrwtg_share','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_share')." ADD   `createtime` int(11) NOT NULL COMMENT '时间'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_sharep` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL COMMENT '公众号id',
  `openid` varchar(250) NOT NULL COMMENT '用户openid',
  `share_money` decimal(10,2) DEFAULT NULL COMMENT '金额',
  `share_time` int(11) DEFAULT NULL COMMENT '时间',
  `share_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态',
  `createtime` int(11) DEFAULT NULL COMMENT '申请提现时间',
  `transaction_id` varchar(200) DEFAULT NULL COMMENT '交易流水号',
  `batch_num` varchar(200) DEFAULT NULL COMMENT '批次号',
  `nickname` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_sharep','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_sharep')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_sharep','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_sharep')." ADD   `uniacid` int(11) NOT NULL COMMENT '公众号id'");}
if(!pdo_fieldexists('amd_qmrwtg_sharep','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_sharep')." ADD   `openid` varchar(250) NOT NULL COMMENT '用户openid'");}
if(!pdo_fieldexists('amd_qmrwtg_sharep','share_money')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_sharep')." ADD   `share_money` decimal(10,2) DEFAULT NULL COMMENT '金额'");}
if(!pdo_fieldexists('amd_qmrwtg_sharep','share_time')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_sharep')." ADD   `share_time` int(11) DEFAULT NULL COMMENT '时间'");}
if(!pdo_fieldexists('amd_qmrwtg_sharep','share_status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_sharep')." ADD   `share_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态'");}
if(!pdo_fieldexists('amd_qmrwtg_sharep','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_sharep')." ADD   `createtime` int(11) DEFAULT NULL COMMENT '申请提现时间'");}
if(!pdo_fieldexists('amd_qmrwtg_sharep','transaction_id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_sharep')." ADD   `transaction_id` varchar(200) DEFAULT NULL COMMENT '交易流水号'");}
if(!pdo_fieldexists('amd_qmrwtg_sharep','batch_num')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_sharep')." ADD   `batch_num` varchar(200) DEFAULT NULL COMMENT '批次号'");}
if(!pdo_fieldexists('amd_qmrwtg_sharep','nickname')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_sharep')." ADD   `nickname` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_sharep','avatar')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_sharep')." ADD   `avatar` varchar(255) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uniacid` int(11) NOT NULL COMMENT '公众号ID',
  `openid` varchar(255) NOT NULL COMMENT '用户的ID',
  `nickname` varchar(255) NOT NULL COMMENT '用户昵称',
  `avatar` varchar(255) NOT NULL COMMENT '用户头像',
  `createtime` int(11) DEFAULT NULL COMMENT '时间',
  `realname` varchar(255) DEFAULT NULL COMMENT '姓名',
  `mobile` varchar(100) DEFAULT NULL COMMENT '手机号',
  `companyname` varchar(100) DEFAULT NULL COMMENT '所属公司',
  `desc` varchar(500) DEFAULT NULL COMMENT '详细信息',
  `info_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '用户状态信息',
  `sex` tinyint(4) DEFAULT NULL COMMENT '用户性别',
  `end_time` int(11) DEFAULT '0' COMMENT '会员到期时间',
  `mode` int(11) NOT NULL DEFAULT '1' COMMENT '付费方式,3为年付费,2位季度付费,1位月付费',
  `setmem` tinyint(4) DEFAULT NULL COMMENT '设置会员者,1为管理员,2为微信支付',
  `settime` int(11) DEFAULT NULL COMMENT '操作时间记录',
  `timeset` int(11) DEFAULT NULL COMMENT '会员时间设置',
  `zfb` varchar(255) DEFAULT NULL COMMENT '支付宝',
  `all_money` decimal(10,2) DEFAULT NULL COMMENT '总收益',
  `profit` decimal(10,2) DEFAULT NULL COMMENT '软文收益',
  `withdrawals` decimal(10,2) DEFAULT NULL COMMENT '可提现',
  `no_withdrawals` decimal(10,2) DEFAULT NULL COMMENT '已提现',
  `share_profit` decimal(10,2) DEFAULT NULL COMMENT '分享收益',
  `shang_profit` decimal(10,2) DEFAULT NULL COMMENT '打赏收益',
  `share_all` decimal(10,2) DEFAULT NULL COMMENT '分享总收益',
  `share_drawals` decimal(10,2) DEFAULT NULL COMMENT '分享提现',
  `share_nodrawals` decimal(10,2) DEFAULT NULL COMMENT '分享未提现',
  `share_vip` decimal(10,2) DEFAULT NULL,
  `ticket` varchar(255) DEFAULT NULL,
  `fopenid` varchar(255) DEFAULT NULL,
  `canpublish` tinyint(3) DEFAULT '0',
  `viptype` int(11) DEFAULT '0',
  `parentid` int(11) DEFAULT '0',
  `ishold` tinyint(3) DEFAULT '0',
  `wechat` varchar(50) DEFAULT NULL,
  `wechatewmpic` varchar(255) DEFAULT NULL,
  `cancai` tinyint(3) NOT NULL DEFAULT '0',
  `brands` varchar(255) NOT NULL DEFAULT '',
  `brandid` int(11) NOT NULL DEFAULT '0',
  `last_update_time` int(11) NOT NULL DEFAULT '0',
  `push_morning_report` tinyint(3) NOT NULL DEFAULT '1',
  `push_evening_report` tinyint(3) NOT NULL DEFAULT '1',
  `push_week_report` tinyint(3) NOT NULL DEFAULT '1',
  `push_hots` tinyint(3) NOT NULL DEFAULT '1',
  `selectcates` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=144 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_user','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID'");}
if(!pdo_fieldexists('amd_qmrwtg_user','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `uniacid` int(11) NOT NULL COMMENT '公众号ID'");}
if(!pdo_fieldexists('amd_qmrwtg_user','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `openid` varchar(255) NOT NULL COMMENT '用户的ID'");}
if(!pdo_fieldexists('amd_qmrwtg_user','nickname')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `nickname` varchar(255) NOT NULL COMMENT '用户昵称'");}
if(!pdo_fieldexists('amd_qmrwtg_user','avatar')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `avatar` varchar(255) NOT NULL COMMENT '用户头像'");}
if(!pdo_fieldexists('amd_qmrwtg_user','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `createtime` int(11) DEFAULT NULL COMMENT '时间'");}
if(!pdo_fieldexists('amd_qmrwtg_user','realname')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `realname` varchar(255) DEFAULT NULL COMMENT '姓名'");}
if(!pdo_fieldexists('amd_qmrwtg_user','mobile')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `mobile` varchar(100) DEFAULT NULL COMMENT '手机号'");}
if(!pdo_fieldexists('amd_qmrwtg_user','companyname')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `companyname` varchar(100) DEFAULT NULL COMMENT '所属公司'");}
if(!pdo_fieldexists('amd_qmrwtg_user','desc')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `desc` varchar(500) DEFAULT NULL COMMENT '详细信息'");}
if(!pdo_fieldexists('amd_qmrwtg_user','info_status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `info_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '用户状态信息'");}
if(!pdo_fieldexists('amd_qmrwtg_user','sex')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `sex` tinyint(4) DEFAULT NULL COMMENT '用户性别'");}
if(!pdo_fieldexists('amd_qmrwtg_user','end_time')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `end_time` int(11) DEFAULT '0' COMMENT '会员到期时间'");}
if(!pdo_fieldexists('amd_qmrwtg_user','mode')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `mode` int(11) NOT NULL DEFAULT '1' COMMENT '付费方式,3为年付费,2位季度付费,1位月付费'");}
if(!pdo_fieldexists('amd_qmrwtg_user','setmem')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `setmem` tinyint(4) DEFAULT NULL COMMENT '设置会员者,1为管理员,2为微信支付'");}
if(!pdo_fieldexists('amd_qmrwtg_user','settime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `settime` int(11) DEFAULT NULL COMMENT '操作时间记录'");}
if(!pdo_fieldexists('amd_qmrwtg_user','timeset')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `timeset` int(11) DEFAULT NULL COMMENT '会员时间设置'");}
if(!pdo_fieldexists('amd_qmrwtg_user','zfb')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `zfb` varchar(255) DEFAULT NULL COMMENT '支付宝'");}
if(!pdo_fieldexists('amd_qmrwtg_user','all_money')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `all_money` decimal(10,2) DEFAULT NULL COMMENT '总收益'");}
if(!pdo_fieldexists('amd_qmrwtg_user','profit')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `profit` decimal(10,2) DEFAULT NULL COMMENT '软文收益'");}
if(!pdo_fieldexists('amd_qmrwtg_user','withdrawals')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `withdrawals` decimal(10,2) DEFAULT NULL COMMENT '可提现'");}
if(!pdo_fieldexists('amd_qmrwtg_user','no_withdrawals')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `no_withdrawals` decimal(10,2) DEFAULT NULL COMMENT '已提现'");}
if(!pdo_fieldexists('amd_qmrwtg_user','share_profit')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `share_profit` decimal(10,2) DEFAULT NULL COMMENT '分享收益'");}
if(!pdo_fieldexists('amd_qmrwtg_user','shang_profit')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `shang_profit` decimal(10,2) DEFAULT NULL COMMENT '打赏收益'");}
if(!pdo_fieldexists('amd_qmrwtg_user','share_all')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `share_all` decimal(10,2) DEFAULT NULL COMMENT '分享总收益'");}
if(!pdo_fieldexists('amd_qmrwtg_user','share_drawals')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `share_drawals` decimal(10,2) DEFAULT NULL COMMENT '分享提现'");}
if(!pdo_fieldexists('amd_qmrwtg_user','share_nodrawals')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `share_nodrawals` decimal(10,2) DEFAULT NULL COMMENT '分享未提现'");}
if(!pdo_fieldexists('amd_qmrwtg_user','share_vip')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `share_vip` decimal(10,2) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_user','ticket')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `ticket` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_user','fopenid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `fopenid` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_user','canpublish')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `canpublish` tinyint(3) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_user','viptype')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `viptype` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_user','parentid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `parentid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_user','ishold')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `ishold` tinyint(3) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_user','wechat')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `wechat` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_user','wechatewmpic')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `wechatewmpic` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_user','cancai')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `cancai` tinyint(3) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_user','brands')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `brands` varchar(255) NOT NULL DEFAULT ''");}
if(!pdo_fieldexists('amd_qmrwtg_user','brandid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `brandid` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_user','last_update_time')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `last_update_time` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_user','push_morning_report')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `push_morning_report` tinyint(3) NOT NULL DEFAULT '1'");}
if(!pdo_fieldexists('amd_qmrwtg_user','push_evening_report')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `push_evening_report` tinyint(3) NOT NULL DEFAULT '1'");}
if(!pdo_fieldexists('amd_qmrwtg_user','push_week_report')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `push_week_report` tinyint(3) NOT NULL DEFAULT '1'");}
if(!pdo_fieldexists('amd_qmrwtg_user','push_hots')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `push_hots` tinyint(3) NOT NULL DEFAULT '1'");}
if(!pdo_fieldexists('amd_qmrwtg_user','selectcates')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user')." ADD   `selectcates` varchar(255) NOT NULL DEFAULT ''");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_user_share_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  `artid` int(11) DEFAULT '0',
  `createtime` int(11) DEFAULT '0',
  `frompage` varchar(50) DEFAULT NULL,
  `openid` varchar(50) DEFAULT NULL,
  `advid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_user_share_log','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user_share_log')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_user_share_log','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user_share_log')." ADD   `uniacid` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_user_share_log','userid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user_share_log')." ADD   `userid` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_user_share_log','artid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user_share_log')." ADD   `artid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_user_share_log','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user_share_log')." ADD   `createtime` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_user_share_log','frompage')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user_share_log')." ADD   `frompage` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_user_share_log','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user_share_log')." ADD   `openid` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_user_share_log','advid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_user_share_log')." ADD   `advid` int(11) NOT NULL DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_view_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `mid` int(11) NOT NULL DEFAULT '0',
  `openid` varchar(64) NOT NULL,
  `advid` int(11) NOT NULL DEFAULT '0',
  `fromurl` varchar(255) NOT NULL,
  `visiturl` varchar(255) NOT NULL,
  `createtime` int(11) NOT NULL DEFAULT '0',
  `staytime` int(11) NOT NULL DEFAULT '0',
  `leavetime` int(11) NOT NULL,
  `artid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=218 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_view_details','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_view_details')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_view_details','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_view_details')." ADD   `uniacid` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_view_details','mid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_view_details')." ADD   `mid` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_view_details','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_view_details')." ADD   `openid` varchar(64) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_view_details','advid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_view_details')." ADD   `advid` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_view_details','fromurl')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_view_details')." ADD   `fromurl` varchar(255) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_view_details','visiturl')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_view_details')." ADD   `visiturl` varchar(255) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_view_details','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_view_details')." ADD   `createtime` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_view_details','staytime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_view_details')." ADD   `staytime` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_view_details','leavetime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_view_details')." ADD   `leavetime` int(11) NOT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_view_details','artid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_view_details')." ADD   `artid` int(11) NOT NULL DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_viewlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advid` int(11) DEFAULT '0',
  `openid` varchar(50) DEFAULT NULL,
  `firsttime` int(11) DEFAULT '0',
  `endtime` int(11) DEFAULT '0',
  `viewnum` int(11) DEFAULT '0',
  `nickname` varchar(64) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `uniacid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_viewlog','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_viewlog')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_viewlog','advid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_viewlog')." ADD   `advid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_viewlog','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_viewlog')." ADD   `openid` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_viewlog','firsttime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_viewlog')." ADD   `firsttime` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_viewlog','endtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_viewlog')." ADD   `endtime` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_viewlog','viewnum')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_viewlog')." ADD   `viewnum` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_viewlog','nickname')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_viewlog')." ADD   `nickname` varchar(64) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_viewlog','avatar')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_viewlog')." ADD   `avatar` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_viewlog','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_viewlog')." ADD   `uniacid` int(11) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_vipconfig` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `day` int(10) DEFAULT NULL,
  `money` decimal(10,2) DEFAULT NULL,
  `status` tinyint(3) DEFAULT '1' COMMENT '1=显示，2=隐藏',
  `type` tinyint(3) DEFAULT '0' COMMENT '0=普通；1=永久',
  `canpublish` tinyint(3) DEFAULT '0',
  `cancai` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtg_vipconfig','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_vipconfig')." ADD 
  `id` int(10) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('amd_qmrwtg_vipconfig','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_vipconfig')." ADD   `uniacid` int(10) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_vipconfig','title')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_vipconfig')." ADD   `title` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_vipconfig','day')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_vipconfig')." ADD   `day` int(10) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_vipconfig','money')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_vipconfig')." ADD   `money` decimal(10,2) DEFAULT NULL");}
if(!pdo_fieldexists('amd_qmrwtg_vipconfig','status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_vipconfig')." ADD   `status` tinyint(3) DEFAULT '1' COMMENT '1=显示，2=隐藏'");}
if(!pdo_fieldexists('amd_qmrwtg_vipconfig','type')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_vipconfig')." ADD   `type` tinyint(3) DEFAULT '0' COMMENT '0=普通；1=永久'");}
if(!pdo_fieldexists('amd_qmrwtg_vipconfig','canpublish')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_vipconfig')." ADD   `canpublish` tinyint(3) DEFAULT '0'");}
if(!pdo_fieldexists('amd_qmrwtg_vipconfig','cancai')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtg_vipconfig')." ADD   `cancai` tinyint(3) NOT NULL DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtglike` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '点赞ID',
  `tid` int(11) NOT NULL COMMENT '软文ID',
  `uniacid` int(11) NOT NULL COMMENT '公众号ID',
  `openid` varchar(255) NOT NULL COMMENT '用户ID',
  `likenum` int(11) NOT NULL COMMENT '点赞次数',
  `createtime` int(11) NOT NULL COMMENT '点赞时间',
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('amd_qmrwtglike','id')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtglike')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '点赞ID'");}
if(!pdo_fieldexists('amd_qmrwtglike','tid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtglike')." ADD   `tid` int(11) NOT NULL COMMENT '软文ID'");}
if(!pdo_fieldexists('amd_qmrwtglike','uniacid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtglike')." ADD   `uniacid` int(11) NOT NULL COMMENT '公众号ID'");}
if(!pdo_fieldexists('amd_qmrwtglike','openid')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtglike')." ADD   `openid` varchar(255) NOT NULL COMMENT '用户ID'");}
if(!pdo_fieldexists('amd_qmrwtglike','likenum')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtglike')." ADD   `likenum` int(11) NOT NULL COMMENT '点赞次数'");}
if(!pdo_fieldexists('amd_qmrwtglike','createtime')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtglike')." ADD   `createtime` int(11) NOT NULL COMMENT '点赞时间'");}
if(!pdo_fieldexists('amd_qmrwtglike','status')) {pdo_query("ALTER TABLE ".tablename('amd_qmrwtglike')." ADD   `status` tinyint(2) DEFAULT NULL");}
