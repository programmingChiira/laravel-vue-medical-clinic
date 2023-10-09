<template>
    <div>
        <!--  BEGIN NAVBAR  -->
        <Header></Header>
        <!--  END NAVBAR  -->

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container"
            :class="[!$store.state.is_show_sidebar ? 'sidebar-closed sbar-open' : '', $store.state.menu_style === 'collapsible-vertical' ? 'collapsible-vertical-mobile' : '']">
            <!--  BEGIN OVERLAY  -->
            <div class="overlay" :class="{ show: !$store.state.is_show_sidebar }"
                @click="$store.commit('toggleSideBar', !$store.state.is_show_sidebar)"></div>
            <div class="search-overlay" :class="{ show: $store.state.is_show_search }"
                @click="$store.commit('toggleSearch', !$store.state.is_show_search)"></div>
            <!-- END OVERLAY -->

            <!--  BEGIN SIDEBAR  -->
            <Tester v-show="user_role == 'Tester'"></Tester>
            <AdminSidebar v-show="user_role == 'Administrator'"></AdminSidebar>
            <NonTeacherSidebar v-show="user_role == 'NonTeaching'"></NonTeacherSidebar>
            <ParentSidebar v-show="user_role == 'Parent'"></ParentSidebar>
            <StudentSidebar v-show="user_role == 'Student'"></StudentSidebar>
            <TeacherSidebar v-show="user_role == 'Teacher'"></TeacherSidebar>
            
            <!--  END SIDEBAR  -->

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <router-view>
                    <!-- BEGIN LOADER -->
                    <div id="load_screen">
                        <div class="loader">
                            <div class="loader-content">
                                <div class="spinner-grow align-self-center"></div>
                            </div>
                        </div>
                    </div>
                    <!--  END LOADER -->
                </router-view>

                <!-- BEGIN FOOTER -->
                <Footer></Footer>
                <!-- END FOOTER -->
            </div>
            <!--  END CONTENT AREA  -->

            <!-- BEGIN APP SETTING LAUNCHER -->
            <app-settings />
            <!-- END APP SETTING LAUNCHER -->
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import Header from '@/components/layout/header.vue';
import Tester from '@/components/layout/Tester.vue';
import AdminSidebar from '@/components/layout/adminSidebar.vue';
import NonTeacherSidebar from '@/components/layout/nonTeacherSidebar.vue';
import ParentSidebar from '@/components/layout/parentSidebar.vue';
import StudentSidebar from '@/components/layout/studentSidebar.vue';
import TeacherSidebar from '@/components/layout/teacherSidebar.vue';
import Footer from '@/components/layout/footer.vue';
import appSettings from '@/components/app-settings.vue';
export default {
    components: {
        Header,
        Tester,
        AdminSidebar,
        NonTeacherSidebar,
        ParentSidebar,
        StudentSidebar,
        TeacherSidebar,
        Footer,
        appSettings,
    },
    data() {
        return {
            user_role: "",
        };
    },
    mounted() {
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
                }
            });

        if (localStorage.getItem("authenticated")) {
            this.loggedIn = true;
        } else {
            this.loggedIn = false;
        }
    },
};
</script>
