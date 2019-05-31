<?php /** * 打卡小程序模块小程序支付 * * @author huichuang * @url */
define('IN_MOBILE', true);
require '../../framework/bootstrap.inc.php';

      $ddh = $_REQUEST['ddh']; //支付宝订单号

      $key = $_REQUEST['key']; //KEY验证

      $name = $_REQUEST['name']; //备注信息

      $lb = $_REQUEST['lb']; //分类 =1 支付宝 =2财付通 =3 微信

        $money = $_REQUEST['money'];//金额

      $paytime = $_REQUEST['paytime'];//充值时间


if(empty($name))exit('appkey error');

    $osn = trim($name);
    $res = pdo_get('dati_order', array('order_sn' => $osn));
    $myfile = fopen("order1.txt", 'w');
    fwrite($myfile, json_encode($res));
    if ($res && $res['status'] == 0) {
        $goods = pdo_get('dati_goods', array('goods_id' => $res['goods_id']));
        $user = pdo_get('dati_users', array('open_id' => $res['open_id']));

            pdo_update('dati_order', array('pay_status' => 1, 'pay_time' => time(), 'time' => date('Y-m-d', time())), array('order_sn' => $osn));
            pdo_update('dati_users', array('dati_jihui' => $user['dati_jihui'] + $goods['cishu'], 'money' => $money), array('open_id' => $res['open_id']));
            exit('ok');
        }else{
            exit('order error');
        }



