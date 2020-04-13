<header>
    @php
        $menu = get_menu('header');
    @endphp

    <div id="hamburger-menu">
        @include('includes/partials/hamburger-menu')
    </div>

    <nav class="container nav-container">
        @include('includes/partials/navigation')
    </nav>
</header>