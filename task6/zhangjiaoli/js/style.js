$(function(){
	var lis = $('.sizein>li');
		//给一级菜单设置鼠标移入事件，显示二级菜单
		$('.sizeout>li').on({
		mouseover:function(){
			$(this).children('.sizein').show();
			$(this).css('background-color','rgb(5,148,201)');
		},
		mouseout:function(){
			$(this).children('.sizein').hide();
			$(this).css('background-color','rgb(24,119,183)');
		}
        });
        $(lis).on({
        	mouseover:function(){
        		$(this).css('background-color','rgb(5,148,201)');
        	},
        	mouseout:function(){
        		$(this).css('background-color','rgb(24,119,183)');
        	}
        });
        //鼠标移入显示左右箭头和小圆点
    var tag1 = $('.dots');
    var tag2 = $('.move');
        $('#screen').on({
		mouseover:function(){
			$(tag1).show();
			$(tag2).show();
		},
		mouseout:function(){
			$(tag1).hide();
			$(tag2).hide();
		}
        });
        //平滑翻页轮播图
        var i = 0;
        var first = $('.img>li').first().clone();
        $('.img').append(first);
        $('.move>li:nth-of-type(2)').click(function(){
            i++;
            if(i == 4){
                $('.img').css({left:'0px'});
                i = 1;
            }
            $('.img').animate({left:-i*100+'%'});
            if(i == 3){
                $('.dots>li').eq(0).addClass('on').siblings().removeClass('on');
            }else{
            $('.dots>li').eq(i).addClass('on').siblings().removeClass('on');
            }
        });
        $('.move>li:nth-of-type(1)').click(function(){
            i--;
            if(i == -1){
                $('.img').css({left:-2*100+'%'});
                i = 2;
            }
            $('.img').animate({left:-i*100+'%'});
            $('.num>li').eq(i).addClass('on').siblings().removeClass('on');
        });
        //实现图片自动轮播
        var timer = setInterval(function(){
              i++;
            if(i == 4){
                $('.img').css({left:'0px'});
                i = 1;
            }
            $('.img').animate({left:-i*100+'%'});
            if(i == 3){
                $('.dots>li').eq(0).addClass('on').siblings().removeClass('on');
            }else{
            $('.dots>li').eq(i).addClass('on').siblings().removeClass('on');
            }
        },3000);
        //鼠标移入动画停止
        $('#screen').mouseover(function(){
            clearInterval(timer);
        });
        $('#screen').mouseout(function(){
            timer = setInterval(function(){
            i++;
            if(i == 5){
                $('.img').css({left:'0px'});
                i = 1;
            }
            $('.img').animate({left:-i*100+'%'});
            if(i == 4){
                $('.dots>li').eq(0).addClass('on').siblings().removeClass('on');
            }else{
            $('.dots>li').eq(i).addClass('on').siblings().removeClass('on');
            }
        },3000);
        });
        //点击圆点跳转
        $('.dots>li').click(function(){
            i = $(this).index();
            if(i == 0 && $('.img').css('left') == '-300%'){

            }else{
            $('.img').animate({left:-i*100+'%'});
            $('.dots>li').eq(i).addClass('on').siblings().removeClass('on');
            }
        });
        //小轮播图
        var j = 0;
        var first = $('.img1>a').first().clone();
        $('.img1').append(first);
        //实现图片自动轮播
        var timer = setInterval(function(){
              j++;
            if(j == 4){
                $('.img1').css({left:'0px'});
                j = 1;
            }
            $('.img1').animate({left:-j*100+'%'});
            if(j == 3){
                $('.num>a').eq(0).addClass('on').siblings().removeClass('on');
            }else{
            $('.num>a').eq(j).addClass('on').siblings().removeClass('on');
            }
        },2000);
        //鼠标移入动画停止
        $('.new_left').mouseover(function(){
            clearInterval(timer);
        });
        $('.new_left').mouseout(function(){
            timer = setInterval(function(){
            j++;
            if(j == 4){
                $('.img1').css({left:'0px'});
                j = 1;
            }
            $('.img1').animate({left:-j*100+'%'});
            if(j == 3){
                $('.num>a').eq(0).addClass('on').siblings().removeClass('on');
            }else{
            $('.num>a').eq(j).addClass('on').siblings().removeClass('on');
            }
        },2000);
        });
        //点击圆点跳转
        $('.num>a').click(function(){
            j = $(this).index();
            if(j == 0 && $('.img').css('left') == '-300%'){

            }else{
            $('.img1').animate({left:-j*100+'%'});
            $('.num>a').eq(j).addClass('on').siblings().removeClass('on');
            }
        });
        //超链接移入变色
        $('.title').on({
        	mouseover:function(){
        		$(this).css('color','rgb(24,119,183)');
        	},
        	mouseout:function(){
        		$(this).css('color','black');
        	}
        });
        $('.title1').on({
        	mouseover:function(){
        		$(this).css('color','rgb(24,119,183)');
        	},
        	mouseout:function(){
        		$(this).css('color','black');
        	}
        });
        $('.inform').on({
        	mouseover:function(){
        		$(this).css('color','rgb(24,119,183)');
        	},
        	mouseout:function(){
        		$(this).css('color','black');
        	}
        });
        $('.new_right>ul>li>a').on({
        	mouseover:function(){
        		$(this).css('color','rgb(24,119,183)');
        	},
        	mouseout:function(){
        		$(this).css('color','black');
        	}
        });
        $('.tech>ul>li>a').on({
        	mouseover:function(){
        		$(this).css('color','rgb(24,119,183)');
        	},
        	mouseout:function(){
        		$(this).css('color','black');
        	}
        });
        $('.content>ul>li>a').on({
        	mouseover:function(){
        		$(this).css('color','rgb(24,119,183)');
        	},
        	mouseout:function(){
        		$(this).css('color','black');
        	}
        });
        $('.mtbd>ul>li>a').on({
        	mouseover:function(){
        		$(this).css('color','rgb(24,119,183)');
        	},
        	mouseout:function(){
        		$(this).css('color','black');
        	}
        });
        $('.support>p>a').on({
        	mouseover:function(){
        		$(this).css('color','red');
        	},
        	mouseout:function(){
        		$(this).css('color','white');
        	}
        });
        //鼠标滑入题目滑出
        $('.right').on({
        	mouseover:function(){
        		$('.right>span').slideDown('slow');
        	},
        	mouseout:function(){
        		$('.right>span').slideUp('slow');
        	}
        });
})