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
        //让id为des这个p标签的文本设置为当前点击的这个a标签所对应的title;
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
            var contentValue = $('.img>a').eq(i).attr('title');
            $('#des').text(contentValue);
            if(i == 3){
                $('.num>a').eq(0).addClass('on').siblings().removeClass('on');
            }else{
            $('.num>a').eq(i).addClass('on').siblings().removeClass('on');
            }
        },2000);
        //鼠标移入动画停止
        $('.screen').mouseover(function(){
            clearInterval(timer);
        });
        $('.screen').mouseout(function(){
            timer = setInterval(function(){
            i++;
            if(i == 4){
                $('.img').css({left:'0px'});
                i = 1;
            }
            $('.img').animate({left:-i*100+'%'});
            if(i == 3){
                $('.num>a').eq(0).addClass('on').siblings().removeClass('on');
            }else{
            $('.num>a').eq(i).addClass('on').siblings().removeClass('on');
            }
        },2000);
        });
        //点击圆点跳转
        $('.num>a').click(function(){
            i = $(this).index();
            if(i == 0 && $('.img').css('left') == '-300%'){

            }else{
            $('.img').animate({left:-i*100+'%'});
            $('.num>a').eq(i).addClass('on').siblings().removeClass('on');
            }
        });
        //总偏移量为100%*3；
        //鼠标移入移出超链接颜色改变
        var lis = $('.content1>ul>li');
            $(lis).on({
        	    mouseover:function(){
        	    var idx = $(this).index();
        	    if(idx>0){
                  $(this).children('a').css('color','rgb(218,3,0)');
                  $(this).children('span').css('color','rgb(218,3,0)');
              }
        	},
        	    mouseout:function(){
        	    var idx = $(this).index();
        	    if(idx>0){
                  $(this).children('a').css('color','black');
                  $(this).children('span').css('color','black');
              }
        	}
        });
        $('.content2>ul>li').on({
        	mouseover:function(){
                $(this).children('a').css('color','rgb(218,3,0)');
                $(this).children('span').css('color','rgb(218,3,0)');
        },
        	mouseout:function(){
                $(this).children('a').css('color','black');
                $(this).children('span').css('color','black');
        	}
        });
        $('.news>li').on({
            mouseover:function(){
                $(this).children('a').css('color','rgb(218,3,0)');
                $(this).children('span').css('color','rgb(218,3,0)');
        },
            mouseout:function(){
                $(this).children('a').css('color','black');
                $(this).children('span').css('color','black');
            }
        });
            $('.recall>li').on({
        	    mouseover:function(){
        	    var idx = $(this).index();
        	    if(idx>0){
                    $(this).children('a').css('color','rgb(218,3,0)');
                    $(this).children('span').css('color','rgb(218,3,0)');
              }
        	},
        	    mouseout:function(){
        	    var idx = $(this).index();
        	    if(idx>0){
                    $(this).children('a').css('color','black');
                    $(this).children('span').css('color','black');
              }
        	}
        });
        $('.figure>li').on({
        	mouseover:function(){
                $(this).children('a').css('color','rgb(218,3,0)');
                $(this).children('span').css('color','rgb(218,3,0)');
        },
        	mouseout:function(){
                $(this).children('a').css('color','black');
                $(this).children('span').css('color','black');
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
        $('#floatwindow>a')
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
var xin = true,yin = true;
var step = 1;
var delay = 10;
var $obj;
$(function() {
    $obj = $("#imgDiv");
    var time = window.setInterval("move()", delay);
    $obj.mouseover(function() {
        clearInterval(time)
    });
    $obj.mouseout(function() {
        time = window.setInterval("move()", delay)
    });
});

function move() {
    var left = $obj.offset().left;
    var top = $obj.offset().top;
    var L = T = 0; //左边界和顶部边界
    var R = $(window).width() - $obj.width(); // 右边界
    var B = $(window).height() - $obj.height(); //下边界
    if (left < L) {
        xin = true; // 水平向右移动
    }
    if (left > R) {
        xin = false;
    }
    if (top < T) {
        yin = true;
    }
    if (top > B) {
        yin = false;
    }
    left = left + step * (xin == true ? 1 : -1);
    top = top + step * (yin == true ? 1 : -1);
    // 给div 元素重新定位
    $obj.offset({
        top: top,
        left: left
    })
}
$(function() {
    $("#a").click(function() {
        var b = $("#a").parent();
        $(b).remove();
    })
})
$("#imgDiv").draggable();