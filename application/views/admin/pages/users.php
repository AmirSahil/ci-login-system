
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Users List</h1>
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a class="btn btn-dark btn-md float-right" href="<?php echo base_url();?>admin/addusers">
        <i class="fas fa-fw fa-shopping-basket"></i>
        <span>Add Users</span>
    </a>
</div>

<div class="table-wrap">
    <div class="table-responsive">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Login Status</th>
            <th colspan="2" style="text-align:center">Actions<th>
            </tr>
        </thead>
        <?php
        if($fetch_data->num_rows() > 0) {
            foreach($fetch_data->result() as $row){
        ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->user_name; ?></td>
                <td><?php echo $row->email_id; ?></td>
                <td><?php echo $row->password; ?></td>
                <td><?php echo $row->login_status; ?></td>
                <td style="text-align:center"><a href="#" class="user_delete_data" id="<?php echo $row->id; ?>">Delete</a></td>
                <td style="text-align:center"><a href="<?php echo base_url();?>admin/addproducts/users_update_data/<?php echo $row->id;?>">Edit</a></td>
            </tr>
        <?php
            }
        } 
        else{
        ?>
            <tr>
                <td colspan="6">No Data Found</td>
            </tr>
        <?php
        }
        ?>
        </table>
    </div>
    </div>
<!-- /.container-fluid -->