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

    <!-- department section -->

    <section class="department_section layout_padding">
      <div class="department_container">
        <div class="container ">
          <div class="heading_container heading_center">
            <h2>
              Our Departments
            </h2>
            <p>
              Asperiores sunt consectetur impedit nulla molestiae delectus repellat laborum dolores doloremque accusantium
            </p>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="box ">
                <div class="img-box">
                  <img src="authenticated/images/s1.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Cardiology
                  </h5>
                  <p>
                    fact that a reader will be distracted by the readable page when looking at its layout.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box ">
                <div class="img-box">
                  <img src="authenticated/images/s2.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Diagnosis
                  </h5>
                  <p>
                    fact that a reader will be distracted by the readable page when looking at its layout.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box ">
                <div class="img-box">
                  <img src="authenticated/images/s3.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Surgery
                  </h5>
                  <p>
                    fact that a reader will be distracted by the readable page when looking at its layout.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box ">
                <div class="img-box">
                  <img src="authenticated/images/s4.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    First Aid
                  </h5>
                  <p>
                    fact that a reader will be distracted by the readable page when looking at its layout.
                  </p>
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
      </div>
    </section>

    <!-- end department section -->

    <!-- footer section -->
    <Footer></Footer>

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