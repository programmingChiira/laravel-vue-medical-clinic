<template>
    <div v-show="user_role === 'Administrator'" class="container">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Administrator</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">teachers</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>edit</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="container">
            <div class="nav sidenav">
                <scrollactive class="sidenav-content" tag="div" active-class="active" :offset="120" :modifyUrl="false"
                    :highlightFirstItem="true">
                    <a href="#alertBasic" class="nav-link scrollactive-item">Edit staff details</a>
                    <a href="#alertDepartment" class="nav-link scrollactive-item">Edit staff Department</a>
                    <a href="#alertCourse" class="nav-link scrollactive-item">Edit staff Course</a>
                </scrollactive>
            </div>

            <b-toast id="message" header-class="d-none" body-class="toast-success d-flex justify-content-between"
                toaster="b-toaster-top-center">
                Settings Saved Successfully
            </b-toast>

            <div class="row layout-top-spacing">
                <div id="alertBasic" class="col-lg-12 layout-spacing">
                    <div class="row">
                        <div class="col-12 col-md-12 ">
                            <router-link :to="`/ui/viewadminTeacherProfile/` + fields.slug" tag="button"
                                class="btn btn-success">
                                View
                            </router-link>
                        </div>
                    </div>
                    <br />
                    <b-form @submit.prevent="updateTeacherGeneralInformation" id="general-info"
                        class="section general-info">
                        <div class="info">
                            <h6 class="">Edit staff information</h6>
                            <div class="row">
                                <div class="col-lg-12 mx-auto">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                            <div class="form">

                                                <b-form-row class="mb-4">
                                                    <b-form-group label="First name" class="col-md-4">
                                                        <b-input type="text" placeholder="First name"
                                                            v-model="fields.first_name"></b-input>
                                                    </b-form-group>
                                                    <b-form-group label="Middle name" class="col-md-4">
                                                        <b-input type="text" placeholder="Middle name"
                                                            v-model="fields.middle_name"></b-input>
                                                    </b-form-group>
                                                    <b-form-group label="Last name" class="col-md-4">
                                                        <b-input type="text" placeholder="Last name"
                                                            v-model="fields.last_name"></b-input>
                                                    </b-form-group>
                                                </b-form-row>

                                                <hr />

                                                <b-form-row class="mb-4">
                                                    <b-form-group label="Phone no." class="col-md-6">
                                                        <b-input type="text" placeholder="Phone no."
                                                            v-model="fields.phone_no"></b-input>
                                                    </b-form-group>
                                                    <b-form-group label="Email" class="col-md-6">
                                                        <b-input type="text" placeholder="Email"
                                                            v-model="fields.email"></b-input>
                                                    </b-form-group>
                                                </b-form-row>

                                                <hr />

                                                <b-form-row class="mb-4">
                                                    <b-form-group label="Teacher tsc no." class="col-md-6">
                                                        <b-input type="text" placeholder="Teacher tsc no."
                                                            v-model="fields.teacher_tsc_no"></b-input>
                                                    </b-form-group>
                                                    <b-form-group label="Gender" class="col-md-6">
                                                        <b-select v-model="fields.gender" size="sm">
                                                            <b-select-option value="Female">Female</b-select-option>
                                                            <b-select-option value="Male">Male</b-select-option>
                                                        </b-select>
                                                    </b-form-group>
                                                </b-form-row>

                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div v-if="generalErrors">
                                                            <br />
                                                            <ul
                                                                style="color: red; font-size: 12px; list-style: none; padding: 0;">
                                                                <li v-for="(error, field) in generalErrors" :key="field">
                                                                    {{ field }}: {{ error }}
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <br />

                                                        <b-button variant="success" v-show="!isSubmitting" type="submit"
                                                            class="btn btn-success btn-block mb-4 mr-2">
                                                            UPDATE
                                                        </b-button>
                                                        <b-button class="btn btn-success btn-block mb-4 mr-2"
                                                            v-show="isSubmitting" type="button" variant="success">
                                                            <span
                                                                class="spinner-border text-white mr-2 align-self-center loader-sm">Loading...</span>
                                                        </b-button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </b-form>
                </div>
            </div>

            <div class="row layout-top-spacing">
                <div id="alertDepartment" class="col-lg-12 layout-spacing">
                    <div class="row">
                        <div class="col-12 col-md-12 ">
                        </div>
                    </div>
                    <br />

                    <b-form v-if="fields.department === null" @submit.prevent="createTeacherDepartmentInformation"
                        id="general-info" class="section general-info">
                        <div class="info">
                            <h6 class="">Edit staff department</h6>
                            <div class="row">
                                <div class="col-lg-12 mx-auto">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                            <div class="form">
                                                <b-form-row class="mb-4">
                                                    <b-form-group label="Department" class="col-md-12">
                                                        <multiselect v-model="selectedDepartments"
                                                            :options="selectDepartmentOptions" :multiple="true"
                                                            :taggable="true" :searchable="true" placeholder="Choose..."
                                                            selected-label="" select-label="" deselect-label=""
                                                            @tag="addDepartmentTag">
                                                        </multiselect>

                                                        <div v-for="department in selectedDepartments" :key="department"
                                                            class="hidden-input">
                                                            <b-form-input v-model="selectedDepartmentSlugs[department]"
                                                                readonly></b-form-input>
                                                        </div>
                                                    </b-form-group>
                                                </b-form-row>

                                                <b-form-row v-for="department in selectedDepartments" :key="department"
                                                    class="mb-4">
                                                    <b-form-group :label="department + ' Role'" class="col-md-12">
                                                        <b-select v-model="selectedDepartmentRoles[department]" size="sm">
                                                            <b-select-option :value="department + ' HOD'">{{ department }}
                                                                H.O.D</b-select-option>
                                                            <b-select-option :value="department + ' Member'">{{ department
                                                            }} Member</b-select-option>
                                                        </b-select>
                                                    </b-form-group>
                                                </b-form-row>

                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div v-if="errors">
                                                            <br />
                                                            <ul
                                                                style="color: red; font-size: 12px; list-style: none; padding: 0;">
                                                                <li v-for="(error, field) in errors" :key="field">
                                                                    {{ field }}: {{ error }}
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <br />

                                                        <b-button variant="success" v-show="!isSubmitting" type="submit"
                                                            class="btn btn-success btn-block mb-4 mr-2">
                                                            UPDATE
                                                        </b-button>
                                                        <b-button class="btn btn-success btn-block mb-4 mr-2"
                                                            v-show="isSubmitting" type="button" variant="success">
                                                            <span
                                                                class="spinner-border text-white mr-2 align-self-center loader-sm">Loading...</span>
                                                        </b-button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </b-form>

                    <b-form v-else @submit.prevent="updateTeacherDepartmentInformation" id="general-info"
                        class="section general-info">
                        <div class="info">
                            <h6 class="">Edit staff department</h6>
                            <div class="row">
                                <div class="col-lg-12 mx-auto">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                            <div class="form">
                                                <b-form-row class="mb-4">
                                                    <b-form-group label="Department" class="col-md-12">
                                                        <multiselect v-model="selectedDepartments"
                                                            :options="selectDepartmentOptions" :multiple="true"
                                                            :taggable="true" :searchable="true" placeholder="Choose..."
                                                            selected-label="" select-label="" deselect-label=""
                                                            @tag="addDepartmentTag">
                                                        </multiselect>

                                                        <!-- Use a computed property to generate separate inputs for department slugs -->
                                                        <div v-for="department in selectedDepartments" :key="department"
                                                            class="hidden-input">
                                                            <b-form-input v-model="selectedDepartmentSlugs[department]"
                                                                readonly></b-form-input>
                                                        </div>
                                                    </b-form-group>
                                                </b-form-row>

                                                <b-form-row v-for="department in selectedDepartments" :key="department"
                                                    class="mb-4">
                                                    <b-form-group :label="department + ' Role'" class="col-md-12">
                                                        <b-select v-model="selectedDepartmentRoles[department]" size="sm">
                                                            <b-select-option :value="department + ' HOD'">{{
                                                                department }} H.O.D</b-select-option>
                                                            <b-select-option :value="department + ' Member'">{{
                                                                department }} Member</b-select-option>
                                                        </b-select>
                                                    </b-form-group>
                                                </b-form-row>

                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div v-if="errors">
                                                            <br />
                                                            <ul
                                                                style="color: red; font-size: 12px; list-style: none; padding: 0;">
                                                                <li v-for="(error, field) in errors" :key="field">
                                                                    {{ field }}: {{ error }}
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <br />

                                                        <b-button variant="success" v-show="!isSubmitting" type="submit"
                                                            class="btn btn-success btn-block mb-4 mr-2">
                                                            UPDATE
                                                        </b-button>
                                                        <b-button class="btn btn-success btn-block mb-4 mr-2"
                                                            v-show="isSubmitting" type="button" variant="success">
                                                            <span
                                                                class="spinner-border text-white mr-2 align-self-center loader-sm">Loading...</span>
                                                        </b-button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </b-form>
                </div>
            </div>

            <div class="row layout-top-spacing">
                <div id="alertCourse" class="col-lg-12 layout-spacing">
                    <div class="row">
                        <div class="col-12 col-md-12 ">
                        </div>
                    </div>
                    <br />
                    <b-form v-if="fields.course === null" @submit.prevent="createTeacherCourseInformation" id="general-info"
                        class="section general-info">
                        <div class="info">
                            <h6 class="">Edit staff courses</h6>
                            <div class="row">
                                <div class="col-lg-12 mx-auto">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                            <div class="form">

                                                <b-form-row class="mb-4">
                                                    <b-form-group label="Subjects" class="col-md-12">
                                                        <multiselect v-model="selectedCourses"
                                                            :options="selectCourseOptions" :multiple="true" :taggable="true"
                                                            :searchable="true" placeholder="Choose..." selected-label=""
                                                            select-label="" deselect-label="" @tag="addCourseTag">
                                                        </multiselect>

                                                        <div v-for="course in selectedCourses" :key="course"
                                                            class="hidden-input">
                                                            <b-form-input v-model="selectedCourseSlugs[course]" readonly>
                                                            </b-form-input>
                                                        </div>
                                                    </b-form-group>
                                                </b-form-row>

                                                <b-form-row v-for="course in selectedCourses" :key="course" class="mb-4">
                                                    <b-form-group :label="'Streams taught by ' + course + ' teacher'"
                                                        class="col-md-12">
                                                        <multiselect v-model="selectedClassYears[course]"
                                                            :options="generateFormStreamOptions(course)" :multiple="true"
                                                            :taggable="true" :searchable="true" placeholder="Choose..."
                                                            selected-label="" select-label="" deselect-label=""
                                                            @tag="addClassTag">
                                                        </multiselect>
                                                    </b-form-group>
                                                </b-form-row>

                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div v-if="errors">
                                                            <br />
                                                            <ul
                                                                style="color: red; font-size: 12px; list-style: none; padding: 0;">
                                                                <li v-for="(error, field) in errors" :key="field">
                                                                    {{ field }}: {{ error }}
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <br />

                                                        <b-button variant="success" v-show="!isSubmitting" type="submit"
                                                            class="btn btn-success btn-block mb-4 mr-2">
                                                            UPDATE
                                                        </b-button>
                                                        <b-button class="btn btn-success btn-block mb-4 mr-2"
                                                            v-show="isSubmitting" type="button" variant="success">
                                                            <span
                                                                class="spinner-border text-white mr-2 align-self-center loader-sm">Loading...</span>
                                                        </b-button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </b-form>

                    <b-form v-else @submit.prevent="updateTeacherCourseInformation" id="general-info"
                        class="section general-info">
                        <div class="info">
                            <h6 class="">Edit staff courses</h6>
                            <div class="row">
                                <div class="col-lg-12 mx-auto">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                            <div class="form">

                                                <b-form-row class="mb-4">
                                                    <b-form-group label="Course" class="col-md-12">
                                                        <multiselect v-model="selectedCourses"
                                                            :options="selectCourseOptions" :multiple="true" :taggable="true"
                                                            :searchable="true" placeholder="Choose..." selected-label=""
                                                            select-label="" deselect-label="" @tag="addCourseTag">
                                                        </multiselect>

                                                        <!-- Use a computed property to generate separate inputs for course slugs -->
                                                        <div v-for="course in selectedCourses" :key="course"
                                                            class="hidden-input">
                                                            <b-form-input v-model="selectedCourseSlugs[course]"
                                                                readonly></b-form-input>
                                                        </div>
                                                    </b-form-group>
                                                </b-form-row>

                                                <b-form-row v-for="course in selectedCourses" :key="course" class="mb-4">
                                                    <b-form-group :label="'Streams taught by ' + course + ' teacher'"
                                                        class="col-md-12">
                                                        <multiselect v-model="selectedStreamYears[course]"
                                                            :options="generateFormStreamOptions(course)" :multiple="true"
                                                            :taggable="true" :searchable="true" placeholder="Choose..."
                                                            selected-label="" select-label="" deselect-label=""
                                                            @tag="addClassTag">
                                                        </multiselect>
                                                    </b-form-group>
                                                </b-form-row>

                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div v-if="errors">
                                                            <br />
                                                            <ul
                                                                style="color: red; font-size: 12px; list-style: none; padding: 0;">
                                                                <li v-for="(error, field) in errors" :key="field">
                                                                    {{ field }}: {{ error }}
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <br />

                                                        <b-button variant="success" v-show="!isSubmitting" type="submit"
                                                            class="btn btn-success btn-block mb-4 mr-2">
                                                            UPDATE
                                                        </b-button>
                                                        <b-button class="btn btn-success btn-block mb-4 mr-2"
                                                            v-show="isSubmitting" type="button" variant="success">
                                                            <span
                                                                class="spinner-border text-white mr-2 align-self-center loader-sm">Loading...</span>
                                                        </b-button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </b-form>

                </div>
            </div>

        </div>
    </div>
