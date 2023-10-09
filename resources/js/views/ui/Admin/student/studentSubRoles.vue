<template>
    <div class="layout-px-spacing app-contacts">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Contacts</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="row layout-spacing layout-top-spacing" id="cancel-row">
            <div class="col-lg-12">
                <div class="panel-body searchable-container" :class="[grid_type]">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                            <form class="form-inline my-2 my-lg-0">
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
                                        class="feather feather-search"
                                    >
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                    <b-input v-model.trim="search_user" class="product-search" v-on:keyup="search_contacts()" placeholder="Search Contacts..." />
                                </div>
                            </form>
                        </div>

                        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                            <div class="d-flex justify-content-sm-end justify-content-center">
                                <a href="javascript:;" @click="edit_user">
                                    <svg
                                        id="btn-add-contact"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-user-plus"
                                    >
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                </a>

                                <div class="switch align-self-center">
                                    <a href="javascript:;" @click="grid_type = 'list'">
                                        <svg
                                            :class="{ 'active-view': grid_type == 'list' }"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-list view-list mr-1"
                                        >
                                            <line x1="8" y1="6" x2="21" y2="6"></line>
                                            <line x1="8" y1="12" x2="21" y2="12"></line>
                                            <line x1="8" y1="18" x2="21" y2="18"></line>
                                            <line x1="3" y1="6" x2="3" y2="6"></line>
                                            <line x1="3" y1="12" x2="3" y2="12"></line>
                                            <line x1="3" y1="18" x2="3" y2="18"></line>
                                        </svg>
                                    </a>
                                    <a href="javascript:;" @click="grid_type = 'grid'">
                                        <svg
                                            :class="{ 'active-view': grid_type == 'grid' }"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-grid view-grid"
                                        >
                                            <rect x="3" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="14" width="7" height="7"></rect>
                                            <rect x="3" y="14" width="7" height="7"></rect>
                                        </svg>
                                    </a>
                                </div>

                                <!-- Modal -->
                                <b-modal centered id="addContactModal" :static="true" :title="params.id ? 'Update User' : 'Add User'">
                                    <div class="add-contact-box">
                                        <div class="add-contact-content">
                                            <b-form id="addContactModalTitle">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <b-input v-model="params.name" placeholder="Name"></b-input>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <b-input v-model="params.email" placeholder="Email"></b-input>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <b-input v-model="params.role" placeholder="Occupation"></b-input>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <b-input v-model="params.phone" placeholder="Phone"></b-input>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <b-input v-model="params.location" placeholder="Location"></b-input>
                                                        </div>
                                                    </div>
                                                </div>
                                            </b-form>
                                        </div>
                                    </div>

                                    <template #modal-footer>
                                        <b-button variant="default" data-dismiss="modal" @click="$bvModal.hide('addContactModal')"><i class="flaticon-cancel-12"></i> Discard</b-button>
                                        <b-button variant="default" id="btn-add" @click="save_user()">{{ params.id ? 'Update' : 'Add' }}</b-button>
                                    </template>
                                </b-modal>
                            </div>
                        </div>
                    </div>

                    <div class="searchable-items" :class="[grid_type]">
                        <div class="items items-header-section">
                            <div class="item-content">
                                <div class="">
                                    <b-checkbox :checked="check_all_checkbox" variant="primary" class="checkbox-primary d-inline-block" @change="check_all($event)"></b-checkbox>
                                    <h4>Name</h4>
                                </div>
                                <div class="user-email">
                                    <h4>Email</h4>
                                </div>
                                <div class="user-location">
                                    <h4 style="margin-left: 0;">Location</h4>
                                </div>
                                <div class="user-phone">
                                    <h4 style="margin-left: 3px;">Phone</h4>
                                </div>
                                <div class="action-btn">
                                    <a href="javascript:;" @click="delete_selected()" v-b-tooltip.hover title="Delete Selected">
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
                                            class="feather feather-trash-2  delete-multiple"
                                        >
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div v-for="(user, index) in filterd_contacts_list" class="items" :key="index">
                            <div class="item-content">
                                <div class="user-profile">
                                    <b-checkbox v-model="ids" variant="primary" class="checkbox-primary d-inline-block" :value="user.id"></b-checkbox>
                                    <img :src="require(`@/assets/images/${user.path}`)" alt="avatar" />
                                    <div class="user-meta-info">
                                        <p class="user-name">{{ user.name }}</p>
                                        <p class="user-work">{{ user.role }}</p>
                                    </div>
                                </div>
                                <div class="user-email">
                                    <p class="info-title">Email:</p>
                                    <p class="usr-email-addr">{{ user.email }}</p>
                                </div>
                                <div class="user-location">
                                    <p class="info-title">Location:</p>
                                    <p class="usr-location">{{ user.location }}</p>
                                </div>
                                <div class="user-phone">
                                    <p class="info-title">Phone:</p>
                                    <p class="usr-ph-no">{{ user.phone }}</p>
                                </div>
                                <div class="action-btn">
                                    <a href="javascript:;" class="mr-1" @click="edit_user(user)" v-b-tooltip.hover title="Edit">
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
                                            class="feather feather-edit-2 edit"
                                        >
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg>
                                    </a>
                                    <a href="javascript:;" @click="delete_user(user)" v-b-tooltip.hover title="Delete">
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
                                            class="feather feather-user-minus delete"
                                        >
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <line x1="23" y1="11" x2="17" y2="11"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
    .searchable-container .switch {
        width: auto;
        height: auto;
    }
    .searchable-container .searchable-items.grid .items .user-profile .custom-checkbox {
        display: none !important;
    }
