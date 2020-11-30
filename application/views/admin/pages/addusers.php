<div class="d-sm-flex align-items-center justify-content-between mb-4 pl-4">
    <a class="btn btn-dark btn-md float-right" href="<?php echo base_url();?>admin/users"> 
        <i class="fas fa-fw fa-arrow-left"></i>
        <span> &nbsp; Back</span>
    </a>
    </div>

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Users</h1>
</div>
<div class="table-wrap">
    <form method="post" class="pl-3" action="<?php echo base_url()?>Admin/usr_form_validation">
        <div class="form-group row pr-5">
            <?php
            if($this->uri->segment(3) == "users_inserted"){
                echo '<p class="text-success">Data Inserted</p>';
            }
            ?>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="user_name">User Name</label>
                <input type="text" class="form-control"  name="user_name">
                <span class="text-danger"><?php echo form_error("user_name");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="email_id">Email</label>
                <input type="email" class="form-control" name="email_id">
                <span class="text-danger"><?php echo form_error("email_id");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
                <span class="text-danger"><?php echo form_error("password");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="login_status">Login Status</label>
                <select class="form-control" name="login_status">
                    <option>Active</option>
                    <option>Not Active</option>

                </select>
            </div>
        </div>
        <div class="form-group row pr-5 pt-2">
            <div class="col-xs-6">

                <input type="submit" class="btn btn-dark btn-md" name="upload" value="Update"/>
            </div>
        </div>
<!-- /.container-fluid -->