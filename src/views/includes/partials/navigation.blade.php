<div class="logo">
    <a class="logo-link" href="{{ url('/') }}">
        <div class="logo-web">Web</div><div class="logo-devs">Devs</div>
    </a>
</div>

<div class="hamburger-btn-wrapper">
    <button id="hamburger-btn" onClick="theme.hamburgerToggle(this.id)" class="hamburger hamburger--elastic" type="button">
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