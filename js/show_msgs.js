let chatBox = document.querySelector(".chats");
chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active"); 
}
document.querySelector(".chat_inp").select();
$(document).ready(function(){
       $(".big_image_container").click(function(){
        $(".big_image_container").html("");
        });

        function fetch(){
            setTimeout(() => {
            $.post("php/show_msg.php",{sender : sender,reciever : reciever},function(ajaxData){
                $(".space").html(ajaxData + "<script src='js/msg_support.js'></script>");
                if(!chatBox.classList.contains("active")){
                    scrollToBottom();
                }
            });
        }, 1);
            }

        setInterval(function(){
            setTimeout(function(){
                $.post("php/check_unread.php",{sender : sender,reciever : reciever},function(ajaxData){
                    if(ajaxData == "1"){
                        fetch();
                    }else if(ajaxData == "0"){
                      
                    }
                 });
            }, 1);
        },700)

        fetch();
});
function scrollToBottom(){
    document.querySelector(".chats").scrollTop = document.querySelector(".chats").scrollHeight;
  }