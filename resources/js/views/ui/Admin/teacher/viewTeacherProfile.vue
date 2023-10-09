<template>
    <div class="layout-px-spacing">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Administrator</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">teachers</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>view</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="row invoice layout-top-spacing layout-spacing apps-invoice">
            <div class="col-md-12 col-12">
                <div class="doc-container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-6 col-md-6 col-sm-6">
                            <router-link style="float: left;" :to="`/ui/editadminTeacherProfile/` + fields.slug" tag="button"
                                class="btn btn-success mb-4 mr-2">
                                Edit
                            </router-link>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6">
                            <b-button style="float: right;" tag="a" variant="secondary" class="btn-print action-print"
                                @click="print()">Print</b-button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="invoice-inbox">
                                <div id="ct" class="">
                                    <div class="invoice-00001">
                                        <div class="content-section">
                                            <div class="inv--head-section inv--detail-section">
                                                <div class="row">
                                                    <div class="col-sm-12 align-self-center mt-3 text-sm-right">
                                                        <p class="inv-created-date">
                                                            <span class="inv-title"> Email : </span>
                                                            <span class="inv-date">
                                                                <a class="inv-customer-name" target="_blank"
                                                                    :href="'mailto:' + fields.email">
                                                                    {{ fields.email }}
                                                                </a>
                                                            </span>
                                                        </p>
                                                    </div>

                                                    <br />

                                                    <div class="col-sm-12 align-self-center mt-3 text-sm-right">
                                                        <p class="inv-created-date">
                                                            <span class="inv-title"> Mobile : </span>
                                                            <span class="inv-date">
                                                                <a class="inv-customer-name" target="_blank"
                                                                    :href="'mailto:' + fields.phone_no">
                                                                    {{ fields.phone_no }}
                                                                </a>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="inv--detail-section inv--customer-detail-section">
                                                <div class="row">
                                                    <div style="margin-bottom: 20px;"
                                                        class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                        <p class="inv-street-addr"> <strong>Gender</strong> : {{
                                                            fields.gender }}</p>
                                                        <br />
                                                        <p class="inv-email-address"> <strong>T.S.C Number</strong> : {{
                                                            fields.teacher_tsc_no }}</p>
                                                    </div>

                                                    <div class="col-md-6 col-6 text-sm-right">
                                                        <p class="inv-street-addr">
                                                            <strong>First name</strong> :
                                                            {{ fields.first_name }}
                                                        </p>
                                                        <br />
                                                        <p class="inv-email-address">
                                                            <strong>Middle name</strong> :
                                                            {{ fields.middle_name }}
                                                        </p>
                                                        <br />
                                                        <p class="inv-email-address">
                                                            <strong>Sur name</strong> :
                                                            {{ fields.last_name }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr />

                                            <div class="inv--detail-section inv--customer-detail-section">
                                                <div id="typographyLists" class="col-lg-12 layout-spacing">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <h5 style="margin-bottom: 10px;text-decoration:underline;">
                                                                <strong>Departments</strong>
                                                            </h5>

                                                            <div class="col-md-12 col-12">
                                                                <div class="row element-background">
                                                                    <ul class="col-md-6 col-6 list-icon">
                                                                        <li v-for="(departmentOption, index) in selectedDepartments"
                                                                            :key="index">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text">{{ departmentOption
                                                                            }}</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <br />
                                                                <br />
                                                            </div>

                                                            <h6 style="margin-bottom: 10px;text-decoration:underline;">
                                                                <strong>Department roles</strong>
                                                            </h6>

                                                            <div class="col-md-12 col-12">
                                                                <div class="row element-background">
                                                                    <ul class="col-md-6 col-6 list-icon">
                                                                        <li v-for="department in selectedDepartments"
                                                                            :key="department">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text">{{
                                                                                selectedDepartmentRoles[department]
                                                                            }}</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr />

                                            <div class="inv--detail-section inv--customer-detail-section">
                                                <div id="typographyLists" class="col-lg-12 layout-spacing">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <h5 style="margin-bottom: 10px;text-decoration:underline;">
                                                                <strong>Courses</strong>
                                                            </h5>

                                                            <div class="col-md-12 col-12">
                                                                <div class="row element-background">
                                                                    <ul class="col-md-6 col-6 list-icon">
                                                                        <li v-for="(courseOption, index) in selectedCourses"
                                                                            :key="index">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text">{{ courseOption
                                                                            }}</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <br />
                                                                <br />
                                                            </div>

                                                            <h6 style="margin-bottom: 10px;text-decoration:underline;">
                                                                <strong>Streams taught by teacher</strong>
                                                            </h6>

                                                            <div class="col-md-12 col-12">
                                                                <div class="row element-background">
                                                                    <ul class="col-md-6 col-6 list-icon">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text">{{
                                                                                getStreamYearsString() }}</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import '@/assets/sass/scrollspyNav.scss';
