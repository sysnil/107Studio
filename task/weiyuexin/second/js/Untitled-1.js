// JavaScript Document
<!-- Header2 Start -->
$(function(){
	$(".divtwo>ul>li").mouseover(function(){
		$(this).children("ul").stop().slideDown();
	});
	$(".divtwo>ul>li").mouseout(function(){
		$(this).children("ul").stop().hide();
	});
});
$(function(){
	$(".divthree>ul>li").mouseover(function(){
		$(this).children("ul").stop(true,false).slideDown();
	});
	$(".divthree>ul>li").mouseout(function(){
		$(this).children("ul").stop().hide();
	});
});
$(function(){
	$(".divfour>ul>li").mouseover(function(){
		$(this).children("ul").stop().slideDown();
	});
	$(".divfour>ul>li").mouseout(function(){
		$(this).children("ul").stop().hide();
	});
});
$(function(){
	$(".divfive>ul>li").mouseover(function(){
		$(this).children("ul").stop().slideDown();
	});
	$(".divfive>ul>li").mouseout(function(){
		$(this).children("ul").stop().hide();
	});
});
$(function(){
	$(".divsix>ul>li").mouseover(function(){
		$(this).children("ul").stop().slideDown();
	});
	$(".divsix>ul>li").mouseout(function(){
		$(this).children("ul").stop().hide();
	});
});
<!-- Header2 End -->
	
<!-- Picture Start -->
$(function(){
	var i=0;
	var first = $(".picture .ul li").first().clone();
	$(".picture .ul").append(first);
	$(".picture .btn .next").click(function(){
		i++;
		if(i==4){
			i=0;
			var first = $(".picture .ul li").first().clone();
			$(".picture .ul").append(first);
			$(".picture .ul").animate({left :-4800+'px'},1000,function(){
				first.remove();
				$(".picture .ul").css({left :0});
			});
		};
		$(".picture .ul").animate({left:-i*1200+'px'},1000);
		$(".button li").eq(i).addClass('on').siblings().removeClass('on');
	});
	$(".picture .btn .prev").click(function(){
		i--;
		if(i==-1){
			$(".picture .ul").css({left:-4*1200+'px'});
			i=3;
		}
		$(".picture .ul").animate({left:-i*1200+'px'},1000);
		$(".button li").eq(i).addClass('on').siblings().removeClass('on');
	});
	var timer = setInterval(function(){
		i++;
		if(i==4){
			i=0;
			var first = $(".picture .ul li").first().clone();
			$(".picture .ul").append(first);
			$(".picture .ul").animate({left :-4800+'px'},1000,function(){
				first.remove();
				$(".picture .ul").css({left :0});
			});
		};
		$(".picture .ul").animate({left:-i*1200+'px'},1000);
		$(".button li").eq(i).addClass('on').siblings().removeClass('on');
	},3000);
	$(".picture").mouseover(function(){
		clearInterval(timer);
	});
	$(".picture").mouseout(function(){
		timer = setInterval(function(){
		i++;
		if(i==4){
			i=0;
			var first = $(".picture .ul li").first().clone();
			$(".picture .ul").append(first);
			$(".picture .ul").animate({left :-4800+'px'},1000,function(){
				first.remove();
				$(".picture .ul").css({left :0});
			});
		}
		$(".picture .ul").animate({left:-i*1200+'px'},1000);
		$(".button li").eq(i).addClass('on').siblings().removeClass('on');
	},3000);
	});
	$(".button ul li").click(function(){
		i = $(this).index();
		$(".picture .ul").animate({left:-i*1200+'px'},1000);
		$(".button li").eq(i).addClass('on').siblings().removeClass('on');
	});
});
<!-- Picture End -->
	
