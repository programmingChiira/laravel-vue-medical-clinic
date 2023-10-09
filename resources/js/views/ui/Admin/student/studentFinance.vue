<template>
    <div class="layout-px-spacing">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">DataTables</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>HTML5 Export</span></li>
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
                            <b-button variant="primary" class="m-1" @click="export_table('csv')">CSV</b-button>
                            <json-excel class="btn btn-primary m-1" name="table.xls" :fields="excel_columns()" :data="excel_items()">Excel</json-excel>
                            <b-button variant="primary" class="m-1" @click="export_table('print')">Print</b-button>
                            <b-button variant="primary" class="m-1" @click="export_table('pdf')">PDF</b-button>
                        </div>
                        <div class="table-header">
                            <div class="d-flex align-items-center">
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
                            <div class="header-search">
                                <b-input v-model="table_option.search_text" size="sm" placeholder="Search..." />
                                <div class="search-image">
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
                                </div>
                            </div>
                        </div>

                        <b-table
                            ref="basic_table"
                            responsive
                            hover
                            :items="items"
                            :fields="columns"
                            :per-page="table_option.page_size"
                            :current-page="table_option.current_page"
                            :filter="table_option.search_text"
                            sort-by="name"
                            :show-empty="true"
                            @filtered="on_filtered"
                        >
                            <template #cell(thumb)="row">
                                <img :src="require('@/assets/images/' + row.item.thumb)" class="rounded-circle profile-img" alt="avatar" />
                            </template>
                            <template #cell(salary)="row"> ${{ row.item.salary }} </template>
                            <template #cell(action)>
                                <b-button-group>
                                    <b-button variant="dark">Open</b-button>
                                    <b-button-group>
                                        <b-dropdown variant="dark" :right="true" toggle-tag="a" class="custom-dropdown">
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
                                                    class="feather feather-chevron-down"
                                                >
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </template>
                                            <b-dropdown-item>Action</b-dropdown-item>
                                            <b-dropdown-item>Another action</b-dropdown-item>
                                            <b-dropdown-item>Something else here...</b-dropdown-item>
                                            <b-dropdown-divider></b-dropdown-divider>
                                            <b-dropdown-item>Separated link</b-dropdown-item>
                                        </b-dropdown>
                                    </b-button-group>
                                </b-button-group>
                            </template>
                        </b-table>

                        <div class="table-footer">
                            <div class="dataTables_info">Showing {{ meta.total_items ? meta.start_index + 1 : 0 }} to {{ meta.end_index + 1 }} of {{ meta.total_items }}</div>
                            <div class="paginating-container pagination-solid flex-column align-items-right">
                                <b-pagination
                                    v-model="table_option.current_page"
                                    :total-rows="table_option.total_rows"
                                    :per-page="table_option.page_size"
                                    prev-text="Prev"
                                    next-text="Next"
                                    first-text="First"
                                    last-text="Last"
                                    first-class="first"
                                    prev-class="prev"
                                    next-class="next"
                                    last-class="last"
                                    class="rounded"
                                >
                                    <template #first-text>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                                        </svg>
                                    </template>
                                    <template #prev-text>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                        </svg>
                                    </template>
                                    <template #next-text>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </template>
                                    <template #last-text>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                        </svg>
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
    //excel export
    import JsonExcel from 'vue-json-excel';

    //pdf export
    import jsPDF from 'jspdf';
    import 'jspdf-autotable';

    export default {
        metaInfo: { title: 'Bootstrap Export Table' },
        components: { JsonExcel },
        data() {
            return {
                items: [],
                columns: [],
                table_option: { total_rows: 0, current_page: 1, page_size: 10, search_text: '' },
                meta: {}
            };
        },
        watch: {
            table_option: {
                handler: function() {
                    this.get_meta();
                },
                deep: true
            }
        },
        mounted() {
            this.bind_data();
        },
        methods: {
            bind_data() {
                this.columns = [
                    { key: 'thumb', label: 'Profile', thClass: 'text-center w-90' },
                    { key: 'name', label: 'Name', sortable: true },
                    { key: 'position', label: 'Position', sortable: true },
                    { key: 'office', label: 'Office', sortable: true },
                    { key: 'age', label: 'Age', sortable: true },
                    { key: 'start_date', label: 'Start Date', sortable: true },
                    { key: 'salary', label: 'Salary', sortable: true },
                    { key: 'action', label: 'Actions', class: 'actions text-center' }
                ];
                this.items = [
                    { id: 1, thumb: 'boy-1.png', name: 'Tiger Nixon', position: 'System Architect', office: 'Edinburgh', age: 61, start_date: '2011/04/25', salary: '320,800' },
                    { id: 2, thumb: 'boy-1.png', name: 'Garrett Winters', position: 'Accountant', office: 'Tokyo', age: 63, start_date: '2011/07/25', salary: '170,750' },
                    { id: 3, thumb: 'boy.png', name: 'Ashton Cox', position: 'Junior Technical Author', office: 'San Francisco', age: 66, start_date: '2009/01/12', salary: '86,000' },
                    { id: 4, thumb: 'boy-1.png', name: 'Cedric Kelly', position: 'Senior Javascript Developer', office: 'Edinburgh', age: 22, start_date: '2012/03/29', salary: '433,060' },
                    { id: 5, thumb: 'girl-1.png', name: 'Airi Satou', position: 'Accountant', office: 'Tokyo', age: 33, start_date: '2008/11/28', salary: '162,700' },
                    { id: 6, thumb: 'girl-4.png', name: 'Brielle Williamson', position: 'Integration Specialist', office: 'New York', age: 61, start_date: '2012/12/02', salary: '372,000' },
                    { id: 7, thumb: 'boy.png', name: 'Herrod Chandler', position: 'Sales Assistant', office: 'San Francisco', age: 59, start_date: '2012/08/06', salary: '137,500' },
                    { id: 8, thumb: 'girl-4.png', name: 'Rhona Davidson', position: 'Integration Specialist', office: 'Tokyo', age: 55, start_date: '2010/10/14', salary: '327,900' },
                    { id: 9, thumb: 'girl-1.png', name: 'Colleen Hurst', position: 'Javascript Developer', office: 'San Francisco', age: 39, start_date: '2009/09/15', salary: '205,500' },
                    { id: 10, thumb: 'girl-1.png', name: 'Sonya Frost', position: 'Software Engineer', office: 'Edinburgh', age: 23, start_date: '2008/12/13', salary: '103,600' },
                    { id: 11, thumb: 'girl-2.png', name: 'Jena Gaines', position: 'Office Manager', office: 'London', age: 30, start_date: '2008/12/19', salary: '90,560' },
                    { id: 12, thumb: 'girl-3.png', name: 'Quinn Flynn', position: 'Support Lead', office: 'Edinburgh', age: 22, start_date: '2013/03/03', salary: '342,000' },
                    { id: 13, thumb: 'boy.png', name: 'Charde Marshall', position: 'Regional Director', office: 'San Francisco', age: 36, start_date: '2008/10/16', salary: '470,600' },
                    { id: 14, thumb: 'girl-4.png', name: 'Haley Kennedy', position: 'Senior Marketing Designer', office: 'London', age: 43, start_date: '2012/12/18', salary: '313,500' },
                    { id: 15, thumb: 'girl-2.png', name: 'Tatyana Fitzpatrick', position: 'Regional Director', office: 'London', age: 19, start_date: '2010/03/17', salary: '385,750' },
                    { id: 16, thumb: 'boy.png', name: 'Michael Silva', position: 'Marketing Designer', office: 'London', age: 66, start_date: '2012/11/27', salary: '198,500' },
                    { id: 17, thumb: 'boy-2.png', name: 'Paul Byrd', position: 'Chief Financial Officer (CFO)', office: 'New York', age: 64, start_date: '2010/06/09', salary: '725,000' },
                    { id: 18, thumb: 'girl-2.png', name: 'Gloria Little', position: 'Systems Administrator', office: 'New York', age: 59, start_date: '2009/04/10', salary: '237,500' },
                    { id: 19, thumb: 'girl-3.png', name: 'Bradley Greer', position: 'Software Engineer', office: 'London', age: 41, start_date: '2012/10/13', salary: '132,000' },
                    { id: 20, thumb: 'girl-4.png', name: 'Dai Rios', position: 'Personnel Lead', office: 'Edinburgh', age: 35, start_date: '2012/09/26', salary: '217,500' },
                    { id: 21, thumb: 'girl-1.png', name: 'Jenette Caldwell', position: 'Development Lead', office: 'New York', age: 61, start_date: '2011/09/03', salary: '345,000' },
                    { id: 22, thumb: 'boy.png', name: 'Yuri Berry', position: 'Chief Marketing Officer (CMO)', office: 'New York', age: 40, start_date: '2009/06/25', salary: '675,000' },
                    { id: 23, thumb: 'boy-2.png', name: 'Caesar Vance', position: 'Pre-Sales Support', office: 'New York', age: 21, start_date: '2011/12/12', salary: '106,450' },
                    { id: 24, thumb: 'boy.png', name: 'Doris Wilder', position: 'Sales Assistant', office: 'Sidney', age: 23, start_date: '2010/09/20', salary: '85,600' },
                    { id: 25, thumb: 'girl-2.png', name: 'Angelica Ramos', position: 'Chief Executive Officer (CEO)', office: 'London', age: 47, start_date: '2009/10/09', salary: '1,200,000' },
                    { id: 26, thumb: 'boy-2.png', name: 'Gavin Joyce', position: 'Developer', office: 'Edinburgh', age: 42, start_date: '2010/12/22', salary: '92,575' },
                    { id: 27, thumb: 'girl-3.png', name: 'Jennifer Chang', position: 'Regional Director', office: 'Singapore', age: 28, start_date: '2010/11/14', salary: '57,650' }
                ];

                this.table_option.total_rows = this.items.length;
                this.get_meta();
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
                    'Start Date': 'start_date',
                    Salary: 'salary'
                };
            },
            excel_items() {
                return this.items;
            }
        }
    };
</script>
