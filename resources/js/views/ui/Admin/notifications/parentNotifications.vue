<template>
    <div class="layout-px-spacing">

        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Notes</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="layout-px-spacing">

            <div class="row app-notes layout-top-spacing layout-spacing" id="cancel-row">
                <div class="col-lg-12">
                    <div class="app-hamburger-container">
                        <div class="hamburger" @click="is_show_note_menu = !is_show_note_menu;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                        </div>
                    </div>

                    <div class="app-container">

                        <div class="app-note-container">

                            <div class="app-note-overlay" :class="{'app-note-overlay-show': is_show_note_menu}" @click="is_show_note_menu = false;"></div>

                            <div class="tab-title" :class="{'note-menu-show' : is_show_note_menu}">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12 text-center">
                                        <a id="btn-add-notes" class="btn btn-primary" href="javascript:void(0);" @click="edit_note()">Add</a>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12 mt-5">

                                        <ul class="nav nav-pills d-block" id="pills-tab3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link list-actions" :class="{'active' : selected_tab == 'all'}" @click="tab_changed('all')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> All Notes
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions" :class="{'active' : selected_tab == 'fav'}" @click="tab_changed('fav')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> Favourites
                                                </a>
                                            </li>
                                        </ul>

                                        <hr />

                                        <p class="group-section">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg> Tags
                                        </p>

                                        <ul class="nav nav-pills d-block group-list" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-primary" :class="{'active' : selected_tab == 'personal'}" @click="tab_changed('personal')">Personal</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-warning" :class="{'active' : selected_tab == 'work'}" @click="tab_changed('work')">Work</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-success" :class="{'active' : selected_tab == 'social'}" @click="tab_changed('social')">Social</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-danger" :class="{'active' : selected_tab == 'important'}" @click="tab_changed('important')">Important</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>


                            <div id="ct" class="note-container note-grid">

                                <div v-for="(note, index) in filterd_notes_list" class="note-item all-notes" :class="note_class(note)" :key="index">
                                    <div class="note-inner-content">
                                        <div class="note-content">
                                            <p class="note-title">{{note.title}}</p>
                                            <p class="meta-time">{{note.date}}</p>
                                            <div class="note-description-content">
                                                <p class="note-description">{{note.description}}</p>
                                            </div>
                                        </div>
                                        <div class="note-action">
                                            <a href="javascript:;" @click="set_fav(note)">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </a>
                                            <a href="javascript:;" @click="delete_note(note)">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </a>
                                        </div>
                                        <div class="note-footer">
                                            <b-dropdown :right="true" ref="ddl_tag" toggle-tag="a" variant="icon-only" class="tags-selector" toggle-class="nav-link dropdown-toggle d-icon label-group">
                                                <template #button-content>
                                                    <div class="tags">
                                                        <div class="g-dot-personal"></div>
                                                        <div class="g-dot-work"></div>
                                                        <div class="g-dot-social"></div>
                                                        <div class="g-dot-important"></div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </div>
                                                </template>
                                                <a href="javascript:;" class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" @click="set_tag(note, 'personal', index);">
                                                    Personal
                                                </a>
                                                <a href="javascript:;" class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" @click="set_tag(note, 'work', index)">
                                                    Work
                                                </a>
                                                <a href="javascript:;" class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" @click="set_tag(note, 'social', index)">
                                                    Social
                                                </a>
                                                <a href="javascript:;" class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" @click="set_tag(note, 'important', index)">
                                                    Important
                                                </a>
                                            </b-dropdown>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Modal -->
                    <b-modal centered id="notesMailModal" :hide-header="true">
                        <div @click="$bvModal.hide('notesMailModal')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </div>
                        <div class="notes-box">
                            <div class="notes-content">
                                <b-form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex note-title">
                                                <b-input v-model="params.title" maxlength="25" placeholder="Title"></b-input>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="d-flex note-description">
                                                <b-textarea v-model="params.description" maxlength="60" placeholder="Description" rows="3"></b-textarea>
                                            </div>
                                        </div>
                                    </div>

                                </b-form>
                            </div>
                        </div>
                        <template #modal-footer>
                            <b-button variant="default" data-dismiss="modal" @click="$bvModal.hide('notesMailModal')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Discard
                            </b-button>
                            <b-button variant="default" id="btn-n-add" @click="save_note()">{{params.id ? 'Update' : 'Add'}}</b-button>
                        </template>
                    </b-modal>

                </div>
            </div>

        </div>

    </div>
