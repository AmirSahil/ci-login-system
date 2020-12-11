<!--Section: Block Content-->

<section>
  <!--Grid row-->
  <div class="row main-container mt-5">

    <!--Grid column-->
    <div class="col-lg-8 left-cart">
    
      <!-- Card -->
      <div class="mb-3 card">
        <div class="pt-4 card-body">

                <h5 class="mb-4">Cart&nbsp;<small class="text-gray"></small></h5>



          
          <?php

          if($fetch_data->num_rows() > 0) {
            foreach($fetch_data->result() as $row){
              $count = 0;
              if($row->user_id == $this->session->userdata('id')){
          ?>
          <hr class="mb-4">
          <div class="row mb-4">
              <div class="col-md-5 col-lg-3 col-xl-3">
                  <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                      <img class="img-fluid w-100" src="<?php echo base_url('uploads')?>/<?php echo $row->product_img;?>" alt="Sample">
                  </div>
              </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                    <div>
                        <h4><?php echo $row->product_name;?></h4>
                    </div>
                    <div>
                        <h5 class="mt-5"><span><?php echo $row->product_qty;?>&nbsp;X&nbsp;₹<?php echo $row->product_price;?>/-</span></h5>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="#" type="button" class="delete_data card-link-secondary small text-uppercase mr-3 text-danger text-decoration-none" id="<?php echo $row->id;?>"><i
                        class="fas fa-trash-alt mr-1 text-danger"></i> Remove item </a>
                  </div>
                  
                  <h4 class="mt-5"><span><strong id="">₹<?php echo $row->total_price;?>/-</strong></span></h4>
                </div>
              </div>
            </div>
          </div>
          <?php 
              }
            }
            foreach($fetch_data->result() as $row){
              echo $row->name;
            }
          ?>
          
                  </div>
                </div>
          
                <!-- Card -->
                <button type="button" class="btn btn-dark btn-block rounded-0 cart-button"><i class="fas fa-chevron-left"></i>  &nbsp;&nbsp;<a href="<?php echo base_url();?>private_area/" class="cart-button"> Continue Shopping</a></button>
              </div>
              
              <!--Grid column-->
          
              <!--Grid column-->
              <div class="col-lg-4">
          
                <!-- Card -->
                <div class="card mb-4">
                  <div class="card-body pt-4">
          
                    <h5 class="mb-3">The total amount of</h5>
          
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                        Temporary amount
                        <?php
          
                        if($fetch_data->num_rows() > 0) {
                            $total = 0;
                            foreach($fetch_data->result() as $row){
                                if($row->user_id == $this->session->userdata('id')){
                                    $total = $total + $row->total_price;
                                }
                            }
                        }
              ?>
                        <span>₹<?php echo $total;?>/-</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        Shipping
                        <span>₹600/-</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                        <div>
                          <strong>The total amount of</strong>
                          <strong>
                            <p class="mb-0">(including VAT)</p>
                          </strong>
                        </div>
                        <span><strong>₹<?php echo $total + 600;?>/-</strong></span>
                      </li>
                    </ul>
          
                    <button type="button" class="btn btn-dark btn-block rounded-0"><a href="<?php echo base_url();?>private_area/checkout" class="cart-button"> Checkout</a></button>
          
                  </div>
                </div>
                <!-- Card -->
          
                 
              </div>
              <!--Grid column-->
          
            </div>
            <!-- Grid row -->
          </section>

          <?php
          } else{
          ?>
          <hr class="mb-4">
            <h5 >No items in your cart, <?php echo $fetch_user;?></h5>

<?php
}
?>
  