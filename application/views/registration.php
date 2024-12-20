<?php include('inc/script-header.php'); ?>
<?php include('inc/header.php'); ?>

<section class="background-gradient-custom overflow-hidden">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: #ffffff">
          Join Jana Seva Kendra <br />
          <span style="color: #cce7ff">Simplifying Public Services</span>
        </h1>
        <p class="mb-4 opacity-80" style="color: #e6f0ff">
          Register today to access essential government services easily, including utility bill payments, certifications, and community programs.
        </p>
      </div>
      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
        <div class="card bg-light">
          <div class="card-body px-4 py-5 px-md-5">
            <form method="post" action="<?=base_url()?>register/process" id="registerForm">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input 
                      type="text" 
                      id="firstName" 
                      name="first_name" 
                      class="form-control" 
                      required 
                      oninvalid="this.setCustomValidity('Please enter your first name.')" 
                      oninput="this.setCustomValidity('')"
                    />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input 
                      type="text" 
                      id="lastName" 
                      name="last_name" 
                      class="form-control" 
                      required 
                      oninvalid="this.setCustomValidity('Please enter your last name.')" 
                      oninput="this.setCustomValidity('')"
                    />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>
                </div>
              </div>
              <div class="form-outline mb-4">
                <input 
                  type="email" 
                  id="emailAddress" 
                  name="email" 
                  class="form-control" 
                  required 
                  oninvalid="this.setCustomValidity('Please enter a valid email address.')" 
                  oninput="this.setCustomValidity('')"
                />
                <label class="form-label" for="emailAddress">Email Address</label>
              </div>
              <div class="form-outline mb-4">
                <input 
                  type="password" 
                  id="password" 
                  name="password" 
                  class="form-control" 
                  required 
                  oninvalid="this.setCustomValidity('Please enter a password.')" 
                  oninput="this.setCustomValidity('')"
                />
                <label class="form-label" for="password">Password</label>
              </div>
              <div class="form-outline mb-4">
                <input 
                  type="password" 
                  id="confirmPassword" 
                  name="confirm_password" 
                  class="form-control" 
                  required 
                  oninvalid="this.setCustomValidity('Please confirm your password.')" 
                  oninput="this.setCustomValidity('')"
                  onchange="checkPasswords()"
                />
                <label class="form-label" for="confirmPassword">Confirm Password</label>
                <span id="passwordMismatchError" style="color: red; display: none;">Passwords do not match.</span>
              </div>
              <button type="submit" class="btn btn-success btn-block mb-4">
                Register Now
              </button>
              <div class="text-center">
                <p>Already have an account? <a href="<?=base_url()?>">Login here</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function checkPasswords() {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    var errorMessage = document.getElementById('passwordMismatchError');

    // If passwords don't match, show the error message and highlight the fields
    if (password !== confirmPassword) {
      errorMessage.style.display = 'block';
      document.getElementById('confirmPassword').style.borderColor = 'red'; // Highlight the Confirm Password field
    } else {
      errorMessage.style.display = 'none';
      document.getElementById('confirmPassword').style.borderColor = ''; // Reset border color
    }
  }
</script>

<?php include('inc/script-footer.php'); ?>
<?php include('inc/footer.php'); ?>
