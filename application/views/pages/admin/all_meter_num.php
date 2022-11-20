<!--################################## All Purok table #########################################-->

<div class="col-xl-12 col-lg-7">
  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-gray-900"> <i class="fas fa-list fa-sm fa-fw mr-2"></i>List of Meter Number</h6>
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
        <div class = "pl-3">
            <button type="button" class="btn btn-outline-primary btn-icon-split" data-toggle="modal" data-target="#addNewMeterNum">
                <span class="icon text-light bg-primary">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Add New Meter Number</span>
            </button>
        </div>
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover w-100" id="dataTable_allMeterNumber">
              <thead class="thead-light">
                <tr>
                  <th class= "text-center">Select</th>
                  <th class= "text-center">#</th>
                  <th>Meter Number</th>
                  <th>Action</th>                  
                </tr>
              </thead>
              <tfoot class="thead-light">
                <tr>
                  <th class= "text-center">Select</th>
                  <th class= "text-center">#</th>
                  <th>Meter Number</th>
                  <th>Action</th>                     
                </tr>
              </tfoot>
           
            </table>
          </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addNewMeterNum" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addNewMeterNumLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewMeterNumLabel">Form - Add More Meter Number</h5>
        <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <form id="submit_add_meter_number" class="g-3 needs-validation-meter" novalidate>
              
       
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="Meter_Number">Meter Number</label>
                <input type="number" min = "0001" class="form-control" name ="Meter_Number" id="Meter_Number" required>
                <div class="invalid-tooltip">
                    Meter Number!
                </div>
              </div>
            </div>




      </div>
      <div class="modal-footer">
        <button type="button" id = "btn_Cancel" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" id = "save_Cancel" class="btn btn-success">Add & Save Now</button>
      </div>

      </form>

    </div>
  </div>
</div>

<!-- modal for edit start-->
<div class="modal fade" id="editMeter" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editPurokLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPurokLabel">Form - Update Meter</h5>
        <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <form id="submit_edit_meter_number" class="g-3 needs-validation-meter-edit" novalidate>
              
       
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="Meter_Number_Edit">Meter Number</label>
                <input type="number" min = "1" class="form-control" name ="Meter_Number_Edit" id="Meter_Number_Edit" required>
                <div class="invalid-tooltip">
                    Meter Number!
                </div>
                <div id="input_edit_msg"></div>
              </div>
            </div>
            <input type="hidden" id="Meter_ID">
         



      </div>
      <div class="modal-footer">
        <button type="button" id = "btn_Cancel" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" id = "btn_Edit" class="btn btn-warning">Update & Save Now</button>
      </div>

      </form>

    </div>
  </div>
</div>
<!-- modal for edit end-->

        <!--#### javascript Start ###-->

<style>

.btn-hover-view:hover {
    background-color: #36b9cc;
    color: white;
}
.btn-hover-edit:hover {
    background-color: #f6c23e;
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

<script>

$(document).ready(function () {

//table start
var allMeterNumData = $('#dataTable_allMeterNumber').DataTable({
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
			url:"<?= base_url(); ?>admin/for_meter_number/",
			type:"POST",
			data:{all_meter_num:'all_meter_num'},
			dataType:"json"
		},
        'columns': [
                    { data: 'Select' },
                    { data: '#', className: "uniqueClassName" },
                    { data: 'Meter_Number' },
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

//need validation start
        (function () {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation-meter')

        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }
                var Meter_Number = $('#Meter_Number').val();

                if (Meter_Number == "") {
                   
                 
                    form.classList.add('was-validated');
                    

                }else{
                
                    add_Meter_Num(Meter_Number);
                  

                }
                

                event.preventDefault();
                event.stopPropagation();


            }, false)
            });


        var forms_2 = document.querySelectorAll('.needs-validation-meter-edit')

        Array.prototype.slice.call(forms_2)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }
                var Meter_Number = $('#Meter_Number_Edit').val();
                var Meter_ID = $('#Meter_ID').val();

                if (Meter_Number == "") {
                   
                 
                    form.classList.add('was-validated');
                    

                }else{
                
                    edit_Meter_Num(Meter_ID,Meter_Number);
                  

                }
                

                event.preventDefault();
                event.stopPropagation();


            }, false)
            });
            
        })()
//need validation start end

