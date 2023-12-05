<?php include 'inc/head.php'; ?>
  <title>Contact - Us</title>
  <meta content="Get in touch with us through our Contact Us page." name="description">
  <meta content="" name="keywords">
 
  
  <?php include 'inc/header.php'; ?>
  
<div style="clear:both;"></div>
<br>
  <main id="main">
      <div class="banner-contact-us banner-publications">
          <div class="container" >
            <div id="top-banner-section" class="row gy-4 publications-row">
                  <div class="col-xl-4 col-md-6" id="banner-left-heading">
                    <div>
                      <h1>Contact Us</h1>
                      <p>We would love to hear from you.</p>
                    </div>
                  </div>
                  <div class="col-xl-4 col-md-6" id="banner-right-img">
                    <img src="assets/img/contact-us-banner.webp" alt="Contact us">
                  </div>
            </div>
          </div>  
      </div>
      <section id="frat-contact-us" class="frat-contact-us pb-0">
        <div class="container" >
          <div class="row gy-4 ">
            <form class="c-form" id="enquiry-form" action="mail.php"  method="POST" >
                <div class="row">
                  <div class="col mr-80">
                    <!--<div class="holder">First Name <span class="red">*</span></div>-->
                    <input id="first-name-text" type="text" class="form-control" name="first_name" placeholder="First Name *" autocomplete="off">
                    <div id="first_name-error"></div>
                  </div>
                  <div class="col">
                       <!--<div class="holder">Last Name <span class="red">*</span></div>-->
                        <input id="last-name-text" type="text" class="form-control"  name="last_name" placeholder="Last Name *" autocomplete="off">
                        <div id="last_name-error"></div>
                  </div>
                </div>
              <div class="row">
                  <div class="col mr-80">
                       <!--<div class="holder">Email <span class="red">*</span></div>-->
                    <input id="email-text" type="email" class="form-control" name="email" placeholder="Email *" autocomplete="off">
                    <div id="email-error"></div>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Company" name="company" >
                    
                  </div>
                </div>
              <div class="row">
                  <div class="col mr-80 select-wrapper">
                    <select class="form-control" name="inquiry">
                        <option value="">Types Of Inquiries</option>
                        <option value="General information">General information</option>
                        <option value="Test kit information">Test kit information</option>
                        <option value="Test results">Test results</option>
                        <option value="Invoice & Bill payment">Invoice & Bill payment
</option>
                    </select>
                </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Country" name="country" autocomplete="off" >
                  </div>
                </div>
              <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Message" name="msg" autocomplete="off">
                    <!-- <div id="message-error"></div> -->
                  </div>
                </div>
                  
                <!--  <div class="g-recaptcha" data-sitekey="6LcWLcsoAAAAABqDBE-usGVoPdcRleqd3YJ9JXsB">-->
                      
                <!--<div class='captchafailed ' style='display:none; color: red; margin-bottom: 20px;'>Please verify that you are not a robot.</div>-->
                <!--    </div>-->
              <div class="row">
              <button type="submit" class="btn btn-default sub-btn" name="submit" value="Submit">Submit</button>
              </div>
            </form>
          </div><!-- End post list item -->
        </div>
      </section><!-- End Recent Blog Posts Section -->
      <section id="contact-box" class="pb-0">
        <div class="container">
          <div class="row gy-4">
            <div class="col-xl-4 col-md-6 corporate-address">
              <article>
                <i class="fa fa-map-marker font-icon-contactus"></i>
                  <h3 class="title">
                    Corporate Address
                  </h3>
                <p class="post-category">
                    5110 Campus Drive<br>
                    Suite #120 Plymouth Meeting<br>
                    PA 19462
                </p>
              </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6 lab-address">
              <article>
                <i class="fa fa-flask font-icon-contactus"></i>
                    <h3 class="title">
                      Lab Address
                    </h3>
                  <p class="post-category">
                    5110 Campus Drive<br>
                    Suite #120 Plymouth Meeting<br>
                    PA 19462
                  </p>
              </article>
            </div><!-- End post list item -->
            
            <div class="col-xl-4 col-md-6 enquiries">
              <article> 
                <i class="fa fa-commenting-o font-icon-contactus"></i>
                  <h3 class="title">
                    Inquiries
                  </h3>
                <p class="post-category">
                    <i class="fa fa-phone" style="margin-right:10px"></i> Phone: <a href="tel:610-441-9050">610-441-9050</a><br>
                    <i class="fa fa-fax" style="margin-right:7px"></i> Fax: <a href="fax:610-537-5075">610-537-5075</a><br>
                    <i class="fa fa-envelope frat-email" style="margin-right:12px;"></i>E-mail: <a href="mailto:info@fratnow.com" style="color:#f86e38;">info@fratnow.com</a>
                </p>
              </article>
            </div><!-- End post list item -->
          </div>
        </div>
      </section>
      <section id="map-section">
	      <div class="container" >
          <div class="row gy-4">
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d97654.34571554561!2d-75.251335!3d40.104439!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6bc6cc802e1cb%3A0xd121d777aec0e999!2s5110+Campus+Dr+%23190%2C+Plymouth+Meeting%2C+PA+19462!5e0!3m2!1sen!2sin!4v1467381878984" width="600" height="450" frameborder="0" class="iframe-s-546" allowfullscreen></iframe>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3051.286248377974!2d-75.2639653!3d40.1136239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6bc6cb8814019%3A0x3c077b711a8130ca!2s5110%20Campus%20Dr%20Unit%20120%2C%20Plymouth%20Meeting%2C%20PA%2019462%2C%20USA!5e0!3m2!1sen!2sin!4v1693477345141!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
	    </section>  
</main><!-- End #main -->
  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer-js.php'; ?>
  <script type="text/javascript" src="./js/jquery-1.10.2.min.js"></script>
<script>
    $(function() {
    $(".holder + input").keyup(function() {
        if($(this).val().length) {
            $(this).prev('.holder').hide();
        } else {
            $(this).prev('.holder').show();
        }
    });
    $(".holder").click(function() {
        $(this).next().focus();
    });
});
</script>
<script>
  window.addEventListener('pageshow', function (event) {
    var form = document.getElementById('enquiry-form');
    if (event.persisted || (window.performance && window.performance.navigation.type === 2)) {
      // Page loaded from cache, reset the form
      form.reset();
    }
  });
</script>
<script src="js/validation.js"></script>




  <?php include 'inc/footer-close.php'; ?>