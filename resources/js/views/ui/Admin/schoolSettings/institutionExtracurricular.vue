<template>
    <div v-show="user_role === 'Administrator'" class="layout-px-spacing apps-invoice-list">

        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Administrator</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">settings</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>extracurriculars</span></li>
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
                                <div class="mb-3 mb-sm-0 order-0 order-sm-1 mr-sm-2">
                                    <b-button variant="success" class="ml-2" v-b-modal.institutionExtracurricularsModalCenter>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                        Add New
                                    </b-button>
                                </div>

                                <b-modal id="institutionExtracurricularsModalCenter" title="Create extracurricular" centered no-fade>
                                    <b-form @submit.prevent="submitInstitutionExtracurricular">
                                        <b-form-row class="mb-4">
                                            <b-form-group label="Extracurricular" class="col-md-12">
                                                <b-input type="text" placeholder="Extracurricular e.g Rugby, music"
                                                    v-model="fields.extracurricular"></b-input>
                                            </b-form-group>
                                        </b-form-row>

                                        <div v-if="errors">
                                            <ul style="color: red; font-size: 12px; list-style: none; padding: 0;">
                                                <li v-for="(error, field) in errors" :key="field">
                                                    {{ field }}: {{ error }}
                                                </li>
                                            </ul>
                                        </div>

                                        <b-button variant="success" v-show="!isSubmitting" type="submit"
                                            class="btn btn-success btn-block mb-4 mr-2">
                                            SUBMIT
                                        </b-button>
                                        <b-button class="btn btn-success btn-block mb-4 mr-2" v-show="isSubmitting"
                                            type="button" variant="success">
                                            <span
                                                class="spinner-border text-white mr-2 align-self-center loader-sm">Loading...</span>
                                        </b-button>
                                    </b-form>
                                    <template #modal-footer>
                                        <b-button variant="default" data-dismiss="modal"
                                            @click="$bvModal.hide('institutionExtracurricularsModalCenter')"><i class="flaticon-cancel-12"></i>
                                            Close</b-button>
                                    </template>
                                </b-modal>
                            </div>

                            <b-toast id="message" header-class="d-none"
                                body-class="toast-success d-flex justify-content-between" toaster="b-toaster-top-center">
                                Data Saved Successfully
                            </b-toast>

                            <b-toast id="deleted" header-class="d-none"
                                body-class="toast-warning d-flex justify-content-between" toaster="b-toaster-top-center">
                                Data deleted Successfully
                            </b-toast>

                            <b-toast id="failed" header-class="d-none"
                                body-class="toast-danger d-flex justify-content-between" toaster="b-toaster-top-center">
                                FAILED!
                            </b-toast>

                            <div class="header-search">
                                <b-input v-model="table_option.search_text" size="sm" placeholder="Search..." />
                                <div class="search-image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <b-table ref="basic_table" responsive hover :items="items" :fields="columns"
                            :per-page="table_option.page_size" :current-page="table_option.current_page"
                            :filter="table_option.search_text" sort-by="invoice" :show-empty="true" @filtered="on_filtered">

                            <template #head(id)>
                                <b-checkbox v-model="is_select_all" variant="primary" class="checkbox-outline-primary"
                                    @change="select_all()" />
                            </template>

                            <template #cell(id)="row">
                                <b-checkbox v-model="selected_rows" :value="row.value" variant="primary"
                                    class="checkbox-outline-primary" @change="check_select_all"></b-checkbox>
                            </template>

                            <template #cell(extracurricular)="row">
                                <div class="d-flex">
                                    <p class="align-self-center mb-0 admin-name">{{ row.value }}</p>
                                </div>
                            </template>
                            <template #cell(edit)="row">
                                <div class="position-relative">
                                    <router-link style="color: #2196f3;" :to="`/ui/editAdminInstitutionExtracurricular/` + row.value">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-edit">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                        Edit
                                    </router-link>
                                </div>
                            </template>

                            <template #cell(delete)="row">
                                <div class="position-relative">
                                    <button
                                        style="background-color: rgba(0, 0, 0, 0); color: #e7515a;border:none;outline:none;"
                                        @click="destroy(row.value)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                        Delete
                                    </button>
                                </div>
                            </template>

                        </b-table>

                        <hr />
                        <div class="row justify-content-center">
                            <div v-if="lastPage > 1" class="pagination">
                                <b-button variant="success" style="margin: 4px;float: left;" v-if="currentPage > 1"
                                    @click="prevPage">&laquo; Prev </b-button>
                                <b-button variant="success" style="margin: 4px;float: right;" v-if="currentPage < lastPage"
                                    @click="nextPage">Next &raquo; </b-button>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>

