<template>
    <div class="layout-px-spacing">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Administrator</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">teachers</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>deactivated</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="row layout-top-spacing">
            <div class="col-12 layout-spacing">
                <div class="panel br-6 ">
                    <div class="custom-table panel-body p-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-sm-start px-3 pt-3 pb-0">
                            <router-link to="/ui/adminTeacherProfiles">
                                <b-button variant="success" class="ml-2">
                                    Active profiles
                                </b-button>
                            </router-link>
                        </div>

                        <div class="table-header">
                            <div class="d-flex align-items-center">
                                <div
                                    class="d-flex flex-wrap justify-content-center justify-content-sm-start px-3 pt-3 pb-0">
                                    <b-button variant="primary" class="m-1" @click="export_table('csv')">CSV</b-button>
                                    <json-excel class="btn btn-primary m-1" name="table.xls" :fields="excel_columns()"
                                        :data="excel_items()">Excel</json-excel>
                                    <b-button variant="primary" class="m-1" @click="export_table('print')">Print</b-button>
                                    <b-button variant="primary" class="m-1" @click="export_table('pdf')">PDF</b-button>
                                </div>
                            </div>
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
                            :filter="table_option.search_text" sort-by="name" :show-empty="true" @filtered="on_filtered">

                            <template #cell(first_name)="row">
                                {{ row.value }}
                            </template>
                            <template #cell(middle_name)="row">
                                {{ row.value }}
                            </template>
                            <template #cell(last_name)="row">
                                {{ row.value }}
                            </template>
                            <template #cell(teacher_tsc_no)="row">
                                {{ row.value }}
                            </template>
                            <template #cell(email)="row">
                                {{ row.value }}
                            </template>
                            <template #cell(phone_no)="row">
                                {{ row.value }}
                            </template>
                            <template #cell(gender)="row">
                                {{ row.value }}
                            </template>
                            <template #cell(user_account_status)="row">
                                <b-badge variant="danger" class="inv-status">{{ row.value }}</b-badge>
                            </template>

                            <template #cell(action)="row">
                                <b-button-group>
                                    <b-dropdown variant="dark" :right="true" toggle-tag="a" class="custom-dropdown">
                                        <template #button-content>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </template>
                                        <b-dropdown-item>
                                            <button @click="activateUserAccount(row.item.delete)"
                                                style="background-color: rgba(0, 0, 0, 0); color: #e7515a; border: none; outline: none;">
                                                <svg style="width: 16px;" xmlns="http://www.w3.org/2000/svg" width="17"
                                                    height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                                Activate
                                            </button>
                                        </b-dropdown-item>
                                    </b-dropdown>
                                </b-button-group>
                            </template>


                        </b-table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.hidden-input {
    display: none;
}

.select2 .multiselect__option--highlight {
    background: #fff;
    color: #4361ee;
}

.select2 .multiselect__option--selected {
    background-color: rgba(27, 85, 226, 0.23921568627450981);
    color: #4361ee;
    font-weight: normal;
}

.select2 .multiselect__option--disabled {
    background: inherit !important;
}

.select2 .multiselect__tag {
    color: #000;
    background: #e4e4e4;
}

.select2 .multiselect__tag-icon:after {
    color: #000 !important;
}

.select2 .multiselect__tag-icon:focus,
.select2 .multiselect__tag-icon:hover {
    background: inherit;
}
</style>

<script>
import axios from 'axios';
//excel export
import JsonExcel from 'vue-json-excel';

//pdf export
import jsPDF from 'jspdf';
import 'jspdf-autotable';
import '@/assets/sass/components/custom-modal.scss';
import Multiselect from 'vue-multiselect'
import 'vue-multiselect/dist/vue-multiselect.min.css';

