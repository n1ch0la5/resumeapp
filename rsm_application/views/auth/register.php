
<!--<div id="infoMessage"><?php //echo $message; ?></div>-->
<div class="row">
 
    <!-- Contact Details -->
    <div class="large-9 columns">

<h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>
 
      
      <form action="" method="post">
        <p>
        <div class="row">
          <div class="large-6 columns">
            <?php echo lang('create_user_fname_label', 'first_name');?>
            <?php echo form_input($first_name);?>
          </div>
        </div>
      </p> 

      <p>
        <div class="row">
          <div class="large-6 columns">
            <?php echo lang('create_user_lname_label', 'last_name');?>
            <?php echo form_input($last_name);?>
          </div>
        </div>
      </p> 

      <p>
        <div class="row">
          <div class="large-6 columns">
            <?php echo lang('create_user_email_label', 'email');?>
            <?php echo form_input($email);?>
          </div>
        </div>
      </p>

      <p>
        <div class="row">
          <div class="large-6 columns">
        <?php echo lang('create_user_password_label', 'password');?>
        <?php echo form_input($password);?>
          </div>
        </div>
      </p>
      
      <p>
        <div class="row">
          <div class="large-6 columns">
        <?php echo lang('create_user_password_confirm_label', 'confirm_password');?>
        <?php echo form_input($confirm_password);?>
          </div>
        </div>
      </p>

      <p><?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="button"');?></p>
    </form>

    
  </div>
 
    <!-- End Contact Details -->
 
 
   
  </div>
 
  <!-- End Main Content and Sidebar -->