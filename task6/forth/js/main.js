 //关于main的处理
 $(function () {
    //头部
            $('.header .set .homepage').click(function(){
	            alert('浏览器不支持自动设为首页，请手动设置');
            });//头部点击设为首页弹出
            $('.header .set .collect').click(function(){
	            alert('无法自动添加到收藏夹，请使用CTRL + D手动添加');
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
    //主页图片无缝轮播
             var oul=$('.main .main-bottom .section-1 ul');//获取ul
             var ali=$('.main .main-bottom .section-1 ul li');//获取ul的li
             var numli=$('.main .main-bottom .section-1 ol li');//获取ol的li
             var aliwidth=$('.main .main-bottom .section-1 ul li').eq(0).width();//获取宽度
             var _now=0;//数字样式计数器
             var _now2=0;//图片运动距离计数器
             var timeid=null;

             numli.click(function(){
             	var index=$(this).index();//索引
             	_now=index;//同步
             	_now2=index;//同步
             	$(this).addClass('current').siblings().removeClass();//称为current其他的去除
             	oul.animate({'left':-aliwidth*index},500);
             }); //点击让图片与数字一同变化
              function slider(){
             	if(_now==numli.size()-1){
             		ali.eq(0).css({'position':'relative','left':oul.width()
             	});//把第一张图片定位到最后一张，同时留有li的位置
             		_now=0;
             	}else{
             	_now++;//还原
                }
                _now2++;
             	numli.eq(_now).addClass('current').siblings().removeClass();
             	oul.animate({'left':-aliwidth*_now2},500,function(){
                  if(_now==0){
             		ali.eq(0).css({'position':'static'})//去掉relative属性
             		oul.css('left','0');//li还原回来
             		_now2=0;//还原
             	  }
             	});

             	
             }
             timeid=setInterval(slider,1500);
             $('.main .main-bottom .section-1').mouseover(function(){
             	clearInterval(timeid);
             });//鼠标移上去图片停止
             $('.main .main-bottom .section-1').mouseout(function(){
             	timeid=setInterval(slider,1500);
             });//鼠标移出图片回复滚动
    //主体
             $('.section-2 li a,.section-3 p,.section-4 li a,.section-5 li a,.section-6 li a').mouseover(function(){
             	$(this).css('color','#da0300')
             });//鼠标进入文字颜色改变
             $('.section-2 li a,.section-3 p,.section-4 li a,.section-5 li a,.section-6 li a').mouseout(function(){
             	$(this).css('color','')
             });//鼠标移出文字颜色恢复
    //回到顶部
            $(window).scroll(function () {
                if ($(window).scrollTop() >= 100) {
                    $('.up').fadeIn();
                }//获取滚动条与顶部之间的距离，当大于100时图片出现
                else {
                    $('.up').fadeOut();
                }//如果不是就继续隐藏  
            });
            $('.up').click(function () {
                $('html,body').animate({ scrollTop: 0 }, 500);
            });//点击回到顶部用500毫秒恢复到顶部
    //图片浮动
            var photo=$('.photo');
            var timer;
            var Left=true;
            var Top=true;
            var x,y;
            var stepLeft=5; //每一步横向移动的距离
            var stepTop=2; //每一步纵向移动的距离
            var interval=100;  //定时器时间间隔
            move();
            /*设置定时器移动函数*/
            function move(){
                timer=setInterval(function(){
                    var nowleft=parseInt(photo.css('left')),//解析photo，返回当前left数值
                        nowtop=parseInt(photo.css('top'));//解析photo,返回当前top数值
                    if(nowleft<stepLeft){//左边启动时
                        if(Top){//如果在顶部
                           x=stepLeft;
                           y=stepTop;//右下方移动
                        }else{
                           x=stepLeft;
                           y=-stepTop;//右上方移动
                        } 
                        Left=true;
                    }else if(nowleft>$(window).width()-300){//在右方时
                        if(Top){//如果在顶部
                           x=-stepLeft;
                           y=stepTop;//左下方移动
                        }else{
                           x=-stepLeft;
                           y=-stepTop;//左上方移动
                        }
                        Left=false;
                    }
                    if(nowtop<stepTop){//上方启动时
                        if(Left){//如果在左边
                            x=stepLeft;
                            y=stepTop;//右下方移动
                        }else{
                            x=-stepLeft;
                            y=stepTop;//左下方移动
                        }
                        Top=true;
                    }else if(nowtop>$(window).height()-100){//在下方时
                        if(Left){//如果在左边
                            x=stepLeft;
                            y=-stepTop//右上方移动
                        }else{
                            x=-stepLeft;
                            y=-stepTop;//左上方移动
                        }
                        Top=false;
                    }
                        step(x,y);
                    },interval)
            }
            /*每一小步的移动函数*/
            function step(offsetLeft,offsetTop){
                var left=parseInt(photo.css('left'))+offsetLeft;//距离左侧的距离
                    top=parseInt(photo.css('top'))+offsetTop;//距离上方的距离
                if(offsetLeft>0){
                    offsetLeft='+='+offsetLeft;
                    if(offsetTop>0){
                        offsetTop='+='+offsetTop;
                    }else{
                        offsetTop='-='+Math.abs(offsetTop);//函数的绝对值
                    }
                }else{
                    offsetLeft='-='+Math.abs(offsetLeft);//函数的绝对值
                    if(offsetTop>0){
                        offsetTop='+='+offsetTop;
                    }else{
                        offsetTop='-='+Math.abs(offsetTop);//函数的绝对值
                }
            }
            photo.animate({'left':offsetLeft,'top':offsetTop},0.1);
        }   
});
