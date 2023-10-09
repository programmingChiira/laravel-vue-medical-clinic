<template>
    <div class="container">
        <portal to="breadcrumb">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:;">Components </a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Timeline</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </portal>

        <div class="container">

            <div class="nav sidenav">
                <scrollactive class="sidenav-content" tag="div" active-class="active" :offset="120" :modifyUrl="false" :highlightFirstItem="true">
                    <a href="#timelineProfile" class="nav-link scrollactive-item">Profile</a>
                    <a href="#timelineModern" class="nav-link scrollactive-item">Modern</a>
                    <a href="#timelineBasic" class="nav-link scrollactive-item">Basic</a>
                    <a href="#timelineImages" class="nav-link scrollactive-item">Images</a>
                </scrollactive>
            </div>


            <div class="row layout-top-spacing">
                <div id="timelineProfile" class="col-lg-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4> Profile</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="timeline-simple">
                                <p class="timeline-title">History</p>

                                <div class="timeline-list">
                                    <p class="meta-update-day">Today</p>

                                    <div class="timeline-post-content">
                                        <div class="user-profile">
                                            <img src="@/assets/images/profile-11.jpeg" alt="">
                                        </div>
                                        <div class="">
                                            <h4>Laurie Fox</h4>
                                            <p class="meta-time-date">5 sec</p>
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <h6 class="">Trending Style</h6>
                                                <p class="post-text">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                </p>
                                                <div class="post-contributers">
                                                    <img src="@/assets/images/profile-25.jpeg" alt="">
                                                    <img src="@/assets/images/profile-15.jpeg" alt="">
                                                    <img src="@/assets/images/profile-8.jpeg" alt="">
                                                    <img src="@/assets/images/profile-10.jpeg" alt="">
                                                    <img src="@/assets/images/profile-12.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-post-content post-gallery">
                                        <div class="user-profile">
                                            <img src="@/assets/images/profile-7.jpeg" alt="avatar">
                                        </div>
                                        <div class="">
                                            <h4>Justin Cross</h4>
                                            <p class="meta-time-date">45 min</p>
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                <h6 class="">Nature Photography</h6>
                                                <p class="post-text">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                </p>
                                                <div class="post-gallery-img">
                                                    <img src="@/assets/images/grid-blog-style-2.jpeg" alt="timeline">
                                                    <img src="@/assets/images/grid-blog-style-1.jpg" alt="timeline">
                                                    <img src="@/assets/images/list-blog-style-2.jpeg" alt="timeline">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-post-content">
                                        <div class="user-profile">
                                            <img src="@/assets/images/profile-25.jpeg" alt="avatar">
                                        </div>
                                        <div class="">
                                            <h4>Sonia Shaw</h4>
                                            <p class="meta-time-date">2 hr</p>
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                <h6 class="">Create new Project</h6>
                                                <p class="post-text">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.
                                                </p>
                                                <div class="post-contributers">
                                                    <img src="@/assets/images/profile-6.jpeg" alt="timeline">
                                                    <img src="@/assets/images/profile-16.jpeg" alt="timeline">
                                                    <img src="@/assets/images/profile-11.jpeg" alt="timeline">
                                                    <img src="@/assets/images/profile-7.jpeg" alt="timeline">
                                                    <img src="@/assets/images/profile-10.jpeg" alt="timeline">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-section-container show-code">

                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code1')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code1')" class="code-section text-left">
                                    <highlight>
                                        <pre>
