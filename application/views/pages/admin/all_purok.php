<!--################################## All Purok table #########################################-->

<div class="col-xl-12 col-lg-7">
  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-gray-900"> <i class="fas fa-list fa-sm fa-fw mr-2"></i>List of Purok</h6>
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
            <button type="button" class="btn btn-outline-primary btn-icon-split" data-toggle="modal" data-target="#addNewPurok">
                <span class="icon text-light bg-primary">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Add New Purok</span>
            </button>
        </div>
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover w-100" id="dataTable_allPurok">
              <thead class="thead-light">
                <tr>
                  <th class= "text-center">Select</th>
                  <th class= "text-center">#</th>
                  <th>Purok Name</th>
                  <th>Purok Sort</th>
                  <th>Action</th>                  
                </tr>
              </thead>
              <tfoot class="thead-light">
                <tr>
                  <th class= "text-center">Select</th>
                  <th class= "text-center">#</th>
                  <th>Purok Name</th>
                  <th>Purok Sort</th>
                  <th>Action</th>                  
                </tr>
              </tfoot>
           
            </table>
          </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addNewPurok" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addNewPurokLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewPurokLabel">Form - Add More Purok</h5>
        <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <form id="submit_add_purok" class="g-3 needs-validation-purok" novalidate>
              
       
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="Purok_Name">Purok Name</label>
                <input type="text" class="form-control" name ="Purok_Name" id="Purok_Name" required>
                <div class="invalid-tooltip">
                    Purok Name!
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="Purok_Sort">Purok Sort</label>
                <input type="number" class="form-control" name ="Purok_Sort" id="Purok_Sort" min="1" required>
                <div class="invalid-tooltip">
                   Purok Sort!
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
        
            <form id="submit_edit_purok" class="g-3 needs-validation-purok-edit" novalidate>
              
       
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
var allPrkData = $('#dataTable_allPurok').DataTable({
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
			url:"<?= base_url(); ?>admin/for_purok/",
			type:"POST",
			data:{all_prk:'all_prk'},
			dataType:"json"
		},
        'columns': [
                    { data: 'Select' },
                    { data: '#', className: "uniqueClassName"},
                    { data: 'Purok_Name' },
                    { data: 'Purok_Sort' },
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

        var forms = document.querySelectorAll('.needs-validation-purok')

        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }
                var Purok_Name = $('#Purok_Name').val();
                var Purok_Sort = $('#Purok_Sort').val();

                if (Purok_Name == "" || Purok_Sort == "") {
                   
                 
                    form.classList.add('was-validated')
                    

                }else{
                
                    add_purok(Purok_Name,Purok_Sort);
                  

                }
                

                event.preventDefault();
                event.stopPropagation();


            }, false)
            });


        var forms_2 = document.querySelectorAll('.needs-validation-purok-edit')

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

        function add_purok(Purok_Name,Purok_Sort) {

                var action = 'ADD_PUROK';

                $.ajax({
                    url:"<?php echo base_url(); ?>admin/for_purok/",
                    method:"POST",
                    dataType:"JSON",
                    data:{ADD_PUROK:action, Purok_Name:Purok_Name, Purok_Sort:Purok_Sort},

                    beforeSend: function(){
                        
                        $('#Purok_Name').prop('disabled', true);
                        $('#Purok_Sort').prop('disabled', true);
                        $('#btn_Cancel').prop('disabled', true);
                        $('#save_Cancel').prop('disabled', true);
        
                    },

                    success:function(data)
                    {
                        
                        $('#Purok_Name').prop('disabled', false);
                        $('#Purok_Sort').prop('disabled', false);
                        $('#btn_Cancel').prop('disabled', false);
                        $('#save_Cancel').prop('disabled', false);

                        // alert(data.data_tables);
                        allPrkData.ajax.reload();

                        if (data.msg == 303) {

                            Swal.fire({
                            icon: 'success',
                            title: ''+Purok_Name+' Added Successfully',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            html: '<button class = "btn btn-outline-secondary p-2 SwalBtn1-cancel" style ="width:100px;" >Close</button>\
                            <button class = "btn btn-capstone p-2 SwalBtn2-addmore" style ="width:100px;" >Add More</button>'
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

                        allPrkData.ajax.reload();

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
                        allPrkData.ajax.reload();  
                    
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
    });


}); //end of jquery

    //close sweet alert condition start
    $(document).on('click', '.btn_Cancel', function() { //close
        $('#input_edit_msg').html(''); 
    });
    $(document).on('click', '.SwalBtn1-close', function() { //close
        swal.clickConfirm();
        $('#editPurok').modal('hide');
        $('#input_edit_msg').html(''); 
    });

    $(document).on('click', '.SwalBtn1-cancel', function() { //cancel
        swal.clickConfirm();
        $('#addNewPurok').modal('hide');
        $('#submit_add_purok').trigger("reset");
    });
    $(document).on('click', '.SwalBtn2-addmore', function() { //addmore
        swal.clickConfirm();
        $('#submit_add_purok').trigger("reset");
        $('#submit_add_purok').trigger("reset");
    });
    //close sweet alert condition end
//---------------------------------------------JS function END-----------------------------------------------------

  //check purok name if exsit
$(document).ready(function() {

var timeOut = null; // this used for hold few seconds to made ajax request

var loading_html = '<img src="<?= base_url() ?>img/loader2.gif" style="height: 20px; width: 20px;"/>'; // just an loading image or we can put any texts here

//when button is clicked
$('#Purok_Name_Edit').keyup(function(e){

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
    $('#input_edit_msg').html(loading_html); // adding the loading text or image
});
});


function is_available(){
//get the purok_name
var purok_name = $('#Purok_Name_Edit').val();

//make the ajax request to check is purok_name available or not
if (purok_name == '') {



    document.getElementById("btn_Edit").disabled = true;

}else{

    var check_Purokname = 'check_Purokname';
const summary = document.querySelector("#Purok_Name_Edit").value;
const summaryLength = summary.length;

if( summaryLength >= 3 ) {  

      $.post("<?= base_url() ?>admin/for_purok/", { check_Purokname: check_Purokname,purok_name: purok_name },
      function(result)
      {
      console.log(result);
      if(result != 0)
      {
          $('#input_edit_msg').html('<span class="text-danger"><i class="fas fa-times-circle"></i> '+purok_name+' is already exist</span>');
          document.getElementById("btn_Edit").disabled = true;
      }
      else
      {
          $('#input_edit_msg').html('<span class="text-success"><i class="fas fa-check-circle"></i> Available</span>');
          document.getElementById("btn_Edit").disabled = false;
      }
      });

  }else{

    $('#input_edit_msg').html('<span class="text-danger"><i class="fas fa-times-circle"></i> '+purok_name+' is too short</span>');
    document.getElementById("btn_Edit").disabled = true;

  }


}

}
  //check purok name if exsit
</script>


        <!--#### javascript End ###-->

<!--################################## All Purok table End #########################################-->
