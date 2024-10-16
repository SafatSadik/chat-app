$(document).ready(function(){
let add_emoji = $(".add_emoji");
let add_gif = $(".GIF");
var count = 0;
function add_gif_function(){
    $(".emoji_container").attr('style','visibility:visible; height:70%; ');
    $(".select_gif_but").addClass("Selected_but");
    if($(".select_emoji_but").hasClass("Selected_but")){
        $(".select_emoji_but").removeClass("Selected_but");
    }else if($(".select_sticker_but").hasClass("Selected_but")){
        $(".select_sticker_but").removeClass("Selected_but");
    }
    $(".main_emojis").html("<div class='gif_search_box'><input type='text' class='gif_search_input' name='gif_search_input' autocomplete='off'></div><div class='gif_show'></div><script src='js/gif_support.js'></script>");
    //$(".gif_search_input").select();
    $(".emoji_container").focus();
}
function add_emoji_function(){
    $(".select_emoji_but").addClass("Selected_but");
    $(".emoji_container").attr('style','visibility: visible; height:70%; ');

    if($(".select_gif_but").hasClass("Selected_but")){
        $(".select_gif_but").removeClass("Selected_but");
    }else if($(".select_sticker_but").hasClass("Selected_but")){
        $(".select_sticker_but").removeClass("Selected_but");
    }

    $.post("php/emoji.php",function(ajaxData){
      $(".main_emojis").html(ajaxData);
    });
    $(".emoji_container").focus();
}
add_emoji.mouseenter(function(){
    count++;
    if(count == 1){
    $(".add_emoji img").attr('src','emoji/smileys & people/18.png');
    }else if(count == 2){
        $(".add_emoji img").attr('src','emoji/smileys & people/19.png');
    }
    else if(count == 3){
        $(".add_emoji img").attr('src','emoji/smileys & people/24.png');
    }else if(count == 4){
        $(".add_emoji img").attr('src','emoji/smileys & people/57.png');
    }else if(count == 5){
        $(".add_emoji img").attr('src','emoji/smileys & people/75.png');
    }else if(count == 6){
        $(".add_emoji img").attr('src','emoji/smileys & people/1f444.png');
    }else if(count == 7){
        $(".add_emoji img").attr('src','emoji/smileys & people/11.png');
        count = 0;
    }
});

add_emoji.click(function(){
    add_emoji_function();
});

add_gif.click(function(){
    add_gif_function();
});

$(".select_gif_but").click(function(){
    add_gif_function();
});
$(".select_emoji_but").click(function(){
    add_emoji_function();
});

$(".emoji_container").blur(function(){
     $(".main_emojis").html("");
     $(".emoji_container").attr('style','visibility: hidden; height:0%;');
});
$(".emoji_cross").click(function(){
    $(".main_emojis").html("");
    $(".emoji_container").attr('style','visibility: hidden; height:0%;');
});

});