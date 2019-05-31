
CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_adv` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_author` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_brands` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_category` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_collect` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_dis` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_diszan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL COMMENT '公众号ID',
  `disid` int(11) DEFAULT NULL COMMENT '评论id',
  `artid` int(11) DEFAULT NULL COMMENT '软文id',
  `openid` varchar(200) DEFAULT NULL COMMENT '用户id',
  `createtime` int(11) DEFAULT NULL COMMENT '时间',
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_feedbacks` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL COMMENT '公众号id',
  `groupname` varchar(250) NOT NULL COMMENT '分组名称',
  `createtime` int(11) DEFAULT NULL COMMENT '创建时间',
  `userid` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_income` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(200) NOT NULL DEFAULT '',
  `displayorder` int(10) NOT NULL DEFAULT '0',
  `xian` int(1) NOT NULL DEFAULT '0',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_messages` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_money_record` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_payment` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_poster_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `poster_type` varchar(50) DEFAULT NULL,
  `createtime` int(11) DEFAULT NULL,
  `displayorder` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_posters` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_recharge` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_serialize` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_serializedis` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_serializefb` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_shang` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_share` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL COMMENT '公众号ID',
  `sharetitle` varchar(255) NOT NULL COMMENT '分享标题',
  `shareimg` varchar(255) NOT NULL COMMENT '分享图片',
  `sharedesc` varchar(255) NOT NULL COMMENT '分享描述',
  `createtime` int(11) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_sharep` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_user` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_user_share_log` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_view_details` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_viewlog` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtg_vipconfig` (
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


CREATE TABLE IF NOT EXISTS `ims_amd_qmrwtglike` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '点赞ID',
  `tid` int(11) NOT NULL COMMENT '软文ID',
  `uniacid` int(11) NOT NULL COMMENT '公众号ID',
  `openid` varchar(255) NOT NULL COMMENT '用户ID',
  `likenum` int(11) NOT NULL COMMENT '点赞次数',
  `createtime` int(11) NOT NULL COMMENT '点赞时间',
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

