<!-- Home.vue -->
<template>
  <div class="page-wraper">
    <Nav></Nav>
    <div class="page-content bg-white">
      <header>
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <div style="height: 60vh;" class="carousel-inner" role="listbox">

            <div class="carousel-item active dark-overlay"
              style="background-image: url('assets/images/slider/slide1.jpg'); background-size: cover;">
              <div class="caption">
                <h2 style="color:white;font-size:35px;">First slider</h2>
              </div>
            </div>


            <div class="carousel-item dark-overlay"
              style="background-image: url('assets/images/slider/slide2.jpg'); background-size: cover;">
              <div class="caption">
                <h2 style="color:white;font-size:35px;">Second slider</h2>
              </div>
            </div>
            <div class="carousel-item dark-overlay"
              style="background-image: url('assets/images/slider/slide1.jpg'); background-size: cover;">
              <div class="caption">
                <h2 style="color:white;font-size:35px;">Third slider</h2>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-toggle-left">
              <rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect>
              <circle cx="8" cy="12" r="3"></circle>
            </svg>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-toggle-right">
              <rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect>
              <circle cx="16" cy="12" r="3"></circle>
            </svg>
          </a>
        </div>
      </header>

      <br />
      <br />

      <div class="content-block">
        <!-- Our Services -->
        <div class="section-area content-inner service-info-bx">
          <div class="container">
            <div class="row">

              <div style="margin-top: 30px;" class="col-lg-4 col-md-4 col-sm-6">
                <div class="service-bx">
                  <div class="action-box">
                  </div>
                  <div class="info-bx text-center">
                    <div class="feature-box-sm radius bg-white">
                      <i class="fa fa-bank text-primary"></i>
                    </div>
                    <h4><a href="#">Best Industry Leaders</a></h4>
                    <a href="#" class="btn radius-xl">View More</a>
                  </div>
                </div>
              </div>

              <div style="margin-top: 30px;" class="col-lg-4 col-md-4 col-sm-6">
                <div class="service-bx">
                  <div class="action-box">
                  </div>
                  <div class="info-bx text-center">
                    <div class="feature-box-sm radius bg-white">
                      <i class="fa fa-book text-primary"></i>
                    </div>
                    <h4><a href="#">Learn Courses Online</a></h4>
                    <a href="#" class="btn radius-xl">View More</a>
                  </div>
                </div>
              </div>

              <div style="margin-top: 30px;" class="col-lg-4 col-md-4 col-sm-12">
                <div class="service-bx m-b0">
                  <div class="action-box">
                  </div>
                  <div class="info-bx text-center">
                    <div class="feature-box-sm radius bg-white">
                      <i class="fa fa-file-text-o text-primary"></i>
                    </div>
                    <h4><a href="#">Book Library & Store</a></h4>
                    <a href="#" class="btn radius-xl">View More</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Popular Courses -->

        <div class="section-area section-sp2 popular-courses-bx">
          <div class="container">
            <div class="row">
              <div class="col-md-12 heading-bx left">
                <h2 class="title-head">Courses</h2>
              </div>
            </div>
            <div class="row">
              <div style="margin-bottom: 10px;" class="col-md-3 col-12">
                <div class="cours-bx">
                  <div class="action-box">
                    <img src="/assets/images/courses/pic1.jpg" alt>
                    <a href="#" class="btn">Read More</a>
                  </div>
                  <div class="info-bx text-center">
                    <h5><a href="#">Introduction EduChamp – LMS plugin</a></h5>
                    <span>Programming</span>
                  </div>
                  <div class="cours-more-info">
                    <div class="review">
                      <span>3 Review</span>
                      <ul class="cours-star">
                        <li class="active"><i class="fa fa-star"></i></li>
                        <li class="active"><i class="fa fa-star"></i></li>
                        <li class="active"><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="price">
                      <del>$190</del>
                      <h5>$120</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div style="margin-bottom: 10px;" class="col-md-3 col-12">
                <div class="cours-bx">
                  <div class="action-box">
                    <img src="/assets/images/courses/pic2.jpg" alt>
                    <a href="#" class="btn">Read More</a>
                  </div>
                  <div class="info-bx text-center">
                    <h5><a href="#">Introduction EduChamp – LMS plugin</a></h5>
                    <span>Programming</span>
                  </div>
                  <div class="cours-more-info">
                    <div class="review">
                      <span>3 Review</span>
                      <ul class="cours-star">
                        <li class="active"><i class="fa fa-star"></i></li>
                        <li class="active"><i class="fa fa-star"></i></li>
                        <li class="active"><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="price">
                      <del>$190</del>
                      <h5>$120</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div style="margin-bottom: 10px;" class="col-md-3 col-12">
                <div class="cours-bx">
                  <div class="action-box">
                    <img src="/assets/images/courses/pic3.jpg" alt>
                    <a href="#" class="btn">Read More</a>
                  </div>
                  <div class="info-bx text-center">
                    <h5><a href="#">Introduction EduChamp – LMS plugin</a></h5>
                    <span>Programming</span>
                  </div>
                  <div class="cours-more-info">
                    <div class="review">
                      <span>3 Review</span>
                      <ul class="cours-star">
                        <li class="active"><i class="fa fa-star"></i></li>
                        <li class="active"><i class="fa fa-star"></i></li>
                        <li class="active"><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="price">
                      <del>$190</del>
                      <h5>$120</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div style="margin-bottom: 10px;" class="col-md-3 col-12">
                <div class="cours-bx">
                  <div class="action-box">
                    <img src="/assets/images/courses/pic4.jpg" alt>
                    <a href="#" class="btn">Read More</a>
                  </div>
                  <div class="info-bx text-center">
                    <h5><a href="#">Introduction EduChamp – LMS plugin</a></h5>
                    <span>Programming</span>
                  </div>
                  <div class="cours-more-info">
                    <div class="review">
                      <span>3 Review</span>
                      <ul class="cours-star">
                        <li class="active"><i class="fa fa-star"></i></li>
                        <li class="active"><i class="fa fa-star"></i></li>
                        <li class="active"><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="price">
                      <del>$190</del>
                      <h5>$120</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Popular Courses END -->

        <!-- Form -->
        <div class="section-area section-sp1 ovpr-dark bg-fix online-cours"
          style="background-image:url(assets/images/background/bg1.jpg);">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center text-white">
                <h2>Online Courses To Learn</h2>
                <h5>Own Your Feature Learning New Skills Online</h5>
                <form class="cours-search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="What do you want to learn today?	">
                    <div class="input-group-append">
                      <button class="btn" type="submit">Search</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="mw800 m-auto">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="cours-search-bx m-b30">
                    <div class="icon-box">
                      <h3><i class="ti-user"></i><span class="counter">5</span>M</h3>
                    </div>
                    <span class="cours-search-text">Over 5 million student</span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="cours-search-bx m-b30">
                    <div class="icon-box">
                      <h3><i class="ti-book"></i><span class="counter">30</span>K</h3>
                    </div>
                    <span class="cours-search-text">30,000 Courses.</span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12">
                  <div class="cours-search-bx m-b30">
                    <div class="icon-box">
                      <h3><i class="ti-layout-list-post"></i><span class="counter">20</span>K</h3>
                    </div>
                    <span class="cours-search-text">Learn Anythink Online.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Form END -->
        <div class="section-area section-sp2">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center heading-bx">
                <h2 class="title-head m-b0">Upcoming <span>Events</span></h2>
                <p class="m-b0">Upcoming Education Events To Feed Brain. </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="event-bx">
                  <div class="info-bx d-flex">
                    <div class="event-info">
                      <h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
                      <ul class="media-post">
                        <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                        <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                      </ul>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the..</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="event-bx">
                  <div class="info-bx d-flex">
                    <div class="event-info">
                      <h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
                      <ul class="media-post">
                        <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                        <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                      </ul>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the..</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="event-bx">
                  <div class="info-bx d-flex">
                    <div class="event-info">
                      <h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
                      <ul class="media-post">
                        <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                        <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                      </ul>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the..</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br />
            <div class="text-center">
              <a href="#" class="btn">View All Event</a>
            </div>
          </div>
        </div>

        <!-- Testimonials -->
        <div class="section-area section-sp2 bg-fix ovbl-dark"
          style="background-image:url(assets/images/background/bg1.jpg);">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-white heading-bx left">
                <h2 class="title-head text-uppercase">what people <span>say</span></h2>
              </div>
            </div>

            <div class="col-12 col-md-12">
              <div class="testimonial-bx">
                <div class="testimonial-thumb">
                  <img src="/assets/images/testimonials/pic1.jpg" alt>
                </div>
                <div class="testimonial-info">
                  <h5 class="name">Peter Packer</h5>
                  <p>-Art Director</p>
                </div>
                <div class="testimonial-content">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of
                    type...</p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- Testimonials END -->

        <!-- Recent News -->
        <div class="section-area section-sp2">
          <div class="container">
            <div class="row">
              <div class="col-md-12 heading-bx left">
                <h2 class="title-head">Articles <span>News</span></h2>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="recent-news">
                  <div class="action-box">
                    <img src="/assets/images/blog/latest-blog/pic1.jpg" alt>
                  </div>
                  <div class="info-bx">
                    <ul class="media-post">
                      <li><a href="#"><i class="fa fa-calendar"></i>Jan 02 2019</a></li>
                      <li><a href="#"><i class="fa fa-user"></i>By William</a></li>
                    </ul>
                    <h5 class="post-title"><a href="blog-details.html">This Story Behind
                        Education Will Haunt You Forever.</a></h5>
                    <p>Knowing that, you’ve optimised your pages countless amount of
                      times, written tons.</p>
                    <div class="post-extra">
                      <a href="#" class="btn-link">READ MORE</a>
                      <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20
                        Comment</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="recent-news">
                  <div class="action-box">
                    <img src="/assets/images/blog/latest-blog/pic2.jpg" alt>
                  </div>
                  <div class="info-bx">
                    <ul class="media-post">
                      <li><a href="#"><i class="fa fa-calendar"></i>Feb 05 2019</a></li>
                      <li><a href="#"><i class="fa fa-user"></i>By John</a></li>
                    </ul>
                    <h5 class="post-title"><a href="blog-details.html">What Will
                        Education Be Like In The Next 50 Years?</a></h5>
                    <p>As desperate as you are right now, you have done everything you
                      can on your.</p>
                    <div class="post-extra">
                      <a href="#" class="btn-link">READ MORE</a>
                      <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>14
                        Comment</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="recent-news">
                  <div class="action-box">
                    <img src="/assets/images/blog/latest-blog/pic3.jpg" alt>
                  </div>
                  <div class="info-bx">
                    <ul class="media-post">
                      <li><a href="#"><i class="fa fa-calendar"></i>April 14 2019</a></li>
                      <li><a href="#"><i class="fa fa-user"></i>By George</a></li>
                    </ul>
                    <h5 class="post-title"><a href="blog-details.html">Master The Skills
                        Of Education And Be.</a></h5>
                    <p>You will see in the guide all my years of valuable experience
                      together with.</p>
                    <div class="post-extra">
                      <a href="#" class="btn-link">READ MORE</a>
                      <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>23
                        Comment</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Recent News End -->

      </div>
      <!-- contact area END -->
    </div>
    <!-- Content END-->
    <!-- Footer ==== -->
    <Footer></Footer>

    <!-- Footer END ==== -->
  </div>
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

