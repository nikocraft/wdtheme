<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('includes/head')
</head>
<body>
    <div class="webdev_theme" id="app">
        @include('includes/header')
        @yield('content')
        @include('includes/footer')
    </div>

    <!-- Backend Routes -->
    @routes

    @php
        $themeFolder = get_theme_folder();
    @endphp

    <!-- Main script -->
    <script src="{{ mix('js/app.js', 'themes/' . $themeFolder) }}"></script>

    <!-- Third party js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- Theme's global js variables -->
    @include('includes/scripts')

    <!-- Theme custom javascript -->
    @if(get_theme_setting('custom.javascript'))
        <style id="theme-custom-javascript">
            {{ get_theme_setting('custom.javascript') }}
        </style>
    @endif

    <!-- Scripts injected by specific views -->
    @stack('scripts')
    <noscript>Please enable JavaScript to view this website correctly.</noscript>
</body>
</html>
