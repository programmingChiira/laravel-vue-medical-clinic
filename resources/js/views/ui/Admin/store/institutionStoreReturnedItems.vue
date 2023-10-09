<template>
    <div class="layout-px-spacing apps-invoice-list">

        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Invoice List</span></li>
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
                                <div class="d-flex order-1 order-sm-0 align-items-center">
                                    <span>Results :</span>
                                    <span class="ml-2">
                                        <b-select v-model="table_option.page_size" size="sm">
                                            <b-select-option value="5">5</b-select-option>
                                            <b-select-option value="10">10</b-select-option>
                                            <b-select-option value="20">20</b-select-option>
                                            <b-select-option value="50">50</b-select-option>
                                        </b-select>
                                    </span>
                                </div>
                                <div class="mb-3 mb-sm-0 order-0 order-sm-1 mr-sm-2">
                                    <b-button tag="a" to="/apps/invoice/add" variant="primary" class="ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                        Add New
                                    </b-button>
                                    <b-button variant="danger" class="ml-2" @click="delete_row()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        Delete
                                    </b-button>
                                </div>
                            </div>
                            <div class="header-search">
                                <b-input v-model="table_option.search_text" size="sm" placeholder="Search..." />
                                <div class="search-image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                </div>
                            </div>
                        </div>

                        <b-table ref="basic_table" responsive hover :items="items" :fields="columns" :per-page="table_option.page_size" :current-page="table_option.current_page" :filter="table_option.search_text"
                                 sort-by="invoice" :show-empty="true" @filtered="on_filtered">
                            <template #head(id)>
                                <b-checkbox v-model="is_select_all" variant="primary" class="checkbox-outline-primary" @change="select_all()" />
                            </template>

                            <template #cell(id)="row">
                                <b-checkbox v-model="selected_rows" :value="row.value" variant="primary" class="checkbox-outline-primary" @change="check_select_all"></b-checkbox>
                            </template>
                            <template #cell(invoice)="row">
                                <router-link to="/apps/invoice/preview">
                                    <span class="inv-number">#{{row.value}}</span>
                                </router-link>
                            </template>
                            <template #cell(name)="row">
                                <div class="d-flex">
                                    <div class="usr-img-frame mr-2 rounded-circle">
                                        <img :src="require('@/assets/images/'+row.item.thumb)" class="img-fluid rounded-circle" alt="avatar" />
                                    </div>
                                    <p class="align-self-center mb-0 admin-name">{{row.value}}</p>
                                </div>
                            </template>
                            <template #cell(email)="row">
                                <span class="inv-email">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    {{row.value}}
                                </span>
                            </template>
                            <template #cell(date)="row">
                                <span class="inv-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    {{row.value}}
                                </span>
                            </template>
                            <template #cell(amount)="row">
                                <span class="inv-amount">
                                    ${{row.value}}
                                </span>
                            </template>
                            <template #cell(status)="row">
                                <b-badge :variant="row.value.class" class="inv-status">{{row.value.key}}</b-badge>
                            </template>
                            <template #cell(action)="row">
                                <div class="position-relative">
                                    <b-dropdown :right="true" variant="icon-only" toggle-tag="a" class="custom-dropdown">
                                        <template #button-content>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </template>
                                        <b-dropdown-item to="/apps/invoice/edit" link-class="action-edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                            Edit
                                        </b-dropdown-item>
                                        <b-dropdown-item link-class="action-delete" @click="delete_row(row.item)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                            Delete
                                        </b-dropdown-item>
                                    </b-dropdown>
                                </div>
                            </template>
                        </b-table>

                        <div class="table-footer">
                            <div class="dataTables_info">Showing {{meta.total_items ? meta.start_index + 1 : 0}} to {{meta.end_index + 1}} of {{meta.total_items}}</div>
                            <div class="paginating-container pagination-solid flex-column align-items-right">
                                <b-pagination v-model="table_option.current_page" :total-rows="table_option.total_rows" :per-page="table_option.page_size" prev-text="Prev" next-text="Next" first-text="First" last-text="Last" first-class="first" prev-class="prev" next-class="next" last-class="last" class="rounded">
                                    <template #first-text>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" /></svg>
                                    </template>
                                    <template #prev-text>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                                    </template>
                                    <template #next-text>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                    </template>
                                    <template #last-text>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" /></svg>
                                    </template>
                                </b-pagination>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>

