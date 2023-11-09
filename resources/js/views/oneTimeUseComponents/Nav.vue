<template>
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <router-link class="navbar-brand" to="/">
          <span>
            Medic
          </span>
        </router-link>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span style="width: 30px;" class=""> </span>
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

            <li class="nav-item dropdown">
              <a style="color: white;" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-sign-in"> </i> AUTH</a>
                <ul style="text-align: center;" class="dropdown-menu d-flex justify-content-center align-items-center">
                  <li><router-link style="color: black;" to="/login">Login</router-link></li>
                  <div class="dropdown-divider"></div>
                  <li><router-link style="color: black;" to="/register">Register</router-link></li>
                  <div class="dropdown-divider"></div>
                  <li><router-link style="color: black;" to="/dashboard">Dashboard</router-link></li>
                </ul>
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
      //
    };
  },

  mounted() {
    console.log('Component mounted.')
  },

  methods: {
    //
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

/* Additional CSS for dropdown menu */

.navbar-nav .dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  float: none;
  min-width: 10rem;
}

.navbar-nav .dropdown-menu a {
  display: block;
  width: 100%;
  padding: 0.5rem 1rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.navbar-nav .dropdown-menu a:hover {
  color: #0d6efd;
  background-color: #e9ecef;
}

.dropdown-divider {
  border-top: 1px solid #ccc; /* Add a divider line */
  margin: 5px 0; /* Adjust vertical spacing */
}
</style>