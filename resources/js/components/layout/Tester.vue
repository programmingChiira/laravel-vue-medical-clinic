<template>
    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">
        <nav ref="menu" id="sidebar">
            <div class="shadow-bottom"></div>

            <perfect-scrollbar class="list-unstyled menu-categories" tag="ul"
                :options="{ wheelSpeed: 0.5, swipeEasing: !0, minScrollbarLength: 40, maxScrollbarLength: 300, suppressScrollX: true }">

                <div v-show="user_role == 'Tester'">
                    <br />
                    <li class="menu">
                        <a href="#dashboard" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>{{ $t('dashboard') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="dashboard" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/index" @click.native="toggleMobileMenu">
                                    <a>{{ $t('sales') }}</a>
                                </router-link>
                                <router-link tag="li" to="/ui/index2" @click.native="toggleMobileMenu">
                                    <a>{{ $t('analytics') }}</a>
                                </router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#app" v-b-toggle class="dropdown-toggle" @click.prevent>
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
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="app" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/apps/chat"
                                    @click.native="toggleMobileMenu"><a>Chat</a></router-link>
                                <router-link tag="li" to="/ui/apps/mailbox"
                                    @click.native="toggleMobileMenu"><a>Mailbox</a></router-link>
                                <router-link tag="li" to="/ui/apps/todo-list" @click.native="toggleMobileMenu"><a>Todo
                                        List</a></router-link>
                                <router-link tag="li" to="/ui/apps/notes"
                                    @click.native="toggleMobileMenu"><a>Notes</a></router-link>
                                <router-link tag="li" to="/ui/apps/scrumboard"
                                    @click.native="toggleMobileMenu"><a>Scrumboard</a></router-link>
                                <router-link tag="li" to="/ui/apps/contacts"
                                    @click.native="toggleMobileMenu"><a>Contacts</a></router-link>
                                <li>
                                    <a href="#appInvoice" v-b-toggle class="dropdown-toggle" @click.prevent>
                                        Invoice
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </a>
                                    <b-collapse id="appInvoice">
                                        <ul class="collapse list-unstyled sub-submenu show" data-parent="#app">
                                            <router-link tag="li" to="/ui/apps/invoice/list"
                                                @click.native="toggleMobileMenu"><a>List</a></router-link>
                                            <router-link tag="li" to="/ui/apps/invoice/preview"
                                                @click.native="toggleMobileMenu"><a>Preview</a></router-link>
                                            <router-link tag="li" to="/ui/apps/invoice/add"
                                                @click.native="toggleMobileMenu"><a>Add</a></router-link>
                                            <router-link tag="li" to="/ui/apps/invoice/edit"
                                                @click.native="toggleMobileMenu"><a>Edit</a></router-link>
                                        </ul>
                                    </b-collapse>
                                </li>
                                <router-link tag="li" to="/ui/apps/calendar"
                                    @click.native="toggleMobileMenu"><a>Calendar</a></router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#components" v-b-toggle class="dropdown-toggle" @click.prevent>
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
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="components" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/components/tabs"
                                    @click.native="toggleMobileMenu"><a>Tabs</a></router-link>
                                <router-link tag="li" to="/ui/components/accordions"
                                    @click.native="toggleMobileMenu"><a>Accordions</a></router-link>
                                <router-link tag="li" to="/ui/components/modals"
                                    @click.native="toggleMobileMenu"><a>Modals</a></router-link>
                                <router-link tag="li" to="/ui/components/cards"
                                    @click.native="toggleMobileMenu"><a>Cards</a></router-link>
                                <router-link tag="li" to="/ui/components/carousel"
                                    @click.native="toggleMobileMenu"><a>Carousel</a></router-link>
                                <router-link tag="li" to="/ui/components/countdown"
                                    @click.native="toggleMobileMenu"><a>Countdown</a></router-link>
                                <router-link tag="li" to="/ui/components/counter"
                                    @click.native="toggleMobileMenu"><a>Counter</a></router-link>
                                <router-link tag="li" to="/ui/components/sweetalert"
                                    @click.native="toggleMobileMenu"><a>Sweet Alerts</a></router-link>
                                <router-link tag="li" to="/ui/components/timeline"
                                    @click.native="toggleMobileMenu"><a>Timeline</a></router-link>
                                <router-link tag="li" to="/ui/components/notifications"
                                    @click.native="toggleMobileMenu"><a>Notifications</a></router-link>
                                <router-link tag="li" to="/ui/components/media-object"
                                    @click.native="toggleMobileMenu"><a>Media Object</a></router-link>
                                <router-link tag="li" to="/ui/components/list-group"
                                    @click.native="toggleMobileMenu"><a>List Group</a></router-link>
                                <router-link tag="li" to="/ui/components/pricing-table"
                                    @click.native="toggleMobileMenu"><a>Pricing Tables</a></router-link>
                                <router-link tag="li" to="/ui/components/lightbox" @click.native="toggleMobileMenu"><a>
                                        Lightbox </a></router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#elements" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-zap">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                                <span>{{ $t('elements') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="elements" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/elements/alerts"
                                    @click.native="toggleMobileMenu"><a>Alerts</a></router-link>
                                <router-link tag="li" to="/ui/elements/avatar"
                                    @click.native="toggleMobileMenu"><a>Avatar</a></router-link>
                                <router-link tag="li" to="/ui/elements/badges"
                                    @click.native="toggleMobileMenu"><a>Badges</a></router-link>
                                <router-link tag="li" to="/ui/elements/breadcrumbs"
                                    @click.native="toggleMobileMenu"><a>Breadcrumbs</a></router-link>
                                <router-link tag="li" to="/ui/elements/buttons"
                                    @click.native="toggleMobileMenu"><a>Buttons</a></router-link>
                                <router-link tag="li" to="/ui/elements/buttons-group"
                                    @click.native="toggleMobileMenu"><a>Button Groups</a></router-link>
                                <router-link tag="li" to="/ui/elements/color-library"
                                    @click.native="toggleMobileMenu"><a>Color Library</a></router-link>
                                <router-link tag="li" to="/ui/elements/dropdown"
                                    @click.native="toggleMobileMenu"><a>Dropdown</a></router-link>
                                <router-link tag="li" to="/ui/elements/infobox"
                                    @click.native="toggleMobileMenu"><a>Infobox</a></router-link>
                                <router-link tag="li" to="/ui/elements/jumbotron"
                                    @click.native="toggleMobileMenu"><a>Jumbotron</a></router-link>
                                <router-link tag="li" to="/ui/elements/loader"
                                    @click.native="toggleMobileMenu"><a>Loader</a></router-link>
                                <router-link tag="li" to="/ui/elements/pagination"
                                    @click.native="toggleMobileMenu"><a>Pagination</a></router-link>
                                <router-link tag="li" to="/ui/elements/popovers"
                                    @click.native="toggleMobileMenu"><a>Popovers</a></router-link>
                                <router-link tag="li" to="/ui/elements/progress-bar"
                                    @click.native="toggleMobileMenu"><a>Progress Bar</a></router-link>
                                <router-link tag="li" to="/ui/elements/search"
                                    @click.native="toggleMobileMenu"><a>Search</a></router-link>
                                <router-link tag="li" to="/ui/elements/tooltips"
                                    @click.native="toggleMobileMenu"><a>Tooltips</a></router-link>
                                <router-link tag="li" to="/ui/elements/treeview"
                                    @click.native="toggleMobileMenu"><a>Treeview</a></router-link>
                                <router-link tag="li" to="/ui/elements/typography"
                                    @click.native="toggleMobileMenu"><a>Typography</a></router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/font-icons" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-target">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                                <span>{{ $t('font_icons') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/widgets" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-airplay">
                                    <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                    </path>
                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                </svg>
                                <span>{{ $t('widgets') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/tables" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
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
                        </a>
                    </router-link>

                    <li class="menu">
                        <a href="#datatables" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span>{{ $t('datatables') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="datatables" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/tables/basic"
                                    @click.native="toggleMobileMenu"><a>Basic</a></router-link>
                                <router-link tag="li" to="/ui/tables/striped" @click.native="toggleMobileMenu"><a>Striped
                                        Table</a></router-link>
                                <router-link tag="li" to="/ui/tables/order-sorting"
                                    @click.native="toggleMobileMenu"><a>Order Sorting</a></router-link>
                                <router-link tag="li" to="/ui/tables/multi-column" @click.native="toggleMobileMenu"><a>Multi
                                        Column</a></router-link>
                                <router-link tag="li" to="/ui/tables/multiple-tables"
                                    @click.native="toggleMobileMenu"><a>Multiple Tables</a></router-link>
                                <router-link tag="li" to="/ui/tables/alt-pagination"
                                    @click.native="toggleMobileMenu"><a>Alt. Pagination</a></router-link>
                                <router-link tag="li" to="/ui/tables/custom"
                                    @click.native="toggleMobileMenu"><a>Custom</a></router-link>
                                <router-link tag="li" to="/ui/tables/range-search" @click.native="toggleMobileMenu"><a>Range
                                        Search</a></router-link>
                                <router-link tag="li" to="/ui/tables/export"
                                    @click.native="toggleMobileMenu"><a>Export</a></router-link>
                                <router-link tag="li" to="/ui/tables/live-dom-ordering"
                                    @click.native="toggleMobileMenu"><a>Live DOM ordering</a></router-link>
                                <router-link tag="li" to="/ui/tables/miscellaneous"
                                    @click.native="toggleMobileMenu"><a>Miscellaneous</a></router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#forms" v-b-toggle class="dropdown-toggle" @click.prevent>
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
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="forms" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/forms/basic"
                                    @click.native="toggleMobileMenu"><a>Basic</a></router-link>
                                <router-link tag="li" to="/ui/forms/input-group" @click.native="toggleMobileMenu"><a>Input
                                        Group</a></router-link>
                                <router-link tag="li" to="/ui/forms/layouts"
                                    @click.native="toggleMobileMenu"><a>Layouts</a></router-link>
                                <router-link tag="li" to="/ui/forms/validation"
                                    @click.native="toggleMobileMenu"><a>Validation</a></router-link>
                                <router-link tag="li" to="/ui/forms/input-mask" @click.native="toggleMobileMenu"><a>Input
                                        Mask</a></router-link>
                                <router-link tag="li" to="/ui/forms/select2"
                                    @click.native="toggleMobileMenu"><a>Select2</a></router-link>
                                <router-link tag="li" to="/ui/forms/touchspin"
                                    @click.native="toggleMobileMenu"><a>TouchSpin</a></router-link>
                                <router-link tag="li" to="/ui/forms/checkbox-radio"
                                    @click.native="toggleMobileMenu"><a>Checkbox &amp; Radio</a></router-link>
                                <router-link tag="li" to="/ui/forms/switches"
                                    @click.native="toggleMobileMenu"><a>Switches</a></router-link>
                                <router-link tag="li" to="/ui/forms/wizards"
                                    @click.native="toggleMobileMenu"><a>Wizards</a></router-link>
                                <router-link tag="li" to="/ui/forms/file-upload" @click.native="toggleMobileMenu"><a>File
                                        Upload</a></router-link>
                                <router-link tag="li" to="/ui/forms/quill-editor" @click.native="toggleMobileMenu"><a>Quill
                                        Editor</a></router-link>
                                <router-link tag="li" to="/ui/forms/markdown-editor"
                                    @click.native="toggleMobileMenu"><a>Markdown Editor</a></router-link>
                                <router-link tag="li" to="/ui/forms/date-picker" @click.native="toggleMobileMenu"><a>Date
                                        &amp; Range Picker </a></router-link>
                                <router-link tag="li" to="/ui/forms/clipboard"
                                    @click.native="toggleMobileMenu"><a>Clipboard</a></router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#users" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>{{ $t('users') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="users" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/users/profile"
                                    @click.native="toggleMobileMenu"><a>Profile</a></router-link>
                                <router-link tag="li" to="/ui/users/account-setting"
                                    @click.native="toggleMobileMenu"><a>Account Settings</a></router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <li class="menu">
                        <a href="#pages" v-b-toggle class="dropdown-toggle" @click.prevent>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>{{ $t('pages') }}</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <b-collapse id="pages" accordion="menu">
                            <ul class="collapse submenu list-unstyled show">
                                <router-link tag="li" to="/ui/pages/helpdesk"
                                    @click.native="toggleMobileMenu"><a>Helpdesk</a></router-link>
                                <router-link tag="li" to="/ui/pages/contact-us" @click.native="toggleMobileMenu"><a>Contact
                                        Form</a></router-link>
                                <router-link tag="li" to="/ui/pages/faq"
                                    @click.native="toggleMobileMenu"><a>FAQ</a></router-link>
                                <router-link tag="li" to="/ui/pages/faq2" @click.native="toggleMobileMenu"><a>FAQ
                                        2</a></router-link>
                                <router-link tag="li" to="/ui/pages/privacy-policy"
                                    @click.native="toggleMobileMenu"><a>Privacy Policy</a></router-link>
                                <li @click="toggleMobileMenu"><a target="_blank" href="/pages/coming-soon">Coming Soon</a>
                                </li>

                                <li>
                                    <a href="#pages-error" v-b-toggle class="dropdown-toggle" @click.prevent>
                                        Error
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </a>
                                    <b-collapse id="pages-error">
                                        <ul class="collapse list-unstyled sub-submenu show" data-parent="#pages">
                                            <li @click="toggleMobileMenu"><a target="_blank" href="/pages/error404">404</a>
                                            </li>
                                            <li @click="toggleMobileMenu"><a target="_blank" href="/pages/error500">500</a>
                                            </li>
                                            <li @click="toggleMobileMenu"><a target="_blank" href="/pages/error503">503</a>
                                            </li>
                                            <li @click="toggleMobileMenu"><a target="_blank"
                                                    href="/pages/maintenence">Maintanence</a></li>
                                        </ul>
                                    </b-collapse>
                                </li>

                                <router-link tag="li" to="/ui/pages/blank-page" @click.native="toggleMobileMenu"><a>Blank
                                        Page</a></router-link>
                                <router-link tag="li" to="/ui/pages/sample" @click.native="toggleMobileMenu"><a>Sample
                                        Page</a></router-link>
                            </ul>
                        </b-collapse>
                    </li>

                    <router-link tag="li" to="/ui/dragndrop" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-move">
                                    <polyline points="5 9 2 12 5 15"></polyline>
                                    <polyline points="9 5 12 2 15 5"></polyline>
                                    <polyline points="15 19 12 22 9 19"></polyline>
                                    <polyline points="19 9 22 12 19 15"></polyline>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <line x1="12" y1="2" x2="12" y2="22"></line>
                                </svg>
                                <span>{{ $t('drag_and_drop') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <router-link tag="li" to="/ui/charts/apex-chart" class="menu" @click.native="toggleMobileMenu">
                        <a class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-pie-chart">
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                </svg>
                                <span>{{ $t('charts') }}</span>
                            </div>
                        </a>
                    </router-link>

                    <li class="menu" @click="toggleMobileMenu">
                        <a target="_blank" href="https://cork-vue.sbthemes.com" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-book">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                </svg>
                                <span>{{ $t('documentation') }}</span>
                            </div>
                        </a>
                    </li>

                    <!--</ul>-->
                </div>

                <hr />

                <!--</ul>-->
            </perfect-scrollbar>
        </nav>
    </div>
    <!--  END SIDEBAR  -->
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            menu_collapse: 'dashboard',
            id: "",
            first_name: "",
            middle_name: "",
            last_name: "",
            user_role: "",
            gender: "",
        };
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
        toggleMobileMenu() {
            if (window.innerWidth < 991) {
                this.$store.commit('toggleSideBar', true);
            }
        }
    }
};
</script>