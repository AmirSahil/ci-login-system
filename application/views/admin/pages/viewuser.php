
    <div class="d-sm-flex align-items-center justify-content-between mb-4 pl-4">
    <a class="btn btn-dark btn-md float-right" href="<?php echo base_url();?>admin/users">
        <i class="fas fa-fw fa-arrow-left"></i>
        <span> &nbsp; Back</span>
    </a>
    </div>
    <?php extract($edit);?>
    <div class="d-sm-flex align-items-center justify-content-between mb-2 pl-4">
        <h1 class="uid">User ID : <?php echo $id;?></h1>
    </div>
    
    <div class="products">
        <div class="tiles">
            <div class="details">
                <h3 class="first_name"><?php echo $first_name; ?></h3>
                <h4 class="last_name"><?php echo $last_name; ?></h4>
                <h4 class="email_id"><?php echo $email_id;?></h4>
                <p class="role"><?php echo $role; ?></p>
            </div>
        </div>
    </div>