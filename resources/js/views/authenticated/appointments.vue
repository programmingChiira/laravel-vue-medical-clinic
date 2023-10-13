<template>
    <body class="sub_page">
        <div class="hero_area">
            <Nav></Nav>
        </div>

        <!-- contact section -->
        <div id="booking" class="section">
            <div class="section-center">
                <div class="container">

                    <div class="row">
                        <div class="col-12 col-md-12 booking-form">
                            <h2>
                                Make Appointment
                            </h2>
                            <form>
                                <div class="row no-margin">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Check In</span>
                                            <input class="form-control" type="date" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Check Out</span>
                                            <input class="form-control" type="date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-margin">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Adults (18+)</span>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Children (0-17)</span>
                                            <select class="form-control">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Room Type</span>
                                    <select class="form-control" required>
                                        <option value="" selected hidden>Select room type</option>
                                        <option>Private Room (1 to 2 People)</option>
                                        <option>Family Room (1 to 4 People)</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Email</span>
                                    <input class="form-control" type="email" placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Phone</span>
                                    <input class="form-control" type="tel" placeholder="Enter your phone number">
                                </div>
                                <div class="form-btn">
                                    <button class="submit-btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact section -->

        <!-- footer section -->
        <Footer></Footer>
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
.section {
    position: relative;
    height: 90vh;
}

.section .section-center {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

#booking {
    font-family: 'Lato', sans-serif;
}

.booking-form {
    max-width: 586px;
    width: 100%;
    margin: auto;
}

.booking-form .form-group {
    position: relative;
    margin-bottom: 0px;
}

.booking-form>form .row.no-margin {
    margin-right: 0px;
    margin-left: 0px;
}

.booking-form>form .row.no-margin [class*="col-"] {
    padding-right: 0px;
    padding-left: 0px;
}

.booking-form .form-control {
    background-color: #fff;
    height: 80px;
    padding: 25px 20px 0px;
    border-radius: 0px;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #0e2753;
    border: 1px solid #dddee9;
    border-bottom: 0px;
    font-size: 20px;
    font-weight: 700;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
}

.booking-form [class*="col-"]+[class*="col-"] .form-group .form-control {
    border-left: 0px;
}

.booking-form .form-control::-webkit-input-placeholder {
    color: #dddee9;
}

.booking-form .form-control:-ms-input-placeholder {
    color: #dddee9;
}

.booking-form .form-control::placeholder {
    color: #dddee9;
}

.booking-form .form-control:focus {
    background: #f9f9f9;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.booking-form input[type="date"].form-control:invalid {
    color: #dddee9;
}

.booking-form select.form-control {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.booking-form select.form-control:invalid {
    color: #dddee9;
}

.booking-form select.form-control option {
    color: #0e2753;
}

.booking-form select.form-control+.select-arrow {
    position: absolute;
    right: 0px;
    bottom: 4px;
    width: 32px;
    line-height: 32px;
    height: 32px;
    text-align: center;
    pointer-events: none;
    color: #dddee9;
    font-size: 20px;
}

.booking-form select.form-control+.select-arrow:after {
    content: '\279C';
    display: block;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
}

.booking-form .form-label {
    position: absolute;
    left: 20px;
    top: 10px;
    color: #178066;
    font-weight: 400;
    line-height: 24px;
    font-style: italic;
    height: 24px;
    font-size: 14px;
}

.booking-form .submit-btn {
    color: #fff;
    background-color: #178066;
    font-weight: 700;
    height: 80px;
    font-size: 18px;
    text-transform: capitalize;
    border: none;
    width: 100%;
}

@media only screen and (max-width: 767px) {
    .booking-form [class*="col-"]+[class*="col-"] .form-group .form-control {
        border-left: 1px solid #dddee9;
    }
}
</style>