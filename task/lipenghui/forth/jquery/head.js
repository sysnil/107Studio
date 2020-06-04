$(function(){
    $(".nav>li>ul").hide();
     
    $(".nav>li").hover(function(){
        $(this).find("a").eq(0).css({"background":"#0594C9","font-weight":"700"});
        $(this).find("ul").show();
        $(".nav>li").css("z-index", "2");
    },function(){
        $(this).find("a").eq(0).css({"background":"#084466","font-weight":"500"});
        $(this).find("ul").hide();
        $(".nav>li").css("z-index", "2"); 
    });
})