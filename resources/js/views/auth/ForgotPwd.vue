<template>
    <div class="page-wraper">
        <div class="account-form">
            <div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">
                <router-link to="/"><img style="width: 80px;border-radius: 5px;" src="assets/images/logo-white-2.png" alt=""></router-link>
            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="heading-bx left">
                        <h2 class="title-head">Forget <span>Password</span></h2>
                        <p>Login Your Account <router-link to="/staffLogin">Click here</router-link></p>
                    </div>	
                    <form class="contact-bx">
                        <div class="row placeani">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="dzName" type="email" placeholder="Your Email Address" required="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 m-b30">
                                <button name="submit" type="submit" value="Submit" class="btn button-md btn-block">Submit</button>
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
import Footer from '@/views/oneTimeUseComponents/Footer.vue';
import Nav from '@/views/oneTimeUseComponents/Nav.vue'

export default {
  components: {
    Footer,
    Nav,
  },
  mounted() {
    document.title = 'Forgot password :- Intelligent system';
    window.scrollTo(0, 0);
  },
  // Component options
};
</script>