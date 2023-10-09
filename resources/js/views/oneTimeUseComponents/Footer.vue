<!-- Home.vue -->
<template>
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <router-link to="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </router-link>
              <router-link to="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call 0712345678
                </span>
              </router-link>
              <router-link to="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  eastek@gmail.com
                </span>
              </router-link>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
              Beatae provident nobis mollitia magnam voluptatum, unde dicta facilis minima veniam corporis laudantium alias tenetur eveniet illum reprehenderit fugit a delectus officiis blanditiis ea.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <router-link class="active" to="/">
                Home
              </router-link>
              <router-link class="" to="/about">
                About
              </router-link>
              <router-link class="" to="/departments">
                Departments
              </router-link>
              <router-link class="" to="/doctors">
                Doctors
              </router-link>
              <router-link class="" to="/contact">
                Contact Us
              </router-link>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col ">
          <h4>
            Newsletter
          </h4>
          <form action="#">
            <input type="email" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <router-link to="/">Eastek<br><br></router-link>
        </p>
       
      </div>  
    </div>
  </footer>
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
  