<template>
    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">
        <nav ref="menu" id="sidebar">
            <div class="shadow-bottom"></div>

            <perfect-scrollbar class="list-unstyled menu-categories" tag="ul"
                :options="{ wheelSpeed: 0.5, swipeEasing: !0, minScrollbarLength: 40, maxScrollbarLength: 300, suppressScrollX: true }">

                <div v-if="user_role == 'Teacher'">
                    <br />
                    <a class="dropdown-toggle">
                        <div class="">
                            <strong style="text-decoration: underline;">{{ gender }}</strong>
                        </div>
                    </a>
                    <br />
                    <router-link tag="li" to="/ui/teacherDash" class="menu" @click.native="toggleMobileMenu">
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

                    <router-link tag="li" to="/ui/teacherTeachingSubjects" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-book">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                </svg>
                                <span>{{ $t('Subjects') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/teacherTeachingClasses" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
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
                                <span>{{ $t('Classes') }}</span>
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
                                <router-link tag="li" to="/ui/teacherAdminChat" @click.native="toggleMobileMenu">
                                    <a>Administrator</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherChats" @click.native="toggleMobileMenu">
                                    <a>Teachers</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherFinanceChats" @click.native="toggleMobileMenu">
                                    <a>Finance</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherDepartmentChats" @click.native="toggleMobileMenu">
                                    <a>Department</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherParentsChats" @click.native="toggleMobileMenu">
                                    <a>Parents</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherStudentChats" @click.native="toggleMobileMenu">
                                    <a>Students</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#assignments" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-book-open">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                </svg>
                                <span>{{ $t('Assignments') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="assignments" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/teacherSendAssignments" @click.native="toggleMobileMenu">
                                    <a>Send Assignment</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherReceiveAssaignments" @click.native="toggleMobileMenu">
                                    <a>Submitted Assignments</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherCompletedAssignments" @click.native="toggleMobileMenu">
                                    <a>Completed</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherIncompleteAssignments"
                                    @click.native="toggleMobileMenu">
                                    <a>Incomplete</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherStudentInteraction" @click.native="toggleMobileMenu">
                                    <a>Student interaction</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#assessments" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-book-open">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                </svg>
                                <span>{{ $t('Assessments') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="assessments" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/teacherSentAssessments" @click.native="toggleMobileMenu">
                                    <a>Send Assessment</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherReceiveAssessments" @click.native="toggleMobileMenu">
                                    <a>Submitted Assessments</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherComletedAssessments" @click.native="toggleMobileMenu">
                                    <a>Completed</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherIncompleteAssessments"
                                    @click.native="toggleMobileMenu">
                                    <a>Incomplete</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherAssessmentInteraction"
                                    @click.native="toggleMobileMenu">
                                    <a>Interaction</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/teacherPersonalTimeTable" class="menu" @click.native="toggleMobileMenu">
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

                    <router-link tag="li" to="/ui/teacherOnDuty" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <span>{{ $t('T.O.D') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/teacherSchoolLibrary" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-bookmark">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <span>{{ $t('Library') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <li class="menu">
                        <a href="#exams" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
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
                                <router-link tag="li" to="/ui/teacherInternalExam" @click.native="toggleMobileMenu">
                                    <a>Internal exams</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherExternalExam" @click.native="toggleMobileMenu">
                                    <a>External exams</a>
                                </router-link>
                                <router-link tag="li" to="/ui/TeacherNationalExam" @click.native="toggleMobileMenu">
                                    <a>National exams</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/teacherFinance" class="menu" @click.native="toggleMobileMenu">
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
                                <span>{{ $t('Departments') }}</span>
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
                                <router-link tag="li" to="/ui/teacherDepartmentLeadership" @click.native="toggleMobileMenu">
                                    <a>Leadership</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherDepartmentChats" @click.native="toggleMobileMenu">
                                    <a>Chats</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#clubs" v-b-toggle class="dropdown-toggle" @click.prevent>
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
                                <span>{{ $t('Clubs') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="clubs" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/teacherClubLeadership" @click.native="toggleMobileMenu">
                                    <a>Leadership</a>
                                </router-link>
                                <router-link tag="li" to="/ui/teacherClubChats" @click.native="toggleMobileMenu">
                                    <a>Chats</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/teacherEvents" class="menu" @click.native="toggleMobileMenu">
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

                    <router-link tag="li" to="/ui/teacherMeetings" class="menu" @click.native="toggleMobileMenu">
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

                    <router-link tag="li" to="/ui/teacherStudentDiscipline" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>{{ $t('Student Discipline') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/teacherNotifications" class="menu" @click.native="toggleMobileMenu">
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