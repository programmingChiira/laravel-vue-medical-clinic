<template>
    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">
        <nav ref="menu" id="sidebar">
            <div class="shadow-bottom"></div>
            <perfect-scrollbar class="list-unstyled menu-categories" tag="ul"
                :options="{ wheelSpeed: 0.5, swipeEasing: !0, minScrollbarLength: 40, maxScrollbarLength: 300, suppressScrollX: true }">

                <div v-if="user_role == 'NonTeaching'">
                    <br />
                    <a class="dropdown-toggle">
                        <div class="">
                            <strong style="text-decoration: underline;">{{ gender }}</strong>
                        </div>
                    </a>
                    <br />
                    <router-link tag="li" to="/ui/staffDash" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-grid" data-v-f0f056ea="">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                                <span>{{ $t('Dashboard') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <li class="menu">
                        <a href="#chats" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-message-square">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <span>{{ $t('Chats') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="chats" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/nonTeachingAdminChats" @click.native="toggleMobileMenu">
                                    <a>Administrator</a>
                                </router-link>
                                <router-link tag="li" to="/ui/nonTeachingFinanceChats" @click.native="toggleMobileMenu">
                                    <a>Finance</a>
                                </router-link>
                                <router-link tag="li" to="/ui/nonTeachingDeparmentChats" @click.native="toggleMobileMenu">
                                    <a>Department</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/nonTeachingTeacherOnDuty" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-cpu">
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
                                <span>{{ $t('T.O.D') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/nonTeachingFinance" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-dollar-sign">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                                <span>{{ $t('Finance') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <li class="menu">
                        <a href="#departments" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-box">
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                                <span>{{ $t('Department') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="departments" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/nonTeachingDepartmentLeadership"
                                    @click.native="toggleMobileMenu">
                                    <a>Leadership</a>
                                </router-link>
                                <router-link tag="li" to="/ui/nonTeachingDepartmentChats" @click.native="toggleMobileMenu">
                                    <a>Chats</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/nonTeachingEvents" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                                <span>{{ $t('Events') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/nonTeachingMeetings" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-airplay">
                                    <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                    </path>
                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                </svg>
                                <span>{{ $t('Meetings') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/nonTeachingNotifications" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-bell">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                                <span>{{ $t('Notifications') }}</span>
                            </div>
                        </a>
                    </router-link>
                </div>
                <hr />
                <!--</ul>-->
            </perfect-scrollbar>
        </nav>
    </div>
    <!--  END SIDEBAR  -->
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            menu_collapse: 'dashboard',
            id: "",
            first_name: "",
            middle_name: "",
            last_name: "",
            user_role: "",
            gender: "",
        };
    },

    watch: {
        $route(to) {
            const selector = document.querySelector('#sidebar a[href="' + to.path + '"]');
            const ul = selector.closest('ul.collapse');
            if (!ul) {
                const ele = document.querySelector('.dropdown-toggle.not-collapsed');
                if (ele) {
                    ele.click();
                }
            }
        }
    },

    mounted() {
        // default menu selection on refresh
        const selector = document.querySelector('#sidebar a[href="' + window.location.pathname + '"]');
        if (selector) {
            const ul = selector.closest('ul.collapse');
            if (ul) {
                let ele = ul.closest('li.menu').querySelectorAll('.dropdown-toggle');
                if (ele) {
                    ele = ele[0];
                    setTimeout(() => {
                        ele.click();
                    });
                }
            } else {
                selector.click();
            }
        }

        axios
            .get("/api/user")
            //.then((response) => (this.id = response.data.id))
            .then(response => {
                this.id = response.data.id
                this.first_name = response.data.first_name
                this.middle_name = response.data.middle_name
                this.last_name = response.data.last_name
                this.user_role = response.data.user_role
                this.gender = response.data.gender
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

    methods: {
        toggleMobileMenu() {
            if (window.innerWidth < 991) {
                this.$store.commit('toggleSideBar', true);
            }
        }
    }
};
</script>