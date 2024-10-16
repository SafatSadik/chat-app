    $(".add_screenshot_or_video").click(function(){
       $('.help_us_improve_file').click();
    });
    $(document).on('mouseenter', '.image_cover_container', function () {
        $(this).find(".remove_image").show()
    });
    $(document).on('mouseleave', '.image_cover_container', function () {
        $(this).find(".remove_image").hide()
    })

    $(".preview").attr("style","display: none;");
    // this variable will store images for preview
    var images = [];
    
    $(".help_us_improve_file").change(function(){
        var image = this.files;
        if(image.length > 0){
        $(".preview").attr("style","display: flex;");
        $(".feedback_wraper").attr('style','width: 33%; height: 85%;left:34%; top: 5%;border-radius: 5px;');
        $(".feedback_header").attr("style","height: 9%;");
        $(".help_us_improve_header_input").attr("style","height:7%");
        $(".details_input").attr("style","height: 34%;");
        $(".add_screenshot_or_video").attr("style","height: 8%;");
        $(".feed_submit_cancel_cont").attr("style","height: 9%;margin-top: 5%;");
        
        var filesLength = image.length;
        for (i = 0; i < filesLength; i++) {

            if (check_duplicate(image[i].name)) {
         images.push({
                      "name" : image[i].name,
                      "url" : URL.createObjectURL(image[i]),
                      "file" : image[i],
                })
            }
        }
       $('#form_feedback')[0].reset();
        $(".preview").html(image_show());
    }
    });

    function check_duplicate(name) {
        var image = true;
        var imageLength = images.length;
        if (imageLength > 0) {
            for (e = 0; e < images.length; e++) {
                if (images[e].name == name) {
                    image = false;
                    break;
                }
            }
        }
        return image;
    }
    function image_show() {
   	    var image = "";
   	  	images.forEach((i) => {
   	  	     image += `<div class="image_cover_container">
                  <div class='cross_container'>
                  <img class="remove_image" src='image/x.png' onclick="delete_image(`+ images.indexOf(i) +`)">
                  </div>
                  <div class="image_main_container">
   	  	  	  	  <img src="`+ i.url +`" alt="Image">
                  </div>
   	  	  	      </div>`;
   	  	  });
   	  	  return image;
   	  }
    function delete_image(e) {
   	  	  images.splice(e, 1);
   	  	  $(".preview").html(image_show());
        if(images.length == 0){
            $(".preview").attr("style","display: none;");
            $(".feedback_wraper").attr('style','width: 33%; height: 74%;left:34%; top: 8%;border-radius: 5px;');
            $(".feedback_header").attr("style","height: 11%;");
            $(".help_us_improve_header_input").attr("style","");
            $(".details_input").attr("style","");
            $(".add_screenshot_or_video").attr("style","");
            $(".feed_submit_cancel_cont").attr("style","");
        }
   	}
    
    $(".feed_cancel").click(function(){
        $(".feedback_cross").click();
    });

    $(".preview").bind('mousewheel', function(e){
        e.preventDefault();
        console.log(e)
        document.querySelector(".preview").scrollLeft += (e.offsetX)/2;
    })

 

/*

$.ajax({
        url: 'php/file_post.php',
        data: fd ,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function(ajaxData){
        if(ajaxData=="done"){
            location.reload();
        }}
        });
        */