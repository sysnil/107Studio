$(function(){
    var p = 0;
    var warp = $('.naturelist');
    var firstimg = $('.naturelist li').first().clone();

    $('.naturelist').append(firstimg).width($('.naturelist li').length*100+'%');

    function change(){
    p++;
    if (p==$('.naturelist li').length) {
        p = 1;
    $('.naturelist').css('left','0px');
    };
    warp.stop().animate({left:-p*100+'%'},230);
    }
    
    var timer;

    function play(){
    timer=setInterval(change, 2300);
    }
    function stop(){
        clearInterval(timer);
    }
    $(".naturelist").mouseover(function(){
        stop();
    });
    $(".naturelist").mouseout(function(){
        play();
    });
    play();
})