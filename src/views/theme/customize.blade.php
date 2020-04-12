body {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'global.body.backgroundColor') ])
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'global.font.family') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'global.font.color') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'global.font.size') ])
    @style([ 'property' => 'line-height', 'value' => data_get($settings, 'global.font.lineHeight') ])
}

{{-- Container --}}
.container {
    @style([ 'property' => 'width', 'value' => data_get($settings, 'global.container.width') ])
    @style([ 'property' => 'max-width', 'value' => data_get($settings, 'global.container.maxWidth') ])
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
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'global.container.backgroundColor') ])
}

{{-- Content styles --}}
.content-single .post .post-featured-image {
    @if(!empty(get_theme_setting('content.general.featuredImage.singlePageHeight')))
        @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.singlePageHeight') ])
    @else
        height: auto;
    @endif
}
