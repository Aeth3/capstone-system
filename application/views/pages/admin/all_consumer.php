<!--################################## All Purok table #########################################-->
<style>
        .hr-text {
        line-height: 1em;
        position: relative;
        outline: 0;
        border: 0;
        color: black;
        text-align: center;
        height: 1.5em;
        opacity: 0.5;
        }
        .hr-text:before {
        content: "";
        background: linear-gradient(to right, transparent, black, transparent);
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        height: 1px;
        }
        .hr-text:after {
        content: attr(data-content);
        position: relative;
        display: inline-block;
        color: black;
        padding: 0 0.5em;
        line-height: 1.5em;
        color: black;
        background-color: #fcfcfa;
        }
</style>
<?php 
// $account_id = '#'.bin2hex(openssl_random_pseudo_bytes(5)).time().uniqid();
$account_id = '#'.time();

?>
<div class="col-xl-12 col-lg-7">
  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-gray-900"> <i class="fas fa-list fa-sm fa-fw mr-2"></i>List of Consumer</h6>
 
    </div>
    <div class="card-body">

        <div class = "pl-3">
                         <button type="button" class="btn btn-outline-success btn-icon-split" data-toggle="modal" data-target="#addNewConsumer">
                            <span class="icon text-light bg-success">
                                <i class="fas fa-plus-circle"></i>
                            </span>
                            <span class="text">Add New Consumer</span>
                        </button>   
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4 mt-3 d-none">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Filter Consumer</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">

                    


                    <hr class="hr-text" data-content="FOR ADD CONSUMER">


                        <button type="button" class="btn btn-outline-success btn-icon-split" data-toggle="modal" data-target="#addNewConsumer">
                            <span class="icon text-light bg-success">
                                <i class="fas fa-plus-circle"></i>
                            </span>
                            <span class="text">Add New Consumer</span>
                        </button>

                    </div>
                </div>
            </div>

        </div>

        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover w-100" id="dataTable_allConsumer">
              <thead class="thead-light">
                <tr>
                  <th class= "text-center">Select</th>
                  <th class= "text-center">#</th>
                  <th>Account ID</th>
                  <th>Full Name</th>
                  <th>Purok Name</th>
                  <th>Action</th>                  
                </tr>
              </thead>
              <tfoot class="thead-light">
                <tr>
                  <th class= "text-center">Select</th>
                  <th class= "text-center">#</th>
                  <th>Account ID</th>
                  <th>Full Name</th>
                  <th>Purok Name</th>
                  <th>Action</th>                  
                </tr>
              </tfoot>
           
            </table>
          </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addNewConsumer" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addNewConsumerLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewConsumerLabel">Form - New Consumer</h5>
        <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <form id="submit_add_consumer" class="g-3 needs-validation-consumer" novalidate>
              
            <div class="row">

                <div class="col-lg-6">

                    <!-- Basic Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">User Information</h6>
                        </div>
                        <div class="card-body">
                        <span class="form_add_consumer">
                        <section>
                                    <div class="container py-2">
                                        <div class="row">

                                        <div class="col-lg-12">
                                            <div class="card mb-4">
                                            <div class="card-body text-center">
                                                <div class="avatar_consumer">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/1200px-Default_pfp.svg.png" alt="avatar"
                                                class="rounded-circle img-fluid" style="width: 150px;">
                                                </div>
                                                <h5 class="my-3">
                                                    <span class="full_name">Full Name</span>
                                                    <span class="f_name">
                                                    </span>
                                                    <span class="l_name">
                                                    </span>
                                                </h5>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0">Account ID</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="text-muted mb-0 Account_NumberForm"></p>
                                                </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0">Full Name</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="text-muted mb-0">
                                                    <span class="f_name">
                                                    </span>
                                                    <span class="l_name">
                                                    </span>
                                                    </p>
                                                </div>
                                                </div>
                                                <hr>

                                                <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0">Purok</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="text-muted mb-0 purok_consumer"></p>
                                                </div>
                                                </div>
                                                <hr>

                                                <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0">Email</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="text-muted mb-0 email_consumer"></p>
                                                </div>
                                                </div>
                                                <hr>
                                              
                                                <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0">Mobile Number</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="text-muted mb-0 mobile_consumer"></p>
                                                </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0">Meter Number</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="meter_consumer">
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0">Username</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="text-muted mb-0 username_consumer"></p>
                                                </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0">Password</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="text-muted mb-0 password_consumer"></p>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>
                                    </section>
                                    </span>

                        </div>
                    </div>

                </div>


                <div class="col-lg-6">

                    <!-- Basic Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-info">Fill Up Information</h6>
                        </div>
                        <div class="card-body"><!-- card start -->

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                            <label for="Account_Number">Account ID</label>
                            <input type="text" class="form-control Account_Number" id="Account_Number" name = "Account_Number" placeholder = "Click To Generate Account ID" readonly required>
                            <span class="badge badge-pill badge-danger require_account_id d-none">
                                Required to click!
                            </span>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="First_name">First name</label>
                            <input type="text" class="form-control" id="First_name"  name = "First_name" required>
                            <div class="invalid-tooltip">
                                Required!
                            </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="Last_name">Last name</label>
                            <input type="text" class="form-control" id="Last_name" name = "Last_name" required>
                            <div class="invalid-tooltip">
                                Required!
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="selectPurok">Select Purok</label>
                                <select style = "width:100%" class="select2-single-placeholder custom-select" name="purok_consumer"  id="selectPurok" required>
                                <option value="">Select</option>
                                <?php 
                                foreach ($All_purok as $key => $row) {

                                    echo '<option value="'.$row['prk_id'].'">'.$row['prk_name'].'</option>';

                                }
                                ?>
                                </select>
                                <div class="invalid-tooltip">
                                    Required!
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="selectAvatar">Select Avatar</label>
                                <select style = "width:100%" class="select2-single-placeholder custom-select" name="avatar_consumer" id="selectAvatar" required>
                                <option value="">Select</option>
                                <option value="Man">Man</option>
                                <option value="Boy">Boy</option>
                                <option value="Girl">Girl</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Required!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" id="Email" name = "Email">
                            <div class="valid-tooltip">
                                Optional
                            </div>
                            <div class="invalid-tooltip">
                                Invalid email 
                            </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="Contact_Number">Mobile Number</label>
                            <input type="text" class="form-control" id="Contact_Number" name = "Contact_Number" required>
                            <div class="invalid-tooltip">
                                Required!
                            </div>
                            </div>
                        </div>
                        <hr class="hr-text" data-content="CONSUMER METER NUMBER">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="selectMeterNumber">Select Meter Number</label>
                                <select style = "width:100%" class="select2-single-placeholder custom-select select_meter" id="selectMeterNumber" name="meter_number[]" multiple="multiple" required>
                             
                                <?php 
                                // foreach ($All_meter_num as $key => $row) {

                                //     echo '<option value="'.$row['meter_id'].'">'.$row['meter_num'].'</option>';

                                // }
                                ?>
                                </select>
                                <div class="invalid-tooltip">
                                    Required!
                                </div>
                            </div>
                        </div>

                        <hr class="hr-text" data-content="CONSUMER CREDENTIALS">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="Usename">Usename</label>
                            <input type="text" class="form-control" id="User_name" name = "User_name" required>
                            <div class="invalid-tooltip">
                                Required!
                            </div>
                            <div id="user_name_load"></div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="Password">Password</label>
                            <input type="text" class="form-control btn_Something" id="Password" name = "Password" readonly required>
                            <div class="invalid-tooltip">
                                Required!
                            </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <button type="button" id = "btn_Cancel" class="btn btn-outline-secondary btn-block" ><i class="fas fa-undo-alt"></i> Reset</button>
                            </div>
                            <div class="col-md-6 mb-3">
                                <button type="submit" id = "save_Cancel" class="btn btn-success btn-block">Add & Save Now</button>  
                            </div>
                        </div>

                        </div> <!-- card end -->
                    </div>

                </div>

            </div>

           

        <input type="hidden" name = "add_Consumer" value = "add_Consumer">

      </div> 
      <!-- <div class="modal-footer">
        <button type="button" id = "btn_Cancel" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" id = "save_Cancel" class="btn btn-success">Add & Save Now</button>
      </div> -->

      </form>
    </div>
  </div>