<script>
import axios from 'axios';
import '@/assets/sass/apps/invoice-list.scss';
import '@/assets/sass/components/custom-modal.scss';
export default {
    metaInfo: { title: 'Extracurricular activities :- Intelligent system' },
    // metaInfo: {
    //     title() {
    //         return this.metaTitle;
    //     },
    // },
    data() {
        return {
            items: [],
            columns: [],
            table_option: { total_rows: 0, current_page: 1, page_size: 50, search_text: '' },
            meta: {},
            is_select_all: false, selected_rows: [],
            extracurricular: [],
            currentPage: 1,
            lastPage: 1,
            fields: {},
            user_role: "",
            gender: "",
            isSubmitting: false,
            errors: "",
        }
    },

    created() {
        this.institutionExtracurricular(this.currentPage);
    },

    watch: {
        table_option: {
            handler: function () {
                this.clear_selection();
            },
            deep: true
        },
    },

    mounted() {
        this.fetchData(this.table_option.current_page);
        this.fetchAuthenticatedUser();
        this.bind_data();
    },

    methods: {
        fetchAuthenticatedUser() {
            axios
                .get("/api/user")
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
                        window.location.href = "/login";
                    }
                });
        },

        institutionExtracurricular(page) {
            axios
                .get('/api/institutionExtracurriculars?page=' + page)
                .then((response) => {
                    this.extracurricular = response.data.data;
                    this.currentPage = response.data.current_page;
                    this.lastPage = response.data.last_page;

                    this.items = this.extracurricular.map((extracurricularData) => {
                        return {
                            id: extracurricularData.id,
                            extracurricular: extracurricularData.extracurricular,
                            edit: extracurricularData.slug,
                            delete: extracurricularData.id,
                        };
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        
        nextPage() {
            if (this.currentPage < this.lastPage) {
                this.currentPage += 1;
                this.fetchData(this.currentPage);
            }
        },

        prevPage() {
            if (this.currentPage > 1) {
                this.currentPage -= 1;
                this.fetchData(this.currentPage);
            }
        },

        fetchData(page = 1) {
            axios
                .get(`/api/institutionExtracurriculars?page=${page}`)
                .then((response) => {
                    this.items = response.data.data.map((extracurricularData) => {
                        return {
                            id: extracurricularData.id,
                            extracurricular: extracurricularData.extracurricular,
                            edit: extracurricularData.slug,
                            delete: extracurricularData.id,
                        };
                    });

                    this.currentPage = response.data.current_page;
                    this.lastPage = response.data.last_page;
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        async submitInstitutionExtracurricular() {
            this.isSubmitting = true;

            try {
                const response = await axios.post("/api/adminInstitutionExtracurricular", {
                    uniqueId: this.slugValue,
                    extracurricularName: this.fields.extracurricular,
                });

                if (response.status === 200) {
                    // Form submission is successful
                    console.log("All is well");
                    this.$bvToast.show('message');
                    this.$bvModal.hide('modalxl');
                    this.errors = false;
                    this.fetchData();

                    // Clear the fields after successful submission
                    this.fields = {};
                }
            } catch (error) {
                // Form submission failed, handle error
                this.errors = error.response.data.errors;
                this.submitErrors = error.response.data.message;
            } finally {
                // Regardless of success or error, reset the isSubmitting flag
                this.isSubmitting = false;
            }
        },



        bind_data() {

            this.columns = [
                { key: 'id', label: '', thClass: 'header-checkbox' },
                { key: 'extracurricular', label: 'Extracurricular', sortable: true },
                { key: 'edit', label: 'Edit', sortable: false },
                { key: 'delete', label: 'Delete', sortable: false },
            ];

            this.items = this.extracurricular.map((item, index) => {
                return {
                    id: index + 1,
                    extracurricular: item.extracurricular,
                    edit: item.slug,
                    delete: item.id,
                };
            });

            this.table_option.total_rows = this.items.length;
        },
        on_filtered(filtered_items) {
            this.refresh_table(filtered_items.length);
        },
        refresh_table(total) {
            this.table_option.total_rows = total;
            this.table_option.currentPage = 1;
        },

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

        edit_row(item) {
            this.$router.push(`/ui/editAdminInstitutionExtracurricular/${item.slug}`);
        },

        destroy(id) {
            const swalWithBootstrapButtons = this.$swal.mixin({
                confirmButtonClass: 'btn btn-secondary',
                cancelButtonClass: 'btn btn-dark mr-3',
                buttonsStyling: false
            });
            swalWithBootstrapButtons
                .fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true,
                    padding: '2em'
                })
                .then(result => {
                    if (result.value) {
                        swalWithBootstrapButtons.fire('Deleted!', 'Data has been deleted.', 'success');
                        axios
                            .delete("/api/deleteInstitutionExtracurricular/" + id)
                            .then((response) => {
                                this.fetchData();
                            }).catch((error) => {
                                this.$bvToast.show('failed');
                            });
                    } else if (result.dismiss === this.$swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire('Cancelled', ' ', 'error');
                    }
                });
        },
    },

    computed: {
        slugValue: {
            get() {
                let result = "";
                let characters =
                    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                let charactersLength = characters.length;
                for (let i = 0; i < 100; i++) {
                    result += characters.charAt(
                        Math.floor(Math.random() * charactersLength)
                    );
                }
                return (this.fields.slug = result + "");
            },
            set(value) {
                this.fields.slug = value;
            },
        },
    }
};
</script>