&lt;div class=&quot;timeline-simple&quot;&gt;
    &lt;p class=&quot;timeline-title&quot;&gt;History&lt;/p&gt;

    &lt;div class=&quot;timeline-list&quot;&gt;
        &lt;p class=&quot;meta-update-day&quot;&gt;Today&lt;/p&gt;

        &lt;div class=&quot;timeline-post-content&quot;&gt;
            &lt;div class=&quot;user-profile&quot;&gt;
                &lt;img src=&quot;@/assets/images/profile-11.jpeg&quot; alt=&quot;&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;&quot;&gt;
                &lt;h4&gt;Laurie Fox&lt;/h4&gt;
                &lt;p class=&quot;meta-time-date&quot;&gt;5 sec&lt;/p&gt;
                &lt;div class=&quot;&quot;&gt;
                    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-globe&quot;&gt;&lt;circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;10&quot;&gt;&lt;/circle&gt;&lt;line x1=&quot;2&quot; y1=&quot;12&quot; x2=&quot;22&quot; y2=&quot;12&quot;&gt;&lt;/line&gt;&lt;path d=&quot;M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
                    &lt;h6 class=&quot;&quot;&gt;Trending Style&lt;/h6&gt;
                    &lt;p class=&quot;post-text&quot;&gt;
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    &lt;/p&gt;
                    &lt;div class=&quot;post-contributers&quot;&gt;
                        &lt;img src=&quot;@/assets/images/profile-25.jpeg&quot; alt=&quot;&quot;&gt;
                        &lt;img src=&quot;@/assets/images/profile-15.jpeg&quot; alt=&quot;&quot;&gt;
                        &lt;img src=&quot;@/assets/images/profile-8.jpeg&quot; alt=&quot;&quot;&gt;
                        &lt;img src=&quot;@/assets/images/profile-10.jpeg&quot; alt=&quot;&quot;&gt;
                        &lt;img src=&quot;@/assets/images/profile-12.jpeg&quot; alt=&quot;&quot;&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;timeline-post-content post-gallery&quot;&gt;
            &lt;div class=&quot;user-profile&quot;&gt;
                &lt;img src=&quot;@/assets/images/profile-7.jpeg&quot; alt=&quot;avatar&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;&quot;&gt;
                &lt;h4&gt;Justin Cross&lt;/h4&gt;
                &lt;p class=&quot;meta-time-date&quot;&gt;45 min&lt;/p&gt;
                &lt;div class=&quot;&quot;&gt;
                    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-image&quot;&gt;&lt;rect x=&quot;3&quot; y=&quot;3&quot; width=&quot;18&quot; height=&quot;18&quot; rx=&quot;2&quot; ry=&quot;2&quot;&gt;&lt;/rect&gt;&lt;circle cx=&quot;8.5&quot; cy=&quot;8.5&quot; r=&quot;1.5&quot;&gt;&lt;/circle&gt;&lt;polyline points=&quot;21 15 16 10 5 21&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
                    &lt;h6 class=&quot;&quot;&gt;Nature Photography&lt;/h6&gt;
                    &lt;p class=&quot;post-text&quot;&gt;
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    &lt;/p&gt;
                    &lt;div class=&quot;post-gallery-img&quot;&gt;
                        &lt;img src=&quot;@/assets/images/grid-blog-style-2.jpeg&quot; alt=&quot;timeline&quot;&gt;
                        &lt;img src=&quot;@/assets/images/grid-blog-style-1.jpg&quot; alt=&quot;timeline&quot;&gt;
                        &lt;img src=&quot;@/assets/images/list-blog-style-2.jpeg&quot; alt=&quot;timeline&quot;&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;timeline-post-content&quot;&gt;
            &lt;div class=&quot;user-profile&quot;&gt;
                &lt;img src=&quot;@/assets/images/profile-25.jpeg&quot; alt=&quot;avatar&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;&quot;&gt;
                &lt;h4&gt;Sonia Shaw&lt;/h4&gt;
                &lt;p class=&quot;meta-time-date&quot;&gt;2 hr&lt;/p&gt;
                &lt;div class=&quot;&quot;&gt;
                    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-file-text&quot;&gt;&lt;path d=&quot;M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z&quot;&gt;&lt;/path&gt;&lt;polyline points=&quot;14 2 14 8 20 8&quot;&gt;&lt;/polyline&gt;&lt;line x1=&quot;16&quot; y1=&quot;13&quot; x2=&quot;8&quot; y2=&quot;13&quot;&gt;&lt;/line&gt;&lt;line x1=&quot;16&quot; y1=&quot;17&quot; x2=&quot;8&quot; y2=&quot;17&quot;&gt;&lt;/line&gt;&lt;polyline points=&quot;10 9 9 9 8 9&quot;&gt;&lt;/polyline&gt;&lt;/svg&gt;
                    &lt;h6 class=&quot;&quot;&gt;Create new Project&lt;/h6&gt;
                    &lt;p class=&quot;post-text&quot;&gt;
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    &lt;/p&gt;
                    &lt;div class=&quot;post-contributers&quot;&gt;
                        &lt;img src=&quot;@/assets/images/profile-6.jpeg&quot; alt=&quot;timeline&quot;&gt;
                        &lt;img src=&quot;@/assets/images/profile-16.jpeg&quot; alt=&quot;timeline&quot;&gt;
                        &lt;img src=&quot;@/assets/images/profile-11.jpeg&quot; alt=&quot;timeline&quot;&gt;
                        &lt;img src=&quot;@/assets/images/profile-7.jpeg&quot; alt=&quot;timeline&quot;&gt;
                        &lt;img src=&quot;@/assets/images/profile-10.jpeg&quot; alt=&quot;timeline&quot;&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
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


            <div class="row">
                <div id="timelineModern" class="col-lg-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4> Modern </h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="container mt-container">
                                        <ul class="modern-timeline pl-0">
                                            <li>
                                                <div class="modern-timeline-badge"></div>
                                                <div class="modern-timeline-panel">
                                                    <div class="modern-timeline-preview"><img src="@/assets/images/tl-5.jpeg" alt="timeline"></div>
                                                    <div class="modern-timeline-body">
                                                        <h4 class="mb-4">Front-End Framework</h4>
                                                        <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                        <p><b-button block variant="dark" class="mt-2">Read more</b-button></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="modern-timeline-badge"></div>
                                                <div class="modern-timeline-panel">
                                                    <div class="modern-timeline-preview"><img src="@/assets/images/tl-2.jpeg" alt="timeline"></div>
                                                    <div class="modern-timeline-body">
                                                        <h4 class="mb-4">Web Development</h4>
                                                        <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                        <p><b-button block variant="dark" class="mt-2">Read more</b-button></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="modern-timeline-badge"></div>
                                                <div class="modern-timeline-panel">
                                                    <div class="modern-timeline-preview"><img src="@/assets/images/tl-3.jpeg" alt="timeline"></div>
                                                    <div class="modern-timeline-body">
                                                        <h4 class="mb-4">Theme Development</h4>
                                                        <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                        <p><b-button block variant="dark" class="mt-2">Read more</b-button></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="modern-timeline-badge"></div>
                                                <div class="modern-timeline-panel">
                                                    <div class="modern-timeline-preview"><img src="@/assets/images/tl-4.jpeg" alt="timeline"></div>
                                                    <div class="modern-timeline-body">
                                                        <h4 class="mb-4">Plugin Development</h4>
                                                        <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                        <p><b-button block variant="dark" class="mt-2">Read more</b-button></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="position-static">
                                                <div class="modern-timeline-top"></div>
                                            </li>
                                            <li class="position-static">
                                                <div class="modern-timeline-bottom"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="code-section-container show-code">

                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code2')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code2')" class="code-section text-left">
                                    <highlight>
                                        <pre>
