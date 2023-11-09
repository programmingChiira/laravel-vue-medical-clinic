<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="authenticated/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="argon/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="argon/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="argon/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

    <link id="pagestyle" href="argon/assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />

    <link href="authenticated/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="authenticated/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="authenticated/css/responsive.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Arvo&family=Quicksand:wght@500&display=swap');

        * {
            font-family: 'Arvo', serif;
            font-family: 'Quicksand', sans-serif;
        }
    </style>
</head>

<div id="app">
</div>
@vite('resources/js/main.js')

<script type="text/javascript" src="authenticated/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script type="text/javascript" src="authenticated/js/bootstrap.js"></script>
<!-- owl slider -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- custom js -->
<script type="text/javascript" src="authenticated/js/custom.js"></script>
<!-- Add this script tag to the end of your <body> tag -->


<script src="argon/assets/js/core/popper.min.js"></script>
<script src="argon/assets/js/core/bootstrap.min.js"></script>
<script src="argon/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="argon/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="argon/assets/js/plugins/chartjs.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenavbar-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenavbar-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="argon/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
<script src="argon/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>

</html>
