<header>
    @php
        $menu = get_menu('header');
    @endphp

    <div id="hamburger">
        <div class="hamburger-menu-title">{{ get_website_setting('website.title') }}</div>
        <div class="hamburger-menu">
            @if($menu)
                @foreach ($menu as $key => $item)
                    <div class="hamburger-menu-item @if($item->subItems->count()) dropdown @endif">
                        @if($item->parent_id == null)
                            <a href="/{{ $item->url }}">{{ $item->title }}</a>
                            @if($item->subItems->count())
                                <i class="dropdown-button-open {{ get_theme_setting('header.hamburger.dropDownButtons.openIcon') }}"></i>
                                <i class="dropdown-button-close {{ get_theme_setting('header.hamburger.dropDownButtons.closeIcon') }}"></i>
                            @endif
                        @endif

                        @if($item->subItems->count())
                            <div class="dropdown-content">
                            @foreach ($item->subItems as $key => $subItem)
                                <div class="drop-menu-item"><a href="/{{ $subItem->url }}">{{ $subItem->title }}</a></div>
                            @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            @else
                <div class="hamburger-menu-item">
                    <a href="/">Start</a>
                </div>
        
                <div class="hamburger-menu-item">
                    <a href="/posts">Blog</a>
                </div>

                <div class="hamburger-menu-item dropdown">
                    <a href="/posts">Media</a>
                    <i class="dropdown-button-open {{ get_theme_setting('header.hamburger.dropDownButtons.openIcon') }}"></i>
                    <i class="dropdown-button-close {{ get_theme_setting('header.hamburger.dropDownButtons.closeIcon') }}"></i>
                    
                    <div class="dropdown-content">
                        <div class="drop-menu-item"><a href="/posts">Videos</a></div>
                        <div class="drop-menu-item"><a href="/posts">Images</a></div>
                    </div>
                </div>

                <div class="hamburger-menu-item dropdown">
                    <a href="/posts">Community</a>
                    <i class="dropdown-button-open {{ get_theme_setting('header.hamburger.dropDownButtons.openIcon') }}"></i>
                    <i class="dropdown-button-close {{ get_theme_setting('header.hamburger.dropDownButtons.closeIcon') }}"></i>
                    
                    <div class="dropdown-content">
                        <div class="drop-menu-item"><a href="/posts">Videos</a></div>
                        <div class="drop-menu-item"><a href="/posts">Images</a></div>
                    </div>
                </div>

                <div class="hamburger-menu-item">
                    <a href="/posts">About</a>
                </div>
            @endif
        </div>
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