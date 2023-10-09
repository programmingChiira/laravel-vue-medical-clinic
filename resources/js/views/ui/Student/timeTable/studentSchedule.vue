<template>
    <div class="layout-px-spacing apps-calendar">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Calendar</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="statbox panel box box-shadow">
                    <div class="panel-body">
                        <div class="calendar-upper-section">
                            <div class="row">
                                <div class="col-md-8 col-12">
                                    <div class="labels text-md-left text-center">
                                        <p class="label label-primary">Work</p>
                                        <p class="label label-warning">Travel</p>
                                        <p class="label label-success">Personal</p>
                                        <p class="label label-danger">Important</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <b-form class="form-horizontal mt-md-0 mt-3 text-md-right text-center">
                                        <b-button variant="primary" @click="edit_event()">
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
                                                class="feather feather-calendar mr-2"
                                            >
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg>
                                            Add Event
                                        </b-button>
                                    </b-form>
                                </div>
                            </div>
                        </div>

                        <FullCalendar ref="fullCalendar" :options="options">
                            <template v-slot:eventContent="arg">
                                <div class="fc-event-main-frame">
                                    <div class="fc-event-time">{{ arg.timeText }}</div>
                                    <div class="fc-event-title-container">
                                        <div class="fc-event-title fc-sticky">{{ arg.event.title }}</div>
                                    </div>

                                    <div class="calendar-tlp">
                                        <div class="p-2 bg-dark text-white text-left text-wrap">{{ arg.timeText + ' : ' + arg.event.title }}</div>
                                        <div class="p-2 text-left text-wrap">
                                            {{ arg.event.extendedProps ? arg.event.extendedProps.description : '' }}
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </FullCalendar>
                    </div>
                </div>
            </div>

            <!-- The Modal -->
            <b-modal centered id="addEventsModal" :title="params.id ? 'Edit Event' : 'Add Event'">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="start-date" class="">Event Title:</label>
                        <div class="d-flex event-title">
                            <b-input v-model="params.title" placeholder="Enter Title"></b-input>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-12 mb-3">
                        <div class="form-group start-date">
                            <label for="start-date" class="">From:</label>
                            <div class="d-flex">
                                <flat-pickr
                                    v-model="params.start"
                                    :config="{ enableTime: true, dateFormat: 'Y-m-d H:i:S', minDate: min_date_start }"
                                    @on-change="start_date_change"
                                    class="form-control flatpickr active"
                                    placeholder="Start Date"
                                ></flat-pickr>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 mb-3">
                        <div class="form-group end-date">
                            <label for="end-date" class="">To:</label>
                            <div class="d-flex">
                                <flat-pickr
                                    v-model="params.end"
                                    :config="{ enableTime: true, dateFormat: 'Y-m-d H:i:S', minDate: min_date_end }"
                                    @on-change="end_date_change"
                                    class="form-control flatpickr active"
                                    placeholder="End Date"
                                ></flat-pickr>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="start-date" class="">Event Description:</label>
                        <div class="d-flex event-description">
                            <b-textarea v-model="params.description" placeholder="Enter Description" rows="3"></b-textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="event-badge">
                            <p class="">Badge:</p>
                            <div class="d-sm-flex d-block">
                                <b-radio v-model="params.className" value="bg-primary" class="radio-classic radio-primary mr-2" name="marker">Work</b-radio>
                                <b-radio v-model="params.className" value="bg-warning" class="radio-classic radio-warning mr-2" name="marker">Travel</b-radio>
                                <b-radio v-model="params.className" value="bg-success" class="radio-classic radio-success mr-2" name="marker">Personal</b-radio>
                                <b-radio v-model="params.className" value="bg-danger" class="radio-classic radio-danger mr-2" name="marker">Important</b-radio>
                            </div>
                        </div>
                    </div>
                </div>

                <template #modal-footer>
                    <b-button variant="outline-dark" data-dismiss="modal" @click="$bvModal.hide('addEventsModal')">Discard</b-button>
                    <b-button variant="primary" id="add-e1" size="md" @click="save_event()">{{ params.id ? 'Update Event' : 'Add Event' }}</b-button>
                </template>
            </b-modal>
        </div>
    </div>
</template>

