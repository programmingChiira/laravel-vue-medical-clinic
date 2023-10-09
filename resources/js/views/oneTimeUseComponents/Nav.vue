<template>
  <header class="header rs-nav header-transparent">
    <div class="top-bar">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="topbar-left">
            <ul>
              <li>
                <router-link to="/contact">
                  <i class="fa fa-question-circle"></i>Contact us
                </router-link>
              </li>
              <li v-show="institution_email_one">
                <a :href="'mailto:' + institution_email_one">
                  <i class="fa fa-envelope-o"></i> Mail
                </a>
              </li>
              <li v-show="institution_phone_one">
                <a :href="'tel:' + institution_phone_one">
                  <i class="fa fa-phone"></i>Call
                </a>
              </li>
            </ul>
          </div>
          <div class="topbar-right">
            <ul>
              <li v-show="user_role == false" class="dropdown">
                <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i
                    class="fa fa-sign-in"> </i> LOGIN</a>
                <br /><br />
                <ul class="dropdown-menu with-lines d-flex justify-content-center align-items-center">
                  <br />
                  <li><router-link style="color: black;" to="/studentLogin">Student</router-link></li>
                  <div class="dropdown-divider"></div>
                  <li><router-link style="color: black;" to="/parentLogin">Parent</router-link></li>
                  <div class="dropdown-divider"></div>
                  <li><router-link style="color: black;" to="/staffLogin">Staff</router-link></li>
                  <br /><br />
                </ul>
              </li>

              <li v-if="user_role == 'Administrator'">
                <a href="/ui/adminDash">
                  <i class="fa fa-bar-chart"> </i> PORTAL
                </a>
              </li>
              <li v-if="user_role == 'Teacher'">
                <a href="/ui/teacherDash">
                  <i class="fa fa-bar-chart"> </i> PORTAL
                </a>
              </li>
              <li v-if="user_role == 'NonTeaching'">
                <a href="/ui/staffDash">
                  <i class="fa fa-bar-chart"> </i> PORTAL
                </a>
              </li>
              <li v-if="user_role == 'Parent'">
                <a href="/ui/parentDash">
                  <i class="fa fa-bar-chart"> </i> PORTAL
                </a>
              </li>
              <li v-if="user_role == 'Student'">
                <a href="/ui/studentDash">
                  <i class="fa fa-bar-chart"> </i> PORTAL
                </a>
              </li>
            </ul>
          </div>


        </div>
      </div>
    </div>
    <div class="sticky-header navbar-expand-lg">
      <div class="menu-bar clearfix">
        <div class="container clearfix">
          <!-- Header Logo ==== -->
          <div class="menu-logo">
            <router-link to="/">
              <img v-show="! institution_logo" style="border-radius: 10px;" src="assets/images/logo.png" alt="institution_name">
              <img v-show="institution_logo" style="border-radius: 10px;" :src="institution_logo" :alt="institution_name">
            </router-link>
          </div>
          <!-- Mobile Nav Button ==== -->
          <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse"
            data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <!-- Author Nav ==== -->

          <!-- Navigation Menu ==== -->
          <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
            <ul class="nav navbar-nav">
              <li :class="{ active: $route.path === '/' }">
                <router-link to="/">Home</router-link>
              </li>

              <li :class="{ active: $route.path === '/about' }">
                <router-link to="/about">About</router-link>
              </li>

              <li :class="{ active: $route.path === '/events' }">
                <router-link to="/events">Events</router-link>
              </li>

              <li :class="{ active: $route.path === '/courses' }">
                <router-link to="/courses">Subjects</router-link>
              </li>

              <li :class="{ active: $route.path === '/enrollment' }">
                <router-link to="/enrollment">Enrollment</router-link>
              </li>
              <li :class="{ active: $route.path === '/articles' }">
                <router-link to="/articles">Articles</router-link>
              </li>
              <li :class="{ active: $route.path === '/gallery' }">
                <router-link to="/gallery">Gallery</router-link>
              </li>
              <li :class="{ active: $route.path === '/contact' }">
                <router-link to="/contact">Contact us</router-link>
              </li>

            </ul>
            <div class="nav-social-link">
              <a href="javascript:;"><i class="fa fa-facebook"></i></a>
              <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      id: "",
      last_name: "",
      user_role: "",
      settings: [],
      institution_logo: "",
      institution_name: "",
      institution_email_one: "",
      institution_phone_one: "",
    };
  },

  mounted() {
    console.log('Component mounted.')
    this.fetchSettings();
    this.fetchUser();
  },

  methods: {
    fetchUser() {
      axios
        .get("/api/user")
        //.then((response) => (this.id = response.data.id))
        .then(response => {
          this.id = response.data.id
          this.last_name = response.data.last_name
          this.user_role = response.data.user_role
        })
        .catch((error) => {
          if (error.response.status === 401) {
            this.$emit("updateSidebar");
            localStorage.removeItem("authenticated");
          }
        });

      if (localStorage.getItem("authenticated")) {
        this.loggedIn = true;
      } else {
        this.loggedIn = false;
      }
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
            this.institution_email_one = settingsData.institution_email_one;
            this.institution_phone_one = settingsData.institution_phone_one;
          }
        })
        .catch(error => {
          console.error(error);
        });
    },
  },


}
</script>

<style scoped>
@media all {

  .dropdown>.dropdown-menu,
  .dropdown.open>.dropdown-menu {
    display: block !important;
    opacity: 0;
    visibility: hidden;
    transition: all ease 0.2s;
  }

  .dropdown:hover>.dropdown-menu,
  .dropdown.open:hover>.dropdown-menu {
    opacity: 1;
    visibility: visible;
  }
}
</style>