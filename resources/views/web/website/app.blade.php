<!DOCTYPE html>
<html lang="en">

<head>

    @include('web.website.partials.style')


</head>

<body>
    <!-- heading part start -->
    <header></header>
    <!-- heading part end -->

    <!-- main part start -->
        @yield('website_content')
    <!-- main part end -->

    <!-- footer part start -->

    <!-- footer  -->
    @include('web.website.partials.footer')
    <!-- Footer  -->

    <!-- footer part end -->





    <!-- scripts -->
    @include('web.website.partials.scripts')
</body>

</html>
