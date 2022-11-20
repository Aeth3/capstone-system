
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <img src="<?= base_url().$System['system_logo'] ?>" alt="" width = "100"  class="rounded-circle" >
                    <h1 class="h4 text-gray-900 mb-4"><?= $Page_name ?></h1>
                  </div>
                  <?php if ($this->session->flashdata('message_admin')) {
                          
                          echo $this->session->flashdata('message_admin');

                          $this->session->unset_userdata('message_admin');
                          
                    }?>
                  <form class="g-3 needs-validation-login" method = "post" action = "<?= base_url() ?>login_register/login_form_admin" novalidate>
                  <div class="form-row">
                      <div class="form-group col-md-12">
                      <input type="text" class="form-control" name = "username_admin" id="InputUsername"
                        placeholder="Username" required>
                        <div class="invalid-tooltip">
                          Username required!
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="container-password">
                        <input type="password" class="form-control"  name = "password_admin" id="InputPassword" placeholder="Password" required>
                        <i class="far fa-eye visibility icon-password" id="icon"></i>
                        <div class="invalid-tooltip">
                          Password required!
                       </div>
                       </div>
                    </div>
                    </div>
                  
                    <div class="form-group">
                      <button type="submit" name = "login_admin" class="btn btn-capstone btn-block">Login</button>
                    </div>
                  
                  
                  </form>
                
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
    .invalid-tooltip{
      margin-left:25rem;
    }

    @media only screen and (max-width: 600px) {
      .invalid-tooltip{
          margin-left:8.50rem;
        }
    }

  </style>
<script>
$(document).ready(function () {


  
      const visibilityToggle = document.querySelector('.visibility');
      const input = document.querySelector('.container-password input');
      var icon = document.querySelector('.visibility');

      var password = true;

      visibilityToggle.addEventListener('click', function() {
        if(password) {
          input.setAttribute('type', 'text');
          icon.classList.remove("fa-eye");
          icon.classList.add("fa-eye-slash");
          }
        else { 
          input.setAttribute('type', 'password');
          icon.classList.remove("fa-eye-slash");
          icon.classList.add("fa-eye");
          }
        
        password = !password;
      });

      (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation-login')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
      })()


}); 
</script>