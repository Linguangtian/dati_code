<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<script src="/addons/hc_dati/template/web/img/color.js"></script>

<style>



    .set_div{



        display: none;



    }



    .help-block{



        color: red !important;



    }



    .xuanze img,.xuanzeone img{

        display: inline-block;

        max-width: 100%;

        height:100px;

        padding: 4px;

        line-height: 1.42857143;

        background-color: #fff;

        border: 1px solid #ddd;

        border-radius: 4px;

        -webkit-transition: all .2s ease-in-out;

        -o-transition: all .2s ease-in-out;

        transition: all .2s ease-in-out;

    }

    .xuanze .quia,.xuanzeone .quia{

        border:2px solid red;

    }



</style>

<ul class="nav nav-tabs" id="snav">

    <li class="active"><a>基础设置</a></li>

    <li><a>支付按钮设置</a></li>

    <li><a>导航图设置</a></li>

    <li><a>复活设置</a></li>

    <li><a>底部设置</a></li>

    <li><a>广告设置</a></li>

    <li><a>转发设置</a></li>

    <li><a>奖品设置</a></li>

    <li><a>审核设置</a></li>

    <li><a>人数设置</a></li>

    <li><a>关注设置</a></li>

    <li><a>支付设置</a></li>

    <li><a>模板消息</a></li>

    <li><a>阿拉丁配置</a></li>

    <li><a>流量主配置</a></li>

    <li><a>七牛云配置</a></li>

</ul>

<script>

    $('#snav li').click(function(){

        $('#snav li').removeClass('active');

        $(this).addClass('active');

        $('.set_div').hide();

        $('.set_div').eq($(this).index()).show();

    });

</script>