<script>
    import '@/assets/sass/apps/calendar.scss';

    import FullCalendar from '@fullcalendar/vue';
    import dayGridPlugin from '@fullcalendar/daygrid';
    import timeGridPlugin from '@fullcalendar/timegrid';
    import interactionPlugin, { Draggable } from '@fullcalendar/interaction';

    //flatpickr
    import flatPickr from 'vue-flatpickr-component';
    import 'flatpickr/dist/flatpickr.css';
    import '@/assets/sass/forms/custom-flatpickr.css';

    export default {
        metaInfo: { title: 'Fullcalendar Drag and Drop Event' },
        components: { FullCalendar, flatPickr },
        data() {
            return {
                params: { id: null, title: '', start: '', end: '', description: '', className: 'bg-primary' },
                options: {
                    initialView: 'dayGridMonth',
                    plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
                    headerToolbar: {
                        start: 'prev,next today',
                        center: 'title',
                        end: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    editable: true,
                    droppable: true,
                    dayMaxEvents: true,
                    selectable: true,
                    eventClick: this.edit_event,
                    select: this.edit_date,
                    eventMouseEnter: this.event_mouse_hover,
                    eventMouseLeave: this.event_mouse_leave,
                    events: []
                },
                min_date_start: '',
                min_date_end: ''
            };
        },
        mounted() {
            this.bind_events();
        },
        methods: {
            bind_events() {
                let dt = new Date();

                this.options.events = [
                    {
                        id: 1,
                        title: 'All Day Event',
                        start: dt.getFullYear() + '-' + this.get_month(dt) + '-01T14:30:00',
                        end: dt.getFullYear() + '-' + this.get_month(dt) + '-02T14:30:00',
                        className: 'bg-danger',
                        description: 'Aenean fermentum quam vel sapien rutrum cursus. Vestibulum imperdiet finibus odio, nec tincidunt felis facilisis eu.'
                    },
                    {
                        id: 2,
                        title: 'Long Event',
                        start: dt.getFullYear() + '-' + this.get_month(dt) + '-07T19:30:00',
                        end: dt.getFullYear() + '-' + this.get_month(dt) + '-09T14:30:00',
                        className: 'bg-primary',
                        description: 'Etiam a odio eget enim aliquet laoreet. Vivamus auctor nunc ultrices varius lobortis.'
                    },
                    {
                        id: 3,
                        title: 'Conference',
                        start: dt.getFullYear() + '-' + this.get_month(dt) + '-17T14:30:00',
                        end: dt.getFullYear() + '-' + this.get_month(dt) + '-18T14:30:00',
                        className: 'bg-warning',
                        description: 'Proin et consectetur nibh. Mauris et mollis purus. Ut nec tincidunt lacus. Nam at rutrum justo, vitae egestas dolor.'
                    },
                    {
                        id: 4,
                        title: 'Meeting',
                        start: dt.getFullYear() + '-' + this.get_month(dt) + '-12T10:30:00',
                        end: dt.getFullYear() + '-' + this.get_month(dt) + '-13T10:30:00',
                        className: 'bg-danger',
                        description: 'Mauris ut mauris aliquam, fringilla sapien et, dignissim nisl. Pellentesque ornare velit non mollis fringilla.'
                    },
                    {
                        id: 5,
                        title: 'Lunch',
                        start: dt.getFullYear() + '-' + this.get_month(dt) + '-12T15:00:00',
                        end: dt.getFullYear() + '-' + this.get_month(dt) + '-13T15:00:00',
                        className: 'bg-warning',
                        description: 'Integer fermentum bibendum elit in egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus.'
                    },
                    {
                        id: 6,
                        title: 'Meeting',
                        start: dt.getFullYear() + '-' + this.get_month(dt) + '-12T21:30:00',
                        end: dt.getFullYear() + '-' + this.get_month(dt) + '-13T21:30:00',
                        className: 'bg-success',
                        description:
                            'Curabitur facilisis vel elit sed dapibus. Nunc sagittis ex nec ante facilisis, sed sodales purus rhoncus. Donec est sapien, porttitor et feugiat sed, eleifend quis sapien. Sed sit amet maximus dolor.'
                    },
                    {
                        id: 7,
                        title: 'Happy Hour',
                        start: dt.getFullYear() + '-' + this.get_month(dt) + '-12T05:30:00',
                        end: dt.getFullYear() + '-' + this.get_month(dt) + '-13T05:30:00',
                        className: 'bg-warning',
                        description: ' odio lectus, porttitor molestie scelerisque blandit, hendrerit sed ex. Aenean malesuada iaculis erat, vitae blandit nisl accumsan ut.'
                    },
                    {
                        id: 8,
                        title: 'Dinner',
                        start: dt.getFullYear() + '-' + this.get_month(dt) + '-12T20:00:00',
                        end: dt.getFullYear() + '-' + this.get_month(dt) + '-13T20:00:00',
                        className: 'bg-danger',
                        description: 'Sed purus urna, aliquam et pharetra ut, efficitur id mi. Pellentesque ut convallis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                    },
                    {
                        id: 9,
                        title: 'Click for Arrangic',
                        start: dt.getFullYear() + '-' + this.get_month(dt) + '-27T20:00:00',
                        end: dt.getFullYear() + '-' + this.get_month(dt) + '-28T20:00:00',
                        className: 'bg-success',
                        description: 'Sed purus urna, aliquam et pharetra ut, efficitur id mi. Pellentesque ut convallis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                    },
                    {
                        id: 10,
                        title: 'new event',
                        start: dt.getFullYear() + '-' + this.get_month(dt) + '-24T08:12:14',
                        end: dt.getFullYear() + '-' + this.get_month(dt) + '-27T22:20:20',
                        className: 'bg-danger',
                        description: 'Sed purus urna, aliquam et pharetra ut, efficitur id mi. Pellentesque ut convallis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                    },
                    {
                        id: 11,
                        title: 'Other new',
                        start: dt.getFullYear() + '-' + this.get_month(dt, -1) + '-13T08:12:14',
                        end: dt.getFullYear() + '-' + this.get_month(dt, -1) + '-16T22:20:20',
                        className: 'bg-primary',
                        description: 'Pellentesque ut convallis velit. Sed purus urna, aliquam et pharetra ut, efficitur id mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                    },
                    {
                        id: 13,
                        title: 'Upcoming Event',
                        start: dt.getFullYear() + '-' + this.get_month(dt, 1) + '-15T08:12:14',
                        end: dt.getFullYear() + '-' + this.get_month(dt, 1) + '-18T22:20:20',
                        className: 'bg-primary',
                        description: 'Pellentesque ut convallis velit. Sed purus urna, aliquam et pharetra ut, efficitur id mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                    }
                ];

                this.setup_draggable();
            },
            get_month(dt, add = 0) {
                let month = dt.getMonth() + 1 + add;
                return dt.getMonth() < 10 ? '0' + month : month;
            },
            edit_date(data) {
                let obj = {
                    event: { start: data.start, end: data.end }
                };
                this.edit_event(obj);
            },
            event_mouse_hover(data) {
                let element = data.el.querySelector('.calendar-tlp');
                element.classList.add('d-block');
            },
            event_mouse_leave(data) {
                let element = data.el.querySelector('.calendar-tlp');
                element.classList.remove('d-block');
            },
            start_date_change(selectedDates, dateStr) {
                if (selectedDates && dateStr) {
                    this.min_date_end = dateStr;
                    this.params.end = '';
                }
            },
            end_date_change() {},
            edit_event(data) {
                this.params = { id: null, title: '', start: '', end: '', description: '', className: 'bg-primary' };

                if (data) {
                    let obj = JSON.parse(JSON.stringify(data.event));
                    this.params = {
                        id: obj.id,
                        title: obj.title,
                        start: obj.start,
                        end: obj.end,
                        description: obj.extendedProps ? obj.extendedProps.description : '',
                        className: obj.classNames ? obj.classNames[0] : ''
                    };

                    this.min_date_start = obj.start;
                    this.min_date_end = obj.start;
                } else {
                    this.min_date_start = new Date();
                    this.min_date_end = new Date();
                }
                this.$bvModal.show('addEventsModal');
            },
            save_event() {
                if (!this.params.title) {
                    this.$bvToast.toast('Title is required.', { headerClass: 'd-none', bodyClass: 'toast-danger', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
                    return true;
                }
                if (!this.params.start) {
                    this.$bvToast.toast('Start date is required.', { headerClass: 'd-none', bodyClass: 'toast-danger', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
                    return true;
                }
                if (!this.params.end) {
                    this.$bvToast.toast('End date is required.', { headerClass: 'd-none', bodyClass: 'toast-danger', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
                    return true;
                }

                if (this.params.id) {
                    //update event
                    let event = this.options.events.find(d => d.id == this.params.id);
                    event.title = this.params.title;
                    event.start = this.params.start;
                    event.end = this.params.end;
                    event.description = this.params.description;
                    event.className = this.params.className;
                } else {
                    //add event
                    let max_event_id = 0;
                    if (this.options.events) {
                        max_event_id = this.options.events.reduce((max, character) => (character.id > max ? character.id : max), this.options.events[0].id);
                    }

                    let event = {
                        id: max_event_id + 1,
                        title: this.params.title,
                        start: this.params.start,
                        end: this.params.end,
                        description: this.params.description,
                        className: this.params.className
                    };
                    this.options.events.push(event);
                }
                this.$refs.fullCalendar.getApi(); //refresh calendar
                this.$bvModal.hide('addEventsModal');
                this.$bvToast.toast('Event saved successfully.', { headerClass: 'd-none', bodyClass: 'toast-success', toaster: 'b-toaster-top-center', autoHideDelay: 1000 });
            },
            setup_draggable() {
                new Draggable(document.querySelector('.fc-view'), {
                    itemSelector: '.fc-event',
                    eventData: function(eventEl) {
                        let event = {
                            title: eventEl.innerText,
                            duration: '01:00'
                        };
                        return event;
                    }
                });
            }
        }
    };
</script>
