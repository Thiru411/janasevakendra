<?php include('script-header.php'); ?>
<?php include('header.php'); ?>

<section class="background-gradient-custom overflow-hidden">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: #ffffff">
          Welcome to Jana Seva Kendra <br />
          <span style="color: #cce7ff">Your Gateway to Government Services</span>
        </h1>
        <p class="mb-4 opacity-80" style="color: #e6f0ff">
          Access essential services such as bill payments, certificate
          applications, and community programs. We’re here to simplify
          your interaction with public services.
        </p>
      </div>
      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
        <div class="card bg-light">
          <div class="card-body px-4 py-5 px-md-5">
          <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
<?php endif; ?>
            <form method="post" action="<?=base_url()?>login-process">
              <div class="form-outline mb-4">
                <input 
                  type="email" 
                  id="form3Example3" 
                  class="form-control" 
                  required 
                  name="email"
                  oninvalid="this.setCustomValidity('Please enter a valid email address.')" 
                  oninput="this.setCustomValidity('')"
                />
                <label class="form-label" for="form3Example3">Email address</label>
              </div>
              <div class="form-outline mb-4">
                <input 
                  type="password" 
                  id="form3Example4" 
                  class="form-control" 
                  required 
                  name="password"
                  oninvalid="this.setCustomValidity('Please enter your password.')" 
                  oninput="this.setCustomValidity('')"
                />
                <label class="form-label" for="form3Example4">Password</label>
              </div>
              <button type="submit" class="btn btn-success btn-block mb-4">
                Log In
              </button>
              <div class="text-center">
                <p>If you don’t have an account, <a href="<?=base_url()?>register">Register</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('script-footer.php'); ?>
<?php include('footer.php'); ?>
