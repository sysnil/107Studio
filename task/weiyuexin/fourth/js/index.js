// JavaScript Document
$(function(){
	
	//搜索框
	$(".topright .search").mouseover(function(){
		$(this).css("backgroundColor","#FFFFFF");
		$(".topright .button").css("backgroundColor","#084466");
	}).mouseout(function(){
		$(this).css("backgroundColor","#AFD3EB");
		$(".topright .button").css("backgroundColor","#4C88AD");
	});
	$(".topright .button").mouseover(function(){
		$(this).css("backgroundColor","#084466");
		$(".topright .search").css("backgroundColor","#FFFFFF");
	}).mouseout(function(){
		$(this).css("backgroundColor","#4C88AD");
		$(".topright .search").css("backgroundColor","#AFD3EB");
	});
	
	
	//下拉菜单
	$(".header ul li ol").hide();
	$(".header ul li").mouseover(function(){
		$(this).find("ol").show();
		$(this).siblings().find("ol").hide();
	});
	$(".header ul li").mouseout(function(){
		$(".header ul li ol").hide();
	});
	
	 
	
	//轮播图1
	var t=0;
	var first1= $(".content .div1 .div11 .silder ul li").first().clone();
	$(".content .div1 .div11 .silder ul").append(first1);
	var timer=setInterval(function(){
		t++;
		if(t==3){
			t=0;
			var first1= $(".content .div1 .div11 .silder ul li").first().clone();
			$(".content .div1 .div11 .silder ul").append(first1);
			$(".content .div1 .div11 .silder ul").animate({left:-960+'px'},function(){
				first1.remove();
				$(".content .div1 .div11 .silder ul").css({left :0});
				$(".content .div1 .div11 .silder ol li").eq(0).addClass("point").siblings().removeClass("point");
			});
		};
		$(".content .div1 .div11 .silder ul").animate({left:-t*320+'px'});
		$(".content .div1 .div11 .silder ol li").eq(t).addClass("point").siblings().removeClass("point");
	},3000);
	
	$(".content .div1 .div11 .silder ol li").click(function(){
		t = $(this).index();
		$(".content .div1 .div11 .silder ul").animate({left:-t*320+'px'});
		$(".content .div1 .div11 .silder ol li").eq(t).addClass("point").siblings().removeClass("point");
	});
	$(".content .div1 .div11 .silder > ul").mouseover(function(){
		clearInterval('timer');
	});
	
	
	//轮播图2
	var i=0;
	var first2= $(".div2 .silder ul li").first().clone();
	$(".div2 .silder ul").append(first2);
	var timer=setInterval(function(){
		i++;
		if(i==3){
			i=0;
			var first2= $(".div2 .silder ul li").first().clone();
			$(".div2 .silder ul").append(first2);
			$(".div2 .silder ul").animate({left:-750+'px'},function(){
				first2.remove();
				$(".div2 .silder ul").css({left :0});
			});
		};
		$(".div2 .silder ul").animate({left:-i*250+'px'});
	},3000);
	
	
	//header2点击跳转
	$(".header2").click(function(){
		window.open("HTML/theory_1.html");
	});
	
	$(".header ul li").eq(0).click(function(){
		location.href='../107LAB第三次考核.html';
	});
	
	//相关链接
	$(".div3 .link2 ul li").eq(0).click(function(){
		location.href='http://www.zytzb.gov.cn/html/index.html';
	});
	$(".div3 .link2 ul li").eq(1).click(function(){
		location.href='http://www.rootinhenan.gov.cn/sitesources/rootinhenan/page_pc/index.html';
	});
	$(".div3 .link2 ul li").eq(2).click(function(){
		location.href='http://kf.rootinhenan.gov.cn/sitesources/kf/page_pc/index.html';
	});
	$(".div3 .link2 ul li").eq(3).click(function(){
		location.href='http://www.henu.edu.cn/';
	});
	$(".div3 .link2 ul li").eq(4).click(function(){
		location.href='http://tzb.henu.edu.cn/index/hdtzzz.htm';
	});
	
	
	$(".div3 .div32 ul li").eq(0).click(function(){
		location.href='http://www.zytzb.gov.cn/html/index.html';
	});
	$(".div3 .div32 ul li").eq(1).click(function(){
		location.href='http://www.rootinhenan.gov.cn/sitesources/rootinhenan/page_pc/index.html';
	});
	$(".div3 .div32 ul li").eq(2).click(function(){
		location.href='http://kf.rootinhenan.gov.cn/sitesources/kf/page_pc/index.html';
	});
	$(".div3 .div32 ul li").eq(3).click(function(){
		location.href='http://www.henu.edu.cn/';
	});
	$(".div3 .div32 ul li").eq(4).click(function(){
		location.href='http://tzb.henu.edu.cn/index/hdtzzz.htm';
	});
	
	
	//107网站工作室链接
	$(".footer span").click(function(){
		window.open('http://107.cuisf.top/');
	});
	
	
	//返回顶部按钮
	$(".footer .goToTop img").click(function(){
		$('html').animate({scrollTop: '0px'},500);
	});
	$(".footer .goToTop").fadeOut();
	$(window).scroll(function(){
		if($(window).scrollTop()>200){
			$(".footer .goToTop").fadeIn();
		}else{
			$(".footer .goToTop").fadeOut();
		}
	});
	
	
	//浮动窗口
	var divTop = $(".float").css("top");
	var divLeft = $(".float").css("left");
	var windowHeight = $(window).height();//浏览器高度
    var windowWidth = $(window).width();//浏览器宽度
	var dirX = 1.5;
	var dirY = 1;
	$(window).resize(function(){
		var windowHeight = $(window).height();//浏览器高度
		var windowWidth = $(window).width();//浏览器宽度
	});
	var handler = setInterval(function(){
		var position = $(".float").position();
		var nextPosX = position.left + dirX;//下一个水平位置
        var nextPosY = position.top + dirY;//下一个垂直位置
		if (nextPosX <= 0 || nextPosX >= windowWidth - $(".float").width()){
			dirX = dirX * -1;//改变方向
			nextPosX = position.left + dirX;
		}
		if (nextPosY <= 0 || nextPosY >= windowHeight - $(".float").height()){
			dirY = dirY * -1;//改变方向
			nextPosY = position.top + dirY;
		}
		$(".float").css({ left: nextPosX + "px", top: nextPosY + "px" });//移动到下一个位置
	},10);
	$(".float").mouseover(function(){
		clearInterval(handler);
	});
	$(".float").mouseout(function(){
		handler = setInterval(function(){
			var position = $(".float").position();
			var nextPosX = position.left + dirX;//下一个水平位置
			var nextPosY = position.top + dirY;//下一个垂直位置
			if (nextPosX <= 0 || nextPosX >= windowWidth - $(".float").width()){
				dirX = dirX * -1;//改变方向
				nextPosX = position.left + dirX;
			}
			if (nextPosY <= 0 || nextPosY >= windowHeight - $(".float").height()){
				dirY = dirY * -1;//改变方向
				nextPosY = position.top + dirY;
			}
			$(".float").css({ left: nextPosX + "px", top: nextPosY + "px" });//移动到下一个位置
		},10);
	});
	
	
	//留言框
	$(".content .div4 .div4_content ul li .message").hide();
	$(".content .div4 .div4_content ul .li >p").click(function(){
		$(".content .div4 .div4_content ul .li4 .message").show();
	});
	$(".content .div4 .div4_content ul .li4 .message .div3 > p").click(function(){
		$(".content .div4 .div4_content ul .li4 .message").hide();
	});
});