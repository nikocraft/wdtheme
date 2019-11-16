<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('includes/head')
</head>
<body>
<div class="ikigai" id="app">
    @include('includes/header')
    @yield('content')
    @include('includes/footer')
</div>

<!-- Scripts -->
@routes

@php
    $fontResources = get_theme_setting('resources.fonts');
    $iconResources = get_theme_setting('resources.icons');
    $cssResources = get_theme_setting('resources.css');
    $themeFolder = get_theme_folder();
@endphp

<script src="{{ mix('js/app.js', 'themes/'.$themeFolder) }}"></script>

@php
    $jsResources = get_theme_setting('resources.javascript');
@endphp

@foreach ( $jsResources as $key => $jsResource )
    @if($jsResource)
        <script id="{{ $key }}" src="{{ $jsResource }}"></script>
    @endif
@endforeach

<script id="custom-javascript">
    $(document).ready(function() {
        $('.image-lightbox').magnificPopup({type:'image'});
    });

    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
        $hamburger.toggleClass("is-active");
        var $hamburgerId = $("#hamburger");
        if($hamburger.hasClass('is-active')) {
            $hamburgerId.show();
            $hamburgerId.attr("class", "hamburger-wrapper");
            $hamburgerId.addClass("animated {{ get_theme_setting('header.hamburger.general.inAnimation') }} slow");
        } else {
            $hamburgerId.removeClass("animated {{ get_theme_setting('header.hamburger.general.inAnimation') }} slow");
            window.setTimeout(function() {
                $('#hamburger').addClass("animated {{ get_theme_setting('header.hamburger.general.outAnimation') }}");
            }, 200);
        }
    });

    var $dropdownBtnOpen = $('.dropdown-button-open');
    $dropdownBtnOpen.on("click", function(event) {
        var $dropdownContent = $(event.target).closest('.hamburger-menu-item').find('.dropdown-content');
        var $dropdownBtnClose = $(event.target).closest('.hamburger-menu-item').find('.dropdown-button-close');
        $dropdownContent.show();
        $(event.target).hide();
        $dropdownBtnClose.show();
    });

    var $dropdownBtnClose = $('.dropdown-button-close');
    $dropdownBtnClose.on("click", function(event) {
        var $dropdownContent = $(event.target).closest('.hamburger-menu-item').find('.dropdown-content');
        var $dropdownBtnOpen = $(event.target).closest('.hamburger-menu-item').find('.dropdown-button-open');
        $dropdownContent.hide();
        $(event.target).hide();
        $dropdownBtnOpen.show();
    });

</script>

@stack('scripts')

<noscript>Please enable JavaScript to view this website correctly.</noscript>

</body>
</html>
