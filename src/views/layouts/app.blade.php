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

    <!-- Backend Routes -->
    @routes

    @php
        $themeFolder = get_theme_folder();
    @endphp

    <!-- main script -->
    <script src="{{ mix('js/app.js', 'themes/' . $themeFolder) }}"></script>

    <!-- third party js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- theme's global js variables -->
    @include('includes/scripts')

    <!-- scripts injected by specific views -->
    @stack('scripts')

    <noscript>Please enable JavaScript to view this website correctly.</noscript>

</body>
</html>
