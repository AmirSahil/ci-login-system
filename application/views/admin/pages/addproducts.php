
    <div class="d-sm-flex align-items-center justify-content-between mb-4 pl-4">
    <a class="btn btn-dark btn-md float-right" href="<?php echo base_url();?>admin/products"> 
        <i class="fas fa-fw fa-arrow-left"></i>
        <span> &nbsp; Back</span>
    </a>
    </div>
<?php 
 $user_id = $this->uri->segment(4);
echo $user_id;
if(isset($user_data)){
    echo 'set';
} else{
    echo'unset';
}


?>

    <form method="post" class="pl-5" action="<?php echo base_url()?>Admin/form_validation">
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

        <?php  
                if(isset($user_data))  
                {  
                    foreach($user_data->result() as $row)  
                    {
            ?>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pname">Product Name</label>
                <input type="text" class="form-control" value="<?php echo $row['product_name'];?>" name="pname">
                <span class="text-danger"><?php echo form_error("pname");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pprice">Product Price</label>
                <input type="text" class="form-control" value="<?php echo $row->product_price;?>" name="pprice">
                <span class="text-danger"><?php echo form_error("pprice");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pqty">Product Qty</label>
                <input type="text" class="form-control" value="<?php echo $row->product_qty;?>" name="pqty">
                <span class="text-danger"><?php echo form_error("pqty");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pimage">Product Image</label>
                <input type="text" class="form-control" value="<?php echo $row->product_image;?>" name="pimage">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pcategory">Product Category</label>
                <select class="form-control" name="pcategory" value="<?php echo $row->product_category;?>">
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
        <div class="form-group row pr-5 pt-5">
            <div class="col-xs-6">
                <input type="hidden" name="hidden_id" value="<?php echo $row->id;?>"/> 
                <input type="submit" class="btn btn-dark btn-md" name="upload" value="Update"/>
            </div>
        </div>


    <?php
        }
    } 
    else{
        ?>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pname">Product Name</label>
                <input type="text" class="form-control" placeholder="Product Name" value="" name="pname">
                <span class="text-danger"><?php echo form_error("pname");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pprice">Product Price</label>
                <input type="text" class="form-control" placeholder="Product Price" name="pprice">
                <span class="text-danger"><?php echo form_error("pprice");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pqty">Product Qty</label>
                <input type="text" class="form-control" placeholder="Enter Quantity" name="pqty">
                <span class="text-danger"><?php echo form_error("pqty");?></span>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pimage">Product Image</label>
                <input type="text" class="form-control" placeholder="Enter Image" name="pimage">
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
                <select class="form-control" name="pcategory">
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
                <input type="submit" class="btn btn-dark btn-md" name="upload" value="Upload"/>
            </div>
        </div>
<?php

    }
    ?>
    
    </form>