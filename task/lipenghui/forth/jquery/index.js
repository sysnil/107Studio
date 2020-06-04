/*bodyContent*/

/*top1*/

$(function(){
    var p = 0;
    var warp = $('.banner');
    var firstimg = $('.banner li').first().clone();

    $('.banner').append(firstimg).width($('.banner li').length*100+'%');

    function change(){
    p++;
    if (p==$('.banner li').length) {
        p = 1;
    $('.banner').css('left','0px');
    };
    warp.stop().animate({left:-p*100+'%'},230);
    var q;
    if(p<3)
        q=p+1;
    else
        q=1;
    showBtn(q);
    showIntro(q);
    }

    $(".jumpBtn>li").click(function(){
        var i=$(this).attr("index");
        var q;
        if(p<3)
            q=p+1;
        else
            q=1;
        var n=q-i;
        if(n>0){
            warp.stop().animate({left:-(q-n-1)*100+'%'},230);
            q=q-n;
            if(q==1)
                p=3;
            else
                p=1;
            showBtn(q);
            showIntro(q);
        }
        else{
            for(var j=0;j<-n;j++)
                change();
        }
    });

    function showBtn(q){
    $(".jumpBtn>li").removeAttr("id");
    $(".jumpBtn>li").eq(q-1).attr("id","on");
    }
    function showIntro(q){
            $(".introduce>ul>li>a").text(function(){
                if(q==1)
                    return "我校荣获“河南省民族团结进步创建示范...";
                else if(q==2)
                    return "我校在全省高校统一战线开展庆祝新中国...";
                else
                    return "省委常委、统战部部长孙守刚出席“2019...";
            });
        }
    
    var timer;

    function play(){
    timer=setInterval(change, 2300);
    }
    function stop(){
        clearInterval(timer);
    }
    $(".banner,.jumpBtn,#prev,#next").mouseover(function(){
        stop();
    });
    $(".banner,.jumpBtn,#prev,#next").mouseout(function(){
        play();
    });
    play();
})

    $(function () {
        $(".return").hide();
        $(function () {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 200) {
                    $(".return").fadeIn(500);
                } else {
                    $(".return").fadeOut(500);
                }
            });
            $(".return").click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 500);
            });
        });
    });



$(function(){  
 startMove();
});
var leftOffset=0;
var topOffset=0;
var up=1;
var left=1;
var position=new Object();
var xpeed=2;
var ypeed=3;
var interval=0;
var delay=20;

function mover(){
    $(function(){
        $(".fly").hover(function(){
            xpeed=1;
            ypeed=1;
        },function(){
            xpeed=2;
            ypeed=3;
        });
    });
    position=$(".fly").offset();
    leftOffset=position.left;
    upOffset=position.top;
    if(up){
       topOffset+=ypeed;
    }else{
       topOffset-=ypeed;
    }
     $(".fly").offset({top:topOffset});
    if(left){ 
        leftOffset+=xpeed;
    }else{ 
        leftOffset-=xpeed;
    }
    $(".fly").offset({left:leftOffset});
    if(leftOffset>1019){
       left=0;
       leftOffset=1019;
    }
    if(leftOffset<0){
       left=1;
       leftOffset=0;
    }
    if(topOffset>660){
       up=0;
       topOffset=660;
    }
    if(topOffset<0){
       up=1;
       topOffset=0;
    }
}

function startMove(){ 
    
    interval=setInterval('mover()',delay);
}
