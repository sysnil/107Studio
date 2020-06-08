/*搜索框*/
// $(function() {
//     $(".ipt").click(function() {
//         $(this).addClass("current");
//     });
// });

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
    var numli = $(".wrap ol li");
    var aliwidth = $(".wrap ul li").eq(0).width();
    var nowindex = 0;
    var timeId;

    numli.click(function() {
        var index = $(this).index();
        nowindex = index;
        $(this).addClass("current").siblings().removeClass();
        oul.animate({ "left": -aliwidth * index }, 10);
    });

    function slider() {
        if (nowindex == 2) {
            nowindex = 0;
        } else {
            nowindex++;
        }

        numli.eq(nowindex).addClass("current").siblings().removeClass();
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
        }, 400);
        return false;

    });
});

// 浮动窗口

let ad_window = document.getElementById('ad_window');

let speedX = 10,
    speedY = 8;

//水平方向运动最大值
let
    maxL = document.documentElement.clientWidth - ad_window.offsetWidth;
maxT = document.documentElement.clientHeight - ad_window.offsetHeight;

let timer = null;

ad_window.onmouseenter = function() {
    clearInterval(timer);
};
ad_window.onmouseleave = function() {
    autoMove();
};
autoMove();

function autoMove() {
    timer = setInterval(() => {
        let
            nextX = ad_window.offsetLeft + speedX;
        nextY = ad_window.offsetTop + speedY;

        //左侧边界
        if (nextX <= 0) {
            nextX = 0;
            speedX *= -1;
        }

        //上侧边界
        if (nextY <= 0) {
            nextY = 0;
            speedY *= -1;
        }

        //右侧边界
        if (nextX >= maxL) {
            nextX = maxL;
            speedX *= -1;
        }

        //底侧边界
        if (nextY >= maxT) {
            nextY = maxT;
            speedY *= -1;
        }
        ad_window.style.left = nextX + 'px';
        ad_window.style.top = nextY + 'px';

    }, 60);
}