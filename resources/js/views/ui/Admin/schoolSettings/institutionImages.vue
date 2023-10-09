<template>
    <div v-show="user_role === 'Administrator'" class="container">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Administrator</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">settings </a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>slide show</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="container">

            <div class="row layout-top-spacing">

                <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Website image Carousel</h4>
                                </div>
                            </div>
                        </div>

                        <b-form v-show="carousels.length == true" @submit.prevent="updateForm">
                            <div class="panel-body">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <div class="invoice-logo">
                                        <div class="upload pr-md-4">
                                            <input style="width: 100%;height:auto;" ref="fl_profile1" @input="grabFile1"
                                                id="image1" type="file" class="d-none" accept="image/*"
                                                @change="change_file1" />
                                            <img style="width: 100%;height:auto;"
                                                v-if="selected_file1 || institution_first_carousel"
                                                :src="selected_file1 || (institution_first_carousel ? `/${institution_first_carousel}` : require('@/assets/images/user-profile.jpeg'))"
                                                alt="profile" class="profile-preview" @click="$refs.fl_profile1.click()" />
                                            <div style="width: 100%;height:auto;text-align:center;" v-else
                                                class="profile-preview upload-preview" @click="$refs.fl_profile1.click()">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-upload-cloud">
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                        <line x1="12" y1="12" x2="12" y2="21"></line>
                                                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3">
                                                        </path>
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="mt-2">Carousel 1<sup> st</sup> image</div>
                                            </div>
                                            <span style="color: red;"> </span>
                                        </div>
                                    </div>
                                    <br />
                                    <b-button @click="showInput2" variant="outline-info" class="mb-2 mr-1">Add</b-button>
                                </div>

                                <div v-show="input2 === 2" class="custom-file-container" data-upload-id="mySecondImage">
                                    <br />
                                    <br />
                                    <div class="invoice-logo">
                                        <div class="upload pr-md-4">
                                            <input style="width: 100%;height:auto;" ref="fl_profile2" @input="grabFile2"
                                                id="image2" type="file" class="d-none" accept="image/*"
                                                @change="change_file2" />
                                            <img style="width: 100%;height:auto;"
                                                v-if="selected_file2 || institution_second_carousel"
                                                :src="selected_file2 || (institution_second_carousel ? `/${institution_second_carousel}` : require('@/assets/images/user-profile.jpeg'))"
                                                alt="profile" class="profile-preview" @click="$refs.fl_profile2.click()" />
                                            <div style="width: 100%;height:auto;text-align:center;border;" v-else
                                                class="profile-preview upload-preview" @click="$refs.fl_profile2.click()">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-upload-cloud">
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                        <line x1="12" y1="12" x2="12" y2="21"></line>
                                                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3">
                                                        </path>
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="mt-2">Carousel 2<sup> nd</sup> image</div>
                                            </div>
                                            <span style="color: red;"> </span>
                                        </div>
                                    </div>
                                    <br />
                                    <b-button style="float: left;" @click="showInput3" variant="outline-info"
                                        class="mb-2 mr-1">Add</b-button>
                                    <b-button style="float: right;" @click="removeInput2" variant="outline-danger"
                                        class="mb-2 mr-1">Remove</b-button>
                                    <br />
                                </div>

                                <div v-show="input3 === 3" class="custom-file-container" data-upload-id="myThirdImage">
                                    <br />
                                    <br />
                                    <div class="invoice-logo">
                                        <div class="upload pr-md-4">
                                            <input style="width: 100%;height:auto;" ref="fl_profile3" @input="grabFile3"
                                                id="image3" type="file" class="d-none" accept="image/*"
                                                @change="change_file3" />
                                            <img style="width: 100%;height:auto;"
                                                v-if="selected_file3 || institution_third_carousel"
                                                :src="selected_file3 || (institution_third_carousel ? `/${institution_third_carousel}` : require('@/assets/images/user-profile.jpeg'))"
                                                alt="profile" class="profile-preview" @click="$refs.fl_profile3.click()" />
                                            <div style="width: 100%;height:auto;text-align:center;border;" v-else
                                                class="profile-preview upload-preview" @click="$refs.fl_profile3.click()">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-upload-cloud">
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                        <line x1="12" y1="12" x2="12" y2="21"></line>
                                                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3">
                                                        </path>
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="mt-2">Carousel 3<sup> rd</sup> image</div>
                                            </div>
                                            <span style="color: red;"> </span>
                                        </div>
                                    </div>
                                    <br />
                                    <b-button style="float: right;" @click="removeInput3" variant="outline-danger"
                                        class="mb-2 mr-1">Remove</b-button>
                                    <br />
                                </div>

                                <div v-show="input3 === 3" class="custom-file-container" data-upload-id="myThirdImage">
                                    <br />
                                    <br />
                                    <b-button variant="success" v-show="!isSubmitting" type="submit"
                                        class="btn btn-success btn-block mb-4 mr-2">UPDATE</b-button>
                                    <b-button class="btn btn-success btn-block mb-4 mr-2" v-show="isSubmitting"
                                        type="button" variant="success">
                                        <span
                                            class="spinner-border text-white mr-2 align-self-center loader-sm ">Loading...</span>
                                    </b-button>
                                </div>


                                <div class="code-section-container show-code">

                                </div>

                            </div>
                        </b-form>

                        <b-form v-show="carousels.length == false" @submit.prevent="submitSchoolCarousels">
                            <div class="panel-body">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <div class="invoice-logo">
                                        <div class="upload pr-md-4">
                                            <input style="width: 100%;height:auto;" ref="fl_profile1" @input="grabFile1"
                                                id="image1" type="file" class="d-none" accept="image/*"
                                                @change="change_file1" />
                                            <img style="width: 100%;height:auto;"
                                                v-if="selected_file1 || institution_first_carousel"
                                                :src="selected_file1 || (institution_first_carousel ? `/${institution_first_carousel}` : require('@/assets/images/user-profile.jpeg'))"
                                                alt="profile" class="profile-preview" @click="$refs.fl_profile1.click()" />
                                            <div style="width: 100%;height:auto;text-align:center;" v-else
                                                class="profile-preview upload-preview" @click="$refs.fl_profile1.click()">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-upload-cloud">
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                        <line x1="12" y1="12" x2="12" y2="21"></line>
                                                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3">
                                                        </path>
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="mt-2">Carousel 1<sup> st</sup> image</div>
                                            </div>
                                            <span style="color: red;"> </span>
                                        </div>
                                    </div>
                                    <br />
                                    <b-button @click="showInput2" variant="outline-info" class="mb-2 mr-1">Add</b-button>
                                </div>

                                <div v-show="input2 === 2" class="custom-file-container" data-upload-id="mySecondImage">
                                    <br />
                                    <br />
                                    <div class="invoice-logo">
                                        <div class="upload pr-md-4">
                                            <input style="width: 100%;height:auto;" ref="fl_profile2" @input="grabFile2"
                                                id="image2" type="file" class="d-none" accept="image/*"
                                                @change="change_file2" />
                                            <img style="width: 100%;height:auto;"
                                                v-if="selected_file2 || institution_second_carousel"
                                                :src="selected_file2 || (institution_second_carousel ? `/${institution_second_carousel}` : require('@/assets/images/user-profile.jpeg'))"
                                                alt="profile" class="profile-preview" @click="$refs.fl_profile2.click()" />
                                            <div style="width: 100%;height:auto;text-align:center;border;" v-else
                                                class="profile-preview upload-preview" @click="$refs.fl_profile2.click()">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-upload-cloud">
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                        <line x1="12" y1="12" x2="12" y2="21"></line>
                                                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3">
                                                        </path>
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="mt-2">Carousel 2<sup> nd</sup> image</div>
                                            </div>
                                            <span style="color: red;"> </span>
                                        </div>
                                    </div>
                                    <br />
                                    <b-button style="float: left;" @click="showInput3" variant="outline-info"
                                        class="mb-2 mr-1">Add</b-button>
                                    <b-button style="float: right;" @click="removeInput2" variant="outline-danger"
                                        class="mb-2 mr-1">Remove</b-button>
                                    <br />
                                </div>

                                <div v-show="input3 === 3" class="custom-file-container" data-upload-id="myThirdImage">
                                    <br />
                                    <br />
                                    <div class="invoice-logo">
                                        <div class="upload pr-md-4">
                                            <input style="width: 100%;height:auto;" ref="fl_profile3" @input="grabFile3"
                                                id="image3" type="file" class="d-none" accept="image/*"
                                                @change="change_file3" />
                                            <img style="width: 100%;height:auto;"
                                                v-if="selected_file3 || institution_third_carousel"
                                                :src="selected_file3 || (institution_third_carousel ? `/${institution_third_carousel}` : require('@/assets/images/user-profile.jpeg'))"
                                                alt="profile" class="profile-preview" @click="$refs.fl_profile3.click()" />
                                            <div style="width: 100%;height:auto;text-align:center;border;" v-else
                                                class="profile-preview upload-preview" @click="$refs.fl_profile3.click()">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-upload-cloud">
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                        <line x1="12" y1="12" x2="12" y2="21"></line>
                                                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3">
                                                        </path>
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="mt-2">Carousel 3<sup> rd</sup> image</div>
                                            </div>
                                            <span style="color: red;"> </span>
                                        </div>
                                    </div>
                                    <br />
                                    <b-button style="float: right;" @click="removeInput3" variant="outline-danger"
                                        class="mb-2 mr-1">Remove</b-button>
                                    <br />
                                </div>

                                <div v-show="input3 === 3" class="custom-file-container" data-upload-id="myThirdImage">
                                    <br />
                                    <br />
                                    <b-button variant="success" v-show="!isSubmitting" type="submit"
                                        class="btn btn-success btn-block mb-4 mr-2">SUBMIT</b-button>
                                    <b-button class="btn btn-success btn-block mb-4 mr-2" v-show="isSubmitting"
                                        type="button" variant="success">
                                        <span
                                            class="spinner-border text-white mr-2 align-self-center loader-sm ">Loading...</span>
                                    </b-button>
                                </div>

                                <div class="code-section-container show-code">
                                </div>

                            </div>
                        </b-form>
                    </div>
                </div>

                <b-toast id="message" header-class="d-none" body-class="toast-success d-flex justify-content-between"
                    toaster="b-toaster-top-center">
                    Carousel Saved Successfully
                </b-toast>

                <div v-show="carousels.length == 1" id="custom_carousel" class="col-lg-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>School Carousel</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body  style-custom-1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 p-0">
                                        <b-carousel ref="carousel1" v-model="slide1" :interval="4000" controls indicators
                                            class="style-custom-1">
                                            <b-carousel-slide>
                                                <template #img>
                                                    <img style="width: 100%;height:auto;" class="d-block w-100 slide-image"
                                                        :src="selected_file1 || (institution_first_carousel ? `/${institution_first_carousel}` : require('@/assets/images/1.jpeg'))"
                                                        alt="First slide" />
                                                </template>
                                                <span class="badge">Education</span>
                                            </b-carousel-slide>
                                            <b-carousel-slide>
                                                <template #img>
                                                    <img style="width: 100%;height:auto;" class="d-block w-100 slide-image"
                                                        :src="selected_file2 || (institution_second_carousel ? `/${institution_second_carousel}` : require('@/assets/images/2.jpg'))"
                                                        alt="Second slide" />
                                                </template>
                                                <span class="badge">Cognitive</span>
                                            </b-carousel-slide>
                                            <b-carousel-slide>
                                                <template #img>
                                                    <img style="width: 100%;height:auto;" class="d-block w-100 slide-image"
                                                        :src="selected_file3 || (institution_third_carousel ? `/${institution_third_carousel}` : require('@/assets/images/3.jpeg'))"
                                                        alt="Third slide" />
                                                </template>
                                                <span class="badge">A.I</span>
                                            </b-carousel-slide>
                                        </b-carousel>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
