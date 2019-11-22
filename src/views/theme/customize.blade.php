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
@media (min-width: 768px) {
    .container {
        width: 100%;
    }
}
  
@media (min-width: 992px) {
    .container {
        width: 100%;
    }
}

@media (min-width: 1200px) {
    .container {
        @style([ 'property' => 'width', 'value' => data_get($settings, 'general.container.width') ])
        @style([ 'property' => 'max-width', 'value' => data_get($settings, 'general.container.maxWidth') ])
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
.hamburger .hamburger-box .hamburger-inner {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburgerButton.color') ])
}

.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburgerButton.color') ])
}

.hamburger.is-active .hamburger-inner, 
.hamburger.is-active .hamburger-inner::before, 
.hamburger.is-active .hamburger-inner::after {
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
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburgerMenu.logo.fontColor') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburgerMenu.logo.fontSize') ])
}

#hamburger-menu .hamburger-menu-item a {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.fontColor') ])
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.padding') ])
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'header.hamburgerMenu.menuItems.textTransform') ])
}

#hamburger-menu .drop-menu-item a {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.fontColor') ])
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.padding') ])
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownItems.textTransform') ])
}

#hamburger-menu .hamburger-menu-item i {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownButtons.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburgerMenu.dropDownButtons.fontColor') ])
}

{{-- Content styles --}}
.content-index .posts .post .post-title-link, 
.content-single .post .post-title {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.color') ])
}

.content-index .posts .post .post-title-link:hover, 
.content-single .post .post-title:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.hoverColor') ])
}

.content-index .posts .post .post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.indexPageHeight') ])
}

.content-single .post .post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.singlePageHeight') ])
}

{{-- Widget styles --}}
.widget {
    @style([ 'property' => 'margin-bottom', 'value' => data_get($settings, 'widgets.spacing') ])
}

.widget .widget-title {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'widgets.titleColor') ])
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'widgets.titleStyle') ])
}

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

h1, .h1 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline1.size') ])
    @style([ 'property' => 'line-height', 'value' => data_get($settings, 'headlines.headline1.lineHeight') ])
}

h2, .h2 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline2.size') ])
    @style([ 'property' => 'line-height', 'value' => data_get($settings, 'headlines.headline2.lineHeight') ])
}

h3, .h3 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline3.size') ])
    @style([ 'property' => 'line-height', 'value' => data_get($settings, 'headlines.headline3.lineHeight') ])
}

h4, .h4 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline4.size') ])
    @style([ 'property' => 'line-height', 'value' => data_get($settings, 'headlines.headline4.lineHeight') ])
}

h5, .h5 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline5.size') ])
    @style([ 'property' => 'line-height', 'value' => data_get($settings, 'headlines.headline5.lineHeight') ])
} --}}
