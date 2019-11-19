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

<div class="hamburger-wrapper">
    <button class="hamburger {{ get_theme_setting('header.hamburgerButton.animation') }}" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
</div>

<div class="menu-wrapper">
    @if($menu)
        <div class="menu">
            @foreach ($menu as $key => $item)
                <div class="menu-item @if($item->subItems->count()) dropdown @endif">
                    @if($item->parent_id == null)
                        @if($item->url)
                            <a href="{{ $item->url }}">{{ $item->title }}</a>
                        @else
                            <span>{{ $item->title }}</span>
                        @endif
                    @endif

                    @if($item->subItems->count())
                        <div class="dropdown-content">
                        @foreach ($item->subItems as $key => $subItem)
                            <div class="drop-menu-item"><a href="{{ $subItem->url }}">{{ $subItem->title }}</a></div>
                        @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @else
        <div class="no-menu">
            <span>No Menu Created Yet</span>
        </div>
    @endif
    
</div>