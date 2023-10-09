<template>    
    <div ref="el">
        <slot></slot>
    </div>
</template>
<script>
    import 'highlight.js/styles/monokai-sublime.css';
    import highlight from 'highlight.js';


    export default {
        data() {
            return {}
        },
        mounted() {
            highlight.highlightBlock(this.$refs.el.querySelector('pre'));
        },
        methods: {
        }
    }
</script>