</template>

<script>
    import '@/assets/sass/apps/notes.scss';

    export default {
        metaInfo: { title: 'Notes' },
        components: {},
        data() {
            return {
                is_show_note_menu: false,
                params: { id: null, title: '', description: '' },
                notes_list: [], filterd_notes_list: [],
                selected_tab: 'all',
            };
        },
        mounted() {
            this.bind_notes();
        },
        methods: {
            bind_notes() {
                this.notes_list = [
                    { id: 1, title: 'Meeting with Kelly', description: 'Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.', date: '11/01/2020', is_fav: false, tag: 'personal' },
                    { id: 2, title: 'Receive Package', description: 'Facilisis curabitur facilisis vel elit sed dapibus sodales purus.', date: '11/02/2020', is_fav: true, tag: '' },
                    { id: 3, title: 'Download Docs', description: 'Proin a dui malesuada, laoreet mi vel, imperdiet diam quam laoreet.', date: '11/04/2020', is_fav: false, tag: 'work' },
                    { id: 4, title: 'Meeting at 4:50pm', description: 'Excepteur sint occaecat cupidatat non proident, anim id est laborum.', date: '11/08/2020', is_fav: false, tag: '' },
                    { id: 5, title: 'Backup Files EOD', description: 'Maecenas condimentum neque mollis, egestas leo ut, gravida.', date: '11/09/2020', is_fav: false, tag: '' },
                    { id: 6, title: 'Download Server Logs', description: 'Suspendisse efficitur diam quis gravida. Nunc molestie est eros.', date: '11/09/2020', is_fav: false, tag: 'social' },
                    { id: 7, title: 'Team meet at Starbucks', description: 'Etiam a odio eget enim aliquet laoreet lobortis sed ornare nibh.', date: '11/10/2020', is_fav: false, tag: '' },
                    { id: 8, title: 'Create new users Profile', description: 'Duis aute irure in nulla pariatur. Etiam a odio eget enim aliquet.', date: '11/11/2020', is_fav: false, tag: 'important' },

                ];
                this.search_notes();
            },
            note_class(note) {
                let cls = '';
                if (note.tag) {
                    cls = 'note-' + note.tag;
                }
                if (note.is_fav) {
                    cls += ' note-fav';
                }
                return cls;
            },
            tab_changed(type) {
                this.selected_tab = type;
                this.search_notes();
                this.is_show_note_menu = false;
            },
            search_notes() {
                if (this.selected_tab != 'fav') {
                    if (this.selected_tab != 'all') {
                        this.filterd_notes_list = this.notes_list.filter(d => d.tag == this.selected_tab);
                    }
                    else {
                        this.filterd_notes_list = this.notes_list;
                    }
                }
                else {
                    this.filterd_notes_list = this.notes_list.filter(d => d.is_fav);
                }
            },
            set_fav(note) {
                note.is_fav = !note.is_fav;
            },
            set_tag(note, name, index) {
                note.tag = name;
                this.$refs.ddl_tag[index].hide(true);
            },
            edit_note(note) {
                this.params = { id: null, title: '', description: '' };
                if (note) {
                    this.params = JSON.parse(JSON.stringify(note));
                }
                this.$bvModal.show('notesMailModal');
            },
            save_note() {
                if (!this.params.title) {
                    this.$bvToast.toast('Title is required.', { headerClass: 'd-none', bodyClass: 'toast-danger', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
                    return false;
                }

                //add note
                let max_note_id = this.notes_list.reduce((max, character) => (character.id > max ? character.id : max), this.notes_list[0].id);
                if (!max_note_id) { max_note_id = 0; }
                let dt = new Date();
                let note = {
                    id: max_note_id + 1,
                    title: this.params.title,
                    description: this.params.description,
                    date: dt.getDate() + '/' + Number(dt.getMonth()) + 1 + '/' + dt.getFullYear(),
                    is_fav: false,
                    tag: ''
                };
                this.notes_list.splice(0, 0, note);
                this.search_notes();

                this.$bvModal.hide('notesMailModal');
                this.$bvToast.toast('Note saved successfully.', { headerClass: 'd-none', bodyClass: 'toast-success', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
            },
            delete_note(note) {
                this.notes_list = this.notes_list.filter(d => d.id != note.id);
                this.search_notes();
                this.$bvToast.toast('Note deleted successfully.', { headerClass: 'd-none', bodyClass: 'toast-success', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
            },
        },
    };
</script>
