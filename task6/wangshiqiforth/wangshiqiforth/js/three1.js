jQuery(document).ready(function ($) {
    $("#nav_style>li").mouseenter(function () {
        $(this).children("ul").show();
        $(this).css({
            "background":"rgb(5, 148, 201)",
            "font-size":"17px"
        });
  
    });
    $("#nav_style>li").mouseleave(function () {
        $(this).children("ul").stop().hide();
        $(this).css({
            "background":"rgb(8, 68, 102)",
            "font-size":"16px"
        });
       
    });
    $("#nav_style li ul li").hover(function(){
        $(this).css({
            "background":"rgb(5, 148, 201)",
            "font-size":"18px"
        });
    },function(){
        $(this).css({
            "background":"rgb(8, 68, 102)",
            "font-size":"16px"
        });
    });



    var l = $(".banner").width();
    var clone = $("#banner_style1 li").first().clone();
    $("#banner_style1").append(clone);
    var i=0;


    $("#buttons  .buttons_style span").click(function () {
        var inde = $(this).index();
        i=inde;
        $("#banner_style1").stop().animate({
            left: inde * -l
        }, 500);
        $(this).addClass("on").siblings().removeClass("on");
        $(".text a").addClass("txtout").siblings().removeClass("txtout");

    });
    var size=$(".banner #banner_style1 li").length;
    console.log(size);

    function move(){
        if(i==size)
        {
            $("#banner_style1").css("left",0);
            i=1;
        }
        if(i==-1)
        {
            $("#banner_style1").css({
                left:-(size-1)*l
            });
            i=size-2;
        }
        $("#banner_style1").stop().animate({
            left:i*-l
        },500);
        if(i==size-1)
        {
            $("#buttons .buttons_style span").eq(0).addClass("on").siblings().removeClass("on");
            $(".text a").eq(0).addClass("txtout").siblings().removeClass("txtout");
        }
        else{
            $("#buttons .buttons_style span").eq(i).addClass("on").siblings().removeClass("on");
            $(".text a").eq(i).addClass("txtout").siblings().removeClass("txtout");
        }
    };
    var t=setInterval(function(){
        i++;
        move();
    },2000);
    $(".banner").hover(function(){
        clearInterval(t);
    },function(){
        t=setInterval(function(){
            i++;
            move();
        },2000);
    });
    $(".content .right .list_2 ul li").hover(function(){
        $(this).css("background","rgb(153, 0, 0)").children("a").css({
            "color":"white",
           
        });
    },function(){
        $(this).css("background","rgb(244, 244, 244)").children("a").css({
            color:'#333333',
           
        });
    });



    $(".content .right .list_4 ul li").hover(function(){
        $(this).css("background","rgb(153, 0, 0)").children("a").css({
            "color":"white",
           
        });
    },function(){
        $(this).css("background","rgb(244, 244, 244)").children("a").css({
            color:'#333333',
           
        });
    });






















































});