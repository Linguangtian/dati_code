<?php /** * 打卡小程序模块小程序支付 * * @author huichuang * @url */
define('IN_MOBILE', true);
require '../../framework/bootstrap.inc.php';
//$postStr = $GLOBALS['HTTP_RAW_POST_DATA']; // 这里拿到微信返回的数据结果
$postStr = file_get_contents('php://input');
$aa=$_POST['cusorderid'];
file_put_contents("./wx.txt", $postStr, FILE_APPEND);
if ($_POST['trxstatus'] == 0000) {
    $osn = trim($_POST['cusorderid']);
    $res = pdo_get('dati_order', array('order_sn' => $osn));
    $myfile = fopen("order.txt", 'w');
    fwrite($myfile, json_encode($res));
    if ($res && $res['status'] == 0) {
        $goods = pdo_get('dati_goods', array('goods_id' => $res['goods_id']));
        $user = pdo_get('dati_users', array('open_id' => $res['open_id']));
        if ($res && $res['status'] == 0) {
            pdo_update('dati_order', array('pay_status' => 1, 'pay_time' => time(), 'time' => date('Y-m-d', time())), array('order_sn' => $osn));
            pdo_update('dati_users', array('dati_jihui' => $user['dati_jihui'] + $goods['cishu'], 'money' => $res['money']), array('open_id' => $res['open_id']));
        }
    }
    echo 'success';
    return;
}