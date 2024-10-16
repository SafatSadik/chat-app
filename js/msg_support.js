$("big_image_container").html("</div><div class='big_image'><img class='zoom_image' src='" + path + "'>");
$(".sender_box").mouseenter(function(){
    if($(this).hasClass("activated_reply")){}else{
    $(this).find(".msg_editor").attr("style","display:block");
    }});
$(".sender_box").mouseleave(function(){
    if($(this).hasClass("activated_reply")){}else{
    $(this).find(".msg_editor").attr("style","display:none");
    }});
$(".reciever_box").mouseenter(function(){
    if($(this).hasClass("activated_reply")){}else{
        $(this).find(".msg_editor").attr("style","display:block");
        }});
$(".reciever_box").mouseleave(function(){
    if($(this).hasClass("activated_reply")){}else{
        $(this).find(".msg_editor").attr("style","display:none");
        }});

$(".editor_delete_but").click(function(){
    let id = $(this).attr('id');
    setTimeout(function(){
    $.post("php/delete_msg.php",{sender:sender,reciever:reciever,msg_id : id},function(ajaxData){
    if(ajaxData == "d"){
        fetch();
    }
    });
    },1);
    }); 
  
function fetch(){
setTimeout(function() {
$.post("php/show_msg.php",{sender : sender,reciever : reciever},function(ajaxData){
$(".space").html(ajaxData + "<script src='js/msg_support.js'></script>");
if(!chatBox.classList.contains("active")){
scrollToBottom();
}
})
}, 10);
}

$(".editor_edit_but").click(function(){    
    let but_id = $(this).attr('id');
    let div_text = $("." + but_id + " .msg").text();
    let div_data = $("." + but_id).html();
    $("." + but_id).html("<input class='edit_inp' type='text'>");
    $(".edit_inp").val(div_text);

    $(".edit_inp").keypress(function(e){
        if(e.which == 13){
            const new_val = $(".edit_inp").val();
            if(new_val == ""){
                $("." + but_id).html(div_data);
            }else{
            if(new_val == div_text){
                $("." + but_id).html(div_data);
            }else{
                $.post("php/edit.php",{sender:sender,reciever:reciever,id:but_id,new_msg:new_val},function(ajaxData){
                 //post
                });
            }}
         }
    });
    $(".edit_inp").focus();
    $(".edit_inp").blur(function(){
        $("." + but_id).html(div_data);
    });
}); 

$(".reply_exit").attr("id",'0');

function exit(){
$(this).attr("style","background: #ffffff80;width: 25px;height: 25px;margin-right: 900px;");
setTimeout(function(){
    $(".reply_exit").attr("id",'0');
    $(".sender_box").removeClass("activated_reply");
    $(".reciever_box").removeClass("activated_reply");
    $(".replying").attr("style","display:none");
    $(".chat_inp").focus();
    $(".chats").attr("style","height: 80%;");
    $(".replying_to_pepe").removeAttr("id");
    $(".replying_to_pepe").html("");
    $(".replying_to_msg").html(""); 
},100); }
$(".editor_reply_but").click(function(){
    if($(".sender_box").hasClass("activated_reply")){
          $(".sender_box").removeClass("activated_reply");
      }
    if ($(".reciever_box").hasClass("activated_reply")){
        $(".reciever_box").removeClass("activated_reply");
    }
   let but_id = $(this).attr('id');
   let div_text = $("." + but_id + " .msg").text();
   let parent_class = $("." + but_id).parent();

   $("." + but_id).parent().addClass("activated_reply");
   $(".chat_inp").focus();
   $(".reply_exit").attr("id",but_id);
   $(".reply_exit").attr("style","background: #ffffff1f;width: 26px;margin-right: 2%;height: 26px;");
  // $(".editor_reply_but").parent().find(".msg_editor").attr("style","display:block");
   $(".chats").attr("style","height: 77%;");
   $(".replying").attr("style","display:block");
   if(parent_class.hasClass("sender_box")){
   $(".replying_to_pepe").html("@" + sender_name);
   $(".replying_to_pepe").attr("id",sender);
   }else if(parent_class.hasClass("reciever_box")){
    $(".replying_to_pepe").html("@" + reciever_name);
    $(".replying_to_pepe").attr("id",reciever);
   }
   $(".replying_to_msg").html(": " + div_text);
});

$(".reply_exit").click(exit);


