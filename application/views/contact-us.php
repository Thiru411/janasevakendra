<?php include('inc/script-header.php'); ?>
<?php include('inc/header.php'); ?>
<section class="contact-section">
  <div class="container">
    <h1>Contact Us</h1> <!-- Reduced heading size and height -->
    <p class="lead">Get in touch with us for any PAN card service queries or assistance.</p>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row">
      <!-- Contact Form -->
      <div class="col-md-6">
        <div class="contact-form">
          <h4>Contact Form</h4>
          <form action="submit_form.php" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Your Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-md-6 contact-info">
        <h4>Our Contact Details</h4>
        <p><strong>Address:</strong> Jana Seva Kendra, XYZ Street, City Name, State, Pin Code</p>
        <p><strong>Phone:</strong> +91 123 456 7890</p>
        <p><strong>Email:</strong> <a href="mailto:support@janasevakendra.com">support@janasevakendra.com</a></p>
      </div>
    </div>
  </div>
</section>

<?php include('inc/footer.php'); ?>
<?php include('inc/script-footer.php'); ?>