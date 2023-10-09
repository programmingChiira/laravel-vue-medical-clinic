<template>
    <!-- BEGIN FOOTER -->
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p style="text-align:center;">Copyright © {{ currentYear }} <a target="_blank" href="https://ecomrade.co.ke"> ecomrade smart systems</a>, All
                rights reserved.</p>
        </div>
    </div>
    <!-- END FOOTER -->
</template>
<script>
export default {
    data() {
        return {
            currentYear: new Date().getFullYear()
        };
    },
    mounted() { },
    methods: {}
};
</script>
