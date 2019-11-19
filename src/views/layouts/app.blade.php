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

@routes

@php
    $jsResources = get_theme_setting('resources.javascript');
    $themeFolder = get_theme_folder();
@endphp

<!-- main script -->
<script src="{{ mix('js/app.js', 'themes/'.$themeFolder) }}"></script>

{{-- third party js libs that theme specified --}}
@foreach ( $jsResources as $key => $jsResource )
    @if($jsResource)
        <script id="{{ $key }}" src="{{ $jsResource }}"></script>
    @endif
@endforeach

{{-- theme's custom scripts that need jQuery --}}
@include('includes/scripts')

{{-- scripts injected by specific views --}}
@stack('scripts')

<noscript>Please enable JavaScript to view this website correctly.</noscript>

</body>
</html>
