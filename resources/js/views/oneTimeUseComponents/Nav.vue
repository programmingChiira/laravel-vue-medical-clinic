<template>
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Orthoc
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item" :class="{ active: $route.path === '/' }">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" :class="{ active: $route.path === '/about' }">
              <a class="nav-link" href="/about"> About</a>
            </li>
            <li class="nav-item" :class="{ active: $route.path === '/departments' }">
              <a class="nav-link" href="/departments">Departments</a>
            </li>
            <li class="nav-item" :class="{ active: $route.path === '/doctors' }">
              <a class="nav-link" href="/doctors">Doctors</a>
            </li>
            <li class="nav-item" :class="{ active: $route.path === '/contact' }">
              <a class="nav-link" href="/contact">Contact Us</a>
            </li>
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
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