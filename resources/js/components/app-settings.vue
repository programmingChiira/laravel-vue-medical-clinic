<template>
    <div>
        <!-- <div class="overlay" :class="{ show: isOpen }" @click="isOpen = !isOpen"></div> -->

        <div class="app-settings" :class="{ active: isOpen }">
            <a href="javascript:;" id="settingbutton" class="setting" @click="isOpen = !isOpen">
                <h5 class="mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                        </path>
                    </svg>
                </h5>
            </a>
            <perfect-scrollbar class="sidbarchat p-3" tag="div">
                <a class="btn-close" href="javascript:;" @click="isOpen = !isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </a>
                <div class="text-center">
                    <img src="@/assets/images/features_overview.svg" alt="..." class="img-fluid" />
                </div>
                <h5 class="mb-0 text-center">PERSONAL SETTINGS</h5>
                <p class="text-center">Set preferences that will be cookied.</p>
                <hr />

                <h6 class="mb-1">Scheme</h6>
                <p class="small text-muted mb-3">Light or dark presentation.</p>
                <div class="btn-group-toggle row mb-4 mx-0">.
                    <b-radio v-model="$store.state.dark_mode" class="text-color radio-primary col-12 pl-0 mb-3 btn-check"
                        value="light" @change="setTemplateStyle"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun mr-2">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                        Light Mode
                    </b-radio>
                    <b-radio v-model="$store.state.dark_mode" class="text-color radio-primary col-12 pl-0 mb-3 btn-check"
                        value="dark" @change="setTemplateStyle"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon mr-2">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                        Dark Mode
                    </b-radio>
                </div>
                <h6 class="mb-1">Navigation Position</h6>
                <p class="small text-muted mb-3">Select the primary navigation paradigm for your app.</p>
                <div class="btn-group-toggle row mb-4 mx-0">
                    <b-radio v-model="$store.state.menu_style" class="text-color radio-primary col-6 pl-0 mb-3 btn-check"
                        value="vertical" @change="setMenuStyle">Vertical</b-radio>
                    <b-radio v-model="$store.state.menu_style" class="text-color radio-primary col-6 pl-0 mb-3 btn-check"
                        value="collapsible-vertical" @change="setMenuStyle">Collapsible</b-radio>
                </div>
                <h6 class="mb-1">Layout Style</h6>
                <p class="small text-muted mb-3">Select the primary Layout Style for your app.</p>
                <div class="btn-group-toggle row mx-0">
                    <b-radio v-model="$store.state.layout_style" class="text-color radio-primary col-3 pl-0 btn-check"
                        value="boxed-layout" @change="setLayoutStyle">Box</b-radio>
                    <b-radio v-model="$store.state.layout_style" class="text-color radio-primary col-5 pl-0 btn-check"
                        value="large-boxed-layout" @change="setLayoutStyle">Large box</b-radio>
                    <b-radio v-model="$store.state.layout_style" class="text-color radio-primary col-4 pl-0 btn-check"
                        value="full" @change="setLayoutStyle">Full</b-radio>
                </div>
            </perfect-scrollbar>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            isOpen: null
        };
    },

    mounted() {
        //set default values from local storage
        this.setTemplateStyle();
        this.setMenuStyle();
        this.setLayoutStyle();
    },

    methods: {
        setTemplateStyle() {
            this.$store.commit('toggleDarkMode', this.$store.state.dark_mode);
        },

        setMenuStyle() {
            this.$store.commit('toggleMenuStyle', this.$store.state.menu_style);
        },

        setLayoutStyle() {
            this.$store.commit('toggleLayoutStyle', this.$store.state.layout_style);
        }
    }
};
</script>
