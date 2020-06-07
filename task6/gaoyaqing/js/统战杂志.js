$(function(){


    /**
     * 下拉菜单
     */
    var nav_list = $(".nav_list");
    var nav_list_ol = $(".nav_list ol");

    nav_list.hover(function(){
        nav_list_ol.stop(false,true);
        $(this).addClass("current");
        $(this).find(".nav_list_child").show();
 
    },function(){
        $(this).removeClass("current");
        $(this).find(".nav_list_child").hide(2000);
    });

    /*轮播*/


    var oul = $('.middle_banners ul');
    var aliwidth = $('.middle_banners ul li').eq(0).width();
    var _now = 0;  //计时器
    var timeId = null;  //计时器  不是一定为null,也可不写
    
    function slider (){
        if(_now == 2){
            _now = 0;
        }else{
            _now++;
        }
        oul.animate({'left':-aliwidth*_now},220);
    }
        timeId * setInterval(slider,3000);

        $('.middle_banners').mouseover(function(){
        clearInterval(timeId);
        });

        $('.middle_banners').mouseout(function(){
        timeId = setInterval(slider,3000);
       });
   
});