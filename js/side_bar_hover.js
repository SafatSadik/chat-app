$("document").ready(function(){
    let side_bar_people = $(".side_bar_people");
    side_bar_people.hover(function(){
        $(this).find(".cross").attr("style","display:block;");
    });
    side_bar_people.mouseleave(function(){
        $(this).find(".cross").attr("style","display:none;");
     });
     $(".cross").on("click",function(){
        let op_id = $(this).attr("id");
        $.post("php/cross.php",{my_id:sender , op_id :op_id} , function(ajaxData){
            setTimeout(function() {
                $.post("php/show_side_bar.php",{sender : sender},function(ajaxData){
                    $(".side_bar_peoples_show").html(ajaxData);
                })}, 10);
        });
     });
});