<style scoped>
.dark-overlay {
  position: relative;
}

.dark-overlay::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.63);
  /* Adjust the opacity (last value) to make it darker or lighter */
}

.carousel-inner {
  width: 100%;
  display: inline-block;
  position: relative;
}

.carousel-inner {
  padding-top: 43.25%;
  display: block;
  content: "";
}

.carousel-item {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  background: skyblue;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.caption {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  width: 60%;
  z-index: 9;
  margin-top: 20px;
  text-align: center;
}

.caption h1 {
  color: #fff;
  font-size: 52px;
  font-weight: 700;
  margin-bottom: 23px;
}

.caption h2 {
  color: rgba(255, 255, 255, .75);
  font-size: 26px;
  font-weight: 300;
}

a.big-button {
  color: #fff;
  font-size: 19px;
  font-weight: 700;
  text-transform: uppercase;
  background: #eb7a00;
  background: rgba(255, 0, 0, 0.75);
  padding: 28px 35px;
  border-radius: 3px;
  margin-top: 80px;
  margin-bottom: 0;
  display: inline-block;
}

a.big-button:hover {
  text-decoration: none;
  background: rgba(255, 0, 0, 0.9);
}

a.view-demo {
  color: #fff;
  font-size: 21px;
  font-weight: 700;
  display: inline-block;
  margin-top: 35px;
}

a.view-demo:hover {
  text-decoration: none;
  color: #333;
}

.carousel-indicators .active {
  background: #fff;
}

.carousel-indicators li {
  background: rgba(255, 255, 255, 0.4);
  border-top: 20px solid;
  z-index: 15;
}
</style>