<template>
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <router-link class="navbar-brand" to="/">
          <span>
            Medic
          </span>
        </router-link>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item" :class="{ active: $route.path === '/' }">
              <router-link class="nav-link" to="/">Home <span class="sr-only">(current)</span></router-link>
            </li>
            <li class="nav-item" :class="{ active: $route.path === '/about' }">
              <router-link class="nav-link" to="/about"> About</router-link>
            </li>
            <li class="nav-item" :class="{ active: $route.path === '/departments' }">
              <router-link class="nav-link" to="/departments">Departments</router-link>
            </li>
            <li class="nav-item" :class="{ active: $route.path === '/doctors' }">
              <router-link class="nav-link" to="/doctors">Doctors</router-link>
            </li>
            <li class="nav-item" :class="{ active: $route.path === '/appointments' }">
              <router-link class="nav-link" to="/appointments">Appointments</router-link>
            </li>
            <li class="nav-item" :class="{ active: $route.path === '/contact' }">
              <router-link class="nav-link" to="/contact">Contact Us</router-link>
            </li>
          </ul>
        </div>
      </nav>
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