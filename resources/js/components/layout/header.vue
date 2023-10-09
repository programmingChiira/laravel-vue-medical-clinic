<template>
    <div>
        <!--  BEGIN NAVBAR  -->
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm">
                <ul class="navbar-item theme-brand flex-row text-center">
                    <li class="nav-item theme-logo">
                        <a href="/">
                            <img src="/assets/images/logo-white.png" class="navbar-logo" alt="logo" />
                        </a>
                    </li>
                </ul>
                <div class="d-none horizontal-menu">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"
                        @click="$store.commit('toggleSideBar', !$store.state.is_show_sidebar)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-menu">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </a>
                </div>

                <div class="navbar-item flex-row ml-md-auto">
                    <div class="dark-mode d-flex align-items-center">
                        <a v-if="$store.state.dark_mode == 'light'" href="javascript:;" class="d-flex align-items-center"
                            @click="toggleMode('dark')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-sun">
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
                            <span class="ml-2">Light</span>
                        </a>
                        <a v-if="$store.state.dark_mode == 'dark'" href="javascript:;" class="d-flex align-items-center"
                            @click="toggleMode('system')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-moon">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                            <span class="ml-2">Dark</span>
                        </a>
                        <a v-if="$store.state.dark_mode == 'system'" href="javascript:;" class="d-flex align-items-center"
                            @click="toggleMode('light')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span class="ml-2">System</span>
                        </a>
                    </div>

                    <b-dropdown toggle-tag="a" variant="icon-only" toggle-class="user nav-link"
                        class="nav-item user-profile-dropdown" :right="true">
                        <template #button-content>
                            <img src="@/assets/images/profile-16.jpeg" alt="avatar" />
                        </template>

                        <b-dropdown-item to="/ui/adminProfile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Profile
                        </b-dropdown-item>
                        <b-dropdown-divider></b-dropdown-divider>
                        <b-dropdown-item @click="logout">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            Sign Out
                        </b-dropdown-item>
                    </b-dropdown>
                </div>
            </header>
        </div>
        <!--  END NAVBAR  -->
        <!--  BEGIN NAVBAR  -->
        <div class="sub-header-container">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"
                    @click="$store.commit('toggleSideBar', !$store.state.is_show_sidebar)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </a>

                <!-- Portal vue for Breadcrumb -->
                <portal-target name="breadcrumb"> </portal-target>
            </header>
        </div>
        <!--  END NAVBAR  -->
        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav class="topbar">
                <ul class="list-unstyled menu-categories" id="topAccordion">
                    <li class="menu single-menu">
                        <a href="javascript:;" data-toggle="collapse" aria-expanded="true"
                            class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>{{ $t('dashboard') }}</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                            <router-link tag="li" to="/"><a>{{ $t('sales') }}</a></router-link>
                            <router-link tag="li" to="/index2"><a>{{ $t('analytics') }}</a></router-link>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-cpu">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                            <router-link tag="li" to="/apps/chat"><a>Chat</a></router-link>
                            <router-link tag="li" to="/apps/mailbox"><a>Mailbox</a></router-link>
                            <router-link tag="li" to="/apps/todo-list"><a>Todo List</a></router-link>
                            <router-link tag="li" to="/apps/notes"><a>Notes</a></router-link>
                            <router-link tag="li" to="/apps/scrumboard"><a>Scrumboard</a></router-link>
                            <router-link tag="li" to="/apps/contacts"><a>Contacts</a></router-link>

                            <li class="sub-sub-submenu-list">
                                <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    Invoice
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                                <ul class="collapse list-unstyled sub-submenu" id="appInvoice" data-parent="#app">
                                    <router-link tag="li" to="/apps/invoice/list"><a>List</a></router-link>
                                    <router-link tag="li" to="/apps/invoice/preview"><a>Preview</a></router-link>
                                    <router-link tag="li" to="/apps/invoice/add"><a>Add</a></router-link>
                                    <router-link tag="li" to="/apps/invoice/edit"><a>Edit</a></router-link>
                                </ul>
                            </li>
                            <router-link tag="li" to="/apps/calendar"><a>Calendar</a></router-link>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-box">
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                                <span>{{ $t('components') }}</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                            <router-link tag="li" to="/components/tabs"><a>Tabs</a></router-link>
                            <router-link tag="li" to="/components/accordions"><a>Accordions</a></router-link>
                            <router-link tag="li" to="/components/modals"><a>Modals</a></router-link>
                            <router-link tag="li" to="/components/cards"><a>Cards</a></router-link>
                            <router-link tag="li" to="/components/carousel"><a>Carousel</a></router-link>
                            <router-link tag="li" to="/components/countdown"><a>Countdown</a></router-link>
                            <router-link tag="li" to="/components/counter"><a>Counter</a></router-link>
                            <router-link tag="li" to="/components/sweetalert"><a>Sweet Alerts</a></router-link>
                            <router-link tag="li" to="/components/timeline"><a>Timeline</a></router-link>
                            <router-link tag="li" to="/components/notifications"><a>Notifications</a></router-link>
                            <router-link tag="li" to="/components/media-object"><a>Media Object</a></router-link>
                            <router-link tag="li" to="/components/list-group"><a>List Group</a></router-link>
                            <router-link tag="li" to="/components/pricing-table"><a>Pricing Tables</a></router-link>
                            <router-link tag="li" to="/components/lightbox"><a> Lightbox </a></router-link>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-zap">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                                <span>{{ $t('ui_kit') }}</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="uiKit" data-parent="#topAccordion">
                            <router-link tag="li" to="/elements/alerts"><a>Alerts</a></router-link>
                            <router-link tag="li" to="/elements/avatar"><a>Avatar</a></router-link>
                            <router-link tag="li" to="/elements/badges"><a>Badges</a></router-link>
                            <router-link tag="li" to="/elements/breadcrumbs"><a>Breadcrumbs</a></router-link>
                            <router-link tag="li" to="/elements/buttons"><a>Buttons</a></router-link>
                            <router-link tag="li" to="/elements/buttons-group"><a>Button Groups</a></router-link>
                            <router-link tag="li" to="/elements/color-library"><a>Color Library</a></router-link>
                            <router-link tag="li" to="/elements/dropdown"><a>Dropdown</a></router-link>
                            <router-link tag="li" to="/elements/infobox"><a>Infobox</a></router-link>
                            <router-link tag="li" to="/elements/jumbotron"><a>Jumbotron</a></router-link>
                            <router-link tag="li" to="/elements/loader"><a>Loader</a></router-link>
                            <router-link tag="li" to="/elements/pagination"><a>Pagination</a></router-link>
                            <router-link tag="li" to="/elements/popovers"><a>Popovers</a></router-link>
                            <router-link tag="li" to="/elements/progress-bar"><a>Progress Bar</a></router-link>
                            <router-link tag="li" to="/elements/search"><a>Search</a></router-link>
                            <router-link tag="li" to="/elements/tooltips"><a>Tooltips</a></router-link>
                            <router-link tag="li" to="/elements/treeview"><a>Treeview</a></router-link>
                            <router-link tag="li" to="/elements/typography"><a>Typography</a></router-link>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-layout">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="3" y1="9" x2="21" y2="9"></line>
                                    <line x1="9" y1="21" x2="9" y2="9"></line>
                                </svg>
                                <span>{{ $t('tables') }}</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tables" data-parent="#topAccordion">
                            <router-link tag="li" to="/tables/basic"><a>Basic</a></router-link>
                            <li class="sub-sub-submenu-list">
                                <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    DataTables
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                                <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                                    <router-link tag="li" to="/tables/basic"><a>Basic</a></router-link>
                                    <router-link tag="li" to="/tables/striped"><a>Striped Table</a></router-link>
                                    <router-link tag="li" to="/tables/order-sorting"><a>Order Sorting</a></router-link>
                                    <router-link tag="li" to="/tables/multi-column"><a>Multi Column</a></router-link>
                                    <router-link tag="li" to="/tables/multiple-tables"><a>Multiple Tables</a></router-link>
                                    <router-link tag="li" to="/tables/alt-pagination"><a>Alt. Pagination</a></router-link>
                                    <router-link tag="li" to="/tables/custom"><a>Custom</a></router-link>
                                    <router-link tag="li" to="/tables/range-search"><a>Range Search</a></router-link>
                                    <router-link tag="li" to="/tables/export"><a>Export</a></router-link>
                                    <router-link tag="li" to="/tables/live-dom-ordering"><a>Live DOM
                                            ordering</a></router-link>
                                    <router-link tag="li" to="/tables/miscellaneous"><a>Miscellaneous</a></router-link>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-clipboard">
                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                    </path>
                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                </svg>
                                <span>{{ $t('forms') }}</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="forms" data-parent="#topAccordion">
                            <router-link tag="li" to="/forms/basic"><a>Basic</a></router-link>
                            <router-link tag="li" to="/forms/input-group"><a>Input Group</a></router-link>
                            <router-link tag="li" to="/forms/layouts"><a>Layouts</a></router-link>
                            <router-link tag="li" to="/forms/validation"><a>Validation</a></router-link>
                            <router-link tag="li" to="/forms/input-mask"><a>Input Mask</a></router-link>
                            <router-link tag="li" to="/forms/select2"><a>Select2</a></router-link>
                            <router-link tag="li" to="/forms/touchspin"><a>TouchSpin</a></router-link>
                            <router-link tag="li" to="/forms/checkbox-radio"><a>Checkbox &amp; Radio</a></router-link>
                            <router-link tag="li" to="/forms/switches"><a>Switches</a></router-link>
                            <router-link tag="li" to="/forms/wizards"><a>Wizards</a></router-link>
                            <router-link tag="li" to="/forms/file-upload"><a>File Upload</a></router-link>
                            <router-link tag="li" to="/forms/quill-editor"><a>Quill Editor</a></router-link>
                            <router-link tag="li" to="/forms/markdown-editor"><a>Markdown Editor</a></router-link>
                            <router-link tag="li" to="/forms/date-picker"><a>Date &amp; Range Picker </a></router-link>
                            <router-link tag="li" to="/forms/clipboard"><a>Clipboard</a></router-link>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>{{ $t('pages') }}</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="page" data-parent="#topAccordion">
                            <router-link tag="li" to="/pages/helpdesk"><a>Helpdesk</a></router-link>
                            <router-link tag="li" to="/pages/contact-us"><a>Contact Form</a></router-link>
                            <router-link tag="li" to="/pages/faq"><a>FAQ</a></router-link>
                            <router-link tag="li" to="/pages/faq2"><a>FAQ 2</a></router-link>
                            <router-link tag="li" to="/pages/privacy-policy"><a>Privacy Policy</a></router-link>
                            <li><a target="_blank" href="/pages/coming-soon">Coming Soon</a></li>
                            <router-link tag="li" to="/pages/blank-page"><a>Blank Page</a></router-link>
                            <router-link tag="li" to="/pages/sample"><a>Sample Page</a></router-link>

                            <router-link tag="li" to="/users/profile"><a>Profile</a></router-link>
                            <router-link tag="li" to="/users/account-setting"><a>Account Settings</a></router-link>
                            <li class="sub-sub-submenu-list">
                                <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    Error
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#more">
                                    <li><a target="_blank" href="/pages/error404">404</a></li>
                                    <li><a target="_blank" href="/pages/error500">500</a></li>
                                    <li><a target="_blank" href="/pages/error503">503</a></li>
                                    <li><a target="_blank" href="/pages/maintenence">Maintanence</a></li>
                                </ul>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    Login
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#page">
                                    <li><a target="_blank" href="/auth/login">Login Cover</a></li>
                                    <li><a target="_blank" href="/auth/login-boxed">Login Boxed</a></li>
                                </ul>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    Register
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#page">
                                    <li><a target="_blank" href="/auth/register">Register Cover</a></li>
                                    <li><a target="_blank" href="/auth/register-boxed">Register Boxed</a></li>
                                </ul>
                            </li>

                            <li class="sub-sub-submenu-list">
                                <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    Password Recovery
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#page">
                                    <li><a target="_blank" href="/auth/pass-recovery">Recover ID Cover</a></li>
                                    <li><a target="_blank" href="/auth/pass-recovery-boxed">Recover ID Boxed</a></li>
                                </ul>
                            </li>

                            <li class="sub-sub-submenu-list">
                                <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    Lockscreen
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-lockscreen" data-parent="#page">
                                    <li><a target="_blank" href="/auth/lockscreen">Unlock Cover</a></li>
                                    <li><a target="_blank" href="/auth/lockscreen-boxed">Unlock Boxed</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="javascript:;" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <span>{{ $t('more') }}</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="more" data-parent="#topAccordion">
                            <router-link tag="li" to="/dragndrop"><a>Drag and Drop</a></router-link>
                            <router-link tag="li" to="/widgets"><a>Widgets</a></router-link>
                            <router-link tag="li" to="/charts/apex-chart"><a>Charts</a></router-link>
                            <router-link tag="li" to="/font-icons"><a>Font Icons</a></router-link>
                            <li>
                                <a target="_blank" href="https://cork-vue.sbthemes.com">
                                    Documentation
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            selectedLang: null,
            countryList: this.$store.state.countryList,
            id: "",
            first_name: "",
            middle_name: "",
            last_name: "",
            user_role: "",
            gender: "",
        };
    },
    mounted() {
        this.selectedLang = this.$appSetting.toggleLanguage();

        this.toggleMode();

        axios
            .get("/api/user")
            //.then((response) => (this.id = response.data.id))
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
                }
            });

        if (localStorage.getItem("authenticated")) {
            this.loggedIn = true;
        } else {
            this.loggedIn = false;
        }
    },
    methods: {
        navigateToHome() {
            location.reload();
            setTimeout(() => {
                this.$router.push('/');
            }, 100);
        },
        toggleMode(mode) {
            this.$appSetting.toggleMode(mode);
        },

        changeLanguage(item) {
            this.selectedLang = item;
            this.$appSetting.toggleLanguage(item);
        },

        logout() {
            console.log('logout query');
            const swalWithBootstrapButtons = this.$swal.mixin({
                confirmButtonClass: 'btn btn-secondary',
                cancelButtonClass: 'btn btn-dark mr-3',
                buttonsStyling: false
            });
            swalWithBootstrapButtons
                .fire({
                    title: 'Are you sure?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, LOGOUT!',
                    cancelButtonText: 'No, cancel',
                    reverseButtons: true,
                    padding: '2em'
                })
                .then(result => {
                    if (result.value) {
                        swalWithBootstrapButtons.fire('Logout successful!', 'Session has been destroyed.', 'success');
                        axios
                            .post("/api/logout")
                            .then((response) => {
                                localStorage.removeItem("authenticated");
                                this.$emit("updateSidebar");
                                window.location.href = "/login";
                            })
                            .catch((error) => console.log(error));
                    } else if (result.dismiss === this.$swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire('Cancelled', ' ', 'error');
                    }
                });

        },
    }
};
</script>
