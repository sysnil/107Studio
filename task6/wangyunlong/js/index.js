$(function(){
    /*实现首页小轮播图效果*/
    var imgOl=$('.focusPicture ul')
    var imgLi=$('.focusPicture ul li');
    var liWidth=imgLi.width();
    var ulWidth=$('.focusPicture ul').width();
    var prev=$('.prev');
    var next=$('.next');
    var number=0;  
    var timeId=null;
    /*上一张点击*/
    prev.click(function(){
    	clearInterval(timeId);/*清楚原有计时器，下面再添加计时器，避免出现刚点击计时器就到时间翻页现象*/
    	if(number==0){
    		imgLi.eq(2).css({
    			"position":"relative",
    			"left":-ulWidth
    		});
		}
		number--;
    	imgOl.animate({"left":number*"-320"},500,function(){
    		if(number==-1){
    			imgLi.eq(2).css("position","static");
    			imgOl.css("left",-2*liWidth);
    			number=2;
    		}
    	})
    	timeId=setInterval(focusPicture,4000);
    })
    /*下一张*/
    next.click(function(){
    	clearInterval(timeId);
    	focusPicture();
    	timeId=setInterval(focusPicture,4000);
    })
    function focusPicture(){
    	if(number==2){
    		imgLi.eq(0).css({
    			"position":"relative",
    			"left":ulWidth
    		});
		}
		number++;
    	imgOl.animate({"left":number*"-320"},500,function(){
    		if(number==3){
    			imgLi.eq(0).css("position","static");
    			imgOl.css("left",0);
    			number=0;
    		}
    	})
    }
    timeId=setInterval(focusPicture,4000);
    
    /*点击回到顶部效果*/
    $('.top_button').mouseover(function(){
    	$('.top_button').find("img").attr("src","../images/top_button2.jpg")
    });
    $('.top_button').mouseout(function(){
    	$('.top_button').find("img").attr("src","../images/top_button.jpg")
    });

    /*实现浮动层*/
    var float=$(".float");
    var x=float.offset().left;
    var y=float.offset().top;
    var sx=0;/*sx值为0，这时x++,向右走，直到x>=特定值。然后令sx=1,这时x--,向左走，直到x<=0。再令sx=0，循环*/
    var sy=0;/*同上，控制上下运动*/
    var timeFloat=null;
    timeFloat=setInterval(function(){
            var window_height=$(window).height();/*为了实时取到当前可视区域宽高度，比如取消全屏化、鼠标拖动改变页面大小，所以将其取高度宽度函数放在定时器中*/
            var window_width=$(window).width();
            var float_width=float.width();
            var float_height=float.height();
            var winx=window_width-float_width;
            var winy=window_height-float_height;
            if(sx==0){
                float.css("left",x++)
            }else if(sx==1){
                float.css("left",x--)
            }
            if(x>=winx){
                sx=1;
            }else if(x<=0){
                sx=0;
            }

            if(sy==0){
                float.css("top",y++)
            }else if(sy==1){
                float.css("top",y--)
            }
            if(y>=winy){
                sy=1;
            }else if(y<=0){
                sy=0;
            }
    },7);
    /*浮动层效果完*/

    /*下面是点击浮动层会出现弹出层*/
    var docWidth=$(document).width();
    var docHeight=$(document).height();
    var dialog=$(".dialog");
    var flash=$(".flash");
    float.click(function(){
        flash.fadeIn(500);/*白色盒子出现*/
        flash.animate({width:docWidth},500);/*白色盒子先宽度满屏，下面再实现高度满屏*/
        flash.animate({height:docHeight,top:0},500,function(){
            dialog.fadeIn(500);/*弹出层出现*/
        });
        flash.css({
            "width":"1px",
            "height":"20px",
            "top":"300px"
        })/*白色盒子恢复初始状态，用于下次点击*/
        flash.fadeOut(1000);    /*白色盒子消失*/
    })
    /*点击关闭按钮关闭弹出层*/
    var close=$("#close");
    close.click(function(){
        dialog.fadeOut(300);
    })


});