import axios from 'axios';
import '@/assets/sass/apps/invoice-add.scss';
//flatpickr
import flatPickr from 'vue-flatpickr-component';
import 'flatpickr/dist/flatpickr.css';
import '@/assets/sass/forms/custom-flatpickr.css';
import '@/assets/sass/scrollspyNav.scss';
import '@/assets/sass/components/custom-carousel.scss';
import '@/assets/sass/forms/file-upload-with-preview.min.css';
import highlight from '@/components/plugins/highlight.vue';
import FileUploadWithPreview from "file-upload-with-preview";
export default {
    metaInfo: { title: 'Carousel slider :- Intelligent system' },
    components: {
        highlight,
        flatPickr
    },
    data() {
        return {
            user_role: "",
            gender: "",
            isSubmitting: false,
            carousels: [],
            pagination: {},
            selected_file1: null,
            selected_file2: null,
            selected_file3: null,
            file1: null,
            file2: null,
            file3: null,
            id: "",
            institution_first_carousel: "",
            institution_second_carousel: "",
            institution_third_carousel: "",
            hasFile1: false,
            hasFile2: false,
            hasFile3: false,
            input2: false,
            input3: false,
            code_arr: [],
            slide1: 0,
        };
    },
    mounted() {
        this.fetchCarousels();
        this.fetchAuthenticatedUser();
    },
    methods: {

        fetchAuthenticatedUser() {
            axios
                .get("/api/user")
                .then(response => {
                    this.user_role = response.data.user_role
                    this.gender = response.data.gender
                })
                .catch((error) => {
                    if (error.response.status === 401) {
                        this.$emit("updateSidebar");
                        localStorage.removeItem("authenticated");
                        window.location.href = "/login";
                    }
                });
        },

        change_file1(event1) {
            this.selected_file1 = URL.createObjectURL(event1.target.files[0]);
            this.file1 = event1.target.files[0];
            this.hasFile1 = true;
        },

        change_file2(event2) {
            this.selected_file2 = URL.createObjectURL(event2.target.files[0]);
            this.file2 = event2.target.files[0];
            this.hasFile2 = true;
        },

        change_file3(event3) {
            this.selected_file3 = URL.createObjectURL(event3.target.files[0]);
            this.file3 = event3.target.files[0];
            this.hasFile3 = true;
        },

        grabFile1(event1) {
            this.file1 = event1.target.files[0];
            this.hasFile1 = true;
        },

        grabFile2(event2) {
            this.file2 = event2.target.files[0];
            this.hasFile2 = true;
        },

        grabFile3(event3) {
            this.file3 = event3.target.files[0];
            this.hasFile3 = true;
        },

        fetchCarousels(page = 1) {
            axios.get(`/api/institutionCarousels?page=${page}`)
                .then((response) => {
                    this.carousels = response.data.data;
                    if (this.carousels.length > 0) {
                        // If carousels exist, populate the form fields with the fetched data
                        const carouselsData = this.carousels[0]; // Assuming only one row of carousels is fetched

                        this.id = carouselsData.id;
                        this.institution_first_carousel = carouselsData.institution_first_carousel;
                        this.institution_second_carousel = carouselsData.institution_second_carousel;
                        this.institution_third_carousel = carouselsData.institution_third_carousel;
                        this.pagination = response.data.pagination;
                    }                    
                }).catch((error) => {
                    console.error(error);
                });
        },
        
        submitSchoolCarousels() {
            console.log('tbe');
            this.isSubmitting = true;
            const fd = new FormData();
            if (this.hasFile1) {
                fd.append("institution_first_carousel", this.file1);
            }

            if (this.hasFile2) {
                fd.append("institution_second_carousel", this.file2);
            }

            if (this.hasFile3) {
                fd.append("institution_third_carousel", this.file3);
            }

            fd.append("_method", "POST");

            axios
                .post("/api/adminSchoolCarousels", fd, {
                    headers: { "content-type": "multipart/form-data" },
                })
                .then(() => {
                    this.fields = {};
                    this.isSubmitting = false;
                    console.log("All is well");
                    this.$bvToast.show('message');
                    this.fetchCarousels();
                })
                .catch((error) => {
                    this.errors = error.response.data.errors;
                    this.submitErrors = error.response.data.message;
                    this.isSubmitting = false;
                });
        },

        async updateForm() {
            try {
                const formData = new FormData();
                if (this.hasFile1) {
                    formData.append("institution_first_carousel", this.file1);
                }

                if (this.hasFile2) {
                    formData.append("institution_second_carousel", this.file2);
                }

                if (this.hasFile3) {
                    formData.append("institution_third_carousel", this.file3);
                }

                const response = await axios.post(`/api/updateSchoolCarousels/${this.id}`, formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                });

                console.log(response.data);

                this.fetchCarousels();

                this.$bvToast.show('message');
            } catch (error) {
                console.error(error.response.data);
                this.updateErrors = error.response.data.message;
            }
        },

        showInput2() {
            this.input2 = 2;
        },

        removeInput2() {
            this.input2 = false;
        },

        showInput3() {
            this.input2 = 2;
            this.input3 = 3;
        },

        removeInput3() {
            this.input3 = false;
        },
    }
};
</script>
