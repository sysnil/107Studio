$(function () {  
    $(".headerfunc p:eq(0)").css("width","83px").css("cursor","pointer").click(function () {  
        alert("浏览器不支持自动设为首页，请手动设置");
    })
    $(".headerfunc p:eq(2)").css("padding-left","20px").css("padding-right","30px").css("cursor","pointer").click(function () {  
        alert("无法自动添加到收藏夹，请使用CTRL + D手动添加");
    })
    $(".search").mousemove(function () {  
        $(".searchip input").css("backgroundColor","white").css("color","black");
        $(".searchbt button").css("backgroundColor","#084466").css("color","white");
    })
    $(".search").mouseout(function () {
        $(".searchip input").css("backgroundColor","#AFD3EB").css("color","#789CB4");
        $(".searchbt button").css("backgroundColor","#4C88AE").css("color","#AFD3EB");
    })
    $(".menupart>li").hover(function () {  
        $(this).children(".selected").stop().slideToggle(0);
    })
    $(".menupart li").mouseover(function () {  
        this.style.backgroundColor="#0594C9";
    })
    .mouseout(function () {  
        this.style.backgroundColor="#084466";
    })
    $(".menupart>li>ul>li").css("width","210px")
    .css("height","30px")
    .css("line-height","30px")
    .css("font-size","14px")
    .mouseover(function () {  
        $(this).css("font-weight","bold")
        .css("letter-spacing","2px");
    })
    .mouseout(function () {  
        $(this).css("font-weight","normal")
        .css("letter-spacing","0px");
    })
})