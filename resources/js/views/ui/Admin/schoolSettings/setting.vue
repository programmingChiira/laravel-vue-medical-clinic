<template>
    <div v-show="user_role === 'Administrator'" class="layout-px-spacing apps-invoice-add">

        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Administrator</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">settings</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>general</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="row invoice layout-top-spacing layout-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="doc-container">

                    <div class="row">
                        <div class="col-xl-12">

                            <div class="invoice-content">

                                <b-form v-show="settings.length == 1" @submit.prevent="updateForm">

                                    <div class="invoice-detail-body">

                                        <div class="invoice-detail-title">

                                            <div class="invoice-logo">
                                                <div class="upload pr-md-4">
                                                    <input ref="fl_profile" @input="grabFile1" id="image" type="file"
                                                        class="d-none" accept="image/*" @change="change_file" />
                                                    <img v-if="selected_file || institution_logo"
                                                        :src="selected_file || (institution_logo ? `/${institution_logo}` : require('@/assets/images/user-profile.jpeg'))"
                                                        alt="profile" class="profile-preview"
                                                        @click="$refs.fl_profile.click()" />
                                                    <div v-else class="profile-preview upload-preview"
                                                        @click="$refs.fl_profile.click()">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="feather feather-upload-cloud">
                                                                <polyline points="16 16 12 12 8 16"></polyline>
                                                                <line x1="12" y1="12" x2="12" y2="21"></line>
                                                                <path
                                                                    d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3">
                                                                </path>
                                                                <polyline points="16 16 12 12 8 16"></polyline>
                                                            </svg>
                                                        </div>
                                                        <div class="mt-2">Institution Logo</div>
                                                    </div>
                                                    <span style="color: red;"> *</span>
                                                </div>
                                            </div>

                                            <div class="invoice-title">
                                                <label for="name">Name of institution <span style="color: red;">
                                                        *</span></label>
                                                <b-input v-model="institution_name"
                                                    placeholder="Name of institution"></b-input>
                                            </div>

                                        </div>

                                        <div class="invoice-detail-terms">

                                            <div class="row justify-content-between">

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="date">Year institution was started <span
                                                                style="color: red;"> *</span></label>
                                                        <flat-pickr v-model="institution_year_of_starting"
                                                            class="form-control form-control-sm flatpickr active"
                                                            placeholder="Institution year of starting"></flat-pickr>
                                                    </div>
                                                </div>

                                            </div>

                                            <hr />

                                            <div class="row justify-content-between">

                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionEmail1">Institution first email<span
                                                                style="color: red;"> *</span></label>
                                                        <b-input v-model="institution_email_one" size="sm"
                                                            id="institutionEmail1"
                                                            placeholder="institution first email"></b-input>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionEmail2">Institution second email</label>
                                                        <b-input v-model="institution_email_two" size="sm"
                                                            id="institutionEmail2"
                                                            placeholder="institution second email"></b-input>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionPhone1">Institution first phone<span
                                                                style="color: red;"> *</span></label>
                                                        <b-input v-model="institution_phone_one" size="sm"
                                                            id="institutionPhone1"
                                                            placeholder="institution first phone"></b-input>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionEmail2">Institution second phone</label>
                                                        <b-input v-model="institution_phone_two" size="sm"
                                                            id="institutionEmail2"
                                                            placeholder="institution second phone"></b-input>
                                                    </div>
                                                </div>

                                            </div>

                                            <hr />

                                            <div class="row justify-content-between">

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionCounty">County <span style="color: red;">
                                                                *</span></label>
                                                        <b-select v-model="institution_county" size="sm"
                                                            class="institution-county" id="institutionCounty">
                                                            <b-select-option value="">Choose County</b-select-option>
                                                            <b-select-option value="Baringo">Baringo</b-select-option>
                                                            <b-select-option value="Bomet">Bomet</b-select-option>
                                                            <b-select-option value="Bungoma">Bungoma</b-select-option>
                                                            <b-select-option value="Busia">Busia</b-select-option>
                                                            <b-select-option
                                                                value="Elgeyo-Marakwet">Elgeyo-Marakwet</b-select-option>
                                                            <b-select-option value="Embu">Embu</b-select-option>
                                                            <b-select-option value="Garissa">Garissa</b-select-option>
                                                            <b-select-option value="Homa Bay">Homa Bay</b-select-option>
                                                            <b-select-option value="Isiolo">Isiolo</b-select-option>
                                                            <b-select-option value="Kajiado">Kajiado</b-select-option>
                                                            <b-select-option value="Kakamega">Kakamega</b-select-option>
                                                            <b-select-option value="Kericho">Kericho</b-select-option>
                                                            <b-select-option value="Kiambu">Kiambu</b-select-option>
                                                            <b-select-option value="Kilifi">Kilifi</b-select-option>
                                                            <b-select-option value="Kirinyaga">Kirinyaga</b-select-option>
                                                            <b-select-option value="Kisii">Kisii</b-select-option>
                                                            <b-select-option value="Kisumu">Kisumu</b-select-option>
                                                            <b-select-option value="Kitui">Kitui</b-select-option>
                                                            <b-select-option value="Kwale">Kwale</b-select-option>
                                                            <b-select-option value="Laikipia">Laikipia</b-select-option>
                                                            <b-select-option value="Lamu">Lamu</b-select-option>
                                                            <b-select-option value="Machakos">Machakos</b-select-option>
                                                            <b-select-option value="Makueni">Makueni</b-select-option>
                                                            <b-select-option value="Mandera">Mandera</b-select-option>
                                                            <b-select-option value="Marsabit">Marsabit</b-select-option>
                                                            <b-select-option value="Meru">Meru</b-select-option>
                                                            <b-select-option value="Migori">Migori</b-select-option>
                                                            <b-select-option value="Mombasa">Mombasa</b-select-option>
                                                            <b-select-option value="Murang'a">Murang'a</b-select-option>
                                                            <b-select-option value="Nairobi">Nairobi</b-select-option>
                                                            <b-select-option value="Nakuru">Nakuru</b-select-option>
                                                            <b-select-option value="Nandi">Nandi</b-select-option>
                                                            <b-select-option value="Narok">Narok</b-select-option>
                                                            <b-select-option value="Nyamira">Nyamira</b-select-option>
                                                            <b-select-option value="Nyandarua">Nyandarua</b-select-option>
                                                            <b-select-option value="Nyeri">Nyeri</b-select-option>
                                                            <b-select-option value="Samburu">Samburu</b-select-option>
                                                            <b-select-option value="Siaya">Siaya</b-select-option>
                                                            <b-select-option
                                                                value="Taita-Taveta">Taita-Taveta</b-select-option>
                                                            <b-select-option value="Tana River">Tana River</b-select-option>
                                                            <b-select-option
                                                                value="Tharaka-Nithi">Tharaka-Nithi</b-select-option>
                                                            <b-select-option value="Trans Nzoia">Trans
                                                                Nzoia</b-select-option>
                                                            <b-select-option value="Turkana">Turkana</b-select-option>
                                                            <b-select-option value="Uasin Gishu">Uasin
                                                                Gishu</b-select-option>
                                                            <b-select-option value="Vihiga">Vihiga</b-select-option>
                                                            <b-select-option value="Wajir">Wajir</b-select-option>
                                                            <b-select-option value="West Pokot">West Pokot</b-select-option>
                                                        </b-select>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionAddress">Institution address <span
                                                                style="color: red;"> *</span></label>
                                                        <b-input v-model="institution_address" size="sm"
                                                            id="institutionAddress"
                                                            placeholder="institution address"></b-input>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionLocation">Institution pinned location
                                                            <span style="color: red;"> *</span></label>
                                                        <b-input v-model="institution_pinned_location" size="sm"
                                                            id="institutionLocation"
                                                            placeholder="institution pinned location"></b-input>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row justify-content-between">

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionType">Type of institution <span
                                                                style="color: red;"> *</span></label>
                                                        <b-select v-model="institution_type" size="sm"
                                                            class="institution-type" id="institutionType">
                                                            <b-select-option value="">Choose</b-select-option>
                                                            <b-select-option value="High school">High
                                                                school</b-select-option>
                                                            <b-select-option value="Junior high school">Junior high
                                                                school</b-select-option>
                                                            <b-select-option value="Primary school">Primary
                                                                school</b-select-option>
                                                            <b-select-option value="Tertiary institution">Tertiary
                                                                institution</b-select-option>
                                                        </b-select>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionMode">Mode <span style="color: red;">
                                                                *</span></label>
                                                        <b-select v-model="institution_mode" size="sm"
                                                            class="institution-mode" id="institutionMode">
                                                            <b-select-option value="">Choose</b-select-option>
                                                            <b-select-option value="Boarding">Boarding</b-select-option>
                                                            <b-select-option value="Day">Day</b-select-option>
                                                            <b-select-option value="Boarding and Day">Boarding &
                                                                Day</b-select-option>
                                                        </b-select>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="studentGender">Student gender distro <span
                                                                style="color: red;"> *</span></label>
                                                        <b-select v-model="institution_gender_distro" size="sm"
                                                            class="institution-gender-distro" id="studentGender">
                                                            <b-select-option value="">Choose</b-select-option>
                                                            <b-select-option value="Female">Female</b-select-option>
                                                            <b-select-option value="Male">Male</b-select-option>
                                                            <b-select-option value="Mixed">Mixed</b-select-option>
                                                        </b-select>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="invoice-detail-note">

                                            <div class="row">

                                                <div class="col-md-12 align-self-center">
                                                    <div class="form-group row invoice-note">
                                                        <label for="invoice-detail-notes"
                                                            class="col-sm-12 col-form-label col-form-label-sm"> Welcome
                                                            message
                                                            <span style="color: red;"> *</span></label>
                                                        <div class="col-sm-12">
                                                            <b-textarea v-model="institution_welcome_message" rows="3"
                                                                id="invoice-detail-notes"
                                                                placeholder='Welcome message'></b-textarea>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="invoice-detail-note">
                                            <div class="row">
                                                <div class="col-md-12 align-self-center">
                                                    <div class="form-group row invoice-note">
                                                        <label for="invoice-detail-notes"
                                                            class="col-sm-12 col-form-label col-form-label-sm"> Institution
                                                            mission and vision <span style="color: red;"> *</span></label>
                                                        <div class="col-sm-12">
                                                            <b-textarea v-model="institution_mission_and_vision" rows="3"
                                                                id="invoice-detail-notes"
                                                                placeholder='Mission and vision'></b-textarea>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div v-if="updateErrors">
                                                <ul style="color: red; font-size: 12px; list-style: none; padding: 0;">
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
                                            <b-button class="btn btn-success btn-block mb-4 mr-2" v-show="isSubmitting"
                                                type="button" variant="success">
                                                <span
                                                    class="spinner-border text-white mr-2 align-self-center loader-sm">Loading...</span>
                                            </b-button>

                                            <br />

                                        </div>


                                    </div>

                                </b-form>

                                <b-toast id="message" header-class="d-none"
                                    body-class="toast-success d-flex justify-content-between"
                                    toaster="b-toaster-top-center">
                                    Settings Saved Successfully
                                </b-toast>

                                <b-form v-show="settings.length == 0" @submit.prevent="submitSchoolGeneralSettings">

                                    <div class="invoice-detail-body">

                                        <div class="invoice-detail-title">

                                            <div class="invoice-logo">
                                                <div class="upload pr-md-4">
                                                    <input ref="fl_profile" @input="grabFile1" id="image" type="file"
                                                        class="d-none" accept="image/*" @change="change_file" />
                                                    <img v-if="selected_file || institution_logo"
                                                        :src="selected_file || (institution_logo ? `/${institution_logo}` : require('@/assets/images/user-profile.jpeg'))"
                                                        alt="profile" class="profile-preview"
                                                        @click="$refs.fl_profile.click()" />
                                                    <div v-else class="profile-preview upload-preview"
                                                        @click="$refs.fl_profile.click()">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="feather feather-upload-cloud">
                                                                <polyline points="16 16 12 12 8 16"></polyline>
                                                                <line x1="12" y1="12" x2="12" y2="21"></line>
                                                                <path
                                                                    d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3">
                                                                </path>
                                                                <polyline points="16 16 12 12 8 16"></polyline>
                                                            </svg>
                                                        </div>
                                                        <div class="mt-2">Institution Logo</div>
                                                    </div>
                                                    <span style="color: red;"> *</span>
                                                </div>
                                            </div>

                                            <div class="invoice-title">
                                                <label for="name">Name of institution <span style="color: red;">
                                                        *</span></label>
                                                <b-input v-model="institution_name"
                                                    placeholder="Name of institution"></b-input>
                                            </div>

                                        </div>

                                        <div class="invoice-detail-terms">

                                            <div class="row justify-content-between">

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="date">Year institution was started <span
                                                                style="color: red;"> *</span></label>
                                                        <flat-pickr v-model="institution_year_of_starting"
                                                            class="form-control form-control-sm flatpickr active"
                                                            placeholder="Institution year of starting"></flat-pickr>
                                                    </div>
                                                </div>

                                            </div>

                                            <hr />

                                            <div class="row justify-content-between">

                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionEmail1">Institution first email<span
                                                                style="color: red;"> *</span></label>
                                                        <b-input v-model="institution_email_one" size="sm"
                                                            id="institutionEmail1"
                                                            placeholder="institution first email"></b-input>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionEmail2">Institution second email</label>
                                                        <b-input v-model="institution_email_two" size="sm"
                                                            id="institutionEmail2"
                                                            placeholder="institution second email"></b-input>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionPhone1">Institution first phone<span
                                                                style="color: red;"> *</span></label>
                                                        <b-input v-model="institution_phone_one" size="sm"
                                                            id="institutionPhone1"
                                                            placeholder="institution first phone"></b-input>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionEmail2">Institution second phone</label>
                                                        <b-input v-model="institution_phone_two" size="sm"
                                                            id="institutionEmail2"
                                                            placeholder="institution second phone"></b-input>
                                                    </div>
                                                </div>

                                            </div>

                                            <hr />

                                            <div class="row justify-content-between">

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionCounty">County <span style="color: red;">
                                                                *</span></label>
                                                        <b-select v-model="institution_county" size="sm"
                                                            class="institution-county" id="institutionCounty">
                                                            <b-select-option value="">Choose County</b-select-option>
                                                            <b-select-option value="Baringo">Baringo</b-select-option>
                                                            <b-select-option value="Bomet">Bomet</b-select-option>
                                                            <b-select-option value="Bungoma">Bungoma</b-select-option>
                                                            <b-select-option value="Busia">Busia</b-select-option>
                                                            <b-select-option
                                                                value="Elgeyo-Marakwet">Elgeyo-Marakwet</b-select-option>
                                                            <b-select-option value="Embu">Embu</b-select-option>
                                                            <b-select-option value="Garissa">Garissa</b-select-option>
                                                            <b-select-option value="Homa Bay">Homa Bay</b-select-option>
                                                            <b-select-option value="Isiolo">Isiolo</b-select-option>
                                                            <b-select-option value="Kajiado">Kajiado</b-select-option>
                                                            <b-select-option value="Kakamega">Kakamega</b-select-option>
                                                            <b-select-option value="Kericho">Kericho</b-select-option>
                                                            <b-select-option value="Kiambu">Kiambu</b-select-option>
                                                            <b-select-option value="Kilifi">Kilifi</b-select-option>
                                                            <b-select-option value="Kirinyaga">Kirinyaga</b-select-option>
                                                            <b-select-option value="Kisii">Kisii</b-select-option>
                                                            <b-select-option value="Kisumu">Kisumu</b-select-option>
                                                            <b-select-option value="Kitui">Kitui</b-select-option>
                                                            <b-select-option value="Kwale">Kwale</b-select-option>
                                                            <b-select-option value="Laikipia">Laikipia</b-select-option>
                                                            <b-select-option value="Lamu">Lamu</b-select-option>
                                                            <b-select-option value="Machakos">Machakos</b-select-option>
                                                            <b-select-option value="Makueni">Makueni</b-select-option>
                                                            <b-select-option value="Mandera">Mandera</b-select-option>
                                                            <b-select-option value="Marsabit">Marsabit</b-select-option>
                                                            <b-select-option value="Meru">Meru</b-select-option>
                                                            <b-select-option value="Migori">Migori</b-select-option>
                                                            <b-select-option value="Mombasa">Mombasa</b-select-option>
                                                            <b-select-option value="Murang'a">Murang'a</b-select-option>
                                                            <b-select-option value="Nairobi">Nairobi</b-select-option>
                                                            <b-select-option value="Nakuru">Nakuru</b-select-option>
                                                            <b-select-option value="Nandi">Nandi</b-select-option>
                                                            <b-select-option value="Narok">Narok</b-select-option>
                                                            <b-select-option value="Nyamira">Nyamira</b-select-option>
                                                            <b-select-option value="Nyandarua">Nyandarua</b-select-option>
                                                            <b-select-option value="Nyeri">Nyeri</b-select-option>
                                                            <b-select-option value="Samburu">Samburu</b-select-option>
                                                            <b-select-option value="Siaya">Siaya</b-select-option>
                                                            <b-select-option
                                                                value="Taita-Taveta">Taita-Taveta</b-select-option>
                                                            <b-select-option value="Tana River">Tana River</b-select-option>
                                                            <b-select-option
                                                                value="Tharaka-Nithi">Tharaka-Nithi</b-select-option>
                                                            <b-select-option value="Trans Nzoia">Trans
                                                                Nzoia</b-select-option>
                                                            <b-select-option value="Turkana">Turkana</b-select-option>
                                                            <b-select-option value="Uasin Gishu">Uasin
                                                                Gishu</b-select-option>
                                                            <b-select-option value="Vihiga">Vihiga</b-select-option>
                                                            <b-select-option value="Wajir">Wajir</b-select-option>
                                                            <b-select-option value="West Pokot">West Pokot</b-select-option>
                                                        </b-select>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionAddress">Institution address <span
                                                                style="color: red;"> *</span></label>
                                                        <b-input v-model="institution_address" size="sm"
                                                            id="institutionAddress"
                                                            placeholder="institution address"></b-input>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionLocation">Institution pinned location
                                                            <span style="color: red;"> *</span></label>
                                                        <b-input v-model="institution_pinned_location" size="sm"
                                                            id="institutionLocation"
                                                            placeholder="institution pinned location"></b-input>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row justify-content-between">

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionType">Type of institution <span
                                                                style="color: red;"> *</span></label>
                                                        <b-select v-model="institution_type" size="sm"
                                                            class="institution-type" id="institutionType">
                                                            <b-select-option value="">Choose</b-select-option>
                                                            <b-select-option value="High school">High
                                                                school</b-select-option>
                                                            <b-select-option value="Junior high school">Junior high
                                                                school</b-select-option>
                                                            <b-select-option value="Primary school">Primary
                                                                school</b-select-option>
                                                            <b-select-option value="Tertiary institution">Tertiary
                                                                institution</b-select-option>
                                                        </b-select>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="institutionMode">Mode <span style="color: red;">
                                                                *</span></label>
                                                        <b-select v-model="institution_mode" size="sm"
                                                            class="institution-mode" id="institutionMode">
                                                            <b-select-option value="">Choose</b-select-option>
                                                            <b-select-option value="Boarding">Boarding</b-select-option>
                                                            <b-select-option value="Day">Day</b-select-option>
                                                            <b-select-option value="Boarding and Day">Boarding &
                                                                Day</b-select-option>
                                                        </b-select>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group mb-4">
                                                        <label for="studentGender">Student gender distro <span
                                                                style="color: red;"> *</span></label>
                                                        <b-select v-model="institution_gender_distro" size="sm"
                                                            class="institution-gender-distro" id="studentGender">
                                                            <b-select-option value="">Choose</b-select-option>
                                                            <b-select-option value="Female">Female</b-select-option>
                                                            <b-select-option value="Male">Male</b-select-option>
                                                            <b-select-option value="Mixed">Mixed</b-select-option>
                                                        </b-select>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="invoice-detail-note">

                                            <div class="row">

                                                <div class="col-md-12 align-self-center">
                                                    <div class="form-group row invoice-note">
                                                        <label for="invoice-detail-notes"
                                                            class="col-sm-12 col-form-label col-form-label-sm"> Welcome
                                                            message
                                                            <span style="color: red;"> *</span></label>
                                                        <div class="col-sm-12">
                                                            <b-textarea v-model="institution_welcome_message" rows="3"
                                                                id="invoice-detail-notes"
                                                                placeholder='Welcome message'></b-textarea>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="invoice-detail-note">
                                            <div class="row">
                                                <div class="col-md-12 align-self-center">
                                                    <div class="form-group row invoice-note">
                                                        <label for="invoice-detail-notes"
                                                            class="col-sm-12 col-form-label col-form-label-sm"> Institution
                                                            mission and vision <span style="color: red;"> *</span></label>
                                                        <div class="col-sm-12">
                                                            <b-textarea v-model="institution_mission_and_vision" rows="3"
                                                                id="invoice-detail-notes"
                                                                placeholder='Mission and vision'></b-textarea>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div v-if="submitErrors">
                                                <ul style="color: red; font-size: 12px; list-style: none; padding: 0;">
                                                    <li v-for="(error, field) in submitErrors" :key="field">
                                                        {{ field }}: {{ error }}
                                                    </li>
                                                </ul>
                                            </div>

                                            <br />

                                            <b-button variant="success" v-show="!isSubmitting" type="submit"
                                                class="btn btn-success btn-block mb-4 mr-2">
                                                SUBMIT
                                            </b-button>
                                            <b-button class="btn btn-success btn-block mb-4 mr-2" v-show="isSubmitting"
                                                type="button" variant="success">
                                                <span
                                                    class="spinner-border text-white mr-2 align-self-center loader-sm">Loading...</span>
                                            </b-button>
                                            <br />

                                        </div>


                                    </div>

                                </b-form>

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

