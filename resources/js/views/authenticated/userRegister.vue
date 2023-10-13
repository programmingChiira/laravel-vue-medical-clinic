<template>
    <body>
        <div class="container">
            <p style="margin-top: 10px;"> <router-link to="/"> Home</router-link> | <router-link to="/appointments">
                Book</router-link>
            | <router-link to="/login"> Login</router-link></p>
            <div class="title">Registration</div>
            <div class="content">
                <form action="#">
                    <div class="row user-details">
                        <div class="col-12 col-md-12 input-box">
                            <span class="details">Full Name</span>
                            <input type="text" placeholder="Enter your name" required>
                        </div>
                        <div class="col-6 col-md-6 input-box">
                            <span class="details">Email</span>
                            <input type="text" placeholder="Enter your email" required>
                        </div>
                        <div class="col-6 col-md-6 input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" placeholder="Enter your number" required>
                        </div>
                        <div class="col-6 col-md-6 input-box">
                            <span class="details">Password</span>
                            <input type="text" placeholder="Enter your password" required>
                        </div>
                        <div class="col-6 col-md-6 input-box">
                            <span class="details">Confirm Password</span>
                            <input type="text" placeholder="Confirm your password" required>
                        </div>
                    </div>
                    <div class="gender-details">
                        <input type="radio" name="gender" id="dot-1">
                        <input type="radio" name="gender" id="dot-2">
                        <input type="radio" name="gender" id="dot-3">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group form-forget">
                            <router-link to="/login" class="ml-auto">Already have an account?</router-link>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Register">
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