function feedback_tiles_click(){
    $(".feedback_left").attr('style','display:block');
    $(".feedback_header_text").attr('style','margin-left: 14%;');
    $(".feedback_wraper").attr('style','width: 33%; height: 74%;left:34%; top: 8%;border-radius: 5px;');
    $(".feedback_header").attr('style','height: 11%;');
}
$(".help_us_improve").click(function(){
    feedback_tiles_click();
    $.post("lib/feedback_tile.php",{key:"hui"},function(ajaxData){
        $(".feedback_main").html(ajaxData);
    });
  });

$(".something_went_wrong").click(function(){
    feedback_tiles_click();
    $.post("lib/feedback_tile.php",{key:"sww"},function(ajaxData){
        $(".feedback_main").html(ajaxData);
    });
});