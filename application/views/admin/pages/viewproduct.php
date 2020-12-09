
    <div class="d-sm-flex align-items-center justify-content-between mb-4 pl-4">
    <a class="btn btn-dark btn-md float-right" href="<?php echo base_url();?>admin/products"> 
        <i class="fas fa-fw fa-arrow-left"></i>
        <span> &nbsp; Back</span>
    </a>
    </div>
    <?php extract($edit);?>
    <div class="d-sm-flex align-items-center justify-content-between mb-2 pl-4">
        <h1 class="pid">Product ID : <?php echo $id;?></h1>
    </div>
    
    <div class="products">
        <div class="tiles">  
            <div class="image">
                <img class="pimage" src="<?php echo base_url('uploads')?>/<?php echo $pimage; ?>" alt="">
            </div>
            <div class="details">
                <h3 class="pname"><?php echo $product_name; ?></h3>
                <h4 class="pprice">₹<?php echo $product_price; ?>/-</h4>
                <h4 class="pqty">Quantity Available: &nbsp;<?php echo $product_qty;?></h4>
                <span class="pcategory"><?php echo $product_category; ?></span>
            </div>
        </div>
    </div>