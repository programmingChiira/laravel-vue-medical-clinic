<template>
    <div class="layout-px-spacing">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Chat</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="chat-section layout-top-spacing">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="chat-system">
                        <div class="hamburger" @click="is_show_user_menu = !is_show_user_menu">
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
                                class="feather feather-menu mail-menu d-lg-none"
                            >
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </div>
                        <div class="user-list-box" :class="{ 'user-list-box-show': is_show_user_menu }">
                            <div class="search">
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
                                <b-input v-model.trim="search_user" v-on:keyup="search_users()" placeholder="Search" />
                            </div>
                            <perfect-scrollbar class="people" :options="{ wheelSpeed: 0.5, swipeEasing: !0, minScrollbarLength: 40, maxScrollbarLength: 300, suppressScrollX: true }">
                                <div
                                    v-for="(person, index) in filterd_contact_list"
                                    class="person"
                                    :key="index"
                                    :class="{ active: selected_user && selected_user.user_id == person.user_id }"
                                    @click="select_user(person)"
                                >
                                    <div class="user-info">
                                        <div class="f-head">
                                            <img :src="require(`@/assets/images/${person.path}`)" alt="avatar" />
                                        </div>
                                        <div class="f-body">
                                            <div class="meta-info">
                                                <span class="user-name" :class="{ 'text-primary': selected_user && selected_user.user_id == person.user_id }">{{ person.name }}</span>
                                                <span class="user-meta-time" :class="{ 'text-primary': selected_user && selected_user.user_id == person.user_id }">{{ person.time }}</span>
                                            </div>
                                            <span class="preview">{{ person.preview }}</span>
                                        </div>
                                    </div>
                                </div>
                            </perfect-scrollbar>
                        </div>
                        <div class="chat-box" :class="{ active: selected_user }">
                            <div class="chat-not-selected" :class="{ 'd-none': selected_user }">
                                <p>
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
                                        class="feather feather-message-square"
                                    >
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    Click User To Chat
                                </p>
                            </div>

                            <div v-if="selected_user" class="chat-box-inner h-100">
                                <div class="chat-meta-user chat-active">
                                    <div class="current-chat-user-name">
                                        <span>
                                            <img :src="require(`@/assets/images/${selected_user.path}`)" alt="dynamic-image" />
                                            <span class="name">{{ selected_user.name }}</span>
                                        </span>
                                    </div>

                                    <div class="chat-action-btn align-self-center">
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
                                            class="feather feather-phone  phone-call-screen"
                                        >
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
                                            ></path>
                                        </svg>
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
                                            class="feather feather-video video-call-screen"
                                        >
                                            <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                            <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                        </svg>

                                        <b-dropdown :right="true" toggle-tag="a" variant="icon-only" class="d-inline-block">
                                            <template #button-content>
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
                                                    class="feather feather-more-vertical"
                                                >
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </template>

                                            <b-dropdown-item
                                                ><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-settings"
                                                >
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path
                                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"
                                                    ></path>
                                                </svg>
                                                Settings</b-dropdown-item
                                            >
                                            <b-dropdown-item
                                                ><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-mail"
                                                >
                                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg>
                                                Mail</b-dropdown-item
                                            >
                                            <b-dropdown-item
                                                ><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-copy"
                                                >
                                                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                                </svg>
                                                Copy</b-dropdown-item
                                            >
                                            <b-dropdown-item
                                                ><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-trash-2"
                                                >
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                                Delete</b-dropdown-item
                                            >
                                            <b-dropdown-item
                                                ><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-share-2"
                                                >
                                                    <circle cx="18" cy="5" r="3"></circle>
                                                    <circle cx="6" cy="12" r="3"></circle>
                                                    <circle cx="18" cy="19" r="3"></circle>
                                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                </svg>
                                                Share</b-dropdown-item
                                            >
                                        </b-dropdown>
                                    </div>
                                </div>
                                <perfect-scrollbar
                                    class="chat-conversation-box"
                                    :options="{ wheelSpeed: 0.5, swipeEasing: !0, minScrollbarLength: 40, maxScrollbarLength: 300, suppressScrollX: true }"
                                >
                                    <div id="chat-conversation-box-scroll" class="chat-conversation-box-scroll">
                                        <div class="chat active-chat">
                                            <div class="conversation-start">
                                                <span>Today, 6:48 AM</span>
                                            </div>

                                            <template v-if="selected_user.messages && selected_user.messages.length">
                                                <div
                                                    v-for="(message, index) in selected_user.messages"
                                                    class="bubble"
                                                    :key="'msg' + index"
                                                    :class="[selected_user.user_id == message.from_user_id ? 'me' : 'you']"
                                                >
                                                    {{ message.text }}
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </perfect-scrollbar>
                                <div class="chat-footer chat-active">
                                    <div class="chat-input">
                                        <div class="chat-form">
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
                                                class="feather feather-message-square"
                                            >
                                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                            </svg>
                                            <b-input v-model="text_message" class="mail-write-box" placeholder="Message" @keyup.enter.exact="send_message" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import '@/assets/sass/apps/chat.scss';

    export default {
        metaInfo: { title: 'Chat Application' },
        components: {},
        data() {
            return {
                is_show_user_menu: false,
                contact_list: [],
                filterd_contact_list: [],
                selected_user: null,
                login_user_id: 0, //system login user id
                search_user: '',
                text_message: ''
            };
        },
        mounted() {
            this.bind_contact_list();
        },
        methods: {
            bind_contact_list() {
                this.contact_list = [
                    {
                        user_id: 1,
                        name: 'Nia Hillyer',
                        path: 'profile-4.jpeg',
                        time: '2:09 PM',
                        preview: 'How do you do?',
                        messages: [
                            { from_user_id: this.login_user_id, to_usr_id: 1, text: 'Hi, I am back from vacation' },
                            { from_user_id: this.login_user_id, to_usr_id: 1, text: 'How are you?' },
                            { from_user_id: 1, to_usr_id: this.login_user_id, text: 'Welcom Back' },
                            { from_user_id: 1, to_usr_id: this.login_user_id, text: 'I am all well' },
                            { from_user_id: this.login_user_id, to_usr_id: 1, text: 'Coffee?' }
                        ]
                    },
                    {
                        user_id: 2,
                        name: 'Sean Freeman',
                        path: 'profile-3.jpeg',
                        time: '2:09 PM',
                        preview: 'I was wondering...',
                        messages: [
                            { from_user_id: this.login_user_id, to_usr_id: 2, text: 'Hello' },
                            { from_user_id: this.login_user_id, to_usr_id: 2, text: "It's me" },
                            { from_user_id: this.login_user_id, to_usr_id: 2, text: 'I have a question regarding project.' }
                        ]
                    },
                    {
                        user_id: 3,
                        name: 'Alma Clarke',
                        path: 'profile-11.jpeg',
                        time: '1:44 PM',
                        preview: 'I’ve forgotten how it felt before',
                        messages: [
                            { from_user_id: this.login_user_id, to_usr_id: 3, text: 'Hey Buddy.' },
                            { from_user_id: this.login_user_id, to_usr_id: 3, text: "What's up" },
                            { from_user_id: 3, to_usr_id: this.login_user_id, text: 'I am sick' },
                            { from_user_id: this.login_user_id, to_usr_id: 3, text: 'Not comming to office today.' }
                        ]
                    },
                    {
                        user_id: 4,
                        name: 'Alan Green',
                        path: 'profile-23.jpeg',
                        time: '2:09 PM',
                        preview: 'But we’re probably gonna need a new carpet.',
                        messages: [
                            { from_user_id: this.login_user_id, to_usr_id: 4, text: 'Hi, collect your check' },
                            { from_user_id: 4, to_usr_id: this.login_user_id, text: 'Ok, I will be there in 10 mins' }
                        ]
                    },
                    {
                        user_id: 5,
                        name: 'Shaun Park',
                        path: 'profile-7.jpeg',
                        time: '2:09 PM',
                        preview: 'It’s not that bad...',
                        messages: [
                            { from_user_id: this.login_user_id, to_usr_id: 3, text: 'Hi, I am back from vacation' },
                            { from_user_id: this.login_user_id, to_usr_id: 3, text: 'How are you?' },
                            { from_user_id: this.login_user_id, to_usr_id: 5, text: 'Welcom Back' },
                            { from_user_id: this.login_user_id, to_usr_id: 5, text: 'I am all well' },
                            { from_user_id: 5, to_usr_id: this.login_user_id, text: 'Coffee?' }
                        ]
                    },
                    {
                        user_id: 6,
                        name: 'Roxanne',
                        path: 'profile-15.jpeg',
                        time: '2:09 PM',
                        preview: 'Wasup for the third time like is you bling bitch',
                        messages: [
                            { from_user_id: this.login_user_id, to_usr_id: 6, text: 'Hi' },
                            { from_user_id: this.login_user_id, to_usr_id: 6, text: 'Uploaded files to server.' }
                        ]
                    },
                    { user_id: 7, name: 'Ernest Reeves', path: 'profile-32.jpeg', time: '2:09 PM', preview: 'Wasup for the third time like is you bling bitch', messages: [] },
                    { user_id: 8, name: 'Laurie Fox', path: 'profile-33.jpeg', time: '2:09 PM', preview: 'Wasup for the third time like is you bling bitch', messages: [] },
                    { user_id: 9, name: 'Xavier', path: 'profile-21.jpeg', time: '2:09 PM', preview: 'Wasup for the third time like is you bling bitch', messages: [] },
                    { user_id: 10, name: 'Susan Phillips', path: 'profile-12.jpeg', time: '2:09 PM', preview: 'Wasup for the third time like is you bling bitch', messages: [] },
                    { user_id: 11, name: 'Dale Butler', path: 'profile-26.jpeg', time: '2:09 PM', preview: 'Wasup for the third time like is you bling bitch', messages: [] },
                    { user_id: 12, name: 'Grace Roberts', path: 'profile-20.jpeg', time: '2:09 PM', preview: 'Wasup for the third time like is you bling bitch', messages: [] }
                ];
                this.search_users();
            },
            select_user(user) {
                this.selected_user = user;
                this.scroll_to_bottom();
                this.is_show_user_menu = false;
            },
            search_users() {
                this.filterd_contact_list = this.contact_list.filter(d => d.name.toLowerCase().includes(this.search_user));
            },
            send_message() {
                if (this.text_message.trim()) {
                    let user = this.contact_list.find(d => d.user_id == this.selected_user.user_id);
                    user.messages.push({ from_user_id: this.selected_user.user_id, to_usr_id: this.login_user_id, text: this.text_message });
                    this.text_message = '';
                    this.scroll_to_bottom();
                }
            },
            scroll_to_bottom() {
                setTimeout(() => {
                    document.querySelector('.chat-conversation-box').scrollTo({ left: 0, top: document.querySelector('.chat-conversation-box').scrollHeight, behavior: 'smooth' });
                });
            }
        }
    };
</script>
