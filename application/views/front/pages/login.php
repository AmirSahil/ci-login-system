
<div class="login">
            <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
            ?>
            <h1>Login</h1>
            <form method="post" action="<?php echo base_url(); ?>login/validation">
                    <input type="text" name="user_email" placeholder="Email"  value="<?php echo set_value('user_email'); ?>" />
                    
                    <input type="password" name="user_password" placeholder="Password"  value="<?php echo set_value('user_password'); ?>" />
                    
                    <input type="submit" name="login" value="Login" placeholder="Email" class="button" />
                    <a href="<?php echo base_url(); ?>register" class="register-button">No Account? Register</a>
            </form>
        </div>
    <section>
    <span class="text-danger"><?php echo form_error('user_email'); ?></span>
    <span class="text-danger"><?php echo form_error('user_password'); ?></span>
    </section>

