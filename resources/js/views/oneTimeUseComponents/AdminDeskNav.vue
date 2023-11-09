<template>
    <aside
        class="sidenavbar bg-white sidestbar sidestbar-vertical sidestbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 ">
        <div style="margin: 10px;">
            <router-link class="sidestbar-brand m-0" to="/">
                <span class="ms-1 font-weight-bold"> <i class="fa fa-home"></i> Home</span>
            </router-link>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse sidestbar-collapse  w-auto " id="sidenavbar-collapse-main">
            <ul class="sidestbar-nav">
                <li class="nav-item">
                    <router-link class="nav-link active" to="/dashboard">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link " to="/tables">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Tables</span>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link " to="/billing">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Billing</span>
                    </router-link>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link " to="/profile">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </router-link>
                </li>
            </ul>
        </div>
        <div class="sidenavbar-footer mx-3 ">
            <div class="card card-plain shadow-none" id="sidenavbarCard">
                <img class="w-50 mx-auto" src="argon/assets/img/illustrations/icon-documentation.svg"
                    alt="sidebar_illustration">
                <div class="card-body text-center p-3 w-100 pt-0">
                    <div class="docs-info">
                        <h6 class="mb-0">Medic</h6>
                    </div>
                </div>
            </div>
            <router-link class="btn btn-danger btn-sm mb-0 w-100" to="/" type="button">LOGOUT
            </router-link>
        </div>
    </aside>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            //
        };
    },

    mounted() {
        console.log('Component mounted.')
    },

    methods: {
        //
    },


}
</script>

<style scoped></style>