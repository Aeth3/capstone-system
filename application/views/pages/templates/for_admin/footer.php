
          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
               
                <div class="modal-body">
                  <h4 class= "text-center">Are you sure you want to logout?</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                  <a href="<?= base_url() ?>Admin-Logout" class="btn btn-danger">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-gray-200">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <?= base_url() ?> Developed by
              <b><a href="#" target="_blank">Group 08</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Select2 -->
  <script src="<?= base_url() ?>vendor/select2/dist/js/select2.min.js"></script>
  <!-- Bootstrap Datepicker -->
  <script src="<?= base_url() ?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap Touchspin -->
  <script src="<?= base_url() ?>vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
  <!-- ClockPicker -->
  <script src="<?= base_url() ?>vendor/clock-picker/clockpicker.js"></script>

  <script src="<?= base_url() ?>js/main.js"></script>
  <script src="<?= base_url() ?>vendor/chart.js/Chart.js"></script>
  <script src="<?= base_url() ?>js/chart/cubic-consumed.js"></script>  
  <script src="<?= base_url() ?>js/chart/dues.js"></script>  
  
  <!-- Page level plugins -->
  <script src="<?= base_url() ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
  <script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
 


  <script>
            $(document).ready(function(){
                
              
                    $('.overlay').fadeIn().show();
                    setTimeout(function() {
                           $('.overlay').fadeOut(1000).addClass('display-none');
                           $('#wrapper').removeClass('d-none');
                           
                           <?php if($this->session->flashdata('message_adminlogin_success')) {
                                  
                                  echo "const Toast = Swal.mixin({
                                      toast: true,
                                      position: 'top-end',
                                      showCloseButton: true,
                                      showConfirmButton: false,
                                      timer: 4000,
                                      timerProgressBar: true,
                                      didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                      }
                                    });
                          
                                    Toast.fire({
                                      icon: 'success',
                                      title: 'You are now logged in as ".$this->session->flashdata("message_adminlogin_success")."!'
                                    })";
                          
                                  $this->session->unset_userdata('message_adminlogin_success');
                                                            
                                        } ?>

                                        
                    }, 2000);

            });

                                
    </script>


