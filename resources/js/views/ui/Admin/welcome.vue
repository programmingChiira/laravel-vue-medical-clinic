<template>
    <div class="layout-px-spacing">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Welcome</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>cogni A.I</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="fq-header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center order-md-0 order-1">
                        <h5 style="color: white;" class=""> 
                            <strong>Intelligent systems </strong> :- Analysis, 
                            predictions, personalized feeds, revisions
                            assistance, and a lot of other smart functionalies.
                        </h5>
                        <br/>
                        <br/>
                        <b-button variant="default">Powered by cogni A.I</b-button>
                    </div>
                    <div class="col-md-6 order-md-0 order-0">
                        <div class="banner-img">
                            <img src="@/assets/images/faq.svg" class="d-block" alt="header-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="faq container">

            <div class="faq-layouting layout-spacing">


                <div class="fq-comman-question-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <h3> What we are solving</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="">
                                        <li class="list-unstyled">
                                            <div class="icon-svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                            Teacher workload reduction.
                                        </li>
                                        <li class="list-unstyled">
                                            <div class="icon-svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                            Student revision analysis.
                                        </li>
                                        <li class="list-unstyled">
                                            <div class="icon-svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                            Student revision guidance.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="">
                                        <li class="list-unstyled">
                                            <div class="icon-svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                            Student skill assessment automation.
                                        </li>
                                        <li class="list-unstyled">
                                            <div class="icon-svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                            Student assignment automation.
                                        </li>
                                        <li class="list-unstyled">
                                            <div class="icon-svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                            Smart admin reports and analysis.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fq-tab-section">
                    <div class="row">
                        <div class="col-md-12 mb-5 mt-5">

                            <h2>Further info.</h2>

                            <div class="accordion" id="faq">
                                <b-card no-body>
                                    <b-card-header role="tab">
                                        <div class="mb-0" v-b-toggle.fqcollapseOne>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg> <span class="faq-q-title">Teacher workload reduction</span>
                                            <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-thumbs-up">
                                                    <path
                                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg> <span class="faq-like-count"></span></div>
                                        </div>
                                    </b-card-header>
                                    <b-collapse id="fqcollapseOne" accordion="faq-accordion">
                                        <b-card-body>
                                            <p>
                                                Reducing teacher workload through AI-powered solutions improves efficiency
                                                and promotes work-life balance. By automating administrative tasks,
                                                optimizing scheduling, and offering personalized learning experiences,
                                                educators can focus on teaching and nurturing students, enhancing overall
                                                educational outcomes and well-being.
                                            </p>
                                        </b-card-body>
                                    </b-collapse>
                                </b-card>

                                <b-card no-body>
                                    <b-card-header role="tab">
                                        <div class="mb-0" v-b-toggle.fqcollapseTwo>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg> <span class="faq-q-title">Student revision analysis</span>
                                            <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-thumbs-up">
                                                    <path
                                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg> <span class="faq-like-count"></span></div>
                                        </div>
                                    </b-card-header>
                                    <b-collapse id="fqcollapseTwo" accordion="faq-accordion" visible>
                                        <b-card-body>
                                            <p>
                                                Student revision analysis with AI empowers personalized learning. By
                                                analyzing student performance, identifying areas of improvement, and
                                                providing tailored feedback, it enhances academic progress, fosters
                                                self-directed learning, and maximizes educational outcomes for each
                                                individual.
                                            </p>
                                        </b-card-body>
                                    </b-collapse>
                                </b-card>

                                <b-card no-body>
                                    <b-card-header role="tab">
                                        <div class="mb-0" v-b-toggle.fqcollapseThree>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg> <span class="faq-q-title">Student revision guidance</span>
                                            <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-thumbs-up">
                                                    <path
                                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg> <span class="faq-like-count"></span></div>
                                        </div>
                                    </b-card-header>
                                    <b-collapse id="fqcollapseThree" accordion="faq-accordion">
                                        <b-card-body>
                                            <p>
                                                Student revision guidance aided by AI offers personalized support for
                                                effective learning. Through targeted recommendations, adaptive study
                                                materials, and progress tracking, it empowers students to optimize their
                                                revision strategies, boost comprehension, and achieve academic success.
                                            </p>
                                        </b-card-body>
                                    </b-collapse>
                                </b-card>

                                <b-card no-body>
                                    <b-card-header role="tab">
                                        <div class="mb-0" v-b-toggle.fqcollapseFour>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg> <span class="faq-q-title">Student skill assessment automation</span>
                                            <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-thumbs-up">
                                                    <path
                                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg> <span class="faq-like-count"></span></div>
                                        </div>
                                    </b-card-header>
                                    <b-collapse id="fqcollapseFour" accordion="faq-accordion">
                                        <b-card-body>
                                            <p>
                                                Automation of student skill assessment through AI streamlines the evaluation
                                                process. By leveraging machine learning algorithms, it enables efficient and
                                                objective analysis of student abilities, facilitating personalized feedback,
                                                and driving targeted interventions to enhance individual growth and
                                                development.
                                            </p>
                                        </b-card-body>
                                    </b-collapse>
                                </b-card>

                                <b-card no-body>
                                    <b-card-header role="tab">
                                        <div class="mb-0" v-b-toggle.fqcollapseFive>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg> <span class="faq-q-title">Student assignment automation</span>
                                            <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-thumbs-up">
                                                    <path
                                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg> <span class="faq-like-count"></span></div>
                                        </div>
                                    </b-card-header>
                                    <b-collapse id="fqcollapseFive" accordion="faq-accordion">
                                        <b-card-body>
                                            <p>
                                                Student assignment automation powered by AI revolutionizes learning
                                                experiences. By automating tasks such as grading, plagiarism detection, and
                                                feedback generation, it saves time, ensures fairness, and enables educators
                                                to focus on providing personalized guidance and fostering student
                                                creativity.
                                            </p>
                                        </b-card-body>
                                    </b-collapse>
                                </b-card>

                                <b-card no-body>
                                    <b-card-header role="tab">
                                        <div class="mb-0" v-b-toggle.fqcollapseSix>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                                <polyline points="16 18 22 12 16 6"></polyline>
                                                <polyline points="8 6 2 12 8 18"></polyline>
                                            </svg> <span class="faq-q-title">Smart admin reports and analysis</span>
                                            <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-thumbs-up">
                                                    <path
                                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg> <span class="faq-like-count"></span></div>
                                        </div>
                                    </b-card-header>
                                    <b-collapse id="fqcollapseSix" accordion="faq-accordion">
                                        <b-card-body>
                                            <p>
                                                Smart admin reports and analysis enhance system functionality for diverse
                                                users. By leveraging AI, it delivers comprehensive and real-time insights,
                                                enabling administrators to make informed decisions, optimize resources, and
                                                ensure efficient operations in an educational setting.
                                            </p>
                                        </b-card-body>
                                    </b-collapse>
                                </b-card>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import '@/assets/sass/pages/faq/faq.scss';
export default {
    metaInfo: { title: 'Welcome' },
    mounted() {
    },
    methods: {
    }
};
</script>