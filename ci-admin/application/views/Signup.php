<div class="register-box">
 <div class="register-logo">
   <a href="../../index2.html"><b>Admin</b>LTE</a>
 </div>

   <?php if($this->session->flashdata('message')) { ?>
       <div class="alert alert-info">
           <?php echo $this->session->flashdata('message')?>
       </div>
   <?php } ?>
 <div class="card">
   <div class="card-body register-card-body">
     <p class="login-box-msg">Register a new membership</p>

     <?php echo form_open('register'); ?>
       <div class="input-group mb-3">
         <?php echo form_input(['type'=>'text', 'name' =>'name', 'id'=>'name','placeholder'=>'Enter Full name','class'=>'form-control']);?>
         <div class="input-group-append">
           <div class="input-group-text">
             <span class="fas fa-user"></span>
           </div>
         </div>
       </div>


       <div class="input-group mb-3">
         <?php echo form_input(['type'=>'email', 'name' =>'email', 'id'=>'email','placeholder'=>'Enter your email','class'=>'form-control']);?>
         <div class="input-group-append">
           <div class="input-group-text">
             <span class="fas fa-envelope"></span>
           </div>
         </div>
       </div>

       <div class="input-group mb-3">
         <?php echo form_password(['name'=>'password','id'=>'password','placeholder'=>'Enter your password','class'=>'form-control']);?>
         <div class="input-group-append">
           <div class="input-group-text">
             <span class="fas fa-lock"></span>
           </div>
         </div>
       </div>

       <div class="input-group mb-3">
         <?php echo form_password(['name'=>'passconf','id'=>'passconf','placeholder'=>'Confirm your password','class'=>'form-control']);?>
         <div class="input-group-append">
           <div class="input-group-text">
             <span class="fas fa-lock"></span>
           </div>
         </div>
       </div>

       <div class="row">
         <div class="col-8">
           <div class="icheck-primary">
             <input type="checkbox" id="agreeTerms" name="terms" value="agree">
             <label for="agreeTerms">
              I agree to the <a href="#">terms</a>
             </label>
           </div>
         </div>
         <!-- /.col -->
         <div class="col-4">
           <?php echo form_submit(['name'=>'submit','id'=>"click_form",'value'=>'Register','class'=>'btn btn-primary btn-block']);?>
         </div>
         <!-- /.col -->
       </div>
     <?php echo form_close(); ?>

     <div class="social-auth-links text-center">
       <p>- OR -</p>

       <!-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
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