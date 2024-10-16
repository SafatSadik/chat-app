    let plus = document.querySelector(".plus");
    let file = document.querySelector(".file");
$(document).ready(function(){
    //$(".chats").scrollTop(50000000000000000000000000000000000);
function exit(){
    $(".reply_exit").removeAttr("id");
    $(".sender_box").removeClass("activated_reply");
    $(".reciever_box").removeClass("activated_reply");
    $(".replying").attr("style","display:none");
    $(".chat_inp").focus();
    $(".chats").attr("style","height: 80%;");
    $(".replying_to_pepe").removeAttr("id");
    $(".replying_to_pepe").html("");
    $(".replying_to_msg").html("");
}

$(".chat_inp").on("keypress",function(e){
    if(e.which == 13) {
        let msg = $(".chat_inp").val();
        if($(".reply_exit").attr("id") == "0"){
            let replying_msg_id = '0';
        
                $.post("php/msg_post.php",{replied_msg_id : replying_msg_id , massage : msg, sender : sender, reciever : reciever},function(ajaxData){
                    $(".chat_inp").val('');
 //                   $(".chats").scrollTop(5000000000000000000000000000000000000);
                    if(ajaxData == "1"){
                    
                }else if(ajaxData = "0"){
             console.log("error");
                }  
                });
            
        }else{
            let replying_msg_id = $(".reply_exit").attr("id");
                $.post("php/msg_post.php",{replied_msg_id : replying_msg_id , massage : msg, sender : sender, reciever : reciever},function(ajaxData){
                $(".chat_inp").val('');
    //            $(".chats").scrollTop(5000000000000000000000000000000000000);
                if(ajaxData == "1"){
                    exit();
                }else if(ajaxData = "0"){
                console.log("error");
                }
                }); 
        }  
    }
});


    let fi = $(".file");
    fi.change(function(){
    var fd = new FormData();
    var files = $('.file')[0].files;
    // Check file selected or not
         $(".uploader").attr("style","display:block;");
        $(".up_but").click(function(){
        fd.append('file',files[0]);
        fd.append('sender',sender);
        fd.append('reciever',reciever);
        $(".uploader").attr("style","display:none;");
        $.ajax({
        url: 'php/file_post.php',
        data: fd ,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function(data){
        if(data=="done"){
            location.reload();
        }
        //$(".plus").html("<input type='file' name='file' class='file' hidden><img src='image/plus.png' class='plus_img' >; ");
                    //plus_fetch();
        }
        });
        });
    });
});
plus.addEventListener("click",function(){
    file.click();
});