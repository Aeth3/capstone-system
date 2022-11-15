
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-900">Dues </h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>Home">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dues</li>
            </ol>
          </div>

          <div class="row mb-3">


<!--################################## Monthly Payment table #########################################-->

<div class="col-xl-12 col-lg-7">
  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-gray-900"> <i class="fas fa-list fa-sm fa-fw mr-2"></i>List of Dues</h6>
      <!-- <div class="dropdown no-arrow">
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
      </div> -->
    </div>
    <div class="card-body">
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTable_dues">
              <thead class="thead-light">
                <tr>
                  <th class= "text-center">#</th>
                  <th>Present Reading</th>
                  <th>Previous Reading</th>
                  <th>Arrears</th>
                  <th>Cubic Meter Used</th>
                  <th>Month Covered</th>
                  <th>Date Issued</th>
                  <th>Total Amoount</th>
                </tr>
              </thead>
              <tfoot class="thead-light">
                <tr>
                  <th class= "text-center">#</th>
                  <th>Present Reading</th>
                  <th>Previous Reading</th>
                  <th>Arrears</th>
                  <th>Cubic Meter Used</th>
                  <th>Month Covered</th>
                  <th>Date Issued</th>
                  <th>Total Amoount</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td class= "text-center">1</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                </tr>
                <tr>
                  <td class= "text-center">1</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                </tr>
                <tr>
                  <td class= "text-center">1</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                  <td>Dummy</td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
  </div>
</div>

<!--################################## Monthly Payment table End #########################################-->


            
           
         
          

  <script>
$(document).ready(function () {

  
     $('#dataTable_dues').DataTable({
        "pageLength": 5,
        lengthMenu: [
            [5, 10, 20, -1],
            [5, 10, 20, 'All'],
        ],
    }); // ID From dataTable 

});


   
  </script>
