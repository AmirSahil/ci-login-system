<!--Section: Block Content-->
<section>
<form method="post" class="pl-5" action="<?php echo base_url()?>private_area/add_checkout/">
  <!--Grid row-->
  <div class="row main-container mt-5">

    <!--Grid column-->
    <div class="col-lg-8 mb-4">

      <!-- Card -->
      <div class="card wish-list pb-1">
        <div class="card-body">
        
          <h5 class="mb-2">Billing details</h5>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-lg-6 mt-3">

              <!-- First name -->
              <div class="md-form md-outline mb-0 mb-lg-4">
              <label for="firstName">First name</label>
                <input type="text" name="firstname" id="firstName" class="form-control mb-0 mb-lg-2">
              </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-6 mt-3">

              <!-- Last name -->
              <div class="md-form md-outline">
              <label for="lastName">Last name</label>
                <input type="text" name="lastname" id="lastName" class="form-control">
              </div>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Address Part 1 -->
          <div class="md-form md-outline mb-4">
          <label for="form14">Address</label>
            <input type="text" name="address" id="form14" placeholder="House number and street name" class="form-control">
          </div>

          <!-- Phone -->
          <div class="md-form md-outline mb-4">
          <label for="form18">Phone</label>
            <input type="number" name="phone" id="form18" class="form-control">
          </div>

          <!-- Email address -->
          <div class="md-form md-outline mb-4">
          <label for="form19">Email address</label>
            <input type="email" name="email" id="form19" class="form-control">
          </div>

        </div>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->
<?php

if($fetch_data->num_rows() > 0) {
  

  ?>
    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="card mb-4">
        <div class="card-body">

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
          <input type="submit" class="btn btn-dark btn-block waves-effect waves-light rounded-0" name="upload" value="Make Purchase"/>

        </div>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

  </div>

<?php
}
?>
  <!--Grid row-->
  </form>
</section>
<!--Section: Block Content-->