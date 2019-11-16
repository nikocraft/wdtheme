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
}

.content-wrap {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'general.container.backgroundColor') ])
}

header {
    @if(data_get($settings, 'header.general.style') == 'fullwidth')
        @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.general.backgroundColor') ])
    @endif
    @style([ 'property' => 'height', 'value' => data_get($settings, 'header.general.height') ])
}

.header-wrap {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.general.backgroundColor') ])
}

header .menu .menu-item {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.menu.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.menu.fontColor') ])
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.menu.itemBackgroundColor') ])
}

header .menu .menu-item a {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.menu.fontColor') ])
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'header.menu.itemPadding') ])
}

header .menu .menu-item a:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.menu.fontHoverColor') ])
}

header .menu .menu-item:hover {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.menu.itemHoverBackgroundColor') ])
}

.hamburger .hamburger-box .hamburger-inner {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburger.button.color') ])
}

.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburger.button.color') ])
}

.hamburger.is-active .hamburger-inner, 
.hamburger.is-active .hamburger-inner::before, 
.hamburger.is-active .hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburger.button.activeColor') ])
}

#hamburger {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburger.general.backgroundColor') ])
}

#hamburger .hamburger-menu {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'header.hamburger.general.backgroundColor') ])
}

#hamburger .hamburger-menu-title {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburger.logo.color') ])
}

#hamburger .hamburger-menu-item a {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburger.items.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburger.items.fontColor') ])
    @style([ 'property' => 'padding-top', 'value' => data_get($settings, 'header.hamburger.items.spacing') ])
    @style([ 'property' => 'padding-bottom', 'value' => data_get($settings, 'header.hamburger.items.spacing') ])
    @style([ 'property' => 'padding-left', 'value' => data_get($settings, 'header.hamburger.items.indent') ])
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'header.hamburger.items.textTransform') ])
}

#hamburger .drop-menu-item a {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburger.dropDown.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburger.dropDown.fontColor') ])
    @style([ 'property' => 'padding-top', 'value' => data_get($settings, 'header.hamburger.dropDown.spacing') ])
    @style([ 'property' => 'padding-bottom', 'value' => data_get($settings, 'header.hamburger.dropDown.spacing') ])
    @style([ 'property' => 'padding-left', 'value' => data_get($settings, 'header.hamburger.dropDown.indent') ])
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'header.hamburger.dropDown.textTransform') ])
}

#hamburger .hamburger-menu-item i {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.hamburger.dropDownButtons.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.hamburger.dropDownButtons.fontColor') ])
}

.logo .logo-link {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'header.logo.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.logo.fontColor') ])
}

.logo .logo-link:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'header.logo.fontHoverColor') ])
}

.posts .post .post-title-link, .content-single .post .post-title {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.color') ])
}

.posts .post .post-title-link:hover, .content-single .post .post-title:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.hoverColor') ])
}

.posts .post div.post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.indexPageHeight') ])
}

.post div.post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.singlePageHeight') ])
}


.widget {
    @style([ 'property' => 'margin-bottom', 'value' => data_get($settings, 'widgets.spacing') ])
}


.widget .widget-title {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'widgets.titleColor') ])
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'widgets.titleStyle') ])
}



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
    }
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
}
