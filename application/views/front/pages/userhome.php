
<div class="logout">
    <h1>Welcome Back!</h1>  
    <h2>Hot Deals</h2>          
</div>
<div class="products">
<?php
        if($fetch_data->num_rows() > 0) {
            foreach($fetch_data->result() as $row){
        ?>

<div class="tiles">  
<a href="<?php echo base_url();?>private_area/product_view/<?php echo $row->id;?>" class="details">
    <img class="pimage" src="<?php echo base_url('uploads')?>/<?php echo $row->product_image;?>" alt="">
    <p class="pid">Product ID:&nbsp;<span class="id"><?php echo $row->id; ?></span></p>
    <h3 class="pname"><?php echo $row->product_name; ?></h3>
    <h4 class="pprice">₹<?php echo $row->product_price; ?>/-</h4>
    <span class="pcategory"><?php echo $row->product_category; ?></span>
  </a>
</div>


<?php
            }
            ?>
            </div>
            <?php
        } 
        else{
        ?>

<h3>No Products Found</h3>

        <?php
        }
        ?>