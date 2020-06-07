//关于contact,download,content,more的处理
 $(function () {
    //头部
            $('.header .set .homepage').click(function(){
	            alert('浏览器不支持自动设为首页，请手动设置');
            });//头部点击设为首页弹出
            $('.header .set .collect').click(function(){
	            alert('无法自动添加到收藏夹，请使用CTRL + D手动加');
            });//头部点击加入收藏弹出
            $('.header .set form').mouseover(function(){
	            $(this).children('input').css('opacity','100');
            });
            $('.header .set form').mouseout(function(){
	            $(this).children('input').css('opacity','');
            });//头部的搜索框透明度变化
    //导航栏
            $(".nav-show").mouseenter(function () {
                $(this).children("ol").stop().show();
            });//鼠标移入下拉菜单出现
            $(".nav-show").mouseleave(function () {
                $(this).children("ol").stop().hide();
            });//鼠标移出下拉菜单隐藏
            $('.nav-show,.nav-show ol li,.nav-show a').mouseover(function(){
            	$(this).css("background","#0594c9");
            });//鼠标进入背景颜色改变
             $('.nav-show,.nav-show ol li,.nav-show a').mouseout(function(){
            	$(this).css("background","");
            });//鼠标移出背景颜色还原
             $('.nav-show ol li').mouseover(function(){
            	$(this).css("font-weight","bolder");
            });//鼠标移入下拉菜单文字加粗
              $('.nav-show ol li').mouseout(function(){
            	$(this).css("font-weight","");
            });//鼠标移出下拉菜单文字恢复
               $('.nav-show').mouseover(function(){
            	$(this).children("a").css("font-weight","bolder");
            });//鼠标移入文字加粗
                $('.nav-show').mouseout(function(){
            	$(this).children("a").stop().css("font-weight","");
            });//鼠标移出文字恢复
    //内容页图片轮播
            var oul=$('.main .main-left .main-left-pc ul');
            var ali=$('.main .main-left .main-left-pc ul li');
            var numli=$('.main .main-left .main-left-pc ol li');
            var aliwidth=$('.main .main-left .main-left-pc ul li').eq(0).width();
            var _now=0;
            var _now2=0;
            var timeid=null;
    
            function slider(){
                if(_now==numli.size()-1){
                    ali.eq(0).css({'position':'relative','left':oul.width()
                });
                    _now=0;
                }else{
                _now++;
                }
                _now2++;
                numli.eq(_now).addClass('current').siblings().removeClass();
                oul.animate({'left':-aliwidth*_now2},800,function(){
                  if(_now==0){
                    ali.eq(0).css({'position':'static'})
                    oul.css('left','0');
                    _now2=0;
                  }
                });
 
             }
             timeid=setInterval(slider,2400);
             $('.main .main-bottom .section-1').mouseover(function(){
                clearInterval(timeid);
             });
             $('.main .main-bottom .section-1').mouseout(function(){
                timeid=setInterval(slider,2400);
             });      
    //内容页左侧文字改变
            $('.main .main-left p').mouseover(function(){
                $(this).css({'background':'#990000','font-weight':'bolder','color':'#ffffff'})
            });//背景颜色和字体改变
            $('.main .main-left p').mouseout(function(){
                $(this).css({'background':'','font-weight':'','color':''})
            });//背景颜色和字体恢复
    //留言板匿名留言
            $(".message-3").click(function () {
                var $cr = $(".message-3");
                if ($cr.is(":checked")) {
                    $(".message-bottom form div").css("display", "none");
                }//勾选复选框左侧信息隐藏
                else {
                    $(".message-bottom form div").css("display", "inline");
                }//不选择时内容出现
            });
});


