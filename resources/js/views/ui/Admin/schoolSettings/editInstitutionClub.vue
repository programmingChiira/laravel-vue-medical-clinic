<template>
    <div v-show="user_role === 'Administrator'" class="layout-px-spacing">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Administrator</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">settngs</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>edit club</span></li>
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
                            <b-form @submit.prevent="updateClub" id="general-info"
                                class="section general-info">
                                <div class="info">
                                    <h6 class="">Edit club details</h6>
                                    <div class="row">
                                        <div class="col-lg-12 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                    <div class="form">

                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="class">Club</label>
                                                                    <b-input class="mb-4" id="club"
                                                                        placeholder="Club" v-model="fields.club">
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
    metaInfo: { title: 'Edit club :- Intelligent system' },
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
        async updateClub() {
            this.isSubmitting = true;
            try {
                const response = await axios.post(`/api/updateInstitutionClub/${this.fields.id}`, {
                    clubName: this.fields.club,
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
            .get("/api/institutionClubs/" + this.slug)
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
