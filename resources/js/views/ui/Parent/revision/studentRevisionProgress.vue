<template>
    <div class="container">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Components </a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Counter</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="container">
            <div id="navSection" class="nav sidenav">
                <scrollactive class="sidenav-content" tag="div" active-class="active" :offset="120" :modifyUrl="false" :highlightFirstItem="true">
                    <a href="#counterbasic" class="nav-link scrollactive-item">Basic</a>
                    <a href="#countericon" class="nav-link scrollactive-item">Icon</a>
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
                        <a target="_blank" href="https://www.npmjs.com/package/vue-number-animation" class="text-info">
                            https://www.npmjs.com/package/vue-number-animation
                        </a>
                    </div>
                </div>
            </div>
            <div class="row layout-top-spacing">
                <div id="counterbasic" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Simple Counter</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body text-center">
                            <div class="simple--counter-container">
                                <div class="counter-container">
                                    <div class="counter-content">
                                        <h1 class="s-counter2 s-counter">
                                            <number ref="counter1" :from="0" :to="710" :duration="5" :delay="1" />
                                        </h1>
                                    </div>
                                    <p class="s-counter-text">HOURS</p>
                                </div>

                                <div class="counter-container">
                                    <div class="counter-content">
                                        <h1 class="s-counter3 s-counter">
                                            <number ref="counter2" :from="0" :to="915" :duration="5" :delay="1" />
                                        </h1>
                                    </div>
                                    <p class="s-counter-text">TICKETS</p>
                                </div>

                                <div class="counter-container">
                                    <div class="counter-content">
                                        <h1 class="s-counter4 s-counter">
                                            <number ref="counter3" :from="0" :to="580" :duration="5" :delay="1" />
                                        </h1>
                                    </div>
                                    <p class="s-counter-text">CUSTOMERS</p>
                                </div>
                            </div>
                            <div class="code-section-container show-code">
                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code1')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code1')" class="code-section text-left">
                                    <highlight>
                                        <pre>
&lt;div class=&quot;simple--counter-container&quot;&gt;
    &lt;div class=&quot;counter-container&quot;&gt;
        &lt;div class=&quot;counter-content&quot;&gt;
            &lt;h1 class=&quot;s-counter2 s-counter&quot;&gt;
                &lt;number ref=&quot;counter1&quot; :from=&quot;0&quot; :to=&quot;710&quot; :duration=&quot;5&quot; :delay=&quot;1&quot; /&gt;
            &lt;/h1&gt;
        &lt;/div&gt;
        &lt;p class=&quot;s-counter-text&quot;&gt;HOURS&lt;/p&gt;
    &lt;/div&gt;

    &lt;div class=&quot;counter-container&quot;&gt;
        &lt;div class=&quot;counter-content&quot;&gt;
            &lt;h1 class=&quot;s-counter3 s-counter&quot;&gt;
                &lt;number ref=&quot;counter2&quot; :from=&quot;0&quot; :to=&quot;915&quot; :duration=&quot;5&quot; :delay=&quot;1&quot; /&gt;
            &lt;/h1&gt;
        &lt;/div&gt;
        &lt;p class=&quot;s-counter-text&quot;&gt;TICKETS&lt;/p&gt;
    &lt;/div&gt;

    &lt;div class=&quot;counter-container&quot;&gt;
        &lt;div class=&quot;counter-content&quot;&gt;
            &lt;h1 class=&quot;s-counter4 s-counter&quot;&gt;
                &lt;number ref=&quot;counter3&quot; :from=&quot;0&quot; :to=&quot;580&quot; :duration=&quot;5&quot; :delay=&quot;1&quot; /&gt;
            &lt;/h1&gt;
        &lt;/div&gt;
        &lt;p class=&quot;s-counter-text&quot;&gt;CUSTOMERS&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                        </pre>
                                    </highlight>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="countericon" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>With Icon</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body text-center">
                            <div class="icon--counter-container">
                                <div class="counter-container">
                                    <div class="counter-content">
                                        <h1 class="ico-counter1 ico-counter">
                                            <number ref="counter4" :from="0" :to="105" :duration="5" :delay="1" />
                                        </h1>
                                    </div>

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
                                        class="feather counter-ico feather-user"
                                    >
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>

                                    <p class="ico-counter-text">Clients</p>
                                </div>

                                <div class="counter-container">
                                    <div class="counter-content">
                                        <h1 class="ico-counter2 ico-counter">
                                            <number ref="counter5" :from="0" :to="300" :duration="5" :delay="1" />
                                        </h1>
                                    </div>

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
                                        class="feather counter-ico feather-download-cloud"
                                    >
                                        <polyline points="8 17 12 21 16 17"></polyline>
                                        <line x1="12" y1="12" x2="12" y2="21"></line>
                                        <path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path>
                                    </svg>

                                    <p class="ico-counter-text">Downloads</p>
                                </div>

                                <div class="counter-container">
                                    <div class="counter-content">
                                        <h1 class="ico-counter3 ico-counter">
                                            <number ref="counter6" :from="0" :to="58" :duration="5" :delay="1" />
                                        </h1>
                                    </div>

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
                                        class="feather counter-ico feather-award"
                                    >
                                        <circle cx="12" cy="8" r="7"></circle>
                                        <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                                    </svg>

                                    <p class="ico-counter-text">Awards</p>
                                </div>
                            </div>
                            <div class="code-section-container show-code">
                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code2')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code2')" class="code-section text-left">
                                    <highlight>
                                        <pre>
