<template>
  <body class="">
    <main class="main-content  mt-0">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-2 mt-5">Welcome!</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for
                free.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <p> 
                  <router-link style="border-bottom: 1px solid black;" to="/"> <i class="fa fa-home"></i> Home</router-link>
                </p>
                <h5>Register with</h5>
              </div>
              <div class="row px-xl-5 px-sm-4 px-3">

                <div class="col-6 px-1">
                  <a class="btn btn-outline-light w-100" href="https://github.com">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M7.9998 0C3.5827 0 0 3.5828 0 8.0001c0 3.5369 2.2814 6.5333 5.447 7.5999.4.074.549-.174.549-.387v-1.351c-2.2245.486-2.695-.534-2.695-.534-.364-.926-.889-1.174-.889-1.174-.726-.494.055-.483.055-.483.804.057 1.226.827 1.226.827.713 1.221 1.871.87 2.327.666.072-.517.278-.87.506-1.07-1.772-.2-3.633-.886-3.633-3.936 0-.868.31-1.578.818-2.133-.083-.2-.355-1.006.077-2.097 0 0 .665-.212 2.176.812.632-.177 1.31-.265 1.983-.268.675.003 1.353.091 1.985.268 1.51-1.024 2.174-.812 2.174-.812.434 1.091.163 1.897.08 2.097.509.555.816 1.265.816 2.133 0 3.056-1.864 3.734-3.641 3.932.287.247.543.733.543 1.478v2.196c0 .213.146.464.553.386 3.162-1.066 5.441-4.063 5.441-7.5999C16 3.5828 12.4173 0 7.9998 0" />
                    </svg>
                  </a>
                </div>

                <div class="col-6 me-auto px-1">
                  <a class="btn btn-outline-light w-100" href="javascript:;">
                    <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                          <path
                            d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267"
                            fill="#4285F4"></path>
                          <path
                            d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667"
                            fill="#34A853"></path>
                          <path
                            d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782"
                            fill="#FBBC05"></path>
                          <path
                            d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769"
                            fill="#EB4335"></path>
                        </g>
                      </g>
                    </svg>
                  </a>
                </div>
                <div class="mt-2 position-relative text-center">
                  <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                    or
                  </p>
                </div>
              </div>
              <div class="card-body">
                <form role="form">
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Name" aria-label="Name">
                  </div>
                  <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password">
                  </div>
                  <div class="form-check form-check-info text-start">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                  </div>
                  <p class="text-sm mt-3 mb-0">Already have an account?
                    <router-link to="/login" class="text-dark font-weight-bolder">Sign in</router-link>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Made with <i class="fa fa-heart"></i> by
              <a href="https://github.com/programmingChiira" class="font-weight-bold" target="_blank">Chiira</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
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

<style scoped></style>