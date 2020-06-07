$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color","#ffffff");
    });
    $("input").blur(function(){
        $(this).css("background-color","#f5aa02");
    });
    $('.menu>ul>li>ul').hide();
    $('.menu>ul>li').mouseenter(function(){
        $(this).children("ul").show();
    });
    $('.menu>ul>li').mouseleave(function(){
        $(this).children("ul").hide();
    });
    $(".liOne").mouseenter(function(){
        $(this).css("background-color","#f5aa02");
    });
    $(".liOne").mouseleave(function(){
        $(this).css("background-color","#01acb7");
    });
    $(".liTwo").mouseenter(function(){
        $(this).css("background-color","#f5aa02");
    });
    $(".liTwo").mouseleave(function(){
        $(this).css("background-color","#01acb7");
    });
      var index=0;
    $(".tab-btn .btn").click(function(){
        var index = $(this).index();
        $(this).addClass("active").siblings().removeClass("active");
        $(".item").eq("index").fadeIn().siblings().fadeOut();
    });
    $(".lr-tab .right").click(function(){
        index++;
        if(index>3)
        {
            index=0;
        }
        $(".item").eq("index").fadeIn().siblings().fadeOut();
        $(" tab-btn .btn").eq(index).addClass('active').siblings().removeClass('active');
    });
    $(".lr-tab .left").click(function(){
        index--;
        if(index<-1)
        {
            index=3;
        }
        $(".item").eq("index").fadeIn().siblings().fadeOut();
        $(" tab-btn .btn").eq(index).addClass("active").siblings().removeClass("active");
    });
    var ali = $('.title ul li');
    var aDiv = $('.content div')

    ali.click(function(){
        $(this).addClass('current').siblings().removeClass('current');
        var index = $(this).index();
        aDiv.eq(index).show().siblings().hide();
    });
    var sli = $('.spring>ul>li');

        sli.click(function(){
            $(this).children('div').slideDown(100).parent().siblings().children('div').slideUp(100);
            $(this).children('P').addClass('spr-current').parent().siblings().children('P').removeClass('spr-current');
        });
    $("lidog").on('click',function(){
        var picSrc= $(this).attr('src')
        $('.pic02 img').attr('src'.picSrc)
        $('.pic02').show()
    })
    $('.pic02').on('click',function(){
        $('.pic02').hide()
    });

});