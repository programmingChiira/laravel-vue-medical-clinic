<template>
    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">
        <nav ref="menu" id="sidebar">
            <div class="shadow-bottom"></div>

            <perfect-scrollbar class="list-unstyled menu-categories" tag="ul" :options="{ wheelSpeed: 0.5, swipeEasing: !0, minScrollbarLength: 40, maxScrollbarLength: 300, suppressScrollX: true }">
                <li class="menu">
                    <a href="#dashboard" v-b-toggle class="dropdown-toggle" @click.prevent>
                        <div class="">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-home"
                            >
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>{{ $t('dashboard') }}</span>
                        </div>
                        <div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-chevron-right"
                            >
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <b-collapse id="dashboard" accordion="menu">
                        <ul class="collapse submenu list-unstyled show">
                            <router-link tag="li" to="/" @click.native="toggleMobileMenu">
                                <a>{{ $t('sales') }}</a>
                            </router-link>
                            <router-link tag="li" to="/index2" @click.native="toggleMobileMenu">
                                <a>{{ $t('analytics') }}</a>
                            </router-link>
                        </ul>
                    </b-collapse>
                </li>

                <li class="menu">
                    <a href="#app" v-b-toggle class="dropdown-toggle" @click.prevent>
                        <div class="">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-cpu"
                            >
                                <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                <rect x="9" y="9" width="6" height="6"></rect>
                                <line x1="9" y1="1" x2="9" y2="4"></line>
                                <line x1="15" y1="1" x2="15" y2="4"></line>
                                <line x1="9" y1="20" x2="9" y2="23"></line>
                                <line x1="15" y1="20" x2="15" y2="23"></line>
                                <line x1="20" y1="9" x2="23" y2="9"></line>
                                <line x1="20" y1="14" x2="23" y2="14"></line>
                                <line x1="1" y1="9" x2="4" y2="9"></line>
                                <line x1="1" y1="14" x2="4" y2="14"></line>
                            </svg>
                            <span>{{ $t('apps') }}</span>
                        </div>
                        <div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-chevron-right"
                            >
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <b-collapse id="app" accordion="menu">
                        <ul class="collapse submenu list-unstyled show">
                            <router-link tag="li" to="/apps/chat" @click.native="toggleMobileMenu"><a>Chat</a></router-link>
                            <router-link tag="li" to="/apps/mailbox" @click.native="toggleMobileMenu"><a>Mailbox</a></router-link>
                            <router-link tag="li" to="/apps/todo-list" @click.native="toggleMobileMenu"><a>Todo List</a></router-link>
                            <router-link tag="li" to="/apps/notes" @click.native="toggleMobileMenu"><a>Notes</a></router-link>
                            <router-link tag="li" to="/apps/scrumboard" @click.native="toggleMobileMenu"><a>Scrumboard</a></router-link>
                            <router-link tag="li" to="/apps/contacts" @click.native="toggleMobileMenu"><a>Contacts</a></router-link>
                            <li>
                                <a href="#appInvoice" v-b-toggle class="dropdown-toggle" @click.prevent>
                                    Invoice
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-chevron-right"
                                    >
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                                <b-collapse id="appInvoice">
                                    <ul class="collapse list-unstyled sub-submenu show" data-parent="#app">
                                        <router-link tag="li" to="/apps/invoice/list" @click.native="toggleMobileMenu"><a>List</a></router-link>
                                        <router-link tag="li" to="/apps/invoice/preview" @click.native="toggleMobileMenu"><a>Preview</a></router-link>
                                        <router-link tag="li" to="/apps/invoice/add" @click.native="toggleMobileMenu"><a>Add</a></router-link>
                                        <router-link tag="li" to="/apps/invoice/edit" @click.native="toggleMobileMenu"><a>Edit</a></router-link>
                                    </ul>
                                </b-collapse>
                            </li>
                            <router-link tag="li" to="/apps/calendar" @click.native="toggleMobileMenu"><a>Calendar</a></router-link>
                        </ul>
                    </b-collapse>
                </li>

                <li class="menu">
                    <a href="#components" v-b-toggle class="dropdown-toggle" @click.prevent>
                        <div class="">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-box"
                            >
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                            <span>{{ $t('components') }}</span>
                        </div>
                        <div>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-chevron-right"
                            >
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <b-collapse id="components" accordion="menu">
                        <ul class="collapse submenu list-unstyled show">
                            <router-link tag="li" to="/components/tabs" @click.native="toggleMobileMenu"><a>Tabs</a></router-link>
                            <router-link tag="li" to="/components/accordions" @click.native="toggleMobileMenu"><a>Accordions</a></router-link>
                            <router-link tag="li" to="/components/modals" @click.native="toggleMobileMenu"><a>Modals</a></router-link>
                            <router-link tag="li" to="/components/cards" @click.native="toggleMobileMenu"><a>Cards</a></router-link>
                            <router-link tag="li" to="/components/carousel" @click.native="toggleMobileMenu"><a>Carousel</a></router-link>
                            <router-link tag="li" to="/components/countdown" @click.native="toggleMobileMenu"><a>Countdown</a></router-link>
                            <router-link tag="li" to="/components/counter" @click.native="toggleMobileMenu"><a>Counter</a></router-link>
                            <router-link tag="li" to="/components/sweetalert" @click.native="toggleMobileMenu"><a>Sweet Alerts</a></router-link>
                            <router-link tag="li" to="/components/timeline" @click.native="toggleMobileMenu"><a>Timeline</a></router-link>
                            <router-link tag="li" to="/components/notifications" @click.native="toggleMobileMenu"><a>Notifications</a></router-link>
                            <router-link tag="li" to="/components/media-object" @click.native="toggleMobileMenu"><a>Media Object</a></router-link>
                            <router-link tag="li" to="/components/list-group" @click.native="toggleMobileMenu"><a>List Group</a></router-link>
                            <router-link tag="li" to="/components/pricing-table" @click.native="toggleMobileMenu"><a>Pricing Tables</a></router-link>
                            <router-link tag="li" to="/components/lightbox" @click.native="toggleMobileMenu"><a> Lightbox </a></router-link>
                        </ul>
                    </b-collapse>
                </li>

                <li class="menu" @click="toggleMobileMenu">
                    <a target="_blank" href="https://cork-vue.sbthemes.com" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-book"
                            >
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                            <span>{{ $t('documentation') }}</span>
                        </div>
                    </a>
                </li>

                <!--</ul>-->
            </perfect-scrollbar>
        </nav>
    </div>
    <!--  END SIDEBAR  -->
</template>
<script>
    export default {
        data() {
            return { menu_collapse: 'dashboard' };
        },

        watch: {
            $route(to) {
                const selector = document.querySelector('#sidebar a[href="' + to.path + '"]');
                const ul = selector.closest('ul.collapse');
                if (!ul) {
                    const ele = document.querySelector('.dropdown-toggle.not-collapsed');
                    if (ele) {
                        ele.click();
                    }
                }
            }
        },

        mounted() {
            // default menu selection on refresh
            const selector = document.querySelector('#sidebar a[href="' + window.location.pathname + '"]');
            if (selector) {
                const ul = selector.closest('ul.collapse');
                if (ul) {
                    let ele = ul.closest('li.menu').querySelectorAll('.dropdown-toggle');
                    if (ele) {
                        ele = ele[0];
                        setTimeout(() => {
                            ele.click();
                        });
                    }
                } else {
                    selector.click();
                }
            }
        },

        methods: {
            toggleMobileMenu() {
                if (window.innerWidth < 991) {
                    this.$store.commit('toggleSideBar', true);
                }
            }
        }
    };
</script>