</style>

<script>
    import '@/assets/sass/apps/contacts.scss';

    export default {
        metaInfo: { title: 'Contact Profile' },
        components: {},
        computed: {
            check_all_checkbox() {
                if (this.contacts_list.length && this.ids.length == this.contacts_list.length) {
                    return true;
                } else {
                    return false;
                }
            }
        },
        data() {
            return {
                params: { id: null, name: '', email: '', role: '', phone: '', location: '' },
                contacts_list: [],
                filterd_contacts_list: [],
                search_user: '',
                ids: [],
                grid_type: 'list'
            };
        },
        mounted() {
            this.bind_contacts();
        },
        methods: {
            bind_contacts() {
                this.contacts_list = [
                    { id: 1, path: 'profile-5.jpeg', name: 'Alan Green', role: 'Web Developer', email: 'alan@mail.com', location: 'Boston, USA', phone: '+1 (070) 123-4567' },
                    { id: 2, path: 'profile-11.jpeg', name: 'Linda Nelson', role: 'Web Designer', email: 'linda@mail.com', location: 'Sydney, Australia', phone: '+1 (070) 123-4567' },
                    { id: 3, path: 'profile-12.jpeg', name: 'Lila Perry', role: 'UX/UI Designer', email: 'lila@mail.com', location: 'Miami, USA', phone: '+1 (070) 123-4567' },
                    { id: 4, path: 'profile-3.jpeg', name: 'Andy King', role: 'Project Lead', email: 'andy@mail.com', location: 'Tokyo, Japan', phone: '+1 (070) 123-4567' },
                    { id: 5, path: 'profile-15.jpeg', name: 'Jesse Cory', role: 'Web Developer', email: 'jesse@mail.com', location: 'Edinburgh, UK', phone: '+1 (070) 123-4567' },
                    { id: 6, path: 'profile-7.jpeg', name: 'Xavier', role: 'UX/UI Designer', email: 'xavier@mail.com', location: 'New York, USA', phone: '+1 (070) 123-4567' },
                    { id: 7, path: 'profile-18.jpeg', name: 'Susan', role: 'Project Manager', email: 'susan@mail.com', location: 'Miami, USA', phone: '+1 (070) 123-4567' },
                    { id: 8, path: 'profile-29.jpeg', name: 'raci Lopez', role: 'Web Developer', email: 'traci@mail.com', location: 'Edinburgh, UK', phone: '+1 (070) 123-4567' }
                ];
                this.search_contacts();
            },
            search_contacts() {
                this.filterd_contacts_list = this.contacts_list.filter(d => d.name.toLowerCase().includes(this.search_user));
            },
            edit_user(user) {
                this.params = { id: null, name: '', email: '', role: '', phone: '', location: '' };
                if (user) {
                    this.params = JSON.parse(JSON.stringify(user));
                }
                this.$bvModal.show('addContactModal');
            },
            save_user() {
                if (!this.params.name) {
                    this.$bvToast.toast('Name is required.', { headerClass: 'd-none', bodyClass: 'toast-danger', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
                    return true;
                }
                if (!this.params.email) {
                    this.$bvToast.toast('Email is required.', { headerClass: 'd-none', bodyClass: 'toast-danger', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
                    return true;
                }
                if (!this.params.phone) {
                    this.$bvToast.toast('Phone is required.', { headerClass: 'd-none', bodyClass: 'toast-danger', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
                    return true;
                }

                if (this.params.id) {
                    //update user
                    let user = this.contacts_list.find(d => d.id == this.params.id);
                    user.name = this.params.name;
                    user.email = this.params.email;
                    user.role = this.params.role;
                    user.phone = this.params.phone;
                    user.location = this.params.location;
                } else {
                    //add user
                    let max_user_id = this.contacts_list.reduce((max, character) => (character.id > max ? character.id : max), this.contacts_list[0].id);
                    if (!max_user_id) {
                        max_user_id = 0;
                    }
                    let user = {
                        id: max_user_id + 1,
                        path: 'profile-30.png',
                        name: this.params.name,
                        email: this.params.email,
                        role: this.params.role,
                        phone: this.params.phone,
                        location: this.params.location
                    };
                    this.contacts_list.splice(0, 0, user);
                    this.search_contacts();
                }

                this.$bvModal.hide('addContactModal');
                this.$bvToast.toast('User saved successfully.', { headerClass: 'd-none', bodyClass: 'toast-success', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
            },
            delete_user(user) {
                this.contacts_list = this.contacts_list.filter(d => d.id != user.id);
                this.ids = this.ids.filter(d => d != user.id);
                this.search_contacts();
                this.$bvToast.toast('User deleted successfully.', { headerClass: 'd-none', bodyClass: 'toast-success', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
            },
            delete_selected() {
                if (!this.ids.length) {
                    this.$bvToast.toast('Please select atleast one user.', { headerClass: 'd-none', bodyClass: 'toast-warning', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
                    return true;
                }

                this.contacts_list = this.contacts_list.filter(d => !this.ids.includes(d.id));
                this.clear_selection();
                this.search_contacts();
            },
            check_all(is_checked) {
                if (is_checked) {
                    this.ids = this.contacts_list.map(d => {
                        return d.id;
                    });
                } else {
                    this.clear_selection();
                }
            },
            clear_selection() {
                this.ids = [];
            }
        }
    };
</script>
