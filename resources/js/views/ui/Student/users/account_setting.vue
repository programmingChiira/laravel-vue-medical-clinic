<template>
    <div class="layout-px-spacing">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Account Settings</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="account-settings-container layout-top-spacing">
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <b-form id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="">General Information</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                    <div class="upload mt-4 pr-md-4">
                                                        <input ref="fl_profile" type="file" class="d-none" accept="image/*" @change="change_file" />
                                                        <img
                                                            :src="selected_file ? selected_file : require('@/assets/images/user-profile.jpeg')"
                                                            alt="profile"
                                                            class="profile-preview"
                                                            @click="$refs.fl_profile.click()"
                                                        />
                                                        <p class="mt-2">Upload Picture</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName">Full Name</label>
                                                                    <b-input class="mb-4" id="fullName" placeholder="Full Name" value="Jimmy Turner"></b-input>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="dob-input">Date of Birth</label>
                                                                <div class="d-sm-flex d-block">
                                                                    <div class="form-group mr-1">
                                                                        <b-select v-model="ddl_1">
                                                                            <b-select-option value="Day">Day</b-select-option>
                                                                            <b-select-option v-for="item in 30" :value="item" :key="item">
                                                                                {{ item }}
                                                                            </b-select-option>
                                                                        </b-select>
                                                                    </div>
                                                                    <div class="form-group mr-1">
                                                                        <b-select v-model="ddl_2">
                                                                            <b-select-option value="Month">Month</b-select-option>
                                                                            <b-select-option v-for="item in months" :value="item" :key="item">
                                                                                {{ item }}
                                                                            </b-select-option>
                                                                        </b-select>
                                                                    </div>
                                                                    <div class="form-group mr-1">
                                                                        <b-select v-model="ddl_3">
                                                                            <b-select-option value="Year">Year</b-select-option>
                                                                            <b-select-option v-for="item in 42" :value="2022 - item" :key="2022 - item">
                                                                                {{ 2022 - item }}
                                                                            </b-select-option>
                                                                        </b-select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="profession">Profession</label>
                                                            <b-input class="mb-4" id="profession" placeholder="Designer" value="Web Developer"></b-input>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </b-form>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <b-form id="about" class="section about">
                                <div class="info">
                                    <h5 class="">About</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                            <div class="form-group">
                                                <label for="aboutBio">Bio</label>
                                                <b-textarea
                                                    id="aboutBio"
                                                    placeholder="Tell something interesting about yourself"
                                                    rows="10"
                                                    value="I'm Creative Director and UI/UX Designer from Sydney, Australia, working in web development and print media. I enjoy turning complex problems into simple, beautiful and intuitive designs.

