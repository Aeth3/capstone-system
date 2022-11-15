

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-900"><?= $Page_name ?></h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>Home">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $Page_name ?></li>
            </ol>
          </div>

          <div class="row mb-3">


<!--################################## Monthly Payment Chart #########################################-->

<div class="col-xl-12 col-lg-7">
  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-gray-900">Monthly Payment</h6>
      <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-900"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
          aria-labelledby="dropdownMenuLink">
          <div class="dropdown-header">Dropdown Header:</div>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="chart-area">
        <canvas id="monthly_payment"></canvas>
      </div>
    </div>
  </div>
</div>

<!--################################## Monthly Payment Chart End #########################################-->



<!--################################## Cubic Consumed Chart #########################################-->
            <div class="col-xl-12 col-lg-7">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-gray-900">Monthly Cubic Consumed</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-900"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                      aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="cubic_consumed"></canvas>
                  </div>
                </div>
              </div>
            </div>
<!--################################## Cubic Consumed Chart End #########################################-->
            
           
         
          
  
  <script>
    // // dont erase
    // Swal.fire({
    //   title: 'Your cubic average for this month is good',
    //   text: 'Alert close in 5 secs',
    //   icon: 'info',
    //   showConfirmButton: false,
    //   allowOutsideClick: false,
    //   timer: 10000 
    // }).then((result) => {
    //     if (result.dismiss === Swal.DismissReason.timer) {
    //       Swal.fire({
    //         title: 'Your payment for this month is ₱10000',
    //         icon: 'info',
    //         showConfirmButton: true,
    //         // allowOutsideClick: false,
    //         // timer: 5000 
    //       })
    //     }
    // });


    // // this for bad ave

    // Swal.fire({
    //   title: 'Your cubic average for this month is bad',
    //   text: 'I will close in 5 secs',
    //   icon: 'warning',
    //   showConfirmButton: false,
    //   allowOutsideClick: false,
    //   timer: 10000 
    // }).then((result) => {
    //     if (result.dismiss === Swal.DismissReason.timer) {
    //       Swal.fire({
    //         // title: 'Your payment for this month is ₱10000',
    //         html: '<h2>Your payment for this month <strong style = "color:red">₱10000</strong></h2>',
    //         icon: 'warning',
    //         showConfirmButton: true
    //       })
    //     }
    // });
  </script>

</body>

</html>