import '@/assets/sass/apps/invoice-preview.scss';
import '@/assets/sass/scrollspyNav.scss';
import '@/assets/sass/users/account-setting.scss';
import highlight from '@/components/plugins/highlight.vue';

import JsonExcel from 'vue-json-excel';

//pdf export
import jsPDF from 'jspdf';
import 'jspdf-autotable';
import '@/assets/sass/components/custom-modal.scss';
import Multiselect from 'vue-multiselect'
import 'vue-multiselect/dist/vue-multiselect.min.css';

export default {
    metaInfo: { title: 'Staff profile :- Intelligent system' },
    components: {
        JsonExcel,
        Multiselect,
        highlight
    },
    props: ["slug"],
    data() {
        return {
            fields: {},
            settings: {},
            departments: {},
            user_role: "",
            departmentInputs: [],
            selectedDepartments: [],
            selectDepartmentOptions: [],
            courseInputs: [],
            selectedCourses: [],
            selectedCourseYears: {},
            selectCourseOptions: [],
            classInputs: [],
            selectedClasses: [],
            selectedClassYears: {},
            selectClassOptions: [],
            streamInputs: [],
            selectedStreams: [],
            selectedStreamYears: {},
            selectStreamOptions: [],
            selectedDepartmentSlugs: {},
            selectedDepartmentRoles: {},
            selectedCourseSlugs: {},
            code_arr: [],
            isSubmitting: false,
            errors: "",
        };
    },

    watch: {
        selectedClasses: {
            handler(newClasses) {
                newClasses.forEach((classItem) => {
                    if (this.selectedClassYears[classItem]) {
                        this.selectedClassYears[classItem] = [];
                    }
                });
            },
            deep: true,
        },

        selectedStreams: {
            handler(newStreams) {
                newStreams.forEach((streamItem) => {
                    if (this.selectedStreamYears[streamItem]) {
                        this.selectedStreamYears[streamItem] = [];
                    }
                });
            },
            deep: true,
        },
    },

    mounted() {
        this.fetchDepartment();
        this.fetchSettings();

        this.fetchDepartment();
        this.fetchCourse();
        this.fetchClass();
        this.fetchStream();

        axios
            .get("/api/users/" + this.slug)
            .then((response) => {
                this.fields = response.data.data;
                this.selectedDepartments = JSON.parse(this.fields.department.department);
                this.selectedDepartmentSlugs = JSON.parse(this.fields.department.department_slug);
                this.selectedDepartmentRoles = JSON.parse(this.fields.department.department_role);
                this.selectedCourses = JSON.parse(this.fields.course.course);
                this.selectedCourseSlugs = JSON.parse(this.fields.course.course_slug);
                this.selectedStreamYears = JSON.parse(this.fields.course.class_stream);

            })
            .catch((error) => {
                if (error.response.status === 403) {
                    //this.$router.push({ name: "Blog" });
                }
            });


        axios
            .get("/api/user")
            //.then((response) => (this.id = response.data.id))
            .then(response => {
                this.user_role = response.data.user_role
            })
            .catch((error) => {
                if (error.response.status === 401) {
                    this.$emit("updateSidebar");
                    localStorage.removeItem("authenticated");
                    window.location.href = "/login";
                }
            });

        if (localStorage.getItem("authenticated")) {
            this.loggedIn = true;
        } else {
            this.loggedIn = false;
        }
    },

    methods: {
        getStreamYearsString() {
            const streamYears = Object.values(this.selectedStreamYears);
            return streamYears.join(', ');
        },
        addDepartmentTag(newDepartmentTag) {
            this.selectDepartmentOptions.push(newDepartmentTag);
            this.selectedDepartments.push(newDepartmentTag);
            this.selectedDepartmentRoles[newDepartmentTag] = [];
            this.selectedDepartmentRoles[newDepartmentTag].push(''); // Add an empty role for the selected department
        },

        addCourseTag(newCourseTag) {
            this.selectCourseOptions.push(newCourseTag);
            this.selectedCourses.push(newCourseTag);
            this.selectedCourseYears[newCourseTag] = [];
            this.selectedCourseYears[newCourseTag].push(''); // Add an empty role for the selected department
        },

        addClassTag(newClassTag) {
            this.selectClassOptions.push(newClassTag);
            this.selectedClasss.push(newClassTag);
            this.selectedClassYears[newClassTag] = [];
            this.selectedClassYears[newClassTag].push(''); // Add an empty role for the selected department
        },

        addStreamTag(newStreamTag) {
            this.selectStreamOptions.push(newStreamTag);
            this.selectedStreams.push(newStreamTag);
            this.selectedStreamYears[newStreamTag] = [];
            this.selectedStreamYears[newStreamTag].push(''); // Add an empty role for the selected department
        },

        toggleCode(name) {
            if (this.code_arr.includes(name)) {
                this.code_arr = this.code_arr.filter(d => d != name);
            }
            else {
                this.code_arr.push(name);
            }
        },

        addDepartmentTag(newDepartmentTag) {
            this.selectDepartmentOptions.push(newDepartmentTag)
            this.departmentInputs['departmentInput4'].push(newDepartmentTag)
        },

        addCourseTag(newCourseTag) {
            this.selectCourseOptions.push(newCourseTag)
            this.courseInputs['courseInput4'].push(newCourseTag)
        },

        addClassTag(newClassTag) {
            this.selectClassOptions.push(newClassTag)
            this.classInputs['classInput4'].push(newClassTag)
        },

        addStreamTag(newStreamTag) {
            this.selectStreamOptions.push(newStreamTag)
            this.streamInputs['streamInput4'].push(newStreamTag)
        },

        fetchDepartment() {
            axios
                .get('/api/institutionDepartments')
                .then((response) => {
                    this.departments = response.data.data;
                    this.selectDepartmentOptions = this.departments.map((department) => {
                        return department.department;
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        fetchCourse() {
            axios
                .get('/api/institutionCourses')
                .then((response) => {
                    this.courses = response.data.data;
                    this.selectCourseOptions = this.courses.map((course) => {
                        return course.course;
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        fetchClass() {
            axios
                .get('/api/institutionClasses')
                .then((response) => {
                    this.classes = response.data.data;
                    this.selectClassOptions = this.classes.map((classItem) => {
                        return classItem.class; // Use the correct property name here
                    });

                    this.classes.forEach((classItem) => {
                        this.selectedClassSlugs[classItem.class] = classItem.slug;
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        fetchStream() {
            axios
                .get('/api/institutionStreams')
                .then((response) => {
                    this.streams = response.data.data;
                    this.selectStreamOptions = this.streams.map((streamItem) => {
                        return streamItem.stream; // Use the correct property name here
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        fetchSettings() {
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

        print() {
            window.print();
        },
    },

    computed: {
        selectedDepartmentValue: {
            get() {
                let result = "";
                return (this.slug = result + "");
            },
            set(value) {
                this.slug = value;
            },
        },

        generateFormStreamOptions() {
            return (course) => {
                const options = [];
                for (const classOption of this.selectClassOptions) {
                    for (const streamOption of this.selectStreamOptions) {
                        options.push(`${course} - Form ${classOption} ${streamOption}`);
                    }
                }
                return options;
            };
        },

        generateClassStreamOptions() {
            return (course) => {
                const options = [];
                for (const classOption of this.selectClassOptions) {
                    for (const streamOption of this.selectStreamOptions) {
                        options.push(`${course} - Form ${classOption} ${streamOption}`);
                    }
                }
                return options;
            };
        },
    }
};
</script>