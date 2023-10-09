<!-- About.vue -->
<template>
  <div class="page-wraper">
    <Nav></Nav>
    <div class="page-content">
      <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
        <div class="container">
          <div class="page-banner-entry">
            <br />
            <br />
            <h1 class="text-white">About Us</h1>
          </div>
        </div>
      </div>
      <div class="breadcrumb-row">
        <div class="container">
          <ul class="list-inline">
            <li><router-link to="/">Home</router-link></li>
            <li>About Us</li>
          </ul>
        </div>
      </div>
      
      <div class="content-block">
        <div class="section-area section-sp1">
          <div class="container">
            <div class="row">

              <div style="margin-top: 20px; margin-bottom: 20px;text-align: center;padding:10px;"
                class="col-6 col-md-3  d-flex justify-content-center align-items-center">
                <div class="feature-container">
                  <div class="feature-md text-white m-b20">
                    <a href="#" class="icon-cell">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                      </svg>
                    </a>
                  </div>
                  <div class="icon-content">
                    <h6>Institution :</h6>
                    <p v-show="! institution_name"> <i>empty</i> </p>
                    <p v-show="institution_name"> {{ institution_name }} </p>
                  </div>
                </div>
              </div>
              <div style="margin-top: 20px; margin-bottom: 20px;text-align: center;padding:10px;"
                class="col-6 col-md-3  d-flex justify-content-center align-items-center">
                <div class="feature-container">
                  <div class="feature-md text-white m-b20">
                    <a href="#" class="icon-cell">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-calendar">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                      </svg>
                    </a>
                  </div>
                  <div class="icon-content">
                    <h6>Started in :</h6>
                    <p v-show="! institution_year_of_starting"> <i>empty</i> </p>
                    <p v-show="institution_year_of_starting"> {{ institution_year_of_starting }} </p>
                  </div>
                </div>
              </div>
              <div style="margin-top: 20px; margin-bottom: 20px;text-align: center;padding:10px;"
                class="col-6 col-md-3  d-flex justify-content-center align-items-center">
                <div class="feature-container">
                  <div class="feature-md text-white m-b20">
                    <a href="#" class="icon-cell">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-grid">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                      </svg>
                    </a>
                  </div>
                  <div class="icon-content">
                    <h6>Type :</h6>
                    <p v-show="! institution_type"> <i>empty</i> </p>
                    <p v-show="institution_type"> {{ institution_type }} </p>
                  </div>
                </div>
              </div>
              <div style="margin-top: 20px; margin-bottom: 20px;text-align: center;padding:10px;"
                class="col-6 col-md-3  d-flex justify-content-center align-items-center">
                <div class="feature-container">
                  <div class="feature-md text-white m-b20">
                    <a href="#" class="icon-cell">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-cpu">
                        <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                        <rect x="9" y="9" width="6" height="6"></rect>
                        <line x1="9" y1="1" x2="9" y2="4"></line>
                        <line x1="15" y1="1" x2="15" y2="4"></line>
                        <line x1="9" y1="20" x2="9" y2="23"></line>
                        <line x1="15" y1="20" x2="15" y2="23"></line>
                        <line x1="20" y1="9" x2="23" y2="9"></line>
                        <line x1="20" y1="14" x2="23" y2="14"></line>
                        <line x1="1" y1="9" x2="4" y2="9"></line>
                        <line x1="1" y1="14" x2="4" y2="14"></line>
                      </svg>
                    </a>
                  </div>
                  <div class="icon-content">
                    <h6>Mode :</h6>
                    <p v-show="! institution_mode"> <i>empty</i> </p>
                    <p v-show="institution_mode"> {{ institution_mode }} </p>
                  </div>
                </div>
              </div>

              <div style="margin-top: 20px; margin-bottom: 20px;text-align: center;padding:10px;"
                class="col-6 col-md-3  d-flex justify-content-center align-items-center">
                <div class="feature-container">
                  <div class="feature-md text-white m-b20">
                    <a href="#" class="icon-cell">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-map">
                        <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                        <line x1="8" y1="2" x2="8" y2="18"></line>
                        <line x1="16" y1="6" x2="16" y2="22"></line>
                      </svg>
                    </a>
                  </div>
                  <div class="icon-content">
                    <h6>County :</h6>
                    <p v-show="! institution_county"> <i>empty</i> </p>
                    <p v-show="institution_county"> {{ institution_county }} </p>
                  </div>
                </div>
              </div>
              <div style="margin-top: 20px; margin-bottom: 20px;text-align: center;padding:10px;"
                class="col-6 col-md-3  d-flex justify-content-center align-items-center">
                <div class="feature-container">
                  <div class="feature-md text-white m-b20">
                    <a href="#" class="icon-cell">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-maximize">
                        <path
                          d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                        </path>
                      </svg>
                    </a>
                  </div>
                  <div class="icon-content">
                    <h6>Address :</h6>
                    <p v-show="! institution_address"> <i>empty</i> </p>
                    <p v-show="institution_address"> {{ institution_address }} </p>
                  </div>
                </div>
              </div>
              <div style="margin-top: 20px; margin-bottom: 20px;text-align: center;padding:10px;"
                class="col-6 col-md-3  d-flex justify-content-center align-items-center">
                <div class="feature-container">
                  <div class="feature-md text-white m-b20">
                    <a href="#" class="icon-cell">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-map-pin">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                      </svg>
                    </a>
                  </div>
                  <div class="icon-content">
                    <h6>Location : </h6>
                    <a v-show="! institution_pinned_location" href="#"> Empty</a>
                    <a v-show="institution_pinned_location" target="_blank" :href="institution_pinned_location"> Click</a>
                  </div>
                </div>
              </div>
              <div style="margin-top: 20px; margin-bottom: 20px;text-align: center;padding:10px;"
                class="col-6 col-md-3  d-flex justify-content-center align-items-center">
                <div class="feature-container">
                  <div class="feature-md text-white m-b20">
                    <a href="#" class="icon-cell">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                      </svg>
                    </a>
                  </div>
                  <div class="icon-content">
                    <h6>Students : </h6>
                    <p v-show="! institution_gender_distro"> <i>empty</i> </p>
                    <p v-show="institution_gender_distro"> {{ institution_gender_distro }} </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- About Us END ==== -->
        <!-- Our Story ==== -->
        <div class="section-area bg-gray section-sp1 our-story">
          <div class="container">
            <div class="row align-items-center d-flex">
              <div class="col-lg-12 col-md-12 heading-bx">
                <h2 class="m-b10">Our Story</h2>
                <h5 class="fw4">It is a long established fact that a reade.</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                  has been the industry's standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type specimen book. It has
                  survived not only five centuries, but also the leap into electronic typesetting,
                  remaining essentially unchanged.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center"
          style="background-image:url(assets/images/background/bg1.jpg);">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="join-content-bx text-white">
                  <h4><span class="counter">57,000 </span> Online Courses</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen
                    book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                    an unknown printer took a galley of type and scrambled it to make a type specimen
                    book.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- About Content END ==== -->
        <!-- Testimonials ==== -->
        <div class="section-area section-sp2">
          <div class="container">
            <div class="row">
              <div class="col-md-12 heading-bx left">
                <h2 class="title-head text-uppercase">Leadership</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="testimonial-bx">
                  <div class="testimonial-thumb">
                    <img src="assets/images/testimonials/pic1.jpg" alt="">
                  </div>
                  <div class="testimonial-info">
                    <h5 class="name">Peter Packer</h5>
                    <p>-Art Director</p>
                  </div>
                  <div class="testimonial-content">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                      Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                      unknown printer took a galley of type...</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="testimonial-bx">
                  <div class="testimonial-thumb">
                    <img src="assets/images/testimonials/pic2.jpg" alt="">
                  </div>
                  <div class="testimonial-info">
                    <h5 class="name">Peter Packer</h5>
                    <p>-Art Director</p>
                  </div>
                  <div class="testimonial-content">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                      Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                      unknown printer took a galley of type...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Testimonials END ==== -->
      </div>
      <!-- Page Content Box END ==== -->
    </div>
    <!-- Inner Content Box END ==== -->
    <!-- Footer ==== -->
    <Footer></Footer>
    <!-- Footer END ==== -->
  </div>
</template>
  
<script>
import axios from 'axios';
import Footer from '@/views/oneTimeUseComponents/Footer.vue';
import Nav from '@/views/oneTimeUseComponents/Nav.vue'

export default {
  components: {
    Footer,
    Nav,
  },

  data() {
    return {
      settings: [],
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
    document.title = 'About us :- Intelligent system';
    this.fetchSettings();
  },

  methods: {
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
  }
};
</script>
  