<!-- Content Start -->
$(function(){
	$(".div13>ul>li>ul>li").hide();
	$(".div13>ul>li>ul>#dv").show();
	$(".div13>ul>#li").css("background-color","#F6730A");
	$(".div13>ul>li").click(function(){
		$(this).siblings("li").children("ul").find("li").hide(500);
		$(this).children("ul").find("li").show(500);
		$(this).css("background-color","#F6730A");
		$(this).siblings("li").css("background-color","#F5AA02")
	});
});
$(function(){
	$(".div113>#ul2").hide();
	$(".div111").css("background-color","#F6730A");
	$(".div111").mouseover(function(){
		$(".div113>#ul1").show(100);
		$(".div113>#ul2").hide(100);
		$(".div111").css("background-color","#F6730A");
		$(".div112").css("background-color","#F5AA02");
	});
	$(".div112").mouseover(function(){
		$(".div113>#ul2").show(100);
		$(".div113>#ul1").hide(100);
		$(".div112").css("background-color","#F6730A");
		$(".div111").css("background-color","#F5AA02");
	});
});
$(function(){
	var i=0;
	var first = $(".div121 #img2 li").first().clone();
	$(".div121 #img2").append(first);
	$(".div122 #img2 li").eq(0).css("opacity","1.0").siblings().css("opacity","0.0");
	var timer = setInterval(function(){
		i++;
		if(i==4){
			i=0;
			var first = $(".div121 #img2 li").first().clone();
			$(".div121 #img2").append(first);
			$(".div121 #img2").animate({left :-1340+'px'},1000,function(){
				first.remove();
				$(".div121 #img2").css({left :0});
			});
		};
		$(".div121 #img2").animate({left:-i*335+'px'},1000);
		$(".div122 #img1 img").eq(i).addClass('class').siblings().removeClass('class');
		$(".div122 #img2 li").eq(i).css("opacity","1.0").siblings().css("opacity","0.0");
	},2000);
	$(".div122").mouseover(function(){
		clearInterval(timer);
	});
	$(".div122").mouseout(function(){
		timer = setInterval(function(){
		i++;
		if(i==4){
			i=0;
			var first = $(".div121 #img2 li").first().clone();
			$(".div121 #img2").append(first);
			$(".div121 #img2").animate({left :-1340+'px'},1000,function(){
				first.remove();
				$(".div121 #img2").css({left :0});
			});
		}
		$(".div121 #img2").animate({left:-i*335+'px'},1000);
		$(".div122 #img1 img").eq(i).addClass('class').siblings().removeClass('class');
		$(".div122 #img2 li").eq(i).css("opacity","1.0").siblings().css("opacity","0.0");
	},2000);
	});
	$(".div122 #img1 img").mouseover(function(){
		i = $(this).index();
		$(".div121 #img2").animate({left:-i*335+'px'});
		$(".div122 #img1 img").eq(i).addClass('class').siblings().removeClass('class');
		$(".div122 #img2 li").eq(i).css("opacity","1.0").siblings().css("opacity","0.0");
	});
});
$(function(){
	var i=0;
	var oul=$(".div21 .picbox");
	var oulhtml= oul.html();
	oul.html(oulhtml+oulhtml)
	$(".div21 .nextprev .next").click(function(){
		i++;
		if(i==7){
			i=0;
			$(".div21 .picbox").css({left :0});
			};
		$(".div21 .picbox").animate({left:-i*160+'px'},1000);
	});
	$(".div21 .nextprev .prev").click(function(){
		i--;
		if(i==-1){
			$(".div21 .picbox").css({left:-800+'px'});
			i=5;
		}
		$(".div21 .picbox").animate({left:-i*160+'px'},1000);
	});
	var timer = setInterval(function(){
		i++;
		if(i==7){
			i=0;
			$(".div21 .picbox").css({left :0});
			};
		$(".div21 .picbox").animate({left:-i*160+'px'},1000);
	},3000);
});
$(function(){
	var maskwidth = $(document).width();
	var maskheight = $(document).height();
	$(".mask").width(maskwidth).height(maskheight).hide();
	$(".dog .dog1").hide();
	var left=($(window).width()-$(".dog1").width())/3;
	var scrollTop=$(document).scrollLeft();
	$(".content .div22 .dog1").click(function(){
		$(".dog .dog1").css({position:'absolute','left':left+screenLeft}).show();
		$(".dog .dog2").hide();
		$(".dog .dog3").hide();
		$(".dog .dog4").hide();
		$(".mask").show();
	});
	$(".dog .dog1> #btn").click(function(){
		$(".dog .dog1").hide();
		$(".mask").hide();
	});
});
$(function(){
	var maskwidth = $(document).width();
	var maskheight = $(document).height();
	$(".mask").width(maskwidth).height(maskheight).hide();
	$(".dog .dog2").hide();
	var left=($(window).width()-$(".dog2").width())/3;
	var scrollTop=$(document).scrollLeft();
	$(".content .div22 .dog2").click(function(){
		$(".dog .dog2").css({position:'absolute','left':left+screenLeft}).show();
		$(".dog .dog1").hide();
		$(".dog .dog3").hide();
		$(".dog .dog4").hide();
		$(".mask").show();
	});
	$(".dog .dog2> #btn").click(function(){
		$(".dog .dog2").hide();
		$(".mask").hide();
	});
});
$(function(){
	var maskwidth = $(document).width();
	var maskheight = $(document).height();
	$(".mask").width(maskwidth).height(maskheight).hide();
	$(".dog .dog3").hide();
	var left=($(window).width()-$(".dog3").width())/3;
	var scrollTop=$(document).scrollLeft();
	$(".content .div22 .dog3").click(function(){
		$(".dog .dog3").css({position:'absolute','left':left+screenLeft}).show();
		$(".dog .dog1").hide();
		$(".dog .dog2").hide();
		$(".dog .dog4").hide();
		$(".mask").show();
	});
	$(".dog .dog3> #btn").click(function(){
		$(".dog .dog3").hide();
		$(".mask").hide();
	});
});
$(function(){
	var maskwidth = $(document).width();
	var maskheight = $(document).height();
	$(".mask").width(maskwidth).height(maskheight).hide();
	$(".dog .dog4").hide();
	var left=($(window).width()-$(".dog4").width())/3;
	var scrollTop=$(document).scrollLeft();
	$(".content .div22 .dog4").click(function(){
		$(".dog .dog4").css({position:'absolute','left':left+screenLeft}).show();
		$(".dog .dog1").hide();
		$(".dog .dog2").hide();
		$(".dog .dog3").hide();
		$(".mask").show();
	});
	$(".dog .dog4> #btn").click(function(){
		$(".dog .dog4").hide();
		$(".mask").hide();
	});
});
<!-- Content End -->
