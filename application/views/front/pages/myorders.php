<div class="col-lg-8 myorders">
<h4 class="mb-4">My Orders</h4>
    <!-- Card -->

<?php

if($fetch_order->num_rows() > 0) {
    foreach($fetch_order->result() as $row){
      if($row->user_id == $this->session->userdata('id')){
          $product_id = $row->product_id;
          $first_name = $row->first_name;
          $last_name = $row->last_name;
          $address = $row->address;
          $email = $row->email;
          $phone = $row->phone;
          $reference_id = $row->id;
          $sub_total = $row->sub_total;
          $product_qty = $row->product_qty;
          if($fetch_details->num_rows() > 0){
            foreach($fetch_details->result() as $row){
                if($row->id == $product_id){
                    ?>

<div class="mb-3 card">
      <div class="pt-4 card-body">
        <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                    <img class="img-fluid w-120" src="<?php echo base_url('uploads')?>/<?php echo $row->product_image;?>" alt="Sample">
                </div>
            </div>
          <div class="col-md-7 col-lg-9 col-xl-9">
            <div>


              <div class="d-flex justify-content-between">
                  <div>
                      <h4><?php echo $row->product_name;?></h4>
                  </div>
                  <div>
                      <h5 class=""><span><?php echo $product_qty;?>&nbsp;X&nbsp;₹<?php echo $row->product_price;?>/-</span></h5>
                  </div>
              </div>



              <div class="d-flex justify-content-between align-items-center">
                <div>
                  Order Status: <span class="text-success">Placed</span>
                </div>
                
                <h4 class="mt-5"><span><strong id="">₹<?php echo $sub_total;?>/-</strong></span></h4>
              </div>
              <div class="d-flex justify-content-between align-items-left">
                <div>
                  <span class="text-dark"><strong>Order details:</strong></span>
                  <p>Name: <?php echo $first_name; echo $last_name;?></br>
                  Address: <?php echo $address;?></br>
                  Email: <?php echo $email;?></br>
                  Phone: <?php echo $phone;?></br>
                  Reference ID: <?php echo $reference_id;?></p>
                  
                </div>
                <div>
                <p><strong>Payment Status:</strong><span class="text-success">&nbsp;&nbsp;Paid</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        
                </div>
              </div>






<?php

                }

            }
          }
        }
    }
}

?>
        
        

        
              <!-- Card -->
              <button type="button" class="btn btn-dark btn-block rounded-0 cart-button"><i class="fas fa-chevron-left"></i>  &nbsp;&nbsp;<a href="<?php echo base_url();?>private_area/" class="cart-button"> Continue Shopping</a></button>
            </div>