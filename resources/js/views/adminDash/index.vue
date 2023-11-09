<template>
  <body class="g-sidenavbar-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    <AdminDesktopNav></AdminDesktopNav>
    <AdminMobileNav v-if="showAside == true"></AdminMobileNav>

    <main class="main-content position-relative border-radius-lg">
      <!-- sidestbar -->
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
                <a href="javascript:;" class="nav-link text-white p-0" id="iconsidestbarsidenavbar"
                  @click="toggleAside">
                  <div class="sidenavbar-toggler-inner">
                    <i class="fa fa-close"></i>
                  </div>
                </a>
              </li>

              <li v-if="showAside == false" class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End sidestbar -->
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Money</p>
                      <h5 class="font-weight-bolder">
                        $53,000
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                        since yesterday
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                      <h5 class="font-weight-bolder">
                        2,300
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                        since last week
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                      <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                      <h5 class="font-weight-bolder">
                        +3,462
                      </h5>
                      <p class="mb-0">
                        <span class="text-danger text-sm font-weight-bolder">-2%</span>
                        since last quarter
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                      <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                      <h5 class="font-weight-bolder">
                        $103,430
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                      <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card ">
              <div class="card-header pb-0 p-3">
                <div class="d-flex justify-content-between">
                  <h6 class="mb-2">Sales by Country</h6>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table align-items-center ">
                  <tbody>
                    <tr>
                      <td class="w-30">
                        <div class="d-flex px-2 py-1 align-items-center">
                          <div>
                            <img src="argon/assets/img/icons/flags/US.png" alt="Country flag">
                          </div>
                          <div class="ms-4">
                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                            <h6 class="text-sm mb-0">United States</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <p class="text-xs font-weight-bold mb-0">Sales:</p>
                          <h6 class="text-sm mb-0">2500</h6>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <p class="text-xs font-weight-bold mb-0">Value:</p>
                          <h6 class="text-sm mb-0">$230,900</h6>
                        </div>
                      </td>
                      <td class="align-middle text-sm">
                        <div class="col text-center">
                          <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                          <h6 class="text-sm mb-0">29.9%</h6>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="w-30">
                        <div class="d-flex px-2 py-1 align-items-center">
                          <div>
                            <img src="argon/assets/img/icons/flags/DE.png" alt="Country flag">
                          </div>
                          <div class="ms-4">
                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                            <h6 class="text-sm mb-0">Germany</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <p class="text-xs font-weight-bold mb-0">Sales:</p>
                          <h6 class="text-sm mb-0">3.900</h6>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <p class="text-xs font-weight-bold mb-0">Value:</p>
                          <h6 class="text-sm mb-0">$440,000</h6>
                        </div>
                      </td>
                      <td class="align-middle text-sm">
                        <div class="col text-center">
                          <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                          <h6 class="text-sm mb-0">40.22%</h6>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="w-30">
                        <div class="d-flex px-2 py-1 align-items-center">
                          <div>
                            <img src="argon/assets/img/icons/flags/GB.png" alt="Country flag">
                          </div>
                          <div class="ms-4">
                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                            <h6 class="text-sm mb-0">Great Britain</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <p class="text-xs font-weight-bold mb-0">Sales:</p>
                          <h6 class="text-sm mb-0">1.400</h6>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <p class="text-xs font-weight-bold mb-0">Value:</p>
                          <h6 class="text-sm mb-0">$190,700</h6>
                        </div>
                      </td>
                      <td class="align-middle text-sm">
                        <div class="col text-center">
                          <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                          <h6 class="text-sm mb-0">23.44%</h6>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="w-30">
                        <div class="d-flex px-2 py-1 align-items-center">
                          <div>
                            <img src="argon/assets/img/icons/flags/BR.png" alt="Country flag">
                          </div>
                          <div class="ms-4">
                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                            <h6 class="text-sm mb-0">Brasil</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <p class="text-xs font-weight-bold mb-0">Sales:</p>
                          <h6 class="text-sm mb-0">562</h6>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <p class="text-xs font-weight-bold mb-0">Value:</p>
                          <h6 class="text-sm mb-0">$143,960</h6>
                        </div>
                      </td>
                      <td class="align-middle text-sm">
                        <div class="col text-center">
                          <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                          <h6 class="text-sm mb-0">32.14%</h6>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <hr />
          <hr />

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Categories</h6>
              </div>
              <div class="card-body p-3">
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex align-items-center">
                      <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                        <i class="ni ni-mobile-button text-white opacity-10"></i>
                      </div>
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Devices</h6>
                        <span class="text-xs">250 in stock, <span class="font-weight-bold">346+ sold</span></span>
                      </div>
                    </div>
                    <div class="d-flex">
                      <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                          class="ni ni-bold-right" aria-hidden="true"></i></button>
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex align-items-center">
                      <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                        <i class="ni ni-tag text-white opacity-10"></i>
                      </div>
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Tickets</h6>
                        <span class="text-xs">123 closed, <span class="font-weight-bold">15 open</span></span>
                      </div>
                    </div>
                    <div class="d-flex">
                      <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                          class="ni ni-bold-right" aria-hidden="true"></i></button>
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex align-items-center">
                      <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                        <i class="ni ni-box-2 text-white opacity-10"></i>
                      </div>
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Error logs</h6>
                        <span class="text-xs">1 is active, <span class="font-weight-bold">40 closed</span></span>
                      </div>
                    </div>
                    <div class="d-flex">
                      <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                          class="ni ni-bold-right" aria-hidden="true"></i></button>
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                    <div class="d-flex align-items-center">
                      <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                        <i class="ni ni-satisfied text-white opacity-10"></i>
                      </div>
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Happy users</h6>
                        <span class="text-xs font-weight-bold">+ 430</span>
                      </div>
                    </div>
                    <div class="d-flex">
                      <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                          class="ni ni-bold-right" aria-hidden="true"></i></button>
                    </div>
                  </li>
                </ul>
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