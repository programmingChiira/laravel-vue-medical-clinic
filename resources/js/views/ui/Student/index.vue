<template>
    <div class="layout-px-spacing dash_1">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Sales</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav flex-row ml-auto">
                <li class="nav-item more-dropdown">
                    <b-nav-dropdown ref="ddl_settings" right toggle-tag="a" class="custom-dropdown-icon" variant="normal">
                        <template #button-content>
                            <span>Settings</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </template>
                <li><a class="dropdown-item" data-value="Settings" href="javascript:void(0);"
                        @click="$refs.ddl_settings.hide()">Settings</a></li>
                <li><a class="dropdown-item" data-value="Mail" href="javascript:void(0);"
                        @click="$refs.ddl_settings.hide()">Mail</a></li>
                <li><a class="dropdown-item" data-value="Print" href="javascript:void(0);"
                        @click="$refs.ddl_settings.hide()">Print</a></li>
                <li><a class="dropdown-item" data-value="Download" href="javascript:void(0);"
                        @click="$refs.ddl_settings.hide()">Download</a></li>
                <li><a class="dropdown-item" data-value="Share" href="javascript:void(0);"
                        @click="$refs.ddl_settings.hide()">Share</a></li>
                </b-nav-dropdown>
                </li>
            </ul>
        </portal>

        <div class="row layout-top-spacing">
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-revenue">
                    <div class="widget-heading">
                        <h5>Revenue</h5>
                        <b-dropdown variant="icon-only" toggle-tag="a" :right="true">
                            <template #button-content>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-more-horizontal">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </template>
                            <b-dropdown-item>Weekly</b-dropdown-item>
                            <b-dropdown-item>Monthly</b-dropdown-item>
                            <b-dropdown-item>Yearly</b-dropdown-item>
                        </b-dropdown>
                    </div>

                    <div class="widget-content">
                        <div class="chart-title">Total Profit <span class="text-primary ml-1">$10,840</span></div>
                        <apexchart v-if="revenue_options" height="325" type="area" :options="revenue_options"
                            :series="revenue_series"></apexchart>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-sales-category">
                    <div class="widget-heading">
                        <h5>Sales by Category</h5>
                    </div>
                    <div class="widget-content">
                        <apexchart v-if="sales_donut_options" height="460" type="donut" :options="sales_donut_options"
                            :series="sales_donut_series"></apexchart>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-dailysales">
                    <div class="widget-heading">
                        <div>
                            <h5>Daily sales</h5>
                            <span class="sub-title">Go to columns for details.</span>
                        </div>
                        <div class="w-icon text-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-dollar-sign">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="widget-content">
                        <apexchart v-if="daily_sales_options" height="160" type="bar" :options="daily_sales_options"
                            :series="daily_sales_series"></apexchart>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-summary">
                    <div class="widget-heading">
                        <h5>Summary</h5>
                        <b-dropdown variant="icon-only" toggle-tag="a" :right="true">
                            <template #button-content>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-more-horizontal">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </template>

                            <b-dropdown-item>View Report</b-dropdown-item>
                            <b-dropdown-item>Edit Report</b-dropdown-item>
                            <b-dropdown-item>Mark as Done</b-dropdown-item>
                        </b-dropdown>
                    </div>
                    <div class="widget-content">
                        <div class="summary-list">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shopping-bag">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                            </div>
                            <div class="w-summary-details">
                                <div class="w-summary-info">
                                    <h6>Income</h6>
                                    <p class="summary-count">$92,600</p>
                                </div>
                                <div class="w-summary-stats">
                                    <b-progress variant="gradient-secondary" :value="90" :min="0" :max="100"></b-progress>
                                </div>
                            </div>
                        </div>

                        <div class="summary-list">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-tag">
                                    <path
                                        d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                    </path>
                                    <line x1="7" y1="7" x2="7" y2="7"></line>
                                </svg>
                            </div>
                            <div class="w-summary-details">
                                <div class="w-summary-info">
                                    <h6>Profit</h6>
                                    <p class="summary-count">$37,515</p>
                                </div>
                                <div class="w-summary-stats">
                                    <b-progress variant="gradient-success" :value="65" :min="0" :max="100"></b-progress>
                                </div>
                            </div>
                        </div>

                        <div class="summary-list">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-credit-card">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>
                            </div>
                            <div class="w-summary-details">
                                <div class="w-summary-info">
                                    <h6>Expenses</h6>
                                    <p class="summary-count">$55,085</p>
                                </div>
                                <div class="w-summary-stats">
                                    <b-progress variant="gradient-warning" :value="80" :min="0" :max="100"></b-progress>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-total-order">
                    <div class="widget-heading">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-shopping-cart">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="w-value">3,192</div>
                            <div class="w-numeric-title">Total Orders</div>
                        </div>
                    </div>
                    <div class="widget-content p-0">
                        <apexchart v-if="total_orders_options" height="290" type="area" :options="total_orders_options"
                            :series="total_orders_series"></apexchart>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-recent-activity">
                    <div class="widget-heading">
                        <h5>Recent Activities</h5>
                    </div>
                    <div class="widget-content">
                        <perfect-scrollbar class="timeline-line">
                            <div class="item-timeline timeline-primary">
                                <div class="badge badge-primary"></div>
                                <div class="t-text">
                                    <p><span>Updated</span> Server Logs</p>
                                    <b-badge
                                        variant="outline-primary outline-badge-primary icon-fill-primary">Pending</b-badge>
                                    <p class="t-time">Just Now</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-success">
                                <div class="badge badge-success"></div>
                                <div class="t-text">
                                    <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a
                                            href="javascript:void(0);">Admin</a></p>
                                    <b-badge
                                        variant="outline-success outline-badge-success icon-fill-success">Completed</b-badge>
                                    <p class="t-time">2 min ago</p>
                                </div>
                            </div>

                            <div class="item-timeline  timeline-danger">
                                <div class="badge badge-danger"></div>
                                <div class="t-text">
                                    <p>Backup <span>Files EOD</span></p>
                                    <b-badge
                                        variant="outline-danger outline-badge-danger icon-fill-danger">Pending</b-badge>
                                    <p class="t-time">14:00</p>
                                </div>
                            </div>

                            <div class="item-timeline  timeline-dark">
                                <div class="badge badge-dark"></div>
                                <div class="t-text">
                                    <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                    <b-badge variant="outline-dark outline-badge-dark icon-fill-dark">Completed</b-badge>
                                    <p class="t-time">16:00</p>
                                </div>
                            </div>

                            <div class="item-timeline  timeline-warning">
                                <div class="badge badge-warning"></div>
                                <div class="t-text">
                                    <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                    <b-badge variant="outline-warning outline-badge-warning icon-fill-warning">In
                                        progress</b-badge>
                                    <p class="t-time">17:00</p>
                                </div>
                            </div>

                            <div class="item-timeline  timeline-secondary">
                                <div class="badge badge-secondary"></div>
                                <div class="t-text">
                                    <p>Rebooted Server</p>
                                    <b-badge
                                        variant="outline-secondary outline-badge-secondary icon-fill-secondary">Completed</b-badge>
                                    <p class="t-time">17:00</p>
                                </div>
                            </div>

                            <div class="item-timeline  timeline-warning">
                                <div class="badge badge-warning"></div>
                                <div class="t-text">
                                    <p>Send contract details to Freelancer</p>
                                    <b-badge
                                        variant="outline-warning outline-badge-warning icon-fill-warning">Pending</b-badge>
                                    <p class="t-time">18:00</p>
                                </div>
                            </div>

                            <div class="item-timeline  timeline-dark">
                                <div class="badge badge-dark"></div>
                                <div class="t-text">
                                    <p>Kelly want to increase the time of the project.</p>
                                    <b-badge variant="outline-dark outline-badge-dark icon-fill-dark">In Progress</b-badge>
                                    <p class="t-time">19:00</p>
                                </div>
                            </div>

                            <div class="item-timeline  timeline-success">
                                <div class="badge badge-success"></div>
                                <div class="t-text">
                                    <p>Server down for maintanence</p>
                                    <b-badge
                                        variant="outline-success outline-badge-success icon-fill-success">Completed</b-badge>
                                    <p class="t-time">19:00</p>
                                </div>
                            </div>

                            <div class="item-timeline  timeline-secondary">
                                <div class="badge badge-secondary"></div>
                                <div class="t-text">
                                    <p>Malicious link detected</p>
                                    <b-badge
                                        variant="outline-secondary outline-badge-secondary icon-fill-secondary">Block</b-badge>
                                    <p class="t-time">20:00</p>
                                </div>
                            </div>

                            <div class="item-timeline  timeline-warning">
                                <div class="badge badge-warning"></div>
                                <div class="t-text">
                                    <p>Rebooted Server</p>
                                    <b-badge
                                        variant="outline-warning outline-badge-warning icon-fill-warning">Completed</b-badge>
                                    <p class="t-time">23:00</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-primary">
                                <div class="badge badge-primary"></div>
                                <div class="t-text">
                                    <p><span>Updated</span> Server Logs</p>
                                    <b-badge
                                        variant="outline-primary outline-badge-primary icon-fill-primary">Pending</b-badge>
                                    <p class="t-time">Just Now</p>
                                </div>
                            </div>

                            <div class="item-timeline timeline-success">
                                <div class="badge badge-success"></div>
                                <div class="t-text">
                                    <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a
                                            href="javascript:void(0);">Admin</a></p>
                                    <b-badge
                                        variant="outline-success outline-badge-success icon-fill-success">Completed</b-badge>
                                    <p class="t-time">2 min ago</p>
                                </div>
                            </div>

                            <div class="item-timeline  timeline-danger">
                                <div class="badge badge-danger"></div>
                                <div class="t-text">
                                    <p>Backup <span>Files EOD</span></p>
                                    <b-badge
                                        variant="outline-danger outline-badge-danger icon-fill-danger">Pending</b-badge>
                                    <p class="t-time">14:00</p>
                                </div>
                            </div>

                            <div class="item-timeline  timeline-dark">
                                <div class="badge badge-dark"></div>
                                <div class="t-text">
                                    <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                    <b-badge variant="outline-dark outline-badge-dark icon-fill-dark">Completed</b-badge>
                                    <p class="t-time">16:00</p>
                                </div>
                            </div>

                            <div class="item-timeline  timeline-warning">
                                <div class="badge badge-warning"></div>
                                <div class="t-text">
                                    <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                    <b-badge variant="outline-warning outline-badge-warning icon-fill-warning">In
                                        progress</b-badge>
                                    <p class="t-time">17:00</p>
                                </div>
                            </div>
                        </perfect-scrollbar>

                        <div class="tm-action-btn">
                            <b-button variant="default">
                                <span>View All</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-arrow-right">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </b-button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-transaction">
                    <div class="widget-heading">
                        <h5>Transactions</h5>
                        <div class="task-action">
                            <b-dropdown variant="icon-only" toggle-tag="a" :right="true">
                                <template #button-content>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-more-horizontal">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </template>

                                <b-dropdown-item>View Report</b-dropdown-item>
                                <b-dropdown-item>Edit Report</b-dropdown-item>
                                <b-dropdown-item>Mark as Done</b-dropdown-item>
                            </b-dropdown>
                        </div>
                    </div>

                    <div class="widget-content">
                        <div class="transactions-list">
                            <div>
                                <b-avatar variant="info" text="SP" class="icon-fill-info mr-2"></b-avatar>
                                <div class="t-name">
                                    <h4>Shaun Park</h4>
                                    <p>10 Jan 1:00PM</p>
                                </div>
                            </div>
                            <div class="text-success">+$36.11</div>
                        </div>

                        <div class="transactions-list">
                            <div>
                                <b-avatar variant="warning" class="icon-fill-warning mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </b-avatar>
                                <div class="t-name">
                                    <h4>Electricity Bill</h4>
                                    <p>04 Jan 1:00PM</p>
                                </div>
                            </div>
                            <div class="text-danger">-$16.44</div>
                        </div>

                        <div class="transactions-list">
                            <div>
                                <b-avatar variant="danger" text="AD" class="icon-fill-danger mr-2"></b-avatar>
                                <div class="t-name">
                                    <h4>Amy Diaz</h4>
                                    <p>31 Jan 1:00PM</p>
                                </div>
                            </div>
                            <div class="text-success">+$66.44</div>
                        </div>

                        <div class="transactions-list">
                            <div>
                                <b-avatar variant="secondary" class="icon-fill-secondary mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </b-avatar>
                                <div class="t-name">
                                    <h4>Netflix</h4>
                                    <p>02 Feb 1:00PM</p>
                                </div>
                            </div>
                            <div class="text-danger">-$32.00</div>
                        </div>

                        <div class="transactions-list">
                            <div>
                                <b-avatar variant="info" text="DA" class="icon-fill-info mr-2"></b-avatar>
                                <div class="t-name">
                                    <h4>Daisy Anderson</h4>
                                    <p>15 Feb 1:00PM</p>
                                </div>
                            </div>
                            <div class="text-success">+$10.08</div>
                        </div>

                        <div class="transactions-list">
                            <div>
                                <b-avatar variant="danger" text="OG" class="icon-fill-danger mr-2"></b-avatar>
                                <div class="t-name">
                                    <h4>Oscar Garner</h4>
                                    <p>20 Feb 1:00PM</p>
                                </div>
                            </div>
                            <div class="text-danger">-$22.00</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-wallet-balance">
                    <div class="widget-heading d-block">
                        <div class="wallet-usr-info">
                            <div class="usr-name">
                                <span><img src="@/assets/images/profile-32.jpeg" alt="admin-profile" class="img-fluid" />
                                    Alan Green</span>
                            </div>
                            <div class="add">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg></span>
                            </div>
                        </div>
                        <div class="wallet-balance">
                            <p>Wallet Balance</p>
                            <h5><span class="w-currency">$</span>2953</h5>
                        </div>
                    </div>

                    <div class="widget-amount">
                        <div class="w-a-info funds-received mr-3">
                            <span>Received
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-up text-success float-right">
                                    <polyline points="18 15 12 9 6 15"></polyline>
                                </svg></span>
                            <p>$97.99</p>
                        </div>
                        <div class="w-a-info funds-spent">
                            <span>Spent
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-down text-danger float-right">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg></span>
                            <p>$53.00</p>
                        </div>
                    </div>

                    <div class="widget-content">
                        <div class="bills-stats mb-4">
                            <span>Pending</span>
                        </div>
                        <div class="invoice-list">
                            <div class="inv-detail mb-4">
                                <div class="info-detail-1">
                                    <p>Netflix</p>
                                    <p><span class="w-currency">$</span> <span class="bill-amount">13.85</span></p>
                                </div>
                                <div class="info-detail-2">
                                    <p>BlueHost VPN</p>
                                    <p><span class="w-currency">$</span> <span class="bill-amount">15.66</span></p>
                                </div>
                            </div>
                            <div class="inv-action">
                                <b-button tag="a" variant="outline-secondary" class="view-details">View Details</b-button>
                                <b-button tag="a" variant="outline-success" class="pay-now">Pay Now $29.51</b-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-recent-orders">
                    <div class="widget-heading">
                        <h5>Recent Orders</h5>
                    </div>
                    <div class="widget-content">
                        <b-table-simple responsive>
                            <b-thead>
                                <b-tr>
                                    <b-th>
                                        <div class="th-content">Customer</div>
                                    </b-th>
                                    <b-th>
                                        <div class="th-content">Product</div>
                                    </b-th>
                                    <b-th>
                                        <div class="th-content">Invoice</div>
                                    </b-th>
                                    <b-th>
                                        <div class="th-content th-heading">Price</div>
                                    </b-th>
                                    <b-th>
                                        <div class="th-content">Status</div>
                                    </b-th>
                                </b-tr>
                            </b-thead>
                            <b-tbody>
                                <b-tr>
                                    <b-td>
                                        <div class="td-content"><img src="@/assets/images/profile-13.jpeg"
                                                alt="avatar" /><span>Luke Ivory</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content text-primary">Headphone</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">#46894</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span>$56.07</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><b-badge variant="success">Paid</b-badge></div>
                                    </b-td>
                                </b-tr>

                                <b-tr>
                                    <b-td>
                                        <div class="td-content"><img src="@/assets/images/profile-7.jpeg"
                                                alt="avatar" /><span>Andy King</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content text-warning">Nike Sport</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">#76894</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span>$88.00</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><b-badge variant="primary">Shipped</b-badge></div>
                                    </b-td>
                                </b-tr>
                                <b-tr>
                                    <b-td>
                                        <div class="td-content"><img src="@/assets/images/profile-10.jpeg"
                                                alt="avatar" /><span>Laurie Fox</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content text-danger">Sunglasses</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">#66894</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span>$126.04</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><b-badge variant="success">Paid</b-badge></div>
                                    </b-td>
                                </b-tr>
                                <b-tr>
                                    <b-td>
                                        <div class="td-content"><img src="@/assets/images/profile-5.jpeg"
                                                alt="avatar" /><span>Ryan Collins</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content text-warning">Sport</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">#89891</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span>$108.09</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><b-badge variant="primary">Shipped</b-badge></div>
                                    </b-td>
                                </b-tr>
                                <b-tr>
                                    <b-td>
                                        <div class="td-content"><img src="@/assets/images/profile-4.jpeg"
                                                alt="avatar" /><span>Irene Collins</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content text-primary">Speakers</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">#75844</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span>$84.00</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><b-badge variant="danger">Pending</b-badge></div>
                                    </b-td>
                                </b-tr>
                                <b-tr>
                                    <b-td>
                                        <div class="td-content"><img src="@/assets/images/profile-11.jpeg"
                                                alt="avatar" /><span>Sonia Shaw</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content text-danger">Watch</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">#76844</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span>$110.00</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><b-badge variant="success">Paid</b-badge></div>
                                    </b-td>
                                </b-tr>
                            </b-tbody>
                        </b-table-simple>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-top-selling-products">
                    <div class="widget-heading">
                        <h5>Top Selling Product</h5>
                    </div>

                    <div class="widget-content">
                        <b-table-simple responsive>
                            <b-thead>
                                <b-tr>
                                    <b-th>
                                        <div class="th-content">Product</div>
                                    </b-th>
                                    <b-th>
                                        <div class="th-content th-heading">Price</div>
                                    </b-th>
                                    <b-th>
                                        <div class="th-content th-heading">Discount</div>
                                    </b-th>
                                    <b-th>
                                        <div class="th-content">Sold</div>
                                    </b-th>
                                    <b-th>
                                        <div class="th-content">Source</div>
                                    </b-th>
                                </b-tr>
                            </b-thead>
                            <b-tbody>
                                <b-tr>
                                    <b-td>
                                        <div class="td-content d-flex">
                                            <img src="@/assets/images/product-headphones.jpg" alt="product" />
                                            <div class="align-self-center">
                                                <p class="prd-name">Headphone</p>
                                                <p class="prd-category text-primary">Digital</p>
                                            </div>
                                        </div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span class="pricing">$168.09</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span class="discount-pricing">$60.09</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">170</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">
                                            <a href="javascript:void(0);" class="text-danger"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevrons-right">
                                                    <polyline points="13 17 18 12 13 7"></polyline>
                                                    <polyline points="6 17 11 12 6 7"></polyline>
                                                </svg>
                                                Direct</a>
                                        </div>
                                    </b-td>
                                </b-tr>
                                <b-tr>
                                    <b-td>
                                        <div class="td-content d-flex">
                                            <img src="@/assets/images/product-shoes.jpg" alt="product" />
                                            <div class="align-self-center">
                                                <p class="prd-name">Shoes</p>
                                                <p class="prd-category text-warning">Faishon</p>
                                            </div>
                                        </div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span class="pricing">$108.09</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span class="discount-pricing">$47.09</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">130</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">
                                            <a href="javascript:void(0);" class="text-primary"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevrons-right">
                                                    <polyline points="13 17 18 12 13 7"></polyline>
                                                    <polyline points="6 17 11 12 6 7"></polyline>
                                                </svg>
                                                Google</a>
                                        </div>
                                    </b-td>
                                </b-tr>
                                <b-tr>
                                    <b-td>
                                        <div class="td-content d-flex">
                                            <img src="@/assets/images/product-watch.jpg" alt="product" />
                                            <div class="align-self-center">
                                                <p class="prd-name">Watch</p>
                                                <p class="prd-category text-danger">Accessories</p>
                                            </div>
                                        </div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span class="pricing">$88.00</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span class="discount-pricing">$20.00</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">66</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">
                                            <a href="javascript:void(0);" class="text-warning"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevrons-right">
                                                    <polyline points="13 17 18 12 13 7"></polyline>
                                                    <polyline points="6 17 11 12 6 7"></polyline>
                                                </svg>
                                                Ads</a>
                                        </div>
                                    </b-td>
                                </b-tr>
                                <b-tr>
                                    <b-td>
                                        <div class="td-content d-flex">
                                            <img src="@/assets/images/product-laptop.jpg" alt="product" />
                                            <div class="align-self-center">
                                                <p class="prd-name">Laptop</p>
                                                <p class="prd-category text-primary">Digital</p>
                                            </div>
                                        </div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span class="pricing">$110.00</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span class="discount-pricing">$33.00</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">35</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">
                                            <a href="javascript:void(0);" class="text-info"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevrons-right">
                                                    <polyline points="13 17 18 12 13 7"></polyline>
                                                    <polyline points="6 17 11 12 6 7"></polyline>
                                                </svg>
                                                Email</a>
                                        </div>
                                    </b-td>
                                </b-tr>
                                <b-tr>
                                    <b-td>
                                        <div class="td-content d-flex">
                                            <img src="@/assets/images/product-camera.jpg" alt="product" />
                                            <div class="align-self-center">
                                                <p class="prd-name">Camera</p>
                                                <p class="prd-category text-primary">Digital</p>
                                            </div>
                                        </div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span class="pricing">$126.04</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content"><span class="discount-pricing">$26.04</span></div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">30</div>
                                    </b-td>
                                    <b-td>
                                        <div class="td-content">
                                            <a href="javascript:void(0);" class="text-secondary"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevrons-right">
                                                    <polyline points="13 17 18 12 13 7"></polyline>
                                                    <polyline points="6 17 11 12 6 7"></polyline>
                                                </svg>
                                                Referral</a>
                                        </div>
                                    </b-td>
                                </b-tr>
                            </b-tbody>
                        </b-table-simple>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import Vue from 'vue';
