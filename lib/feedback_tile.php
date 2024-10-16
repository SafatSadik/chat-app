<?php 
if(isset($_POST['key'])){
   
   if($_POST['key'] == 'hui') {echo "<script>$('.feedback_header_text').html('Help us to improve');</script>"; }
   else if($_POST['key'] == 'sww') { echo "<script>$('.feedback_header_text').html('Something went wrong');</script>";}
   ?>
 
<div class="help_us_improve_header">How can we improve?</div>
<div class="help_us_improve_header2">Header</div>
<div class="help_us_improve_header_input"><input class="header_text" type="text" name="header_text" required></div>
<div class="help_us_improve_details">Details</div>
<div class="details_input"><textarea class="details_text" type="text" name="details_text" placeholder="Please include as much info as possible..." required></textarea></div>
<div class="add_screenshot_or_video"><img src="image/clip.png" alt=""><div class='asd_text'>Add a Screenshot or Video</div></div>
<form onsubmit="return false" enctype="multipart/form-data" autocomplete="false" method="post" id="form_feedback">
<div class="add_screenshot_or_video_input"> <input type="file" name="help_us_improve_file" class="help_us_improve_file" accept="image/*,video/*" multiple="" hidden></div>
</form>

<div class="preview"></div>
<div class="feed_submit_cancel_cont">
    <div class="feed_cancel">Cancel</div>
    <div class="feed_submit">Submit</div>
</div>
<script src="lib/js/feedback_post.js"></script>
<?php }?>