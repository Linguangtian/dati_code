<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="we7-page-title">
    参数设置
</div>
<ul class="we7-page-tab">
    <li <?php  if($action == 'payment') { ?> class="active"<?php  } ?>>
        <a href="<?php  echo url('wxapp/payment', array('version_id' => $version_id))?>">支付参数</a>
    </li>
    <li <?php  if($action == 'refund') { ?> class="active"<?php  } ?>>
        <a href="<?php  echo url('wxapp/refund', array('version_id' => $version_id))?>">退款配置</a>
    </li>
</ul>
<div class="js-profile-payment" ng-controller="PaymentCtrl" ng-cloak>
    <table class="table we7-table table-hover table-form">
        <col width="140px " />
        <col width="400px"/>
        <col width="140px" />
        <tr>
            <th colspan="3">支付参数</th>
        </tr>
        <tr>
            <td>
                微信支付
            </td>
            <td>
                <div class="related-info">
                    <div>接口类型:新版</div>
                    <div>支付账号:<?php  echo $_W['uniaccount']['name'];?></div>
                </div>
            </td>
            <td class="text-center">
                <div class="link-group"><a href="javascript:;" data-toggle="modal" data-target="#weixin">修改</a></div>
            </td>
        </tr>
    </table>

    <!-- 微信修改 -->
    <div class="modal fade" id="weixin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="we7-modal-dialog modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <div class="modal-title">微信支付</div>
                </div>
                <div class="modal-body">
                    <div class="we7-form">
                        <div>
                            <div class="form-group">
                                <label for="" class="control-label col-sm-2">身份标识<br>(appId)</label>
                                <div class="form-controls col-sm-10">
                                    <input type="text" name="" disabled class="form-control" value="<?php  echo $_W['account']['key'];?>" placeholder="">
									<span class="help-block">
										公众号身份标识
										<a href="./index.php?c=account&amp;a=post&amp;uniacid=2">
                                            请通过修改公众号信息来保存
                                        </a>
									</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-sm-2">身份密钥<br>(appSecret)</label>
                                <div class="form-controls col-sm-10">
                                    <input type="text" disabled  value="<?php  echo $_W['account']['secret'];?>" name="" class="form-control" placeholder="">
									<span class="help-block">公众平台API(参考文档API 接口部分)的权限获取所需密钥Key
										<a href="./index.php?c=account&amp;a=post&amp;uniacid=2">
                                            请通过修改公众号信息来保存
                                        </a>
									</span>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="" class="control-label col-sm-2">微信支付商户号</label>
                                    <div class="form-controls col-sm-10">
                                        <input type="text" name="" ng-model="paysetting.wechat.mchid" class="form-control" placeholder="">
										<span class="help-block">
											财付通商户权限密钥
										</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label col-sm-2">微信支付秘钥</label>
                                    <div class="form-controls col-sm-10">
                                        <div class="input-group">
                                            <input type="text" name="" ng-model="paysetting.wechat.signkey" class="form-control" placeholder="">
                                            <a href="javascript:;" class="input-group-addon" ng-click="tokenGen('wechat.signkey')">生成新的秘钥</a>
                                        </div>
										<span class="help-block">
											财付通商户权限密钥
										</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" ng-click='saveEdit("wechat")'>确定</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    angular.module('wxApp').value('config', {
        'paysetting' : <?php  echo json_encode($pay_setting)?>,
        'saveurl' : "<?php  echo url('wxapp/payment/save_setting')?>",
        'get_setting_url' : "<?php  echo url('wxapp/payment/get_setting')?>"
    });
    angular.bootstrap($('.js-profile-payment'), ['wxApp']);
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>