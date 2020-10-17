<?php
    require "header.php";
?>
 <main>
  <section class="signup">
  <h1>Signup</h1>
    <form method="post" action="<?php echo base_url(); ?>register/validation">
    <input type="text" name="user_name"  placeholder = "Username" value="<?php echo set_value('user_name'); ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>

      <input type="text" name="user_email"  placeholder="Email" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>

      <input type="password" name="user_password"  placeholder="Password" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>

      <input type="submit" name="register" value="Register" class="button" />
      
    </form>
  </section>
</main>
 
 <?php
 require "footer.php";
 ?>