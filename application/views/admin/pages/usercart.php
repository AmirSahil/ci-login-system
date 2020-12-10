


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-dark">Users Cart</h1>
</div>


<div class="table-wrap">
    <div class="table-responsive">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Product Price</th>
            <th>Product Quantity</th>
            <th>Total Price</th>
            </tr>
        </thead>
        <?php
        if($fetch_data->num_rows() > 0) {
            foreach($fetch_data->result() as $row){
        ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->user_id; ?></td>
                <td><?php echo $row->product_id; ?></td>
                <td><?php echo $row->product_name; ?></td>
                <td><?php echo $row->product_price; ?></td>
                <td><?php echo $row->product_qty; ?></td>
                <td><?php echo $row->total_price; ?></td>
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
