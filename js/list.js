document.querySelector(".all_peoples").classList.add("activated"); 
$("document").ready(function(){
    let all_peoples = $(".all_peoples");
    let all_friends = $(".all_friends");
    let pending = $(".pending");
    let blocked = $(".blocked");
    let add_friend_button = $(".add_friend");
    let add_friend_directly = $(".direct_friend");
    function show_all_friends(){
      setTimeout(function(){ 
        $.post("php/show_friends.php",{mew : "mew"},function(ajaxData){ 
               $(".lists").html(ajaxData);

               all_friends.addClass("activated");
               if(all_peoples.hasClass("activated")){
                 all_peoples.removeClass("activated");
               }else if(pending.hasClass("activated")){
                 pending.removeClass("activated");
               }else if(blocked.hasClass("activated")){
                 blocked.removeClass("activated");
               }else if(add_friend_directly.hasClass("activated")){
                add_friend_directly.removeClass("activated");
              }
        });
      },1); 
    }
    function show_all_peoples(){
      setTimeout(function(){
        $.post("php/show_all_peoples.php",{mew : "mew"},function(ajaxData){ 
               $(".lists").html(ajaxData);
               all_peoples.addClass("activated");
               if(all_friends.hasClass("activated")){
                 all_friends.removeClass("activated");
               }else if(pending.hasClass("activated")){
                 pending.removeClass("activated");
               }else if(blocked.hasClass("activated")){
                 blocked.removeClass("activated");
               }else if(add_friend_directly.hasClass("activated")){
                add_friend_directly.removeClass("activated");
              }
        });
      },1);
    }
    function show_pending(){
      $(".pending").addClass("activated");
               if(all_peoples.hasClass("activated")){
                 all_peoples.removeClass("activated");
               }else if(all_friends.hasClass("activated")){
                 all_friends.removeClass("activated");
               }else if(blocked.hasClass("activated")){
                 blocked.removeClass("activated");
               }else if(add_friend_directly.hasClass("activated")){
                add_friend_directly.removeClass("activated");
              }
               
               setTimeout(function(){
                $.post("php/pending.php",{mew : "mew"},function(ajaxData){
                    $(".lists").html(ajaxData);
                });
               }, 1);
    }
    add_friend_button.on("click",function(){
      let reciever_id = $(this).attr('id');

      setTimeout(function(){
        $.post("php/add_friends.php",{sender : sender , reciever : reciever_id},function(ajaxData){
          if(ajaxData == "F"){
            show_all_friends();
          }else if(ajaxData == "P"){
            show_pending();
          }else if (ajaxData == "done"){
            alert("Friend request has been sent");
          }
        });
      },1);
    });
    all_peoples.on("click",show_all_peoples);
    all_friends.on("click",show_all_friends);
    pending.on("click", show_pending);  
    $(".friends").on("click",show_all_friends);

    add_friend_directly.on("click",function(){
      add_friend_directly.addClass("activated");

      if(all_peoples.hasClass("activated")){
        all_peoples.removeClass("activated");
      }else if(all_friends.hasClass("activated")){
        all_friends.removeClass("activated");
      }else if(blocked.hasClass("activated")){
        blocked.removeClass("activated");
      }else if(pending.hasClass("activated")){
        pending.removeClass("activated");
      }
          setTimeout(function(){
            $.post("php/directF.php",function(ajaxData){
              $(".lists").html(ajaxData);
            })
          },1);
    }); 
});