import VueApexCharts from 'vue-apexcharts';
Vue.use(VueApexCharts);
Vue.component('apexchart', VueApexCharts);

import '@/assets/sass/widgets/widgets.scss';

export default {
    metaInfo: { title: 'Sales Admin' },
    data() {
        return {
            id: "",
            name: "",
            //Daily Sales
            daily_sales_series: [
                { name: 'Sales', data: [44, 55, 41, 67, 22, 43, 21] },
                { name: 'Last Week', data: [13, 23, 20, 8, 13, 27, 33] }
            ],

            //Total Orders
            total_orders_series: [{ name: 'Sales', data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40] }],

            //Revenue
            revenue_series: [
                { name: 'Income', data: [16800, 16800, 15500, 17800, 15500, 17000, 19000, 16000, 15000, 17000, 14000, 17000] },
                { name: 'Expenses', data: [16500, 17500, 16200, 17300, 16000, 19500, 16000, 17000, 16000, 19000, 18000, 19000] }
            ],

            //Sales by Category
            sales_donut_series: [985, 737, 270]
        };
    },
    computed: {
        //Revenue
        revenue_options() {
            const is_dark = this.$store.state.is_dark_mode;
            return {
                chart: {
                    fontFamily: 'Nunito, sans-serif',
                    zoom: { enabled: false },
                    toolbar: { show: false },
                    events: {
                        mounted: function (ctx) {
                            const highest1 = ctx.getHighestValueInSeries(0);
                            const highest2 = ctx.getHighestValueInSeries(1);

                            ctx.addPointAnnotation({
                                x: 'Jul',
                                y: highest1,
                                label: { style: { cssClass: 'd-none' } },
                                customSVG: {
                                    SVG:
                                        '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                    cssClass: undefined,
                                    offsetX: -8,
                                    offsetY: 7
                                }
                            });

                            ctx.addPointAnnotation({
                                x: 'Jun',
                                y: highest2,
                                label: { style: { cssClass: 'd-none' } },
                                customSVG: {
                                    SVG:
                                        '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                    cssClass: undefined,
                                    offsetX: -8,
                                    offsetY: 7
                                }
                            });
                        }
                    }
                },
                dataLabels: { enabled: false },
                stroke: { show: true, curve: 'smooth', width: 2, lineCap: 'square' },
                dropShadow: { enabled: true, opacity: 0.2, blur: 10, left: -7, top: 22 },
                colors: is_dark ? ['#2196f3', '#e7515a'] : ['#1b55e2', '#e7515a'],
                markers: {
                    discrete: [
                        { seriesIndex: 0, dataPointIndex: 7, fillColor: '#000', strokeColor: '#000', size: 5 },
                        { seriesIndex: 2, dataPointIndex: 11, fillColor: '#000', strokeColor: '#000', size: 4 }
                    ]
                },
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                xaxis: {
                    axisBorder: { show: false },
                    axisTicks: { show: false },
                    crosshairs: { show: true },
                    labels: { offsetX: 0, offsetY: 5, style: { fontSize: '12px', fontFamily: 'Nunito, sans-serif', cssClass: 'apexcharts-xaxis-title' } }
                },
                yaxis: {
                    tickAmount: 7,
                    labels: {
                        formatter: function (value) {
                            return value / 1000 + 'K';
                        },
                        offsetX: -10,
                        offsetY: 0,
                        style: { fontSize: '12px', fontFamily: 'Nunito, sans-serif', cssClass: 'apexcharts-yaxis-title' }
                    }
                },
                grid: {
                    borderColor: is_dark ? '#191e3a' : '#e0e6ed',
                    strokeDashArray: 5,
                    xaxis: { lines: { show: true } },
                    yaxis: { lines: { show: false } },
                    padding: { top: 0, right: 0, bottom: 0, left: 0 }
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right',
                    offsetY: 0,
                    fontSize: '16px',
                    fontFamily: 'Nunito, sans-serif',
                    markers: { width: 10, height: 10, strokeWidth: 0, strokeColor: '#fff', fillColors: undefined, radius: 12, onClick: undefined, offsetX: 0, offsetY: 0 },
                    itemMargin: { horizontal: 20, vertical: 5 }
                },
                tooltip: { theme: 'dark', marker: { show: true }, x: { show: false } },
                fill: {
                    type: 'gradient',
                    gradient: {
                        type: 'vertical',
                        shadeIntensity: 1,
                        inverseColors: !1,
                        opacityFrom: is_dark ? 0.19 : 0.28,
                        opacityTo: 0.05,
                        stops: is_dark ? [100, 100] : [45, 100]
                    }
                }
            };
        },

        //Daily Sales
        daily_sales_options() {
            return {
                chart: { toolbar: { show: false }, stacked: true, stackType: '100%' },
                dataLabels: { enabled: false },
                stroke: { show: true, width: 1 },
                colors: ['#e2a03f', '#e0e6ed'],
                responsive: [{ breakpoint: 480, options: { legend: { position: 'bottom', offsetX: -10, offsetY: 0 } } }],
                xaxis: { labels: { show: false }, categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'] },
                yaxis: { show: false },
                fill: { opacity: 1 },
                plotOptions: { bar: { horizontal: false, columnWidth: '25%' } },
                legend: { show: false },
                grid: {
                    show: false,
                    xaxis: { lines: { show: false } },
                    padding: { top: 10, right: -20, bottom: -20, left: -20 }
                }
            };
        },

        //Total Orders
        total_orders_options() {
            const is_dark = this.$store.state.is_dark_mode;
            return {
                chart: { sparkline: { enabled: true } },
                stroke: { curve: 'smooth', width: 2 },
                colors: is_dark ? ['#1abc9c'] : ['#fff'],
                labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
                yaxis: { min: 0, show: false },
                grid: { padding: { top: 125, right: 0, bottom: 0, left: 0 } },
                fill: {
                    opacity: 1,
                    type: 'gradient',
                    gradient: {
                        type: 'vertical',
                        shadeIntensity: 1,
                        inverseColors: !1,
                        opacityFrom: is_dark ? 0.3 : 0.4,
                        opacityTo: 0.05,
                        stops: is_dark ? [100, 100] : [45, 100]
                    }
                },
                tooltip: { x: { show: false }, theme: 'dark' }
            };
        },

        //Sales by Category
        sales_donut_options() {
            const is_dark = this.$store.state.is_dark_mode;
            let option = {
                chart: {},
                dataLabels: { enabled: false },
                expandOnClick: is_dark ? false : true,
                stroke: { show: true, width: 25, colors: is_dark ? '#0e1726' : '#fff' },
                colors: is_dark ? ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'] : ['#e2a03f', '#5c1ac3', '#e7515a'],
                legend: {
                    position: 'bottom',
                    horizontalAlign: 'center',
                    fontSize: '14px',
                    markers: { width: 10, height: 10 },
                    height: 50,
                    offsetY: 20,
                    itemMargin: { horizontal: 8, vertical: 0 }
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '65%',
                            background: 'transparent',
                            labels: {
                                show: true,
                                name: { show: true, fontSize: '29px', fontFamily: 'Nunito, sans-serif', offsetY: -10 },
                                value: {
                                    show: true,
                                    fontSize: '26px',
                                    fontFamily: 'Nunito, sans-serif',
                                    color: is_dark ? '#bfc9d4' : undefined,
                                    offsetY: 16,
                                    formatter: function (val) {
                                        return val;
                                    }
                                },
                                total: {
                                    show: true,
                                    label: 'Total',
                                    color: '#888ea8',
                                    fontSize: '29px',
                                    formatter: function (w) {
                                        return w.globals.seriesTotals.reduce(function (a, b) {
                                            return a + b;
                                        }, 0);
                                    }
                                }
                            }
                        }
                    }
                },
                labels: ['Apparel', 'Sports', 'Others']
            };

            if (is_dark) {
                option['states'] = {
                    hover: { filter: { type: 'none' } },
                    active: { filter: { type: 'none' } }
                };
            }

            return option;
        }
    },

    methods: {},

    mounted() {

        axios
            .get("/api/user")
            .then(response => {
                this.id = response.data.id
                this.name = response.data.name
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
    },
};
</script>
