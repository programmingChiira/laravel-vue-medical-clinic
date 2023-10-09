<template>
    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">
        <nav ref="menu" id="sidebar">
            <div class="shadow-bottom"></div>

            <perfect-scrollbar class="list-unstyled menu-categories" tag="ul"
                :options="{ wheelSpeed: 0.5, swipeEasing: !0, minScrollbarLength: 40, maxScrollbarLength: 300, suppressScrollX: true }">

                <div v-if="user_role == 'Administrator'">
                    <br />
                    <router-link tag="li" to="/ui/adminDash" class="menu" @click.native="toggleMobileMenu">
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
                        <a href="#schoolSettings" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-settings" data-v-f0f056ea="">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>
                                <span>{{ $t('General settings') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="schoolSettings" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminSchoolSettings" @click.native="toggleMobileMenu">
                                    <a>Institution details</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminSchoolImages" @click.native="toggleMobileMenu">
                                    <a>Slide show</a>
                                </router-link>
                                <router-link v-show="institution_type == 'High school' || institution_type == 'Junior high school'" tag="li" to="/ui/adminInstitutionClasses" @click.native="toggleMobileMenu">
                                    <a>Forms</a>
                                </router-link>
                                <router-link v-show="institution_type == 'Primary school'" tag="li" to="/ui/adminInstitutionClasses" @click.native="toggleMobileMenu">
                                    <a>Classes</a>
                                </router-link>
                                <router-link v-show="institution_type == 'Tertiary institution'" tag="li" to="/ui/adminInstitutionClasses" @click.native="toggleMobileMenu">
                                    <a>Academic years</a>
                                </router-link>
                                <router-link v-show="institution_type == 'High school' || institution_type == 'Junior high school' || institution_type == 'Primary school'" tag="li" to="/ui/adminInstitutionStreams" @click.native="toggleMobileMenu">
                                    <a>Streams</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminInstitutionDepartments" @click.native="toggleMobileMenu">
                                    <a>Departments</a>
                                </router-link>
                                <router-link v-show="institution_type == 'High school' || institution_type == 'Junior high school' || institution_type == 'Primary school'" tag="li" to="/ui/adminCreateCourse" @click.native="toggleMobileMenu">
                                    <a>Subjects</a>
                                </router-link>
                                <router-link v-show="institution_type == 'Tertiary institution'" tag="li" to="/ui/adminCreateCourse" @click.native="toggleMobileMenu">
                                    <a>Courses</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminInstitutionGovernance" @click.native="toggleMobileMenu">
                                    <a>Institution Governance</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminInstitutionClubs" @click.native="toggleMobileMenu">
                                    <a>Clubs</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminInstitutionExtracurricular" @click.native="toggleMobileMenu">
                                    <a>Extracurricular</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminInstitutionEnrollment" @click.native="toggleMobileMenu">
                                    <a>Admission Enrollment</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#teaching" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user" data-v-f0f056ea="">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span>{{ $t('Teaching staff') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="teaching" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminTeacherProfiles" @click.native="toggleMobileMenu">
                                    <a>Registration</a>
                                </router-link>
                                <router-link tag="li" to="/ui/inactiveAdminTeacherProfiles" @click.native="toggleMobileMenu">
                                    <a>Deactivated</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherChat" @click.native="toggleMobileMenu">
                                    <a>Chats</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherAssignments" @click.native="toggleMobileMenu">
                                    <a>Assignments</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherAssessments" @click.native="toggleMobileMenu">
                                    <a>Assessments</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherContacts" @click.native="toggleMobileMenu">
                                    <a>Contacts</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherNotifications" @click.native="toggleMobileMenu">
                                    <a>Notifications</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherInternalExams" @click.native="toggleMobileMenu">
                                    <a>Internal exams</a>
                                </router-link>
                                <router-link v-show="institution_type == 'High school' || institution_type == 'Junior high school' || institution_type == 'Primary school'" tag="li" to="/ui/adminTeacherExternalExams" @click.native="toggleMobileMenu">
                                    <a>External exams</a>
                                </router-link>
                                <router-link v-show="institution_type == 'High school' || institution_type == 'Junior high school' || institution_type == 'Primary school'" tag="li" to="/ui/adminTeacherNationalExams" @click.native="toggleMobileMenu">
                                    <a>National exams</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherCertificates" @click.native="toggleMobileMenu">
                                    <a>Certificates</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherCourses" @click.native="toggleMobileMenu">
                                    <a>Courses</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherSubRoles" @click.native="toggleMobileMenu">
                                    <a>Roles</a>
                                </router-link>
                                <router-link v-show="institution_type == 'High school' || institution_type == 'Junior high school' || institution_type == 'Primary school'" tag="li" to="/ui/adminTeacherOnDuty" @click.native="toggleMobileMenu">
                                    <a>T.O.D</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherFinance" @click.native="toggleMobileMenu">
                                    <a>Finance</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherMeetings" @click.native="toggleMobileMenu">
                                    <a>Meetings</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherEvents" @click.native="toggleMobileMenu">
                                    <a>Events</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherDepartments" @click.native="toggleMobileMenu">
                                    <a>Departments</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherAttendance" @click.native="toggleMobileMenu">
                                    <a>Attendance</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherTimeTable" @click.native="toggleMobileMenu">
                                    <a>Time-table</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link v-show="institution_type == 'High school' || institution_type == 'Junior high school'" tag="li" to="/ui/adminInstitutionClasses" class="menu" @click.native="toggleMobileMenu">
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
                                <span>{{ $t('Forms') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link v-show="institution_type == 'Primary school'" tag="li" to="/ui/adminInstitutionClasses" class="menu" @click.native="toggleMobileMenu">
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
                                <span>{{ $t('Classes') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link v-show="institution_type == 'Tertiary institution'" tag="li" to="/ui/adminInstitutionClasses" class="menu" @click.native="toggleMobileMenu">
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
                                <span>{{ $t('Academic years') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <li class="menu">
                        <a href="#students" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-users" data-v-f0f056ea="">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>{{ $t('Students') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="students" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminStudentProfiles" @click.native="toggleMobileMenu">
                                    <a>Registration</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentAssignments" @click.native="toggleMobileMenu">
                                    <a>Assignments</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentAssessments" @click.native="toggleMobileMenu">
                                    <a>Assessments</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentParents" @click.native="toggleMobileMenu">
                                    <a>Student-parents</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentNotifications" @click.native="toggleMobileMenu">
                                    <a>Notifications</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentInternalExams" @click.native="toggleMobileMenu">
                                    <a>Internal exams</a>
                                </router-link>
                                <router-link v-show="institution_type == 'High school' || institution_type == 'Junior high school' || institution_type == 'Primary school'" tag="li" to="/ui/adminStudentExternalExams" @click.native="toggleMobileMenu">
                                    <a>External exams</a>
                                </router-link>
                                <router-link v-show="institution_type == 'High school' || institution_type == 'Junior high school' || institution_type == 'Primary school'" tag="li" to="/ui/adminStudentNationalExams" @click.native="toggleMobileMenu">
                                    <a>National exams</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentCertificates" @click.native="toggleMobileMenu">
                                    <a>Certificates</a>
                                </router-link>
                                <router-link v-show="institution_type == 'High school' || institution_type == 'Junior high school' || institution_type == 'Primary school'" tag="li" to="/ui/adminStudentCourses" @click.native="toggleMobileMenu">
                                    <a>Subjects</a>
                                </router-link>
                                <router-link v-show="institution_type == 'Tertiary institution'" tag="li" to="/ui/adminStudentCourses" @click.native="toggleMobileMenu">
                                    <a>Courses</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentSubRoles" @click.native="toggleMobileMenu">
                                    <a>Roles</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentFinance" @click.native="toggleMobileMenu">
                                    <a>Finance</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentMeetings" @click.native="toggleMobileMenu">
                                    <a>Meetings</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentEvents" @click.native="toggleMobileMenu">
                                    <a>Events</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentClubs" @click.native="toggleMobileMenu">
                                    <a>Clubs</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentAttendance" @click.native="toggleMobileMenu">
                                    <a>Attendance</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentTimeTable" @click.native="toggleMobileMenu">
                                    <a>Time-table</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#schoolSchedules" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-clock" data-v-f0f056ea="">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <span>{{ $t('Schedules') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="schoolSchedules" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminTeacherTimeTable" @click.native="toggleMobileMenu">
                                    <a>Teacher timetable</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminKitchenShifts" @click.native="toggleMobileMenu">
                                    <a>Kitchen shifts</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminSecurityShifts" @click.native="toggleMobileMenu">
                                    <a>Security shifts</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/adminSecurityShifts" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shield">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                                <span>{{ $t('Security shifts') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <li class="menu">
                        <a href="#schoolEvents" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                                <span>{{ $t('Events') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="schoolEvents" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminTeacherEvents" @click.native="toggleMobileMenu">
                                    <a>Teacher events</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminNonTeachingEvents" @click.native="toggleMobileMenu">
                                    <a>Non-teaching staff events</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentEvents" @click.native="toggleMobileMenu">
                                    <a>Students events</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminParentEvents" @click.native="toggleMobileMenu">
                                    <a>Parent events</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminEvents" @click.native="toggleMobileMenu">
                                    <a>Administrator events</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#schoolMeetings" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-slack">
                                    <path
                                        d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z">
                                    </path>
                                    <path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"></path>
                                    <path
                                        d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z">
                                    </path>
                                    <path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z"></path>
                                    <path
                                        d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z">
                                    </path>
                                    <path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"></path>
                                    <path
                                        d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z">
                                    </path>
                                    <path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z"></path>
                                </svg>
                                <span>{{ $t('Meetings') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="schoolMeetings" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminTeacherMeetings" @click.native="toggleMobileMenu">
                                    <a>Teacher meetings</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminNonTeachingMeetings" @click.native="toggleMobileMenu">
                                    <a>Non-teaching staff meetings</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentMeetings" @click.native="toggleMobileMenu">
                                    <a>Students meetings</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminParentMeetings" @click.native="toggleMobileMenu">
                                    <a>Parent meetings</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminMeetings" @click.native="toggleMobileMenu">
                                    <a>Administrator meetings</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/adminKitchenShifts" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shuffle">
                                    <polyline points="16 3 21 3 21 8"></polyline>
                                    <line x1="4" y1="20" x2="21" y2="3"></line>
                                    <polyline points="21 16 21 21 16 21"></polyline>
                                    <line x1="15" y1="15" x2="21" y2="21"></line>
                                    <line x1="4" y1="4" x2="9" y2="9"></line>
                                </svg>
                                <span>{{ $t('Kitchen shifts') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <li class="menu">
                        <a href="#institutionDepartments" v-b-toggle class="dropdown-toggle" @click.prevent>
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
                                <span>{{ $t('School departments') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="institutionDepartments" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminInstitutionDepartments" @click.native="toggleMobileMenu">
                                    <a>Departments</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminInstitutionDepartmentLeaderships"
                                    @click.native="toggleMobileMenu">
                                    <a>Department leadership</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminInstitutionDepartmentChats" @click.native="toggleMobileMenu">
                                    <a>Department chats</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#institutionClubs" v-b-toggle class="dropdown-toggle" @click.prevent>
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
                        <b-collapse id="institutionClubs" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminInstitutionClubs" @click.native="toggleMobileMenu">
                                    <a>Clubs</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminInstitutionClubsLeaderships" @click.native="toggleMobileMenu">
                                    <a>Club leadership</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminInstitutionClubChats" @click.native="toggleMobileMenu">
                                    <a>Club chats</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#schoolLibrary" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-book-open">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                </svg>
                                <span>{{ $t('E-library') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="schoolLibrary" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminSchoolLibraryBooks" @click.native="toggleMobileMenu">
                                    <a>Books</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminSchoolLibraryDocuments" @click.native="toggleMobileMenu">
                                    <a>Documents</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminSchoolLibraryImages" @click.native="toggleMobileMenu">
                                    <a>Images</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminSchoolLibraryChats" @click.native="toggleMobileMenu">
                                    <a>Chats</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#schoolStore" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-database">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg>
                                <span>{{ $t('Store') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="schoolStore" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminSchoolStoreInventory" @click.native="toggleMobileMenu">
                                    <a>Inventory</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminSchoolStoreLendItem" @click.native="toggleMobileMenu">
                                    <a>Lend item</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminSchoolStoreReturnedItems"
                                    @click.native="toggleMobileMenu">
                                    <a>Returned items</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminSchoolStorItemsToReturn"
                                    @click.native="toggleMobileMenu">
                                    <a>Items not returned</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#schoolCertificates" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-award">
                                    <circle cx="12" cy="8" r="7"></circle>
                                    <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                                </svg>
                                <span>{{ $t('Certificates') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="schoolCertificates" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminCertificates" @click.native="toggleMobileMenu">
                                    <a>Administrator</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherCertificates" @click.native="toggleMobileMenu">
                                    <a>Teaching staff</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminParentCertificates" @click.native="toggleMobileMenu">
                                    <a>Parents</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminNonTeachingStaffCertificates"
                                    @click.native="toggleMobileMenu">
                                    <a>Non-teaching staff</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentCertificates" @click.native="toggleMobileMenu">
                                    <a>Students</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#schoolDiscipline" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>{{ $t('Discipline') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="schoolDiscipline" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminSchoolDiscipline" @click.native="toggleMobileMenu">
                                    <a>Administrator</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherDiscipline" @click.native="toggleMobileMenu">
                                    <a>Teaching staff</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminNonTeachingDiscipline" @click.native="toggleMobileMenu">
                                    <a>Non-teaching staff</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentDiscipline" @click.native="toggleMobileMenu">
                                    <a>Students</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#schoolAwards" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-award">
                                    <circle cx="12" cy="8" r="7"></circle>
                                    <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                                </svg>
                                <span>{{ $t('Awards') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="schoolAwards" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminSchoolSportsAwards" @click.native="toggleMobileMenu">
                                    <a>Sports</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminInstitutionClubsAwards" @click.native="toggleMobileMenu">
                                    <a>Clubs</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminInstitutionDepartmentsAwards"
                                    @click.native="toggleMobileMenu">
                                    <a>Departments</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/adminSchoolStudentIds" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-list">
                                    <line x1="8" y1="6" x2="21" y2="6"></line>
                                    <line x1="8" y1="12" x2="21" y2="12"></line>
                                    <line x1="8" y1="18" x2="21" y2="18"></line>
                                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                </svg>
                                <span>{{ $t('Student Ids') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <li class="menu">
                        <a href="#schoolNotifications" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-bell">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                                <span>{{ $t('Notifications') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="schoolNotifications" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/adminNotifications" @click.native="toggleMobileMenu">
                                    <a>Administrator</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminTeacherNotifications" @click.native="toggleMobileMenu">
                                    <a>Teaching staff</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminParentNotifications" @click.native="toggleMobileMenu">
                                    <a>Parents</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminNonTeachingNotifications"
                                    @click.native="toggleMobileMenu">
                                    <a>Non-teaching staff</a>
                                </router-link>
                                <router-link tag="li" to="/ui/adminStudentNotifications" @click.native="toggleMobileMenu">
                                    <a>Students</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/adminSchoolTravelling" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-truck">
                                    <rect x="1" y="3" width="15" height="13"></rect>
                                    <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                    <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                    <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                </svg>
                                <span>{{ $t('Travelling') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/adminStudentParents" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user-plus">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <line x1="20" y1="8" x2="20" y2="14"></line>
                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                </svg>
                                <span>{{ $t('Parents') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/adminSchoolVisitors" class="menu" @click.native="toggleMobileMenu">
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
                                <span>{{ $t('School visitors') }}</span>
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
            settings: [],
            menu_collapse: 'dashboard',
            id: "",
            institution_type: "",
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
        this.fetchSettings();
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
        },

        fetchSettings(page = 1) {
            axios.get(`/api/institutionGeneralSettings?page=${page}`)
                .then((response) => {
                    this.settings = response.data.data;
                    if (this.settings.length > 0) {

                        const settingsData = this.settings[0];
                        this.institution_type = settingsData.institution_type;
                    }
                }).catch((error) => {
                    console.error(error);
                });
        },
    }
};
</script>