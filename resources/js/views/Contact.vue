<!-- About.vue -->
<template>
    <div class="page-wraper">
        <Nav></Nav>
        <div class="page-content">
            <!-- Page Heading Box ==== -->
            <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <br />
                        <br />
                        <h1 class="text-white">Contact us</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><router-link to="/">Home</router-link></li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
            <!-- Page Heading Box END ==== -->
            <!-- Page Content Box ==== -->
            <div class="page-banner contact-page section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 m-b30">
                            <div class="bg-primary text-white contact-info-bx">
                                <h2 class="m-b10 title-head">Contact <span>Information</span></h2>
                                <div class="widget widget_getintuch">
                                    <ul>
                                        <li><i class="ti-location-pin"></i>7p Ngong Hills St. Joseph The Worker</li>
                                        <li><i class="ti-mobile"></i>0712345678</li>
                                        <li><i class="ti-mobile"></i>0712345678</li>
                                        <li><i class="ti-email"></i>info@example.com</li>
                                        <li><i class="ti-email"></i>info@example.com</li>
                                    </ul>
                                </div>
                                <h5 class="m-t0 m-b20">Follow Us</h5>
                                <ul class="list-inline contact-social-bx">
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <form class="contact-bx ajax-form"
                                action="http://educhamp.themetrades.com/demo/assets/script/contact.php">
                                <div class="ajax-message"></div>
                                <div class="heading-bx left">
                                    <h2 class="title-head">Get In <span>Touch</span></h2>
                                </div>
                                <div class="row placeani">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="name" type="text" placeholder="Your Name" required
                                                    class="form-control valid-character">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="email" type="email" placeholder="Your Email Address"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="phone" type="text" placeholder="Your Phone" required
                                                    class="form-control int-value">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="subject" type="text" placeholder="Subject" required
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="message" rows="4" class="form-control"
                                                    placeholder="Type Message" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="g-recaptcha"
                                                    data-sitekey="6Lf2gYwUAAAAAJLxwnZTvpJqbYFWqVyzE-8BWhVe"
                                                    data-callback="verifyRecaptchaCallback"
                                                    data-expired-callback="expiredRecaptchaCallback"></div>
                                                <input class="form-control d-none" style="display:none;"
                                                    data-recaptcha="true" required data-error="Please complete the Captcha">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="btn button-md btn-block">
                                            Send
                                            Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Content Box END ==== -->
        </div>
        <!-- Inner Content Box END ==== -->
        <!-- Footer ==== -->
        <Footer></Footer>
        <!-- Footer END ==== -->
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
        document.title = 'Contact us us :- Intelligent system';
    },
    // Component options
};
</script>
  