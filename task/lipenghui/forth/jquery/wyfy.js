$(function(){
	$(".bodybox label").click(function(){
			  if($(".check").attr("index")==0){ 
			    $("#yh").addClass("name");
			    $(".bodybox label input").attr("index","1");
			  } 
			  else if($(".check").attr("index")==1){
			  	$("#yh").removeClass("name");
			  	$(".bodybox label input").attr("index","0");
			  }
		})
})