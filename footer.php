<footer style="background-color: #85BB41;">
  <div class="container-fluid ">
    <div class="container pt-5 pb-3">
      <div class="row">
        <div class="col-md-3 ">
          <a class="navbar-brand" href="#"><img src="assets/White.png" alt="" class=" object-fit-cover pb-4"
              style="width: 200px; height: 70px;"></a><br>
          <p style="text-align: justify;" class="pe-4">At OOVANOO, we understand that every home kitchen has a story -
            a story rooted
            in family traditions,
            recipes passed down for generations, and a passion for creating. We are here to amplify your story.</p>
          <br>
        </div>
        <div class="col-md-3 ps-md-4 ">
          <h3>Quick Links</h3><br>

          <p><a href="about-us.php">About Us</a></p>
          <p><a href="become-a-partner.php">Become A Partner</a></p>
          <p><a href="our-team.php">Our Team</a></p>
          <p><a href="#">Blog</a></p>
          <p><a href="footer-contact.php">Contact</a></p><br>

        </div>
        <div class="col-md-3">
          <h3>Useful Links</h3><br>
          <p><a href="privacy-policy.php">Privacy Policy</a></p>
          <p><a href="#">Terms and Conditions</a></p>
          <p><a href="#">Disclaimer</a></p>
          <p><a href="support.php">Support</a></p>
          <p><a href="faq.php">FAQ</a></p><br>

        </div>
        <div class="col-md-3" style="text-align: justify;">
          <h3>Office Details</h3><br>
          <p><i class="fa fa-map-marker text-white"></i> 139, 5th Street, CTO Colony, Tambaram West, Tambaram,
            Kanchipuram, Chennai - 600045</p>
          <p><a href="tel:+91-9500545437" target="_blank"><i class="fa fa-phone text-white"></i> +91 95005 45437 </p>
          </a>
          <p>
            <a href="mailto:cmo@oovanoo.com" target="_blank" rel="noopener noreferrer">
              <i className="fa fa-envelope text-white"></i> cmo@oovanoo.com
            </a>
          </p>
          <p>
            <a href="mailto:cmo@oovanoo.com" target="_blank" rel="noopener noreferrer">
              <i className="fa fa-envelope text-white"></i> cmo@oovanoo.com
            </a>
          </p>
        </div><br>
      </div>
      <hr>
    </div>
    <div class="d-flex justify-content-center align-items-center py-2">
      <p>© Oovanoo 2021. All rights reserved.</p>
    </div>
  </div>
</footer>

<!-- script for tabs panel -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.fancy-tab');
    const tabContents = document.querySelectorAll('.tab-pane');

    tabs.forEach(tab => {
      tab.querySelector('button').addEventListener('click', function () {
        // Remove 'active' class from all tabs
        tabs.forEach(t => t.classList.remove('active'));
        // Add 'active' class to the clicked tab
        tab.classList.add('active');

        // Hide all tab contents
        tabContents.forEach(content => content.classList.remove('show', 'active'));

        // Show the content related to the clicked tab
        const targetContent = document.querySelector(tab.querySelector('button').getAttribute('data-bs-target'));
        targetContent.classList.add('show', 'active');
      });
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8b130538fc.js" crossorigin="anonymous"></script>

<!-- script for tabs panel end -->
<script src="<?php echo $systemHostlink; ?>js/jquery-3.7.0.min.js"></script>
<script src="<?php echo $systemHostlink; ?>js/app.js"></script>
<script src="<?php echo $systemHostlink; ?>js/simple_validation.js"></script>