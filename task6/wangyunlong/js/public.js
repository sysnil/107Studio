$(function(){
	/*实现搜索框鼠标移入移出透明度的改变*/
	$('.searchInput').mouseover(function(){
		$(this).css("opacity","1")
	});
	$('.searchInput').mouseout(function(){
		$(this).css("opacity","0.4")
	});

   //实现鼠标浮动到头像上，显示出用户的信息
   $('.loginHead').mouseover(function(){
      $('.userInfo').css("display","block")
   });
   $('.loginHead').mouseout(function(){
      $('.userInfo').css("display","none")
   });
   $('.userInfo').mouseover(function(){
      $(this).css("display","block")
   })
   $('.userInfo').mouseout(function(){
      $(this).css("display","none")
   })

	/*实现nav的多级菜单效果*/
	$('.navContent li').mouseover(function(){
	    $(this).children().css("display","block")
	});
	$(".navContent li").mouseout(function(){
	    $(this).children().css("display","none")
    });

	/*实现校园风光图的轮播效果*/
   	var natureOl=$('.nature ul');
   	var natureLi=$('.nature ul li');
   	var natureLiWidth=natureLi.width();
   	var now=0;
   	function nature(){
   		if(now==2){
   			natureLi.eq(0).css({
   				"position":"relative",  /*now==2时，下一次计时器执行时会将第一张放到最后面*/
   				"left":natureLiWidth*3
   			})
   		}
   		now++;
   		natureOl.animate({"left":-now*natureLiWidth},500,function(){
   			if(now==3){
   				natureLi.eq(0).css("position","static");  /*第一张滑动到位置后，在恢复初始状态，循环*/
   				natureOl.css("left",0);
   				now=0;
   			}
   		});
   	}
   	setInterval(nature,3000);

      /*实现留言板的匿名按钮效果*/
      var anonymous=$('#anonymous');
      var first_row_yc=$('.lyb_first_row .yincang');
      anonymous.click(function(){
         /*判断是否选中，决定左边是否隐藏*/
         if(anonymous.is(":checked")){
            first_row_yc.css("display","none");
         }else{
            first_row_yc.css("display","inline-block");
         }
         
      })
})
