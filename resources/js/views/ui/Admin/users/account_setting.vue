<template>
    <div v-show="user_role === 'Administrator'" class="layout-px-spacing">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Edit profile</span></li>
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
                            <b-form @submit.prevent="updateProfile" id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="">User details</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                    <div class="upload mt-4 pr-md-4">
                                                        <router-link to="/ui/adminProfile">
                                                            <img style="width: 120px;" src="@/assets/images/profile-16.jpeg"
                                                                alt="avatar" />
                                                        </router-link>
                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">

                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="firstname">First Name</label>
                                                                    <b-input class="mb-4" id="firstname"
                                                                        placeholder="First Name" v-model="first_name">
                                                                    </b-input>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="middlename">Middle Name</label>
                                                                    <b-input class="mb-4" id="middlename"
                                                                        placeholder="Middle Name" v-model="middle_name">
                                                                    </b-input>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="lastname">Last Name</label>
                                                                    <b-input class="mb-4" id="lastname"
                                                                        placeholder="Last Name" v-model="last_name">
                                                                    </b-input>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="phone"> Phone number</label>
                                                                    <b-input class="mb-4" id="phone"
                                                                        placeholder="Phone number" v-model="phone_no">
                                                                    </b-input>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="email"> Email</label>
                                                                    <b-input class="mb-4" id="email"
                                                                        placeholder="User email" v-model="email">
                                                                    </b-input>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="role"> Role</label>
                                                                    <b-input class="mb-4" id="role" placeholder="User role"
                                                                        :value="user_role" disabled>
                                                                    </b-input>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="subrole"> Sub-role</label>
                                                                    <b-input class="mb-4" id="subrole"
                                                                        placeholder="User sub-role" :value="gender"
                                                                        disabled>
                                                                    </b-input>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="tscnumber">T.S.C Number</label>
                                                            <b-input class="mb-4" id="tscnumber" placeholder="T.S.C Number"
                                                                :value="teacher_tsc_no" disabled>
                                                            </b-input>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div v-if="errors">
                                        <br />
                                        <ul style="color: red; font-size: 12px; list-style: none; padding: 0;">
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
                                    <b-button class="btn btn-success btn-block mb-4 mr-2" v-show="isSubmitting"
                                        type="button" variant="success">
                                        <span
                                            class="spinner-border text-white mr-2 align-self-center loader-sm">Loading...</span>
                                    </b-button>

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
    metaInfo: { title: 'Edit profile' },
    data() {
        return {
            fields: {},
            id: "",
            first_name: "",
            middle_name: "",
            last_name: "",
            slug: "",
            email: "",
            phone_no: "",
            last_name: "",
            user_role: "",
            gender: "",
            teacher_tsc_no: "",
            user_account_status: "",
            isSubmitting: false,
            errors: "",
        };
    },

    methods: {
        change_file(event) {
            this.selected_file = URL.createObjectURL(event.target.files[0]);
        },

        async updateProfile() {
            this.isSubmitting = true;
            try {
                const response = await axios.put(`/api/updateProfile/${this.id}`, {
                    firstName: this.first_name,
                    secondName: this.middle_name,
                    surName: this.last_name,
                    mobileNumber: this.phone_no,
                    email: this.email,
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
            .get("/api/user")
            //.then((response) => (this.id = response.data.id))
            .then(response => {
                this.id = response.data.id
                this.first_name = response.data.first_name
                this.middle_name = response.data.middle_name
                this.last_name = response.data.last_name
                this.slug = response.data.slug
                this.email = response.data.email
                this.phone_no = response.data.phone_no
                this.user_role = response.data.user_role
                this.gender = response.data.gender
                this.teacher_tsc_no = response.data.teacher_tsc_no
                this.user_account_status = response.data.user_account_status

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
