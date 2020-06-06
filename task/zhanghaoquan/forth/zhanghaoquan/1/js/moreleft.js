$(function () {  
    $(".left1 a").mouseover(function () {  
        $(this).css("backgroundColor","#990000")
        .css("color","white")
        .css("font-weight","bold")
        .css("letter-spacing","2px");
    })
    .mouseout(function () {  
        $(this).css("backgroundColor","#F0F0F0")
        .css("color","black")
        .css("font-weight","normal")
        .css("letter-spacing","1px");
    })
    $(".left2 a").mouseover(function () {  
        $(this).css("backgroundColor","#990000")
        .css("color","white")
        .css("font-weight","bold")
        .css("letter-spacing","2px");
    })
    .mouseout(function () {  
        $(this).css("backgroundColor","#F0F0F0")
        .css("color","black")
        .css("font-weight","normal")
        .css("letter-spacing","1px");
    })

    var position1=0;
    setInterval(function () {
        position1++;
        if(position1==3){
            position1=0;
        }
        $(".leftpic").animate({left:-250*position1},180);
    },2000)

    $(".rightfunc p:eq(2)").css("color","#CCCCCC");
    $(".rightfunc p:eq(3)").css("color","#CCCCCC");
    $(".rightfunc p:eq(4)").mouseover(function () {  
        $(this).css("backgroundColor","#EFF7F6");
    })
    .mouseout(function () {  
        $(this).css("backgroundColor","white");
    })
    $(".rightfunc p:eq(5)").mouseover(function () {  
        $(this).css("backgroundColor","#EFF7F6");
    })
    .mouseout(function () {  
        $(this).css("backgroundColor","white");
    })
})