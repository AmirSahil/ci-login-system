
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
<div class="details">
    <img class="pimage" src="<?php echo base_url()?>uploads/pic<?php echo $row->id; ?>.png" alt="">
    <p class="pid">Product ID:&nbsp;<?php echo $row->id; ?></p>
    <h3 class="pname"><?php echo $row->product_name; ?></h3>
    <h4 class="pprice">₹<?php echo $row->product_price; ?>/-</h4>
    <span class="pcategory"><?php echo $row->product_category; ?></span>
  </div>
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