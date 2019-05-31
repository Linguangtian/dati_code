<?php
/**

 *www.qitu pic

 *

 * QQ466421811

 * @url 

 */

include_once "wxBizDataCrypt.php";
defined('IN_IA') or exit('Access Denied');
require_once IA_ROOT."/addons/hc_dati/inc/model.class.php";
class Hc_datiModuleWxapp extends WeModuleWxapp {
	public function doPageTest(){
        ob_end_clean();
        global $_GPC, $_W;
        $post_url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$this->wx_get_token();
        $post_data = '';

        $json = $this->api_notice_increment($post_url,$post_data);
        $json=json_decode($json,true);
        return $this->result(0, '获取成功',$json);
	}
    public function get_url_content($url)
    {
        $user_agent = "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)";
        //$data_string = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            //'Content-Length: ' . strlen($data_string)
        ));

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    public function doPageGetopenid()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $code = $_GPC['code'];
        $account = pdo_get('account_wxapp', array('uniacid' => $_GPC['i']));
        $url = 'https://api.weixin.qq.com/sns/jscode2session?appid=' . $account['key'] . '&secret=' . $account['secret'] . '&js_code=' . $code . '&grant_type=authorization_code';
        $result = $this->get_url_content($url);
        $result = json_decode($result, true);
        return $this->result(0, '获取成功', $result['openid']);
    }


    public function doPageZhuce()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $data['uniacid'] = $_GPC['i'];
        $data['city'] = $_POST['city'];
        $data['country'] = $_POST['country'];
        $data['gender'] = $_POST['gender'];
        $data['open_id'] = $_POST['open_id'];
        $data['nick_name'] = $_POST['nickName'];
        $data['head_pic'] = $_POST['avatarUrl'];
        $data['province'] = $_POST['province'];
        $stact = 1;
        if(empty($data['open_id'])){
            $this->result(0, $stact, '');
        }
        $uid = pdo_getcolumn('dati_users', array('open_id' => $data['open_id'], 'uniacid' => $data['uniacid']), 'user_id', 1);
        if (empty($uid)) {
            $stact = 0;
            $data['dati_jihui'] = $setup['chushicishu'];
            pdo_insert('dati_users', $data);
            $uid = pdo_insertid();
        } else {
            pdo_update('dati_users', $data, array('user_id' => $uid));
        }
        $this->result(0, $stact, $uid);
    }

    public function doPageBgl()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $denglu_bgk=$_W['attachurl'].$setup['denglu_bgk'];
        return $this->result(0, '获取成功', $denglu_bgk);
    }

    public function doPageHome(){
        ob_end_clean();
        global $_GPC, $_W;
        $user_id=$_GPC['user_id'];
        $fenlei_id=$_GPC['id'];
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        if($setup['zhifu_status']!=0){
            $setup['zfan']=$_W['siteroot'].'/addons/hc_dati/template/web/img/zhifu'.$setup['zhifu_status'].'.png';
        }else{
            $setup['zfan']=$_W['attachurl'].$setup['zhifu'];
        }
        if($setup['daohang_status']!=0){
            $setup['daoh']=$_W['siteroot'].'/addons/hc_dati/template/web/img/daohang'.$setup['daohang_status'].'.png';
        }else{
            $setup['daoh']=$_W['attachurl'].$setup['daohang'];
        }
        if($setup['xuni_status']==1){
            $setup['canyucishu']=$setup['xuni_meb'];
        }
        $setup['bg_color']=$_W['attachurl'].$setup['bg_color'];
        if(!empty($fenlei_id)){
            $fenlei=pdo_get('dati_fenlei', array('id' => $fenlei_id));
            $setup['daoh']=$_W['attachurl'].$fenlei['img'];
            $setup['bg_color']=$_W['attachurl'].$fenlei['bg_img'];
        }
        if(empty($setup['zhuanfa_img'])){
            $setup['zhuanfa_img']=$_W['siteroot'].'/addons/hc_dati/template/web/img/zhuanfa.jpg';
        }else{
            $setup['zhuanfa_img']=$_W['attachurl'].$setup['zhuanfa_img'];
        }

        if($setup['lianxi']==''){
            $setup['lianxi']='';
        }else{
            $setup['lianxi']=$_W['attachurl'].$setup['lianxi'];
        }
        $setup['guanggao1_img']=$_W['attachurl'].$setup['guanggao1_img'];
        $setup['guanggao2_img']=$_W['attachurl'].$setup['guanggao2_img'];
        $setup['guanggao3_img']=$_W['attachurl'].$setup['guanggao3_img'];

        $setup['shouye_img']=$_W['attachurl'].$setup['shouye_img'];
        $setup['paihangbang_img']=$_W['attachurl'].$setup['paihangbang_img'];
        $setup['fenlei_img']=$_W['attachurl'].$setup['fenlei_img'];
        $setup['wode_img']=$_W['attachurl'].$setup['wode_img'];
        $setup['huodejihuitext']=$_W['attachurl'].$setup['huodejihuitext'];
        $setup['pxend_time']=strtotime($setup['pxend_time']);
        $setup['pxnum_img']=$_W['attachurl'].$setup['pxnum_img'];
        $setup['pxdaojishi_img']=$_W['attachurl'].$setup['pxdaojishi_img'];
        $setup['pxguize_img']=$_W['attachurl'].$setup['pxguize_img'];
        $setup['denglu_bgk']=$_W['attachurl'].$setup['denglu_bgk'];
        if($setup['stake']==$_GPC['v']){
            $setup['stake']=1;
        }else{
            $setup['stake']=0;
        }
        $user = pdo_get('dati_users', array('user_id' => $user_id));


        if($user['today_time']!=date("Y-m-d")){
            pdo_update('dati_users', array('today_time'=>date("Y-m-d"),'dati_jihui'=>$user['dati_jihui']+$setup['today_jihui']), array('user_id' => $user_id));
        }

        $shenhe=pdo_getall('dati_shenhe', array('uniacid' => $_GPC['i'],'stact'=>1), array() , '','sort DESC' , array());
        for($i=0;$i<count($shenhe);$i++){
            $shenhe[$i]['img']=$_W['attachurl'].$shenhe[$i]['img'];
        }
        $setup['shenhe']=$shenhe;

        $setup['status']=$user['dati_jihui'];
        if($user['status']==1){
            $setup['jieping']=0;
        }else{
            $setup['jieping']=1;
        }
        $this->result(0, '获取成功', $setup);
    }

    public function doPageWenzhang(){
        ob_end_clean();
        global $_GPC, $_W;
        $shenhe=pdo_get('dati_shenhe', array('id' => $_GPC['id']));
        $this->result(0, '获取成功', $shenhe);
    }

    public function doPageTitle(){
        ob_end_clean();
        global $_GPC, $_W;
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $title=$setup['xcx_name'];
        $this->result(0, '获取成功', $title);
    }

    public function doPageGoumai(){
        ob_end_clean();
        global $_GPC, $_W;
        $goods=pdo_getall('dati_goods', array('uniacid' => $_GPC['i'],'status'=>1), array() , '','sort ASC' , array());
        for($i=0;$i<count($goods);$i++){
            $goods[$i]['img']=$_W['attachurl'].$goods[$i]['img'];
        }
        $this->result(0, '获取成功', $goods);
    }
  
  
   public function doPageFormid(){
        ob_end_clean();
        global $_GPC, $_W;
        $data['user_id']=$_GPC['user_id'];
        $data['formid']=$_GPC['formid'];
        if(strpos($data['formid']," ")){
            $this->result(0, 'formid不正确');
        }else{
            pdo_insert('dati_formid', $data);
            $cid = pdo_insertid();
            $this->result(0, '获取成功',$_GPC);
        }

    }

    public function doPageZhanfa()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $account = pdo_get('account_wxapp', array('uniacid' => $_GPC['i']));
        $appid=$account['key'];
        $code = $_GPC['code'];
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $url = 'https://api.weixin.qq.com/sns/jscode2session?appid=' . $account['key'] . '&secret=' . $account['secret'] . '&js_code=' . $code . '&grant_type=authorization_code';
        $result = $this->get_url_content($url);
        $result = json_decode($result, true);
        $sessionKey=$result['session_key'];
        $pc=new WXBizDataCrypt($appid, $sessionKey);
        $encryptedData=$_GPC['encryptedData'];
        $iv=$_GPC['iv'];
        $dd=$pc->decryptData( $encryptedData, $iv, $data );
        $aa = json_decode($data, true);
        $openGId=$aa['openGId'];
        $timestamp=$aa['watermark']['timestamp'];
        $openid=$result['openid'];
        $zf['uniacid']=$_GPC['i'];
        $zf['openid']=$openid;
        $zf['time']=date('Y-m-d',$timestamp);
        $zf['openGId']=$openGId;
        $zf['timestamp']=$timestamp;
        $stact=0;
        if(!empty($openGId)){
            $cishu=pdo_getall('dati_zhuanfa', array('openid' => $openid,'uniacid' => $_GPC['i'],'time'=>date('Y-m-d',$timestamp)));
            $zhuanfa=pdo_get('dati_zhuanfa', array('openid' => $openid,'openGId'=>$openGId,'time'=>date('Y-m-d',$timestamp),'uniacid' => $_GPC['i']));
            pdo_insert('dati_zhuanfa', $zf);
            $user = pdo_get('dati_users', array('open_id' => $openid));
            $cishu=$this->array_unset_tt($cishu,'openGId');
            if(empty($zhuanfa)){
                if(count($cishu)<=$setup['zhuanfa_jihui']){
                    $stact=1;
                    pdo_update('dati_users', array('dati_jihui'=>$user['dati_jihui']+1), array('user_id' => $user['user_id']));
                }
            }
            pdo_update('dati_users', array('openGId'=>$openGId), array('user_id' => $user['user_id']));
            $this->result(0, $dd, $stact);
        }
        $this->result(1, '请转发到群里');
    }

    public function doPageJihui()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $account = pdo_get('account_wxapp', array('uniacid' => $_GPC['i']));
        $appid=$account['key'];
        $code = $_GPC['code'];
        $cid = $_GPC['cid'];
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $url = 'https://api.weixin.qq.com/sns/jscode2session?appid=' . $account['key'] . '&secret=' . $account['secret'] . '&js_code=' . $code . '&grant_type=authorization_code';
        $result = $this->get_url_content($url);
 
        $result = json_decode($result, true);
        $sessionKey=$result['session_key'];
        $pc=new WXBizDataCrypt($appid, $sessionKey);
        $encryptedData=$_GPC['encryptedData'];
        $iv=$_GPC['iv'];
        $dd=$pc->decryptData( $encryptedData, $iv, $data );
      
        $aa = json_decode($data, true);
        $openGId=$aa['openGId'];
        $timestamp=$aa['watermark']['timestamp'];
        $openid=$result['openid'];
        $zf['uniacid']=$_GPC['i'];
        $zf['openid']=$openid;
        $zf['time']=date('Y-m-d',$timestamp);
        $zf['openGId']=$openGId;
        $zf['timestamp']=$timestamp;
        $stact=0;
        
        if(!empty($openGId)){
            $cishu=pdo_getall('dati_zhuanfa', array('openid' => $openid,'uniacid' => $_GPC['i'],'time'=>date('Y-m-d',$timestamp)));
            $zhuanfa=pdo_get('dati_zhuanfa', array('openid' => $openid,'openGId'=>$openGId,'time'=>date('Y-m-d',$timestamp),'uniacid' => $_GPC['i']));
            $user = pdo_get('dati_users', array('open_id' => $openid));
            $cishu=$this->array_unset_tt($cishu,'openGId');
            if(empty($zhuanfa)){
                $canyu = pdo_get('dati_canyu', array('id' => $cid));
                if($canyu['jihui']+1>$setup['zhuanfacishu']){
                    $stact=0;
                }else{
                    pdo_insert('dati_zhuanfa', $zf);
                    if(count($cishu)<=$setup['zhuanfa_jihui']){
                        $stact=1;
                        $jihui=$canyu['jihui']+1;
                        pdo_update('dati_canyu', array('jihui'=>$jihui), array('id' => $cid));
                    }
                }
            }
            pdo_update('dati_users', array('openGId'=>$openGId), array('user_id' => $user['user_id']));
            $this->result(0, $dd, $stact);
        }
        $this->result(1, $setup['zhuanfaqun']);
    }

    public function doPagePayjihui()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $user_id = $_GPC['user_id'];
        $canyu_id=$_GPC['cid'];
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $user=pdo_get('dati_users', array('user_id' => $user_id));
        $canyu = pdo_get('dati_canyu', array('id' => $canyu_id));
        $open_id=$user['open_id'];
        if(empty($user)){
            $this->result(1, '用户不存在');
        }
        if($canyu['jihui']+1>$setup['zhuanfacishu']){
            $this->result(0, '您本次答题的复活次数已达上限');
        }
        $data['order_sn'] = time() . rand(1000, 9999);
        $data['addtime'] = time();
        $data['open_id'] = $open_id;
        $data['money'] = $setup['fuhuo_money'];
        $data['uniacid'] = $_GPC['i'];
        $data['canyu_id'] = $canyu_id;
        $result = pdo_insert('dati_fuhuo', $data);
        $order_id = pdo_insertid();
        $order = pdo_get('dati_fuhuo', array('id' => $order_id, 'uniacid' => $_GPC['i']));
        //获取支付参数
        $account = pdo_get('account_wxapp', array('uniacid' => $_GPC['i']));
        $appid = $account['key'];
        $wxapp = pdo_get('uni_settings', array('uniacid' => $_GPC['i']));
        $payment = unserialize($wxapp['payment']);
        $mch_id = $payment['wechat']['mchid'];
        $signkey = $payment['wechat']['signkey'];
        //返回小程序参数
        $notify_url = $_W['siteroot'] . '/addons/hc_dati/wxpayfuhuo.php';
        $res = $this->getPrePayOrder($appid, $mch_id, $notify_url, $order['order_sn'], $order['money'], $open_id, $signkey);
        if ($res['return_code'] == 'SUCCESS') {
            $wxdata = $this->getOrder($appid, $res['prepay_id'], $signkey);
            return $this->result(0, '操作成功', $wxdata);
        } else {
            return $this->result(1, '操作失败', $res);
        }
    }

    public function doPageJihuipay()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $canyu_id=$_GPC['cid'];
        $canyu = pdo_get('dati_canyu', array('id' => $canyu_id));
        $jihui=$canyu['jihui']+1;
        pdo_update('dati_canyu', array('jihui'=>$jihui), array('id' => $canyu_id));
        return $this->result(0, '操作成功');
    }

    //$arr->传入数组   $key->判断的key值
    function array_unset_tt($arr,$key){
        //建立一个目标数组
        $res = array();
        foreach ($arr as $value) {
            //查看有没有重复项

            if(isset($res[$value[$key]])){
                //有：销毁

                unset($value[$key]);

            }
            else{

                $res[$value[$key]] = $value;
            }
        }
        return $res;
    }

    public function doPageCanyu(){
        ob_end_clean();
        global $_GPC, $_W;
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $data['setup_number']=$setup['shuzi'];
        $data['shuzi']=$setup['shuzi'];
        $data['mp3_url']=$setup['mp3_url'];
        $data['shibai_mp3']=$_W['siteroot'].'/addons/hc_dati/shibai.mp3';
        $data['dui_mp3']=$_W['siteroot'].'/addons/hc_dati/dui.mp3';
        $data['cuo_mp3']=$_W['siteroot'].'/addons/hc_dati/cuo.mp3';
        $data['kaishi_mp3']=$_W['siteroot'].'/addons/hc_dati/kaishi.mp3';
        $data['toubu']=$setup['youxi_toubu'];
        $data['fuhuo_text']=$setup['fuhuo_text'];
        $data['fh_zhuanfa_img']=$_W['attachurl'].$setup['fh_zhuanfa_img'];
        $data['fh_zhifu_img']=$_W['attachurl'].$setup['fh_zhifu_img'];
        $data['fh_zhifu_status']=$setup['fh_zhifu_status'];
        $this->result(0, '获取成功', $data);
    }

    public function doPageTiaozhan(){
        ob_end_clean();
        global $_GPC, $_W;
        $user_id=$_GPC['user_id'];
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $user = pdo_get('dati_users', array('user_id' => $user_id));
        if($user['dati_jihui']<=0){
            $this->result(1, '您没有机会');
        }
        $data['user_id']=$user_id;
        $data['starttime']=time();
        $data['setup_number']=$setup['shuzi'];
        $data['uniacid']=$_GPC['i'];
        pdo_insert('dati_canyu', $data);
        $cid = pdo_insertid();
        pdo_update('dati_users', array('dati_jihui'=>$user['dati_jihui']-1,'dati_sum'=>$user['dati_sum']+1), array('user_id' => $user['user_id']));
        pdo_update('dati_setup', array('canyucishu'=>$setup['canyucishu']+1,'xuni_meb'=>$setup['xuni_meb']+1), array('id' => $setup['id']));
        $data['status']=$setup['suiji_status'];
        $data['shuzi']=$setup['shuzi'];
        $data['shibai_mp3']=$_W['siteroot'].'/addons/hc_dati/shibai.mp3';
        $data['dui_mp3']=$_W['siteroot'].'/addons/hc_dati/dui.mp3';
        $data['cuo_mp3']=$_W['siteroot'].'/addons/hc_dati/cuo.mp3';
        $data['kaishi_mp3']=$_W['siteroot'].'/addons/hc_dati/kaishi.mp3';
        $data['cid']=$cid;
        $data['toubu']=$setup['youxi_toubu'];
        $data['zhuanfaqun']=$setup['zhuanfaqun'];
        $data['fuhuo_text']=$setup['fuhuo_text'];
        $data['fh_zhuanfa_img']=$_W['attachurl'].$setup['fh_zhuanfa_img'];
        $data['fh_zhifu_img']=$_W['attachurl'].$setup['fh_zhifu_img'];
        $data['fh_zhifu_status']=$setup['fh_zhifu_status'];
        $this->result(0, '获取成功', $data);
    }

    public function doPageDati(){
        ob_end_clean();
        global $_GPC, $_W;
        $tifhu=$_GPC['tifhu'];
        $fenlei_id=$_GPC['id'];
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        if($setup['jiandan']>=$tifhu){
            $nandu=1;
        }
        if($setup['jiandan']<$tifhu&&$tifhu<=$setup['jiandan']+$setup['zhongdeng']){
            $nandu=2;
        }
        if($setup['jiandan']+$setup['zhongdeng']<$tifhu){
            $nandu=3;
        }
        if(empty($fenlei_id)||$fenlei_id=='null'){
            $tiku=pdo_getall('dati_tiku', array('uniacid' => $_GPC['i'],'nandu'=>$nandu));
        }else{
            $tiku=pdo_getall('dati_tiku', array('uniacid' => $_GPC['i'],'fenlei'=>$fenlei_id,'nandu'=>$nandu));
        }
        $suiji=rand(0,count($tiku)-1);
        $timu=$tiku[$suiji];
        if($timu['daan']=='A'){
            $timu['daan1']=0;
        }
        if($timu['daan']=='B'){
            $timu['daan1']=1;
        }
        if($timu['daan']=='C'){
            $timu['daan1']=2;
        }
        if($timu['daan']=='D'){
            $timu['daan1']=3;
        }
        $timu['xuanxiang'][0]['value']=$timu['a'];
        $timu['xuanxiang'][1]['value']=$timu['b'];
        $timu['xuanxiang'][2]['value']=$timu['c'];
        $timu['xuanxiang'][3]['value']=$timu['d'];
        $timu['time']=$setup['time'];
        $this->result(0, '获取成功', $timu);
    }

    public function doPageDati1(){
        ob_end_clean();
        global $_GPC, $_W;
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $tifhu=$_GPC['tifhu'];
        $fenlei_id=$_GPC['id'];
        $cid=$_GPC['cid'];
        $tiku=cache_load($cid);
        if(empty($tiku)){
            $tiku=$this->tiku($fenlei_id);
            cache_write($cid, $tiku);

        }
        $timu=$tiku[$tifhu-1];
        if($timu['daan']=='A'){
            $timu['daan1']=0;
        }
        if($timu['daan']=='B'){
            $timu['daan1']=1;
        }
        if($timu['daan']=='C'){
            $timu['daan1']=2;
        }
        if($timu['daan']=='D'){
            $timu['daan1']=3;
        }
        $timu['xuanxiang'][0]['value']=$timu['a'];
        $timu['xuanxiang'][1]['value']=$timu['b'];
        $timu['xuanxiang'][2]['value']=$timu['c'];
        $timu['xuanxiang'][3]['value']=$timu['d'];
        $timu['time']=$setup['time'];
        if(!empty($timu['tupian'])){
            $timu['time']=$setup['tupian_time'];
        }
        if(!empty($timu['yinyue'])){
            $timu['time']=$setup['yinyue_time'];
        }
        $timu['yinyue_end_time']=$setup['yinyue_end_time'];
        $this->result(0, '获取成功', $timu);
    }

    public function tiku($fenlei_id){
        global $_GPC, $_W;
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $daluan=range (0,$setup['shuzi']-1);
        $tiku_tupian=pdo_getall('dati_tupian', array('uniacid' => $_GPC['i']));
        shuffle ($tiku_tupian);
        for($i=0;$i<$setup['tupian'];$i++){
            $tupian[$i]=$tiku_tupian[$i];
        }
        $tiku_yinyue=pdo_getall('dati_yinyue', array('uniacid' => $_GPC['i']));
        shuffle ($tiku_yinyue);
        for($i=0;$i<$setup['yinyue'];$i++){
            $yinyue[$i]=$tiku_yinyue[$i];
        }
        if(empty($fenlei_id)||$fenlei_id=='null'){
            $tiku_jiandan=pdo_getall('dati_tiku', array('uniacid' => $_GPC['i'],'nandu'=>1));
            $tiku_yiban=pdo_getall('dati_tiku', array('uniacid' => $_GPC['i'],'nandu'=>2));
            $tiku_kunnan=pdo_getall('dati_tiku', array('uniacid' => $_GPC['i'],'nandu'=>3));
        }else{
            $tiku_jiandan=pdo_getall('dati_tiku', array('uniacid' => $_GPC['i'],'nandu'=>1,'fenlei'=>$fenlei_id));
            $tiku_yiban=pdo_getall('dati_tiku', array('uniacid' => $_GPC['i'],'nandu'=>2,'fenlei'=>$fenlei_id));
            $tiku_kunnan=pdo_getall('dati_tiku', array('uniacid' => $_GPC['i'],'nandu'=>3,'fenlei'=>$fenlei_id));
        }
        shuffle ($tiku_jiandan);
        shuffle ($tiku_yiban);
        shuffle ($tiku_kunnan);
        for($i=0;$i<$setup['jiandan'];$i++){
            $jiandan[$i]=$tiku_jiandan[$i];
        }
        for($i=0;$i<$setup['zhongdeng'];$i++){
            $yiban[$i]=$tiku_yiban[$i];
        }
        for($i=0;$i<$setup['kunnan'];$i++){
            $kunnan[$i]=$tiku_kunnan[$i];
        }
        shuffle ($daluan);
        $daluan=array_flip($daluan);
        for($i=0;$i<$setup['tupian'];$i++){
            $daluan[$i]=$tupian[$i];
            $daluan[$i]['twy']=1;
        }
        $l=0;
        for($j=$i;$j<$setup['tupian']+$setup['yinyue'];$j++){
            $daluan[$j]=$yinyue[$l];
            $daluan[$j]['twy']=2;
            $l=$l+1;
        }
        $daluan=array_values($daluan);
        $x=0;
        $y=0;
        $z=0;
        $jiandan_num=count($jiandan);
        $yiban_num=count($yiban);
        $kunnan_num=count($kunnan);
        for($i=0;$i<count($daluan);$i++){
            if(is_int($daluan[$i])){
                if($jiandan_num>0){
                    $daluan[$i]=$jiandan[$x];
                    $daluan[$i]['twy']=0;
                    $jiandan_num=$jiandan_num-1;
                    $x=$x+1;
                }else{
                    if($yiban_num>0){
                        $daluan[$i]=$yiban[$y];
                        $daluan[$i]['twy']=0;
                        $yiban_num=$yiban_num-1;
                        $y=$y+1;
                    }else{
                        if($kunnan_num>0){
                            $daluan[$i]=$kunnan[$z];
                            $daluan[$i]['twy']=0;
                            $kunnan_num=$kunnan_num-1;
                            $z=$z+1;
                        }
                    }
                }
            }
        }
        for($i=0;$i<count($daluan);$i++){
            if(!empty($daluan[$i]['tupian'])){
                $daluan[$i]['tupian']=$_W['attachurl'].$daluan[$i]['tupian'];
            }
            if(!empty($daluan[$i]['yinyue'])){
              if($daluan[$i]['tixing']==0){
              $daluan[$i]['yinyue']=$setup['qiniu_url'].$daluan[$i]['yinyue'];
              }else{
                $daluan[$i]['yinyue']=$_W['attachurl'].$daluan[$i]['yinyue'];
              }  
            }
        }

        return $daluan;
    }

    public function doPageJiesu(){
        ob_end_clean();
        global $_GPC, $_W;
        $cid=$_GPC['cid'];
        cache_delete($cid);
        $data['number']=$_GPC['numbera'];
        $data['status']=$_GPC['status'];
        $data['endtime']=time();
        $canyu=pdo_get('dati_canyu', array('id' => $cid));
        $user=pdo_get('dati_users', array('user_id' => $canyu['user_id']));
        if($data['status']==1){
            pdo_update('dati_users', array('dati_success'=>$user['dati_success']+1), array('user_id' => $canyu['user_id']));
        }
        if($user['dati_zuida']<$data['number']){
            pdo_update('dati_users', array('dati_zuida'=>$data['number']), array('user_id' => $canyu['user_id']));
        }
        pdo_update('dati_canyu', $data, array('id' => $cid));
        $aa=$this->getMessage($canyu['user_id'],$_GPC['status']);
        $users=pdo_getall('dati_users', array('dati_success >' => $user['dati_success'],'uniacid' => $_GPC['i']));
        $count=count($users);

        $userd=pdo_getall('dati_users', array('dati_success' => $user['dati_success'],'uniacid' => $_GPC['i']), array() , '',array('user_id DESC') , array());
        for($i=0;$i<count($userd);$i++){
            $count=$count+1;
            if($userd[$i]['user_id']==$user['user_id']){
                break;
            }
        }
        $this->result(0, '获取成功', $count);
    }

    public function getMessage($user_id,$status) {
        global $_GPC, $_W;
        $formidall=pdo_getall('dati_formid', array('user_id' => $user_id,'status'=>0), array() , '',array('id DESC') , array());
        $formid=$formidall[0];
        $setup = pdo_get('dati_setup', array('uniacid' => $_W['uniacid']));
        $user=pdo_get('dati_users', array('user_id' => $user_id));
        if($status==1){
            $tishi='恭喜您挑战成功';
        }else{
            $tishi='挑战失败，下次继续努力';
        }
        $setup['msgstr']=json_decode($setup['msgstr'],true);
        $url = 'https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send?access_token='.$this->wx_get_token();
        $data['touser']=$user['open_id'];
        $data['template_id']=$setup['jieguo_msg'];
        $data['form_id']=$formid['formid'];
        $data['page']='hc_dati/pages/index/index';
        $data['data']['keyword1']['value']=$setup['msgstr']['msgstr_name'];
        $data['data']['keyword1']['color']='#173177';
        $data['data']['keyword2']['value']=date('Y-m-d H:i:s', time());
        $data['data']['keyword2']['color']='#173177';
        $data['data']['keyword3']['value']=$tishi;
        $data['data']['keyword3']['color']='#000000';
        $json = json_encode($data);
        $data=$this->api_notice_increment($url,$json);
        pdo_update('dati_formid', array('status' => 1), array('id' => $formid['id']));
        return $data;
    }

    public function doPageZhili(){
        ob_end_clean();
        global $_GPC, $_W;
        $huojiang=array();
        $pxcanyu=pdo_getall('dati_pxcanyu', array('uniacid' => $_GPC['i']), array() , '','id DESC' , array(1,30));
        shuffle($pxcanyu);
        for($i=0;$i<count($pxcanyu);$i++){
            $useraa=pdo_get('dati_users', array('user_id' => $pxcanyu[$i]['user_id']));
            $huojiang[$i]='恭喜'.$useraa['nick_name'].'获得'.$pxcanyu[$i]['jiangxiang'];
        }
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $user['zhili']=pdo_getall('dati_users', array('uniacid' => $_GPC['i']), array() , '',array('dati_success DESC','user_id DESC') , array(1,30));

        $user['yili']=pdo_getall('dati_users', array('uniacid' => $_GPC['i']), array() , '','dati_sum DESC' , array(1,30));
        $user['setup']=$setup;
        $user['huojiang']=$huojiang;

        $pxperiods = pdo_getall('dati_pxperiods', array('uniacid' => $_GPC['i']), array() , '','id DESC' , array(1,1));
        $usersd=pdo_get('dati_users', array('user_id' => $_GPC['user_id']));

        $pxcanyus=pdo_get('dati_pxcanyu', array('user_id' => $_GPC['user_id'],'pxperiods_id'=>$pxperiods[0]['id'],'lingjiang_status'=>0));
        $pxcanyushibai=pdo_get('dati_pxcanyu', array('user_id' => $_GPC['user_id'],'pxperiods_id'=>$pxperiods[0]['id']));
        if($usersd['tankuang_cishu']>0&&!empty($pxcanyus)||empty($pxcanyushibai)&&$usersd['tankuang_cishu']>0){
            $user['tankuang']=1;
            pdo_update('dati_users', array('tankuang_cishu'=>$usersd['tankuang_cishu']-1), array('user_id' => $_GPC['user_id']));
        }else{
            $user['tankuang']=0;
        }




        $sumnum=0;
        $jiangpin = pdo_getall('dati_pxjiangpin', array('uniacid' => $_W['uniacid'],'status'=>1), array() , '','ranking_sort ASC');
        for($i=0;$i<count($jiangpin);$i++){
            $sumnum=$sumnum+$jiangpin[$i]['num'];
        }

        $user['qiming']=$pxperiods[0]['periods'];
        $xplingjaing=pdo_get('dati_pxcanyu', array('user_id' => $_GPC['user_id'],'pxperiods_id'=>$pxperiods[0]['id']));
        if($xplingjaing){
            $user['px_str']='恭喜您获得'.$xplingjaing['jiangxiang'].'，请前往领取';
            $user['mingci_str']='您获得第'.$xplingjaing['mingci'].'名';
            $user['anniutishi']='立即领奖';
        }else{
            $user['px_str']='您本次未中奖，请下次继续努力';
            $user['mingci_str']='您未上榜';
            $user['anniutishi']='再接再厉';
        }
        $this->result(0, '获取成功', $user);
    }

    public function doPagePxhuojiang(){
        ob_end_clean();
        global $_GPC, $_W;
        $pxcanyu=pdo_getall('dati_pxcanyu', array('uniacid' => $_GPC['i']), array() , '','pxperiods_id DESC' , array(1,30));
        shuffle($pxcanyu);
        for($i=0;$i<count($pxcanyu);$i++){
            $user=pdo_get('dati_users', array('user_id' => $pxcanyu[$i]['user_id']));
            $pxperiods=pdo_get('dati_pxperiods', array('id' => $pxcanyu[$i]['pxperiods_id']));
            $pxcanyu[$i]['nick_name']=$user['nick_name'];
            $pxcanyu[$i]['head_pic']=$user['head_pic'];
            $pxcanyu[$i]['goods_img']=$_W['attachurl'].$pxcanyu[$i]['goods_img'];
            $pxcanyu[$i]['pxperiods']='第'.$pxperiods['periods'].'期';
        }
        $this->result(0, '获取成功', $pxcanyu);
    }

    public function doPagePxjiangpin(){
        ob_end_clean();
        global $_GPC, $_W;
        $jiangpin=pdo_getall('dati_pxjiangpin', array('status' => 1,'uniacid'=>$_GPC['i']),array(),'','sort desc');
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        for($i=0;$i<count($jiangpin);$i++){
            $jiangpin[$i]['thumb']=$_W['attachurl'].$jiangpin[$i]['thumb'];
        }
        $data['jiangpin']=$jiangpin;
        $data['canyucishu']=$setup['canyucishu'];
        if($setup['xuni_status']==1){
            $data['canyucishu']=$setup['xuni_meb'];
        }

        return $this->result(0, '获取成功', $data);
    }

    public function doPagePxjiangpinxq()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $id = $_GPC['id'];
        $jiangpin=pdo_get('dati_pxjiangpin', array('id' => $id));
        $jiangpin['thumb']=$_W['attachurl'].$jiangpin['thumb'];
        $this->result(0, '获取成功', $jiangpin);
    }

    public function doPagePxlingjiang()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $pxjiangpin_id = $_GPC['id'];
        $user_id = $_GPC['user_id'];
        $pxjiangpin=pdo_get('dati_pxjiangpin', array('id' => $pxjiangpin_id));
        $pxcanyu=pdo_get('dati_pxcanyu', array('user_id' => $user_id,'lingjiang_status'=>0,'ranking_sort'=>$pxjiangpin['ranking_sort']));
        if(empty($pxcanyu)){
            $data['lj_stact']=0;
        }else{
            $data['lj_stact']=$pxcanyu['id'];
        }
        $this->result(0, '获取成功', $data);
    }

    public function doPagePxfajiang()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $lj_stact = $_GPC['lj_stact'];
        $data['userName'] = $_GPC['userName'];
        $data['postalCode'] = $_GPC['postalCode'];
        $data['provinceName'] = $_GPC['provinceName'];
        $data['cityName'] = $_GPC['cityName'];
        $data['countyName'] = $_GPC['countyName'];
        $data['detailInfo'] = $_GPC['detailInfo'];;
        $data['telNumber'] = $_GPC['telNumber'];
        $data['lingjiang_status'] = 1;
        $data['lingjiang_time'] = time();
        pdo_update('dati_pxcanyu', $data, array('id' => $lj_stact));
        return $this->result(0, '获取成功', 1);
    }

    public function doPagePxwodejiangpin()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $user_id = $_GPC['user_id'];
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $jiangpin=pdo_getall('dati_pxcanyu', array('user_id' => $user_id),array(),'','lingjiang_time desc');
        for($i=0;$i<count($jiangpin);$i++){
            $jiangpin[$i]['thumb']=$_W['attachurl'].$jiangpin[$i]['goods_img'];
            $jiangpin[$i]['name']=$jiangpin[$i]['goods_name'];
            $jiangpin[$i]['danhao']=$setup['danhao'];
            $jiangpin[$i]['gongsi']=$setup['gongsi'];
            if($jiangpin[$i]['hexiao_status']==0){
                $jiangpin[$i]['danhao']=$setup['danhao'];
                $jiangpin[$i]['gongsi']=$setup['gongsi'];
            }else{
                $jiangpin[$i]['danhao']=$setup['hexiao_str1'];
                $jiangpin[$i]['gongsi']=$setup['hexiao_str2'];
            }
            if($jiangpin[$i]['lingjiang_status']==0){
                $jiangpin[$i]['lingjiang_status']='未领取';
            }
            if($jiangpin[$i]['lingjiang_status']==1){
                $jiangpin[$i]['lingjiang_status']='已领取，未发放';
            }
            if($jiangpin[$i]['lingjiang_status']==2){
                $jiangpin[$i]['lingjiang_status']='已发放';
            }
        }
        return $this->result(0, '获取成功', $jiangpin);
    }

    public function doPageQunnei(){
        ob_end_clean();
        global $_GPC, $_W;
        $user_id=$_GPC['user_id'];
        $user = pdo_get('dati_users', array('user_id' => $user_id));
        $zhuanfa=pdo_getall('dati_zhuanfa', array('uniacid' => $_GPC['i'],'openGId'=>$user['openGId']));
        $data=$this->assoc_unique($zhuanfa,'openid');
        for($i=0;$i<count($data);$i++){
            $users[$i]=pdo_get('dati_users', array('open_id' => $data[$i]['openid']));
        }
        $users=$this->arraySequence($users,'dati_zuida','SORT_DESC');
        $this->result(0, '获取成功', $users);
    }
    function arraySequence($array, $field, $sort = 'SORT_DESC')
    {
        $arrSort = array();
        foreach ($array as $uniqid => $row) {
            foreach ($row as $key => $value) {
                $arrSort[$key][$uniqid] = $value;
            }
        }
        array_multisort($arrSort[$field], constant($sort), $array);
        return $array;
    }

    function assoc_unique($arr, $key) {
        $tmp_arr = array();
        foreach ($arr as $k => $v) {
            if (in_array($v[$key], $tmp_arr)) {//搜索$v[$key]是否在$tmp_arr数组中存在，若存在返回true
                unset($arr[$k]);
            } else {
                $tmp_arr[] = $v[$key];
            }
        }
        sort($arr); //sort函数对数组进行排序
        return $arr;
    }

    public function doPageJiangpin(){
        ob_end_clean();
        global $_GPC, $_W;
        $jiangpin=pdo_getall('dati_jiangpin', array('stact' => 1,'uniacid'=>$_GPC['i']),array(),'','sort desc');
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        for($i=0;$i<count($jiangpin);$i++){
            $jiangpin[$i]['thumb']=$_W['attachurl'].$jiangpin[$i]['thumb'];
        }
        $jiangpin['jiangpin']=$jiangpin;
        $jiangpin['tishi']=$setup['lianxi'];
        return $this->result(0, '获取成功', $jiangpin);
    }

    public function doPageJiangpinxq()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $id = $_GPC['id'];
        $jiangpin=pdo_get('dati_jiangpin', array('id' => $id));
        $jiangpin['thumb']=$_W['attachurl'].$jiangpin['thumb'];
        $this->result(0, '获取成功', $jiangpin);
    }

    public function doPageLingjiang()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $user_id = $_GPC['user_id'];
        $dati_canyu=pdo_get('dati_canyu', array('user_id' => $user_id,'status'=>1,'lingjiang_status'=>0));
        if(empty($dati_canyu)){
            $data['lj_stact']=0;
        }else{
            $data['lj_stact']=1;
        }
        $this->result(0, '获取成功', $data);
    }

    public function doPageFajiang(){
        ob_end_clean();
        global $_GPC, $_W;
        $data['user_id'] = $_GPC['user_id'];
        $data['uniacid'] = $_GPC['i'];
        $data['userName'] = $_GPC['userName'];
        $data['postalCode'] = $_GPC['postalCode'];
        $data['provinceName'] = $_GPC['provinceName'];
        $data['cityName'] = $_GPC['cityName'];
        $data['countyName'] = $_GPC['countyName'];
        $data['detailInfo'] = $_GPC['detailInfo'];
        $data['telNumber'] = $_GPC['telNumber'];
        $data['jiangpin_id'] = $_GPC['jiangpin_id'];
        $data['status'] = 0;
        $data['addtime'] = time();
        $user = pdo_get('dati_users', array('user_id' => $data['user_id']));
        $dati_canyu=pdo_get('dati_canyu', array('user_id' => $user['user_id'],'status'=>1,'lingjiang_status'=>0));
        $data['canyu_id'] = $dati_canyu['id'];
        $jiangpin=pdo_get('dati_jiangpin', array('id' => $data['jiangpin_id']));
        $data['goods_name']=$jiangpin['name'];
        $data['goods_img']=$jiangpin['thumb'];
        $data['jiangpin_status']=$jiangpin['jiangpin_status'];
        pdo_insert('dati_lingjiang', $data);
        pdo_update('dati_canyu', array('lingjiang_status' =>1), array('id' => $dati_canyu['id']));
        return $this->result(0, '获取成功', 1);
    }

    public function doPageWodejiangpin()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $user_id = $_GPC['user_id'];
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $jiangpin=pdo_getall('dati_lingjiang', array('user_id' => $user_id),array(),'','id desc');
        for($i=0;$i<count($jiangpin);$i++){
            $jiangpin[$i]['thumb']=$_W['attachurl'].$jiangpin[$i]['goods_img'];
            $jiangpin[$i]['name']=$jiangpin[$i]['goods_name'];
            $jiangpin[$i]['addtime']=date("Y-m-d", $jiangpin[$i]['addtime']);
            if($jiangpin[$i]['jiangpin_status']==0){
                $jiangpin[$i]['danhao']=$setup['danhao'];
                $jiangpin[$i]['gongsi']=$setup['gongsi'];
            }else{
                $jiangpin[$i]['danhao']=$setup['hexiao_str1'];
                $jiangpin[$i]['gongsi']=$setup['hexiao_str2'];
            }

        }
        return $this->result(0, '获取成功', $jiangpin);
    }

    public function doPagePay()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $user_id = $_GPC['user_id'];
        $goods_id=$_GPC['goods_id'];
        $goods=pdo_get('dati_goods', array('goods_id' => $goods_id));
        $user=pdo_get('dati_users', array('user_id' => $user_id));
        $open_id=$user['open_id'];
        //创建订单
        $data['order_sn'] = 'ZL' . time() . rand(1000, 9999);
        $data['add_time'] = time();
        $data['open_id'] = $open_id;
        $data['order_money'] = $goods['xianjia'];
        $data['uniacid'] = $_GPC['i'];
        $data['goods_id'] = $goods_id;
        $data['cishu'] = $goods['cishu'];
        $result = pdo_insert('dati_order', $data);
        $order_id = pdo_insertid();
        $order = pdo_get('dati_order', array('order_id' => $order_id, 'uniacid' => $_GPC['i']));
        //获取支付参数
        $account = pdo_get('account_wxapp', array('uniacid' => $_GPC['i']));
        $appid = $account['key'];
        $wxapp = pdo_get('uni_settings', array('uniacid' => $_GPC['i']));
        $payment = unserialize($wxapp['payment']);
        $mch_id = $payment['wechat']['mchid'];
        $signkey = $payment['wechat']['signkey'];
        //返回小程序参数
        $notify_url = $_W['siteroot'] . '/addons/hc_dati/wxpay.php';
        $res = $this->getPrePayOrder($appid, $mch_id, $notify_url, $order['order_sn'], $order['order_money'], $open_id, $signkey);
        if ($res['return_code'] == 'SUCCESS') {
            $wxdata = $this->getOrder($appid, $res['prepay_id'], $signkey);
            pdo_update('dati_order', array('prepay_id' => $res['prepay_id']), array('order_id' => $order_id));
            return $this->result(0, '操作成功', $wxdata);
        } else {
            return $this->result(1, '操作失败', $res);
        }
    }

    function dopagePay1(){
        ob_end_clean();
        global $_GPC, $_W;
        $user_id = $_GPC['user_id'];
        $goods_id=$_GPC['goods_id'];
        $goods=pdo_get('dati_goods', array('goods_id' => $goods_id));
        $user=pdo_get('dati_users', array('user_id' => $user_id));
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $params = array();
        $params["cusid"] = $setup['tl_cusid'];
        $params["appid"] = $setup['tl_appid'];
        $params["version"] = '11';
        $params["trxamt"] = $goods['xianjia']*100;
        $params["reqsn"] = 'ZL' . time() . rand(1000, 9999);//订单号,自行生成
        $params["paytype"] = "W06";
        $params["randomstr"] = 'ZL' . time();//
        $params["body"] = $goods['name'];
        $params["remark"] = $goods['name'];
        $params["acct"] = $user['open_id'];
        $params["limit_pay"] = "no_credit";
        $params["notify_url"] = $_W['siteroot'] . '/addons/hc_dati/wxpay2.php';
        $params["sign"] = $this->SignArray($params,$setup['tl_miyao']);//签名
        $paramsStr = $this->ToUrlParams($params);
        $url = 'https://vsp.allinpay.com/apiweb/unitorder'. "/pay";
        $rsp = $this->request($url, $paramsStr);
        $rspArray = json_decode($rsp, true);
        $data['order_sn'] = $params["reqsn"];
        $data['add_time'] = time();
        $data['open_id'] = $user['open_id'];
        $data['order_money'] = $goods['xianjia'];
        $data['uniacid'] = $_GPC['i'];
        $data['goods_id'] = $goods_id;
        $data['cishu'] = $goods['cishu'];
        $result = pdo_insert('dati_order', $data);
        if($this->validSign($rspArray)){
            $aa = json_decode($rspArray['payinfo'], true);
            return $this->result(0, '操作成功', $aa);
        }else{
            return $this->result(1,$this->validSign($rspArray));
        }
    }

    public  function SignArray(array $array,$appkey){
        $array['key'] = $appkey;// 将key放到数组中一起进行排序和组装
        ksort($array);
        $blankStr = $this->ToUrlParams($array);
        $sign = md5($blankStr);
        return $sign;
    }

    public  function ToUrlParams(array $array)
    {
        $buff = "";
        foreach ($array as $k => $v)
        {
            if($v != "" && !is_array($v)){
                $buff .= $k . "=" . $v . "&";
            }
        }

        $buff = trim($buff, "&");
        return $buff;
    }

    //发送请求操作仅供参考,不为最佳实践
    function request($url,$params){
        $ch = curl_init();
        $this_header = array("content-type: application/x-www-form-urlencoded;charset=UTF-8");
        curl_setopt($ch,CURLOPT_HTTPHEADER,$this_header);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);//如果不加验证,就设false,商户自行处理
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

        $output = curl_exec($ch);
        curl_close($ch);
        return  $output;
    }

    //验签
    function validSign($array){
        global $_GPC, $_W;
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        if("SUCCESS"==$array["retcode"]){
            $signRsp = strtolower($array["sign"]);
            $array["sign"] = "";
            $sign =  strtolower($this->SignArray($array, $setup['tl_miyao']));
            if($sign==$signRsp){
                return TRUE;
            }
            else {
                return "验签失败:".$signRsp."--".$sign;
            }
        }
        else{
            return $array["retmsg"];
        }

        return FALSE;
    }

    public function getPrePayOrder($appid, $mch_id, $notify_url, $out_trade_no, $total_fee, $open_id, $signkey)
    {

        $model = new HcfkModel();
        $url = "https://api.mch.weixin.qq.com/pay/unifiedorder";
        $data["appid"] = $appid;
        $data["body"] = '答题挑战';
        $data["mch_id"] = $mch_id;
        $data["nonce_str"] = $model->getRandChar(32);
        $data["notify_url"] = $notify_url;
        $data["out_trade_no"] = $out_trade_no;
        $data["spbill_create_ip"] = $model->get_client_ip();
        $data["total_fee"] = $total_fee * 100;
        $data["trade_type"] = "JSAPI";
        $data["openid"] = $open_id;

        //echo "<pre>";print_r($data);die;
        $data["sign"] = $model->getSign($data, $signkey);
        $xml = $model->arrayToXml($data);
        // print_r($data);
        // echo $xml;
        // exit;
        $response = $model->postXmlCurl($xml, $url);
        // 将微信返回的结果xml转成数组
        return $model->xmlstr_to_array($response);
    }

    // 执行第二次签名，才能返回给客户端使用
    public function getOrder($appid, $prepayId, $signkey)
    {
        $model = new HcfkModel();
        $data["appId"] = $appid;
        $data["nonceStr"] = $model->getRandChar(32);
        $data["package"] = "prepay_id=" . $prepayId;
        $data['signType'] = "MD5";
        $data["timeStamp"] = time();
        $data["sign"] = $model->getSign1($data, $signkey);
        return $data;
    }

    public function doPageWode()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $user_id = $_GPC['user_id'];
        $users=pdo_get('dati_users', array('user_id' => $user_id));
        $guanggao=pdo_getall('dati_guanggao', array('uniacid' => $_GPC['i'],'status'=>1), array() , '','sort DESC');
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        for($i=0;$i<count($guanggao);$i++){
            $guanggao[$i]['img']=$_W['attachurl'].$guanggao[$i]['img'];
            $guanggao[$i]['qzq']=$setup['guanggaostr'];
        }
        $data['wodejiangpin_pic']=$_W['attachurl'].$setup['wodejiangpin_pic'];
        $data['lianxiwomen_pic']=$_W['attachurl'].$setup['lianxiwomen_pic'];
        $data['guanggao']=$guanggao;
        $data['wawa']=$users['dati_success'];
        $data['jihui']=$users['dati_jihui'];
        $data['yitiaozhan']=$users['dati_sum'];
        $data['yqm']=1;

        return $this->result(0, '获取成功', $data);
    }

    public function doPageKefu()
    {
        ob_end_clean();
        global $_GPC, $_W;

        $user_id = $_GPC['user_id'];
        $users=pdo_get('dati_users', array('user_id' => $user_id));
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $post_url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$this->wx_get_token();
        $post_data = json_encode(array(
            'touser' =>$users['open_id'],
            'msgtype' => 'link',
            'link' => array(
                'title'=>$setup['kefu_title'],
                'description'=>$setup['kefu_miaosu'],
                'url'=>$setup['kefu_url'],
                'thumb_url'=>$_W['attachurl'].$setup['kefu_img'],
            ),
        ), JSON_UNESCAPED_UNICODE);
        $json = $this->api_notice_increment($post_url,$post_data);
        $arr = json_decode($json,true);
        if($arr['errcode']!=0){
            $this->kefu($user_id);
        }
        $myfile = fopen(IA_ROOT."/addons/hc_dati/kefu.txt", 'w');
        fwrite($myfile, $json);
        fclose($myfile);
        $json=json_decode($json,true);
        return $this->result(0, '获取成功',$json);
    }


    public function kefu($user_id)
    {
        ob_end_clean();
        global $_GPC, $_W;
        $users=pdo_get('dati_users', array('user_id' => $user_id));
        $setup=pdo_get('dati_setup', array('uniacid' => $users['uniacid']));
        $post_url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$this->wx_get_token();
        $post_data = json_encode(array(
            'touser' =>$users['open_id'],
            'msgtype' => 'link',
            'link' => array(
                'title'=>$setup['kefu_title'],
                'description'=>$setup['kefu_miaosu'],
                'url'=>$setup['kefu_url'],
                'thumb_url'=>$_W['attachurl'].$setup['kefu_img'],
            ),
        ), JSON_UNESCAPED_UNICODE);

        $json = $this->api_notice_increment($post_url,$post_data);
        $json=json_decode($json,true);
        if($json['errcode']!=0){
            $this->kefu($user_id);
        }
        return $this->result(0, '获取成功',$json);
    }


    public function doPageBuy()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $user_id = $_GPC['user_id'];
        $goods_id = $_GPC['goods_id'];
        $users=pdo_get('dati_users', array('user_id' => $user_id));
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $goods=pdo_get('dati_goods', array('goods_id' => $goods_id));
        $post_url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$this->wx_get_token();
        $post_data = json_encode(array(
            'touser' =>$users['open_id'],
            'msgtype' => 'link',
            'link' => array(
                'title'=>$goods['gr_title'],
                'description'=>$goods['gr_miaosu'],
                'url'=>$_W['siteroot'].'/app/index.php?i='.$_GPC['i'].'&t='.$_GPC['t'].'&v='.$_GPC['v'].'&user_id='.$user_id.'&goods_id='.$goods_id.'&from=wxapp&c=entry&a=wxapp&do=zhifu&m=hc_dati',
                'thumb_url'=>$_W['attachurl'].$goods['img'],
            ),
        ), JSON_UNESCAPED_UNICODE);

        $json = $this->api_notice_increment($post_url,$post_data);
        $myfile = fopen(IA_ROOT."/addons/hc_dati/kefu.txt", 'w');
        fwrite($myfile, $json);
        fclose($myfile);
        $json=json_decode($json,true);
        if($json['errcode']!=0){
            $this->buy($user_id,$goods_id);
        }
        return $this->result(0, '获取成功',$json);
    }


    public function buy($user_id,$goods_id)
    {
        ob_end_clean();
        global $_GPC, $_W;
        $users=pdo_get('dati_users', array('user_id' => $user_id));
        $setup=pdo_get('dati_setup', array('uniacid' => $users['uniacid']));
        $goods=pdo_get('dati_goods', array('goods_id' => $goods_id));
        $post_url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$this->wx_get_token();
        $post_data = json_encode(array(
            'touser' =>$users['open_id'],
            'msgtype' => 'link',
            'link' => array(
                'title'=>$goods['gr_title'],
                'description'=>$goods['gr_miaosu'],
                'url'=>$_W['siteroot'].'/app/index.php?i='.$_GPC['i'].'&t='.$_GPC['t'].'&v='.$_GPC['v'].'&user_id='.$user_id.'&goods_id='.$goods_id.'&from=wxapp&c=entry&a=wxapp&do=zhifu&m=hc_dati',
                'thumb_url'=>$_W['attachurl'].$goods['img'],
            ),
        ), JSON_UNESCAPED_UNICODE);

        $json = $this->api_notice_increment($post_url,$post_data);
        $json=json_decode($json,true);
        return $this->result(0, '获取成功',$json);
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

    public function doPageZhuanfa(){
        global $_GPC, $_W;
        ob_end_clean();
        $user_id=$_GPC['user_id'];
        $img=$this->createImg($user_id);
        $res['img']=$img;
        return $this->result(0, '上传成功',$res);
    }

    //GD库合成图片

    function createImg($user_id){
        global $_GPC, $_W;
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        ob_clean();
//        header("Content-type: image/png");
        $user=pdo_get('dati_users', array('user_id' => $user_id));
        //原始图像
        $dst = $_W['siteroot']."addons/hc_dati/tupian.png";
        //得到原始图片信息
        $dst_im = @imagecreatefrompng($dst);
        //创建小程序码图片
        $src = $_W['siteroot'].$this->getQRCode($user_id);//获取小程序码地址
        $src_im = imagecreatefrompng($src);//生成小程序码
        list($width, $height) = getimagesize($src); //获取小程序码图片大小
        $new_x = 150;
        $new_y = 150;
        $image_p = imagecreatetruecolor($new_x, $new_y); //设置缩略图
        $image = imagecreatefromjpeg($src);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_x, $new_y, $width, $height);
        imagecopymerge($dst_im,$image_p,120,500,0,0,$new_x,$new_y,100);


        if(empty($setup['daohang'])){
            $setup['daoh']=$_W['siteroot'].'/addons/hc_dati/template/web/img/daohang1.png';
        }else{
            $setup['daoh']=$_W['attachurl'].$setup['daohang'];
        }
        $src = $setup['daoh'];//获取小程序码地址
        $src_im = imagecreatefrompng($src);//生成小程序码
        list($width, $height) = getimagesize($src); //获取小程序码图片大小
        $new_x = 400;
        $new_y = 270;
        $image_p = imagecreatetruecolor($new_x, $new_y); //设置缩略图
        $image = imagecreatefrompng($src);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_x, $new_y, $width, $height);
        imagecopymerge($dst_im,$image_p,90,100,0,0,$new_x,$new_y,100);


        $filename = dirname(__FILE__)."/tupian2.png";
        imagepng($dst_im,$filename);
        //输出合并后水印图片
