<script>
$("document").ready(function(){
let cancel_but = $(".cancel");
let accept_but = $(".accept");
let reject_but = $(".reject");
        
function show_pending(){
      $(".pending").addClass("activated");
               setTimeout(function(){
                $.post("php/pending.php",{mew : "mew"},function(ajaxData){
                    $(".lists").html(ajaxData);
                });
               }, 10);
}

      cancel_but.on("click",function(){
        let reciever = $(this).attr('id');
            setTimeout(function(){
            $.post("php/cancel.php ", {sender : sender , reciever : reciever} , function(ajaxData){
              if(ajaxData = "done"){
             show_pending()
              }
            });
            },10);
      });
      accept_but.on("click",function(){
        let second_friend = $(this).attr('id');
        setTimeout(function(){
          $.post("php/accept.php ", {first_friend : sender , second_friend : second_friend} , function(ajaxData){
            if(ajaxData = "done"){
              show_pending()
               }
          });
          },10);

      });

      reject_but.on("click",function(){
        let reciever = $(this).attr('id');
        setTimeout(function(){
          $.post("php/reject.php ", {sender : sender , reciever : reciever} , function(ajaxData){
            if(ajaxData = "done"){
              show_pending()
               }
          });
          },10);

      });
});
</script>