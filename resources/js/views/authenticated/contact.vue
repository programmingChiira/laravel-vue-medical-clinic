<template>
  <body class="sub_page">
    <div class="hero_area">
      <Nav></Nav>
    </div>

    <!-- contact section -->
    <section class="contact_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            Get In Touch
          </h2>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form_container contact-form">
              <form action="">
                <div class="form-row">
                  <div class="col-lg-6">
                    <div>
                      <input type="text" placeholder="Your Name" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div>
                      <input type="text" placeholder="Phone Number" />
                    </div>
                  </div>
                </div>
                <div>
                  <input type="email" placeholder="Email" />
                </div>
                <div>
                  <input type="text" class="message-box" placeholder="Message" />
                </div>
                <div class="btn_box">
                  <button>
                    SEND
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end contact section -->

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