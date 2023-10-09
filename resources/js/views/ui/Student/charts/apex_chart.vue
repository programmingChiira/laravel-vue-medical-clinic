<template>
    <div class="container">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Charts</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Apex</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="container">
            <div class="nav sidenav">
                <scrollactive class="sidenav-content" tag="div" active-class="active" :offset="120" :modifyUrl="false" :highlightFirstItem="true">
                    <a href="#chartLine" class="nav-link scrollactive-item">Line</a>
                    <a href="#chartArea" class="nav-link scrollactive-item">Area</a>
                    <a href="#chartColumn" class="nav-link scrollactive-item">Column</a>
                    <a href="#chartColumnStacked" class="nav-link scrollactive-item">Column Stacked</a>
                    <a href="#chartBar" class="nav-link scrollactive-item">Bar</a>
                    <a href="#chartMixed" class="nav-link scrollactive-item">Mixed</a>
                    <a href="#chartDonut" class="nav-link scrollactive-item">Donut</a>
                    <a href="#chartRadial" class="nav-link scrollactive-item">Radial</a>
                </scrollactive>
            </div>
            <div class="row layout-top-spacing">
                <div class="col-12">
                    <div class="alert alert-arrow-left alert-icon-left alert-light-info mb-0 text-break">
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
                            class="feather feather-bell"
                        >
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                        Documentation:
                        <a target="_blank" href="https://www.npmjs.com/package/vue-apexcharts" class="text-info">
                            https://www.npmjs.com/package/vue-apexcharts
                        </a>
                    </div>
                </div>
            </div>

            <div class="row" id="cancel-row">
                <div id="chartLine" class="col-xl-12 layout-top-spacing layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Apex (Simple)</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <apexchart v-if="options_1" height="350" type="line" :options="options_1" :series="series_1"></apexchart>

                            <div class="code-section-container show-code">
                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code1')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code1')" class="code-section text-left">
                                    <highlight>
                                        <pre>
===html===
&lt;apexchart height=&quot;350&quot; type=&quot;line&quot; :options=&quot;options_1&quot; :series=&quot;series_1&quot;&gt;&lt;/apexchart&gt;

===code===
options_1: {
    chart: { toolbar: { show: false }, zoom: { enabled: false }, }, dataLabels: { enabled: false }, stroke: { curve: 'straight' },
    title: { text: 'Product Trends by Month', align: 'left', style: { fontWeight: 'normal' } },
    grid: { row: { colors: ['#f1f2f3', 'transparent'], opacity: 0.5 } },
    xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'] },
},
series_1: [{ name: 'Desktops', data: [10, 41, 35, 51, 49, 62, 69, 91, 148] }],
</pre
                                        >
                                    </highlight>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="chartArea" class="col-xl-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Simple Area</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <apexchart v-if="options_2" height="350" type="area" :options="options_2" :series="series_2"></apexchart>

                            <div class="code-section-container show-code">
                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code2')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code2')" class="code-section text-left">
                                    <highlight>
                                        <pre>
===html===
&lt;apexchart height=&quot;350&quot; type=&quot;area&quot; :options=&quot;options_2&quot; :series=&quot;series_2&quot;&gt;&lt;/apexchart&gt;

===code===
options_2: {
    chart: { toolbar: { show: false } }, dataLabels: { enabled: false }, stroke: { curve: 'smooth' },
    xaxis: {
        type: 'datetime',
        categories: [&quot;2018-09-19T00:00:00&quot;, &quot;2018-09-19T01:30:00&quot;, &quot;2018-09-19T02:30:00&quot;, &quot;2018-09-19T03:30:00&quot;, &quot;2018-09-19T04:30:00&quot;, &quot;2018-09-19T05:30:00&quot;, &quot;2018-09-19T06:30:00&quot;],
    },
    tooltip: { x: { format: 'dd/MM/yy HH:mm' }, }
},
series_2: [{ name: 'series1', data: [31, 40, 28, 51, 42, 109, 100] }, { name: 'series2', data: [11, 32, 45, 32, 34, 52, 41] }],
</pre
                                        >
                                    </highlight>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="chartColumn" class="col-xl-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Simple Column</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <apexchart v-if="options_3" height="350" type="bar" :options="options_3" :series="series_3"></apexchart>

                            <div class="code-section-container show-code">
                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code3')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code3')" class="code-section text-left">
                                    <highlight>
                                        <pre>
===html===
&lt;apexchart height=&quot;350&quot; type=&quot;bar&quot; :options=&quot;options_3&quot; :series=&quot;series_3&quot;&gt;&lt;/apexchart&gt;