</div>

<!-- modal for edit start-->
<div class="modal fade" id="editPurok" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editPurokLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPurokLabel">Form - Update Purok</h5>
        <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <form id="submit_edit_purok" class="g-3 needs-validation-consumer-edit" novalidate>
              
       
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="Purok_Name_Edit">Purok Name</label>
                <input type="text" class="form-control" name ="Purok_Name_Edit" id="Purok_Name_Edit" required>
                <div class="invalid-tooltip">
                    Purok Name!
                </div>
                <div id="input_edit_msg"></div>
              </div>
            </div>
            <input type="hidden" id="Prk_ID">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="Purok_Name_Edit">Purok Sort</label>
                <input type="number" class="form-control" name ="Purok_Name_Edit" min="1" id="Purok_Sort_Edit" required>
                <div class="invalid-tooltip">
                   Purok Sort!
                </div>
              </div>
            </div>



      </div>
      <div class="modal-footer">
        <button type="button" id = "btn_Cancel" class="btn btn-outline-secondary btn_Cancel" data-dismiss="modal">Cancel</button>
        <button type="submit" id = "btn_Edit" class="btn btn-warning">Update & Save Now</button>
      </div>

      </form>

    </div>
  </div>
</div>
<!-- modal for edit end-->
<style>
.btn-hover-view:hover {
    background-color: #36b9cc;
    color: white;
}
.btn-hover-edit:hover {
    background-color: #f6c23e;
    color: white; 
}
.btn-hover-details:hover {
    background-color: #FAA5C2;
    color: white; 
}
.btn-hover-delete:hover {
    background-color: #d52a1a;
    color: white;
}
.dt-button.white {
    color: white;
}

