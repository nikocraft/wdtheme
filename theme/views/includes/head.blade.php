
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="robots" content="index, follow" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- SEO Meta Tags -->
@stack('seo-meta-tags')

<!-- Open Graph / Facebook -->
@stack('open-graph-meta-tags')

<!-- Twitter -->
@stack('twitter-meta-tags')

@php
    $fontResources = get_theme_setting('resources.fonts');
    $iconResources = get_theme_setting('resources.icons');
    $cssResources = get_theme_setting('resources.css');
    $themeFolder = get_theme_folder();
@endphp

@foreach ( $fontResources as $fontResource )
    @if($fontResource)
        <link rel="stylesheet" id="font-resource-{{ $loop->iteration }}" href="{{ $fontResource }}">
    @endif
@endforeach

@foreach ( $cssResources as $cssResource )
    @if($cssResource)
        <link rel="stylesheet" id="css-resource-{{ $loop->iteration }}" href="{{ $cssResource }}">
    @endif
@endforeach

{{-- {!!Theme::css('css/style.css')!!} --}}
<link rel="stylesheet" href="{{mix('css/styles.css', 'themes/'.$themeFolder)}}">

@if(file_exists('themes/'.$themeFolder.'/css/customize.css'))
    <link rel="stylesheet" href="{{asset('themes/'.$themeFolder.'/css/customize.css')}}?{{ str_random(7) }}">
@endif

{{-- User Custom CSS --}}
@if(get_theme_setting('css.customCss'))
<style id="user-custom-css">
    {{ get_theme_setting('css.customCss') }}
</style>
@endif

{{-- Content Custom CSS --}}
<style id="content-custom-css">
    @stack('content-custom-css')
</style>

<style id="large-devices-above-1200">
    @stack('content-block-css')
</style>

<style id="large-devices-less-than-1200">
    @media (max-width: 1199px) {
        @stack('content-block-css-large')
    }
</style>

<style id="medium-devices-less-than-992">
    @media (max-width: 991px) {
        @stack('content-block-css-medium')
    }
</style>

<style id="small-devices-less-than-768">
    @media (max-width: 767px) {
        @stack('content-block-css-small')
    }
</style>

<style id="small-devices-less-than-576">
    @media (max-width: 575px) {
        @stack('content-block-css-extra-small')
    }
</style>

<style id="custom-css">
    @stack('content-block-custom-css')
</style>

<!-- Scripts -->
<script id="csrfToken">
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
