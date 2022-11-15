
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                  <form  class="g-3 needs-validation-register" novalidate>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter First Name" required>
                        <div class="invalid-tooltip">
                          First name required!
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter Last Name" required>
                        <div class="invalid-tooltip">
                          Last name required!
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                      <label for="select2SinglePlaceholder">Address</label>
                      <select class="select2-single-placeholder custom-select" name="state" id="select2SinglePlaceholder" required>
                        <option value="">Select</option>
                        <option value="Aceh">Aceh</option>
                        <option value="Sumatra Utara">Sumatra Utara</option>
                        <option value="Sumatra Barat">Sumatra Barat</option>
                        <option value="Riau">Riau</option>
                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                        <option value="Jambi">Jambi</option>
                        <option value="Bengkulu">Bengkulu</option>
                        <option value="Sumatra Selatan">Sumatra Selatan</option>
                        <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                        <option value="Lampung">Lampung</option>
                        <option value="Banten">Banten</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="Yogyakarta">Yogyakarta</option>
                        <option value="Jawa TImur">Jawa Timur</option>
                        <option value="Bali">Bali</option>
                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                        <option value="Kalimantan Utara">Kalimantan Utara</option>
                        <option value="Gorontalo">Gorontalo</option>
                        <option value="Sulawaesi Barat">Sulawesi Barat</option>
                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                        <option value="Maluku">Maluku</option>
                        <option value="Maluku Utara">Maluku Utara</option>
                        <option value="Papua Barat">Papua Barat</option>
                        <option value="Papua">Papua</option>
                      </select>
                      <div class="invalid-tooltip">
                          Address required!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>Email (Optional)</label>
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                          placeholder="Enter Email Address">
                          <div class="valid-tooltip">
                            Optional!
                          </div>
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                          placeholder="Enter Username" required>
                          <div class="invalid-tooltip">
                            Username required!
                          </div>
                      </div>
                  </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Password</label>
                          <div class="container-password">
                            <input type="password" class="form-control" id="InputPassword" placeholder="Password" required>
                            <i class="far fa-eye visibility icon-password" id="icon"></i>
                            <div class="invalid-tooltip">
                            Password required!
                            </div>
                          </div>
                      </div>
                   
                      <div class="form-group col-md-6">
                        <label>Confirm Password</label>
                          <div class="container-repassword">
                            <input type="password" class="form-control" id="InputRePassword"
                            placeholder="Repeat Password" required>
                            <i class="far fa-eye revisibility icon-repassword" id="icon"></i>
                            <div class="invalid-tooltip">
                            Confirm required!
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-capstone btn-block">Register</button>
                    </div>
                    <hr>
                    <a href="#" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Register with Google
                    </a>

                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="<?= base_url() ?>Login">Already have an account?</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
$(document).ready(function () {

      // Select2 Single  with Placeholder
      $('#select2SinglePlaceholder').select2({
        placeholder: "Select a Province",
        allowClear: true
      }); 

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

      const revisibilityToggle = document.querySelector('.revisibility');
      const reinput = document.querySelector('.container-repassword input');
      var reicon = document.querySelector('.revisibility');

      var repassword = true;

      revisibilityToggle.addEventListener('click', function() {
        if(repassword) {
          reinput.setAttribute('type', 'text');
          reicon.classList.remove("fa-eye");
          reicon.classList.add("fa-eye-slash");
          }
        else { 
          reinput.setAttribute('type', 'password');
          reicon.classList.remove("fa-eye-slash");
          reicon.classList.add("fa-eye");
          }
        
          repassword = !repassword;
      });



(function () {
  'use strict'

  var forms = document.querySelectorAll('.needs-validation-register')

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

