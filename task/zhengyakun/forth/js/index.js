jQuery(document).ready(function ($) {
    var test=$(".leftm");



    var test01=$(".right div");
    test.click(function(){
        var index=$(this).index();
 

       test01.eq(index).css("display","block").siblings().css("display","none");
    });
    function modechange(){
        test01.eq(1).css("display","block").siblings().css("display","none");
    };
    var test02=$(".testno");
    console.log(test02);
    var test03=$(".choice li");
    test03.click(function(){
        var liindex=$(this).index();
        console.log(liindex);
        var border=test02.eq(liindex).siblings();
        console.log(border);
    
        test02.eq(liindex).css("display","table").siblings().css("display","none");
    });








   






  
        



});