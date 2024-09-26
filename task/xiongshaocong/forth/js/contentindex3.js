/*下拉菜单*/

$(function() {
    $(".header_nav>ul>li").mouseover(function() {
        $(this).children("ul").stop().show();
    });
    $(".header_nav>ul>li").mouseout(function() {
        $(this).children("ul").stop().hide();
    });
});

/*轮播图*/

$(function() {
    var oul = $(".wrap ul");
    var aliwidth = $(".wrap ul li").eq(0).width();
    var nowindex = 0;
    var timeId;

    function slider() {
        if (nowindex == 2) {
            nowindex = 0;
        } else {
            nowindex++;
        }
        oul.animate({ "left": -aliwidth * nowindex }, 10);
    }

    timeId = setInterval(slider, 3000);

    $(".wrap").mouseover(function() {
        clearInterval(timeId);
    });

    $(".wrap").mouseout(function() {
        timeId = setInterval(slider, 3000);
    });
});

$(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() == 0) {
            $("#mback").hide();
        } else {
            $("#mback").show();
        }
    });

    $("#mback").click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 200);
        return false;

    });
});