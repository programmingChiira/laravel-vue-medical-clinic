<template>
    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        Made with <i class="fa fa-heart"></i> by
                        <a href="https://github.com/programmingChiira" class="font-weight-bold" target="_blank">Chiira</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>
    
<script>
export default {
    // Component options  
    mounted() {
        window.scrollTo(0, 0);

        const scrollToTopButton = document.getElementById('scrollToTop');
        if (scrollToTopButton) {
            scrollToTopButton.addEventListener('click', () => {
                // Smoothly scroll to the top of the page
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth',
                });
            });
        }
    },
};
</script>
    