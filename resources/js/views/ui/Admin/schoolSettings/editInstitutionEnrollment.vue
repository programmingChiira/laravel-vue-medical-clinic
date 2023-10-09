<template>
    <div v-show="user_role === 'Administrator'" class="layout-px-spacing">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Administrator</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">settings</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>edit enrollment</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="account-settings-container layout-top-spacing">
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <b-form @submit.prevent="updateEnrollment" id="general-info"
                                class="section general-info">
                                <div class="info">
                                    <h6 class="">Edit details</h6>


                                    <div class="row justify-content-between">
                                        <div class="col-md-6">
                                            <img :src="'/'+fields.institution_logo"
                                                alt="profile" class="profile-preview"
                                                @click="$refs.fl_profile.click()" />
                                        </div>

                                        <div class="col-md-6">
                                            <label for="name">Name of institution</label>
                                            <b-input v-model="institution_name"
                                                placeholder="Name of institution" readonly></b-input>
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">

                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="institutionEmail1">Institution first
                                                    email </label>
                                                <b-input v-model="fields.institution_email_one" size="sm"
                                                    id="institutionEmail1"
                                                    placeholder="institution first email"
                                                    readonly></b-input>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="institutionEmail2">Institution
                                                    second email</label>
                                                <b-input v-model="fields.institution_email_two" size="sm"
                                                    id="institutionEmail2"
                                                    placeholder="institution second email"
                                                    readonly></b-input>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="institutionPhone1">Institution first
                                                    phone </label>
                                                <b-input v-model="fields.institution_phone_one" size="sm"
                                                    id="institutionPhone1"
                                                    placeholder="institution first phone"
                                                    readonly></b-input>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="institutionEmail2">Institution
                                                    second phone</label>
                                                <b-input v-model="fields.institution_phone_two" size="sm"
                                                    id="institutionEmail2"
                                                    placeholder="institution second phone"
                                                    readonly></b-input>
                                            </div>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">

                                        <div class="col-md-3">
                                            <div class="form-group mb-4">
                                                <label for="institutionCounty">County </label>
                                                <b-input v-model="fields.institution_county" size="sm"
                                                    id="institutionCounty" placeholder="County"
                                                    readonly>
                                                </b-input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group mb-4">
                                                <label for="institutionAddress">Institution
                                                    address </label>
                                                <b-input v-model="fields.institution_address" size="sm"
                                                    id="institutionAddress"
                                                    placeholder="institution address"
                                                    readonly></b-input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group mb-4">
                                                <label for="institutionLocation">Institution
                                                    pinned location </label>
                                                <b-input v-model="fields.institution_pinned_location" size="sm"
                                                    id="institutionLocation"
                                                    placeholder="institution pinned location" readonly>
                                                </b-input>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row justify-content-between">

                                        <div class="col-md-3">
                                            <div class="form-group mb-4">
                                                <label for="institutionType">Type of institution
                                                </label>
                                                <b-input v-model="fields.institution_type" size="sm"
                                                    id="institutionType" placeholder="institution type"
                                                    readonly>
                                                </b-input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group mb-4">
                                                <label for="institutionMode">Mode </label>
                                                <b-input v-model="fields.institution_mode" size="sm"
                                                    id="institutionMode" placeholder="institution mode"
                                                    readonly>
                                                </b-input>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group mb-4">
                                                <label for="studentGender">Student gender distro
                                                </label>
                                                <b-input v-model="fields.institution_gender_distro" size="sm"
                                                    id="studentGender" placeholder="institution distro"
                                                    readonly>
                                                </b-input>
                                            </div>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row">

                                        <div class="col-md-12 align-self-center">
                                            <div class="form-group row invoice-note">
                                                <label for="invoice-detail-notes"
                                                    class="col-sm-12 col-form-label col-form-label-sm">
                                                    Welcome
                                                    message
                                                </label>
                                                <div class="col-sm-12">
                                                    <b-textarea v-model="fields.institution_welcome_message"
                                                        rows="3" id="invoice-detail-notes"
                                                        placeholder='Welcome message'
                                                        readonly></b-textarea>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row">
                                        <div class="col-md-12 align-self-center">
                                            <div class="form-group row invoice-note">
                                                <label for="invoice-detail-notes"
                                                    class="col-sm-12 col-form-label col-form-label-sm">
                                                    Institution
                                                    mission and vission
                                                </label>
                                                <div class="col-sm-12">
                                                    <b-textarea v-model="fields.institution_mission_and_vision"
                                                        rows="3" id="invoice-detail-notes"
                                                        placeholder='Mission and vision'
                                                        readonly></b-textarea>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-md-4">
                                            <label for="name">
                                                Year of enrollment
                                                <span style="color: red;"> * </span>
                                            </label>
                                            <b-input v-model="fields.year_of_enrollment"
                                                placeholder="Enrollment year"></b-input>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="name">
                                                Month of enrollment
                                                <span style="color: red;"> * </span>
                                            </label>
                                            <b-input v-model="fields.month_of_enrollment"
                                                placeholder="Enrollment month"></b-input>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="name">
                                                Day of enrollment
                                                <span style="color: red;"> * </span>
                                            </label>
                                            <b-input v-model="fields.day_of_enrollment"
                                                placeholder="Enrollment day"></b-input>
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_1">
                                                1 <sup>st</sup> Requirement
                                                <span style="color: red;"> * </span>
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_1" rows="2"
                                                id="enrollment_requirment_1">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_2">
                                                2 <sup>nd</sup> Requirement
                                                <span style="color: red;"> * </span>
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_2" rows="2"
                                                id="enrollment_requirment_2">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_3">
                                                3 <sup>rd</sup> Requirement
                                                <span style="color: red;"> * </span>
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_3" rows="2"
                                                id="enrollment_requirment_3">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_4">
                                                4 <sup>th</sup> Requirement
                                                <span style="color: red;"> * </span>
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_4" rows="2"
                                                id="enrollment_requirment_4">
                                            </b-textarea>
                                        </div>

                                    </div>
                                    
                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_5">
                                                5 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_5" rows="2"
                                                id="enrollment_requirment_5">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_6">
                                                6 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_6" rows="2"
                                                id="enrollment_requirment_6">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_7">
                                                7 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_7" rows="2"
                                                id="enrollment_requirment_7">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_8">
                                                8 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_8" rows="2"
                                                id="enrollment_requirment_8">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_9">
                                                9 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_9" rows="2"
                                                id="enrollment_requirment_9">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_10">
                                                10 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_10" rows="2"
                                                id="enrollment_requirment_10">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_11">
                                                11 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_11" rows="2"
                                                id="enrollment_requirment_11">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_12">
                                                12 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_12" rows="2"
                                                id="enrollment_requirment_12">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_13">
                                                13 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_13" rows="2"
                                                id="enrollment_requirment_13">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_14">
                                                14 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_14" rows="2"
                                                id="enrollment_requirment_14">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_15">
                                                15 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_15" rows="2"
                                                id="enrollment_requirment_15">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_16">
                                                16 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_16" rows="2"
                                                id="enrollment_requirment_16">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_17">
                                                17 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_17" rows="2"
                                                id="enrollment_requirment_17">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_18">
                                                18 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_18" rows="2"
                                                id="enrollment_requirment_18">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_19">
                                                19 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_19" rows="2"
                                                id="enrollment_requirment_19">
                                            </b-textarea>
                                        </div>

                                    </div>

                                    <hr />

                                    <div class="row justify-content-between">
                                        <div class="col-sm-12">
                                            <label for="enrollment_requirment_20">
                                                20 <sup>th</sup> Requirement
                                            </label>
                                            <b-textarea v-model="fields.enrollment_requirment_20" rows="2"
                                                id="enrollment_requirment_20">
                                            </b-textarea>
                                        </div>

                                    </div>                                    

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

                                            <b-button variant="success" v-show="!isSubmitting"
                                                type="submit"
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

                                    <b-toast id="message" header-class="d-none"
                                        body-class="toast-success d-flex justify-content-between"
                                        toaster="b-toaster-top-center">
                                        Settings Saved Successfully
                                    </b-toast>
                                </div>

                            </b-form>
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
import '@/assets/sass/users/account-setting.scss';