===code===
options_3: {
    chart: { toolbar: { show: false } }, dataLabels: { enabled: false }, stroke: { show: true, width: 2, colors: ['transparent'] },
    plotOptions: { bar: { horizontal: false, columnWidth: '55%', borderRadius: 8 }, },
    xaxis: { categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'], },
    yaxis: { title: { text: '$ (thousands)' } },
    fill: { opacity: 1 },
    tooltip: { y: { formatter: function (val) { return &quot;$ &quot; + val + &quot; thousands&quot; } } }
},
series_3: [{ name: 'Net Profit', data: [44, 55, 57, 56, 61, 58, 63, 60, 66] }, { name: 'Revenue', data: [76, 85, 101, 98, 87, 105, 91, 114, 94] }],
</pre
                                        >
                                    </highlight>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="chartColumnStacked" class="col-xl-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Simple Column Stacked</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <apexchart v-if="options_4" height="350" type="bar" :options="options_4" :series="series_4"></apexchart>

                            <div class="code-section-container show-code">
                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code4')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code4')" class="code-section text-left">
                                    <highlight>
                                        <pre>
===html===
&lt;apexchart height=&quot;350&quot; type=&quot;bar&quot; :options=&quot;options_4&quot; :series=&quot;series_4&quot;&gt;&lt;/apexchart&gt;

===code===
options_4: {
    chart: { stacked: true, toolbar: { show: false } },
    responsive: [{ breakpoint: 480, options: { legend: { position: 'bottom', offsetX: -10, offsetY: 5 } } }],
    plotOptions: { bar: { horizontal: false }, },
    xaxis: { type: 'datetime', categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT', '01/05/2011 GMT', '01/06/2011 GMT'], },
    fill: { opacity: 1 },
    legend: { position: 'right', offsetY: 40 },
},
series_4: [
    { name: 'PRODUCT A', data: [44, 55, 41, 67, 22, 43] },
    { name: 'PRODUCT B', data: [13, 23, 20, 8, 13, 27] },
    { name: 'PRODUCT C', data: [11, 17, 15, 15, 21, 14] },
    { name: 'PRODUCT D', data: [21, 7, 25, 13, 22, 8] }
],
</pre
                                        >
                                    </highlight>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="chartBar" class="col-xl-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Simple Bar</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <apexchart v-if="options_5" height="350" type="bar" :options="options_5" :series="series_5"></apexchart>

                            <div class="code-section-container show-code">
                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code5')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code5')" class="code-section text-left">
                                    <highlight>
                                        <pre>
===html===
&lt;apexchart height=&quot;350&quot; type=&quot;bar&quot; :options=&quot;options_5&quot; :series=&quot;series_5&quot;&gt;&lt;/apexchart&gt;

===code===
options_5: {
    chart: { toolbar: { show: false } }, dataLabels: { enabled: false },
    plotOptions: { bar: { horizontal: true }, },
    xaxis: { categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan', 'United States', 'China', 'Germany'], },
},
series_5: [{ data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380] }],
</pre
                                        >
                                    </highlight>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="chartMixed" class="col-xl-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Mixed</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <apexchart v-if="options_6" height="350" type="line" :options="options_6" :series="series_6"></apexchart>

                            <div class="code-section-container show-code">
                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code6')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code6')" class="code-section text-left">
                                    <highlight>
                                        <pre>
===html===
&lt;apexchart height=&quot;350&quot; type=&quot;line&quot; :options=&quot;options_6&quot; :series=&quot;series_6&quot;&gt;&lt;/apexchart&gt;

===code===
options_6: {
    chart: { toolbar: { show: false } }, dataLabels: { enabled: false }, stroke: { width: [0, 4] },
    title: { text: 'Traffic Sources', align: 'left', style: { fontWeight: 'normal' } },
    labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
    xaxis: { type: 'datetime' },
    yaxis: [{ title: { text: 'Website Blog' } }, { opposite: true, title: { text: 'Social Media' } }]
},
series_6: [
    { name: 'Website Blog', type: 'column', data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160] },
    { name: 'Social Media', type: 'line', data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16] }
],
</pre
                                        >
                                    </highlight>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="chartDonut" class="col-xl-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Donut</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <apexchart v-if="options_7" height="350" type="donut" :options="options_7" :series="series_7"></apexchart>

                            <div class="code-section-container show-code">
                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code7')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code7')" class="code-section text-left">
                                    <highlight>
                                        <pre>
