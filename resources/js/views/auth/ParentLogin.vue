<template>
    <div class="page-wraper">
        <div class="account-form">
            <div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">
                <router-link to="/"><img style="width: 80px;border-radius: 5px;" src="assets/images/logo-white-2.png" alt=""></router-link>
            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="heading-bx left">
                        <h2 class="title-head"><span>Parent</span> Login</h2>
                        <p> <router-link to="/"> Home</router-link></p>
                    </div>
                    <form class="contact-bx">
                        <div class="row placeani">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="dzName" type="text" placeholder="Your Name" required="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="dzEmail" type="password" placeholder="Your Password" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 m-b30">
                                <button name="submit" type="submit" value="Submit" class="btn button-md btn-block">Login</button>
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
    document.title = 'Parent authentication :- Intelligent system';
    window.scrollTo(0, 0);
  },
  // Component options
};
</script>