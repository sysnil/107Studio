$(function () {  
    var p=$(".righttext p");
    $(".righttable td:eq(0)").css("width","400px").css("height","20px");
    $(".righttable td:eq(0)").siblings().css("width","140px");
    p.click(function () {  
        $(".lyb").css("display","block");
    })
    $(".close p").click(function () {  
        $(".lyb").css("display","none");
    })
    p.css("cursor","pointer");
    $("#check").click(function () {  
        $(".hide").toggle();
    })
    $(".show input:eq(2)").css("float","left");
})