&lt;div class=&quot;container mt-container&quot;&gt;
    &lt;ul class=&quot;modern-timeline pl-0&quot;&gt;
        &lt;li&gt;
            &lt;div class=&quot;modern-timeline-badge&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;modern-timeline-panel&quot;&gt;
                &lt;div class=&quot;modern-timeline-preview&quot;&gt;&lt;img src=&quot;@/assets/images/tl-5.jpeg&quot; alt=&quot;timeline&quot;&gt;&lt;/div&gt;
                &lt;div class=&quot;modern-timeline-body&quot;&gt;
                    &lt;h4 class=&quot;mb-4&quot;&gt;Front-End Framework&lt;/h4&gt;
                    &lt;p class=&quot;mb-4&quot;&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
                    &lt;p&gt;&lt;b-button block variant=&quot;dark&quot; class=&quot;mt-2&quot;&gt;Read more&lt;/b-button&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div class=&quot;modern-timeline-badge&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;modern-timeline-panel&quot;&gt;
                &lt;div class=&quot;modern-timeline-preview&quot;&gt;&lt;img src=&quot;@/assets/images/tl-2.jpeg&quot; alt=&quot;timeline&quot;&gt;&lt;/div&gt;
                &lt;div class=&quot;modern-timeline-body&quot;&gt;
                    &lt;h4 class=&quot;mb-4&quot;&gt;Web Development&lt;/h4&gt;
                    &lt;p class=&quot;mb-4&quot;&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
                    &lt;p&gt;&lt;b-button block variant=&quot;dark&quot; class=&quot;mt-2&quot;&gt;Read more&lt;/b-button&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div class=&quot;modern-timeline-badge&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;modern-timeline-panel&quot;&gt;
                &lt;div class=&quot;modern-timeline-preview&quot;&gt;&lt;img src=&quot;@/assets/images/tl-3.jpeg&quot; alt=&quot;timeline&quot;&gt;&lt;/div&gt;
                &lt;div class=&quot;modern-timeline-body&quot;&gt;
                    &lt;h4 class=&quot;mb-4&quot;&gt;Theme Development&lt;/h4&gt;
                    &lt;p class=&quot;mb-4&quot;&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
                    &lt;p&gt;&lt;b-button block variant=&quot;dark&quot; class=&quot;mt-2&quot;&gt;Read more&lt;/b-button&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div class=&quot;modern-timeline-badge&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;modern-timeline-panel&quot;&gt;
                &lt;div class=&quot;modern-timeline-preview&quot;&gt;&lt;img src=&quot;@/assets/images/tl-4.jpeg&quot; alt=&quot;timeline&quot;&gt;&lt;/div&gt;
                &lt;div class=&quot;modern-timeline-body&quot;&gt;
                    &lt;h4 class=&quot;mb-4&quot;&gt;Plugin Development&lt;/h4&gt;
                    &lt;p class=&quot;mb-4&quot;&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
                    &lt;p&gt;&lt;b-button block variant=&quot;dark&quot; class=&quot;mt-2&quot;&gt;Read more&lt;/b-button&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class=&quot;position-static&quot;&gt;
            &lt;div class=&quot;modern-timeline-top&quot;&gt;&lt;/div&gt;
        &lt;/li&gt;
        &lt;li class=&quot;position-static&quot;&gt;
            &lt;div class=&quot;modern-timeline-bottom&quot;&gt;&lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
