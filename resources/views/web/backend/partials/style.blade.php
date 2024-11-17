<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Apollo Now || Artist Dashboard</title>

<!-- favicon -->

<link rel="icon" type="image/png" sizes="192x192"
    href="{{ asset('assets/images/favicon_io/android-chrome-192x192.png') }}" />
<link rel="icon" type="image/png" sizes="512x512"
    href="{{ asset('assets/images/favicon_io/android-chrome-512x512.png') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon_io/apple-touch-icon.png') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon_io/favicon-32x32.png') }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon_io/favicon-16x16.png') }}" />
<link rel="manifest" href="{{ asset('assets/images/favicon_io/site.webmanifest') }}" />
<link rel="icon" href="{{ asset('assets/images/favicon_io/favicon.ico') }}" type="image/x-icon" />
<!-- All Plugins CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel.min.css') }}" />
<link rel="stylesheet" href=" {{asset('assets/css/plugins/swiper-bundle.min.css')}} " />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">




<!-- <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/amplitudejs@5.3.2/dist/amplitude.min.css"
    /> -->
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('assets/css/custom/artist-dashboard-home.css') }} ">
<link rel="stylesheet" href="../assets/css/custom/artist-listener-dashboard-home.css" />
<link rel="stylesheet" href="{{ asset('assets/css/custom/artist-listener-dashboard-discover.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/custom/artist-dashboard-profile-settings.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/custom/artist-dashboard-subscription-plan.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/css/custom/artist-listener-dashboard-merch-store.css') }}"/>

<link rel="stylesheet" href=" {{ asset('assets/css/style.css') }} " />
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
<link rel="stylesheet" href=" {{ asset('assets/css/helper.css') }} " />


@stack('styles')
