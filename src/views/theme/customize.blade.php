body {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'general.body.backgroundColor') ])
    @style([ 'property' => 'background-image', 'value' => data_get($settings, 'general.body.backgroundImage') ])
    @if(data_get($settings, 'general.body.backgroundImage'))
        @style([ 'property' => 'background-size', 'value' => data_get($settings, 'general.body.backgroundSize') ])
        @style([ 'property' => 'background-attachment', 'value' => data_get($settings, 'general.body.backgroundStyle') ])
        @style([ 'property' => 'background-position', 'value' => data_get($settings, 'general.body.backgroundPosition') ])
        @style([ 'property' => 'background-repeat', 'value' => data_get($settings, 'general.body.backgroundRepeat') ])
    @endif
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'general.font.family') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'general.font.color') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'general.font.size') ])
    @style([ 'property' => 'line-height', 'value' => data_get($settings, 'general.font.lineHeight') ])
}

{{-- Container --}}
.container {
    @style([ 'property' => 'width', 'value' => data_get($settings, 'general.container.width') ])
    @style([ 'property' => 'max-width', 'value' => data_get($settings, 'general.container.maxWidth') ])
}

@media (max-width: 1200px) {
    .container {
        width: 90%;
    }
}

@media (max-width: 992px) {
    .container {
        width: 100%;
    }
}

{{-- Content Container Styles --}}
.container.content-wrap {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'general.container.backgroundColor') ])
}

{{-- Header Styles --}}
header {
    @if(data_get($settings, 'header.general.style') == 'fullwidth')
        @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.general.backgroundColor') ])
    @endif
    @style([ 'property' => 'height', 'value' => data_get($settings, 'header.general.height') ])
}

.header-wrap {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.general.backgroundColor') ])
    @style([ 'property' => 'height', 'value' => data_get($settings, 'header.general.height') ])
}

@if(data_get($settings, 'header.logo.type') == 'text')
.logo .logo-link {
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'header.logo.fontFamily') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.logo.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.logo.fontColor') ])
}

.logo .logo-link:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.logo.fontHoverColor') ])
}
@endif

{{-- Menu Styles --}}
.menu-wrapper .menu .menu-item {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.menu.items.backgroundColor') ])
}

.menu-wrapper .menu .menu-item:hover {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.menu.items.backgroundHoverColor') ])
}

.menu-wrapper .menu .menu-item a {
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'header.menu.items.fontFamily') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.menu.items.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.menu.items.fontColor') ])
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'header.menu.items.padding') ])
}

.menu-wrapper .menu .menu-item a:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.menu.items.fontHoverColor') ])
}

.menu-wrapper .menu .dropdown .dropdown-content {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.menu.dropdownItems.backgroundColor') ])
}

.menu-wrapper .menu .dropdown .dropdown-content .drop-menu-item:hover {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.menu.dropdownItems.backgroundHoverColor') ])
}

.menu-wrapper .menu .dropdown .dropdown-content .drop-menu-item a {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.menu.dropdownItems.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.menu.dropdownItems.fontColor') ])
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'header.menu.dropdownItems.padding') ])
}

.menu-wrapper .menu .dropdown .dropdown-content .drop-menu-item a:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.menu.dropdownItems.FontHoverColor') ])
}

{{-- Hamburger Button Styles --}}
.hamburger-box .hamburger-inner, 
.hamburger-box .hamburger-inner::before, 
.hamburger-box .hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburgerButton.color') ])
}

.hamburger-btn-wrapper .hamburger.is-active .hamburger-inner, 
.hamburger-btn-wrapper .hamburger.is-active .hamburger-inner:after, 
.hamburger-btn-wrapper .hamburger.is-active .hamburger-inner:before {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburgerButton.activeColor') ])
}

{{-- Hamburger Menu styles --}}
#hamburger-menu {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburgerMenu.general.backgroundColor') ])
}

#hamburger-menu .menu {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburgerMenu.general.backgroundColor') ])
}

#hamburger-menu .website-title {
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'header.logo.fontFamily') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburgerMenu.logo.fontColor') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburgerMenu.logo.fontSize') ])
}

#hamburger-menu .menu .menu-item a, #hamburger-menu .menu .menu-item span {
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'header.menu.items.fontFamily') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.fontColor') ])
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.padding') ])
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.textTransform') ])
}

#hamburger-menu .menu .menu-item .dropdown-content .drop-menu-item a {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.fontColor') ])
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.padding') ])
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.textTransform') ])
}

#hamburger-menu .menu .menu-item i {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownButtons.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownButtons.fontColor') ])
}

{{-- Content styles --}}
.content-index .posts .post .post-title-link,
.content-single .post .post-title {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.color') ])
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'content.general.postTitle.fontFamily') ])
}

.content-index .posts .post .post-title-link:hover, 
.content-single .post .post-title:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.hoverColor') ])
}

.content-index .posts .post .post-featured-image {
    @if(!empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
        @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.indexPageHeight') ])
    @else
        height: auto;
    @endif
}

.content-single .post .post-featured-image {
    @if(!empty(get_theme_setting('content.general.featuredImage.singlePageHeight')))
        @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.singlePageHeight') ])
    @else
        height: auto;
    @endif
}

{{-- Widget styles --}}
{{-- .widget {
    @style([ 'property' => 'margin-bottom', 'value' => data_get($settings, 'widgets.spacing') ])
}

.widget .widget-title {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'widgets.titleColor') ])
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'widgets.titleStyle') ])
} --}}

{{-- Footer styles --}}
{{-- 
footer {
    @if(data_get($settings, 'footer.general.style') == 'boxed')
        background-color: transparent;
    @else
        @style([ 'property' => 'background-color', 'value' => data_get($settings, 'footer.general.backgroundColor') ])
    @endif
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'footer.general.font.size') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'footer.general.font.color') ])
}

footer .footer-wrap {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'footer.general.backgroundColor') ])
}

 --}}

h1, .h1 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline1') ])
}

h2, .h2 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline2') ])
}

h3, .h3 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline3') ])
}

h4, .h4 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline4') ])
}

h5, .h5 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline5') ])
}

h6, .h6 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline6') ])
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
    @style([ 'property' => 'line-height', 'value' => data_get($settings, 'headlines.general.lineHeight') ])
}

