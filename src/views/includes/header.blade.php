<header>
    @php
        $menu = get_menu('header');
    @endphp

    <div id="hamburger-menu">
        @include('includes/partials/hamburger-menu')
    </div>
    @switch(get_theme_setting('header.general.style'))
        @case('fullwidth')
            <nav class="container nav-container">
                @include('includes/partials/navigation')
            </nav>
            @break
        @case('boxed')
            <nav class="container header-wrap">
                <div class="nav-container">
                    @include('includes/partials/navigation')
                </div>
            </nav>
            @break
        @default
    @endswitch
</header>