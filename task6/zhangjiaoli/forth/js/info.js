$(function(){
	//鼠标移入搜索框，背景颜色改变
	$('.search').on({
		mouseover:function(){
				$(this).css('opacity',1);
			},
		mouseout:function(){
				$(this).css('opacity',0.4);
			}
	});
	var lis = $('.sizein>li');
		//给一级菜单设置鼠标移入事件，显示二级菜单
		$('.sizeout>li').on({
		mouseover:function(){
			$(this).children('.sizein').show();
			$(this).css('background-color','rgb(5,148,201)');
		},
		mouseout:function(){
			$(this).children('.sizein').hide();
			$(this).css('background-color','rgb(8,68,102)');
		}
        });
        $(lis).on({
        	mouseover:function(){
        		$(this).css('background-color','rgb(5,148,201)');
        	},
        	mouseout:function(){
        		$(this).css('background-color','rgb(8,68,102)');
        	}
        });
        //平滑翻页轮播图
        var i = 0;
        var first = $('.img>a').first().clone();
        $('.img').append(first);
        //实现图片自动轮播
        var timer = setInterval(function(){
              i++;
            if(i == 4){
                $('.img').css({left:'0px'});
                i = 1;
            }
            $('.img').animate({left:-i*100+'%'});
        },2000);
        //鼠标移入背景颜色改变
        $('.download').on({
        	mouseover:function(){
        		$(this).css('background-color','rgb(149,1,1)');
        	},
        	mouseout:function(){
        		$(this).css('background-color','rgb(240,240,240)');
        	}
        });
        var listyle = $('.lihead').siblings('ul').children('li');
        $(listyle).on({
        	mouseover:function(){
        		$(this).css('background-color','rgb(149,1,1)');
        	},
        	mouseout:function(){
        		$(this).css('background-color','rgb(240,240,240)');
        	}
        });
        $('.foot2>p>a').on({
        	mouseover:function(){
                $(this).css('color','rgb(218,3,0)');
        	},
        	mouseout:function(){
        		$(this).css('color','black');
        	}
        });
        //设置页面被卷曲出去的高度
        $(window).scroll(function(){
            var scroll_len = $(window).scrollTop();
            if(scroll_len > 120) {
                $('#returntop').fadeIn();
            } else {
                $('#returntop').fadeOut();
            };
        });
        $('#returntop').click(function(e){
            $("body,html").animate({scrollTop:0},300);  //时间为0.3s
        });
        $('.more>a').on({
        	mouseover:function(){
        		$(this).css('color','gold');
        	},
        	mouseout:function(){
        		$(this).css('color','rgb(194,194,220)');
        	}
        });
});