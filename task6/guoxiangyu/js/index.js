$(document).ready(function(){
    $(".search").hover(function(){
        $(this).css("opacity","1.0")
    });
    $(".search").mouseleave(function(){
        $(this).css("opacity","0.4");
    });
    $(".nav ul>li").mouseenter(function(){
        $(this).children("ol").show();
    });
    $(".nav ul>li").mouseleave(function(){
        $(this).children("ol").hide();
    });
    /*content start*/
    /*轮播*/
    var stop=null;
    var i=0;
    function circle(){
        $(".banner li").eq(i).fadeIn().siblings().fadeOut();
        $(".dot li").eq(i).addClass("dotcolornow").removeClass("dotcolorother").siblings().removeClass("dotcolornow",
        "dotcolorother");
    }
    function auto(){
        stop=setTnterval(function(){
            i++;
            if(3==i)
            {
                i=0;
            }
            circle();
        },3000);
    }
    $(".banner li").eq(0).show();
    auto();
    $(".dot li").click(function(){
        clearInterval(stop);
        i=$(this).index();
        circle();
        auto();
    });
    /*report1*/
    $(".report1 ul li").hover(function(){
        $(this).css("color","#da0300");
    });
    $(".report1 ul li").mouseleave(function(){
        $(this).css("color","#000000");
    });

    /*footer start*/
    $(".foot2 p>a").mouseenter(function(){
        $(this).css("color","#ec670e")
    });
    $(".foot2 p>a").mouseleave(function(){
        $(this).css("color","#000")
    });
    /*窗口浮动*/
    /*var xPos = 20;
    var yPos = document.body.clientHeight;
    var step = 1;
    var delay = 30;
    var height = 0;
    var Hoffset = 0;
    var Woffset = 0;
    var yon = 0;
    var xon = 0;
    var pause = true;
    var interval;
    img.style.top = yPos;
    function changePos() {
    width = document.body.clientWidth;
    height = document.body.clientHeight;
    Hoffset = img.offsetHeight;
    Woffset = img.offsetWidth;
    img.style.left = xPos + document.body.scrollLeft;
    img.style.top = yPos + document.body.scrollTop;
    if (yon) {
    yPos = yPos + step;
    }
    else {
    yPos = yPos - step;
    }
    if (yPos < 0) {
    yon = 1;
    yPos = 0;
    }
    if (yPos >= (height - Hoffset)) {
    yon = 0;
    yPos = (height - Hoffset);
    }
    if (xon) {
    xPos = xPos + step;
    }
    else {
    xPos = xPos - step;
    }
    if (xPos < 0) {
    xon = 1;
    xPos = 0;
    }
    if (xPos >= (width - Woffset)) {
    xon = 0;
    xPos = (width - Woffset);
    }
    }
    function start() {
    img.style.visibility = "visible";
    interval = setInterval('changePos()', delay);
    }
    start();*/
    var x=0;
    var y=0;
    var constantx=40;
    var constanty=40;
    var prevent=null;
    var object=$(".move");
    function move(){
        prevent=setInterval(function(){
            screenwidth=$(window).width();
            screenheight=$(window).height(); 
            if(screenwidth-object.width()<x||x<0)
            {
                constantx=-constantx;
            }
            if(screenheight-object.height()<y||y<0)
            {
                constanty=-constanty;
            }
            x=x+constantx;
            y=y+constanty;
            object.offset({"left":x,"top":y});
        },800);
    }
    object.mouseenter(function(){
        clearInterval(prevent);
    });
    object.mouseleave(function(){
        move();
    });
});