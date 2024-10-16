var apikey = "JU4E2ZOTPHIC";
var lmt = 23;
$(".gif_search_input").keyup(function(){
    $(".gif_search_input").keypress();
    var search_term = $(".gif_search_input").val();
    if(search_term == ""){
        $(".gif_show").html("");
    }else{
        var share_url = "https://g.tenor.com/v1/search?q=" + search_term + "&key=" + apikey + "&limit=" + lmt;
        $(".gif_show").html("<div class='gif_show_container'></div>");
        $.post(share_url,function(ajaxData){
            var m = 0;
            while (m < lmt) {
                var url = ajaxData["results"][m]["media"][0]["tinygif"]["url"];
                $(".gif_show_container").append("<div class='gifs' id='" + m + "'><img  src='" + url + "' class='gif_pictures'></div>");         
                m++;
            }
        });
    } 
});
$('.gif_show').on('click', '.gif_pictures', function(){
    let gif_url = $(this).attr('src');
    let parser = document.createElement('a');
    parser.href = gif_url;
    let url_protocol = parser.protocol ;
    let url_hostname = parser.hostname; 
    let url_host = parser.host;  
    if(url_protocol === "https:" && url_hostname === "media.tenor.com" && url_host === "media.tenor.com"){
        $.post("php/send_gif.php",{gif_url : gif_url , sender : sender , reciever : reciever},function(ajaxData){
            if(ajaxData == '1'){
               $(".main_emojis").html("");
               $(".emoji_container").attr('style','display:none');
            }
        });
        }else{
        
        }
});