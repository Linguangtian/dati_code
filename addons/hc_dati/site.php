<?php

/**

 *www.qitu pic

 *

 * www.qitu pic

 * @url 

 */

defined('IN_IA') or exit('Access Denied');

class Hc_datiModuleSite extends WeModuleSite

{



    public function doWebUsers()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $condition = "";

        if(!empty($_GPC['keyword'])){

            if(!empty($_GPC['status'])){

                $condition .= '%'.$_GPC['keyword'].'%';

                $status=$_GPC['status'];

                if($status==1){

                    $sta=0;

                }else{

                    $sta=1;

                }

                $users = pdo_getslice('dati_users', array('uniacid' => $_W['uniacid'],'nick_name like' => $condition,'status'=>$sta), array($pindex, $psize), $total, array(), '', array('user_id desc'));

            }else{

                $condition .= '%'.$_GPC['keyword'].'%';

                $users = pdo_getslice('dati_users', array('uniacid' => $_W['uniacid'],'nick_name like' => $condition), array($pindex, $psize), $total, array(), '', array('user_id desc'));

            }



        }else{

            if(!empty($_GPC['status'])){

                $status=$_GPC['status'];

                if($status==1){

                    $sta=0;

                }else{

                    $sta=1;

                }

                $users = pdo_getslice('dati_users', array('uniacid' => $_W['uniacid'],'status'=>$sta), array($pindex, $psize), $total, array(), '', array('user_id desc'));

            }else{

                $users = pdo_getslice('dati_users', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('user_id desc'));

            }

        }