export default {
    metaInfo: { title: 'Institution settings :- Intelligent system' },
    components: {
        flatPickr
    },
    data() {
        return {
            user_role: "",
            gender: "",
            settings: [],
            pagination: {},
            selected_file: null,
            id: "",
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
        }
    },

    mounted() {
        this.fetchSettings();
        this.fetchAuthenticatedUser();
        let dt = new Date();
        this.params.invoice_date = JSON.parse(JSON.stringify(dt));
        dt.setDate(dt.getDate() + 5);
        this.params.due_date = dt;

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
        
        fetchInstitutionGeneralSetting() {
            axios.get('/api/institutionGeneralSettings')
                .then(response => {
                    if (response.data.data.length > 0) {
                        this.institutionGeneralSetting = response.data.data[0];
                        this.form = { ...this.institutionGeneralSetting };
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        },

        submitSchoolGeneralSettings() {
            console.log('tbe');
            this.isSubmitting = true;
            const fd = new FormData();
            if (this.hasFile) {
                fd.append("institution_logo", this.file);
            }
            fd.append("nameOfInstitution", this.institution_name);
            fd.append("yearOfStartingInstitution", this.institution_year_of_starting);
            fd.append("institutionFirstEmail", this.institution_email_one);
            fd.append("institutionSecondEmail", this.institution_email_two);
            fd.append("institutionFirstPhone", this.institution_phone_one);
            fd.append("institutionSecondPhone", this.institution_phone_two);
            fd.append("institutionCountyOfOrigin", this.institution_county);
            fd.append("addressOfInstitution", this.institution_address);
            fd.append("institutionLocation", this.institution_pinned_location);
            fd.append("typeOfInstitution", this.institution_type);
            fd.append("modeOfInstitution", this.institution_mode);
            fd.append("institutionGenderDistribution", this.institution_gender_distro);
            fd.append("institutionWelcomeMessage", this.institution_welcome_message);
            fd.append("institutionMissionAndVision", this.institution_mission_and_vision);

            fd.append("_method", "POST");

            axios
                .post("/api/adminSchoolGeneralSettings", fd, {
                    headers: { "content-type": "multipart/form-data" },
                })
                .then(() => {
                    this.fields = {};
                    this.isSubmitting = false;
                    console.log("All is well");
                    this.$bvToast.show('message');
                    this.submitErrors = false;
                    window.location.href = "/ui/adminSchoolSettings";
                })
                .catch((error) => {
                    this.submitErrors = error.response.data.errors;
                    this.isSubmitting = false;
                });
        },

        async updateForm() {
            try {
                const formData = new FormData();
                if (this.hasFile) {
                    formData.append("institution_logo", this.file);
                }
                formData.append("nameOfInstitution", this.institution_name);
                formData.append("yearOfStartingInstitution", this.institution_year_of_starting);
                formData.append("institutionFirstEmail", this.institution_email_one);
                formData.append("institutionSecondEmail", this.institution_email_two);
                formData.append("institutionFirstPhone", this.institution_phone_one);
                formData.append("institutionSecondPhone", this.institution_phone_two);
                formData.append("institutionCountyOfOrigin", this.institution_county);
                formData.append("addressOfInstitution", this.institution_address);
                formData.append("institutionLocation", this.institution_pinned_location);
                formData.append("typeOfInstitution", this.institution_type);
                formData.append("modeOfInstitution", this.institution_mode);
                formData.append("institutionGenderDistribution", this.institution_gender_distro);
                formData.append("institutionWelcomeMessage", this.institution_welcome_message);
                formData.append("institutionMissionAndVision", this.institution_mission_and_vision);

                // Replace 'your_api_endpoint' with the actual endpoint to update the file in Laravel
                const response = await axios.post(`/api/updateSchoolGeneralSettings/${this.id}`, formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                });

                // Handle the response from the backend if required
                console.log(response.data);
                this.$bvToast.show('message');
                this.updateErrors = false;
                window.location.href = "/ui/adminSchoolSettings";
            } catch (error) {
                // Handle any errors that occurred during the update
                console.error(error.response.data);
                this.updateErrors = error.response.data.errors;
            }
        },

    },

};
</script>
