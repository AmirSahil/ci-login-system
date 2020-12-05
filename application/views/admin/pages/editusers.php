
    <div class="d-sm-flex align-items-center justify-content-between mb-4 pl-4">
    <a class="btn btn-dark btn-md float-right" href="<?php echo base_url();?>admin/products"> 
        <i class="fas fa-fw fa-arrow-left"></i>
        <span> &nbsp; Back</span>
    </a>
    </div>
    
    <div class="d-sm-flex align-items-center justify-content-between mb-2 pl-4">
        <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
    </div>
    <?php extract($edit);?>
    <form method="post" class="pl-5" action="<?php echo base_url()?>Admin/userupdate/<?php echo $id;?>">
        <div class="form-group row pr-5">
            <?php
                if($this->uri->segment(3) == "inserted"){
                    echo '<p class="text-success">Data Inserted</p>';
                }
                if($this->uri->segment(2) == "updated")  
                {  
                echo '<p class="text-success">Data Updated</p>';  
                }  
            ?>  
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" placeholder="First Name" value="<?php echo $first_name;?>" name="first_name">
                <span class="text-danger"><?php echo form_error("first_name");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $last_name;?>" name="last_name">
                <span class="text-danger"><?php echo form_error("last_name");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="email_id">Email</label>
                <input type="text" class="form-control" placeholder="Email" value="<?php echo $email_id;?>" name="email_id">
                <span class="text-danger"><?php echo form_error("email_id");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pqty">Password</label>
                <input type="text" class="form-control" placeholder="Password" value="<?php echo $password;?>" name="password">
                <span class="text-danger"><?php echo form_error("password");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="role">Role</label>
                <select class="form-control" <?php echo $role;?> name="role">
                    <option>System Admin</option>
                    <option>Product Manager</option>
                </select>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="login_status">Login Status</label>
                <select class="form-control" <?php echo $login_status;?> name="login_status">
                    <option>Active</option>
                    <option>Not Active</option>
                </select>
            </div>
        </div>
        <div class="form-group row pr-5 pt-2">
            <div class="col-xs-6">
                <input type="submit" class="btn btn-dark btn-md" name="upload" value="Edit"/>
            </div>
        </div>