.dt-button.red {
    color: white;
}

.dt-button.green {
    color: white;
}

div.dt-button-collection {
width: 400px;
}

div.dt-button-collection button.dt-button {
    display: inline-block;
    width: 32%;
}
div.dt-button-collection button.buttons-colvis {
    display: inline-block;
    width: 49%;
}
div.dt-button-collection h3 {
    margin-top: 5px;
    margin-bottom: 5px;
    font-weight: 100;
    border-bottom: 1px solid #9f9f9f;
    font-size: 1em;
}
div.dt-button-collection h3.not-top-heading {
    margin-top: 10px;
}
.uniqueClassName {
    text-align: center;
}
</style>
        <!--#### javascript Start ###-->

<script>

$(document).ready(function () {

    // $('#selectMeterNumber').select2({
    //     placeholder: "Select a Meter Number",
    //     allowClear: true
    //   }); 
 
     var selectMeterNumber_100 = $("#selectMeterNumber").select2({
        placeholder: "Search for a Meter Number",
         ajax: { 
           url: '<?= base_url() ?>admin/getMeterNum/',
           type: "post",
           dataType: 'json',
           delay: 250,
           data: function (params) {
              return {
                searchTerm: params.term // search term
              };
           },
           processResults: function (response) {
              return {
                 results: response
              };
           },
           cache: true
         }
     });


    
    //  setInterval(function(){ 
    //     selectMeterNumber_100.ajax.reload();
    //     }, 1000);

    $('#selectPurok').select2({
        placeholder: "Select a Purok",
        allowClear: true
      }); 

      $('#selectAvatar').select2({
        placeholder: "Select a Avatar",
        allowClear: true
      }); 
//table start
var allConsumerData = $('#dataTable_allConsumer').DataTable({
    "pageLength": 5,
     dom: 'Bfrtip',
    lengthMenu: [
        [5, 10, 20, -1],
        [5, 10, 20, 'All'],
    ],
    columnDefs: [ {
        orderable: false,
        className: 'select-checkbox',
        targets:   0
    } ],
    select: {
        style:    'os',
        selector: 'td:first-child'
    },
    order: [[ 1, 'asc' ]],
    "ajax":{
			url:"<?= base_url(); ?>admin/for_consumer/",
			type:"POST",
			data:{all_consumer:'all_consumer'},
			dataType:"json"
		},
        'columns': [
                    { data: 'Select' },
                    { data: '#', className: "uniqueClassName"},
                    { data: 'Account_ID',className: "text-truncate" },                    
                    { data: 'Full_Name' },
                    { data: 'Purok_Name',className: "text-truncate" },
                    { data: 'Action' },
                ],
    "buttons": [
        {
            extend: 'pageLength',
            text: 'Rows',
            className: 'black bg-gray-200',
           
        },
        {
            extend: 'print',
            customize: function ( win ) {
                $(win.document.body)
                    .css( 'font-size', '10pt' )
                    .prepend(
                        '<img src="<?= base_url() ?>img/logo/waterbilling_logo.png" style="position:absolute; top:100; left:280; opacity: 0.2;" />'
                    );
                $(win.document.body).find('h1').css('text-align', 'center');
                $(win.document.body).find( 'table' )
                    .addClass( 'compact' )
                    .css( 'font-size', 'inherit' );
            },
            text: '<i class="fas fa-print"></i> Print',
            className: 'white bg-secondary',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'excelHtml5',
            text: '<i class="fas fa-file-excel"></i> Excel',
            className: 'green bg-success',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'pdfHtml5',
            customize: function ( doc ) {
            doc.watermark = {text: 'From: <?= $System['system_name'] ?>', color: 'blue', opacity: 0.1};
            },
            text: '<i class="fas fa-file-pdf"></i> PDF',
            className: 'red bg-danger',
            exportOptions: {
                  columns: ':visible'
            }
        },
        {
            extend: 'colvis',
            text: 'Select Column Visibility',
            className: 'red bg-info',
           
        }

                  
        ],
        select: true
}); 
//table end


//for on change userprofile
$("#First_name").keyup(function(){
    var f_name = $("#First_name").val();
    $('.f_name').html(f_name); 
    $('.full_name').html(''); 
  });
$("#Last_name").keyup(function(){
    var l_name = $("#Last_name").val();
    $('.l_name').html(l_name); 
    $('.full_name').html(''); 
});

$('#selectAvatar').change(function() {
    var selectAvatar = $("#selectAvatar").val();
   if (selectAvatar == 'Man') {

        $('.avatar_consumer').html('<img src="<?= base_url() ?>img/man.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">'); 

   } else if (selectAvatar == 'Girl'){

        $('.avatar_consumer').html('<img src="<?= base_url() ?>img/girl.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">'); 

   } else if (selectAvatar == 'Boy'){

        $('.avatar_consumer').html('<img src="<?= base_url() ?>img/boy.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">'); 
   }

});
$("#Email").keyup(function(){
    var Email = $("#Email").val();
    $('.email_consumer').html(Email); 
});

$("#Contact_Number").keyup(function(){
    var Contact_Number = $("#Contact_Number").val();
    $('.mobile_consumer').html(Contact_Number); 
});

$("#User_name").keyup(function(){
    var User_name = $("#User_name").val();
    $('.username_consumer').html(User_name); 
    $("#Password").val(User_name);
    $('.password_consumer').html(User_name); 
});

$("#selectMeterNumber").change(function () {
var meter_id = "";
var meter_number = 'meter_number';
$("#selectMeterNumber option:selected").each(function () {
meter_id += $(this).val() + ',';
});
var meter_id=meter_id.slice(0,meter_id.length -1);

if (meter_id == '') {
    $('.meter_consumer').html(''); 
}
        $.ajax({
        url:"<?php echo base_url(); ?>admin/for_meter_number/",
        method:"POST",
        dataType:"JSON",
        data:{meter_number:meter_number, meter_id:meter_id},
        beforeSend: function(){},
        success:function(data)
        {
           
            $('.meter_consumer').html(data.Meter_Number); 
          
        }
                            
        });

});

$('#selectPurok').change(function() {
        var prk_id = $("#selectPurok").val();
        var getPrk = 'getPrk';

        $.ajax({
        url:"<?php echo base_url(); ?>admin/for_purok/",
        method:"POST",
        dataType:"JSON",
        data:{getPrk:getPrk, prk_id:prk_id},
        beforeSend: function(){},
        success:function(data)
        {
           
            $('.purok_consumer').html(data.prk_name); 
      
        }
                            
        });
});

//for on change userprofile end





//need validation start
        (function () {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation-consumer')

        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                }

               var Account_Number_2 = $('#Account_Number').val(); 

               if (Account_Number_2 == "") {
                $('.require_account_id').removeClass('d-none'); 
               }else{
                $('.require_account_id').addClass('d-none'); 
               }

                if (!form.checkValidity() || Account_Number_2 == "") {
                   
                 
                    form.classList.add('was-validated');


                    

                }else{


                    $.ajax({
                    url:"<?php echo base_url(); ?>admin/for_consumer/",
                    method:"POST",
                    dataType:"JSON",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend: function(){
                        
                    
                        $('#btn_Cancel').prop('disabled', true);
                        $('#save_Cancel').prop('disabled', true);
        
                    },

                    success:function(data)
                    {
                        
                       
                        $('#btn_Cancel').prop('disabled', false);
                        $('#save_Cancel').prop('disabled', false);

                        allConsumerData.ajax.reload();
                        selectMeterNumber_100.ajax.reload();
                        if (data.msg == 303) {

                            Swal.fire({
                            icon: 'success',
                            title: 'New Consumer Added Successfully',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            html: '<button type = "button" class = "btn btn-outline-secondary p-2 SwalBtn1-cancel" style ="width:100px;" >Close</button>\
                            <button type = "button" class = "btn btn-capstone p-2 SwalBtn2-addmore" style ="width:100px;" >Add More</button>'
                            });

                        }else{


                            Swal.fire({
                            icon: 'error',
                            title: 'Consumer Already Exist',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            html: '<button type = "button" class = "btn btn-outline-secondary p-2 SwalBtn1-cancel" style ="width:100px;" >Close</button>\
                            <button type = "button" class = "btn btn-capstone p-2 SwalBtn2-addmore" style ="width:100px;" >Try Again</button>'
                            });

                        }

                    
                    }
                            
                    });
                    event.preventDefault();
                    event.stopPropagation();

                }
                

                event.preventDefault();
                event.stopPropagation();


            }, false)
            });


        var forms_2 = document.querySelectorAll('.needs-validation-consumer-edit')

        Array.prototype.slice.call(forms_2)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }
                var Purok_Name = $('#Purok_Name_Edit').val();
                var Purok_Sort = $('#Purok_Sort_Edit').val();
                var Prk_ID = $('#Prk_ID').val();

                if (Purok_Name == "" || Purok_Sort == "") {
                   
                 
                    form.classList.add('was-validated');
                    

                }else{
                
                    edit_purok(Prk_ID,Purok_Name,Purok_Sort);
                  

                }
                

                event.preventDefault();
                event.stopPropagation();


            }, false)
            });
            
        })()
