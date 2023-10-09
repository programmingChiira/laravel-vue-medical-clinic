<template>
    <div class="layout-px-spacing">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Administrator</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">settings</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>View enrollment</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="row invoice layout-top-spacing layout-spacing apps-invoice">
            <div class="col-md-12 col-12">
                <div class="doc-container">
                    <div class="row">
                        <div class="col-xl-12 col-md-3 col-sm-6">
                            <b-button style="float: right;" tag="a" variant="secondary" class="btn-print action-print"
                                @click="print()">Print</b-button>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="invoice-inbox">
                                <div id="ct" class="">
                                    <div class="invoice-00001">
                                        <div class="content-section">
                                            <div class="inv--head-section inv--detail-section">
                                                <div class="row">
                                                    <div class="col-sm-6 col-6">
                                                        <div class="d-flex">
                                                            <img :src="'/' + fields.institution_logo" alt="profile"
                                                                class="profile-preview" @click="$refs.fl_profile.click()" />
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-6">
                                                        <p style="float: right;" class="inv-list-number"><span
                                                                class="inv-title"> {{
                                                                    fields.institution_name }} </span>
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12 align-self-center mt-3 text-sm-right">
                                                        <p class="inv-created-date">
                                                            <span class="inv-title"> 1 <sup>st</sup> email : </span>
                                                            <span class="inv-date">
                                                                <a class="inv-customer-name" target="_blank"
                                                                    :href="'mailto:' + fields.institution_email_one">
                                                                    {{ fields.institution_email_one }}
                                                                </a>
                                                            </span>
                                                        </p>

                                                        <p class="inv-due-date">
                                                            <span class="inv-title"> 2 <sup>nd</sup> email : </span>
                                                            <span class="inv-date">
                                                                <a class="inv-customer-name" target="_blank"
                                                                    :href="'mailto:' + fields.institution_email_two">
                                                                    {{ fields.institution_email_two }}
                                                                </a>
                                                            </span>
                                                        </p>
                                                    </div>

                                                    <br />

                                                    <div class="col-sm-12 align-self-center mt-3 text-sm-right">
                                                        <p class="inv-created-date">
                                                            <span class="inv-title"> 1 <sup>st</sup> phone : </span>
                                                            <span class="inv-date">
                                                                <a class="inv-customer-name" target="_blank"
                                                                    :href="'mailto:' + fields.institution_phone_one">
                                                                    {{ fields.institution_phone_one }}
                                                                </a>
                                                            </span>
                                                        </p>

                                                        <p class="inv-due-date">
                                                            <span class="inv-title"> 2 <sup>nd</sup> phone : </span>
                                                            <span class="inv-date">
                                                                <a class="inv-customer-name" target="_blank"
                                                                    :href="'mailto:' + fields.institution_phone_two">
                                                                    {{ fields.institution_phone_two }}
                                                                </a>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="inv--detail-section inv--customer-detail-section">
                                                <div class="row">
                                                    <div style="margin-bottom: 20px;"
                                                        class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                        <p class="inv-street-addr"> <strong>County</strong> : {{
                                                            fields.institution_county }}</p>
                                                        <br />
                                                        <p class="inv-email-address"> <strong>Address</strong> : {{
                                                            fields.institution_address }}</p>
                                                        <br />
                                                        <p class="inv-email-address">
                                                            <strong>Pinned location</strong> :
                                                            <a class="inv-customer-name" target="_blank"
                                                                :href="fields.institution_pinned_location">
                                                                {{ fields.institution_pinned_location }}
                                                            </a>
                                                        </p>
                                                    </div>

                                                    <div class="col-md-6 col-6 text-sm-right">
                                                        <p class="inv-street-addr">
                                                            <strong>Type</strong> :
                                                            {{ fields.institution_type }}
                                                        </p>
                                                        <br />
                                                        <p class="inv-email-address">
                                                            <strong>Mode</strong> :
                                                            {{ fields.institution_mode }}
                                                        </p>
                                                        <br />
                                                        <p class="inv-email-address">
                                                            <strong>Residential</strong> :
                                                            {{ fields.institution_gender_distro }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr />

                                            <div class="inv--detail-section inv--customer-detail-section">
                                                <div class="row">
                                                    <h5 class="col-md-12 col-12"
                                                        style="margin-bottom: 10px;text-decoration:underline;">
                                                        <strong>Enrollment timeline</strong>
                                                    </h5>
                                                    <div style="margin-bottom: 18px;" class="col-md-4 col-4">
                                                        <h6 class="inv-year-address"> <strong>Year</strong> </h6>
                                                        <p>
                                                            {{ fields.year_of_enrollment }}
                                                        </p>
                                                    </div>

                                                    <div style="margin-bottom: 18px;" class="col-md-4 col-4">
                                                        <h6 class="inv-month-address"> <strong>Month</strong> </h6>
                                                        <p>
                                                            {{ fields.month_of_enrollment }}
                                                        </p>
                                                    </div>

                                                    <div style="margin-bottom: 18px;" class="col-md-4 col-4">
                                                        <h6 class="inv-day-address"> <strong>Day</strong> </h6>
                                                        <p>
                                                            {{ fields.day_of_enrollment }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <hr />

                                                <div id="typographyLists" class="col-lg-12 layout-spacing">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <h5 style="margin-bottom: 10px;text-decoration:underline;">
                                                                <strong>Requirements</strong>
                                                            </h5>
                                                            <div class="col-md-12 col-12">
                                                                <div class="row element-background">
                                                                    <ul class="col-md-6 col-12 list-icon">
                                                                        <span
                                                                            v-if="fields.enrollment_requirment_1 == NULL || fields.enrollment_requirment_1 == 'NULL' || fields.enrollment_requirment_1 == null || fields.enrollment_requirment_1 == 'null' || fields.enrollment_requirment_1 == undefined || fields.enrollment_requirment_1 == 'undefined' || fields.enrollment_requirment_1 == '' || fields.enrollment_requirment_1 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_1 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_2 == NULL || fields.enrollment_requirment_2 == 'NULL' || fields.enrollment_requirment_2 == null || fields.enrollment_requirment_2 == 'null' || fields.enrollment_requirment_2 == undefined || fields.enrollment_requirment_2 == 'undefined' || fields.enrollment_requirment_2 == '' || fields.enrollment_requirment_2 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_2 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_3 == NULL || fields.enrollment_requirment_3 == 'NULL' || fields.enrollment_requirment_3 == null || fields.enrollment_requirment_3 == 'null' || fields.enrollment_requirment_3 == undefined || fields.enrollment_requirment_3 == 'undefined' || fields.enrollment_requirment_3 == '' || fields.enrollment_requirment_3 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_3 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_4 == NULL || fields.enrollment_requirment_4 == 'NULL' || fields.enrollment_requirment_4 == null || fields.enrollment_requirment_4 == 'null' || fields.enrollment_requirment_4 == undefined || fields.enrollment_requirment_4 == 'undefined' || fields.enrollment_requirment_4 == '' || fields.enrollment_requirment_4 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_4 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_5 == NULL || fields.enrollment_requirment_5 == 'NULL' || fields.enrollment_requirment_5 == null || fields.enrollment_requirment_5 == 'null' || fields.enrollment_requirment_5 == undefined || fields.enrollment_requirment_5 == 'undefined' || fields.enrollment_requirment_5 == '' || fields.enrollment_requirment_5 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_5 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_6 == NULL || fields.enrollment_requirment_6 == 'NULL' || fields.enrollment_requirment_6 == null || fields.enrollment_requirment_6 == 'null' || fields.enrollment_requirment_6 == undefined || fields.enrollment_requirment_6 == 'undefined' || fields.enrollment_requirment_6 == '' || fields.enrollment_requirment_6 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_6 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_7 == NULL || fields.enrollment_requirment_7 == 'NULL' || fields.enrollment_requirment_7 == null || fields.enrollment_requirment_7 == 'null' || fields.enrollment_requirment_7 == undefined || fields.enrollment_requirment_7 == 'undefined' || fields.enrollment_requirment_7 == '' || fields.enrollment_requirment_7 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_7 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_8 == NULL || fields.enrollment_requirment_8 == 'NULL' || fields.enrollment_requirment_8 == null || fields.enrollment_requirment_8 == 'null' || fields.enrollment_requirment_8 == undefined || fields.enrollment_requirment_8 == 'undefined' || fields.enrollment_requirment_8 == '' || fields.enrollment_requirment_8 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_8 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_9 == NULL || fields.enrollment_requirment_9 == 'NULL' || fields.enrollment_requirment_9 == null || fields.enrollment_requirment_9 == 'null' || fields.enrollment_requirment_9 == undefined || fields.enrollment_requirment_9 == 'undefined' || fields.enrollment_requirment_9 == '' || fields.enrollment_requirment_9 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_9 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_10 == NULL || fields.enrollment_requirment_10 == 'NULL' || fields.enrollment_requirment_10 == null || fields.enrollment_requirment_10 == 'null' || fields.enrollment_requirment_10 == undefined || fields.enrollment_requirment_10 == 'undefined' || fields.enrollment_requirment_10 == '' || fields.enrollment_requirment_10 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_10 }}</span>
                                                                        </li>
                                                                    </ul>

                                                                    <ul class="col-md-6 col-12 list-icon">
                                                                        <span
                                                                            v-if="fields.enrollment_requirment_11 == NULL || fields.enrollment_requirment_11 == 'NULL' || fields.enrollment_requirment_11 == null || fields.enrollment_requirment_11 == 'null' || fields.enrollment_requirment_11 == undefined || fields.enrollment_requirment_11 == 'undefined' || fields.enrollment_requirment_11 == '' || fields.enrollment_requirment_11 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_11 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_12 == NULL || fields.enrollment_requirment_12 == 'NULL' || fields.enrollment_requirment_12 == null || fields.enrollment_requirment_12 == 'null' || fields.enrollment_requirment_12 == undefined || fields.enrollment_requirment_12 == 'undefined' || fields.enrollment_requirment_12 == '' || fields.enrollment_requirment_12 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_12 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_13 == NULL || fields.enrollment_requirment_13 == 'NULL' || fields.enrollment_requirment_13 == null || fields.enrollment_requirment_13 == 'null' || fields.enrollment_requirment_13 == undefined || fields.enrollment_requirment_13 == 'undefined' || fields.enrollment_requirment_13 == '' || fields.enrollment_requirment_13 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_13 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_14 == NULL || fields.enrollment_requirment_14 == 'NULL' || fields.enrollment_requirment_14 == null || fields.enrollment_requirment_14 == 'null' || fields.enrollment_requirment_14 == undefined || fields.enrollment_requirment_14 == 'undefined' || fields.enrollment_requirment_14 == '' || fields.enrollment_requirment_14 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_14 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_15 == NULL || fields.enrollment_requirment_15 == 'NULL' || fields.enrollment_requirment_15 == null || fields.enrollment_requirment_15 == 'null' || fields.enrollment_requirment_15 == undefined || fields.enrollment_requirment_15 == 'undefined' || fields.enrollment_requirment_15 == '' || fields.enrollment_requirment_15 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_15 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_16 == NULL || fields.enrollment_requirment_16 == 'NULL' || fields.enrollment_requirment_16 == null || fields.enrollment_requirment_16 == 'null' || fields.enrollment_requirment_16 == undefined || fields.enrollment_requirment_16 == 'undefined' || fields.enrollment_requirment_16 == '' || fields.enrollment_requirment_16 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_16 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_17 == NULL || fields.enrollment_requirment_17 == 'NULL' || fields.enrollment_requirment_17 == null || fields.enrollment_requirment_17 == 'null' || fields.enrollment_requirment_17 == undefined || fields.enrollment_requirment_17 == 'undefined' || fields.enrollment_requirment_17 == '' || fields.enrollment_requirment_17 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_17 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_18 == NULL || fields.enrollment_requirment_18 == 'NULL' || fields.enrollment_requirment_18 == null || fields.enrollment_requirment_18 == 'null' || fields.enrollment_requirment_18 == undefined || fields.enrollment_requirment_18 == 'undefined' || fields.enrollment_requirment_18 == '' || fields.enrollment_requirment_18 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_18 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_19 == NULL || fields.enrollment_requirment_19 == 'NULL' || fields.enrollment_requirment_19 == null || fields.enrollment_requirment_19 == 'null' || fields.enrollment_requirment_19 == undefined || fields.enrollment_requirment_19 == 'undefined' || fields.enrollment_requirment_19 == '' || fields.enrollment_requirment_19 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_19 }}</span>
                                                                        </li>

                                                                        <span
                                                                            v-if="fields.enrollment_requirment_20 == NULL || fields.enrollment_requirment_20 == 'NULL' || fields.enrollment_requirment_20 == null || fields.enrollment_requirment_20 == 'null' || fields.enrollment_requirment_20 == undefined || fields.enrollment_requirment_20 == 'undefined' || fields.enrollment_requirment_20 == '' || fields.enrollment_requirment_20 == ' '">
                                                                        </span>
                                                                        <li v-else>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-arrow-right">
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                                <polyline points="12 5 19 12 12 19">
                                                                                </polyline>
                                                                            </svg>
                                                                            <span class="list-text"> {{
                                                                                fields.enrollment_requirment_20 }}</span>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
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
import '@/assets/sass/scrollspyNav.scss';
import '@/assets/sass/apps/invoice-preview.scss';

export default {
    metaInfo: { title: 'Enrollment form :- Intelligent system' },
    props: ["slug"],
    data() {
        return {
            fields: {},
            user_role: "",
            isSubmitting: false,
            errors: "",
        };
    },

    methods: {
        change_file(event) {
            this.selected_file = URL.createObjectURL(event.target.files[0]);
        },

        async updateEnrollment() {
            this.isSubmitting = true;
            try {
                const response = await axios.post(`/api/updateInstitutionEnrollment/${this.fields.id}`, {
                    logoOfInstitution: this.fields.institution_logo,
                    nameOfInstitution: this.fields.institution_name,
                    institutionFirstEmail: this.fields.institution_email_one,
                    institutionSecondEmail: this.fields.institution_email_two,
                    institutionFirstPhone: this.fields.institution_phone_one,
                    institutionSecondPhone: this.fields.institution_phone_two,
                    institutionCountyOfOrigin: this.fields.institution_county,
                    addressOfInstitution: this.fields.institution_address,
                    institutionLocation: this.fields.institution_pinned_location,
                    typeOfInstitution: this.fields.institution_type,
                    modeOfInstitution: this.fields.institution_mode,
                    institutionGenderDistribution: this.fields.institution_gender_distro,
                    institutionWelcomeMessage: this.fields.institution_welcome_message,
                    institutionMissionAndVision: this.fields.institution_mission_and_vision,
                    yearOfEnrollment: this.fields.year_of_enrollment,
                    monthOfEnrollment: this.fields.month_of_enrollment,
                    dayOfEnrollment: this.fields.day_of_enrollment,
                    enrollmentFirstRequirment: this.fields.enrollment_requirment_1,
                    enrollmentSecondRequirment: this.fields.enrollment_requirment_2,
                    enrollmentThirdRequirment: this.fields.enrollment_requirment_3,
                    enrollmentFourthRequirment: this.fields.enrollment_requirment_4,
                    enrollmentFifthRequirment: this.fields.enrollment_requirment_5,
                    enrollment_requirment_6: this.fields.enrollment_requirment_6,
                    enrollment_requirment_7: this.fields.enrollment_requirment_7,
                    enrollment_requirment_8: this.fields.enrollment_requirment_8,
                    enrollment_requirment_9: this.fields.enrollment_requirment_9,
                    enrollment_requirment_10: this.fields.enrollment_requirment_10,
                    enrollment_requirment_11: this.fields.enrollment_requirment_11,
                    enrollment_requirment_12: this.fields.enrollment_requirment_12,
                    enrollment_requirment_13: this.fields.enrollment_requirment_13,
                    enrollment_requirment_14: this.fields.enrollment_requirment_14,
                    enrollment_requirment_15: this.fields.enrollment_requirment_15,
                    enrollment_requirment_16: this.fields.enrollment_requirment_16,
                    enrollment_requirment_17: this.fields.enrollment_requirment_17,
                    enrollment_requirment_18: this.fields.enrollment_requirment_18,
                    enrollment_requirment_19: this.fields.enrollment_requirment_19,
                    enrollment_requirment_20: this.fields.enrollment_requirment_20,
                });
                if (response.status === 200) {
                    // window.location.href = '/ui/welcome';
                    console.log('Success')
                    this.$bvToast.show('message');
                    this.errors = false;
                    this.isSubmitting = false;
                }
            } catch (error) {
                console.log(error.response.data.message);
                this.errors = error.response.data.errors;
            } finally {
                this.isSubmitting = false;
            }
        },

        print() {
            window.print();
        },
    },

    mounted() {
        axios
            .get("/api/institutionEnrollments/" + this.slug)
            .then((response) => {
                this.fields = response.data.data;
            })
            .catch((error) => {
                if (error.response.status === 403) {
                    //this.$router.push({ name: "Blog" });
                }
            });

        axios
            .get("/api/user")
            //.then((response) => (this.id = response.data.id))
            .then(response => {
                this.user_role = response.data.user_role
            })
            .catch((error) => {
                if (error.response.status === 401) {
                    this.$emit("updateSidebar");
                    localStorage.removeItem("authenticated");
                    window.location.href = "/login";
                }
            });

        if (localStorage.getItem("authenticated")) {
            this.loggedIn = true;
        } else {
            this.loggedIn = false;
        }
    }
};
</script>