</pre>
                                    </highlight>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="timelineBasic" class="col-lg-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4> Basic</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="mt-container mx-auto">
                                <div class="timeline-line">

                                    <div class="item-timeline">
                                        <p class="t-time">10:00</p>
                                        <div class="t-dot t-dot-primary">
                                        </div>
                                        <div class="t-text">
                                            <p>Updated Server Logs</p>
                                            <p class="t-meta-time">25 mins ago</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline">
                                        <p class="t-time">12:45</p>
                                        <div class="t-dot t-dot-success">
                                        </div>
                                        <div class="t-text">
                                            <p>Backup Files EOD</p>
                                            <p class="t-meta-time">2 hrs ago</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline">
                                        <p class="t-time">14:00</p>
                                        <div class="t-dot t-dot-warning">
                                        </div>
                                        <div class="t-text">
                                            <p>Send Mail to HR and Admin</p>
                                            <p class="t-meta-time">4 hrs ago</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline">
                                        <p class="t-time">16:00</p>
                                        <div class="t-dot t-dot-info">
                                        </div>
                                        <div class="t-text">
                                            <p>Conference call with Marketing Manager.</p>
                                            <p class="t-meta-time">6 hrs ago</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline">
                                        <p class="t-time">17:00</p>
                                        <div class="t-dot t-dot-danger">
                                        </div>
                                        <div class="t-text">
                                            <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                                            <p class="t-meta-time">9 hrs ago</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline">
                                        <p class="t-time">16:00</p>
                                        <div class="t-dot t-dot-dark">
                                        </div>
                                        <div class="t-text">
                                            <p>Server rebooted successfully</p>
                                            <p class="t-meta-time">8 hrs ago</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="code-section-container show-code">

                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code3')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code3')" class="code-section text-left">
                                    <highlight>
                                        <pre>