&lt;div class=&quot;icon--counter-container&quot;&gt;
    &lt;div class=&quot;counter-container&quot;&gt;
        &lt;div class=&quot;counter-content&quot;&gt;
            &lt;h1 class=&quot;ico-counter1 ico-counter&quot;&gt;
                &lt;number ref=&quot;counter4&quot; :from=&quot;0&quot; :to=&quot;105&quot; :duration=&quot;5&quot; :delay=&quot;1&quot; /&gt;
            &lt;/h1&gt;
        &lt;/div&gt;

        &lt;svg&gt; ... &lt;/svg&gt;

        &lt;p class=&quot;ico-counter-text&quot;&gt;Clients&lt;/p&gt;
    &lt;/div&gt;

    &lt;div class=&quot;counter-container&quot;&gt;
        &lt;div class=&quot;counter-content&quot;&gt;
            &lt;h1 class=&quot;ico-counter2 ico-counter&quot;&gt;
                &lt;number ref=&quot;counter5&quot; :from=&quot;0&quot; :to=&quot;300&quot; :duration=&quot;5&quot; :delay=&quot;1&quot; /&gt;
            &lt;/h1&gt;
        &lt;/div&gt;

        &lt;svg&gt; ... &lt;/svg&gt;

        &lt;p class=&quot;ico-counter-text&quot;&gt;Downloads&lt;/p&gt;
    &lt;/div&gt;

    &lt;div class=&quot;counter-container&quot;&gt;
        &lt;div class=&quot;counter-content&quot;&gt;
            &lt;h1 class=&quot;ico-counter3 ico-counter&quot;&gt;
                &lt;number ref=&quot;counter6&quot; :from=&quot;0&quot; :to=&quot;58&quot; :duration=&quot;5&quot; :delay=&quot;1&quot; /&gt;
            &lt;/h1&gt;
        &lt;/div&gt;

        &lt;svg&gt; ... &lt;/svg&gt;

        &lt;p class=&quot;ico-counter-text&quot;&gt;Awards&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                        </pre>
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
    import VueNumber from 'vue-number-animation';
    Vue.use(VueNumber);

    import '@/assets/sass/scrollspyNav.scss';
    import '@/assets/sass/components/custom-counter.scss';
    import highlight from '@/components/plugins/highlight.vue';
    export default {
        metaInfo: { title: 'Tabs' },
        components: {
            highlight
        },
        data() {
            return {
                code_arr: []
            };
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
