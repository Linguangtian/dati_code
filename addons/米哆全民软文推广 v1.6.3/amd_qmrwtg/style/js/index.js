/**
 * Created by 1111 on 2017/4/14.
 */
$(document).ready(function(){

    // 计算菜单父级元素的宽度
    function ulWidth(obj) {
        var liW = 0;
        obj.children("li").each(function() {
            liW += $(this).innerWidth();
        })
        return liW;
    }
    //首页菜单导航
    // 点击其他地方二级菜单消失
    $(document).click(function () {
        $(".cap-sublist ul.submenu").hide()
    })

    $(".cap-list ul.menu").css("width",ulWidth($("ul.menu")));
    $("ul.menu li.nav").click(function(e) {
        e.stopPropagation();
        $(this).addClass("active").siblings().removeClass("active");
        var capLi = $("ul.menu  li.nav.active").position().left - 200;
        $(".cap-list").animate({scrollLeft:capLi},500);
        // 首页二级导航显示
        $(".cap-sublist").animate({scrollLeft:0},0);
        $(".cap-sublist ul.submenu").hide().eq($(this).index()).show();
        $(".cap-sublist ul.submenu").eq($(this).index()).css("width",ulWidth($(".cap-sublist ul.submenu")));
        $(".cap-sublist ul.submenu").eq($(this).index()).find("li:first-child").addClass("active").siblings().removeClass("active");
    });
    // 二级菜单点击滑动事件
    $("ul.submenu li.subnav").click(function(e) {
        e.stopPropagation();
        $(this).addClass("active").siblings().removeClass("active");
        var capLi2 = $(this).position().left - 100;
        $(".cap-sublist").animate({scrollLeft:capLi2},400);
    });

    // 点击搜索
    $(".cap .cap-search").click(function () {
        $(".cap .search").animate({left:0},500)
    })
    // 关闭搜索
    $(".cap .close").click(function () {
        $(".cap .search").animate({left:750},500)
    })

    // 软文页面
    // 点击继续阅读按钮
    $(".read-continue button").click(function () {
        // 弹出页面   点击弹出页面空白部分 自己隐藏
        $(".popup").show().click(function () {$(this).hide()})
        // 阻止冒泡
        $(".read-pay").click(function(e){e.stopPropagation()});
        // 点击弹窗顶部按钮
        $(".popup .title .list").click(function () {
            // 顶部按钮的激活状态
            $(this).addClass("active").siblings().removeClass("active");
            // 显示下面的内容块
            $(".popup .pay-content .pay-item").eq($(this).index()).show().siblings().hide()
            // 会员价格列表点击事件
            $(".popup .pay-content .pay-item .time-price").click(function () {
                // 清空所有样式
                $(".popup .pay-content .pay-item .time-price").removeClass("active").find(".iconfont").removeClass("icon-roundcheckfill").addClass("icon-round");
                // 点击激活状态
                $(this).addClass("active").find(".iconfont").removeClass("icon-round").addClass("icon-roundcheckfill");
            })
        })
    })
    // 点击写留言
    $(".read-num  .white-msg").click(function () {
        $(".write-content").css("animation", "fadeInDown .3s forwards")
        // 阻止冒泡
        $(".popup-write .write-content").click(function(e){e.stopPropagation()})
        $(".popup-write").show().click(function () {
            $(".write-content").css("animation", "fadeInUp .3s forwards");
            setTimeout(function () {
                $(".popup-write").hide()
            },500)
        });

    })
    // 点赞
    $(".zan-num").click(function () {
        if($(this).find(".iconfont").hasClass("icon-appreciate_light")){
            $(this).find(".iconfont").removeClass("icon-appreciate_light").addClass("icon-appreciatefill");
        }else {
            $(this).find(".iconfont").addClass("icon-appreciate_light").removeClass("icon-appreciatefill");
        }
    })

    // 赞赏
    $(".zan .btn-zan button").click(function () {
        $(".zanshang").show();
    })
    // 点击其他金额,显示输入金额页面
    $(".app-admire .money .other").click(function () {
        $(".app-admire .pop-input").show();
        $(".app-admire .pop-input input").focus();

    })
    // 点击关闭，隐藏输入金额页面
    $(".app-admire .pop-input .close").click(function () {
        $(".app-admire .pop-input").hide();
    })

    // 会员页面
    // 点击付费选项
    $(".app-vip .vip-con .pay").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
    })

    // 提现页面
    // 点击提现标题
    $(".app-tixian .topbtn .title").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
        $(".app-tixian .content-list").eq($(this).index()).show().siblings().hide();
    })
})
