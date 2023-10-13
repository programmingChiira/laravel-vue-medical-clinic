<template>
  <body class="sub_page">

    <div class="hero_area">

      <div class="hero_bg_box">
        <img src="authenticated/images/hero-bg.png" alt="">
      </div>

      <!-- header section strats -->
      <Nav></Nav>
      <!-- end header section -->
    </div>

    <!-- doctor section -->

    <section class="doctor_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Our Doctors
          </h2>
          <p class="col-md-10 mx-auto px-0">
            Incilint sapiente illo quo praesentium officiis laudantium nostrum, ad adipisci cupiditate sit, quisquam
            aliquid. Officiis laudantium fuga ad voluptas aspernatur error fugiat quos facilis saepe quas fugit, beatae id
            quisquam.
          </p>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
                <img src="authenticated/images/d1.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                </div>
                <h5>
                  Elina Josh
                </h5>
                <h6 class="">
                  Doctor
                </h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
                <img src="authenticated/images/d2.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                </div>
                <h5>
                  Adam View
                </h5>
                <h6 class="">
                  Doctor
                </h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mx-auto">
            <div class="box">
              <div class="img-box">
                <img src="authenticated/images/d3.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                </div>
                <h5>
                  Mia Mike
                </h5>
                <h6 class="">
                  Doctor
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            View All
          </a>
        </div>
      </div>
    </section>

    <!-- end doctor section -->

    <!-- footer section -->
    <Footer></Footer>
    <!-- footer section -->

  </body>
</template>

<script>
import axios from 'axios';
import Footer from '@/views/oneTimeUseComponents/Footer.vue';
import Nav from '@/views/oneTimeUseComponents/Nav.vue';

export default {
  components: {
    Footer,
    Nav,
  },

  data() {
    return {
      //
    };
  },

  mounted() {
    document.title = 'Home :- Intelligent system';
  },
  methods: {
    //
  },
};
</script>