        for ($i = 0; $i < count($users); $i++) {

            if ($users[$i]['zhuangtai'] == 0) {

                $users[$i]['zhuangtai'] = '虚拟用户';

            } else {

                $users[$i]['zhuangtai'] = '真实用户';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/users");

    }



    public function doWebAddusers()

    {

        global $_W, $_GPC;

        //这个操作被定义用来呈现 管理中心导航菜单

        if (!empty($_GPC['name'])) {

            $data['nick_name'] = $_GPC['name'];

            $data['uniacid'] = $_W['uniacid'];

            $data['dati_sum'] = $_GPC['dati_sum'];

            $data['dati_success'] = $_GPC['dati_success'];

            $data['head_pic'] = $_W['attachurl'] . $_GPC['thumb'];

            $data['zhuangtai'] = 0;

            pdo_insert('dati_users', $data);

        }

        include $this->template("web/addusers");

    }



    public function doWebEditusers()

    {

        global $_W, $_GPC;

        $id = $_GPC['id'];

        if (!empty($_GPC['name'])) {

            $data['nick_name'] = $_GPC['name'];

            $data['uniacid'] = $_W['uniacid'];

            $data['dati_sum'] = $_GPC['dati_sum'];

            $data['dati_success'] = $_GPC['dati_success'];

            $data['dati_jihui'] = $_GPC['dati_jihui'];

            $data['status'] = $_GPC['status'];

            pdo_update('dati_users', $data, array('user_id' => $id));

        }

        $jiangpin = pdo_get('dati_users', array('user_id' => $id));

        if ($jiangpin['status'] == 1) {

            $xianshi1 = 'checked="checked"';

            $xianshi2 = '';

        } else {

            $xianshi1 = '';

            $xianshi2 = 'checked="checked"';

        }

        include $this->template("web/editusers");

    }



    public function doWebDeleteusers()

    {

        global $_W, $_GPC;

        $id = $_GPC['id'];

        pdo_delete('dati_users', array('user_id' => $id));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $users = pdo_getslice('dati_users', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('user_id desc'));

        for ($i = 0; $i < count($users); $i++) {

            if ($users[$i]['zhuangtai'] == 0) {

                $users[$i]['zhuangtai'] = '虚拟用户';

            } else {

                $users[$i]['zhuangtai'] = '真实用户';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/users");

    }



    public function doWebJichu()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));

        if (!empty($_GPC['toubu'])) {

            $data['toubu'] = $_GPC['toubu'];

            $data['lianxi'] = $_GPC['lianxi'];

            if (!empty($_GPC['zhifu'])) {

                $data['zhifu_status'] = 0;

                $data['zhifu'] = $_GPC['zhifu'];

            } else {

                $data['zhifu_status'] = $_GPC['zhifu_status'];

                $data['zhifu'] = '';



            }

            $data['daohang_status'] = $_GPC['daohang_status'];

            if (!empty($_GPC['daohang'])) {

                $data['daohang_status'] = 0;

                $data['daohang'] = $_GPC['daohang'];

            } else {

                $data['daohang_status'] = $_GPC['daohang_status'];

                $data['daohang'] = '';

            }

            $data['xuni_meb'] = $_GPC['xuni_meb'];

            $data['xuni_status'] = $_GPC['xuni_status'];

            $data['shuzi'] = $_GPC['shuzi'];

            $data['msgid'] = $_GPC['msgid'];

            $data['msgstr'] = $_GPC['msgstr'];

            $data['guize1'] = $_GPC['guize1'];

            $data['guize2'] = $_GPC['guize2'];

            $data['guize3'] = $_GPC['guize3'];

            $data['guize4'] = $_GPC['guize4'];

            $data['mp3_url'] = $_GPC['mp3_url'];

            $data['kefu_title'] = $_GPC['kefu_title'];

            $data['kefu_img'] = $_GPC['kefu_img'];

            $data['kefu_miaosu'] = $_GPC['kefu_miaosu'];

            $data['kefu_url'] = $_GPC['kefu_url'];

            $data['suiji_status'] = $_GPC['suiji_status'];

            $data['youxi_toubu'] = $_GPC['youxi_toubu'];

            $data['zhuanfa_title'] = $_GPC['zhuanfa_title'];

            $data['tongcheng'] = $_GPC['tongcheng'];

            $data['jiazhi'] = $_GPC['jiazhi'];

            $data['xcx_name'] = $_GPC['xcx_name'];

            $data['time'] = $_GPC['time'];

            $data['stake'] = $_GPC['stake'];

            $data['zhuanfacishu'] = $_GPC['zhuanfacishu'];

            $data['chushicishu'] = $_GPC['chushicishu'];

            $data['fenlei'] = $_GPC['fenlei'];

            $data['fenlei_status'] = $_GPC['fenlei_status'];

            $data['jiandan'] = $_GPC['jiandan'];

            $data['zhongdeng'] = $_GPC['zhongdeng'];

            $data['kunnan'] = $_GPC['kunnan'];

            $data['danhao'] = $_GPC['danhao'];

            $data['gongsi'] = $_GPC['gongsi'];

            $data['fenleiname'] = $_GPC['fenleiname'];

            $data['zhuanfa_img'] = $_GPC['zhuanfa_img'];

            $data['gongzhong_img'] = $_GPC['gongzhong_img'];

            $data['guanggaostr'] = $_GPC['guanggaostr'];

            $data['huodejihuistr'] = $_GPC['huodejihuistr'];

            $data['huodejihuititle'] = $_GPC['huodejihuititle'];

            $data['zhuanfa_jihui'] = $_GPC['zhuanfa_jihui'];

            $data['huodejihuitext'] = $_GPC['huodejihuitext'];

            $data['tupian'] = $_GPC['tupian'];

            $data['yinyue'] = $_GPC['yinyue'];

            $data['tupian_time'] = $_GPC['tupian_time'];

            $data['yinyue_time'] = $_GPC['yinyue_time'];

            $data['hexiao_str1'] = $_GPC['hexiao_str1'];

            $data['hexiao_str2'] = $_GPC['hexiao_str2'];

            $data['fuzhi'] = $_GPC['fuzhi'];

            $data['gonggao'] = $_GPC['gonggao'];

            $data['ald_key'] = $_GPC['ald_key'];

            $data['shenhe_status'] = $_GPC['shenhe_status'];



            $data['guanggao1_appid'] = $_GPC['guanggao1_appid'];

            $data['guanggao2_appid'] = $_GPC['guanggao2_appid'];

            $data['guanggao3_appid'] = $_GPC['guanggao3_appid'];

            $data['guanggao1_page'] = $_GPC['guanggao1_page'];

            $data['guanggao2_page'] = $_GPC['guanggao2_page'];

            $data['guanggao3_page'] = $_GPC['guanggao3_page'];

            $data['guanggao1_img'] = $_GPC['guanggao1_img'];

            $data['guanggao2_img'] = $_GPC['guanggao2_img'];

            $data['guanggao3_img'] = $_GPC['guanggao3_img'];

            $data['guanggao1_shenhe'] = $_GPC['guanggao1_shenhe'];

            $data['guanggao2_shenhe'] = $_GPC['guanggao2_shenhe'];

            $data['guanggao3_shenhe'] = $_GPC['guanggao3_shenhe'];



            $data['pay_status'] = $_GPC['pay_status'];

            $data['tl_cusid'] = $_GPC['tl_cusid'];

            $data['tl_appid'] = $_GPC['tl_appid'];

            $data['tl_miyao'] = $_GPC['tl_miyao'];

            $data['gr_pid'] = $_GPC['gr_pid'];



            $data['shouyename'] = $_GPC['shouyename'];

            $data['paihangbangname'] = $_GPC['paihangbangname'];

            $data['wodename'] = $_GPC['wodename'];

            $data['shouye_img'] = $_GPC['shouye_img'];

            $data['paihangbang_img'] = $_GPC['paihangbang_img'];

            $data['fenlei_img'] = $_GPC['fenlei_img'];

            $data['wode_img'] = $_GPC['wode_img'];

            $data['bg_color'] = $_GPC['bg_color'];

            $data['lahei_status'] = $_GPC['lahei_status'];

            $data['dibu_color'] = $_GPC['dibu_color'];

            $data['today_jihui']=$_GPC['today_jihui'];



            $data['guanzhu_str']=$_GPC['guanzhu_str'];

            $data['fenlei_bgimg']=$_GPC['fenlei_bgimg'];

            $data['yanse_bg']=$_GPC['yanse_bg'];

            $data['xsjiangpin_status']=$_GPC['xsjiangpin_status'];



            $data['wodejiangpin_pic']=$_GPC['wodejiangpin_pic'];

            $data['lianxiwomen_pic']=$_GPC['lianxiwomen_pic'];



            $data['liuliangzhu']=$_GPC['liuliangzhu'];

            $data['pxbpx_bkg']=$_GPC['pxbpx_bkg'];

            $data['zhuanfaqun']=$_GPC['zhuanfaqun'];

            $data['toubu_color']=$_GPC['toubu_color'];

            $data['yinyue_end_time']=$_GPC['yinyue_end_time'];

            $data['qiniu_url']=$_GPC['qiniu_url'];

            $data['denglu_bgk']=$_GPC['denglu_bgk'];

            $data['fuhuo_money']=$_GPC['fuhuo_money'];

            $data['fuhuo_text']=$_GPC['fuhuo_text'];

            $data['fh_zhuanfa_img']=$_GPC['fh_zhuanfa_img'];

            $data['fh_zhifu_img']=$_GPC['fh_zhifu_img'];

            $data['fh_zhifu_status']=$_GPC['fh_zhifu_status'];

            $data['jieguo_msg']=$_GPC['jieguo_msg'];
            $msgstr['msgstr_name'] = $_GPC['msgstr_name'];
            $msgstr['msgstr_guoqi'] = $_GPC['msgstr_guoqi'];
            $msgstr['msgstr_paihangbang'] = $_GPC['msgstr_paihangbang'];
            $data['msgstr']=json_encode($msgstr);

            if (empty($setup)) {

                $data['uniacid'] = $_W['uniacid'];

                pdo_insert('dati_setup', $data);

            } else {

                pdo_update('dati_setup', $data, array('uniacid' => $_W['uniacid']));

            }

        }

        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));
        $setup['msgstr']=json_decode($setup['msgstr'],true);
        if ($setup['xuni_status'] == 1) {

            $xianshi1 = 'checked="checked"';

            $xianshi2 = '';

        } else {

            $xianshi1 = '';

            $xianshi2 = 'checked="checked"';

        }



        if ($setup['stake'] == 1) {

            $stake1 = 'checked="checked"';

            $stake2 = '';

        } else {

            $stake1 = '';

            $stake2 = 'checked="checked"';

        }



        if ($setup['suiji_status'] == 1) {

            $suiji1 = 'checked="checked"';

            $suiji2 = '';

        } else {

            $suiji1 = '';

            $suiji2 = 'checked="checked"';

        }



        if ($setup['fenlei'] == 1) {

            $fenlei1 = 'checked="checked"';

            $fenlei2 = '';

        } else {

            $fenlei1 = '';

            $fenlei2 = 'checked="checked"';

        }



        if ($setup['shenhe_status'] == 1) {

            $shenhe_status1 = 'checked="checked"';

            $shenhe_status2 = '';

        } else {

            $shenhe_status1 = '';

            $shenhe_status2 = 'checked="checked"';

        }



        if ($setup['lahei_status'] == 1) {

            $lahei_status1 = 'checked="checked"';

            $lahei_status2 = '';

        } else {

            $lahei_status1 = '';

            $lahei_status2 = 'checked="checked"';

        }



        if ($setup['guanggao1_shenhe'] == 1) {

            $guanggao1_shenhe1 = 'checked="checked"';

            $guanggao1_shenhe2 = '';

        } else {

            $guanggao1_shenhe1 = '';

            $guanggao1_shenhe2 = 'checked="checked"';

        }



        if ($setup['guanggao2_shenhe'] == 1) {

            $guanggao2_shenhe1 = 'checked="checked"';

            $guanggao2_shenhe2 = '';

        } else {

            $guanggao2_shenhe1 = '';

            $guanggao2_shenhe2 = 'checked="checked"';

        }



        if ($setup['guanggao3_shenhe'] == 1) {

            $guanggao3_shenhe1 = 'checked="checked"';

            $guanggao3_shenhe2 = '';

        } else {

            $guanggao3_shenhe1 = '';

            $guanggao3_shenhe2 = 'checked="checked"';

        }



        if ($setup['xsjiangpin_status'] == 1) {

            $xsjiangpin_status1 = 'checked="checked"';

            $xsjiangpin_status2 = '';

        } else {

            $xsjiangpin_status1 = '';

            $xsjiangpin_status2 = 'checked="checked"';

        }



        if ($setup['fh_zhifu_status'] == 1) {

            $fh_zhifu_status1 = 'checked="checked"';

            $fh_zhifu_status2 = '';

        } else {

            $fh_zhifu_status1 = '';

            $fh_zhifu_status2 = 'checked="checked"';

        }



        if ($setup['zhifu_status'] == 1) {

            $zf1 = 'quia';

        }

        if ($setup['zhifu_status'] == 2) {

            $zf2 = 'quia';

        }

        if ($setup['zhifu_status'] == 3) {

            $zf3 = 'quia';

        }

        if ($setup['zhifu_status'] == 4) {

            $zf4 = 'quia';

        }

        if ($setup['zhifu_status'] == 5) {

            $zf5 = 'quia';

        }

        if ($setup['daohang_status'] == 1) {

            $dh1 = 'quia';

        }

        if ($setup['daohang_status'] == 2) {

            $dh2 = 'quia';

        }

        if ($setup['daohang_status'] == 3) {

            $dh3 = 'quia';

        }

        if ($setup['daohang_status'] == 4) {

            $dh4 = 'quia';

        }

        include $this->template("web/jichu");

    }



    public function doWebJilu()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $canyu = pdo_getslice('dati_canyu', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('id desc'));

        for ($i = 0; $i < count($canyu); $i++) {

            $user = pdo_get('dati_users', array('user_id' => $canyu[$i]['user_id']));

            $canyu[$i]['name'] = $user['nick_name'];

            $canyu[$i]['head_pic'] = $user['head_pic'];

            $canyu[$i]['starttime'] = date('Y-m-d H:i:s', $canyu[$i]['starttime']);

            if (empty($canyu[$i]['endtime'])) {

                $canyu[$i]['endtime'] = $canyu[$i]['starttime'];

            } else {

                $canyu[$i]['endtime'] = date('Y-m-d H:i:s', $canyu[$i]['endtime']);

            }

            if ($canyu[$i]['status'] == 1) {

                $canyu[$i]['status'] = '成功';

            } else {

                $canyu[$i]['status'] = '失败';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/canyu");

    }



    public function doWebJiangpin()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $jiangpin = pdo_getslice('dati_jiangpin', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($jiangpin); $i++) {

            if ($jiangpin[$i]['stact'] == 0) {

                $jiangpin[$i]['stact'] = '下架';

            } else {

                $jiangpin[$i]['stact'] = '上架';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/jiangpin");

    }



    public function doWebAddjiangpin()

    {

        global $_W, $_GPC;

        //这个操作被定义用来呈现 管理中心导航菜单

        if (!empty($_GPC['name'])) {

            $data['name'] = $_GPC['name'];

            $data['uniacid'] = $_W['uniacid'];

            $data['sort'] = $_GPC['sort'];

            $data['stact'] = $_GPC['stact'];

            $data['thumb'] = $_GPC['thumb'];

            $data['content'] = $_GPC['content'];

            $data['jiangpin_status'] = $_GPC['jiangpin_status'];

            pdo_insert('dati_jiangpin', $data);

        }

        include $this->template("web/addjiangpin");

    }



    public function doWebEditjiangpin()

    {

        global $_W, $_GPC;

        $id = $_GPC['id'];

        if (!empty($_GPC['name'])) {

            $data['name'] = $_GPC['name'];

            $data['uniacid'] = $_W['uniacid'];

            $data['sort'] = $_GPC['sort'];

            $data['stact'] = $_GPC['stact'];

            $data['thumb'] = $_GPC['thumb'];

            $data['content'] = $_GPC['content'];

            $data['jiangpin_status'] = $_GPC['jiangpin_status'];

            pdo_update('dati_jiangpin', $data, array('id' => $id));

        }

        $jiangpin = pdo_get('dati_jiangpin', array('id' => $id));

        include $this->template("web/editjiangpin");

    }



    public function doWebDeletejiangpin()

    {

        global $_W, $_GPC;

        pdo_delete('dati_jiangpin', array('id' => $_GPC['id']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $jiangpin = pdo_getslice('dati_jiangpin', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($jiangpin); $i++) {

            if ($jiangpin[$i]['stact'] == 0) {

                $jiangpin[$i]['stact'] = '下架';

            } else {

                $jiangpin[$i]['stact'] = '上架';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/jiangpin");

    }



    public function doWebFafang()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $condition='';

        if(!empty($_GPC['keyword'])){

            $condition .= '%'.$_GPC['keyword'].'%';

            $lingjiang = pdo_getslice('dati_lingjiang', array('uniacid' => $_W['uniacid'],'jiangpin_status'=>0,'userName like' => $condition), array($pindex, $psize), $total, array(), '', array('id desc'));

        }else{

            $lingjiang = pdo_getslice('dati_lingjiang', array('uniacid' => $_W['uniacid'],'jiangpin_status'=>0), array($pindex, $psize), $total, array(), '', array('status asc'));

        }

        for ($i = 0; $i < count($lingjiang); $i++) {

            $lingjiang[$i]['address'] = $lingjiang[$i]['provinceName'] . $lingjiang[$i]['cityName'] . $lingjiang[$i]['countyName'] . $lingjiang[$i]['detailInfo'];

            if ($lingjiang[$i]['status'] == 0) {

                $lingjiang[$i]['stact'] = '未发货';

            } else {

                $lingjiang[$i]['stact'] = '已发货';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));

        $danhao=$setup['danhao'];

        $gongsi=$setup['gongsi'];

        include $this->template("web/fafang");

    }



    public function doWebEditlingjiang()

    {

        global $_W, $_GPC;

        $id = $_GPC['id'];

        if (!empty($_GPC['kuaididan'])) {

            $data['kuaididan'] = $_GPC['kuaididan'];

            $data['kuaidigongsi'] = $_GPC['kuaidigongsi'];

            $data['status'] = 1;

            pdo_update('dati_lingjiang', $data, array('id' => $id));

        }

        $jiangpin = pdo_get('dati_lingjiang', array('id' => $id));

        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));

        $danhao=$setup['danhao'];

        $gongsi=$setup['gongsi'];

        include $this->template("web/editlingjiang");

    }



    public function doWebDeletelingjiang()

    {

        global $_W, $_GPC;

        pdo_delete('dati_lingjiang', array('id' => $_GPC['id']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $lingjiang = pdo_getslice('dati_lingjiang', array('uniacid' => $_W['uniacid'],'jiangpin_status'=>0), array($pindex, $psize), $total, array(), '', array('id desc'));

        for ($i = 0; $i < count($lingjiang); $i++) {

            $lingjiang[$i]['address'] = $lingjiang[$i]['provinceName'] . $lingjiang[$i]['cityName'] . $lingjiang[$i]['countyName'] . $lingjiang[$i]['detailInfo'];

            if ($lingjiang[$i]['status'] == 0) {

                $lingjiang[$i]['stact'] = '未发货';

            } else {

                $lingjiang[$i]['stact'] = '已发货';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));

        $danhao=$setup['danhao'];

        $gongsi=$setup['gongsi'];

        include $this->template("web/fafang");

    }



    public function doWebGoods()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $goods = pdo_getslice('dati_goods', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort'));

        for ($i = 0; $i < count($goods); $i++) {

            if ($goods[$i]['status'] == 0) {

                $goods[$i]['status'] = '下架';

            } else {

                $goods[$i]['status'] = '上架';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/goods");

    }



    public function doWebAddgoods()

    {

        global $_W, $_GPC;

        //这个操作被定义用来呈现 管理中心导航菜单

        if (!empty($_GPC['name'])) {

            $data['name'] = $_GPC['name'];

            $data['uniacid'] = $_W['uniacid'];

            $data['sort'] = $_GPC['sort'];

            $data['status'] = $_GPC['status'];

            $data['miaosu'] = $_GPC['miaosu'];

            $data['yuanjia'] = $_GPC['yuanjia'];

            $data['xianjia'] = $_GPC['xianjia'];

            $data['cishu'] = $_GPC['cishu'];

            $data['img'] = $_GPC['img'];

            $data['gr_title'] = $_GPC['gr_title'];

            $data['gr_miaosu'] = $_GPC['gr_miaosu'];

            pdo_insert('dati_goods', $data);

        }

        include $this->template("web/addgoods");

    }



    public function doWebEditgoods()

    {

        global $_W, $_GPC;

        $id = $_GPC['goods_id'];

        if (!empty($_GPC['name'])) {

            $data['name'] = $_GPC['name'];

            $data['uniacid'] = $_W['uniacid'];

            $data['sort'] = $_GPC['sort'];

            $data['status'] = $_GPC['status'];

            $data['miaosu'] = $_GPC['miaosu'];

            $data['yuanjia'] = $_GPC['yuanjia'];

            $data['xianjia'] = $_GPC['xianjia'];

            $data['cishu'] = $_GPC['cishu'];

            $data['img'] = $_GPC['img'];

            $data['gr_title'] = $_GPC['gr_title'];

            $data['gr_miaosu'] = $_GPC['gr_miaosu'];

            pdo_update('dati_goods', $data, array('goods_id' => $id));

        }

        $goods = pdo_get('dati_goods', array('goods_id' => $id));

        include $this->template("web/editgoods");

    }



    public function doWebDeletegoods()

    {

        global $_W, $_GPC;

        pdo_delete('dati_goods', array('goods_id' => $_GPC['goods_id']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $goods = pdo_getslice('dati_goods', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($goods); $i++) {

            if ($goods[$i]['status'] == 0) {

                $goods[$i]['status'] = '下架';

            } else {

                $goods[$i]['status'] = '上架';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/goods");

    }



    public function doWebOrder()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $order = pdo_getslice('dati_order', array('uniacid' => $_W['uniacid'], 'pay_status' => 1), array($pindex, $psize), $total, array(), '', array('order_id desc'));

        for ($i = 0; $i < count($order); $i++) {

            $user = pdo_get('dati_users', array('open_id' => $order[$i]['open_id']));

            $order[$i]['name'] = $user['nick_name'];

            $order[$i]['pay_time'] = date('Y-m-d H:i:s', $order[$i]['pay_time']);

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/order");

    }



    public function doWebGuanggao()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $guanggao = pdo_getslice('dati_guanggao', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($guanggao); $i++) {

            if ($guanggao[$i]['status'] == 0) {

                $guanggao[$i]['status'] = '下架';

            } else {

                $guanggao[$i]['status'] = '上架';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/guanggao");

    }



    public function doWebAddguanggao()

    {

        global $_W, $_GPC;

        //这个操作被定义用来呈现 管理中心导航菜单

        if (!empty($_GPC['name'])) {

            $data['name'] = $_GPC['name'];

            $data['uniacid'] = $_W['uniacid'];

            $data['miaosu'] = $_GPC['miaosu'];

            $data['sort'] = $_GPC['sort'];

            $data['appid'] = $_GPC['appid'];

            $data['page'] = $_GPC['page'];

            $data['status'] = $_GPC['status'];

            $data['img'] = $_GPC['img'];

            pdo_insert('dati_guanggao', $data);

        }

        include $this->template("web/addguanggao");

    }



    public function doWebEditguanggao()

    {

        global $_W, $_GPC;

        $id = $_GPC['id'];

        if (!empty($_GPC['name'])) {

            $data['name'] = $_GPC['name'];

            $data['uniacid'] = $_W['uniacid'];

            $data['miaosu'] = $_GPC['miaosu'];

            $data['sort'] = $_GPC['sort'];

            $data['appid'] = $_GPC['appid'];

            $data['page'] = $_GPC['page'];

            $data['status'] = $_GPC['status'];

            $data['img'] = $_GPC['img'];

            pdo_update('dati_guanggao', $data, array('id' => $id));

        }

        $guanggao = pdo_get('dati_guanggao', array('id' => $id));

        include $this->template("web/editguanggao");

    }



    public function doWebDeleteguanggao()

    {

        global $_W, $_GPC;

        pdo_delete('dati_guanggao', array('id' => $_GPC['id']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $guanggao = pdo_getslice('dati_guanggao', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($guanggao); $i++) {

            if ($guanggao[$i]['status'] == 0) {

                $guanggao[$i]['status'] = '下架';

            } else {

                $guanggao[$i]['status'] = '上架';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/guanggao");

    }



    public function doWebTiku()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $condition='';

        if(!empty($_GPC['keyword'])){

            $condition .= '%'.$_GPC['keyword'].'%';

            $tiku = pdo_getslice('dati_tiku', array('uniacid' => $_W['uniacid'],'timu like'=>$condition), array($pindex, $psize), $total, array(), '', array(''));

        }else{

            $tiku = pdo_getslice('dati_tiku', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array(''));

        }

        for ($i = 0; $i < count($tiku); $i++) {

            $fenlei = pdo_get('dati_fenlei', array('id' => $tiku[$i]['fenlei']));

            $tiku[$i]['fenlei'] = $fenlei['name'];

            if($tiku[$i]['nandu']==1){

                $tiku[$i]['nandu']='简单';

            }

            if($tiku[$i]['nandu']==2){

                $tiku[$i]['nandu']='一般';

            }

            if($tiku[$i]['nandu']==3){

                $tiku[$i]['nandu']='困难';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/tiku");

    }



    public function doWebFenlei()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $fenlei = pdo_getslice('dati_fenlei', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($fenlei); $i++) {

            if ($fenlei[$i]['status'] == 0) {

                $fenlei[$i]['status'] = '下架';

            } else {

                $fenlei[$i]['status'] = '上架';

            }

        }

        $pager = pagination($total, $pindex, $psize);



        include $this->template("web/fenlei");

    }



    public function doWebAddfenlei()

    {

        global $_W, $_GPC;

        //这个操作被定义用来呈现 管理中心导航菜单

        if (!empty($_GPC['name'])) {

            $data['name'] = $_GPC['name'];

            $data['uniacid'] = $_W['uniacid'];

            $data['sort'] = $_GPC['sort'];

            $data['status'] = $_GPC['status'];

            $data['bg_img'] = $_GPC['bg_img'];

            $data['img'] = $_GPC['img'];

            $data['img1'] = $_GPC['img1'];

            $data['img2'] = $_GPC['img2'];

            $data['img3'] = $_GPC['img3'];

            pdo_insert('dati_fenlei', $data);

        }

        include $this->template("web/addfenlei");

    }



    public function doWebEditfenlei()

    {

        global $_W, $_GPC;

        $id = $_GPC['id'];

        if (!empty($_GPC['name'])) {

            $data['name'] = $_GPC['name'];

            $data['uniacid'] = $_W['uniacid'];

            $data['sort'] = $_GPC['sort'];

            $data['status'] = $_GPC['status'];

            $data['bg_img'] = $_GPC['bg_img'];

            $data['img'] = $_GPC['img'];

            $data['img1'] = $_GPC['img1'];

            $data['img2'] = $_GPC['img2'];

            $data['img3'] = $_GPC['img3'];

            pdo_update('dati_fenlei', $data, array('id' => $id));

        }

        $fenlei = pdo_get('dati_fenlei', array('id' => $id));

        include $this->template("web/editfenlei");

    }



    public function doWebDeletefenlei()

    {

        global $_W, $_GPC;

        pdo_delete('dati_fenlei', array('id' => $_GPC['id']));

        pdo_delete('dati_tiku', array('uniacid' => $_W['uniacid'],'fenlei'=>$_GPC['id']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $fenlei = pdo_getslice('dati_fenlei', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($fenlei); $i++) {

            if ($fenlei[$i]['status'] == 0) {

                $fenlei[$i]['status'] = '下架';

            } else {

                $fenlei[$i]['status'] = '上架';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/fenlei");

    }





    function doWebImport()

    {

        //自己设置的上传文件存放路径

        global $_W, $_GPC;

        //下面的路径按照你PHPExcel的路径来修改

        load()->library('phpexcel/PHPExcel');

//        load()->library('phpexcel/PHPExcel/IOFactory.php');

//        load()->library('phpexcel/PHPExcel/Reader/Excel2007.php');

        if(@is_uploaded_file($_FILES['upfile']['tmp_name'])){

            $upfile=$_FILES["upfile"];

            //获取数组里面的值

            $name=$upfile["name"];//上传文件的文件名

            $type=$upfile["type"];//上传文件的类型

            $size=$upfile["size"];//上传文件的大小

            $tmp_name=$upfile["tmp_name"];//上传文件的临时存放路径

            move_uploaded_file($tmp_name,dirname(__FILE__).$name);//将上传到服务器临时文件夹的文件重新移动到新位置

            $file_name=dirname(__FILE__).$name;

            $error=$upfile["error"];//上传后系统返回的值

            if($error==0){

                echo "文件上传成功啦！";

            }else{

                echo "上传失败";

            }

            //文件名为文件路径和文件名的拼接字符串

            $objReader = \PHPExcel_IOFactory::createReader('Excel5');//创建读取实例

            /*

             * log()//方法参数

             * $file_name excal文件的保存路径

             */

            $objPHPExcel = $objReader->load($file_name,$encode='utf-8');//加载文件

            $sheet = $objPHPExcel->getSheet(0);//取得sheet(0)表

            $highestRow = $sheet->getHighestRow(); // 取得总行数

            for($i=2;$i<=$highestRow;$i++)

            {

                $data['nandu']=$_GPC['nandu'];

                $data['tixing'] = 2;

                $data['uniacid'] = $_W['uniacid'];

                $data['timu'] = $objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue();

                $data['a']= $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();

                $data['b']= $objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue();

                $data['c']= $objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue();

                $data['d']= $objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue();

                $data['fenlei']= $_GPC['fenlei'];

                $data['daan']= $objPHPExcel->getActiveSheet()->getCell("F".$i)->getValue();

                if(empty($data['timu'])){

                    break;

                }

                pdo_insert("dati_tiku",$data);

            }

        }

        include $this->doWebFenlei();

    }







    function doWebImportyinyue()

    {

        //自己设置的上传文件存放路径

        global $_W, $_GPC;

        //下面的路径按照你PHPExcel的路径来修改

        load()->library('phpexcel/PHPExcel');

//        load()->library('phpexcel/PHPExcel/IOFactory.php');

//        load()->library('phpexcel/PHPExcel/Reader/Excel2007.php');

        if(@is_uploaded_file($_FILES['upfile']['tmp_name'])){

            $upfile=$_FILES["upfile"];

            //获取数组里面的值

            $name=$upfile["name"];//上传文件的文件名

            $type=$upfile["type"];//上传文件的类型

            $size=$upfile["size"];//上传文件的大小

            $tmp_name=$upfile["tmp_name"];//上传文件的临时存放路径

            move_uploaded_file($tmp_name,dirname(__FILE__).$name);//将上传到服务器临时文件夹的文件重新移动到新位置

            $file_name=dirname(__FILE__).$name;

            $error=$upfile["error"];//上传后系统返回的值

            if($error==0){

                echo "文件上传成功啦！";

            }else{

                echo "上传失败";

            }

            //文件名为文件路径和文件名的拼接字符串

            $objReader = \PHPExcel_IOFactory::createReader('Excel5');//创建读取实例

            /*

             * log()//方法参数

             * $file_name excal文件的保存路径

             */

            $objPHPExcel = $objReader->load($file_name,$encode='utf-8');//加载文件

            $sheet = $objPHPExcel->getSheet(0);//取得sheet(0)表

            $highestRow = $sheet->getHighestRow(); // 取得总行数

            for($i=2;$i<=$highestRow;$i++)

            {

                $data['nandu']=1;

                $data['tixing'] = 0;

                $data['uniacid'] = $_W['uniacid'];

                $data['yinyue'] = $objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue();

                $data['timu'] = $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();

                $data['a']= $objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue();

                $data['b']= $objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue();

                $data['c']= $objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue();

                $data['d']= $objPHPExcel->getActiveSheet()->getCell("F".$i)->getValue();

                $data['fenlei']= 0;

                $data['daan']= $objPHPExcel->getActiveSheet()->getCell("G".$i)->getValue();

                if(empty($data['timu'])){

                    break;

                }

                pdo_insert("dati_yinyue",$data);

            }

        }

        include $this->doWebYinyue();

    }



    public function doWebEdittiku()

    {

        global $_W, $_GPC;

        $id = $_GPC['id'];

        if (!empty($_GPC['timu'])) {

            $data['timu'] = $_GPC['timu'];

            $data['uniacid'] = $_W['uniacid'];

            $data['a'] = $_GPC['xxa'];

            $data['b'] = $_GPC['xxb'];

            $data['c'] = $_GPC['xxc'];

            $data['d'] = $_GPC['xxd'];

            $data['daan'] = $_GPC['daan'];

            pdo_update('dati_tiku', $data, array('id' => $id));

        }

        $tiku = pdo_get('dati_tiku', array('id' => $id));

        include $this->template("web/edittiku");

    }



    public function doWebDeletetiku()

    {

        global $_W, $_GPC;

        pdo_delete('dati_tiku', array('id' => $_GPC['id']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $tiku = pdo_getslice('dati_tiku', array(), array($pindex, $psize), $total, array(), '', array(''));

        for ($i = 0; $i < count($tiku); $i++) {

            $fenlei = pdo_get('dati_fenlei', array('id' => $tiku[$i]['fenlei']));

            $tiku[$i]['fenlei'] = $fenlei['name'];

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/tiku");

    }



    public function doWebMsg(){

        ob_end_clean();
        global $_GPC, $_W;
        $users=pdo_getall('dati_users', array('uniacid' => $_W['uniacid']));
        for($i=0;$i<count($users);$i++){
            $formid=pdo_getall('dati_formid', array('user_id' => $users[$i]['user_id'],'status'=>0), array() , '',array('id DESC') , array());
            if(!empty($formid[0])){
                $aa=$this->getMessage($formid[0]);
                //echo "<pre>";
                //var_dump($aa);
                //echo "</pre>";
            }
        }
        echo "发送成功，请关闭";

    }

public function getMessage($formid) {
        global $_GPC, $_W;
        $user=pdo_get('dati_users', array('user_id' => $formid['user_id']));
        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));
        $setup['msgstr']=json_decode($setup['msgstr'],true);
        $url = 'https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send?access_token='.$this->wx_get_token();
        $data['touser']=$user['open_id'];
        $data['template_id']=$setup['msgid'];
        $data['form_id']=$formid['formid'];
        $data['page']='hc_dati/pages/index/index';
        $data['data']['keyword1']['value']=$setup['msgstr']['msgstr_name'];
        $data['data']['keyword1']['color']='#173177';
        $data['data']['keyword2']['value']=date('Y-m-d H:i:s', time());
        $data['data']['keyword2']['color']='#173177';
        $data['data']['keyword3']['value']=$setup['msgstr']['msgstr_guoqi'];
        $data['data']['keyword3']['color']='#000000';
        $json = json_encode($data);
        $dete=$this->api_notice_increment($url,$json);
        pdo_update('dati_formid', array('status' => 1), array('id' => $formid['id']));
        return $dete;
    }

    function wx_get_token() {

        global $_GPC, $_W;

        $appid=$_W['account']['key'];

        $AppSecret=$_W['account']['secret'];

        $res = file_get_contents('https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$appid.'&secret='.$AppSecret);

        $res = json_decode($res, true);

        $token = $res['access_token'];

        return $token;

    }



    function api_notice_increment($url, $data){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;

    }



    public function doWebShanchu(){

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $fenlei = pdo_getslice('dati_fenlei', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($fenlei); $i++) {

            if ($fenlei[$i]['status'] == 0) {

                $fenlei[$i]['status'] = '下架';

            } else {

                $fenlei[$i]['status'] = '上架';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/shanchu");

    }

    public function doWebShanchutiku(){

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        pdo_delete('dati_tiku', array('fenlei' => $_GPC['id'],'nandu'=>$_GPC['nandu'],'uniacid' => $_W['uniacid']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $fenlei = pdo_getslice('dati_fenlei', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($fenlei); $i++) {

            if ($fenlei[$i]['status'] == 0) {

                $fenlei[$i]['status'] = '下架';

            } else {

                $fenlei[$i]['status'] = '上架';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/shanchu");

    }

    public function doWebQingkong(){

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        pdo_delete('dati_tiku', array('uniacid' => $_W['uniacid']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $fenlei = pdo_getslice('dati_fenlei', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($fenlei); $i++) {

            if ($fenlei[$i]['status'] == 0) {

                $fenlei[$i]['status'] = '下架';

            } else {

                $fenlei[$i]['status'] = '上架';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/shanchu");

    }



    public function doWebTupian(){

        //这个操作被定义用来呈现 管理中心导航菜单

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $tiku = pdo_getslice('dati_tupian', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array(''));

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/tupian");

    }



    public function doWebAddtupian()

    {

        global $_W, $_GPC;

        //这个操作被定义用来呈现 管理中心导航菜单

        if (!empty($_GPC['timu'])) {

            $data['timu'] = $_GPC['timu'];

            $data['uniacid'] = $_W['uniacid'];

            $data['tupian'] = $_GPC['tupian'];

            $data['a'] = $_GPC['xxa'];

            $data['b'] = $_GPC['xxb'];

            $data['c'] = $_GPC['xxc'];

            $data['d'] = $_GPC['xxd'];

            $data['daan'] = $_GPC['daan'];

            $data['tixing'] = 0;

            pdo_insert('dati_tupian', $data);

        }

//        echo "<pre>";

//        var_dump(pdo_debug());

//        echo "</pre>";die;

        include $this->template("web/addtupian");

    }



    public function doWebEdittupian()

    {

        global $_W, $_GPC;

        $id = $_GPC['id'];

        if (!empty($_GPC['timu'])) {

            $data['timu'] = $_GPC['timu'];

            $data['uniacid'] = $_W['uniacid'];

            $data['tupian'] = $_GPC['tupian'];

            $data['a'] = $_GPC['xxa'];

            $data['b'] = $_GPC['xxb'];

            $data['c'] = $_GPC['xxc'];

            $data['d'] = $_GPC['xxd'];

            $data['daan'] = $_GPC['daan'];

            pdo_update('dati_tupian', $data, array('id' => $id));

        }

        $tiku = pdo_get('dati_tupian', array('id' => $id));

        include $this->template("web/edittupian");

    }



    public function doWebDeletetupian()

    {

        global $_W, $_GPC;

        pdo_delete('dati_tupian', array('id' => $_GPC['id']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $tiku = pdo_getslice('dati_tupian', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array(''));

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/tupian");

    }



    public function doWebYinyue(){

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $tiku = pdo_getslice('dati_yinyue', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array(''));

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/yinyue");

    }



    public function doWebAddyinyue()

    {

        global $_W, $_GPC;

        //这个操作被定义用来呈现 管理中心导航菜单

        if (!empty($_GPC['timu'])) {

            $data['timu'] = $_GPC['timu'];

            $data['uniacid'] = $_W['uniacid'];

            $data['yinyue'] = $_GPC['yinyue'];

            $data['a'] = $_GPC['xxa'];

            $data['b'] = $_GPC['xxb'];

            $data['c'] = $_GPC['xxc'];

            $data['d'] = $_GPC['xxd'];

            $data['daan'] = $_GPC['daan'];

            $data['tixing'] = 1;

            pdo_insert('dati_yinyue', $data);

        }

        include $this->template("web/addyinyue");

    }



    public function doWebEdityinyue()

    {

        global $_W, $_GPC;

        $id = $_GPC['id'];

        if (!empty($_GPC['timu'])) {

            $data['timu'] = $_GPC['timu'];

            $data['uniacid'] = $_W['uniacid'];

            $data['yinyue'] = $_GPC['yinyue'];

            $data['a'] = $_GPC['xxa'];

            $data['b'] = $_GPC['xxb'];

            $data['c'] = $_GPC['xxc'];

            $data['d'] = $_GPC['xxd'];

            $data['daan'] = $_GPC['daan'];

            pdo_update('dati_yinyue', $data, array('id' => $id));

        }

        $tiku = pdo_get('dati_yinyue', array('id' => $id));

        include $this->template("web/edityinyue");

    }





    public function doWebDeleteyinyue()

    {

        global $_W, $_GPC;

        pdo_delete('dati_yinyue', array('id' => $_GPC['id']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $tiku = pdo_getslice('dati_yinyue', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array(''));

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/yinyue");

    }



    public function doWebHexiao()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $condition='';

        if(!empty($_GPC['keyword'])){

            $condition .= '%'.$_GPC['keyword'].'%';

            $lingjiang = pdo_getslice('dati_lingjiang', array('uniacid' => $_W['uniacid'],'jiangpin_status'=>1,'kuaidigongsi like' => $condition), array($pindex, $psize), $total, array(), '', array('id desc'));

        }else{

            $lingjiang = pdo_getslice('dati_lingjiang', array('uniacid' => $_W['uniacid'],'jiangpin_status'=>1), array($pindex, $psize), $total, array(), '', array('status asc'));

        }

        for ($i = 0; $i < count($lingjiang); $i++) {

            $lingjiang[$i]['address'] = $lingjiang[$i]['provinceName'] . $lingjiang[$i]['cityName'] . $lingjiang[$i]['countyName'] . $lingjiang[$i]['detailInfo'];

            if ($lingjiang[$i]['status'] == 0) {

                $lingjiang[$i]['stact'] = '未发放';

            } else {

                $lingjiang[$i]['stact'] = '已发放';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));

        $danhao=$setup['hexiao_str1'];

        $gongsi=$setup['hexiao_str2'];

        include $this->template("web/hexiao");

    }

    public function doWebHexiao_fafang()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $id=$_GPC['id'];

        $lingjiang = pdo_get('dati_lingjiang', array('id' => $id));

        if($lingjiang['fafang']==1){

            $data['fafang']=0;

        }else{

            $data['fafang']=1;

        }

        pdo_update('dati_lingjiang', $data, array('id' => $id));

        echo 1;

    }

    public function doWebEdithexiao()

    {

        global $_W, $_GPC;

        $id = $_GPC['id'];

        if (!empty($_GPC['kuaididan'])) {

            $data['kuaididan'] = $_GPC['kuaididan'];

            $data['kuaidigongsi'] = $_GPC['kuaidigongsi'];

            $data['status'] = 1;

            pdo_update('dati_lingjiang', $data, array('id' => $id));

        }

        $jiangpin = pdo_get('dati_lingjiang', array('id' => $id));

        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));

        $danhao=$setup['hexiao_str1'];

        $gongsi=$setup['hexiao_str2'];

        include $this->template("web/edithexiao");

    }

    public function doWebDeletehexiao()

    {

        global $_W, $_GPC;

        pdo_delete('dati_lingjiang', array('id' => $_GPC['id']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $lingjiang = pdo_getslice('dati_lingjiang', array('uniacid' => $_W['uniacid'],'jiangpin_status'=>1), array($pindex, $psize), $total, array(), '', array('id desc'));

        for ($i = 0; $i < count($lingjiang); $i++) {

            $lingjiang[$i]['address'] = $lingjiang[$i]['provinceName'] . $lingjiang[$i]['cityName'] . $lingjiang[$i]['countyName'] . $lingjiang[$i]['detailInfo'];

            if ($lingjiang[$i]['status'] == 0) {

                $lingjiang[$i]['stact'] = '未发货';

            } else {

                $lingjiang[$i]['stact'] = '已发货';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));

        $danhao=$setup['hexiao_str1'];

        $gongsi=$setup['hexiao_str2'];

        include $this->template("web/hexiao");

    }



    public function doWebShenhe()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $shenhe = pdo_getslice('dati_shenhe', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($shenhe); $i++) {

            if ($shenhe[$i]['stact'] == 0) {

                $shenhe[$i]['stact'] = '不显示';

            } else {

                $shenhe[$i]['stact'] = '显示';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/shenhe");

    }



    public function doWebAddshenhe()

    {

        global $_W, $_GPC;

        //这个操作被定义用来呈现 管理中心导航菜单

        if (!empty($_GPC['name'])) {

            $data['name'] = $_GPC['name'];

            $data['uniacid'] = $_W['uniacid'];

            $data['sort'] = $_GPC['sort'];

            $data['stact'] = $_GPC['stact'];

            $data['img'] = $_GPC['img'];

            $data['content'] = $_GPC['content'];

            $data['time'] = date("Y-m-d");

            pdo_insert('dati_shenhe', $data);

        }

        include $this->template("web/addshenhe");

    }



    public function doWebEditshenhe()

    {

        global $_W, $_GPC;

        $id = $_GPC['id'];

        if (!empty($_GPC['name'])) {

            $data['name'] = $_GPC['name'];

            $data['uniacid'] = $_W['uniacid'];

            $data['sort'] = $_GPC['sort'];

            $data['stact'] = $_GPC['stact'];

            $data['img'] = $_GPC['img'];

            $data['content'] = $_GPC['content'];

            pdo_update('dati_shenhe', $data, array('id' => $id));

        }

        $shenhe = pdo_get('dati_shenhe', array('id' => $id));

        include $this->template("web/editshenhe");

    }



    public function doWebDeleteshenhe()

    {

        global $_W, $_GPC;

        pdo_delete('dati_shenhe', array('id' => $_GPC['id']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $shenhe = pdo_getslice('dati_shenhe', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($shenhe); $i++) {

            if ($shenhe[$i]['stact'] == 0) {

                $shenhe[$i]['stact'] = '不显示';

            } else {

                $shenhe[$i]['stact'] = '显示';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/shenhe");

    }



    public function doMobileZhifu()

    {

        global $_W, $_GPC;

        $ddh = $_POST['ddh']; //支付宝订单号

        $key = $_POST['key']; //KEY验证

        $name = $_POST['name']; //备注信息

        $lb = $_POST['lb']; //分类 =1 支付宝 =2财付通 =3 微信

        $money = $_POST['money'];//金额

        $paytime = $_POST['paytime'];//充值时间

        include $this->template("mobile/demo");

    }



    public function doWebPxjiangpin()

    {

        //这个操作被定义用来呈现 管理中心导航菜单

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $jiangpin = pdo_getslice('dati_pxjiangpin', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($jiangpin); $i++) {

            if ($jiangpin[$i]['status'] == 0) {

                $jiangpin[$i]['status'] = '下架';

            } else {

                $jiangpin[$i]['status'] = '上架';

            }
            if ($jiangpin[$i]['hexiao_status'] == 0) {

                $jiangpin[$i]['hexiao_status'] = '实物';

            } else {

                $jiangpin[$i]['hexiao_status'] = '核销';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/pxjiangpin");

    }



    public function doWebAddPxjiangpin()
    {
        global $_W, $_GPC;
        //这个操作被定义用来呈现 管理中心导航菜单

        if (!empty($_GPC['name'])) {
            $data['name'] = $_GPC['name'];
            $data['uniacid'] = $_W['uniacid'];
            $data['sort'] = $_GPC['sort'];
            $data['status'] = $_GPC['stact'];
            $data['thumb'] = $_GPC['thumb'];
            $data['content'] = $_GPC['content'];
            $data['ranking_name'] = $_GPC['ranking_name'];
            $data['ranking_sort'] = $_GPC['ranking_sort'];
            $data['num'] = $_GPC['num'];
            $data['money'] = $_GPC['money'];
            $data['hexiao_status'] = $_GPC['hexiao_status'];
            pdo_insert('dati_pxjiangpin', $data);
        }
        include $this->template("web/addpxjiangpin");
    }

    public function doWebEditPxjiangpin()
    {
        global $_W, $_GPC;
        $id = $_GPC['id'];
        if (!empty($_GPC['name'])) {
            $data['name'] = $_GPC['name'];
            $data['uniacid'] = $_W['uniacid'];
            $data['sort'] = $_GPC['sort'];
            $data['status'] = $_GPC['status'];
            $data['thumb'] = $_GPC['thumb'];
            $data['content'] = $_GPC['content'];
            $data['ranking_name'] = $_GPC['ranking_name'];
            $data['ranking_sort'] = $_GPC['ranking_sort'];
            $data['num'] = $_GPC['num'];
            $data['money'] = $_GPC['money'];
            $data['hexiao_status'] = $_GPC['hexiao_status'];
            pdo_update('dati_pxjiangpin', $data, array('id' => $id));
        }
        $jiangpin = pdo_get('dati_pxjiangpin', array('id' => $id));
        if ($jiangpin['jiangpin_status'] == 1) {
            $jiangpin1 = 'checked="checked"';
            $jiangpin2 = '';
        } else {
            $jiangpin1 = '';
            $jiangpin2 = 'checked="checked"';
        }
        include $this->template("web/editpxjiangpin");
    }



    public function doWebDeletePxjiangpin()

    {

        global $_W, $_GPC;

        pdo_delete('dati_pxjiangpin', array('id' => $_GPC['id']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $jiangpin = pdo_getslice('dati_pxjiangpin', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($jiangpin); $i++) {

            if ($jiangpin[$i]['status'] == 0) {

                $jiangpin[$i]['status'] = '下架';

            } else {

                $jiangpin[$i]['status'] = '上架';

            }
            if ($jiangpin[$i]['hexiao_status'] == 0) {

                $jiangpin[$i]['hexiao_status'] = '实物';

            } else {

                $jiangpin[$i]['hexiao_status'] = '核销';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/pxjiangpin");

    }



    public function doWebJiesuan(){
        ob_end_clean();
        global $_GPC, $_W;
        $sumnum=0;
        $jiangpin = pdo_getall('dati_pxjiangpin', array('uniacid' => $_W['uniacid'],'status'=>1), array() , '','ranking_sort ASC');

        for($i=0;$i<count($jiangpin);$i++){
            $sumnum=$sumnum+$jiangpin[$i]['num'];
        }
        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));
        $data['periods']=date("Y-m-d", time());
        $data['periods_name']='第'.time().'期';
        $data['sumnum']=$sumnum;
        $data['uniacid']=$_W['uniacid'];
        $result = pdo_insert('dati_pxperiods', $data);
        $pxperiods_id = pdo_insertid();
        $j=0;
        $mingci=1;
        $user=pdo_getall('dati_users', array('uniacid' => $_W['uniacid']), array() , '',array('dati_success DESC','user_id DESC') , array(1,$sumnum));
        for($i=0;$i<count($jiangpin);$i++){
            for($z=0;$z<$jiangpin[$i]['num'];$z++){
                if($user[$j]['dati_success']==0){
                    break;
                }
                $date['uniacid']=$_W['uniacid'];
                $date['pxperiods_id']=$pxperiods_id;
                $date['user_id']=$user[$j]['user_id'];
                $date['goods_name']=$jiangpin[$i]['name'];
                $date['goods_img']=$jiangpin[$i]['thumb'];
                $date['jiangxiang']=$jiangpin[$i]['ranking_name'];
                $date['max_success']=$user[$j]['dati_success'];
                $date['mingci']=$mingci;
                $date['ranking_sort']=$jiangpin[$i]['ranking_sort'];
                $date['hexiao_status']=$jiangpin[$i]['hexiao_status'];
                pdo_insert('dati_pxcanyu', $date);
                $mingci=$mingci+1;
                $j=$j+1;
            }
        }
        $users=pdo_getall('dati_users', array('uniacid' => $_W['uniacid']));
        for($i=0;$i<count($users);$i++){
            pdo_update('dati_users', array('shangqi_success'=>$users[$i]['dati_success']), array('user_id' => $users[$i]['shangqi_success']));
            $formid=pdo_getall('dati_formid', array('user_id' => $users[$i]['user_id'],'status'=>0), array() , '',array('id DESC') , array());
            if(!empty($formid)){
                $aa=$this->getMessagejiesuan($formid[0]);
            }
        }
        pdo_update('dati_users', array('dati_success'=>0,'tankuang_cishu'=>$setup['tankuang_cishu']), array('uniacid' => $_W['uniacid']));
        pdo_update('dati_setup', array('pxend_time'=>date("Y-m-d H:i",time())), array('uniacid' => $_W['uniacid']));
//            echo "<pre>";
//            var_dump($user);
//            echo "<pre>";die;
        echo "结算成功，请关闭";
    }
  
  
  public function getMessagejiesuan($formid) {
        global $_GPC, $_W;
        $user=pdo_get('dati_users', array('user_id' => $formid['user_id']));
        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));
        $setup['msgstr']=json_decode($setup['msgstr'],true);
        $url = 'https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send?access_token='.$this->wx_get_token();
        $data['touser']=$user['open_id'];
        $data['template_id']=$setup['msgid'];
        $data['form_id']=$formid['formid'];
        $data['page']='hc_dati/pages/index/index';
        $data['data']['keyword1']['value']=$setup['msgstr']['msgstr_name'];
        $data['data']['keyword1']['color']='#173177';
        $data['data']['keyword2']['value']=date('Y-m-d H:i:s', time());
        $data['data']['keyword2']['color']='#173177';
        $data['data']['keyword3']['value']=$setup['msgstr']['msgstr_paihangbang'];
        $data['data']['keyword3']['color']='#000000';
        $json = json_encode($data);
        $data=$this->api_notice_increment($url,$json);
        return $data;
    }



    public function doWebPxcanyu()

    {

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $jiangpin = pdo_getslice('dati_pxjiangpin', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('sort desc'));

        for ($i = 0; $i < count($jiangpin); $i++) {

            if ($jiangpin[$i]['status'] == 0) {

                $jiangpin[$i]['status'] = '下架';

            } else {

                $jiangpin[$i]['status'] = '上架';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/pxjiangpin");

    }



    public function doWebPxfafang()

    {

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $pxperiods = pdo_getslice('dati_pxperiods', array('uniacid' => $_W['uniacid']), array($pindex, $psize), $total, array(), '', array('id desc'));

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/pxperiods");

    }

    public function doWebPxhexiao()
    {
        global $_W, $_GPC;
        $pindex = max(intval($_GPC['page']), 1);
        $psize = 20;
        $condition='';
        if(!empty($_GPC['keyword'])){
            $condition .= '%'.$_GPC['keyword'].'%';
            $pxxiangqing = pdo_getslice('dati_pxcanyu', array('uniacid' => $_W['uniacid'],'hexiao_status'=>1,'kuaidigongsi like' => $condition), array($pindex, $psize), $total, array(), '', array('id desc'));
        }else{
            $pxxiangqing = pdo_getslice('dati_pxcanyu', array('uniacid' => $_W['uniacid'],'	hexiao_status'=>1), array($pindex, $psize), $total, array(), '', array('id desc'));
        }
        for($i=0;$i<count($pxxiangqing);$i++){
            $user=pdo_get('dati_users', array('user_id' => $pxxiangqing[$i]['user_id']));
            $pxxiangqing[$i]['nick_name']=$user['nick_name'];
            if($pxxiangqing[$i]['lingjiang_status']==0){
                $pxxiangqing[$i]['lingjiang_status']='未领取';
                $pxxiangqing[$i]['none']='style="display: none"';
            }
            if($pxxiangqing[$i]['lingjiang_status']==1){
                $pxxiangqing[$i]['lingjiang_status']='已领取，未发放';
            }
            if($pxxiangqing[$i]['lingjiang_status']==2){
                $pxxiangqing[$i]['lingjiang_status']='已发放';
            }
        }
        $pager = pagination($total, $pindex, $psize);
        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));
        $danhao=$setup['hexiao_str1'];
        $gongsi=$setup['hexiao_str2'];
        include $this->template("web/pxhexiao");
    }

    public function doWebEditpxhexiao()
    {
        global $_W, $_GPC;
        $id = $_GPC['id'];
        if (!empty($_GPC['kuaididan'])) {
            $data['kuaididan'] = $_GPC['kuaididan'];
            $data['kuaidigongsi'] = $_GPC['kuaidigongsi'];
            $data['lingjiang_status'] = 2;
            pdo_update('dati_pxcanyu', $data, array('id' => $id));
        }
        $jiangpin = pdo_get('dati_pxcanyu', array('id' => $id));
        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));
        $danhao=$setup['hexiao_str1'];
        $gongsi=$setup['hexiao_str2'];
        include $this->template("web/editpxhexiao");
    }

    public function doWebDeletepxhexiao()
    {
        global $_W, $_GPC;
        $id = $_GPC['id'];
        pdo_delete('dati_pxcanyu', array('id' => $_GPC['id']));
        $pindex = max(intval($_GPC['page']), 1);
        $psize = 20;
        $condition='';
        if(!empty($_GPC['keyword'])){
            $condition .= '%'.$_GPC['keyword'].'%';
            $pxxiangqing = pdo_getslice('dati_pxcanyu', array('uniacid' => $_W['uniacid'],'hexiao_status'=>1,'kuaidigongsi like' => $condition), array($pindex, $psize), $total, array(), '', array('id desc'));
        }else{
            $pxxiangqing = pdo_getslice('dati_pxcanyu', array('uniacid' => $_W['uniacid'],'	hexiao_status'=>1), array($pindex, $psize), $total, array(), '', array('id desc'));
        }
        for($i=0;$i<count($pxxiangqing);$i++){
            $user=pdo_get('dati_users', array('user_id' => $pxxiangqing[$i]['user_id']));
            $pxxiangqing[$i]['nick_name']=$user['nick_name'];
            if($pxxiangqing[$i]['lingjiang_status']==0){
                $pxxiangqing[$i]['lingjiang_status']='未领取';
                $pxxiangqing[$i]['none']='style="display: none"';
            }
            if($pxxiangqing[$i]['lingjiang_status']==1){
                $pxxiangqing[$i]['lingjiang_status']='已领取，未发放';
            }
            if($pxxiangqing[$i]['lingjiang_status']==2){
                $pxxiangqing[$i]['lingjiang_status']='已发放';
            }
        }
        $pager = pagination($total, $pindex, $psize);
        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));
        $danhao=$setup['hexiao_str1'];
        $gongsi=$setup['hexiao_str2'];
        include $this->template("web/pxhexiao");
    }

    public function doWebPxhexiao_fafang()
    {
        //这个操作被定义用来呈现 管理中心导航菜单
        global $_W, $_GPC;
        $id=$_GPC['id'];
        $lingjiang = pdo_get('dati_pxcanyu', array('id' => $id));
        if($lingjiang['fafang']==1){
            $data['fafang']=0;
        }else{
            $data['fafang']=1;
        }
        pdo_update('dati_pxcanyu', $data, array('id' => $id));
        echo 1;
    }



    public function doWebPxxiangqing()

    {

        global $_W, $_GPC;

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $pxxiangqing = pdo_getslice('dati_pxcanyu', array('pxperiods_id' => $_GPC['id']), array($pindex, $psize), $total, array(), '', array('mingci asc'));

        for($i=0;$i<count($pxxiangqing);$i++){

            $user=pdo_get('dati_users', array('user_id' => $pxxiangqing[$i]['user_id']));

            $pxxiangqing[$i]['nick_name']=$user['nick_name'];

            if($pxxiangqing[$i]['lingjiang_status']==0){

                $pxxiangqing[$i]['lingjiang_status']='未领取';

                $pxxiangqing[$i]['none']='style="display: none"';

            }

            if($pxxiangqing[$i]['lingjiang_status']==1){

                $pxxiangqing[$i]['lingjiang_status']='已领取，未发放';

            }

            if($pxxiangqing[$i]['lingjiang_status']==2){

                $pxxiangqing[$i]['lingjiang_status']='已发放';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/pxxiangqing");

    }



    public function doWebEditpxlingjiang()

    {

        global $_W, $_GPC;

        $id = $_GPC['id'];

        if (!empty($_GPC['kuaididan'])) {

            $data['kuaididan'] = $_GPC['kuaididan'];

            $data['kuaidigongsi'] = $_GPC['kuaidigongsi'];

            $data['lingjiang_status'] = 2;

            $data['userName'] = $_GPC['userName'];

            $data['postalCode'] = $_GPC['postalCode'];

            $data['detailInfo'] = $_GPC['detailInfo'];

            $data['telNumber'] = $_GPC['telNumber'];

            pdo_update('dati_pxcanyu', $data, array('id' => $id));

        }

        $jiangpin = pdo_get('dati_pxcanyu', array('id' => $id));

        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));

        $danhao=$setup['danhao'];

        $gongsi=$setup['gongsi'];

        include $this->template("web/editpxlingjiang");

    }



    public function doWebDeletepxlingjiang()

    {

        global $_W, $_GPC;

        pdo_delete('dati_pxcanyu', array('id' => $_GPC['id']));

        $pindex = max(intval($_GPC['page']), 1);

        $psize = 20;

        $pxxiangqing = pdo_getslice('dati_pxcanyu', array('pxperiods_id' => $_GPC['id']), array($pindex, $psize), $total, array(), '', array('mingci asc'));

        for($i=0;$i<count($pxxiangqing);$i++){

            $user=pdo_get('dati_users', array('user_id' => $pxxiangqing[$i]['user_id']));

            $pxxiangqing[$i]['nick_name']=$user['nick_name'];

            if($pxxiangqing[$i]['lingjiang_status']==0){

                $pxxiangqing[$i]['lingjiang_status']='未领取';

                $pxxiangqing[$i]['none']='style="display: none"';

            }

            if($pxxiangqing[$i]['lingjiang_status']==1){

                $pxxiangqing[$i]['lingjiang_status']='已领取，未发放';

            }

            if($pxxiangqing[$i]['lingjiang_status']==2){

                $pxxiangqing[$i]['lingjiang_status']='已发放';

            }

        }

        $pager = pagination($total, $pindex, $psize);

        include $this->template("web/pxxiangqing");

    }



    public function doWebPaihangbang()

    {

        global $_W, $_GPC;

        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));

        if (!empty($_GPC['pxguize1'])) {

            $data['pxguize1']=$_GPC['pxguize1'];

            $data['pxguize2']=$_GPC['pxguize2'];

            $data['pxguize3']=$_GPC['pxguize3'];

            $data['pxguize4']=$_GPC['pxguize4'];

            $data['pxend_time']=$_GPC['pxend_time'];

            $data['tankuang_cishu']=$_GPC['tankuang_cishu'];

            $data['pxnum_img']=$_GPC['pxnum_img'];

            $data['pxdaojishi_img']=$_GPC['pxdaojishi_img'];

            $data['pxguize_img']=$_GPC['pxguize_img'];

            if (empty($setup)) {

                $data['uniacid'] = $_W['uniacid'];

                pdo_insert('dati_setup', $data);

            } else {

                pdo_update('dati_setup', $data, array('uniacid' => $_W['uniacid']));

            }

        }

        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));

        include $this->template("web/paihangbang");

    }

}