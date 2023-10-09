<template>
    <portal to="breadcrumb">
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="javascript:;">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Chat</span></li> -->
                            <slot />
                        </ol>
                    </nav>
                </div>
            </li>
        </ul>
    </portal>
</template>
