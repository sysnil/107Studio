$(document).ready(function(){
    $(".search").hover(function(){
        $(this).css("opacity","1.0")
    });
    $(".search").mouseleave(function(){
        $(this).css("opacity","0.4");
    });
    $(".nav ul>li").mouseenter(function(){
        $(this).children("ol").show();
    });
    $(".nav ul>li").mouseleave(function(){
        $(this).children("ol").hide();
    });

});