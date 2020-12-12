<?php extract($edit);?>

<div class="main">
    <div class="products_view">
        <div class="tiles_view">  
            <div class="image_view">
                <img class="pimage_view" src="<?php echo base_url('uploads')?>/<?php echo $product_image;?>" alt="">
                <p class="pid_view">Product ID:&nbsp;<span class="id"><?php echo $id; ?></span></p>
            </div>
            <div class="details_view">
                <h3 class="pname_view"><?php echo $product_name; ?></h3>
                <h4 class="pprice_view">₹<?php echo $product_price; ?>/-</h4>
                <p class="pcategory_view"><?php echo $product_category; ?></p>
                <h4>Login to purchase</h4>
                <div>
                </div>
                <?php


                if($this->uri->segment('2') == 'added'){
                    echo '<p class="text-success">Data Inserted</p>';
                }


                ?>
            </div>
        </div>
    </div>
</div>