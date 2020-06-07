$(function(){

    /* 按钮触发动画
 
     $("button").click(function(){
        $(".header_win").animate({
            left:300,
        });

        $(".header_win").animate({
            top:150

        },500);

     });

     */


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



    /**
     * 轮播图
     */


    var imgOl = $(".banner_img ul");
    var imgLi = $(".banner_img ul li");
    var imgPoint = $(".banner_point ol li");
    var img = $(".banner_img img");
    var imgWidth = img.width();
    var imgLength = imgLi.length;
    var timeId = null;
    var _index = 0;   //用来控制图片
    var _index2 = 0;  //用来控制焦点
    var banner_timeId = null;

    //写轮播图执行滚动的方法
    function banner(){
        if(_index>=imgLength-1){
            imgLi.eq(0).css({
                'position':'relative',
                'left':imgLength*imgWidth
            });
            _index2=0;
        }else{
            _index2++;
        }
        _index++;

        imgOl.animate({left:-_index*imgWidth},300,function(){
            if(_index == 3){
                imgLi.eq(0).css('position','static');
                imgOl.css('left',0);
                _index = 0;
            }
        });
        //给下面的焦点加样式
        imgPoint.eq(_index2).addClass("point_current").siblings().removeClass('point_current');

    }
    // 点击焦点的方法
      function banner_click(){
        clearInterval(timeId);              //清除定时器    

        _index2 = $(this).index();
        _index = _index2;                   //将两个计数器同步

        imgPoint.eq(_index2).addClass("point_current").siblings().removeClass('point_current');
        imgOl.animate({left:-_index*imgWidth},500);
        timeId = setInterval(banner,3000);  //再重新打开定时器 
    }   

    clearInterval(timeId);     
    // 自动滚动的方法
    timeId = setInterval(banner,3000);
    // 点击焦点执滚动的执行
    imgPoint.click(banner_click);
            
        //给下面的焦点加样式
        imgPoint.eq(_index2).addClass("point_current").siblings().removeClass('point_current');

        timeId = setInterval(banner,3000);


});