export default {
    metaInfo: { title: 'Teacher registration :- Intelligent system' },
    components: {
        JsonExcel,
        Multiselect
    },
    data() {
        return {
            items: [],
            columns: [],
            table_option: { total_rows: 0, current_page: 1, page_size: 10, search_text: '' },
            meta: {},
            fields: {},
            isSubmitting: false,
            code_arr: [],
            departmentInputs: [],
            selectedDepartments: [],
            selectedDepartmentRoles: {},
            selectDepartmentOptions: [],
            courseInputs: [],
            selectedCourses: [],
            selectedCourseYears: {},
            selectCourseOptions: [],
            classInputs: [],
            selectedClasses: [],
            selectedClassYears: {},
            selectClassOptions: [],
            streamInputs: [],
            selectedStreams: [],
            selectedStreamYears: {},
            selectStreamOptions: [],
            selectedDepartmentSlugs: {},
            selectedCourseSlugs: {},
            settings: {},
            first_name: '',
            middle_name: '',
            last_name: '',
            phone_no: '',
            email: '',
            teacher_tsc_no: '',
            gender: '',
            departments: '',
            department_roles: '',
            courses: '',
            class_years: '',
            department_role: '',
            password: '',
            user_role: '',
            user_account_status: '',
            slugValue: '',
            user: [],
            currentPage: 1,
            lastPage: 1,
        };
    },

    created() {
        this.generateSlugValue();
    },

    watch: {
        selectedDepartments: {
            handler(newDepartments) {
                for (const department in this.selectedDepartmentRoles) {
                    if (!newDepartments.includes(department)) {
                        this.selectedDepartmentRoles[department] = [];
                        delete this.selectedDepartmentRoles[department];
                    }
                }
            },
            deep: true,
        },

        selectedClasses: {
            handler(newClasses) {
                newClasses.forEach((classItem) => {
                    if (this.selectedClassYears[classItem]) {
                        this.selectedClassYears[classItem] = [];
                    }
                });
            },
            deep: true,
        },

        selectedStreams: {
            handler(newStreams) {
                newStreams.forEach((streamItem) => {
                    if (this.selectedStreamYears[streamItem]) {
                        this.selectedStreamYears[streamItem] = [];
                    }
                });
            },
            deep: true,
        },

        selectedCourses: {
            handler(newCourses, oldCourses) {
                for (const deselectedCourse of oldCourses.filter(course => !newCourses.includes(course))) {
                    delete this.selectedClassYears[deselectedCourse];
                }
            },
            deep: true,
        },
    },

    mounted() {
        this.bind_data();
        this.fetchDepartment();
        this.fetchCourse();
        this.fetchClass();
        this.fetchStream();
        this.fetchSettings();
        this.fetchData(this.table_option.current_page);
        this.fetchUsers();
    },

    methods: {
        addDepartmentTag(newDepartmentTag) {
            this.selectDepartmentOptions.push(newDepartmentTag);
            this.selectedDepartments.push(newDepartmentTag);
            this.selectedDepartmentRoles[newDepartmentTag] = [];
            this.selectedDepartmentRoles[newDepartmentTag].push(''); // Add an empty role for the selected department
        },

        addCourseTag(newCourseTag) {
            this.selectCourseOptions.push(newCourseTag);
            this.selectedCourses.push(newCourseTag);
            this.selectedCourseYears[newCourseTag] = [];
            this.selectedCourseYears[newCourseTag].push(''); // Add an empty role for the selected department
        },

        addClassTag(newClassTag) {
            this.selectClassOptions.push(newClassTag);
            this.selectedClasss.push(newClassTag);
            this.selectedClassYears[newClassTag] = [];
            this.selectedClassYears[newClassTag].push(''); // Add an empty role for the selected department
        },

        addStreamTag(newStreamTag) {
            this.selectStreamOptions.push(newStreamTag);
            this.selectedStreams.push(newStreamTag);
            this.selectedStreamYears[newStreamTag] = [];
            this.selectedStreamYears[newStreamTag].push(''); // Add an empty role for the selected department
        },

        toggleCode(name) {
            if (this.code_arr.includes(name)) {
                this.code_arr = this.code_arr.filter(d => d != name);
            }
            else {
                this.code_arr.push(name);
            }
        },

        addDepartmentTag(newDepartmentTag) {
            this.selectDepartmentOptions.push(newDepartmentTag)
            this.departmentInputs['departmentInput4'].push(newDepartmentTag)
        },

        addCourseTag(newCourseTag) {
            this.selectCourseOptions.push(newCourseTag)
            this.courseInputs['courseInput4'].push(newCourseTag)
        },

        addClassTag(newClassTag) {
            this.selectClassOptions.push(newClassTag)
            this.classInputs['classInput4'].push(newClassTag)
        },

        addStreamTag(newStreamTag) {
            this.selectStreamOptions.push(newStreamTag)
            this.streamInputs['streamInput4'].push(newStreamTag)
        },

        fetchDepartment() {
            axios
                .get('/api/institutionDepartments')
                .then((response) => {
                    this.departments = response.data.data;
                    this.selectDepartmentOptions = this.departments.map((department) => {
                        return department.department;
                    });

                    this.departments.forEach((department) => {
                        this.selectedDepartmentSlugs[department.department] = department.slug;
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        fetchCourse() {
            axios
                .get('/api/institutionCourses')
                .then((response) => {
                    this.courses = response.data.data;
                    this.selectCourseOptions = this.courses.map((course) => {
                        return course.course;
                    });

                    this.courses.forEach((course) => {
                        this.selectedCourseSlugs[course.course] = course.slug;
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        fetchClass() {
            axios
                .get('/api/institutionClasses')
                .then((response) => {
                    this.classes = response.data.data;
                    this.selectClassOptions = this.classes.map((classItem) => {
                        return classItem.class; // Use the correct property name here
                    });

                    this.classes.forEach((classItem) => {
                        this.selectedClassSlugs[classItem.class] = classItem.slug;
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        fetchStream() {
            axios
                .get('/api/institutionStreams')
                .then((response) => {
                    this.streams = response.data.data;
                    this.selectStreamOptions = this.streams.map((streamItem) => {
                        return streamItem.stream; // Use the correct property name here
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        },


        fetchSettings() {
            axios.get(`/api/institutionGeneralSettings`)
                .then((response) => {
                    this.settings = response.data.data;
                    if (this.settings.length > 0) {

                        const settingsData = this.settings[0];
                        this.institution_type = settingsData.institution_type;
                    }
                }).catch((error) => {
                    console.error(error);
                });
        },

        fetchUsers(page) {
            axios
                .get('/api/inactiveTeacherList?page=' + page)
                .then((response) => {
                    this.user = response.data.data;
                    this.currentPage = response.data.current_page;
                    this.lastPage = response.data.last_page;

                    this.items = this.user.map((userData) => {
                        return {
                            id: userData.id,
                            first_name: userData.first_name,
                            middle_name: userData.middle_name,
                            last_name: userData.last_name,
                            email: userData.email,
                            phone_no: userData.phone_no,
                            student_upi_no: userData.student_upi_no,
                            user_role: userData.user_role,
                            teacher_tsc_no: userData.teacher_tsc_no,
                            gender: userData.gender,
                            user_account_status: userData.user_account_status,
                            view: userData.slug,
                            edit: userData.slug,
                            delete: userData.id,
                        };
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        fetchData(page = 1) {
            axios
                .get(`/api/inactiveTeacherList?page=${page}`)
                .then((response) => {
                    this.items = response.data.data.map((userData) => {
                        return {
                            id: userData.id,
                            first_name: userData.first_name,
                            middle_name: userData.middle_name,
                            last_name: userData.last_name,
                            email: userData.email,
                            phone_no: userData.phone_no,
                            teacher_tsc_no: userData.teacher_tsc_no,
                            user_role: userData.user_role,
                            gender: userData.gender,
                            user_account_status: userData.user_account_status,
                            view: userData.slug,
                            edit: userData.slug,
                            delete: userData.id,
                        };
                    });

                    this.currentPage = response.data.current_page;
                    this.lastPage = response.data.last_page;
                })
                .catch((error) => {
                    console.error(error);
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

        bind_data() {

            this.columns = [
                { key: 'first_name', label: 'First(name)', sortable: true },
                { key: 'middle_name', label: 'Middle(name)', sortable: true },
                { key: 'last_name', label: 'Sur(name)', sortable: true },
                { key: 'teacher_tsc_no', label: 'T.S.C(number)', sortable: true },
                { key: 'email', label: 'Email', sortable: true },
                { key: 'phone_no', label: 'Phone', sortable: true },
                { key: 'gender', label: 'Gender', sortable: true },
                { key: 'user_account_status', label: 'Status', sortable: true },
                { key: 'action', label: 'Actions', class: 'actions text-center' },
            ];

            this.items = this.user.map((item, index) => {
                return {
                    first_name: item.first_name,
                    middle_name: item.middle_name,
                    last_name: item.last_name,
                    teacher_tsc_no: item.teacher_tsc_no,
                    email: item.email,
                    phone_no: item.phone_no,
                    gender: item.gender,
                    user_account_status: item.user_account_status,
                    view: item.slug,
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
        get_meta() {
            var startPage;
            var endPage;
            var totalPages = this.table_option.page_size < 1 ? 1 : Math.ceil(this.table_option.total_rows / this.table_option.page_size);
            totalPages = Math.max(totalPages || 0, 1);

            var maxSize = 5;
            var isMaxSized = typeof maxSize !== 'undefined' && maxSize < totalPages;
            if (isMaxSized) {
                startPage = Math.max(this.table_option.current_page - Math.floor(maxSize / 2), 1);
                endPage = startPage + maxSize - 1;

                if (endPage > totalPages) {
                    endPage = totalPages;
                    startPage = endPage - maxSize + 1;
                }
            } else {
                startPage = 1;
                endPage = totalPages;
            }
            let startIndex = (this.table_option.current_page - 1) * this.table_option.page_size;
            let endIndex = Math.min(startIndex + this.table_option.page_size - 1, this.table_option.total_rows - 1);

            var pages = Array.from(Array(endPage + 1 - startPage).keys()).map(i => startPage + i);
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

        //Export pdf/csv/print
        export_table(type) {
            let cols = this.columns.filter(d => d.key != 'thumb' && d.key != 'action');
            let records = this.items;
            let filename = 'table';

            if (type == 'csv') {
                let coldelimiter = ',';
                let linedelimiter = '\n';
                let result = cols
                    .map(d => {
                        return d.label;
                    })
                    .join(coldelimiter);
                result += linedelimiter;
                records.map(item => {
                    cols.map((d, index) => {
                        if (index > 0) {
                            result += coldelimiter;
                        }
                        let val = item[d.key] ? item[d.key] : '';
                        result += val;
                    });
                    result += linedelimiter;
                });

                if (result == null) return;
                if (!result.match(/^data:text\/csv/i) && !window.navigator.msSaveOrOpenBlob) {
                    var data = 'data:application/csv;charset=utf-8,' + encodeURIComponent(result);
                    var link = document.createElement('a');
                    link.setAttribute('href', data);
                    link.setAttribute('download', filename + '.csv');
                    link.click();
                } else {
                    var blob = new Blob([result]);
                    if (window.navigator.msSaveOrOpenBlob) {
                        window.navigator.msSaveBlob(blob, filename + '.csv');
                    }
                }
            } else if (type == 'print') {
                var rowhtml = '<p>' + filename + '</p>';
                rowhtml +=
                    '<table style="width: 100%; " cellpadding="0" cellcpacing="0"><thead><tr style="color: #515365; background: #eff5ff; -webkit-print-color-adjust: exact; print-color-adjust: exact; "> ';
                cols.map(d => {
                    rowhtml += '<th>' + d['label'] + '</th>';
                });
                rowhtml += '</tr></thead>';
                rowhtml += '<tbody>';

                records.map(item => {
                    rowhtml += '<tr>';
                    cols.map(d => {
                        let val = item[d.key] ? item[d.key] : '';
                        rowhtml += '<td>' + val + '</td>';
                    });
                    rowhtml += '</tr>';
                });
                rowhtml +=
                    '<style>body {font-family:Arial; color:#495057;}p{text-align:center;font-size:18px;font-weight:bold;margin:15px;}table{ border-collapse: collapse; border-spacing: 0; }th,td{font-size:12px;text-align:left;padding: 4px;}th{padding:8px 4px;}tr:nth-child(2n-1){background:#f7f7f7; }</style>';
                rowhtml += '</tbody></table>';
                var winPrint = window.open('', '', 'left=0,top=0,width=1000,height=600,toolbar=0,scrollbars=0,status=0');
                winPrint.document.write('<title>Print</title>' + rowhtml);
                winPrint.document.close();
                winPrint.focus();
                winPrint.print();
                winPrint.close();
            } else if (type == 'pdf') {
                cols = cols.map(d => {
                    return { header: d.label, dataKey: d.key };
                });
                const doc = new jsPDF('l', 'pt', cols.length > 10 ? 'a3' : 'a4');
                doc.autoTable({
                    headStyles: { fillColor: '#eff5ff', textColor: '#515365' },
                    columns: cols,
                    body: records,
                    styles: { overflow: 'linebreak' },
                    pageBreak: 'auto',
                    margin: { top: 45 },
                    didDrawPage: () => {
                        doc.text('Export Table', cols.length > 10 ? 535 : 365, 30);
                    }
                });
                doc.save(filename + '.pdf');
            }
        },
        excel_columns() {
            return {
                Name: 'name',
                Position: 'position',
                Office: 'office',
                Age: 'age',
                Salary: 'salary'
            };
        },
        excel_items() {
            return this.items;
        },

        async submitTeacherRegistration() {
            this.isSubmitting = true;

            try {
                const selectedDepartmentSlugs = {};
                for (const department of this.selectedDepartments) {
                    selectedDepartmentSlugs[department] = this.selectedDepartmentSlugs[department];
                }

                const selectedCourseSlugs = {};
                for (const course of this.selectedCourses) {
                    selectedCourseSlugs[course] = this.selectedCourseSlugs[course];
                }

                const formData = {
                    uniqueId: this.slugValue,
                    first_name: this.first_name,
                    middle_name: this.middle_name,
                    last_name: this.last_name,
                    phone_no: this.phone_no,
                    email: this.email,
                    teacher_tsc_no: this.teacher_tsc_no,
                    gender: this.gender,
                    departments: this.selectedDepartments,
                    department_roles: this.selectedDepartmentRoles,
                    department_slug: selectedDepartmentSlugs,
                    courses: this.selectedCourses,
                    course_slug: selectedCourseSlugs,
                    class_stream: this.selectedClassYears,
                    password: '1234567890',
                    user_role: 'Teacher',
                    user_account_status: 'Active',
                };

                console.log(formData);
                const response = await axios.post('/api/teacherRegistration', formData);
                console.log('Registration successful:', response.data);

                this.fetchDepartment();
                this.fetchCourse();
                this.fetchClass();
                this.fetchStream();
                this.fetchSettings();
                this.fetchUsers();

                // Clear form fields and regenerate slug
                this.generateSlugValue();
                this.first_name = '';
                this.middle_name = '';
                this.last_name = '';
                this.phone_no = '';
                this.email = '';
                this.teacher_tsc_no = '';
                this.selectedDepartments = [];
                this.selectedDepartmentRoles = {};
                this.selectedDepartmentSlugs = {};
                this.selectedCourses = [];
                this.selectedCourseSlugs = {};
                this.selectedClassYears = {};
                this.selectedStreams = [];
                this.selectedStreamSlugs = {};
            } catch (error) {
                console.error('Registration failed:', error);
            } finally {
                this.isSubmitting = false;
            }
        },

        async activateUserAccount(userId) {
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
                    confirmButtonText: 'Yes, Activate!',
                    cancelButtonText: 'No, cancel',
                    reverseButtons: true,
                    padding: '2em'
                })
                .then(async (result) => { // Wrap the callback function in "async"
                    if (result.value) {
                        swalWithBootstrapButtons.fire('Activation successful!', 'Account has been activated.', 'success');

                        this.isSubmitting = true;

                        try {
                            const formData = {
                                user_account_status: 'Active',
                            };

                            console.log(formData);
                            const response = await axios.post(`/api/deactivateTeacherAccount/${userId}`, formData);
                            console.log('Activation successful:', response.data);

                            this.fetchUsers();

                        } catch (error) {
                            console.error('Activation failed:', error);
                        } finally {
                            this.isSubmitting = false;
                        }
                    } else if (result.dismiss === this.$swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire('Cancelled');
                    }
                });
        },

        generateSlugValue() {
            let result = "";
            let characters =
                "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            let charactersLength = characters.length;
            for (let i = 0; i < 100; i++) {
                result += characters.charAt(
                    Math.floor(Math.random() * charactersLength)
                );
            }
            this.slugValue = result;
        },

    },

    computed: {
        selectedDepartmentValue: {
            get() {
                let result = "";
                return (this.slug = result + "");
            },
            set(value) {
                this.slug = value;
            },
        },

        generateFormStreamOptions() {
            return (course) => {
                const options = [];
                for (const classOption of this.selectClassOptions) {
                    for (const streamOption of this.selectStreamOptions) {
                        options.push(`Form ${classOption} ${streamOption} - ${course}`);
                    }
                }
                return options;
            };
        },

        generateClassStreamOptions() {
            return (course) => {
                const options = [];
                for (const classOption of this.selectClassOptions) {
                    for (const streamOption of this.selectStreamOptions) {
                        options.push(`Form ${classOption} ${streamOption} - ${course}`);
                    }
                }
                return options;
            };
        },
    }
};
</script>
