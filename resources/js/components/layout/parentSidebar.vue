<template>
    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">
        <nav ref="menu" id="sidebar">
            <div class="shadow-bottom"></div>

            <perfect-scrollbar class="list-unstyled menu-categories" tag="ul"
                :options="{ wheelSpeed: 0.5, swipeEasing: !0, minScrollbarLength: 40, maxScrollbarLength: 300, suppressScrollX: true }">

                <div v-if="user_role == 'Parent'">
                    <br />
                    <a class="dropdown-toggle">
                        <div class="">
                            <strong style="text-decoration: underline;">{{ gender }}</strong>
                        </div>
                    </a>
                    <br />
                    <router-link tag="li" to="/ui/parentDash" class="menu" @click.native="toggleMobileMenu">
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
                        <a href="#finances" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-dollar-sign">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                                <span>{{ $t('Finance') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="finances" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/parentStudentFees" @click.native="toggleMobileMenu">
                                    <a>School fees</a>
                                </router-link>
                                <router-link tag="li" to="/ui/parentStudentPocketMoney" @click.native="toggleMobileMenu">
                                    <a>Pocket money</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/parentStudentAssessment" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file-plus">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="12" y1="18" x2="12" y2="12"></line>
                                    <line x1="9" y1="15" x2="15" y2="15"></line>
                                </svg>
                                <span>{{ $t('Assessments') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/parentStudentAssignments" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file-plus">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="12" y1="18" x2="12" y2="12"></line>
                                    <line x1="9" y1="15" x2="15" y2="15"></line>
                                </svg>
                                <span>{{ $t('Assignments') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/parentStudentRevisionProgress" class="menu"
                        @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-bar-chart-2">
                                    <line x1="18" y1="20" x2="18" y2="10"></line>
                                    <line x1="12" y1="20" x2="12" y2="4"></line>
                                    <line x1="6" y1="20" x2="6" y2="14"></line>
                                </svg>
                                <span>{{ $t('Revision progress') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/parentStudentDiscipline" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user-x">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <line x1="18" y1="8" x2="23" y2="13"></line>
                                    <line x1="23" y1="8" x2="18" y2="13"></line>
                                </svg>
                                <span>{{ $t('Discipline') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <li class="menu">
                        <a href="#teacher" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>{{ $t('Student-Teacher') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="teacher" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/parentStudentTeacher" @click.native="toggleMobileMenu">
                                    <a>Teachers</a>
                                </router-link>
                                <router-link tag="li" to="/ui/parentStudentTeacherEngagement"
                                    @click.native="toggleMobileMenu">
                                    <a>Teacher engagement</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#exams" v-b-toggle class="dropdown-toggle" @click.prevent>
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
                                <span>{{ $t('Exams') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="exams" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/parentInternalExams" @click.native="toggleMobileMenu">
                                    <a>Internal exams</a>
                                </router-link>
                                <router-link tag="li" to="/ui/parentExternalExams" @click.native="toggleMobileMenu">
                                    <a>External exams</a>
                                </router-link>
                                <router-link tag="li" to="/ui/parentNationalExams" @click.native="toggleMobileMenu">
                                    <a>National exams</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

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
                                <router-link tag="li" to="/ui/parentTeacherChats" @click.native="toggleMobileMenu">
                                    <a>Teachers</a>
                                </router-link>
                                <router-link tag="li" to="/ui/parentFinaceChat" @click.native="toggleMobileMenu">
                                    <a>Finance</a>
                                </router-link>
                                <router-link tag="li" to="/ui/parentChats" @click.native="toggleMobileMenu">
                                    <a>Parents</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/parentStudentTimeTable" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-calendar">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span>{{ $t('Time-table') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/parentTeacherOnDuty" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user-check">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                <span>{{ $t('T.O.D') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/parentStudentSubjects" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-book-open">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                </svg>
                                <span>{{ $t('Subjects') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <li class="menu">
                        <a href="#pta" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>{{ $t('PTA') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="pta" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/parentPtaLeadership" @click.native="toggleMobileMenu">
                                    <a>PTA leadership</a>
                                </router-link>
                                <router-link tag="li" to="/ui/parentPtaChats" @click.native="toggleMobileMenu">
                                    <a>Chats</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/parentEvents" class="menu" @click.native="toggleMobileMenu">
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
                                <span>{{ $t('Events') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/parentMeetings" class="menu" @click.native="toggleMobileMenu">
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

                    <router-link tag="li" to="/ui/parentNotifications" class="menu" @click.native="toggleMobileMenu">
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