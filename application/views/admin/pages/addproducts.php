
    <div class="d-sm-flex align-items-center justify-content-between mb-4 pl-4">
    <a class="btn btn-dark btn-md float-right" href="<?php echo base_url();?>admin/products"> 
        <i class="fas fa-fw fa-arrow-left"></i>
        <span> &nbsp; Back</span>
    </a>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-2 pl-4">
        <h1 class="h3 mb-0 text-gray-800">Add Products</h1>
    </div>
    <?php echo $error;?>
    <form method="post" class="pl-5" action="<?php echo base_url()?>Admin/form_validation" enctype="multipart/form-data">
        <div class="form-group row pr-5">
        <div class="col-xs-6">
            </div>
        </div>
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
                <input type="file" class="form-control" placeholder="Enter Image" name="pimage">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="pcategory">Product Category</label>
                <select class="form-control" name="pcategory">
                    <option>T-Shirt</option>
                    <option>Pant</option>
                    <option>Shorts</option>
                    <option>Shoes</option>
                    <option>Caps</option>
                    <option>Others</option>
                </select>
            </div>
        </div>
        <div class="form-group row pr-5 pt-2">
            <div class="col-xs-6">
                <input type="submit" class="btn btn-dark btn-md" name="upload" value="Upload"/>
            </div>
        </div>