===html===
&lt;apexchart height=&quot;350&quot; type=&quot;donut&quot; :options=&quot;options_7&quot; :series=&quot;series_7&quot;&gt;&lt;/apexchart&gt;

===code===
options_7: {
    chart: { toolbar: { show: false } },
    responsive: [{ breakpoint: 480, options: { chart: { width: 200 }, legend: { position: 'bottom' } } }]
},
series_7: [44, 55, 41, 17],
</pre
                                        >
                                    </highlight>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="chartRadial" class="col-xl-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Radial</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <apexchart v-if="options_8" height="350" type="radialBar" :options="options_8" :series="series_8"></apexchart>

                            <div class="code-section-container show-code">
                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code8')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code8')" class="code-section text-left">
                                    <highlight>
                                        <pre>
===html===
&lt;apexchart height=&quot;350&quot; type=&quot;radialBar&quot; :options=&quot;options_8&quot; :series=&quot;series_8&quot;&gt;&lt;/apexchart&gt;

===code===
options_8: {
    chart: { toolbar: { show: false } },
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: { fontSize: '22px' },
                value: { fontSize: '16px' },
                total: { show: true, label: 'Total', formatter: function () { return 249 } }
            }
        }
    },
    labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
},
series_8: [44, 55, 67, 83],
</pre
                                        >
                                    </highlight>
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
    import Vue from 'vue';
    import VueApexCharts from 'vue-apexcharts';
    Vue.use(VueApexCharts);
    Vue.component('apexchart', VueApexCharts);

    import '@/assets/sass/scrollspyNav.scss';
    import highlight from '@/components/plugins/highlight.vue';

    export default {
        metaInfo: { title: 'Apex Chart' },
        components: {
            highlight
        },
        data() {
            return {
                code_arr: [],
                //Simple Line
                series_1: [{ name: 'Desktops', data: [10, 41, 35, 51, 49, 62, 69, 91, 148] }],

                //Simple Area
                series_2: [
                    { name: 'series1', data: [31, 40, 28, 51, 42, 109, 100] },
                    { name: 'series2', data: [11, 32, 45, 32, 34, 52, 41] }
                ],

                //Simple Column
                series_3: [
                    { name: 'Net Profit', data: [44, 55, 57, 56, 61, 58, 63, 60, 66] },
                    { name: 'Revenue', data: [76, 85, 101, 98, 87, 105, 91, 114, 94] }
                ],

                //Simple Column Stacked
                series_4: [
                    { name: 'PRODUCT A', data: [44, 55, 41, 67, 22, 43] },
                    { name: 'PRODUCT B', data: [13, 23, 20, 8, 13, 27] },
                    { name: 'PRODUCT C', data: [11, 17, 15, 15, 21, 14] },
                    { name: 'PRODUCT D', data: [21, 7, 25, 13, 22, 8] }
                ],

                //Simple Bar
                series_5: [{ data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380] }],

                //Mixed
                series_6: [
                    { name: 'Website Blog', type: 'column', data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160] },
                    { name: 'Social Media', type: 'line', data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16] }
                ],

                //Donut
                series_7: [44, 55, 41, 17],

                //Radial
                series_8: [44, 55, 67, 83]
            };
        },
        computed: {
            //Simple Line
            options_1() {
                const is_dark = this.$store.state.is_dark_mode;
                return {
                    chart: { toolbar: { show: false }, zoom: { enabled: false } },
                    dataLabels: { enabled: false },
                    stroke: { curve: 'straight' },
                    title: { text: 'Product Trends by Month', align: 'left', style: { fontWeight: 'normal' } },
                    grid: { row: { colors: [is_dark ? '#3b3f5c' : '#f1f2f3', 'transparent'], opacity: 0.5 }, borderColor: is_dark ? '#191e3a' : '#e0e6ed' },
                    xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'] },
                    tooltip: { theme: is_dark ? 'dark' : 'light' }
                };
            },

            //Simple Area
            options_2() {
                const is_dark = this.$store.state.is_dark_mode;
                return {
                    chart: { toolbar: { show: false } },
                    dataLabels: { enabled: false },
                    stroke: { curve: 'smooth' },
                    xaxis: {
                        type: 'datetime',
                        categories: ['2018-09-19T00:00:00', '2018-09-19T01:30:00', '2018-09-19T02:30:00', '2018-09-19T03:30:00', '2018-09-19T04:30:00', '2018-09-19T05:30:00', '2018-09-19T06:30:00']
                    },
                    grid: { borderColor: is_dark ? '#191e3a' : '#e0e6ed' },
                    tooltip: { theme: is_dark ? 'dark' : 'light', x: { format: 'dd/MM/yy HH:mm' } }
                };
            },

            //Simple Column
            options_3() {
                const is_dark = this.$store.state.is_dark_mode;
                return {
                    chart: { toolbar: { show: false } },
                    dataLabels: { enabled: false },
                    stroke: { show: true, width: 2, colors: ['transparent'] },
                    plotOptions: { bar: { horizontal: false, columnWidth: '55%', borderRadius: 8 } },
                    xaxis: { categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'] },
                    yaxis: { title: { text: '$ (thousands)', style: { fontWeight: 'normal' } } },
                    grid: { borderColor: is_dark ? '#191e3a' : '#e0e6ed' },
                    fill: { opacity: 1 },
                    tooltip: {
                        theme: is_dark ? 'dark' : 'light',
                        y: {
                            formatter: function(val) {
                                return '$ ' + val + ' thousands';
                            }
                        }
                    }
                };
            },

            //Simple Column Stacked
            options_4() {
                const is_dark = this.$store.state.is_dark_mode;
                return {
                    chart: { stacked: true, toolbar: { show: false } },
                    responsive: [{ breakpoint: 480, options: { legend: { position: 'bottom', offsetX: -10, offsetY: 5 } } }],
                    plotOptions: { bar: { horizontal: false } },
                    xaxis: { type: 'datetime', categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT', '01/05/2011 GMT', '01/06/2011 GMT'] },
                    grid: { borderColor: is_dark ? '#191e3a' : '#e0e6ed' },
                    fill: { opacity: 1 },
                    legend: { position: 'right', offsetY: 40 },
                    tooltip: { theme: is_dark ? 'dark' : 'light' }
                };
            },

            //Simple Bar
            options_5() {
                const is_dark = this.$store.state.is_dark_mode;
                return {
                    chart: { toolbar: { show: false } },
                    dataLabels: { enabled: false },
                    plotOptions: { bar: { horizontal: true } },
                    xaxis: { categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan', 'United States', 'China', 'Germany'] },
                    grid: { borderColor: is_dark ? '#191e3a' : '#e0e6ed' },
                    tooltip: { theme: is_dark ? 'dark' : 'light' }
                };
            },

            //Mixed
            options_6() {
                const is_dark = this.$store.state.is_dark_mode;
                return {
                    chart: { toolbar: { show: false } },
                    dataLabels: { enabled: false },
                    stroke: { width: [0, 4] },
                    title: { text: 'Traffic Sources', align: 'left', style: { fontWeight: 'normal' } },
                    labels: [
                        '01 Jan 2001',
                        '02 Jan 2001',
                        '03 Jan 2001',
                        '04 Jan 2001',
                        '05 Jan 2001',
                        '06 Jan 2001',
                        '07 Jan 2001',
                        '08 Jan 2001',
                        '09 Jan 2001',
                        '10 Jan 2001',
                        '11 Jan 2001',
                        '12 Jan 2001'
                    ],
                    xaxis: { type: 'datetime' },
                    yaxis: [
                        { title: { text: 'Website Blog' }, style: { fontWeight: 'normal' } },
                        { opposite: true, title: { text: 'Social Media' } }
                    ],
                    grid: { borderColor: is_dark ? '#191e3a' : '#e0e6ed' },
                    tooltip: { theme: is_dark ? 'dark' : 'light' }
                };
            },

            //Donut
            options_7() {
                const is_dark = this.$store.state.is_dark_mode;
                return {
                    chart: { toolbar: { show: false } },
                    stroke: { colors: is_dark ? '#191e3a' : 'transparent' },
                    responsive: [{ breakpoint: 480, options: { chart: { width: 200 }, legend: { position: 'bottom' } } }]
                };
            },

            //Radial
            options_8() {
                return {
                    chart: { toolbar: { show: false } },
                    plotOptions: {
                        radialBar: {
                            dataLabels: {
                                total: {
                                    show: true,
                                    fontSize: '24px',
                                    fontWeight: 'normal',
                                    label: 'Total',
                                    formatter: function() {
                                        return 249;
                                    }
                                }
                            }
                        }
                    },
                    labels: ['Apples', 'Oranges', 'Bananas', 'Berries']
                };
            }
        },
        mounted() {},
        methods: {
            toggleCode(name) {
                if (this.code_arr.includes(name)) {
                    this.code_arr = this.code_arr.filter(d => d != name);
                } else {
                    this.code_arr.push(name);
                }
            }
        }
    };
</script>