//need validation start end

//---------------------------------------------JS function start--------------------------------------------------

 
          
    //function for add purok end
    function edit_purok(Prk_ID,Purok_Name,Purok_Sort) {


                var action = 'UPDATE_PUROK';

                $.ajax({
                    url:"<?php echo base_url(); ?>admin/for_purok/",
                    method:"POST",
                    dataType:"JSON",
                    data:{UPDATE_PUROK:action, Prk_ID:Prk_ID, Purok_Name:Purok_Name, Purok_Sort:Purok_Sort},

                    beforeSend: function(){
                        
                        $('#Purok_Name_Edit').prop('disabled', true);
                        $('#Purok_Sort_Edit').prop('disabled', true);
                        $('#btn_Cancel').prop('disabled', true);
                        $('#btn_Edit').prop('disabled', true);
        
                    },

                    success:function(data)
                    {
                        
                        $('#Purok_Name_Edit').prop('disabled', false);
                        $('#Purok_Sort_Edit').prop('disabled', false);
                        $('#btn_Cancel').prop('disabled', false);
                        $('#btn_Edit').prop('disabled', false);

                        allConsumerData.ajax.reload();

                        if (data.msg == 303) {

                            Swal.fire({
                            icon: 'success',
                            title: ''+Purok_Name+' Updated Successfully',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            html: '<button class = "btn btn-outline-secondary p-2 SwalBtn1-close" style ="width:100px;" >Close</button>'
                            });

                        }else{


                            Swal.fire({
                            icon: 'error',
                            title: ''+Purok_Name+' Already Exist',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            html: '<button class = "btn btn-outline-secondary p-2 SwalBtn1-cancel" style ="width:100px;" >Close</button>\
                            <button class = "btn btn-capstone p-2 SwalBtn2-addmore" style ="width:100px;" >Try Again</button>'
                            })

                        }

                    
                    }
                            
                    });

    }
    //function for delete prk
            $(document).on('click', '.deletePrkBtn', function(event){

                var prk_id = $(this).attr("id");  
                var deletePrk = 'deletePrk';  
                var prk_name = $(this).attr("href");  


                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert "+prk_name+"!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {

                
                    
                $.ajax({
                    url:"<?php echo base_url(); ?>admin/for_purok/",
                    method:"POST",
                    dataType:"JSON",
                    data:{deletePrk:deletePrk, prk_id:prk_id},
                    beforeSend: function(){},
                    success:function(data)
                    {
                        if (data.msg == 303) {

                            Swal.fire(
                                'Deleted!',
                                ''+ prk_name +' has been deleted permanently!',
                                'success'
                                );

                        } else {

                            alert(1);
                        
                        }
                        allConsumerData.ajax.reload();  
                    
                    }
                            
                    });
                    
                  
                }
                });

                return false;
     
            });

    //function for delete prk end
    $(document).on('click', '.editPrkBtn', function(event){

        var prk_id = $(this).attr("id");
        var getPrk = 'getPrk'; 
        
                $.ajax({
                    url:"<?php echo base_url(); ?>admin/for_purok/",
                    method:"POST",
                    dataType:"JSON",
                    data:{getPrk:getPrk, prk_id:prk_id},
                    beforeSend: function(){
                        $('#editPurok').modal('show');
                    },
                    success:function(data)
                    {
                        if (data.msg == 303) {

                            $('#Purok_Name_Edit').val(data.prk_name);
                            $('#Purok_Sort_Edit').val(data.prk_sort);
                            $('#Prk_ID').val(data.Prk_ID);

                            
                        } else {

                            alert(1);
                        
                        }
                      
                    
                    }
                            
                    });

        
        return false;
    });inter


}); //end of jquery

    

     $(document).on('click', '.Account_Number', function() { //close
        var Account_Number = $('#Account_Number').val('<?= $account_id ?>');
        $('.Account_NumberForm').html('<?= $account_id ?>'); 
        $('.require_account_id').addClass('d-none'); 
    });



    //close sweet alert condition start
    $(document).on('click', '.btn_Cancel', function() { //close
        $('#input_edit_msg').html(''); 
    });
    $(document).on('click', '#btn_Cancel', function() { //close
        $('#submit_add_consumer').trigger("reset").removeClass('was-validated');
        $(".form_add_consumer").load(location.href + " .form_add_consumer");
        $('#selectMeterNumber').val(null).trigger('change');
        $('#selectPurok').val(null).trigger('change');
        $('#selectAvatar').val(null).trigger('change');
        $(".select_meter").load(location.href + " .select_meter"); 
        $('#user_name_load').html(''); 
        $('#save_Cancel').prop('disabled', false);
        $('.require_account_id').addClass('d-none'); 
    });
    $(document).on('click', '.SwalBtn1-close', function() { //close
        swal.clickConfirm();
        $('#editPurok').modal('hide');
        $('#input_edit_msg').html(''); 
    });

    $(document).on('click', '.SwalBtn1-cancel', function() { //cancel
        swal.clickConfirm();
        $('#addNewConsumer').modal('hide');
        $('#submit_add_consumer').trigger("reset");
        $(".form_add_consumer").load(location.href + " .form_add_consumer");
        $('#selectMeterNumber').val(null).trigger('change');
        $('#selectPurok').val(null).trigger('change');
        $('#selectAvatar').val(null).trigger('change');
        $(".select_meter").load(location.href + " .select_meter");
        $('#user_name_load').html('');  

    });
    $(document).on('click', '.SwalBtn2-addmore', function() { //addmore
        swal.clickConfirm();
        $('#submit_add_consumer').trigger("reset");
        $(".form_add_consumer").load(location.href + " .form_add_consumer");
        $('#selectMeterNumber').val(null).trigger('change');
        $('#selectPurok').val(null).trigger('change');
        $('#selectAvatar').val(null).trigger('change');
        $(".select_meter").load(location.href + " .select_meter"); 
        $('#user_name_load').html('');  

    });
    //close sweet alert condition end
