<template>
    <body>
        <div class="container">
            <p style="margin-top: 10px;"> <router-link to="/"> Home</router-link> | <router-link to="/appointments">
                    Book</router-link>
                | <router-link to="/register"> Register</router-link></p>
            <div class="title">Login</div>
            <div class="content">
                <form action="#">
                    <div class="row user-details">
                        <div class="col-12 col-md-12 input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" placeholder="Enter your number" required>
                        </div>
                        <div class="col-12 col-md-12 input-box">
                            <span class="details">Password</span>
                            <input type="text" placeholder="Enter your password" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group form-forget">
                            <router-link to="/register" class="ml-auto">I don't have an account!</router-link>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>
    </body>
</template>

<script>
import axios from 'axios';
import Footer from '@/views/oneTimeUseComponents/Footer.vue';
import Nav from '@/views/oneTimeUseComponents/Nav.vue';

export default {
    components: {
        Footer,
        Nav,
    },

    data() {
        return {
            carousels: [],
            settings: [],
            institution_first_carousel: "",
            institution_second_carousel: "",
            institution_third_carousel: "",
            institution_logo: "",
            institution_name: "",
            institution_year_of_starting: "",
            institution_email_one: "",
            institution_email_two: "",
            institution_phone_one: "",
            institution_phone_two: "",
            institution_county: "",
            institution_address: "",
            institution_pinned_location: "",
            institution_type: "",
            institution_mode: "",
            institution_gender_distro: "",
            institution_welcome_message: "",
            institution_mission_and_vision: "",
        };
    },

    mounted() {
        document.title = 'Home :- Intelligent system';

        this.fetchCarousels();
        this.fetchSettings();
    },
    methods: {
        fetchCarousels() {
            axios.get('/api/institutionCarousels')
                .then(response => {
                    this.carousels = response.data.data;
                    if (this.carousels.length > 0) {

                        const carouselsData = this.carousels[0];
                        this.id = carouselsData.id;
                        this.institution_first_carousel = carouselsData.institution_first_carousel;
                        this.institution_second_carousel = carouselsData.institution_second_carousel;
                        this.institution_third_carousel = carouselsData.institution_third_carousel;
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        },

        fetchSettings() {
            axios.get('/api/institutionGeneralSettings')
                .then(response => {
                    this.settings = response.data.data;
                    if (this.settings.length > 0) {

                        const settingsData = this.settings[0];
                        this.id = settingsData.id;
                        this.institution_logo = settingsData.institution_logo;
                        this.institution_name = settingsData.institution_name;
                        this.institution_year_of_starting = settingsData.institution_year_of_starting;
                        this.institution_email_one = settingsData.institution_email_one;
                        this.institution_email_two = settingsData.institution_email_two;
                        this.institution_phone_one = settingsData.institution_phone_one;
                        this.institution_phone_two = settingsData.institution_phone_two;
                        this.institution_county = settingsData.institution_county;
                        this.institution_address = settingsData.institution_address;
                        this.institution_pinned_location = settingsData.institution_pinned_location;
                        this.institution_type = settingsData.institution_type;
                        this.institution_mode = settingsData.institution_mode;
                        this.institution_gender_distro = settingsData.institution_gender_distro;
                        this.institution_welcome_message = settingsData.institution_welcome_message;
                        this.institution_mission_and_vision = settingsData.institution_mission_and_vision;
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        },
    },
};
</script>

<style scoped>
body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background: linear-gradient(135deg, #178066, #178066);
}

.container {
    max-width: 700px;
    width: 100%;
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
}

.container .title {
    font-size: 25px;
    font-weight: 500;
    position: relative;
}

.container .title::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    border-radius: 5px;
    background: linear-gradient(135deg, #178066, #178066);
}

.content form .user-details {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}

form .user-details .input-box {
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px);
}

form .input-box span.details {
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}

.user-details .input-box input {
    height: 45px;
    width: 100%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    padding-left: 15px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid {
    border-color: #178066;
}

form .gender-details .gender-title {
    font-size: 20px;
    font-weight: 500;
}

form .category {
    display: flex;
    width: 80%;
    margin: 14px 0;
    justify-content: space-between;
}

form .category label {
    display: flex;
    align-items: center;
    cursor: pointer;
}

form .category label .dot {
    height: 18px;
    width: 18px;
    border-radius: 50%;
    margin-right: 10px;
    background: #d9d9d9;
    border: 5px solid transparent;
    transition: all 0.3s ease;
}

#dot-1:checked~.category label .one,
#dot-2:checked~.category label .two,
#dot-3:checked~.category label .three {
    background: #178066;
    border-color: #d9d9d9;
}

form input[type="radio"] {
    display: none;
}

form .button {
    height: 45px;
    margin: 35px 0
}

form .button input {
    height: 100%;
    width: 100%;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
    background: linear-gradient(135deg, #178066, #178066);
}

form .button input:hover {
    /* transform: scale(0.99); */
    background: linear-gradient(-135deg, #178066, #178066);
}

@media(max-width: 584px) {
    .container {
        max-width: 100%;
    }

    form .user-details .input-box {
        margin-bottom: 15px;
        width: 100%;
    }

    form .category {
        width: 100%;
    }

    .content form .user-details {
        max-height: 300px;
        overflow-y: scroll;
    }

    .user-details::-webkit-scrollbar {
        width: 5px;
    }
}

@media(max-width: 459px) {
    .container .content .category {
        flex-direction: column;
    }
}
</style>