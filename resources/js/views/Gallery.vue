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
                        <h1 class="text-white">Gallery</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><router-link to="/">Home</router-link></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
            <!-- Page Heading Box END ==== -->
            <!-- Page Content Box ==== -->
            <div class="content-block">
                <!-- Blog Grid ==== -->
                <div class="section-area section-sp1">
                    <div class="container">
                        <div class="ttr-blog-grid-3 row" id="masonry">
                            <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="assets/images/blog/latest-blog/pic1.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <div class="d-flex">
                                            <router-link to="viewImage" class="btn btn-sm btn-block"> View </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="assets/images/blog/latest-blog/pic2.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <div class="d-flex">
                                            <router-link to="viewImage" class="btn btn-sm btn-block"> View </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="assets/images/blog/latest-blog/pic3.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <div class="d-flex">
                                            <router-link to="viewImage" class="btn btn-sm btn-block"> View </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="assets/images/blog/latest-blog/pic3.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <div class="d-flex">
                                            <router-link to="viewImage" class="btn btn-sm btn-block"> View </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="assets/images/blog/latest-blog/pic1.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <div class="d-flex">
                                            <router-link to="viewImage" class="btn btn-sm btn-block"> View </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                                <div class="recent-news">
                                    <div class="action-box">
                                        <img src="assets/images/blog/latest-blog/pic2.jpg" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <div class="d-flex">
                                            <router-link to="viewImage" class="btn btn-sm btn-block"> View </router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pagination ==== -->
                        <div class="pagination-bx rounded-sm gray clearfix">
                            <ul class="pagination">
                                <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        
                        <!-- Pagination END ==== -->
                    </div>
                </div>
                <!-- Blog Grid END ==== -->
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
        document.title = 'Institution gallery :- Intelligent system';
    },
    // Component options
};
</script>
  