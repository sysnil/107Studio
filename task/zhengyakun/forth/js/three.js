jQuery(document).ready(function ($) {

    $("#nav_style>li").mouseenter(function () {
        $(this).children("ul").show();
        $(this).css({
            "background": "rgb(5, 148, 201)",
            "font-size": "17px"
        });

    });
    $("#nav_style>li").mouseleave(function () {
        $(this).children("ul").stop().hide();
        $(this).css({
            "background": "rgb(8, 68, 102)",
            "font-size": "16px"
        });

    });
    $("#nav_style li ul li").hover(function () {
        $(this).css({
            "background": "rgb(5, 148, 201)",
            "font-size": "18px"
        });
    }, function () {
        $(this).css({
            "background": "rgb(8, 68, 102)",
            "font-size": "16px"
        });
    });








    var l = $(".banner").width();
    var clone = $("#banner_style1 li").first().clone();
    $("#banner_style1").append(clone);
    var i = 0;


    $("#buttons  .buttons_style span").click(function () {
        var inde = $(this).index();
        i = inde;
        $("#banner_style1").stop().animate({
            left: inde * -l
        }, 500);
        $(this).addClass("on").siblings().removeClass("on");
        $(".text a").addClass("txtout").siblings().removeClass("txtout");

    });
    var size = $(".banner #banner_style1 li").length;
    console.log(size);

    function move() {
        if (i == size) {
            $("#banner_style1").css("left", 0);
            i = 1;
        }
        if (i == -1) {
            $("#banner_style1").css({
                left: -(size - 1) * l
            });
            i = size - 2;
        }
        $("#banner_style1").stop().animate({
            left: i * -l
        }, 500);
        if (i == size - 1) {
            $("#buttons .buttons_style span").eq(0).addClass("on").siblings().removeClass("on");
            $(".text a").eq(0).addClass("txtout").siblings().removeClass("txtout");
        } else {
            $("#buttons .buttons_style span").eq(i).addClass("on").siblings().removeClass("on");
            $(".text a").eq(i).addClass("txtout").siblings().removeClass("txtout");
        }
    };
    var t = setInterval(function () {
        i++;
        move();
    }, 2000);
    $(".banner").hover(function () {
        clearInterval(t);
    }, function () {
        t = setInterval(function () {
            i++;
            move();
        }, 2000);
    });




    $(".content_top2 .top2_2 li").hover(function () {
        $(this).css("color", "rgb(218,3,0)").children("a").css("color", "rgb(218,3,0)")
    }, function () {
        $(this).css("color", "rgb(30, 30, 30)").children("a").css("color", "rgb(30, 30, 30)")
    });


    $(".content_top3 .top2_2 li").hover(function () {
        $(this).css("color", "rgb(218,3,0)").children("a").css("color", "rgb(218,3,0)")
    }, function () {
        $(this).css("color", "rgb(30, 30, 30)").children("a").css("color", "rgb(30, 30, 30)")
    });



    $(".content_top5 .top2_2 li").hover(function () {
        $(this).css("color", "rgb(218,3,0)").children("a").css("color", "rgb(218,3,0)")
    }, function () {
        $(this).css("color", "rgb(30, 30, 30)").children("a").css("color", "rgb(30, 30, 30)")
    });

    $(".content_top6 .top2_2 li").hover(function () {
        $(this).css("color", "rgb(218,3,0)").children("a").css("color", "rgb(218,3,0)")
    }, function () {
        $(this).css("color", "rgb(30, 30, 30)").children("a").css("color", "rgb(30, 30, 30)")
    });




    $(".totop").hide();
    $(window).scroll(function () {
        if ($(document).scrollTop() >= 150) {
            $(".totop").show();
            var test2 = document.querySelector('.totop');

            test2.style.animationPlayState ='paused';

        } else {
            $(".totop").hide();
        }
    });
    $(".totop").click(function () {
        var test1 = document.querySelector('.totop');

        test1.style.animationPlayState ='running';
        setTimeout(function(){
             $("html,body").animate({scrollTop:0}, 500);
        },1300);
       

    });
   










    function FloatAd(selector){ 
        var obj = $(selector); 
        if (obj.find(".item").length == 0) return;
        var windowHeight = $(window).height();
        console.log(windowHeight);
        var windowWidth = $(window).width();
        var dirX = -1.5;
        var dirY = -1;
                       
        var delay = 30;
        obj.css({ left: windowWidth / 2 - obj.width() / 2 + "px", top: windowHeight / 2 - obj.height() / 2 + "px" });
        obj.show();
        var handler = setInterval(move, delay);
                       
        obj.hover(function() {
            clearInterval(handler);
        }, function() { 
            handler = setInterval(move, delay); 
        }); 
       
        obj.find(".close").click(function() {
            close(); 
        }); 
        $(document).resize(function() {
            windowHeight = $(document).height();
            windowWidth = $(document).width();
        }); 
        function move() {
            var currentPos = obj.position();
            var nextPosX = currentPos.left + dirX; 
            var nextPosY = currentPos.top + dirY;
         
       
            if (nextPosX <= 0 || nextPosX >= windowWidth - obj.width()) {
                dirX = dirX * -1;
                nextPosX = currentPos.left + dirX; 
            } 
            if (nextPosY <= 0 || nextPosY >= windowHeight - obj.height() - 5) {
                dirY = dirY * -1;
                nextPosY = currentPos.top + dirY;
            } 
            obj.css({ left: nextPosX + "px", top: nextPosY + "px" });
        } 
       
        function close() {
            clearInterval(handler); 
            obj.remove(); 
        } 
    }
    FloatAd("#floadAD");


  
 










































});