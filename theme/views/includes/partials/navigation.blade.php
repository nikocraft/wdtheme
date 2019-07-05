<div class="logo">
    @if(get_theme_setting('header.logo.logotype') == 'text')
        <a class="logo-link" href="{{ url('/') }}">
            {{ get_website_setting('website.title') }}
        </a>
    @else
        <a class="logo-link" href="{{ url('/') }}">
            <img src="{{ get_theme_setting('header.logo.logoImage') }}" class="img-responsive" alt="logo">
        </a>
    @endif
</div>

<div class="responsive-menu">
    <button class="hamburger {{ get_theme_setting('header.hamburger.button.style') }}" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
</div>

@php
    $menu = get_menu('header');
@endphp

<div class="menu-wrapper">
    <div class="menu">
        @if($menu)
            @foreach ($menu as $key => $item)
                <div class="menu-item @if($item->subItems->count()) dropdown @endif">
                    @if($item->parent_id == null)
                        <a href="/{{ $item->url }}">{{ $item->title }}</a>
                    @endif

                    @if($item->subItems->count())
                        <div class="dropdown-content animated zoomIn faster">
                        @foreach ($item->subItems as $key => $subItem)
                            <div class="drop-menu-item"><a href="/{{ $subItem->url }}">{{ $subItem->title }}</a></div>
                        @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        @else
            <div class="menu-item">
                <a href="/">Start</a>
            </div>

            <div class="menu-item">
                <a href="/posts">Blog</a>
            </div>

            <div class="menu-item dropdown">
                <a href="/posts">Media</a>
                <div class="dropdown-content">
                    <div class="drop-menu-item"><a href="/posts">Videos</a></div>
                    <div class="drop-menu-item"><a href="/posts">Images</a></div>
                </div>
            </div>

            <div class="menu-item">
                <a href="/posts">About</a>
            </div>
        @endif
    </div>
</div>