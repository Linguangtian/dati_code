<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<style>
    .masklayer {
        display: none;
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 1000;
        top: 0px;
        left: 0px;
        background: rgba(0,0,0,.6);
    }
    .mask {
        display: none;
        width: 460px;
        height: auto;
        overflow: hidden;
        position: fixed;
        z-index: 2000;
        left: 50%;
        margin-left: -230px;
        background: #fff;
        top: 20%;
    }
    .mask .title {
        width: 100%;
        height: 40px;
        line-height: 40px;
        background: #467ab3;
        position: relative;
        z-index: 10;
    }
    .mask .title span {
        margin-left: 15px;
        color: #fff;
        font-size: 14px;
    }
    .mask .title .close {
        width: 40px;
        height: 40px;
        position: absolute;
        display: block;
        top: 7px;
        right: -15px;
        color: #fff;
        z-index: 20;
    }
    .close {
        float: right;
        font-size: 21px;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        filter: alpha(opacity=20);
        opacity: .2;
    }
    .maskMain {
        padding: 0px;
        height: auto;
        overflow: hidden;
        text-align: center;
        padding-bottom: 30px;
    }
    .btn-info {
        color: #fff;
        background-color: #5bc0de;
        border-color: #46b8da;
    }
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .hongsraz{
        color:#ca4242;
        font-size:20px;
    }
</style>
<div class="panel-default">
    <p class="hongsraz">警告：点击哪个行业的什么难度即可清空那个行业的题库</p>
</div>
<div class="panel panel-default">

    <div class="panel-heading">
        <h3 class="panel-title">
             <a href="<?php  echo url('site/entry/Qingkong',array('m'=>'hc_dati'));?>"   onclick="return confirm('确认清空题库吗？');return false;" style="margin-left: 10px; color: red;">清空所有</a>
        </h3>
    </div>
    <div class="panel-body">
        <form action="" method="post" class="form-horizontal form">
            <div class="alert alert-info url_div hide" role="alert">
            </div>
            <input type="hidden" name="storeid" value="">
            <div class="table-responsive panel-body">
                <table class="table table-hover">
                    <thead class="navbar-inner">
                    <tr>
                        <th>id</th>
                        <th>名字</th>
                        <th style="text-align:right;">操作</th>
                    </tr>
                    </thead>
                    <tbody id="level-list">
                    <?php  if(is_array($fenlei)) { foreach($fenlei as $item) { ?>
                    <tr>
                        <td><div class="type-parent"><?php  echo $item['id'];?></div></td>
                        <td><div class="type-parent"><?php  echo $item['name'];?></div></td>
                        <td style="text-align:right;">
                            <a class="btn btn-default btn-sm btn-success" href="<?php  echo url('site/entry/Shanchutiku',array('id'=>$item['id'],'nandu'=>1,'m'=>'hc_dati'));?>" onclick="return confirm('确认删除此题库吗？');return false;" title="简单">简单</a>&nbsp
                            <a class="btn btn-default btn-sm btn-warning" href="<?php  echo url('site/entry/Shanchutiku',array('id'=>$item['id'],'nandu'=>2,'m'=>'hc_dati'));?>" onclick="return confirm('确认删除此题库吗？');return false;" title="一般">一般</a>&nbsp
                            <a class="btn btn-default btn-sm btn-danger" href="<?php  echo url('site/entry/Shanchutiku',array('id'=>$item['id'],'nandu'=>3,'m'=>'hc_dati'));?>"  onclick="return confirm('确认删除此题库吗？');return false;" title="困难">困难</a>&nbsp
                        </td>
                    </tr>
                    <?php  } } ?>
                    </tbody>
                </table>
                <?php  echo $pager;?>
            </div>
        </form>

    </div>
</div>
<style type="text/css">
    .hide{display: none}
</style>
<script type="text/javascript">
    $(function(){
        $('.url_btn').click(function(){
            var str=$(this).children('.urlvalue').text();
            $('.url_div').text('跳转地址：'+str);
            $('.url_div').removeClass('hide');
        })
    })
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>