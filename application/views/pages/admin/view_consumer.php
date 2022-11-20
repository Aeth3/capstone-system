<section style="width:100%">
  <div class="container" >

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
                <?php
                  foreach ($Consumer_Info as $key => $value) {
                  
                   if ($value['con_avatar'] == 'Boy') {
                    echo '<img src="'.base_url().'img/boy.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">;
                    ';
                   }elseif($value['con_avatar'] == 'Girl'){
                    echo '<img src="'.base_url().'img/girl.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">;
                    ';
                   }elseif($value['con_avatar'] == 'Man'){
                    echo '<img src="'.base_url().'img/man.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">;
                    ';
                   }

                  }
                  ?>

            <h5 class="my-3">
                <?php
                  foreach ($Consumer_Info as $key => $value) {
                  
                    echo $value['con_fname'].' '.$value['con_lname'];

                  }
                  ?>              
            </h5>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-header text-center">
            <h4>Credentials</h4>
          </div>
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">

              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-user fa-lg" style="color: #333333;"></i>
                <p class="mb-0">
                 <?php
                  foreach ($Consumer_Info as $key => $value) {
                  
                    echo $value['cre_username'];

                  }
                  ?>
                </p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-lock fa-lg" style="color: #333333;"></i>
                <p class="mb-0">
                  <i class="fas fa-asterisk"></i><i class="fas fa-asterisk"></i><i class="fas fa-asterisk"></i><i class="fas fa-asterisk"></i><i class="fas fa-asterisk"></i><i class="fas fa-asterisk"></i><i class="fas fa-asterisk"></i><i class="fas fa-asterisk"></i>
                  <i class="fas fa-asterisk"></i>
              </p>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
          <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Account ID</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">
                  <?php
                  foreach ($Consumer_Info as $key => $value) {
                  
                    echo $value['account_id'];

                  }
                  ?>
                </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">
                  <?php
                  foreach ($Consumer_Info as $key => $value) {
                  
                    echo $value['con_fname'].' '.$value['con_lname'];

                  }
                  ?>
                </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Purok</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">
                 <?php
                  foreach ($Consumer_Info as $key => $value) {
                  
                    echo $value['prk_name'];

                  }
                  ?>
                </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">
                 <?php
                  foreach ($Consumer_Info as $key => $value) {
                  
                    echo $value['con_email'];

                  }
                  ?>
                </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">
                 <?php
                  foreach ($Consumer_Info as $key => $value) {
                  
                    echo $value['con_cpnumber'];

                  }
                  ?>
                </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Meter Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">
                  <?php
                  foreach ($Consumer_Info as $key => $value) {
                  
                    echo $value['meternum_owner'];

                  }
                  ?>
                </p>
              </div>
            </div>
            
          </div>
        </div>
       
      </div>
    </div>
  </div>
</section>