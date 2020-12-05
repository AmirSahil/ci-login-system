


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Products List</h1>
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a class="btn btn-dark btn-md float-right" href="<?php echo base_url();?>admin/addproducts">
        <i class="fas fa-fw fa-shopping-basket"></i>
        <span>Add Products</span>
    </a>
</div>


<div class="table-wrap">
    <div class="table-responsive">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Qty</th>
            <th>Product Image</th>
            <th>Product Category</th>
            <th colspan="2" style="text-align:center">Actions<th>
            </tr>
        </thead>
        <?php
        if($fetch_data->num_rows() > 0) {
            foreach($fetch_data->result() as $row){
        ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->product_name; ?></td>
                <td><?php echo $row->product_price; ?></td>
                <td><?php echo $row->product_qty; ?></td>
                <td><?php echo $row->product_image; ?></td>
                <td><?php echo $row->product_category; ?></td>
                <td style="text-align:center"><a href="#" class="delete_data" id="<?php echo $row->id; ?>">Delete</a></td>
                <td style="text-align:center"><a href="<?php echo base_url();?>Admin/update_data/<?php echo $row->id;?>">Edit</a>
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