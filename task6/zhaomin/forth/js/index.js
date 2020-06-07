$(function(){
	
	      var nav_list = $(".nav_list");
          var nav_list_ol = $(".nav_list ol");

               nav_list.hover(function(){
               nav_list_ol.stop(false,true);
                $(this).find(".nav_list_child").show();
 
             },function(){
                 $(this).find(".nav_list_child").hide();
              });	
                $(".nav_list_child li").mouseout(function(){
                	$(this).removeClass()("font_weight");
             });
                $(".nav_list_child li").mouseover(function(){
    	        $(this).addClass("font_weight");
    	        $(this).parent("ol").siblings("a").addClass("font_weight");
            });
                 $(".nav_list_child").mouseout(function(){
    	         $(this).siblings("a").removeClass()("font_weight");
    	       
            });
   
   
              $(".header_search").mouseover(function(){
                 	$(".mask1").css("display","none");
            });
              $(".header_search").mouseout(function(){
          	         $(".mask1").css("display","block");
            });
               var now1=0;
               var now2=0;
               var timeId;   
              $(".box2 li").eq(now1).css("background-color","#ff0000").siblings().css("background-color","#666666");
               
               $(".box2 li").click(function(){
               	   var index2=$(this).index();
               	   now1=index2;  
               	   now2=index2;
               	  $(".box2 li").eq(now1%3).css("background-color","#ff0000").siblings().css("background-color","#666666");
               	  $(".tab2 li").eq(now1%3).css("display","block").siblings().css("display","none");
               	   $(".tab1").animate({"left":-320*index2},800);
               }); 
              function slider(){
               	     now1++;
               	     now2++;
               	     $(".box2 li").eq(now1%3).css("background-color","#ff0000").siblings().css("background-color","#666666");
               	      $(".tab2 li").eq(now1%3).css("display","block").siblings().css("display","none");
               	      $(".tab1").animate({"left":-320*now2},800,function(){
               	         if(now1==3){
               	         	
               	         	$(".tab1").css('left',0);
               	         	now2=0;
               	         	now1=0;
               	         }
               	         
               	      });
               	 }
               
                timeId = setInterval(slider,2400);
  
                $('.box2').mouseover(function(){
                	clearInterval(timeId);
                });
                $('.box2').mouseout(function(){
                	
                	timeId = setInterval(slider,2400);
                });
                
                $(".center-2 li:not(.intro):not(.w)").mouseover(function(){
                	$(this).children().css("color","#e33100");
                });
              $(".center-2 li:not(.intro)").mouseout(function(){
                	$(this).children().css("color","black");
                }); 
                
                /*
                 * 下载专区
                 */
                $(".content_left li").mouseover(function(){
                	$(this).css({
                		"background-color":"#990000",
                	    "font-weight":"800"
                	    }); 
                	$(this).children("a").css("color","white");
                });
                $(".content_left li").mouseout(function(){
                	$(this).css({
                		"background-color":"#f4f4f4",
                	    "font-weight":"500"
                	    }); 
                    $(this).children("a").css("color","black");
                });
                
                var t1=0;
                setInterval(function(){ 
                	t1++;
                    $(".nature ul").animate({"left":-250*t1},300,function(){
                    	if(t1==3){
                    		$(".nature ul").css('left',0);
                    		t1=0;
                    	}
                    });       
                }, 1500);
              
              var content_h1=$(".content_left").height();
              var content_h2=$(".content_right").height();
              if(content_h1>content_h2){
              	$(".content").css("height",content_h1);
              }else{
              		$(".content").css("height",content_h2);
              }
              
              /*
               * 内容页
               */
              $(".other").click(function(){
              	
              	window.open("./html/decoration.html");  
              });
              
             
              /*
               *  float 无序运动
               */
                     var top = 0;
                     var left =500;
             
               $(function() {
                    var rd = true;
                    var dd = true;
                    var s = 1;
                    var x = $(window).width() - $(".img5").width();
                     var y = $(window).height() - $(".img5").height();
                     var timer = setInterval(move, 50);

                function move() {
                    
                     if (top >= y) {
                        dd = false;
                      }
                        if (left >= x) {
                        rd = false;
                      }
                        if (top <= 0) {
                       dd = true;
                      }
                       if (left <= 0) {
                         rd = true;
                      }
                         top = top + s * (dd ? 1 : -1);
                         left = left + s * (rd ? 1 : -1);
                    $(".img5").css("top",top);
                    $(".img5").css("left",left)
                   }
                });
                
                /*
                 * 
                 * 回到顶部
                 */
                  $(function () {
                      $(window).scroll(function () {
                      if ($(window).scrollTop() >= 10) {
                      $('.return').show();
                         }
                          else {
                         $('.return').hide();
                        }
                   });
              });
                   $('.return').click(function () {
                   $('html,body').animate({ scrollTop: 0 }, 500);
              });
              
              var  $top=$(".set_top");
              $top.css("background-color","#D0D0D0");
              $top.click(function(){
              	  var $op=$(this).parents("li");
              	  $(this).css("background-color","#FC9D99");
              	  $op.siblings("li").children(".set_top").css("background-color","#D0D0D0");
              	  $op.fadeOut().fadeIn();
              	  $op.parents("ul").prepend($op);
              });
            
			
});