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
                        <h1 class="text-white">View image</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><router-link to="/">Home</router-link></li>
                        <li><router-link to="/gallery">Gallery</router-link></li>
                        <li>View image</li>
                    </ul>
                </div>
            </div>
            <!-- Page Heading Box END ==== -->
            <!-- Page Content Box ==== -->
            <div class="content-block">
                <div class="section-area section-sp1">
                    <div class="container">
                        <div class="row">
                            <!-- Left part start -->
                            <div class="col-lg-12 col-xl-12">
                                <!-- blog start -->
                                <div class="recent-news blog-lg">
                                    <div class="action-box blog-lg">
                                        <img src="assets/images/blog/default/thum1.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>May 14 2019</a></li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i>10 Comment</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="#">Why every startup should adopt Amazon’s Hot Air.
                                                Why every startup should adopt Amazon’s Hot Air.</a></h5>
                                    </div>
                                </div>
                            </div>
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
        document.title = 'View image :- Intelligent system';
    },
    // Component options
};
</script>
  