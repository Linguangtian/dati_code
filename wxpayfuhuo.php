<?php /** * 打卡小程序模块小程序支付 * * @author huichuang * @url */
define('IN_MOBILE', true);
require '../../framework/bootstrap.inc.php';
//$postStr = $GLOBALS['HTTP_RAW_POST_DATA']; // 这里拿到微信返回的数据结果
$postStr = file_get_contents('php://input');
file_put_contents("./wxfh.txt", $postStr, FILE_APPEND);
libxml_disable_entity_loader(true);
$xmlstring = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
$getData = json_decode(json_encode($xmlstring), true);
$myfile = fopen("newfilefh.txt", 'w');
fwrite($myfile, json_encode($xmlstring));
if ($getData['total_fee'] && $getData['result_code'] == 'SUCCESS') {
    $osn = trim($getData['out_trade_no']);
    $res = pdo_get('dati_fuhuo', array('order_sn' => $osn));
    $myfile = fopen("orderfh.txt", 'w');
    fwrite($myfile, json_encode($res));
    if ($res && $res['status'] == 0) {
        pdo_update('dati_fuhuo', array('status' => 1, 'paytime' => time()), array('order_sn' => $osn));
    }
    echo 'success';
    return;
}