<form action="" method="post" class="form-horizontal form">

    <div class="panel panel-default set_div" style="display: block;">

        <div class="panel-heading">基础设置</div>

        <div class="help-block">安装本模块之后，必须先设置好前三项“小程序标题”“首页头部字提示”“联系客服提示”,其他信息才能保存成功。</div>

        <div class="panel-body">

            <div class="panel-body">

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">登录背景图</label>

                    <div class="col-sm-9">

                        <?php  echo tpl_form_field_image('denglu_bgk',$setup['denglu_bgk'])?>

                        <div class='help-block'><font color="red"><script>document.write(unescape('%u8BF4%u56FE%u8C31%u6E90%u7801%u7F51%u5206%u4EAB'));</script></font> 小程序登录页面背景图；1080*1742像素,png格式</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">首页背景图</label>

                    <div class="col-sm-9">

                        <?php  echo tpl_form_field_image('bg_color',$setup['bg_color'])?>

                        <div class='help-block'><font color="red"><script>document.write(unescape('&#x5947;&#x5154;&#x6E90;&#x7801;&#x793E;&#x533A;&#x5206;&#x4EAB;'));</script></font>小程序首页背景图；1080*1742像素,png格式</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">分类页面背景图</label>

                    <div class="col-sm-9">

                        <?php  echo tpl_form_field_image('fenlei_bgimg',$setup['fenlei_bgimg'])?>

                        <div class='help-block'><font color="red"><script>document.write(unescape('&#x5947;&#x5154;&#x6E90;&#x7801;&#x793E;&#x533A;&#x5206;&#x4EAB;'));</script></font>小程序分类页面背景图；1080*1742像素,png格式</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">分类页面关注图标</label>

                    <div class="col-sm-9">

                        <?php  echo tpl_form_field_image('guanzhu_str',$setup['guanzhu_str'])?>

                        <div class='help-block'><font color="red"><script>document.write(unescape('&#x5947;&#x5154;&#x6E90;&#x7801;&#x793E;&#x533A;&#x5206;&#x4EAB;'));</script></font>小程序分类页面关注图标；400*130像素,png格式</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序头部背景颜色</label>

                    <div class="col-sm-9">

                        <input type="text" onclick="Jcolor(this).color()" checked="checked" value="<?php  echo $setup['toubu_color'];?>"  name="toubu_color"/>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序底部背景颜色</label>

                    <div class="col-sm-9">

                        <input type="text" onclick="Jcolor(this).color()" checked="checked" value="<?php  echo $setup['dibu_color'];?>"  name="dibu_color"/>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">排行榜用户排名背景色设置</label>

                    <div class="col-sm-9">

                        <input type="text" onclick="Jcolor(this).color()" checked="checked" value="<?php  echo $setup['pxbpx_bkg'];?>"  name="pxbpx_bkg"/>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序半透明背景颜色设置</label>

                    <div class="col-sm-9">

                        <input type="text" value="<?php  echo $setup['yanse_bg'];?>" placeholder="rgba(255,255,255,0.5)" name="yanse_bg"/>

                        <div class='help-block'>rgba(255,255,255,0.5)这个是白色半透明，想改的可以去http://www.sioe.cn/yingyong/yanse-rgb-16/这个网站上看：十六进制颜色码转换成RGB颜色值</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序标题</label>

                    <div class="col-sm-9">

                        <input class='form-control' placeholder="我是答题王" name='xcx_name' value="<?php  echo $setup['xcx_name'];?>">

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">首页头部字提示</label>

                    <div class="col-sm-9">

                        <input class='form-control' placeholder="挑战成功免费送娃娃" name='toubu' value="<?php  echo $setup['toubu'];?>">

                    </div>

                </div>

                <!--<div class="form-group">-->

                    <!--<label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏页面头部字提示</label>-->

                    <!--<div class="col-sm-9">-->

                        <!--<input class='form-control' placeholder="答对12题送娃娃" name='youxi_toubu' value="<?php  echo $setup['youxi_toubu'];?>">-->

                    <!--</div>-->

                <!--</div>-->

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">首页联系客服图片</label>

                    <div class="col-sm-9">

                        <?php  echo tpl_form_field_image('lianxi',$setup['lianxi'])?>

                        <div class='help-block'>首页中间部位的联系客服；992*300像素</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">奖品的统称</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="奖品" name='tongcheng' value="<?php  echo $setup['tongcheng'];?>">

                        <div class="help-block">如果想用其他奖品，此处填写统称，比如：手机，饰品，奖品</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">我的奖品背景</label>

                    <div class="col-sm-9 col-xs-12">

                        <div class="col-sm-9">

                            <?php  echo tpl_form_field_image('wodejiangpin_pic',$setup['wodejiangpin_pic'])?>

                            <div class='help-block'>我的奖品页面我的奖品背景；424*224像素</div>

                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">联系我们背景</label>

                    <div class="col-sm-9 col-xs-12">

                        <div class="col-sm-9">

                            <?php  echo tpl_form_field_image('lianxiwomen_pic',$setup['lianxiwomen_pic'])?>

                            <div class='help-block'>我的奖品页面联系我们背景；424*224像素</div>

                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">首页转发次数加+1自定义图</label>

                    <div class="col-sm-9 col-xs-12">

                        <div class="col-sm-9">

                            <?php  echo tpl_form_field_image('huodejihuitext',$setup['huodejihuitext'])?>

                            <div class='help-block'>小程序首页展示的转发图；905*124像素,png格式</div>

                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">广告提示</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="去赚钱" name='guanggaostr' value="<?php  echo $setup['guanggaostr'];?>">

                        <div class="help-block">我的奖品页面“去赚钱”三个字自定义</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">未转发到群提示</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="" name='zhuanfaqun' value="<?php  echo $setup['zhuanfaqun'];?>">

                        <div class="help-block">未转发到群提示</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">奖品价值</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="54" name='jiazhi' value="<?php  echo $setup['jiazhi'];?>">

                        <div class="help-block">在智力排行榜里成功的次数乘以奖品价值</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">挑战题数</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="6" name='shuzi' value="<?php  echo $setup['shuzi'];?>">

                        <div class="help-block">与“导航图设置”中的“模版图”图上的题数相对应。 <br> 比如：模板图选择第一张1-12，此处填写为12；模板图选择第四张1-10，此处填写为10

                            <br>挑战题目总数=简单文字题目数+中等文字题目数+困难文字题目数+图片题目数+音乐题目数

                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">简单题目数设置</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="12" name='jiandan' value="<?php  echo $setup['jiandan'];?>">

                        <div class="help-block">前多少道题简单</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">中等题目数设置</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="12" name='zhongdeng' value="<?php  echo $setup['zhongdeng'];?>">

                        <div class="help-block">简单题除外，前多少道题中等</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">困难题目数设置</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="12" name='kunnan' value="<?php  echo $setup['kunnan'];?>">

                        <div class="help-block">后多少道题困难</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">图片题目数设置</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="12" name='tupian' value="<?php  echo $setup['tupian'];?>">

                        <div class="help-block">随机有多少道图片题</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">音乐题目数设置</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="12" name='yinyue' value="<?php  echo $setup['yinyue'];?>">

                        <div class="help-block">随机有多少道音乐题</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">挑战文字题目的时间</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="10" name='time' value="<?php  echo $setup['time'];?>">

                        <div class="help-block">填秒数</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">挑战图片题目的时间</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="10" name='tupian_time' value="<?php  echo $setup['tupian_time'];?>">

                        <div class="help-block">填秒数</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">挑战音乐题目的时间</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="10" name='yinyue_time' value="<?php  echo $setup['yinyue_time'];?>">

                        <div class="help-block">填秒数，播放音乐的时间</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">音乐题答题时间</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="10" name='yinyue_end_time' value="<?php  echo $setup['yinyue_end_time'];?>">

                        <div class="help-block">填秒数，音乐题答题时间</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">初始次数</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="6" name='chushicishu' value="<?php  echo $setup['chushicishu'];?>">

                        <div class="help-block">用户注册时的游戏次数</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">每日次数</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="6" name='today_jihui' value="<?php  echo $setup['today_jihui'];?>">

                        <div class="help-block">用户注册时的游戏次数</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">每日转发次数</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="6" name='zhuanfa_jihui' value="<?php  echo $setup['zhuanfa_jihui'];?>">

                        <div class="help-block">每日转发次数（算复活次数）</div>

                    </div>

                </div>



                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">规则一</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="" name='guize1' value="<?php  echo $setup['guize1'];?>">

                        <div class="help-block"></div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">规则二</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="" name='guize2' value="<?php  echo $setup['guize2'];?>">

                        <div class="help-block"></div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">规则三</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="" name='guize3' value="<?php  echo $setup['guize3'];?>">

                        <div class="help-block"></div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">规则四</label>

                    <div class="col-sm-9 col-xs-12">

                        <input class='form-control' placeholder="" name='guize4' value="<?php  echo $setup['guize4'];?>">

                        <div class="help-block"></div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="panel panel-default set_div">

        <div class="panel-heading">支付按钮设置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义上传图</label>

                <div class="col-sm-9">

                    <?php  echo tpl_form_field_image('zhifu',$setup['zhifu'])?>

                    <div class='help-block'>小程序首页展示的支付按钮图；宽度720*240像素,png格式</div>

                </div>

            </div>

             <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">模板图</label>

                <div class="col-sm-9">

                    <div class="xuanzeone row" style="margin-right: -147px;">

                    	<input type="hidden" class="uifgone" value='<?php  echo $setup["zhifu_status"];?>' name='zhifu_status'>

                    	<img src="/addons/hc_dati/template/web/img/zhifu1.png"  class="col-sm-2   <?php  echo $zf1;?>">

                    	<!--<img src="/addons/hc_dati/template/web/img/zhifu2.png"  class="col-sm-2   <?php  echo $zf2;?>">-->

                    	<!--<img src="/addons/hc_dati/template/web/img/zhifu3.png"  class="col-sm-2   <?php  echo $zf3;?>">-->

                    	<!--<img src="/addons/hc_dati/template/web/img/zhifu4.png"  class="col-sm-2   <?php  echo $zf4;?>">-->

                    	<!--<img src="/addons/hc_dati/template/web/img/zhifu5.png"  class="col-sm-2   <?php  echo $zf5;?>">-->

                    </div>

                    <div class='help-block'>如果从自定义图片改成默认提供的模板图，一定要把上方的自定义上传图去掉</div>

                </div>

            </div>

        </div>

    </div>



    <div class="panel panel-default set_div">

        <div class="panel-heading">导航图设置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义上传图</label>

                <div class="col-sm-9">

                    <?php  echo tpl_form_field_image('daohang',$setup['daohang'])?>

                    <div class='help-block'>小程序首页顶部展示的导航图；宽度648*461像素,png格式</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">模板图</label>

                <div class="col-sm-9">

                    <div class="xuanze row">

                        <input type="hidden" class="uifg" value='<?php  echo $setup["daohang_status"];?>' name='daohang_status'>

                        <img src="/addons/hc_dati/template/web/img/daohang1.png"  class="col-sm-3   <?php  echo $dh1;?>">

                        <!--<img src="/addons/hc_dati/template/web/img/daohang2.png"  class="col-sm-3   <?php  echo $dh2;?>">-->

                        <!--<img src="/addons/hc_dati/template/web/img/daohang3.png"  class="col-sm-3   <?php  echo $dh3;?>">-->

                        <!--<img src="/addons/hc_dati/template/web/img/daohang4.png"  class="col-sm-3   <?php  echo $dh4;?>">-->

                    </div>

                    <div class='help-block'>如果从自定义图片改成默认提供的模板图，一定要把上方的自定义上传图去掉</div>

                </div>

            </div>

        </div>

    </div>



    <div class="panel panel-default set_div">

        <div class="panel-heading">复活设置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">每局复活次数</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="6" name='zhuanfacishu' value="<?php  echo $setup['zhuanfacishu'];?>">

                    <div class="help-block">每局复活次数</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">每局复活所用钱数</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="1.5" name='fuhuo_money' value="<?php  echo $setup['fuhuo_money'];?>">

                    <div class="help-block">每局复活所用钱数</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">按钮上面字体自定义</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="" name='fuhuo_text' value="<?php  echo $setup['fuhuo_text'];?>">

                    <div class="help-block"></div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启支付</label>

                <div class="col-sm-9 col-xs-12">

                    <label style="margin-left: 10px;"><input type="radio" name="fh_zhifu_status" value="1" <?php  echo $fh_zhifu_status1;?>> 开启</label>

                    <label style="margin-left: 10px;"><input type="radio" name="fh_zhifu_status" value="0" <?php  echo $fh_zhifu_status2;?>> 不开启</label>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义支付上传图</label>

                <div class="col-sm-9">

                    <?php  echo tpl_form_field_image('fh_zhifu_img',$setup['fh_zhifu_img'])?>

                    <div class='help-block'>失败页面支付按钮；宽度500*88像素,png格式</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义转发上传图</label>

                <div class="col-sm-9">

                    <?php  echo tpl_form_field_image('fh_zhuanfa_img',$setup['fh_zhuanfa_img'])?>

                    <div class='help-block'>失败页面转发按钮；宽度500*88像素,png格式</div>

                </div>

            </div>

        </div>

    </div>





    <div class="panel panel-default set_div">

        <div class="panel-heading">首页设置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">首页名字</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="首页" name='shouyename' value="<?php  echo $setup['shouyename'];?>">

                    <div class="help-block">首页两个字自定义</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义上传图</label>

                <div class="col-sm-9">

                    <?php  echo tpl_form_field_image('shouye_img',$setup['shouye_img'])?>

                    <div class='help-block'>小程序首页底部展示的图；宽度254*254像素,png格式</div>

                </div>

            </div>

        </div>

        <div class="panel-heading">排行榜设置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">排行榜名字</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="排行榜" name='paihangbangname' value="<?php  echo $setup['paihangbangname'];?>">

                    <div class="help-block">排行榜三个字自定义</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义上传图</label>

                <div class="col-sm-9">

                    <?php  echo tpl_form_field_image('paihangbang_img',$setup['paihangbang_img'])?>

                    <div class='help-block'>小程序首页底部展示的图；宽度254*254像素,png格式</div>

                </div>

            </div>

        </div>

        <div class="panel-heading">分类设置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分类名字</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="分类" name='fenleiname' value="<?php  echo $setup['fenleiname'];?>">

                    <div class="help-block">分类两个字自定义</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义上传图</label>

                <div class="col-sm-9">

                    <?php  echo tpl_form_field_image('fenlei_img',$setup['fenlei_img'])?>

                    <div class='help-block'>小程序首页底部展示的图；宽度254*254像素,png格式</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分类页面</label>

                <div class="col-sm-9 col-xs-12">

                    <label style="margin-left: 10px;"><input type="radio" name="fenlei" value="1" <?php  echo $fenlei1;?>> 显示</label>

                    <label style="margin-left: 10px;"><input type="radio" name="fenlei" value="0" <?php  echo $fenlei2;?>> 不显示</label>

                    <div class="help-block">选中“显示”，显示分类页面；选中为“不显示”不显示分类页面。</div>

                </div>

            </div>

            <div class="form-group">

                <label for="lastname" class="col-sm-2 control-label">状态</label>

                <div class="col-sm-10">

                    <select class="form-control" id="fenlei_status" name="fenlei_status" style="width: 50%;" value="<?php  echo $setup['fenlei_status'];?>">

                        <option value="0">一排一个</option>

                        <option value="1">一排两个</option>

                        <option value="2">一排四个</option>

                    </select>

                </div>

            </div>

        </div>

        <div class="panel-heading">我的设置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">我的名字</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="分类" name='wodename' value="<?php  echo $setup['wodename'];?>">

                    <div class="help-block">我的两个字自定义</div>

                </div>

            </div>

        </div>

        <div class="form-group">

            <label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义上传图</label>

            <div class="col-sm-9">

                <?php  echo tpl_form_field_image('wode_img',$setup['wode_img'])?>

                <div class='help-block'>小程序首页底部展示的图；宽度254*254像素,png格式</div>

            </div>

        </div>

    </div>



    <div class="panel panel-default set_div">

        <div class="panel-heading">广告设置</div><p style="color: red">本答题挑战小程序和想要跳转的小程序必须同时关联同一个服务号。</p>

        <div class="panel-body">

            <div class="panel-heading">智力榜广告设置</div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序appid</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="" name='guanggao1_appid' value="<?php  echo $setup['guanggao1_appid'];?>">

                    <div class="help-block">智力榜广告设置</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序页面</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="" name='guanggao1_page' value="<?php  echo $setup['guanggao1_page'];?>">

                    <div class="help-block">智力榜广告设置</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">广告图片</label>

                <div class="col-sm-9">

                    <?php  echo tpl_form_field_image('guanggao1_img',$setup['guanggao1_img'])?>

                    <div class='help-block'>智力榜广告设置；宽度117*120像素</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">广告显示设置</label>

                <div class="col-sm-9 col-xs-12">

                    <label style="margin-left: 10px;"><input type="radio" name="guanggao1_shenhe" value="1" <?php  echo $guanggao1_shenhe1;?>> 开启</label>

                    <label style="margin-left: 10px;"><input type="radio" name="guanggao1_shenhe" value="0" <?php  echo $guanggao1_shenhe2;?>> 关闭</label>

                    <div class="help-block">选中“开启”，显示；选中为“关闭”，不显示。</div>

                </div>

            </div>



            <div class="panel-heading">群内智力榜广告设置</div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序appid</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="" name='guanggao2_appid' value="<?php  echo $setup['guanggao2_appid'];?>">

                    <div class="help-block">群内智力榜广告设置</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序页面</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="" name='guanggao2_page' value="<?php  echo $setup['guanggao2_page'];?>">

                    <div class="help-block">群内智力榜广告设置</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">广告图片</label>

                <div class="col-sm-9">

                    <?php  echo tpl_form_field_image('guanggao2_img',$setup['guanggao2_img'])?>

                    <div class='help-block'>群内智力榜广告设置；宽度117*120像素</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">广告显示设置</label>

                <div class="col-sm-9 col-xs-12">

                    <label style="margin-left: 10px;"><input type="radio" name="guanggao2_shenhe" value="1" <?php  echo $guanggao2_shenhe1;?>> 开启</label>

                    <label style="margin-left: 10px;"><input type="radio" name="guanggao2_shenhe" value="0" <?php  echo $guanggao2_shenhe2;?>> 关闭</label>

                    <div class="help-block">选中“开启”，显示；选中为“关闭”，不显示。</div>

                </div>

            </div>



            <div class="panel-heading">首页广告设置</div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序appid</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="" name='guanggao3_appid' value="<?php  echo $setup['guanggao3_appid'];?>">

                    <div class="help-block">首页广告设置</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序页面</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="" name='guanggao3_page' value="<?php  echo $setup['guanggao3_page'];?>">

                    <div class="help-block">首页广告设置</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">广告图片</label>

                <div class="col-sm-9">

                    <?php  echo tpl_form_field_image('guanggao3_img',$setup['guanggao3_img'])?>

                    <div class='help-block'>首页广告设置；宽度117*120像素</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">广告显示设置</label>

                <div class="col-sm-9 col-xs-12">

                    <label style="margin-left: 10px;"><input type="radio" name="guanggao3_shenhe" value="1" <?php  echo $guanggao3_shenhe1;?>> 开启</label>

                    <label style="margin-left: 10px;"><input type="radio" name="guanggao3_shenhe" value="0" <?php  echo $guanggao3_shenhe2;?>> 关闭</label>

                    <div class="help-block">选中“开启”，显示；选中为“关闭”，不显示。</div>

                </div>

            </div>

        </div>

    </div>



    <div class="panel panel-default set_div">

        <div class="panel-heading">转发设置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">转发标题</label>

                <div class="col-sm-9">

                    <input class='form-control' placeholder="你一定不会错，不信你试试" name='zhuanfa_title' value="<?php  echo $setup['zhuanfa_title'];?>">

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义上传图</label>

                <div class="col-sm-9">

                    <?php  echo tpl_form_field_image('zhuanfa_img',$setup['zhuanfa_img'])?>

                    <div class='help-block'>小程序转发群里或者个人显示的图；宽度117*120像素</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">模板图</label>

                <div class="col-sm-9">

                    <div class="xuanze row">

                        <img src="/addons/hc_dati/template/web/img/zhuanfa.jpg"  class="col-sm-3 <?php  echo $dh1;?>">

                    </div>

                    <div class='help-block'>如果从自定义图片改成默认提供的模板图，一定要把上方的自定义上传图去掉</div>

                </div>

            </div>

        </div>

    </div>



    <div class="panel panel-default set_div">

        <div class="panel-heading">首页奖品是否显示</div>

        <div class="panel-body">

            <div class="col-sm-9 col-xs-12">

                <label style="margin-left: 10px;"><input type="radio" name="xsjiangpin_status" value="1" <?php  echo $xsjiangpin_status1;?>> 显示</label>

                <label style="margin-left: 10px;"><input type="radio" name="xsjiangpin_status" value="0" <?php  echo $xsjiangpin_status2;?>> 不显示</label>

                <div class="help-block">选中“显示”，显示；选中为“不显示”，不显示。</div>

            </div>

        </div>

        <div class="panel-heading">实物奖品设置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">快递单号</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="快递单号" name='danhao' value="<?php  echo $setup['danhao'];?>">

                    <div class="help-block">我的奖品页面“快递单号”四个字自定义</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">快递公司</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="快递公司" name='gongsi' value="<?php  echo $setup['gongsi'];?>">

                    <div class="help-block">我的奖品页面“快递公司”四个字自定义</div>

                </div>

            </div>

        </div>

        <div class="panel-heading">核销奖品设置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">领取地址</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="领取地址" name='hexiao_str1' value="<?php  echo $setup['hexiao_str1'];?>">

                    <div class="help-block">核销物品发放显示</div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">卡密</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="卡密" name='hexiao_str2' value="<?php  echo $setup['hexiao_str2'];?>">

                    <div class="help-block">核销物品发放显示</div>

                </div>

            </div>

        </div>

    </div>



    <div class="panel panel-default set_div">

        <div class="panel-heading">审核设置</div>

        <div class="form-group">

            <label class="col-xs-12 col-sm-3 col-md-2 control-label">审核中版本号</label>

            <div class="col-sm-9">

                <input class='form-control' name='stake' value='<?php  echo $setup["stake"];?>' placeholder="审核中版本号">

                <div class="help-block">1.找到本答题模块“小程序”点击“管理”—点击“版本管理”—点击“修改”—把模块版本修改成和应用模块上的版本号一样。</div>

                <div class="help-block">2.在基础设置—审核设置—修改版本号和应用模块上的版本号一样。</div>

                <div class="help-block">3.点击“小程序”—点击“上传微信审核”—扫码后填写版本号也要和应用模块上的版本号一样。</div>

                <div class="help-block">4.这样提交审核的就是“过审页面”，不会影响线上版本的运营。</div>

                <div class="help-block">5.等审核通过之后，把基础设置-审核设置-里面的版本号一定要修改成和之前的版本号不一样。</div>

                <div class="help-block">6.以后在更新版本，同时遵循上方的操作。</div>

            </div>

        </div>

        <div class="form-group">

            <label class="col-xs-12 col-sm-3 col-md-2 control-label">审核页面</label>

            <div class="col-sm-9 col-xs-12">

                <label style="margin-left: 10px;"><input type="radio" name="shenhe_status" value="1" <?php  echo $shenhe_status1;?>> 计时器</label>

                <label style="margin-left: 10px;"><input type="radio" name="shenhe_status" value="0" <?php  echo $shenhe_status2;?>> 在线教育</label>

                <div class="help-block">1.选中“计时器”。提交审核时选择“工具/效率”类目</div>

                <div class="help-block">2.选中“在线教育”请在左侧“业务菜单栏目下-审核设置下”添加6个审核项目的图片和文章内容。提交审核时选择“教育/在线教育”类目</div>

            </div>

        </div>

        <div class="form-group">

            <label class="col-xs-12 col-sm-3 col-md-2 control-label">拉黑设置</label>

            <div class="col-sm-9 col-xs-12">

                <label style="margin-left: 10px;"><input type="radio" name="lahei_status" value="1" <?php  echo $lahei_status1;?>> 开启</label>

                <label style="margin-left: 10px;"><input type="radio" name="lahei_status" value="0" <?php  echo $lahei_status2;?>> 关闭</label>

                <div class="help-block">开启后用户截屏就不会进入小程序</div>

            </div>

        </div>

    </div>


    <div class="panel panel-default set_div">

        <div class="panel-heading">人数设置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">虚拟参与数据</label>

                <div class="col-sm-9">

                    <input class='form-control' name='xuni_meb' value="<?php  echo $setup['xuni_meb'];?>">

                    <div class='help-block'>下方“虚拟参与”开启后，此处显示实时数值，也可直接进行编辑</div>

                </div>

            </div>



            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label"> 是否显示虚拟</label>

                <div class="col-sm-9 col-xs-12">

                    <label style="margin-left: 10px;"><input type="radio" name="xuni_status" value="1" <?php  echo $xianshi1;?>> 显示</label>

                    <label style="margin-left: 10px;"><input type="radio" name="xuni_status" value="0" <?php  echo $xianshi2;?>> 不显示</label>

                    <div class="help-block">显示：显示虚拟数，隐藏：隐藏虚拟数</div>

                </div>

            </div>

        </div>

    </div>



    <div class="panel panel-default set_div">

        <div class="panel-heading">关注公众号设置</div>

        <div class="panel-body">

            <div class="form-group">



                <label class="col-xs-12 col-sm-3 col-md-2 control-label">客服消息推送设置</label>



                <div class="col-sm-9" style="color: red">

                    【务必完成这3点配置，再去填写下方内容】<br>

                    1.进入小程序公众平台后台->设置->开发设置 找到消息推送<br>

                    2.设置参数在-这个后台的 系统管理->微信小程序->本模块的管理设置->底部有一个消息推送配置。分别复制下来，粘贴到小程序公众平台消息推送位置。<br>

                    3.本答题挑战小程序和想要跳转的小程序必须同时关联同一个服务号。

                </div>



            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">关注图文标题</label>

                <div class="col-sm-9">

                    <input class='form-control' name='kefu_title' value='<?php  echo $setup["kefu_title"];?>'>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">关注图文图片</label>

                <div class="col-sm-9">

                    <?php  echo tpl_form_field_image('kefu_img',$setup['kefu_img'])?>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">关注图文概述</label>

                <div class="col-sm-9">

                    <input class='form-control' name='kefu_miaosu' value='<?php  echo $setup["kefu_miaosu"];?>'>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">关注图文链接</label>

                <div class="col-sm-9">

                    <input class='form-control' name='kefu_url' value='<?php  echo $setup["kefu_url"];?>'>

                </div>

            </div>

        </div>

    </div>





    <div class="panel panel-default set_div">

        <div class="panel-heading">支付选择</div>

        <div class="panel-body">

            <div class="form-group">

                <label for="lastname" class="col-sm-2 control-label">支付选择</label>

                <div class="col-sm-10">

                    <select class="form-control" id="pay_status" name="pay_status" style="width: 50%;" value="<?php  echo $setup['pay_status'];?>">

                        <option value="0">正常小程序支付</option>

                        <option value="1">第三方通联支付</option>

                        <option value="2">个人支付</option>

                    </select>

                </div>

            </div>

        </div>

        <div class="panel-heading">通联支付配置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">客户号</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="客户号" name='tl_cusid' value="<?php  echo $setup['tl_cusid'];?>">

                    <div class="help-block"></div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">appid</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="appid" name='tl_appid' value="<?php  echo $setup['tl_appid'];?>">

                    <div class="help-block"></div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">交易密钥</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="交易密钥" name='tl_miyao' value="<?php  echo $setup['tl_miyao'];?>">

                    <div class="help-block"></div>

                </div>

            </div>

        </div>

        <div class="panel-heading">个人支付配置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">appid</label>

                <div class="col-sm-9 col-xs-12">

                    <input class='form-control' placeholder="appid" name='gr_pid' value="<?php  echo $setup['gr_pid'];?>">

                    <div class="help-block"></div>

                </div>

            </div>

        </div>

    </div>



    <div class="panel panel-default set_div">
        <div class="panel-heading">模板消息</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">服务即将过期提醒通知模板消息ID</label>
                <div class="col-sm-9">
                    <input class='form-control' name='msgid' value="<?php  echo $setup['msgid'];?>">
                    <div class='help-block'>小程序后台 点开模板消息，搜索 服务即将过期提醒 ，勾选服务名称、过期时间、温馨提示</div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">挑战结果通知模板消息ID</label>
                <div class="col-sm-9">
                    <input class='form-control' name='jieguo_msg' value="<?php  echo $setup['jieguo_msg'];?>">
                    <div class='help-block'>小程序后台 点开模板消息，搜索 挑战结果通知 ，勾选挑战项目、挑战时间、挑战结果</div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">服务名称自定义</label>
                <div class="col-sm-9">
                    <input class='form-control' name='msgstr_name' value="<?php  echo $setup['msgstr']['msgstr_name'];?>">
                    <div class='help-block'>服务名称是第一行的那个提示字</div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">点击本页发送按钮，温馨提示自定义</label>
                <div class="col-sm-9">
                    <input class='form-control' name='msgstr_guoqi' value="<?php  echo $setup['msgstr']['msgstr_guoqi'];?>">
                    <div class='help-block'>服务即将过期提醒通知模板消息温馨提示自定义</div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">排行榜结算模板消息提示</label>
                <div class="col-sm-9">
                    <input class='form-control' name='msgstr_paihangbang' value="<?php  echo $setup['msgstr']['msgstr_paihangbang'];?>">
                    <div class='help-block'>模板消息排行榜结算提示</div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-lg-2">
                <a onclick="closeWindow('./index.php?c=site&amp;a=entry&amp;xuni=1&amp;do=msg&amp;m=hc_dati')" class="btn btn-success btn-sm">发送</a>
            </div>
        </div>
    </div>





    <div class="panel panel-default set_div">

        <div class="panel-heading">阿拉丁配置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">阿拉丁key</label>

                <div class="col-sm-9">

                    <input class='form-control' name='ald_key' value="<?php  echo $setup['ald_key'];?>">

                    <div class='help-block'>百度搜索“阿拉丁小程序”—注册账号密码—登录进入找到“主页”点击“创建小程序”—填写“小程序名称”和选择“行业类型”进行创建—然后把获取到的“阿拉丁key”复制到后台即可。</div>

                    <div class='help-block'>务必配置：小程序公众平台服务器域名，request域名下加上一条：log.aldwx.com</div>

                </div>

            </div>

        </div>

    </div>

  

    <div class="panel panel-default set_div">

        <div class="panel-heading">流量主配置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">广告位 ID</label>

                <div class="col-sm-9">

                    <input class='form-control' name='liuliangzhu' value="<?php  echo $setup['liuliangzhu'];?>">

                </div>

            </div>

        </div>

    </div>

     

    <div class="panel panel-default set_div">

        <div class="panel-heading">七牛云配置</div>

        <div class="panel-body">

            <div class="form-group">

                <label class="col-xs-12 col-sm-3 col-md-2 control-label">音频文件域名（必须配置）</label>

                <div class="col-sm-9">

                    <input class='form-control' name='qiniu_url' value="<?php  echo $setup['qiniu_url'];?>">

                </div>

            </div>

        </div>

    </div>



    <input name="submit" type="submit" id="submit_info" value="提交" class="btn btn-primary span3" />



    <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />



