<template>
    <div class="page-wraper">
        <div class="account-form">
            <div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">
                <router-link to="/"><img style="width: 80px;border-radius: 5px;" src="assets/images/logo-white-2.png"
                        alt=""></router-link>
            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="heading-bx left">
                        <h2 class="title-head"><span>Staff</span> Login</h2>
                        <p> <router-link to="/"> Home</router-link></p>
                    </div>

                    <form @submit.prevent="staffSubmit" class="contact-bx">
                        <div class="row placeani">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" v-model="fields.last_name" class="form-control"
                                            placeholder="Last name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="email" v-model="fields.email" class="form-control"
                                            placeholder="Your email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input :type="pwd_type" v-model="fields.password" class="form-control"
                                            placeholder="Your passowrd" required>
                                        <svg @click="set_pwd_type" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" id="toggle-password"
                                            class="feather feather-eye">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group form-forget">
                                    <router-link to="/forgotPassword" class="ml-auto">Forgot Password?</router-link>
                                </div>
                            </div>
                            <div v-if="errors">
                                <h6 style="color: red;font-size: 12px;">
                                    Invalid login credentials.
                                </h6>
                            </div>
                            <div class="col-lg-12 m-b30">
                                <button v-show="!isSubmitting" type="submit" class="btn button-md btn-block" value="">LOGIN</button>
                                <button v-show="isSubmitting" type="button" class="btn button-md btn-block" size="lg">
                                    <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <Footer></Footer>
    </div>
</template>

<script>
import axios from 'axios';
import Footer from '@/views/oneTimeUseComponents/Footer.vue';
import Nav from '@/views/oneTimeUseComponents/Nav.vue'

import '@/assets/sass/authentication/auth-boxed.scss';
import '@/assets/sass/scrollspyNav.scss';
import '@/assets/sass/components/tabs-accordian/custom-tabs.scss';

export default {
    components: {
        Footer,
        Nav,
    },

    data() {
        return {
            //
            fields: {},
            currentYear: new Date().getFullYear(),
            pwd_type: 'password',
            code_arr: [],
            studentErrors: "",
            parentErrors: "",
            errors: "",
            isSubmitting: false,
            user_role: "",
        };
    },

    mounted() {
        document.title = 'Staff authentication :- Intelligent system';
        axios
            .get("/api/user")
            //.then((response) => (this.id = response.data.id))
            .then(response => {
                this.user_role = response.data.user_role
                if (response.status === 200) {
                    window.location.href = "/";
                }
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
        async staffSubmit() {
            this.isSubmitting = true;
            try {
                const response = await axios.post("/api/staffLogin", {
                    last_name: this.fields.last_name,
                    email: this.fields.email,
                    password: this.fields.password,
                });
                if (response.status === 200) {
                    window.location.href = "/ui/welcome";
                }
            } catch (error) {
                this.errors = error.response.data.message;
                this.isSubmitting = false;
            }
        },


        set_pwd_type() {
            if (this.pwd_type == 'password') { this.pwd_type = 'text'; } else { this.pwd_type = 'password'; }
        },

        toggleCode(name) {
            if (this.code_arr.includes(name)) {
                this.code_arr = this.code_arr.filter(d => d != name);
            }
            else {
                this.code_arr.push(name);
            }
        }
    },
};
</script>