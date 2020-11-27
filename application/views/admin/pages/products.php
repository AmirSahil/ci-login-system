
    <form method="post" class="pl-5" action="<?php echo base_url()?>admin/Products/form_validation">
    <?php
    if($this->uri->segment(2) == "inserted"){
        echo '<p class="text-success">Data Inserted</p>';
    }
    ?>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pname">Product Name</label>
                <input type="text" class="form-control" placeholder="Product Name" name="pname">
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
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pcategory">Product Category</label>
                <input type="text" class="form-control" placeholder="Enter Category" name="pcategory">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <input type="submit" name="upload" value="Upload"/>
            </div>
        </div>
    </form>
