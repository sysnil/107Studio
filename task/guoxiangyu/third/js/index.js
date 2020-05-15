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
});