&lt;div class=&quot;mt-container mx-auto&quot;&gt;
    &lt;div class=&quot;timeline-line&quot;&gt;

        &lt;div class=&quot;item-timeline&quot;&gt;
            &lt;p class=&quot;t-time&quot;&gt;10:00&lt;/p&gt;
            &lt;div class=&quot;t-dot t-dot-primary&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-text&quot;&gt;
                &lt;p&gt;Updated Server Logs&lt;/p&gt;
                &lt;p class=&quot;t-meta-time&quot;&gt;25 mins ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;item-timeline&quot;&gt;
            &lt;p class=&quot;t-time&quot;&gt;12:45&lt;/p&gt;
            &lt;div class=&quot;t-dot t-dot-success&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-text&quot;&gt;
                &lt;p&gt;Backup Files EOD&lt;/p&gt;
                &lt;p class=&quot;t-meta-time&quot;&gt;2 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;item-timeline&quot;&gt;
            &lt;p class=&quot;t-time&quot;&gt;14:00&lt;/p&gt;
            &lt;div class=&quot;t-dot t-dot-warning&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-text&quot;&gt;
                &lt;p&gt;Send Mail to HR and Admin&lt;/p&gt;
                &lt;p class=&quot;t-meta-time&quot;&gt;4 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;item-timeline&quot;&gt;
            &lt;p class=&quot;t-time&quot;&gt;16:00&lt;/p&gt;
            &lt;div class=&quot;t-dot t-dot-info&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-text&quot;&gt;
                &lt;p&gt;Conference call with Marketing Manager.&lt;/p&gt;
                &lt;p class=&quot;t-meta-time&quot;&gt;6 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;item-timeline&quot;&gt;
            &lt;p class=&quot;t-time&quot;&gt;17:00&lt;/p&gt;
            &lt;div class=&quot;t-dot t-dot-danger&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-text&quot;&gt;
                &lt;p&gt;Collected documents from &lt;a href=&quot;javascript:void(0);&quot;&gt;Sara&lt;/a&gt;&lt;/p&gt;
                &lt;p class=&quot;t-meta-time&quot;&gt;9 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;item-timeline&quot;&gt;
            &lt;p class=&quot;t-time&quot;&gt;16:00&lt;/p&gt;
            &lt;div class=&quot;t-dot t-dot-dark&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-text&quot;&gt;
                &lt;p&gt;Server rebooted successfully&lt;/p&gt;
                &lt;p class=&quot;t-meta-time&quot;&gt;8 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                    </highlight>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="timelineImages" class="col-lg-12 layout-spacing">
                    <div class="statbox panel box box-shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4> With Images </h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="mt-container mx-auto">
                                <div class="timeline-alter">

                                    <div class="item-timeline">
                                        <div class="t-time">
                                            <p class="">09:00</p>
                                        </div>
                                        <div class="t-img">
                                            <img src="@/assets/images/profile-20.jpeg" alt="avatar">
                                        </div>
                                        <div class="t-meta-time">
                                            <p class="">25 mins ago</p>
                                        </div>

                                        <div class="t-text">
                                            <p>Conference call with Marketing Manager.</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline">
                                        <div class="t-time">
                                            <p class="">10:00</p>
                                        </div>
                                        <div class="t-usr-txt">
                                            <p><span>L</span></p>
                                        </div>
                                        <div class="t-meta-time">
                                            <p class="">2 hrs ago</p>
                                        </div>

                                        <div class="t-text">
                                            <p>Server rebooted successfully</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline">
                                        <div class="t-time">
                                            <p class="">11:00</p>
                                        </div>
                                        <div class="t-img">
                                            <img src="@/assets/images/profile-6.jpeg" alt="avatar">
                                        </div>
                                        <div class="t-meta-time">
                                            <p class="">4 hrs ago</p>
                                        </div>

                                        <div class="t-text">
                                            <p>Backup Files EOD</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline">
                                        <div class="t-time">
                                            <p class="">12:00</p>
                                        </div>
                                        <div class="t-img">
                                            <img src="@/assets/images/profile-11.jpeg" alt="avatar">
                                        </div>
                                        <div class="t-meta-time">
                                            <p class="">6 hrs ago</p>
                                        </div>

                                        <div class="t-text">
                                            <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                                        </div>
                                    </div>

                                    <div class="item-timeline">
                                        <div class="t-time">
                                            <p class="">14:00</p>
                                        </div>
                                        <div class="t-usr-txt">
                                            <p><span>G</span></p>
                                        </div>
                                        <div class="t-meta-time">
                                            <p class="">9 hrs ago</p>
                                        </div>

                                        <div class="t-text">
                                            <p>PDF file Download</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="code-section-container show-code">

                                <b-button variant="default" class="toggle-code-snippet" @click="toggleCode('code4')"><span>Code</span></b-button>

                                <div v-if="code_arr.includes('code4')" class="code-section text-left">
                                    <highlight>
                                        <pre>
