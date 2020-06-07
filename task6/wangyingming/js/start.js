$(function(){
	//头部
	$(".headconcent .settings span").click(function(){
		var spannth=$(this).index();
		if(0==spannth)
		{
			alert("浏览器不支持自动设为首页，请手动设置");
		}
		else if(2==spannth){
			alert("无法自动添加到收藏夹，请使用CTRL + D手动添加");
		}
	});
	$(".headconcent .searchbox").mouseenter(function(){
		$(this).removeClass("covercss");
	});
	$(".headconcent .searchbox").mouseleave(function(){
		$(this).addClass("covercss");
	});
	// 下拉菜单；
	$(".navfir>li").mouseenter(function() {
		$(this).children("ul").children("li").stop(); 
		$(this).children("ul").children("li").slideDown(300);
	});
	$(".navfir li").mouseleave(function(){
		$(this).children("ul").children("li").stop();
		$(this).children("ul").children("li").slideUp(80);
	});
	//轮播
	var stop=null;
	var i=0;
	function circle(){
		$(".banner li").eq(i).fadeIn().siblings().fadeOut();
		$(".dot li").eq(i).addClass("dotcolornew").removeClass("dotcolorother").siblings().removeClass("dotcolornew").addClass(
			"dotcolorother");
	}
	function auto(){
		stop=setInterval(function(){
			i++;
			if(3==i)
			{
				i=0;
			}
			circle();
		},3000);
	}
	$(".banner li").eq(0).show();
	auto();
	$(".dot li").click(function() {
		clearInterval(stop);
		i = $(this).index();
		circle();
		auto();
	});
	// 返回顶部
	function totop(){
		var length=$(document).scrollTop();
		if(length>300)
		{
			$(".up").show();
			$(".up").mouseenter(function(){
				$(".coverup").show();
			});
			$(".up").click(function(){
				$("html,body").animate({scrollTop:0},"fast");
			})
			$(".up").mouseleave(function(){
				$(".coverup").hide();
			});
		}
		else{
			$(".up").hide();
		}
		if(length==0){
			$("html,body").stop(true);
		}
	}
	$(window).scroll(function(){
		totop();
	});
	//漂浮图片
	var x=0;
	var y=0;
	var constantx=40;
	var constanty=40;
	var prevent=null;
	var object=$(".movediv");
	function movediv(){
		prevent=setInterval(function(){
			screenwidth=$(window).width();
			screenheight=$(window).height();
			if(screenwidth-object.width()<x||x<0)
			{
				constantx=-constantx;
			}
			if(screenheight-object.height()<y||y<0)
			{
				constanty=-constanty;
			}
			x=x+constantx;
			y=y+constanty;
			object.offset({"left":x,"top":y});
		},800);
	}
	object.mouseenter(function(){
		clearInterval(prevent);
	});
	object.mouseleave(function(){
		movediv();
	})
});