export default {
    metaInfo: { title: 'Edit enrollment :- Intelligent system' },
    props: ["slug"],
    data() {
        return {
            fields: {},
            user_role: "",
            gender: "",
            isSubmitting: false,
            errors: "",
        };
    },

    methods: {
        async updateEnrollment() {
            this.isSubmitting = true;
            try {
                const response = await axios.post(`/api/updateInstitutionEnrollment/${this.fields.id}`, {
                    logoOfInstitution: this.fields.institution_logo,
                    nameOfInstitution: this.fields.institution_name,
                    institutionFirstEmail: this.fields.institution_email_one,
                    institutionSecondEmail: this.fields.institution_email_two,
                    institutionFirstPhone: this.fields.institution_phone_one,
                    institutionSecondPhone: this.fields.institution_phone_two,
                    institutionCountyOfOrigin: this.fields.institution_county,
                    addressOfInstitution: this.fields.institution_address,
                    institutionLocation: this.fields.institution_pinned_location,
                    typeOfInstitution: this.fields.institution_type,
                    modeOfInstitution: this.fields.institution_mode,
                    institutionGenderDistribution: this.fields.institution_gender_distro,
                    institutionWelcomeMessage: this.fields.institution_welcome_message,
                    institutionMissionAndVision: this.fields.institution_mission_and_vision,
                    yearOfEnrollment: this.fields.year_of_enrollment,
                    monthOfEnrollment: this.fields.month_of_enrollment,
                    dayOfEnrollment: this.fields.day_of_enrollment,
                    enrollmentFirstRequirment: this.fields.enrollment_requirment_1,
                    enrollmentSecondRequirment: this.fields.enrollment_requirment_2,
                    enrollmentThirdRequirment: this.fields.enrollment_requirment_3,
                    enrollmentFourthRequirment: this.fields.enrollment_requirment_4,
                    enrollmentFifthRequirment: this.fields.enrollment_requirment_5,
                    enrollment_requirment_6: this.fields.enrollment_requirment_6,
                    enrollment_requirment_7: this.fields.enrollment_requirment_7,
                    enrollment_requirment_8: this.fields.enrollment_requirment_8,
                    enrollment_requirment_9: this.fields.enrollment_requirment_9,
                    enrollment_requirment_10: this.fields.enrollment_requirment_10,
                    enrollment_requirment_11: this.fields.enrollment_requirment_11,
                    enrollment_requirment_12: this.fields.enrollment_requirment_12,
                    enrollment_requirment_13: this.fields.enrollment_requirment_13,
                    enrollment_requirment_14: this.fields.enrollment_requirment_14,
                    enrollment_requirment_15: this.fields.enrollment_requirment_15,
                    enrollment_requirment_16: this.fields.enrollment_requirment_16,
                    enrollment_requirment_17: this.fields.enrollment_requirment_17,
                    enrollment_requirment_18: this.fields.enrollment_requirment_18,
                    enrollment_requirment_19: this.fields.enrollment_requirment_19,
                    enrollment_requirment_20: this.fields.enrollment_requirment_20,
                });
                if (response.status === 200) {
                    // window.location.href = '/ui/welcome';
                    console.log('Success')
                    this.$bvToast.show('message');
                    this.errors = false;
                    this.isSubmitting = false;
                }
            } catch (error) {
                console.log(error.response.data.message);
                this.errors = error.response.data.errors;
            } finally {
                this.isSubmitting = false;
            }
        },
    },

    mounted() {
        axios
            .get("/api/institutionEnrollments/" + this.slug)
            .then((response) => {
                this.fields = response.data.data;
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
                this.gender = response.data.gender
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
    }
};
</script>
