<template>
    <div ref="el">
        <slot></slot>
    </div>
</template>
<script>
    import 'perfect-scrollbar/css/perfect-scrollbar.css';
    import PerfectScrollbar from 'perfect-scrollbar/dist/perfect-scrollbar.js';

    export default {
        props: {
            as: { default: 'div', type: String }
        },
        data() {
            return {}
        },
        mounted() {
            new PerfectScrollbar(this.$refs.el.querySelector(this.as), {
                wheelSpeed: .5,
                swipeEasing: !0,
                minScrollbarLength: 40,
                maxScrollbarLength: 300,
                suppressScrollX: true
            });
        },
        methods: {
        }
    }</script>