<script>
    import '@/assets/sass/apps/invoice-list.scss';
    export default {
        metaInfo: { title: 'Invoice List' },
        data() {
            return {
                items: [], columns: [],
                table_option: { total_rows: 0, current_page: 1, page_size: 10, search_text: '' },
                meta: {},
                is_select_all: false, selected_rows: [],
            }
        },
        watch: {
            table_option: {
                handler: function () {
                    this.get_meta();
                    this.clear_selection();
                },
                deep: true
            },
        },
        mounted() {
            this.bind_data();
        },
        methods: {
            bind_data() {
                this.columns = [
                    { key: 'id', label: '', thClass: 'header-checkbox' },
                    { key: 'invoice', label: 'Invoice Id', sortable: true },
                    { key: 'name', label: 'Name', sortable: true },
                    { key: 'email', label: 'Email', sortable: true },
                    { key: 'date', label: 'Date', sortable: true },
                    { key: 'amount', label: 'Amount', sortable: true },
                    { key: 'status', label: 'Status', sortable: true },
                    { key: 'action', label: 'Actions', class: 'actions text-center' }
                ];
                this.items = [
                    { id: 1, invoice: '081451', thumb: 'profile-28.jpeg', name: 'Laurie Fox', email: 'lauriefox@company.com', date: '15 Dec 2020', amount: '2275.45', status: { key: 'Paid', class: 'success' } },
                    { id: 2, invoice: '081452', thumb: 'profile-30.png', name: 'Alexander Gray', email: 'alexGray3188@gmail.com', date: '20 Dec 2020', amount: '1044.00', status: { key: 'Paid', class: 'success' } },
                    { id: 3, invoice: '081681', thumb: 'profile-32.jpeg', name: 'James Taylor', email: 'jamestaylor468@gmail.com', date: '27 Dec 2020', amount: '20.00', status: { key: 'Pending', class: 'danger' } },
                    { id: 4, invoice: '082693', thumb: 'profile-24.jpeg', name: 'Grace Roberts', email: 'graceRoberts@company.com', date: '31 Dec 2020', amount: '344.00', status: { key: 'Paid', class: 'success' } },
                    { id: 5, invoice: '084743', thumb: 'profile-18.jpeg', name: 'Donna Rogers', email: 'donnaRogers@hotmail.com', date: '03 Jan 2021', amount: '405.15', status: { key: 'Paid', class: 'success' } },
                    { id: 6, invoice: '086643', thumb: 'profile-11.jpeg', name: 'Amy Diaz', email: 'amy968@gmail.com', date: '14 Jan 2020', amount: '100.00', status: { key: 'Paid', class: 'success' } },
                    { id: 7, invoice: '086773', thumb: 'profile-14.jpeg', name: 'Nia Hillyer', email: 'niahillyer666@comapny.com', date: '20 Jan 2021', amount: '59.21', status: { key: 'Pending', class: 'danger' } },
                    { id: 8, invoice: '087916', thumb: 'profile-15.jpeg', name: 'Mary McDonald', email: 'maryDonald007@gamil.com', date: '25 Jan 2021', amount: '79.00', status: { key: 'Pending', class: 'danger' } },
                    { id: 9, invoice: '089472', thumb: 'profile-1.jpeg', name: 'Andy King', email: 'kingandy07@company.com', date: '28 Jan 2021', amount: '149.00', status: { key: 'Paid', class: 'success' } },
                    { id: 10, invoice: '091768', thumb: 'profile-7.jpeg', name: 'Vincent Carpenter', email: 'vincentcarpenter@gmail.com', date: '30 Jan 2021', amount: '400', status: { key: 'Paid', class: 'success' } },
                    { id: 11, invoice: '095841', thumb: 'profile-8.jpeg', name: 'Kelly Young', email: 'youngkelly@hotmail.com', date: '06 Feb 2021', amount: '49.00', status: { key: 'Pending', class: 'danger' } },
                    { id: 12, invoice: '098424', thumb: 'profile-12.jpeg', name: 'Alma Clarke', email: 'alma.clarke@gmail.com', date: '10 Feb 2021', amount: '234.40', status: { key: 'Paid', class: 'success' } }
                ];

                this.table_option.total_rows = this.items.length;
                this.get_meta();
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
            get_meta() {
                var startPage; var endPage;
                var totalPages = this.table_option.page_size < 1 ? 1 : Math.ceil(this.table_option.total_rows / this.table_option.page_size);
                totalPages = Math.max(totalPages || 0, 1);

                var maxSize = 5;
                var isMaxSized = typeof maxSize !== 'undefined' && maxSize < totalPages;
                if (isMaxSized) {
                    startPage = Math.max(this.table_option.current_page - Math.floor(maxSize / 2), 1);
                    endPage = startPage + maxSize - 1;

                    if (endPage > totalPages) { endPage = totalPages; startPage = endPage - maxSize + 1; }
                }
                else { startPage = 1; endPage = totalPages; }
                let startIndex = (this.table_option.current_page - 1) * this.table_option.page_size;
                let endIndex = Math.min(startIndex + this.table_option.page_size - 1, this.table_option.total_rows - 1);

                var pages = Array.from(Array((endPage + 1) - startPage).keys()).map(i => startPage + i);
                this.meta = {
                    total_items: this.table_option.total_rows,
                    current_page: this.table_option.current_page,
                    page_size: this.table_option.page_size,
                    total_pages: totalPages,
                    start_page: startPage,
                    end_page: endPage,
                    start_index: startIndex,
                    end_index: endIndex,
                    pages: pages
                };
            },

            //checkbox selection
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
        }
    };
</script>