//        imagejpeg($dst_im);
//        imagedestroy($dst_im);
//        imagedestroy($src_im);
        return $_W['siteroot']."addons/hc_dati/tupian2.png";
    }

    // 服务端生成图片

    public function getQRCode($user_id) {
        global $_GPC, $_W;
        // 获取access_token
        $accessTokenObject = json_decode(file_get_contents('https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$_W['account']['key'].'&secret='.$_W['account']['secret']));
        // 拼接微信服务端获取二维码需要的url，见文档https://mp.weixin.qq.com/debug/wxadoc/dev/api/qrcode.html
        $url = 'https://api.weixin.qq.com/wxa/getwxacodeunlimit?access_token=' . $accessTokenObject->access_token;
        $json = '{"scene": "/user_id/'.$user_id.'", "width": 50, "page": ""}';
        $data=$this->api_notice_increment($url,$json);
        $filename = dirname(__FILE__)."/erweima.png";
        $local_file = fopen($filename, 'w');
        if (false !== $local_file) {
            if (false !== fwrite($local_file, $data)) {
                fclose($local_file);
            }
        }
        return "addons/hc_dati/erweima.png";
    }

    public function doPageFenlei(){
        ob_end_clean();
        global $_GPC, $_W;
        $fenlei=pdo_getall('dati_fenlei', array('uniacid' => $_GPC['i'],'status'=>1), array() , '','sort desc');
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        for($i=0;$i<count($fenlei);$i++){
            if($setup['fenlei_status']==0){
                $fenlei[$i]['pic']=$fenlei[$i]['img1'];
            }
            if($setup['fenlei_status']==1){
                $fenlei[$i]['pic']=$fenlei[$i]['img2'];
            }
            if($setup['fenlei_status']==2){
                $fenlei[$i]['pic']=$fenlei[$i]['img3'];
            }
            $fenlei[$i]['pic']=$_W['attachurl'].$fenlei[$i]['pic'];
        }
        $data['guanzhu_str']=$_W['attachurl'].$setup['guanzhu_str'];
        $data['fenlei_bgimg']=$_W['attachurl'].$setup['fenlei_bgimg'];
        $data['fenlei']=$fenlei;
        return $this->result(0, '上传成功',$data);
    }
    public function doPageGuanzhu(){
        ob_end_clean();
        global $_GPC, $_W;
        $user_id=$_GPC['user_id'];
        $user=pdo_get('dati_users', array('user_id' => $user_id));
        if($user['guanzhu']==0){
            pdo_update('dati_users', array('dati_jihui'=>$user['dati_jihui']+1,'guanzhu'=>1), array('user_id' => $user_id));
        }
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        return $this->result(0, '成功',$_W['attachurl'].$setup['gongzhong_img']);
    }

    public function doPageJieping()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $user_id=$_GPC['user_id'];
        pdo_update('dati_users', array('status'=>0), array('user_id' => $user_id));
        return $this->result(0, '获取成功', 1);
    }

    public function doPageAld()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $data['app_key']=$setup['ald_key'];
        $data['appid']=$_W['account']['key'];
        $data['appsecret']=$_W['account']['secret'];
        return $this->result(0, '获取成功', $data);
    }

    public function doPagePxguize()
    {
        ob_end_clean();
        global $_GPC, $_W;
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        $data['pxguize1']=$setup['pxguize1'];
        $data['pxguize2']=$setup['pxguize2'];
        $data['pxguize3']=$setup['pxguize3'];
        $data['pxguize4']=$setup['pxguize4'];
        return $this->result(0, '获取成功', $data);
    }

    public function doPageZhifu()
    {
        global $_W, $_GPC;
        $user_id = $_GPC['user_id'];
        $goods_id=$_GPC['goods_id'];
        $goods=pdo_get('dati_goods', array('goods_id' => $goods_id));
        $user=pdo_get('dati_users', array('user_id' => $user_id));
        $open_id=$user['open_id'];
        $notify_url = $_W['siteroot'] . '/addons/hc_dati/wxpay1.php';
        $setup=pdo_get('dati_setup', array('uniacid' => $_GPC['i']));
        //创建订单
        $data['order_sn'] = time() . rand(1000, 9999);
        $data['add_time'] = time();
        $data['open_id'] = $open_id;
        $data['order_money'] = $goods['xianjia'];
        $data['uniacid'] = $_GPC['i'];
        $data['goods_id'] = $goods_id;
        $data['cishu'] = $goods['cishu'];
        $result = pdo_insert('dati_order', $data);
        echo '
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>购买</title>
</head>
<style>
body{
	 width:100%;
	 height:100%;
	 background:#efeef3;
	 margin:0;
	 padding:0;
	 overflow: hidden;
	 font-size:12px;
}
.hua{
  display:flex;
  width:100%;
  height:30em;
  margin-top:4em;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
}
.huapmg{
    width: 10em;
    height: 10em;
}
.mygou{
  color:#010102;
  font-size:1.5em;
}
.jishua{
  font-weight:500;
  color:#010102;
  font-size:2em;
}
.gou{
	display:block;
	width: 90%;
    height: 2.5em;
    background: #51a938;
    border-radius: 10px;
    font-size: 1.5em;
    padding:0;
    margin:0;
    border:0;
    color: #fff;
}
.tou{
	width:100%;
	height:73px;
	display:flex;
	justify-content: center;
	align-items: center;
	position:relative;
}
.left{
	width:30px;
	height:30px;
	position:absolute;
	left:0;
}
.goumai{
	color:#010102;
	font-size:2em;
}
</style>
<body>
<form name="myform" action="http://pay1.youyunnet.com/pay/" method="post">
	<div class="hua">
		<img class="huapmg" src="'.$data['siteroot'].'/addons/hc_dati/shoop_03.png"/>
		<input name="pid" type="hidden" id="pid" value="'.$setup['gr_pid'].'" />
		<input name="money" type="hidden" id="money" value="'.$data['order_money'].'"/>
		<input name="data" type="hidden" id="data" value="'.$data['order_sn'].'" />
		<input name="url" type="hidden" id="url" value=""/>
		<input name="lb" type="hidden" value="3" /></td>
		<span class="mygou">我的购买</span>
		<span class="jishua">机会：'.$goods['cishu'].'次</span>
		<button type="submit" name="Submit" class="gou">购买</button>
	</div>
</form>
</body>
</html>';
    }
}