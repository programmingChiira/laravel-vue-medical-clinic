<!-- Home.vue -->
<template>
  <div class="page-wraper">
    <footer>
      <div class="footer-top">
        <br />
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 footer-col-4">
              <div class="widget">
                <h5 class="footer-title">Sign Up For A Newsletter</h5>
                <p class="text-capitalize m-b20">Weekly Breaking news analysis and
                  cutting edge advices on job searching.</p>
                <div class="subscribe-form m-b20">
                  <form class="subscription-form"
                    action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
                    <div class="ajax-message"></div>
                    <div class="input-group">
                      <input name="email" required="required" class="form-control" placeholder="Your Email Address"
                        type="email">
                      <span class="input-group-btn">
                        <button name="submit" value="Submit" type="submit" class="btn"><i
                            class="fa fa-arrow-right"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-5 col-md-7 col-sm-12">
              <div class="row">
                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                  <div class="widget footer_widget">
                    <h5 class="footer-title">Insitution</h5>
                    <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="about-1.html">About</a></li>
                      <li><a href="faq-1.html">FAQs</a></li>
                      <li><a href="contact-1.html">Contact</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                  <div class="widget footer_widget">
                    <h5 class="footer-title">Get In Touch</h5>
                    <ul>
                      <li><a href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a></li>
                      <li><a href="blog-classic-grid.html">Blog</a></li>
                      <li><a href="portfolio.html">Portfolio</a></li>
                      <li><a href="event.html">Event</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                  <div class="widget footer_widget">
                    <h5 class="footer-title">Courses</h5>
                    <ul>
                      <li><a href="courses.html">Courses</a></li>
                      <li><a href="courses-details.html">Details</a></li>
                      <li><a href="membership.html">Membership</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center"><a target="_blank"
                href="https://www.templateshub.net">Templates Hub</a></div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer END ==== -->
    <button id="scrollToTop" class="back-to-top fa fa-chevron-up"></button>

  </div>
</template>
  
<script>
export default {
  // Component options  
  mounted() {
    window.scrollTo(0, 0);
    
    const scrollToTopButton = document.getElementById('scrollToTop');
    if (scrollToTopButton) {
      scrollToTopButton.addEventListener('click', () => {
        // Smoothly scroll to the top of the page
        window.scrollTo({
          top: 0,
          behavior: 'smooth',
        });
      });
    }
  },
};
</script>
  