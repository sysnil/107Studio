$(function () {  
    var click = 1;
    var view=$("#view");
    var viewoff=$("#viewoff");
    var word = $("#word");
    
    function seen() {  
        word.attr("type","text");
        view.css("display","inline");
        viewoff.css("display","none");
    }

    function unseen() {  
        word.attr("type","password");
        viewoff.css("display","inline");
        view.css("display","none");
    }

    view.click(function () {
        if(click == 1){  
            seen();
            click = 0;
        }
        else{
            unseen();
            click = 1;
        }
    })
    viewoff.click(function () {
        if(click == 1){  
            seen();
            click = 0;
        }
        else{
            unseen();
            click = 1;
        }
    })
})