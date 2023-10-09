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
                                <li v-show="institution_type == 'High school'" class="breadcrumb-item active" aria-current="page"><span>edit form</span></li>
                                <li v-show="institution_type == 'Junior high school'" class="breadcrumb-item active" aria-current="page"><span>edit form</span></li>
                                <li v-show="institution_type == 'Primary school'" class="breadcrumb-item active" aria-current="page"><span>edit class</span></li>
                                <li v-show="institution_type == 'Tertiary institution'" class="breadcrumb-item active" aria-current="page"><span>edit year</span></li>
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
                            <b-form @submit.prevent="updateClass" id="general-info"
                                class="section general-info">
                                <div class="info">
                                    <h6 class="">Edit information</h6>
                                    <div class="row">
                                        <div class="col-lg-12 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                    <div class="form">

                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div v-show="institution_type == 'High school'" class="form-group">
                                                                    <label for="form">Form</label>
                                                                    <b-input class="mb-4" id="form"
                                                                        placeholder="Form" v-model="fields.class">
                                                                    </b-input>
                                                                </div>

                                                                <div v-show="institution_type == 'Junior high school'" class="form-group">
                                                                    <label for="form">Form</label>
                                                                    <b-input class="mb-4" id="form"
                                                                        placeholder="Form" v-model="fields.class">
                                                                    </b-input>
                                                                </div>

                                                                <div v-show="institution_type == 'Primary school'" class="form-group">
                                                                    <label for="class">Class</label>
                                                                    <b-input class="mb-4" id="class"
                                                                        placeholder="Class" v-model="fields.class">
                                                                    </b-input>
                                                                </div>

                                                                <div v-show="institution_type == 'Tertiary institution'" class="form-group">
                                                                    <label for="year">Year</label>
                                                                    <b-input class="mb-4" id="year"
                                                                        placeholder="Year" v-model="fields.class">
                                                                    </b-input>
                                                                </div>
                                                            </div>
                                                        </div>

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
                                                    </div>
                                                </div>
                                            </div>
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
    metaInfo: { title: 'Edit class / year / form :- Intelligent system' },
    props: ["slug"],
    data() {
        return {
            fields: {},
            settings: {},
            user_role: "",
            gender: "",
            isSubmitting: false,
            errors: "",
        };
    },

    mounted() {
        this.fetchSettings();

        axios
            .get("/api/institutionClasses/" + this.slug)
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
    },

    methods: {
        async updateClass() {
            this.isSubmitting = true;
            try {
                const response = await axios.post(`/api/updateInstitutionClass/${this.fields.id}`, {
                    className: this.fields.class,
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
    },
};
</script>
