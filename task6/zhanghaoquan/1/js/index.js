$(function () {  
    $(".bannerico li:eq(0)").css("backgroundColor","red");
    $(".bannermsg p:eq(0)").siblings().css("display","none");
    var position=0;
    $(".bannerico li:eq(0)").click(function () {
        position=0;  
        $(".bannerimg").animate({left:0},230);
        $(this).css("backgroundColor","red");
        $(this).siblings().css("backgroundColor","#666666");
        $(".bannermsg p:eq(0)").css("display","block");
        $(".bannermsg p:eq(0)").siblings().css("display","none");
    })
    $(".bannerico li:eq(1)").click(function () {  
        position=1;
        $(".bannerimg").animate({left:-320},230);
        $(this).css("backgroundColor","red");
        $(this).siblings().css("backgroundColor","#666666");
        $(".bannermsg p:eq(1)").css("display","block");
        $(".bannermsg p:eq(1)").siblings().css("display","none");
    })
    $(".bannerico li:eq(2)").click(function () {  
        position=2;
        $(".bannerimg").animate({left:-640},230);
        $(this).css("backgroundColor","red");
        $(this).siblings().css("backgroundColor","#666666");
        $(".bannermsg p:eq(2)").css("display","block");
        $(".bannermsg p:eq(2)").siblings().css("display","none");
    })
    interval=setInterval(timeid,2500);
    $(".banner").mouseover(function () {  
        clearInterval(interval);
    })
    $(".banner").mouseout(function () {  
        interval=setInterval(timeid,2500);
    })
    function timeid() {  
        position++;
        if(position==3){
            position=0;
        }
        $(".bannerimg").animate({left:-320*position},230);
        if(position==0){
            $(".bannerico li:eq(0)").css("backgroundColor","red");
            $(".bannerico li:eq(0)").siblings().css("backgroundColor","#666666");
            $(".bannermsg p:eq(0)").css("display","block");
            $(".bannermsg p:eq(0)").siblings().css("display","none");
        }
        if(position==1){
            $(".bannerico li:eq(1)").css("backgroundColor","red");
            $(".bannerico li:eq(1)").siblings().css("backgroundColor","#666666");
            $(".bannermsg p:eq(1)").css("display","block");
            $(".bannermsg p:eq(1)").siblings().css("display","none");
        }
        if(position==2){
            $(".bannerico li:eq(2)").css("backgroundColor","red");
            $(".bannerico li:eq(2)").siblings().css("backgroundColor","#666666");
            $(".bannermsg p:eq(2)").css("display","block");
            $(".bannermsg p:eq(2)").siblings().css("display","none");
        }
    }

    $(".text3:eq(2) li").css("color","black");
    $(".text3part:eq(0) li").css("color","#DA0300");
    $(".text3part:eq(1) li:eq(0)").css("color","#DA0300");
    $(".text3date:eq(1) li:eq(0)").siblings().css("color","black");
    $(".textdate li:eq(0)").css("color","#DA0300");
    $(".textcontent a:eq(0)").css("color","#DA0300")
    .siblings().css("color","black").mouseover(function () {  
        $(this).css("color","#DA0300");
    })
    .mouseout(function () {  
        $(this).css("color","black");
    })
})