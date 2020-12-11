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
                <h4 class="pqty_view">Quantity Available: &nbsp;<?php echo $product_qty;?></h4>
                <p class="pcategory_view"><?php echo $product_category; ?></p>
                <div>
                <form method="post" class="pl-5" action="<?php echo base_url()?>private_area/add_cart/<?php echo $id;?>">
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                      <button onclick="this.parentNode.querySelector('.quantity').stepDown()"
                        class="minus decrease"><i class="fa fa-minus" aria-hidden="true"></i></button>
                      <input class="quantity" min="1" name="quantity" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('.quantity').stepUp()"
                        class="plus increase"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </div>
                  <input type="submit" class="btn btn-dark btn-md rounded-0 mt-4 atc addtocart" name="upload" value="Add to Cart"/>
                </form>
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