My job is to build your website so that it is functional and user-friendly but at the same time attractive. Moreover, I add personal touch to your product and make sure that is eye-catching and easy to use. My aim is to bring across your message and identity in the most creative way. I created web design for many famous brand companies."
                                                >
                                                </b-textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </b-form>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <b-form id="work-platforms" class="section work-platforms">
                                <div class="info">
                                    <h5 class="">Work Platforms</h5>
                                    <div class="row">
                                        <div class="col-md-12 text-right mb-5">
                                            <b-button id="add-work-platforms" variant="primary">Add</b-button>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="platform-div">
                                                <div class="form-group">
                                                    <label for="platform-title">Platforms Title</label>
                                                    <b-input class="mb-4" id="platform-title" placeholder="Platforms Title" value="Web Design"></b-input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="platform-description">Description</label>
                                                    <b-textarea
                                                        class="mb-4"
                                                        id="platform-description"
                                                        placeholder="Platforms Description"
                                                        rows="10"
                                                        value="Duis aute irure dolor in reprehenderit in voluptate velit esse eu fugiat nulla pariatur."
                                                    ></b-textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </b-form>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <b-form id="contact" class="section contact">
                                <div class="info">
                                    <h5 class="">Contact</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="country">Country</label>
                                                        <b-select v-model="ddl_6" id="country">
                                                            <b-select-option value="all">All Countries</b-select-option>
                                                            <b-select-option value="United States">United States</b-select-option>
                                                            <b-select-option value="India">India</b-select-option>
                                                            <b-select-option value="Japan">Japan</b-select-option>
                                                            <b-select-option value="China">China</b-select-option>
                                                            <b-select-option value="Brazil">Brazil</b-select-option>
                                                            <b-select-option value="Norway">Norway</b-select-option>
                                                            <b-select-option value="Canada">Canada</b-select-option>
                                                        </b-select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <b-input class="mb-4" id="address" placeholder="Address" value="New York"></b-input>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="location">Location</label>
                                                        <b-input class="mb-4" id="location" placeholder="Location"></b-input>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <b-input class="mb-4" id="phone" placeholder="Write your phone number here" value="+1 (530) 555-12121"></b-input>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <b-input class="mb-4" id="email" placeholder="Write your email here" value="Jimmy@gmail.com"></b-input>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="website1">Website</label>
                                                        <b-input class="mb-4" id="website1" placeholder="Write your website here"></b-input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </b-form>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <b-form id="social" class="section social">
                                <div class="info">
                                    <h5 class="">Social</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group social-linkedin mb-3">
                                                        <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="linkedin"
                                                                ><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-linkedin"
                                                                >
                                                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                                                    <rect x="2" y="9" width="4" height="12"></rect>
                                                                    <circle cx="4" cy="4" r="2"></circle></svg
                                                            ></span>
                                                        </div>
                                                        <b-input placeholder="linkedin Username" value="jimmy_turner"></b-input>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-group social-tweet mb-3">
                                                        <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="tweet"
                                                                ><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-twitter"
                                                                >
                                                                    <path
                                                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"
                                                                    ></path></svg
                                                            ></span>
                                                        </div>
                                                        <b-input placeholder="Twitter Username" value="@jTurner"></b-input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group social-fb mb-3">
                                                        <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="fb"
                                                                ><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-facebook"
                                                                >
                                                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg
                                                            ></span>
                                                        </div>
                                                        <b-input placeholder="Facebook Username" value="Jimmy Turner"></b-input>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-group social-github mb-3">
                                                        <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="github"
                                                                ><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-github"
                                                                >
                                                                    <path
                                                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"
                                                                    ></path></svg
                                                            ></span>
                                                        </div>
                                                        <b-input placeholder="Github Username" value="@TurnerJimmy"></b-input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </b-form>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="skill" class="section skill">
                                <div class="info">
                                    <h5 class="">Skills</h5>
                                    <div class="row progress-bar-section">
                                        <div class="col-md-12 mx-auto">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-11 mx-auto">
                                                        <div class="input-form">
                                                            <b-input id="skills" placeholder="Add Your Skills Here"></b-input>
                                                            <b-button id="add-skills" variant="primary">Add</b-button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-11 mx-auto">
                                            <div class="custom-progress top-right progress-up">
                                                <p class="skill-name">PHP</p>
                                                <b-input type="range" min="0" max="100" class="custom-range progress-range-counter" v-model="range_1"></b-input>
                                                <div class="range-count">
                                                    <span class="range-count-number">{{ range_1 }}</span> <span class="range-count-unit">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="custom-progress top-right progress-up">
                                                <p class="skill-name">Wordpress</p>
                                                <b-input type="range" min="0" max="100" class="custom-range progress-range-counter" v-model="range_2"></b-input>
                                                <div class="range-count">
                                                    <span class="range-count-number">{{ range_2 }}</span> <span class="range-count-unit">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="custom-progress top-right progress-up">
                                                <p class="skill-name">Javascript</p>
                                                <b-input type="range" min="0" max="100" class="custom-range progress-range-counter" v-model="range_3"></b-input>
                                                <div class="range-count">
                                                    <span class="range-count-number">{{ range_3 }}</span> <span class="range-count-unit">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="custom-progress top-right progress-up">
                                                <p class="skill-name">jQuery</p>
                                                <b-input type="range" min="0" max="100" class="custom-range progress-range-counter" v-model="range_4"></b-input>
                                                <div class="range-count">
                                                    <span class="range-count-number">{{ range_4 }}</span> <span class="range-count-unit">%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <b-form id="edu-experience" class="section edu-experience">
                                <div class="info">
                                    <h5 class="">Education</h5>
                                    <div class="row">
                                        <div class="col-md-12 text-right mb-5">
                                            <b-button id="add-education" variant="primary">Add</b-button>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="edu-section">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="degree1">Enter Your Collage Name</label>
                                                            <b-input class="mb-4" id="degree1" placeholder="Add your education here" value="Royal Collage of Art Designer Illustrator"></b-input>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Starting From</label>

                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-4">
                                                                            <b-select v-model="ddl_4">
                                                                                <b-select-option value="Month">Month</b-select-option>
                                                                                <b-select-option v-for="item in months" :value="item" :key="item">
                                                                                    {{ item }}
                                                                                </b-select-option>
                                                                            </b-select>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <b-select v-model="ddl_5">
                                                                                <b-select-option value="Year">Year</b-select-option>
                                                                                <b-select-option v-for="item in 42" :value="2022 - item" :key="2022 - item">
                                                                                    {{ 2022 - item }}
                                                                                </b-select-option>
                                                                            </b-select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Ending In</label>

                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-4">
                                                                            <b-select v-model="selected">
                                                                                <b-select-option :value="null">Month</b-select-option>
                                                                                <b-select-option v-for="item in months" :value="item" :key="item">
                                                                                    {{ item }}
                                                                                </b-select-option>
                                                                            </b-select>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <b-select v-model="selected">
                                                                                <b-select-option :value="null">Year</b-select-option>
                                                                                <b-select-option v-for="item in 42" :value="2022 - item" :key="2022 - item">
                                                                                    {{ 2022 - item }}
                                                                                </b-select-option>
                                                                            </b-select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <b-textarea placeholder="Description" rows="10"></b-textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </b-form>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <b-form id="work-experience" class="section work-experience">
                                <div class="info">
                                    <h5 class="">Work Experience</h5>
                                    <div class="row">
                                        <div class="col-md-12 text-right mb-5">
                                            <b-button id="add-work-exp" variant="primary">Add</b-button>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="work-section">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="degree2">Company Name</label>
                                                            <b-input class="mb-4" id="degree2" placeholder="Add your work here" value="Netfilx Inc."></b-input>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree3">Job Tilte</label>
                                                                    <b-input class="mb-4" id="degree3" placeholder="Add your work here"></b-input>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree4">Location</label>
                                                                    <b-input class="mb-4" id="degree4" placeholder="Add your work here"></b-input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Starting From</label>

                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-4">
                                                                            <b-select v-model="selected">
                                                                                <b-select-option :value="null">Month</b-select-option>
                                                                                <b-select-option v-for="item in months" :value="item" :key="item">
                                                                                    {{ item }}
                                                                                </b-select-option>
                                                                            </b-select>
                                                                        </div>

                                                                        <div class="col-md-6 mb-4">
                                                                            <b-select v-model="selected">
                                                                                <b-select-option :value="null">Year</b-select-option>
                                                                                <b-select-option v-for="item in 42" :value="2022 - item" :key="2022 - item">
                                                                                    {{ 2022 - item }}
                                                                                </b-select-option>
                                                                            </b-select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Ending In</label>

                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-4">
                                                                            <b-select v-model="selected">
                                                                                <b-select-option :value="null">Month</b-select-option>
                                                                                <b-select-option v-for="item in months" :value="item" :key="item">
                                                                                    {{ item }}
                                                                                </b-select-option>
                                                                            </b-select>
                                                                        </div>

                                                                        <div class="col-md-6 mb-4">
                                                                            <b-select v-model="selected">
                                                                                <b-select-option :value="null">Year</b-select-option>
                                                                                <b-select-option v-for="item in 42" :value="2022 - item" :key="2022 - item">
                                                                                    {{ 2022 - item }}
                                                                                </b-select-option>
                                                                            </b-select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <b-textarea placeholder="Description" rows="10"></b-textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </b-form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="account-settings-footer">
                <div class="as-footer-container">
                    <b-button variant="primary">Reset All</b-button>
                    <b-button variant="success" @click="$bvToast.show('message')">Save Changes</b-button>

                    <b-toast id="message" header-class="d-none" body-class="toast-success d-flex justify-content-between" toaster="b-toaster-top-right">
                        Settings Saved Successfully
                    </b-toast>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import '@/assets/sass/scrollspyNav.scss';
    import '@/assets/sass/users/account-setting.scss';

    export default {
        metaInfo: { title: 'Account Setting' },
        data() {
            return {
                selected: null,
                selected_file: null,
                ddl_1: '20',
                ddl_2: 'Jan',
                ddl_3: '1989',
                ddl_4: 'May',
                ddl_5: '2009',
                ddl_6: 'United States',
                months: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                range_1: 25,
                range_2: 50,
                range_3: 70,
                range_4: 60
            };
        },
        mounted() {},
        methods: {
            change_file(event) {
                this.selected_file = URL.createObjectURL(event.target.files[0]);
            }
        }
    };
</script>