&lt;div class=&quot;mt-container mx-auto&quot;&gt;
    &lt;div class=&quot;timeline-alter&quot;&gt;

        &lt;div class=&quot;item-timeline&quot;&gt;
            &lt;div class=&quot;t-time&quot;&gt;
                &lt;p class=&quot;&quot;&gt;09:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-img&quot;&gt;
                &lt;img src=&quot;@/assets/images/profile-20.jpeg&quot; alt=&quot;avatar&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-meta-time&quot;&gt;
                &lt;p class=&quot;&quot;&gt;25 mins ago&lt;/p&gt;
            &lt;/div&gt;

            &lt;div class=&quot;t-text&quot;&gt;
                &lt;p&gt;Conference call with Marketing Manager.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;item-timeline&quot;&gt;
            &lt;div class=&quot;t-time&quot;&gt;
                &lt;p class=&quot;&quot;&gt;10:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-usr-txt&quot;&gt;
                &lt;p&gt;&lt;span&gt;L&lt;/span&gt;&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-meta-time&quot;&gt;
                &lt;p class=&quot;&quot;&gt;2 hrs ago&lt;/p&gt;
            &lt;/div&gt;

            &lt;div class=&quot;t-text&quot;&gt;
                &lt;p&gt;Server rebooted successfully&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;item-timeline&quot;&gt;
            &lt;div class=&quot;t-time&quot;&gt;
                &lt;p class=&quot;&quot;&gt;11:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-img&quot;&gt;
                &lt;img src=&quot;@/assets/images/profile-6.jpeg&quot; alt=&quot;avatar&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-meta-time&quot;&gt;
                &lt;p class=&quot;&quot;&gt;4 hrs ago&lt;/p&gt;
            &lt;/div&gt;

            &lt;div class=&quot;t-text&quot;&gt;
                &lt;p&gt;Backup Files EOD&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;item-timeline&quot;&gt;
            &lt;div class=&quot;t-time&quot;&gt;
                &lt;p class=&quot;&quot;&gt;12:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-img&quot;&gt;
                &lt;img src=&quot;@/assets/images/profile-11.jpeg&quot; alt=&quot;avatar&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-meta-time&quot;&gt;
                &lt;p class=&quot;&quot;&gt;6 hrs ago&lt;/p&gt;
            &lt;/div&gt;

            &lt;div class=&quot;t-text&quot;&gt;
                &lt;p&gt;Collected documents from &lt;a href=&quot;javascript:void(0);&quot;&gt;Sara&lt;/a&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;item-timeline&quot;&gt;
            &lt;div class=&quot;t-time&quot;&gt;
                &lt;p class=&quot;&quot;&gt;14:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-usr-txt&quot;&gt;
                &lt;p&gt;&lt;span&gt;G&lt;/span&gt;&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;t-meta-time&quot;&gt;
                &lt;p class=&quot;&quot;&gt;9 hrs ago&lt;/p&gt;
            &lt;/div&gt;

            &lt;div class=&quot;t-text&quot;&gt;
                &lt;p&gt;PDF file Download&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

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
    import '@/assets/sass/scrollspyNav.scss';
    import '@/assets/sass/components/timeline/custom-timeline.scss';
    import highlight from '@/components/plugins/highlight.vue';
    export default {
        metaInfo: { title: 'Timeline' },
        components: {
            highlight
        },
        data() {
            return {
                code_arr: []
            }
        },
        mounted() {
        },
        methods: {
            toggleCode(name) {
                if (this.code_arr.includes(name)) {
                    this.code_arr = this.code_arr.filter(d => d != name);
                }
                else {
                    this.code_arr.push(name);
                }
            }
        }
    };
</script>