//---------------------------------------------JS function END-----------------------------------------------------

  //check purok name if exsit
$(document).ready(function() {

var timeOut = null; // this used for hold few seconds to made ajax request

var loading_html = '<img src="<?= base_url() ?>img/loader2.gif" style="height: 20px; width: 20px;"/>'; // just an loading image or we can put any texts here

//when button is clicked
$('#User_name').keyup(function(e){

    // when press the following key we need not to make any ajax request, you can customize it with your own way
    switch(e.keyCode)
    {
        //case 8:   //backspace
        case 9:     //tab
        case 13:    //enter
        case 16:    //shift
        case 17:    //ctrl
        case 18:    //alt
        case 19:    //pause/break
        case 20:    //caps lock
        case 27:    //escape
        case 33:    //page up
        case 34:    //page down
        case 35:    //end
        case 36:    //home
        case 37:    //left arrow
        case 38:    //up arrow
        case 39:    //right arrow
        case 40:    //down arrow
        case 45:    //insert
        //case 46:  //delete
            return;
    }
    if (timeOut != null)
        clearTimeout(timeOut);
    timeOut = setTimeout(is_available, 500);  // delay delay ajax request for 1000 milliseconds
    $('#user_name_load').html(loading_html); // adding the loading text or image
});
});


function is_available(){
//get the purok_name
var user_name = $('#User_name').val();

//make the ajax request to check is purok_name available or not
if (user_name == '') {



    document.getElementById("save_Cancel").disabled = true;

}else{

    var check_Username = 'check_Username';
const summary = document.querySelector("#User_name").value;
const summaryLength = summary.length;

if( summaryLength >= 3 ) {  

      $.post("<?= base_url() ?>admin/for_consumer/", { check_Username: check_Username,user_name: user_name },
      function(result)
      {
      console.log(result);
      if(result != 0)
      {
          $('#user_name_load').html('<span class="text-danger"><i class="fas fa-times-circle"></i> '+user_name+' is already exist</span>');
          document.getElementById("save_Cancel").disabled = true;
      }
      else
      {
          $('#user_name_load').html('<span class="text-success"><i class="fas fa-check-circle"></i> Available</span>');
          document.getElementById("save_Cancel").disabled = false;
      }
      });

  }else{

    $('#user_name_load').html('<span class="text-danger"><i class="fas fa-times-circle"></i> '+user_name+' is too short</span>');
    document.getElementById("save_Cancel").disabled = true;

  }


}

}
  //check purok name if exsit
</script>


        <!--#### javascript End ###-->

<!--################################## All Purok table End #########################################-->