</template>

<style scoped>
.hidden-input {
    display: none;
}

.select2 .multiselect__option--highlight {
    background: #fff;
    color: #4361ee;
}

.select2 .multiselect__option--selected {
    background-color: rgba(27, 85, 226, 0.23921568627450981);
    color: #4361ee;
    font-weight: normal;
}

.select2 .multiselect__option--disabled {
    background: inherit !important;
}

.select2 .multiselect__tag {
    color: #000;
    background: #e4e4e4;
}

.select2 .multiselect__tag-icon:after {
    color: #000 !important;
}

.select2 .multiselect__tag-icon:focus,
.select2 .multiselect__tag-icon:hover {
    background: inherit;
}
</style>

<script>
import axios from 'axios';
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
    metaInfo: { title: 'Edit staff information :- Intelligent system' },
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
            generalErrors: "",
        };
    },

    watch: {
        selectedDepartments: {
            handler(newDepartments) {
                for (const department in this.selectedDepartmentRoles) {
                    if (!newDepartments.includes(department)) {
                        this.selectedDepartmentRoles[department] = [];
                        delete this.selectedDepartmentRoles[department];
                    }
                }
            },
            deep: true,
        },

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

        selectedCourses: {
            handler(newCourses, oldCourses) {
                const deselectedCourse = oldCourses.find(course => !newCourses.includes(course));
                if (deselectedCourse) {
                    this.$delete(this.selectedStreamYears, deselectedCourse);
                }
            },
            deep: true,
        },
    },

    mounted() {
        this.fetchDepartment();
        this.fetchSettings();
        this.fetchCourse();
        this.fetchClass();
        this.fetchStream();
        this.fetchSlugUser();
        this.fetchUser();


    },

    methods: {
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

        fetchSlugUser() {
            axios
                .get("/api/users/" + this.slug)
                .then((response) => {
                    this.fields = response.data.data;
                    this.selectedDepartments = JSON.parse(this.fields.department.department);
                    //this.selectedDepartmentSlugs = JSON.parse(this.fields.department.department_slug);
                    this.selectedDepartmentRoles = JSON.parse(this.fields.department.department_role);
                    this.selectedCourses = JSON.parse(this.fields.course.course);
                    //this.selectedCourseSlugs = JSON.parse(this.fields.course.course_slug);
                    this.selectedStreamYears = JSON.parse(this.fields.course.class_stream);

                })
                .catch((error) => {
                    if (error.response.status === 403) {
                        //this.$router.push({ name: "Blog" });
                    }
                });
        },

        fetchUser() {
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

        fetchDepartment() {
            axios
                .get('/api/institutionDepartments')
                .then((response) => {
                    this.departments = response.data.data;
                    this.selectDepartmentOptions = this.departments.map((department) => {
                        return department.department;
                    });

                    this.departments.forEach((department) => {
                        this.selectedDepartmentSlugs[department.department] = department.slug;
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

                    this.courses.forEach((course) => {
                        this.selectedCourseSlugs[course.course] = course.slug;
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

        async updateTeacherGeneralInformation() {
            this.isSubmitting = true;
            try {
                const response = await axios.post(`/api/updateTeacherGeneralProfile/${this.fields.id}`, {
                    staffFirstName: this.fields.first_name,
                    staffMiddleName: this.fields.middle_name,
                    staffSurName: this.fields.last_name,
                    staffMobileNumber: this.fields.phone_no,
                    staffEmail: this.fields.email,
                    staffGender: this.fields.gender,
                    staffTscNumber: this.fields.teacher_tsc_no,
                });
                if (response.status === 200) {
                    // window.location.href = '/ui/welcome';
                    console.log('Success')
                    this.$bvToast.show('message');
                    this.errors = false;
                    this.isSubmitting = false;
                }
                this.fetchSlugUser();
            } catch (error) {
                console.log(error.response.data.message);
                this.generalErrors = error.response.data.errors;
            } finally {
                this.isSubmitting = false;
            }
        },

        async updateTeacherDepartmentInformation() {
            this.isSubmitting = true;
            try {
                const selectedDepartmentSlugs = {};
                for (const department of this.selectedDepartments) {
                    selectedDepartmentSlugs[department] = this.selectedDepartmentSlugs[department];
                }

                const response = await axios.post(`/api/updateTeacherDepartmentProfile/${this.fields.department.id}`, {
                    first_name: this.fields.first_name,
                    middle_name: this.fields.middle_name,
                    last_name: this.fields.last_name,
                    departments: this.selectedDepartments,
                    department_roles: this.selectedDepartmentRoles,
                    department_slug: selectedDepartmentSlugs,
                });
                if (response.status === 200) {
                    console.log('Success')
                    this.$bvToast.show('message');
                    this.errors = false;
                    this.isSubmitting = false;
                }

                this.fetchDepartment();
                this.fetchSlugUser();

            } catch (error) {
                console.error('Registration failed:', error);
            } finally {
                this.isSubmitting = false;
            }
        },

        async updateTeacherCourseInformation() {
            this.isSubmitting = true;
            try {
                const selectedCourseSlugs = {};
                for (const course of this.selectedCourses) {
                    selectedCourseSlugs[course] = this.selectedCourseSlugs[course];
                }

                const selectedClassStreams = {};
                for (const course in this.selectedStreamYears) {
                    selectedClassStreams[course] = this.selectedStreamYears[course];
                }

                const response = await axios.post(`/api/updateTeacherCourseProfile/${this.fields.course.id}`, {
                    first_name: this.fields.first_name,
                    middle_name: this.fields.middle_name,
                    last_name: this.fields.last_name,
                    course: this.selectedCourses,
                    course_slug: selectedCourseSlugs,
                    class_stream: selectedClassStreams, // Updated to send class streams
                });
                if (response.status === 200) {
                    console.log('Success')
                    this.$bvToast.show('message');
                    this.errors = false;
                    this.isSubmitting = false;
                }
                this.fetchSlugUser();
            } catch (error) {
                console.error('Update failed:', error);
            } finally {
                this.isSubmitting = false;
            }
        },


        async createTeacherDepartmentInformation() {
            this.isSubmitting = true;

            try {
                const selectedDepartmentSlugs = {};
                for (const department of this.selectedDepartments) {
                    selectedDepartmentSlugs[department] = this.selectedDepartmentSlugs[department];
                }

                const formData = {
                    uniqueId: this.fields.slug,
                    first_name: this.fields.first_name,
                    middle_name: this.fields.middle_name,
                    last_name: this.fields.last_name,
                    departments: this.selectedDepartments,
                    department_roles: this.selectedDepartmentRoles,
                    department_slug: selectedDepartmentSlugs,
                };

                console.log(formData);
                const response = await axios.post('/api/teacherDepartmentRegistration', formData);
                console.log('Registration successful:', response.data);

                this.fetchDepartment();
                this.fetchSlugUser();

            } catch (error) {
                console.error('Registration failed:', error);
            } finally {
                this.isSubmitting = false;
            }
        },

        async createTeacherCourseInformation() {
            this.isSubmitting = true;

            try {
                const selectedCourseSlugs = {};
                for (const course of this.selectedCourses) {
                    selectedCourseSlugs[course] = this.selectedCourseSlugs[course];
                }

                const formData = {
                    uniqueId: this.fields.slug,
                    first_name: this.fields.first_name,
                    middle_name: this.fields.middle_name,
                    last_name: this.fields.last_name,
                    courses: this.selectedCourses,
                    course_slug: selectedCourseSlugs,
                    class_stream: this.selectedClassYears,
                };

                console.log(formData);
                const response = await axios.post('/api/teacherCourseRegistration', formData);
                console.log('Registration successful:', response.data);

                this.fetchCourse();
                this.fetchSlugUser();

            } catch (error) {
                console.error('Registration failed:', error);
            } finally {
                this.isSubmitting = false;
            }
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