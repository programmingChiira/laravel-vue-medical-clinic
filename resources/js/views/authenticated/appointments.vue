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
                                            <span class="form-label">From (Availablity)</span>
                                            <input class="form-control" type="date" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">To (Availablity)</span>
                                            <input class="form-control" type="date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-margin">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <span class="form-label">Age</span>
                                            <input class="form-control" type="number" min="1" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Any predisposed conditions</span>
                                    <select class="form-control" required>
                                        <option value="" selected hidden>Select </option>
                                        <option>No</option>
                                        <option>Yes</option>
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
            //
        };
    },

    mounted() {
        document.title = 'Home :- Intelligent system';
    },
    methods: {
        //
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
    color: #388087;
    font-weight: 400;
    line-height: 24px;
    font-style: italic;
    height: 24px;
    font-size: 14px;
}

.booking-form .submit-btn {
    color: #fff;
    background-color: #388087;
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