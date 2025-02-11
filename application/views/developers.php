<?php include('inc/script-header.php'); ?>
<?php include('inc/header.php'); ?>

<section class="hero-section text-center">
  <div class="container">
    <h1 class="display-4">Our Developers</h1>
    <p class="lead">Meet the creative minds behind Thiru Tech Talks, driving innovation and excellence.</p>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <h2 class="section-title text-center">About Our Team</h2>
    <p>
      At Thiru Tech Talks, we believe in building impactful solutions through collaboration, expertise, and innovation. Our team of dedicated developers is passionate about delivering high-quality, scalable, and user-friendly applications.
    </p>
  </div>
</section>

<section class="bg-light py-5">
  <div class="container">
    <h2 class="section-title text-center">Meet the Developers</h2>
    <div class="row text-center">
      <div class="col-md-4">
        <h5>Thirumala B</h5>
        <p>Founder & Lead Developer</p>
      </div>
      <div class="col-md-4">
        <h5>John Doe</h5>
        <p>Backend Developer</p>
      </div>
      <div class="col-md-4">
        <h5>Jane Smith</h5>
        <p>Frontend Developer</p>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <h2 class="section-title text-center">What We Do</h2>
    <div class="row text-center">
      <div class="col-md-4">
        <h5><i class="bi bi-code-slash text-primary me-2"></i> Custom Development</h5>
        <p>Building tailored solutions to meet your unique business needs.</p>
      </div>
      <div class="col-md-4">
        <h5><i class="bi bi-server text-primary me-2"></i> Scalable Solutions</h5>
        <p>Creating systems that grow with your business.</p>
      </div>
      <div class="col-md-4">
        <h5><i class="bi bi-device-desktop text-primary me-2"></i> Modern Interfaces</h5>
        <p>Designing user-friendly and responsive interfaces.</p>
      </div>
    </div>
  </div>
</section>

<div class="text-center">
  <h5>Contact Us by Email</h5>
  <form action="<?=base_url()?>send-email" method="post" class="d-inline-block mt-3">
    <div class="mb-3">
      <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
    </div>
    <div class="mb-3">
      <textarea name="message" class="form-control" rows="4" placeholder="Enter your message" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send Message</button>
  </form>
</div>

<section class="py-5">
  <div class="container text-center">
    <h2 class="section-title">Stay Connected</h2>
    <p>Follow us on social media for the latest updates and insights from Thiru Tech Talks.</p>
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href="#" class="text-primary"><i class="bi bi-facebook"></i> Facebook</a>
      </li>
      <li class="list-inline-item">
        <a href="#" class="text-info"><i class="bi bi-twitter"></i> Twitter</a>
      </li>
      <li class="list-inline-item">
        <a href="#" class="text-danger"><i class="bi bi-instagram"></i> Instagram</a>
      </li>
    </ul>
  </div>
</section>

<?php include('inc/footer.php'); ?>
<?php include('inc/script-footer.php'); ?>
