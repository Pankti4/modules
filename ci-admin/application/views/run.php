<html>
 <body>
 <div class="ajax_response_result">
 <form id="reg_form">
     <h5>Name</h5>
     <input type="text" name="name" value="<?php echo set_value('name'); ?>" />
     <div class="errorMessage"><?php echo form_error('name'); ?></div>
     <h5>Email Address</h5>
     <input type="text" name="email" value="<?php echo set_value('email'); ?>" />
     <div class="errorMessage"><?php echo form_error('email'); ?></div>
     <h5>Password</h5>
     <input type="text" name="password" value="<?php echo set_value('password'); ?>" />
     <div class="errorMessage"><?php echo form_error('password'); ?></div>
     <h5>Password Confirm</h5>
          <input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" />
     <div class="errorMessage"><?php echo form_error('passconf'); ?></div>
     <div><input type="button" id="click_form" value="Submit" /></div>
 </form>
 </div>
 </body>
 </html>

 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 <script type="text/javascript">
$(document).ready(function() {   
   $('#click_form').click(function(){
    jQuery.ajax({
    type: "POST",
    url: "<?php echo site_url('register/ajax_signup') ?>",    
    data: $("#reg_form").serialize(),
    success: function(res) {
        $(".ajax_response_result").html(res);
     }
    });
  });
});
</script>