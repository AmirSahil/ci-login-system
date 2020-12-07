
    <div class="d-sm-flex align-items-center justify-content-between mb-4 pl-4">
    <a class="btn btn-dark btn-md float-right" href="<?php echo base_url();?>admin/products"> 
        <i class="fas fa-fw fa-arrow-left"></i>
        <span> &nbsp; Back</span>
    </a>
    </div>
    <?php extract($edit);?>
    <div class="d-sm-flex align-items-center justify-content-between mb-2 pl-4">
        <h1 class="h3 mb-0 text-gray-800">Product ID : <?php echo $id;?></h1>
    </div>
    
    <form method="post" class="pl-5" action="<?php echo base_url()?>Admin/update/<?php echo $id;?>">
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
                <label for="pname">Product Name</label>
                <input type="text" class="form-control" placeholder="Product Name" value="<?php echo $product_name;?>" name="pname">
                <span class="text-danger"><?php echo form_error("pname");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pprice">Product Price</label>
                <input type="text" class="form-control" placeholder="Product Price" value="<?php echo $product_price;?>" name="pprice">
                <span class="text-danger"><?php echo form_error("pprice");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pqty">Product Qty</label>
                <input type="text" class="form-control" placeholder="Enter Quantity" value="<?php echo $product_qty;?>" name="pqty">
                <span class="text-danger"><?php echo form_error("pqty");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pimage">Product Image</label>
                <input type="text" class="form-control" placeholder="Enter Image" value="<?php echo $product_image;?>" name="pimage">
            </div>
        </div>
        <!-- <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pcategory">Product Category</label>
                <input type="text" class="form-control" placeholder="Enter Category" name="pcategory">
            </div>
        </div> -->
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pcategory">Product Category</label>
                <select class="form-control" <?php echo $product_category;?> name="pcategory">
                    <option>Shirt</option>
                    <option>Pant</option>
                    <option>Shorts</option>
                    <option>T-Shirt</option>
                    <option>Shoes</option>
                    <option>Socks</option>
                    <option>Others</option>
                </select>
            </div>
        </div>
        <div class="form-group row pr-5 pt-2">
            <div class="col-xs-6">
                <input type="submit" class="btn btn-dark btn-md" name="upload" value="Edit"/>
            </div>
        </div>