<template>
    <div v-show="user_role === 'Administrator'" class="layout-px-spacing">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Profile</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="row layout-spacing">
            <!-- Content -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 layout-top-spacing">
                <div class="user-profile layout-spacing">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="d-flex justify-content-between">
                                <h3 class="">Profile</h3>
                                <router-link to="/ui/adminProfileSettings" class="mt-2 edit-profile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-edit-3">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                </router-link>
                            </div>
                            <div class="text-center user-info">
                                <img style="width: 120px;" src="@/assets/images/profile-16.jpeg" alt="avatar" />
                                <p class=""> {{ first_name }} {{ last_name }}</p>
                            </div>
                            <div class="user-info-list">
                                <div class="">
                                    <ul class="contacts-block">
                                        <li class="contacts-block__item">{{ user_role }}</li>
                                        <li class="contacts-block__item">{{ gender }}</li>
                                        <li class="contacts-block__item">{{ phone_no }}</li>
                                        <li class="contacts-block__item">{{ email }}</li>
                                        <li class="contacts-block__item">{{ teacher_tsc_no }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 layout-top-spacing">
                <div class="work-experience layout-spacing ">
                    <div class="panel">
                        <div class="panel-body">
                            <h3 class=""> Password and security</h3>

                            <div class="panel-body">
                                <b-form @submit.prevent="updatePassword" class="form-vertical">
                                    <label for="Current password">Current password</label>

                                    <svg style="float: right; margin-right: 10px;" @click="set_pwd_type"
                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>

                                    <b-input-group>
                                        <b-input :type="pwd_type" v-model="fields.password"
                                            placeholder="Current password"></b-input>
                                    </b-input-group>

                                    <br />
                                    <br />

                                    <label for="New password">New password</label>

                                    <svg style="float: right; margin-right: 10px;" @click="set_pwd_type"
                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>

                                    <b-input-group>
                                        <b-input :type="pwd_type" v-model="fields.new_password"
                                            placeholder="New password"></b-input>
                                    </b-input-group>

                                    <br />

                                    <div v-if="errors">
                                        <h6 style="color: red;font-size: 12px;">
                                            {{ errors }}
                                        </h6>
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

                                </b-form>

                                <b-toast id="message" header-class="d-none"
                                    body-class="toast-success d-flex justify-content-between"
                                    toaster="b-toaster-top-center">
                                    Settings Saved Successfully
                                </b-toast>

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
import '@/assets/sass/users/user-profile.scss';
export default {
    metaInfo: { title: 'User Profile' },
    data() {
        return {
            fields: {},
            errors: "",
            pwd_type: 'password',
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
        };
    },

    methods: {
        //
        async updatePassword() {
            this.isSubmitting = true;
            try {
                const response = await axios.put(`/api/updatePassword/${this.id}`, {
                    password: this.fields.password,
                    new_password: this.fields.new_password,
                });
                if (response.status === 200) {
                    // window.location.href = '/ui/welcome';
                    console.log('Success')
                    this.errors = false;
                    this.fields = "";
                    this.$bvToast.show('message');
                }
            } catch (error) {
                console.log(error.response.data.message);
                this.errors = error.response.data.message;
            } finally {
                this.isSubmitting = false;
            }
        },

        set_pwd_type() {
            if (this.pwd_type == 'password') { this.pwd_type = 'text'; } else { this.pwd_type = 'password'; }
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
    },
};
</script>
