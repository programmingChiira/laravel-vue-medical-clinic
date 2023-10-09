<template>
    <div v-show="user_role === 'Administrator'" class="layout-px-spacing apps-invoice-list">

        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Administrator</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">settings</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>enrollment</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="panel br-6">
                    <div class="custom-table">
                        <div class="table-header">
                            <div class="d-flex align-items-center flex-column flex-sm-row flex-shrink-0">
                                <div class="mb-3 mb-sm-0 order-0 order-sm-1 mr-sm-2">
                                    <b-button variant="success" class="ml-2" v-b-modal.modalxl>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                        Add New
                                    </b-button>
                                </div>

                                <b-modal id="modalxl" size="xl" title="Enrollment details" centered no-fade>
                                    <div class="row">
                                        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                                            <div class="box box-shadow">
                                                <div class="panel-body">
                                                    <b-form v-show="settings.length == 1"
                                                        @submit.prevent="submitInstitutionEnrollment">
                                                        <div class="row justify-content-between">
                                                            <div class="col-md-6">
                                                                <img v-if="selected_file || institution_logo"
                                                                    :src="selected_file || (institution_logo ? `/${institution_logo}` : require('@/assets/images/user-profile.jpeg'))"
                                                                    alt="profile" class="profile-preview"
                                                                    @click="$refs.fl_profile.click()" />
                                                                <div v-else class="profile-preview upload-preview"
                                                                    @click="$refs.fl_profile.click()">
                                                                    <div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-upload-cloud">
                                                                            <polyline points="16 16 12 12 8 16">
                                                                            </polyline>
                                                                            <line x1="12" y1="12" x2="12" y2="21">
                                                                            </line>
                                                                            <path
                                                                                d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3">
                                                                            </path>
                                                                            <polyline points="16 16 12 12 8 16">
                                                                            </polyline>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mt-2">Institution Logo</div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="name">Name of institution</label>
                                                                <b-input v-model="institution_name"
                                                                    placeholder="Name of institution" readonly></b-input>
                                                            </div>
                                                        </div>

                                                        <hr />

                                                        <div class="row justify-content-between">

                                                            <div class="col-md-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="institutionEmail1">Institution first
                                                                        email </label>
                                                                    <b-input v-model="institution_email_one" size="sm"
                                                                        id="institutionEmail1"
                                                                        placeholder="institution first email"
                                                                        readonly></b-input>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="institutionEmail2">Institution
                                                                        second email</label>
                                                                    <b-input v-model="institution_email_two" size="sm"
                                                                        id="institutionEmail2"
                                                                        placeholder="institution second email"
                                                                        readonly></b-input>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="institutionPhone1">Institution first
                                                                        phone </label>
                                                                    <b-input v-model="institution_phone_one" size="sm"
                                                                        id="institutionPhone1"
                                                                        placeholder="institution first phone"
                                                                        readonly></b-input>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="institutionEmail2">Institution
                                                                        second phone</label>
                                                                    <b-input v-model="institution_phone_two" size="sm"
                                                                        id="institutionEmail2"
                                                                        placeholder="institution second phone"
                                                                        readonly></b-input>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <hr />

                                                        <div class="row justify-content-between">

                                                            <div class="col-md-3">
                                                                <div class="form-group mb-4">
                                                                    <label for="institutionCounty">County </label>
                                                                    <b-input v-model="institution_county" size="sm"
                                                                        id="institutionCounty" placeholder="County"
                                                                        readonly>
                                                                    </b-input>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group mb-4">
                                                                    <label for="institutionAddress">Institution
                                                                        address </label>
                                                                    <b-input v-model="institution_address" size="sm"
                                                                        id="institutionAddress"
                                                                        placeholder="institution address"
                                                                        readonly></b-input>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group mb-4">
                                                                    <label for="institutionLocation">Institution
                                                                        pinned location </label>
                                                                    <b-input v-model="institution_pinned_location" size="sm"
                                                                        id="institutionLocation"
                                                                        placeholder="institution pinned location" readonly>
                                                                    </b-input>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row justify-content-between">

                                                            <div class="col-md-3">
                                                                <div class="form-group mb-4">
                                                                    <label for="institutionType">Type of institution
                                                                    </label>
                                                                    <b-input v-model="institution_type" size="sm"
                                                                        id="institutionType" placeholder="institution type"
                                                                        readonly>
                                                                    </b-input>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group mb-4">
                                                                    <label for="institutionMode">Mode </label>
                                                                    <b-input v-model="institution_mode" size="sm"
                                                                        id="institutionMode" placeholder="institution mode"
                                                                        readonly>
                                                                    </b-input>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group mb-4">
                                                                    <label for="studentGender">Student gender distro
                                                                    </label>
                                                                    <b-input v-model="institution_gender_distro" size="sm"
                                                                        id="studentGender" placeholder="institution distro"
                                                                        readonly>
                                                                    </b-input>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <hr />

                                                        <div class="row">

                                                            <div class="col-md-12 align-self-center">
                                                                <div class="form-group row invoice-note">
                                                                    <label for="invoice-detail-notes"
                                                                        class="col-sm-12 col-form-label col-form-label-sm">
                                                                        Welcome
                                                                        message
                                                                    </label>
                                                                    <div class="col-sm-12">
                                                                        <b-textarea v-model="institution_welcome_message"
                                                                            rows="3" id="invoice-detail-notes"
                                                                            placeholder='Welcome message'
                                                                            readonly></b-textarea>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <hr />

                                                        <div class="row">
                                                            <div class="col-md-12 align-self-center">
                                                                <div class="form-group row invoice-note">
                                                                    <label for="invoice-detail-notes"
                                                                        class="col-sm-12 col-form-label col-form-label-sm">
                                                                        Institution
                                                                        mission and vission
                                                                    </label>
                                                                    <div class="col-sm-12">
                                                                        <b-textarea v-model="institution_mission_and_vision"
                                                                            rows="3" id="invoice-detail-notes"
                                                                            placeholder='Mission and vision'
                                                                            readonly></b-textarea>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <hr />

                                                        <div class="row justify-content-between">
                                                            <div style="margin-bottom: 20px;" class="col-md-4">
                                                                <label for="name">
                                                                    Year of enrollment
                                                                    <span style="color: red;"> * </span>
                                                                </label>
                                                                <b-input v-model="year_of_enrollment"
                                                                    placeholder="Enrollment year"></b-input>
                                                            </div>

                                                            <div style="margin-bottom: 20px;" class="col-md-4">
                                                                <label for="name">
                                                                    Month of enrollment
                                                                    <span style="color: red;"> * </span>
                                                                </label>
                                                                <b-input v-model="month_of_enrollment"
                                                                    placeholder="Enrollment month"></b-input>
                                                            </div>

                                                            <div style="margin-bottom: 20px;" class="col-md-4">
                                                                <label for="name">
                                                                    Day of enrollment
                                                                    <span style="color: red;"> * </span>
                                                                </label>
                                                                <b-input v-model="day_of_enrollment"
                                                                    placeholder="Enrollment day"></b-input>
                                                            </div>
                                                        </div>

                                                        <hr />

                                                        <div class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <label for="enrollment_requirment_1">
                                                                    1 <sup>st</sup> Requirement
                                                                    <span style="color: red;"> * </span>
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_1" rows="2"
                                                                    id="enrollment_requirment_1">
                                                                </b-textarea>
                                                            </div>

                                                        </div>

                                                        <hr />

                                                        <div class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <label for="enrollment_requirment_2">
                                                                    2 <sup>nd</sup> Requirement
                                                                    <span style="color: red;"> * </span>
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_2" rows="2"
                                                                    id="enrollment_requirment_2">
                                                                </b-textarea>
                                                            </div>

                                                        </div>

                                                        <hr />

                                                        <div class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <label for="enrollment_requirment_3">
                                                                    3 <sup>rd</sup> Requirement
                                                                    <span style="color: red;"> * </span>
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_3" rows="2"
                                                                    id="enrollment_requirment_3">
                                                                </b-textarea>
                                                            </div>

                                                        </div>

                                                        <hr />

                                                        <div class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <label for="enrollment_requirment_4">
                                                                    4 <sup>th</sup> Requirement
                                                                    <span style="color: red;"> * </span>
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_4" rows="2"
                                                                    id="enrollment_requirment_4">
                                                                </b-textarea>
                                                            </div>

                                                        </div>

                                                        <hr />

                                                        <div class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <label for="enrollment_requirment_5">
                                                                    5 <sup>th</sup> Requirement
                                                                    <span style="color: red;"> * </span>
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_5" rows="2"
                                                                    id="enrollment_requirment_5">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField6">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr />

                                                        <div v-show="field6 === 6" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField6">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_6">
                                                                    6 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_6" rows="2"
                                                                    id="enrollment_requirment_6">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField7">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field6 === 6" />

                                                        <div v-show="field7 === 7" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField7">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_7">
                                                                    7 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_7" rows="2"
                                                                    id="enrollment_requirment_7">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField8">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field7 === 7" />

                                                        <div v-show="field8 === 8" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField8">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_8">
                                                                    8 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_8" rows="2"
                                                                    id="enrollment_requirment_8">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField9">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field8 === 8" />

                                                        <div v-show="field9 === 9" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField9">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_9">
                                                                    9 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_9" rows="2"
                                                                    id="enrollment_requirment_9">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField10">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field9 === 9" />

                                                        <div v-show="field10 === 10" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField10">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_10">
                                                                    10 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_10" rows="2"
                                                                    id="enrollment_requirment_10">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField11">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field10 === 10" />

                                                        <div v-show="field11 === 11" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField11">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_11">
                                                                    11 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_11" rows="2"
                                                                    id="enrollment_requirment_11">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField12">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field11 === 11" />

                                                        <div v-show="field12 === 12" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField12">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_12">
                                                                    12 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_12" rows="2"
                                                                    id="enrollment_requirment_12">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField13">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field12 === 12" />

                                                        <div v-show="field13 === 13" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField13">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_13">
                                                                    13 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_13" rows="2"
                                                                    id="enrollment_requirment_13">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField14">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field13 === 13" />

                                                        <div v-show="field14 === 14" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField14">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_14">
                                                                    14 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_14" rows="2"
                                                                    id="enrollment_requirment_14">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField15">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field14 === 14" />

                                                        <div v-show="field15 === 15" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField15">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_15">
                                                                    15 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_15" rows="2"
                                                                    id="enrollment_requirment_15">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField16">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field15 === 15" />

                                                        <div v-show="field16 === 16" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField16">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_16">
                                                                    16 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_16" rows="2"
                                                                    id="enrollment_requirment_16">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField17">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field16 === 16" />

                                                        <div v-show="field17 === 17" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField17">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_17">
                                                                    17 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_17" rows="2"
                                                                    id="enrollment_requirment_17">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField18">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field17 === 17" />

                                                        <div v-show="field18 === 18" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField18">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_18">
                                                                    18 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_18" rows="2"
                                                                    id="enrollment_requirment_18">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField19">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field18 === 18" />

                                                        <div v-show="field19 === 19" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField19">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_19">
                                                                    19 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_19" rows="2"
                                                                    id="enrollment_requirment_19">
                                                                </b-textarea>
                                                                <br />
                                                                <b-button variant="secondary" class="additem btn-sm"
                                                                    @click="showField20">
                                                                    Add Requirement
                                                                </b-button>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field19 === 19" />

                                                        <div v-show="field20 === 20" class="row justify-content-between">
                                                            <div class="col-sm-12">
                                                                <a href="javascript:void(0);" class="delete-item"
                                                                    v-b-tooltip title="Delete" @click="removeField20">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                    </svg>
                                                                </a>
                                                                <br />
                                                                <label for="enrollment_requirment_20">
                                                                    20 <sup>th</sup> Requirement
                                                                </label>
                                                                <b-textarea v-model="enrollment_requirment_20" rows="2"
                                                                    id="enrollment_requirment_20">
                                                                </b-textarea>
                                                            </div>

                                                        </div>

                                                        <hr v-show="field20 === 20" />

                                                        <div v-if="updateErrors">
                                                            <ul
                                                                style="color: red; font-size: 12px; list-style: none; padding: 0;">
                                                                <li v-for="(error, field) in updateErrors" :key="field">
                                                                    {{ field }}: {{ error }}
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <br />

                                                        <b-button variant="success" v-show="!isSubmitting" type="submit"
                                                            class="btn btn-success btn-block mb-4 mr-2">
                                                            UPDATE
                                                        </b-button>
                                                        <b-button class="btn btn-success btn-block mb-4 mr-2"
                                                            v-show="isSubmitting" type="button" variant="success">
                                                            <span
                                                                class="spinner-border text-white mr-2 align-self-center loader-sm">Loading...</span>
                                                        </b-button>

                                                        <br />


                                                    </b-form>

                                                    <b-form v-show="settings.length == 0"
                                                        @submit.prevent="submitInstitutionEnrollment">
                                                        <h6>
                                                            Fill the details in the
                                                            <router-link to="/ui/adminSchoolSettings">
                                                                LINK
                                                            </router-link>
                                                            to create enrollment details
                                                        </h6>
                                                    </b-form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <template #modal-footer>
                                        <b-button variant="default" data-dismiss="modal"
                                            @click="$bvModal.hide('modalxl')"><i class="flaticon-cancel-12"></i>
                                            Close</b-button>
                                    </template>
                                </b-modal>

                            </div>

                            <b-toast id="message" header-class="d-none"
                                body-class="toast-success d-flex justify-content-between" toaster="b-toaster-top-center">
                                Data Saved Successfully
                            </b-toast>

                            <b-toast id="deleted" header-class="d-none"
                                body-class="toast-warning d-flex justify-content-between" toaster="b-toaster-top-center">
                                Data deleted Successfully
                            </b-toast>

                            <b-toast id="failed" header-class="d-none"
                                body-class="toast-danger d-flex justify-content-between" toaster="b-toaster-top-center">
                                FAILED!
                            </b-toast>

                            <div class="header-search">
                                <b-input v-model="table_option.search_text" size="sm" placeholder="Search..." />
                                <div class="search-image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <b-table ref="basic_table" responsive hover :items="items" :fields="columns"
                            :per-page="table_option.page_size" :current-page="table_option.current_page"
                            :filter="table_option.search_text" sort-by="invoice" :show-empty="true" @filtered="on_filtered">

                            <template #head(id)>
                                <b-checkbox v-model="is_select_all" variant="primary" class="checkbox-outline-primary"
                                    @change="select_all()" />
                            </template>

                            <template #cell(id)="row">
                                <b-checkbox v-model="selected_rows" :value="row.value" variant="primary"
                                    class="checkbox-outline-primary" @change="check_select_all"></b-checkbox>
                            </template>

                            <template #cell(year)="row">
                                <span class="inv-year">
                                    {{ row.value }}
                                </span>
                            </template>

                            <template #cell(month)="row">
                                <span class="inv-month">
                                    {{ row.value }}
                                </span>
                            </template>

                            <template #cell(day)="row">
                                <span class="inv-day">
                                    {{ row.value }}
                                </span>
                            </template>

                            <template #cell(view)="row">
                                <div class="position-relative">
                                    <router-link style="color: green;"
                                        :to="`/ui/viewAdminInstitutionEnrollment/` + row.value">
                                        <svg style="width: 16px;" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> View
                                    </router-link>
                                </div>
                            </template>

                            <template #cell(edit)="row">
                                <div class="position-relative">
                                    <router-link style="color: #2196f3;"
                                        :to="`/ui/editAdminInstitutionEnrollment/` + row.value">
                                        <svg style="width: 16px;" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg> Edit
                                    </router-link>
                                </div>
                            </template>

                            <template #cell(delete)="row">
                                <div class="position-relative">
                                    <button
                                        style="background-color: rgba(0, 0, 0, 0); color: #e7515a;border:none;outline:none;"
                                        @click="destroy(row.value)">
                                        <svg style="width: 16px;" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg> Delete
                                    </button>
                                </div>
                            </template>

                        </b-table>

                        <hr />
                        <div class="row justify-content-center">
                            <div v-if="lastPage > 1" class="pagination">
                                <b-button variant="success" style="margin: 4px;float: left;" v-if="currentPage > 1"
                                    @click="prevPage">&laquo; Prev </b-button>
                                <b-button variant="success" style="margin: 4px;float: right;" v-if="currentPage < lastPage"
                                    @click="nextPage">Next &raquo; </b-button>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>

