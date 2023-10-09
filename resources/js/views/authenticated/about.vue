<template>
  <body class="sub_page">
    <div class="hero_area">
      <Nav></Nav>
    </div>
    <section class="about_section layout_padding">
      <div class="container  ">
        <div class="row">
          <div class="col-md-6 ">
            <div class="img-box">
              <img src="authenticated/images/about-img.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  About <span>Us</span>
                </h2>
              </div>
              <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                the middle of text. All
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

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
      carousels: [],
      settings: [],
      institution_first_carousel: "",
      institution_second_carousel: "",
      institution_third_carousel: "",
      institution_logo: "",
      institution_name: "",
      institution_year_of_starting: "",
      institution_email_one: "",
      institution_email_two: "",
      institution_phone_one: "",
      institution_phone_two: "",
      institution_county: "",
      institution_address: "",
      institution_pinned_location: "",
      institution_type: "",
      institution_mode: "",
      institution_gender_distro: "",
      institution_welcome_message: "",
      institution_mission_and_vision: "",
    };
  },

  mounted() {
    document.title = 'Home :- Intelligent system';

    this.fetchCarousels();
    this.fetchSettings();
  },
  methods: {
    fetchCarousels() {
      axios.get('/api/institutionCarousels')
        .then(response => {
          this.carousels = response.data.data;
          if (this.carousels.length > 0) {

            const carouselsData = this.carousels[0];
            this.id = carouselsData.id;
            this.institution_first_carousel = carouselsData.institution_first_carousel;
            this.institution_second_carousel = carouselsData.institution_second_carousel;
            this.institution_third_carousel = carouselsData.institution_third_carousel;
          }
        })
        .catch(error => {
          console.error(error);
        });
    },

    fetchSettings() {
      axios.get('/api/institutionGeneralSettings')
        .then(response => {
          this.settings = response.data.data;
          if (this.settings.length > 0) {

            const settingsData = this.settings[0];
            this.id = settingsData.id;
            this.institution_logo = settingsData.institution_logo;
            this.institution_name = settingsData.institution_name;
            this.institution_year_of_starting = settingsData.institution_year_of_starting;
            this.institution_email_one = settingsData.institution_email_one;
            this.institution_email_two = settingsData.institution_email_two;
            this.institution_phone_one = settingsData.institution_phone_one;
            this.institution_phone_two = settingsData.institution_phone_two;
            this.institution_county = settingsData.institution_county;
            this.institution_address = settingsData.institution_address;
            this.institution_pinned_location = settingsData.institution_pinned_location;
            this.institution_type = settingsData.institution_type;
            this.institution_mode = settingsData.institution_mode;
            this.institution_gender_distro = settingsData.institution_gender_distro;
            this.institution_welcome_message = settingsData.institution_welcome_message;
            this.institution_mission_and_vision = settingsData.institution_mission_and_vision;
          }
        })
        .catch(error => {
          console.error(error);
        });
    },
  },
};
</script>