<template>
  <body class="g-sidenavbar-show  bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <AdminDesktopNav></AdminDesktopNav>
    <AdminMobileNav v-if="showAside == true"></AdminMobileNav>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      <!-- Navbar -->
      <nav class="sidestbar sidestbar-main sidestbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="sidestbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
          <div class="collapse sidestbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="sidestbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group">
                <ul class="sidestbar-nav  justify-content-end">
                  <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="iconsidestbarsidenavbar"
                      @click="toggleAside">
                      <div class="sidenavbar-toggler-inner">
                        <i class="sidenavbar-toggler-line bg-white"></i>
                        <i class="sidenavbar-toggler-line bg-white"></i>
                        <i class="sidenavbar-toggler-line bg-white"></i>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <ul class="sidestbar-nav  justify-content-end">
              <li v-if="showAside == true" class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white p-0" id="iconsidestbarsidenavbar" @click="toggleAside">
                  <div class="sidenavbar-toggler-inner">
                    <i class="fa fa-close"></i>
                  </div>
                </a>
              </li>

              <li v-if="showAside == false" class="nav-item px-3 d-flex align-items-center">
                <router-link to="/profile" class="nav-link text-white p-0">
                  <i class="fa fa-user fixed-plugin-button-nav cursor-pointer"></i>
                </router-link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Authors table</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          Employed</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="argon/assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">John Michael</h6>
                              <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Manager</p>
                          <p class="text-xs text-secondary mb-0">Organization</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Online</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                            data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="argon/assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Alexa Liras</h6>
                              <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Programator</p>
                          <p class="text-xs text-secondary mb-0">Developer</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                            data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="argon/assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                              <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Executive</p>
                          <p class="text-xs text-secondary mb-0">Projects</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Online</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                            data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="argon/assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Michael Levi</h6>
                              <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Programator</p>
                          <p class="text-xs text-secondary mb-0">Developer</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Online</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                            data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="argon/assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Richard Gran</h6>
                              <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Manager</p>
                          <p class="text-xs text-secondary mb-0">Executive</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                            data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="argon/assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Miriam Eric</h6>
                              <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Programtor</p>
                          <p class="text-xs text-secondary mb-0">Developer</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                            data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Projects table</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                          Completion</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="argon/assets/img/small-logos/logo-spotify.svg"
                                class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">Spotify</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">$2,500</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">working</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">60%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60"
                                  aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0">
                            <i class="fa fa-ellipsis-v text-xs"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="argon/assets/img/small-logos/logo-invision.svg"
                                class="avatar avatar-sm rounded-circle me-2" alt="invision">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">Invision</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">$5,000</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">done</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">100%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100"
                                  aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="argon/assets/img/small-logos/logo-jira.svg"
                                class="avatar avatar-sm rounded-circle me-2" alt="jira">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">Jira</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">$3,400</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">canceled</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">30%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30"
                                  aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="argon/assets/img/small-logos/logo-slack.svg"
                                class="avatar avatar-sm rounded-circle me-2" alt="slack">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">Slack</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">$1,000</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">canceled</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">0%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0"
                                  aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="argon/assets/img/small-logos/logo-webdev.svg"
                                class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">Webdev</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">$14,000</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">working</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">80%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80"
                                  aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="argon/assets/img/small-logos/logo-xd.svg"
                                class="avatar avatar-sm rounded-circle me-2" alt="xd">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">Adobe XD</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">$2,300</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">done</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">100%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100"
                                  aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <Footer></Footer>
      </div>
    </main>
  </body>
</template>

<script>
import axios from 'axios';
import Footer from '@/views/oneTimeUseComponents/AdminFooter.vue';
import AdminDesktopNav from '@/views/oneTimeUseComponents/AdminDeskNav.vue';
import AdminMobileNav from '@/views/oneTimeUseComponents/AdminMobileNav.vue';

export default {
  components: {
    Footer,
    AdminDesktopNav,
    AdminMobileNav,
  },

  data() {
    return {
      showAside: false
    };
  },

  mounted() {
    document.title = 'Admin dashboard :- Medic';
  },

  methods: {
    toggleAside() {
      this.showAside = !this.showAside;
    },

  },
};
</script>

<style scoped></style>