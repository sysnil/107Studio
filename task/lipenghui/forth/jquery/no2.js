/*navigation*/

$(function(){
    $("dl").hide();
     
    $(".mainmenu").hover(function(){
        $(this).find("dl").stop(true,true);
        $(this).find("dl").slideDown();
        $(".mainmenu").css("z-index", "2");
    },function(){
        $(this).find("dl").stop(true,true);
        $(this).find("dl").slideUp();
        $(".mainmenu").css("z-index", "2"); 
    });
})

/*banners*/

$(function(){
    var po = 0;
    var warp = $('.bannerimg');

    var firstimg = $('.bannerimg li').first().clone();

    $('.bannerimg').append(firstimg).width($('.bannerimg li').length*100+'%');
    $('.bannerimg li').width(100/$('.bannerimg li').length+'%');

    //自动切换
    function change(){
    po++;
    if (po==$('.bannerimg li').length) {
        po = 1;
    $('.bannerimg').css('left','0px');
    };
    warp.stop().animate({left:-po*100+'%'},230);
    var q;
    if(po<4)
        q=po+1;
    else
        q=1;
    showBtn(q);
    }

    

    $(".jumpBtn>ul>li").click(function(){
        var i=$(this).attr("index");
        var q;
        if(po<4)
            q=po+1;
        else
            q=1;
        var n=q-i;
        if(n>0){
            for(var j=0;j<4-n;j++)
                change();
        }
        else{
            for(var j=0;j<-n;j++)
                change();
        }
    });
        

    $("#prev").click(function(){
    po--;
    if (po == 0) {
        po=4;
        $('.bannerimg').css('left','0px');
    };
    warp.stop().animate({left:-po*100+'%'},230);
    if(po<4)
        q=po+1;
    else
        q=1;
    showBtn(q);
    });

    function showBtn(q){
    $(".jumpBtn>ul>li").removeAttr("id");
    $(".jumpBtn>ul>li").eq(q-1).attr("id","on");
    }

    $("#next").click(function(){
        change();
    });

    var timer;

    function play(){
    timer=setInterval(change, 2300);
    }
    function stop(){
        clearInterval(timer);
    }
    $(".bannerimg,.jumpBtn,#prev,#next").mouseover(function(){
        stop();
    });
    $(".bannerimg,.jumpBtn,#prev,#next").mouseout(function(){
        play();
    });
    play();
})

/*contents*/
/*part1*/

$(function () {
       $("#part1>ul>li").hide();

       $("#poem1").find("li").show();

       $("#lefttitle").css("background","#EC6B0E");

       $("#lefttitle").click(function () {
       $("#part1>ul").siblings("ul").find("li").fadeOut(0);
       $("#poem1").find("li").fadeIn(200);
       $(this).css("background","#EC6B0E");
       $("#righttitle").css("background","#F5AA02");
        });

        $("#righttitle").click(function () {
           $("#part1>ul").siblings("ul").find("li").fadeOut(0);
           $("#poem2").find("li").fadeIn(200);
           $(this).css("background","#EC6B0E");
           $("#lefttitle").css("background","#F5AA02");
            });
        $("#part1>ul>li>span").text(function(){
            return  "2019年3月12号";
            });
});

/*part2*/

$(function(){
        var p = 0;
        var warp = $('.meet');

        var firstimg = $('.meet li').first().clone();

        $('.meet').append(firstimg).width($('.meet li').length*100+'%');
        $('.meet li').width(100/$('.meet li').length+'%');

        //自动切换
        function change(){
        p++;
        if (p==$('.meet li').length) {
            p = 1;
        $('.meet').css('left','0px');
        };
        warp.stop().animate({left:-p*100+'%'},230);
        var q;
        if(p<4)
            q=p+1;
        else
            q=1;
        showBtn2(q);
        }

        function showBtn2(q){
        $(".smallImg>ul>li>img").removeAttr("id");
        $(".smallImg>ul>li>img").eq(q-1).attr("id","on2");
        }

        $(".smallImg>ul>li").click(function(){
            var i=$(this).attr("index");
            var q;
            if(p<4)
                q=p+1;
            else
                q=1;
            var n=q-i;
            if(n>0){
                for(var j=0;j<4-n;j++)
                    change();
            }
            else{
                for(var j=0;j<-n;j++)
                    change();
            }
        });
            
        var timer2;

        function play2(){
        timer2=setInterval(change, 2300);
        }
        function stop2(){
            clearInterval(timer2);
        }
        $(".meet,.smallImg>ul>li").mouseover(function(){
            stop2();
        });
        $(".meet,.smallImg>ul>li").mouseout(function(){
            play2();
        });
        play2();
})


/*part3*/

$(function () {
    $("#u1>li>ul>li").hide();
    $("#chunxiao>li").show();
    $("#firstpoem").css("background","#EC6B0E");
    $("#u1>li").click(function () {
    $(this).siblings("li").children("ul").find("li").hide(300);
    $(this).siblings("li").children("p").css("background","#F5AA02");
    $(this).children("ul").find("li").show(300)
    $(this).children("p").css("background","#EC6B0E");
    });
});

/*part4*/

$(function(){
        var m = 0;
        var warp2 = $('.scenes');

        var firstimg2 = $('.scenes li').eq(0).clone();  //复制第一张图
        var secondimg = $('.scenes li').eq(1).clone();  
        var thirdimg = $('.scenes li').eq(2).clone();   
        var fourthimg = $('.scenes li').eq(3).clone();  
        $('.scenes').append(firstimg2).width($('.scenes li').length*100+'%');//添加在最后一张图后面
        $('.scenes').append(secondimg).width(($('.scenes li').length+1)*100+'%');
        $('.scenes').append(thirdimg).width(($('.scenes li').length+2)*100+'%');
        $('.scenes').append(fourthimg).width(($('.scenes li').length+3)*100+'%');

        //自动切换
        function change3(){
        m++;
        if (m==$('.scenes li').length-3) {
            m = 1;
        $('.scenes').css('left','0px');
        };
        warp2.stop().animate({left:-m*215+'px'},230);
        }

        $(".prev_").click(function(){
        m--;
        if (m == -1) {
            m=5;
            $('.scenes').css('left',"-4*230+'px'");
        };
        warp2.stop().animate({left:-m*215+'px'},230);
        });

        $(".next_").click(function(){
            change3();
        });

        var timer3;

        function play3(){
            timer3=setInterval(change3, 2300);
        }
        function stop3(){
            clearInterval(timer3);
        }
        $(".scenes>li,.next_,.prev_").mouseover(function(){
            stop3();
        });
        $(".scenes>li,.next_,.prev_").mouseout(function(){
            play3();
        });
        play3();
    });


/*part5*/

function imgClick(img){
        $("#imgShow").attr("src",img.src);
        $("#bigImgBox").css("display","block");
        $(".span").on("click",function(){
        $("#bigImgBox").css("display","none");
        })
    };       
       

        


        