<script>
import axios from 'axios';
import '@/assets/sass/apps/invoice-list.scss';
import '@/assets/sass/components/custom-modal.scss';
export default {
    metaInfo: { title: 'Institution enrollments :- Intelligent system' },
    data() {
        return {
            items: [],
            columns: [],
            table_option: { total_rows: 0, current_page: 1, page_size: 50, search_text: '' },
            meta: {},
            is_select_all: false, selected_rows: [],
            enrollment: [],
            currentPage: 1,
            lastPage: 1,
            fields: {},
            user_role: "",
            gender: "",
            isSubmitting: false,
            errors: "",
            settings: [],
            selected_file: null,
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
            file1: "",
            institution_welcome_message: "",
            institution_mission_and_vision: "",
            isSubmitting: false,
            file: null,
            hasFile: false,
            errors: "",
            updateErrors: "",
            submitErrors: "",

            field2: false,
            field3: false,
            field4: false,
            field5: false,
            field6: false,
            field7: false,
            field8: false,
            field9: false,
            field10: false,
            field11: false,
            field12: false,
            field13: false,
            field14: false,
            field15: false,
            field16: false,
            field17: false,
            field18: false,
            field19: false,
            field20: false,
        }
    },

    created() {
        this.enrollMent(this.currentPage);
        this.fetchSettings();
        this.fetchAuthenticatedUser();
        let dt = new Date();
        this.params.invoice_date = JSON.parse(JSON.stringify(dt));
        dt.setDate(dt.getDate() + 5);
        this.params.due_date = dt;
    },

    watch: {
        table_option: {
            handler: function () {
                this.clear_selection();
            },
            deep: true
        },
    },
    mounted() {
        this.fetchData(this.table_option.current_page);
        this.fetchAuthenticatedUser();
        this.bind_data();
    },
    methods: {

        removeField2() {
            this.field2 = false;
        },
        removeField3() {
            this.field3 = false;
        },
        removeField4() {
            this.field4 = false;
        },
        removeField5() {
            this.field5 = false;
        },
        removeField6() {
            this.field6 = false;
        },
        removeField7() {
            this.field7 = false;
        },
        removeField8() {
            this.field8 = false;
        },
        removeField9() {
            this.field9 = false;
        },
        removeField10() {
            this.field10 = false;
        },
        removeField11() {
            this.field11 = false;
        },
        removeField12() {
            this.field12 = false;
        },
        removeField13() {
            this.field13 = false;
        },
        removeField14() {
            this.field14 = false;
        },
        removeField15() {
            this.field15 = false;
        },
        removeField16() {
            this.field16 = false;
        },
        removeField17() {
            this.field17 = false;
        },
        removeField18() {
            this.field18 = false;
        },
        removeField19() {
            this.field19 = false;
        },
        removeField20() {
            this.field20 = false;
        },



        showField2() {
            this.field2 = 2;
        },
        showField3() {
            this.field2 = 2;
            this.field3 = 3;
        },
        showField4() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
        },
        showField5() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
        },
        showField6() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
        },
        showField7() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
        },
        showField8() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
        },
        showField9() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
            this.field9 = 9;
        },
        showField10() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
            this.field9 = 9;
            this.field10 = 10;
        },
        showField11() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
            this.field9 = 9;
            this.field10 = 10;
            this.field11 = 11;
        },
        showField12() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
            this.field9 = 9;
            this.field10 = 10;
            this.field11 = 11;
            this.field12 = 12;
        },
        showField13() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
            this.field9 = 9;
            this.field10 = 10;
            this.field11 = 11;
            this.field12 = 12;
            this.field13 = 13;
        },
        showField14() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
            this.field9 = 9;
            this.field10 = 10;
            this.field11 = 11;
            this.field12 = 12;
            this.field13 = 13;
            this.field14 = 14;
        },
        showField15() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
            this.field9 = 9;
            this.field10 = 10;
            this.field11 = 11;
            this.field12 = 12;
            this.field13 = 13;
            this.field14 = 14;
            this.field15 = 15;
        },
        showField16() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
            this.field9 = 9;
            this.field10 = 10;
            this.field11 = 11;
            this.field12 = 12;
            this.field13 = 13;
            this.field14 = 14;
            this.field15 = 15;
            this.field16 = 16;
        },
        showField17() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
            this.field9 = 9;
            this.field10 = 10;
            this.field11 = 11;
            this.field12 = 12;
            this.field13 = 13;
            this.field14 = 14;
            this.field15 = 15;
            this.field16 = 16;
            this.field17 = 17;
        },
        showField18() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
            this.field9 = 9;
            this.field10 = 10;
            this.field11 = 11;
            this.field12 = 12;
            this.field13 = 13;
            this.field14 = 14;
            this.field15 = 15;
            this.field16 = 16;
            this.field17 = 17;
            this.field18 = 18;
        },
        showField19() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
            this.field9 = 9;
            this.field10 = 10;
            this.field11 = 11;
            this.field12 = 12;
            this.field13 = 13;
            this.field14 = 14;
            this.field15 = 15;
            this.field16 = 16;
            this.field17 = 17;
            this.field18 = 18;
            this.field19 = 19;
        },
        showField20() {
            this.field2 = 2;
            this.field3 = 3;
            this.field4 = 4;
            this.field5 = 5;
            this.field6 = 6;
            this.field7 = 7;
            this.field8 = 8;
            this.field9 = 9;
            this.field10 = 10;
            this.field11 = 11;
            this.field12 = 12;
            this.field13 = 13;
            this.field14 = 14;
            this.field15 = 15;
            this.field16 = 16;
            this.field17 = 17;
            this.field18 = 18;
            this.field19 = 19;
            this.field20 = 20;
        },

        fetchAuthenticatedUser() {
            axios
                .get("/api/user")
                .then(response => {
                    this.id = response.data.id
                    this.first_name = response.data.first_name
                    this.middle_name = response.data.middle_name
                    this.last_name = response.data.last_name
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

        change_file(event) {
            this.selected_file = URL.createObjectURL(event.target.files[0]);
            this.file = event.target.files[0];
            this.hasFile = true;
        },

        grabFile1(event) {
            this.file = event.target.files[0];
            this.hasFile = true;
        },

        fetchSettings(page = 1) {
            axios.get(`/api/institutionGeneralSettings?page=${page}`)
                .then((response) => {
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
                }).catch((error) => {
                    console.error(error);
                });
        },

        enrollMent(page) {
            axios
                .get('/api/institutionEnrollments?page=' + page)
                .then((response) => {
                    this.enrollment = response.data.data;
                    this.currentPage = response.data.current_page;
                    this.lastPage = response.data.last_page;

                    this.items = this.enrollment.map((enrollmentData) => {
                        return {
                            id: enrollmentData.id,
                            year: enrollmentData.year_of_enrollment,
                            month: enrollmentData.month_of_enrollment,
                            day: enrollmentData.day_of_enrollment,
                            view: enrollmentData.slug,
                            edit: enrollmentData.slug,
                            delete: enrollmentData.id,
                        };
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        nextPage() {
            if (this.currentPage < this.lastPage) {
                this.currentPage += 1;
                this.fetchData(this.currentPage);
            }
        },

        prevPage() {
            if (this.currentPage > 1) {
                this.currentPage -= 1;
                this.fetchData(this.currentPage);
            }
        },

        fetchData(page = 1) {
            axios
                .get(`/api/institutionEnrollments?page=${page}`)
                .then((response) => {
                    this.items = response.data.data.map((enrollmentData) => {
                        return {
                            id: enrollmentData.id,
                            year: enrollmentData.year_of_enrollment,
                            month: enrollmentData.month_of_enrollment,
                            day: enrollmentData.day_of_enrollment,
                            view: enrollmentData.slug,
                            edit: enrollmentData.slug,
                            delete: enrollmentData.id,
                        };
                    });

                    this.currentPage = response.data.current_page;
                    this.lastPage = response.data.last_page;
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        async submitInstitutionEnrollment() {
            this.isSubmitting = true;

            try {
                const response = await axios.post("/api/adminInstitutionEnrollment", {
                    uniqueId: this.slugValue,
                    logoOfInstitution: this.institution_logo,
                    nameOfInstitution: this.institution_name,
                    institutionFirstEmail: this.institution_email_one,
                    institutionSecondEmail: this.institution_email_two,
                    institutionFirstPhone: this.institution_phone_one,
                    institutionSecondPhone: this.institution_phone_two,
                    institutionCountyOfOrigin: this.institution_county,
                    addressOfInstitution: this.institution_address,
                    institutionLocation: this.institution_pinned_location,
                    typeOfInstitution: this.institution_type,
                    modeOfInstitution: this.institution_mode,
                    institutionGenderDistribution: this.institution_gender_distro,
                    institutionWelcomeMessage: this.institution_welcome_message,
                    institutionMissionAndVision: this.institution_mission_and_vision,
                    yearOfEnrollment: this.year_of_enrollment,
                    monthOfEnrollment: this.month_of_enrollment,
                    dayOfEnrollment: this.day_of_enrollment,
                    enrollmentFirstRequirment: this.enrollment_requirment_1,
                    enrollmentSecondRequirment: this.enrollment_requirment_2,
                    enrollmentThirdRequirment: this.enrollment_requirment_3,
                    enrollmentFourthRequirment: this.enrollment_requirment_4,
                    enrollmentFifthRequirment: this.enrollment_requirment_5,
                    enrollment_requirment_6: this.enrollment_requirment_6,
                    enrollment_requirment_7: this.enrollment_requirment_7,
                    enrollment_requirment_8: this.enrollment_requirment_8,
                    enrollment_requirment_9: this.enrollment_requirment_9,
                    enrollment_requirment_10: this.enrollment_requirment_10,
                    enrollment_requirment_11: this.enrollment_requirment_11,
                    enrollment_requirment_12: this.enrollment_requirment_12,
                    enrollment_requirment_13: this.enrollment_requirment_13,
                    enrollment_requirment_14: this.enrollment_requirment_14,
                    enrollment_requirment_15: this.enrollment_requirment_15,
                    enrollment_requirment_16: this.enrollment_requirment_16,
                    enrollment_requirment_17: this.enrollment_requirment_17,
                    enrollment_requirment_18: this.enrollment_requirment_18,
                    enrollment_requirment_19: this.enrollment_requirment_19,
                    enrollment_requirment_20: this.enrollment_requirment_20,
                });

                if (response.status === 200) {
                    // Form submission is successful
                    console.log("All is well");
                    this.$bvToast.show('message');
                    this.$bvModal.hide('modalxl');
                    this.errors = false;
                    this.fetchData();

                    // Clear the fields after successful submission
                    this.fields = {};
                }
            } catch (error) {
                // Form submission failed, handle error
                this.errors = error.response.data.errors;
                this.submitErrors = error.response.data.message;
            } finally {
                // Regardless of success or error, reset the isSubmitting flag
                this.isSubmitting = false;
            }
        },

        fetchInstitutionEnrollment() {
            axios.get('/api/institutionEnrollments')
                .then(response => {
                    if (response.data.data.length > 0) {
                        this.institutionEnrollment = response.data.data[0];
                        this.form = { ...this.institutionEnrollment };
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        },

        bind_data() {

            this.columns = [
                { key: 'id', label: '', thClass: 'header-checkbox' },
                { key: 'year', label: 'Year', sortable: true },
                { key: 'month', label: 'Month', sortable: true },
                { key: 'day', label: 'Day', sortable: true },
                { key: 'view', label: 'View', sortable: false },
                { key: 'edit', label: 'Edit', sortable: false },
                { key: 'delete', label: 'Delete', sortable: false },
            ];

            this.items = this.enrollment.map((item, index) => {
                return {
                    id: index + 1,
                    year: item.year,
                    month: item.month,
                    day: item.day,
                    view: item.slug,
                    edit: item.slug,
                    delete: item.id,
                };
            });

            this.table_option.total_rows = this.items.length;
        },
        on_filtered(filtered_items) {
            this.refresh_table(filtered_items.length);
        },
        delete_row(item) {
            if (confirm('Are you sure want to delete selected row ?')) {

                if (item) {
                    this.items = this.items.filter(d => d.id != item.id);
                }
                else {
                    this.items = this.items.filter(d => !this.selected_rows.includes(d.id));
                }
                this.refresh_table(this.items.length);
            }
        },
        refresh_table(total) {
            this.table_option.total_rows = total;
            this.table_option.currentPage = 1;
        },

        select_all() {
            this.selected_rows = this.$refs.basic_table.paginatedItems.map(d => { return d.id });
            if (!this.is_select_all) { this.clear_selection(); }
            this.check_select_all();
        },
        check_select_all() {
            let ids = this.$refs.basic_table.paginatedItems.map(d => { return d.id });
            this.is_select_all = false;
            if (ids.length == this.selected_rows.length) {
                this.is_select_all = true;
            }
        },
        clear_selection() {
            this.is_select_all = false;
            this.selected_rows = [];
        },

        destroy(id) {
            const swalWithBootstrapButtons = this.$swal.mixin({
                confirmButtonClass: 'btn btn-secondary',
                cancelButtonClass: 'btn btn-dark mr-3',
                buttonsStyling: false
            });
            swalWithBootstrapButtons
                .fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true,
                    padding: '2em'
                })
                .then(result => {
                    if (result.value) {
                        swalWithBootstrapButtons.fire('Deleted!', 'Data has been deleted.', 'success');
                        axios
                            .delete("/api/deleteInstitutionEnrollment/" + id)
                            .then((response) => {
                                this.fetchData();
                            }).catch((error) => {
                                this.$bvToast.show('failed');
                            });
                    } else if (result.dismiss === this.$swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire('Cancelled', ' ', 'error');
                    }
                });
        },
    },

    computed: {
        slugValue: {
            get() {
                let result = "";
                let characters =
                    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                let charactersLength = characters.length;
                for (let i = 0; i < 100; i++) {
                    result += characters.charAt(
                        Math.floor(Math.random() * charactersLength)
                    );
                }
                return (this.fields.slug = result + "");
            },
            set(value) {
                this.fields.slug = value;
            },
        },
    }
};
</script>
