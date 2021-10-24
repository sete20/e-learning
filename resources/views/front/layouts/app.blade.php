<!DOCTYPE html>
<html dir="rtl" lang="ar-EG">
<head>
    @include('front.layouts.include.meta')
    @include('front.layouts.include.css')
</head>
<body
    class="page-template-default page page-id-2166 wp-custom-logo theme-reptro woocommerce-no-js tribe-no-js xt-page-layout-full-width xt-no-page-title xt-no-page-sidebar xt-site-layout-full_width xt-site-loading elementor-default elementor-kit-8116 elementor-page elementor-page-2166"
>
<div id="app" class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    @include('front.layouts.include.header')
    @yield('head')
    <div id="content" class="site-content">
        @yield('content')
    </div>
    @include('front.layouts.include.footer')
</div>
@include('front.layouts.include.js')
@yield('js')
@include('sweetalert::alert')
</body>
</html>