</form>



<script>



    function closeWindow(url)

    {

        var iWidth=300;//弹出窗口的宽度;

        var iHeight=150;//弹出窗口的高度;

        var iTop = (window.screen.availHeight - 30 - iHeight) / 2; //获得窗口的垂直位置

        var iLeft = (window.screen.availWidth - 10 - iWidth) / 2; //获得窗口的水平位置

        myWindow = window.open(url,"myWindow",'height=' + iHeight + ',,innerHeight=' + iHeight + ',width=' + iWidth + ',innerWidth=' + iWidth + ',top=' + iTop + ',left=' + iLeft + ',status=no,toolbar=no,menubar=no,location=no,resizable=no,scrollbars=0,titlebar=no');

        // myWindow.document.write("运行中，请稍后...");

        //window.opener=null;

        window.setTimeout(function(){

            // myWindow.close();

            // location.href="<?php  echo $this->createWebUrl('jichu')?>"

        }, 500);



    }

     $('.xuanze img').click(function(index){

     	  	var This = $(this).index();

     		$('.uifg').val(This);

    	$(this).addClass('quia').siblings().removeClass('quia');

    })

          $('.xuanzeone img').click(function(index){

     	  	var This = $(this).index();

     		$('.uifgone').val(This);

    	$(this).addClass('quia').siblings().removeClass('quia');

    })

</script>

<script>

    document.getElementById("fenlei_status")[<?php  echo $setup['fenlei_status'];?>].selected=true;

    document.getElementById("pay_status")[<?php  echo $setup['pay_status'];?>].selected=true;



</script>

</body>

</html>