//---------------------------------------------JS function start--------------------------------------------------

        function add_Meter_Num(Meter_Number) {

                var action = 'ADD_METER';

                $.ajax({
                    url:"<?php echo base_url(); ?>admin/for_meter_number/",
                    method:"POST",
                    dataType:"JSON",
                    data:{ADD_METER:action, Meter_Number:Meter_Number},

                    beforeSend: function(){
                        
                        $('#Meter_Number').prop('disabled', true);
                        $('#btn_Cancel').prop('disabled', true);
                        $('#save_Cancel').prop('disabled', true);
        
                    },

                    success:function(data)
                    {
                        
                        $('#Meter_Number').prop('disabled', false);
                        $('#btn_Cancel').prop('disabled', false);
                        $('#save_Cancel').prop('disabled', false);

                        // alert(data.data_tables);
                        allMeterNumData.ajax.reload();

                        if (data.msg == 303) {

                            Swal.fire({
                            icon: 'success',
                            title: ''+Meter_Number+' Added Successfully',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            html: '<button class = "btn btn-outline-secondary p-2 SwalBtn1-cancel" style ="width:100px;" >Close</button>\
                            <button class = "btn btn-capstone p-2 SwalBtn2-addmore" style ="width:100px;" >Add More</button>'
                            });

                        }else{


                            Swal.fire({
                            icon: 'error',
                            title: ''+Meter_Number+' Already Exist',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            html: '<button class = "btn btn-outline-secondary p-2 SwalBtn1-cancel" style ="width:100px;" >Close</button>\
                            <button class = "btn btn-capstone p-2 SwalBtn2-addmore" style ="width:100px;" >Try Again</button>'
                            })

                        }

                    
                    }
                            
                    });

            }

          
    //function for add purok end
    function edit_Meter_Num(Meter_ID,Meter_Number) {


                var action = 'UPDATE_METER';

                $.ajax({
                    url:"<?php echo base_url(); ?>admin/for_meter_number/",
                    method:"POST",
                    dataType:"JSON",
                    data:{UPDATE_METER:action, Meter_ID:Meter_ID, Meter_Number:Meter_Number},

                    beforeSend: function(){
                        
                        $('#Meter_Number_Edit').prop('disabled', true);
                        $('#btn_Cancel').prop('disabled', true);
                        $('#btn_Edit').prop('disabled', true);
        
                    },

                    success:function(data)
                    {
                        
                        $('#Meter_Number_Edit').prop('disabled', false);
                        $('#btn_Cancel').prop('disabled', false);
                        $('#btn_Edit').prop('disabled', false);

                        allMeterNumData.ajax.reload();

                        if (data.msg == 303) {

                            Swal.fire({
                            icon: 'success',
                            title: ''+Meter_Number+' Updated Successfully',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            html: '<button class = "btn btn-outline-secondary p-2 SwalBtn1-close" style ="width:100px;" >Close</button>'
                            });

                        }else{


                            Swal.fire({
                            icon: 'error',
                            title: ''+Meter_Number+' Already Exist',
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
            $(document).on('click', '.deleteMeterBtn', function(event){

                var meter_id = $(this).attr("id");  
                var deleteMeter = 'deleteMeter';  
                var meter_number = $(this).attr("href");  


                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert "+meter_number+"!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {

                
                    
                $.ajax({
                    url:"<?php echo base_url(); ?>admin/for_meter_number/",
                    method:"POST",
                    dataType:"JSON",
                    data:{deleteMeter:deleteMeter, meter_id:meter_id},
                    beforeSend: function(){},
                    success:function(data)
                    {
                        if (data.msg == 303) {

                            Swal.fire(
                                'Deleted!',
                                ''+ meter_number +' has been deleted permanently!',
                                'success'
                                );

                        } else {

                            alert(1);
                        
                        }
                        allMeterNumData.ajax.reload();  
                    
                    }
                            
                    });
                    
                  
                }
                });

                return false;
     
            });

    //function for delete prk end
    $(document).on('click', '.editMeterBtn', function(event){

        var meter_id = $(this).attr("id");
        var getMeter = 'getMeter'; 
        
                $.ajax({
                    url:"<?php echo base_url(); ?>admin/for_meter_number/",
                    method:"POST",
                    dataType:"JSON",
                    data:{getMeter:getMeter, meter_id:meter_id},
                    beforeSend: function(){
                        $('#editMeter').modal('show');
                    },
                    success:function(data)
                    {
                        if (data.msg == 303) {

                            $('#Meter_Number_Edit').val(data.Meter_Number);
                            $('#Meter_ID').val(data.Meter_ID);

                            
                        } else {

                            alert(1);
                        
                        }
                      
                    
                    }
                            
                    });

        
        return false;
    });


}); //end of jquery

    //close sweet alert condition start
    $(document).on('click', '.SwalBtn1-close', function() { //close
        swal.clickConfirm();
        $('#editMeter').modal('hide');
        $('#input_edit_msg').html(''); 
    });

    $(document).on('click', '.SwalBtn1-cancel', function() { //cancel
        swal.clickConfirm();
        $('#addNewMeterNum').modal('hide');
        $('#editMeter').modal('hide');
        $('#submit_add_meter_number').trigger("reset");
    });
    $(document).on('click', '.SwalBtn2-addmore', function() { //addmore
        swal.clickConfirm();
        $('#submit_add_meter_number').trigger("reset");
    });
    //close sweet alert condition end
//---------------------------------------------JS function END-----------------------------------------------------


</script>


        <!--#### javascript End ###-->

<!--################################## All Purok table End #########################################-->
