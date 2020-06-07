$(function () {  
    $(".adminmain p:eq(2)").css("margin-left","28px");
    $(".adminmain p:eq(3)").css("margin-left","30px");
    $(".adminmain div:eq(0)").css("margin-left","10px");
    var back =$(".adminmain div:eq(3)");
    var admin = $(".admin");
    var adminmain = $(".adminmain");
    admin.click(function () {  
        adminmain.slideToggle();
        admin.css("display","none");
    })
    back.click(function () {  
        adminmain.slideUp();
        admin.css("display","block");
    })
})