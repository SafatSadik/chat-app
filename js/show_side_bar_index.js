$("document").ready(function(){
    setTimeout(function() {
        $.post("php/show_side_bar.php",{sender : sender},function(ajaxData){
            $(".side_bar_peoples_show").html(ajaxData);
        })}, 1);
}); 