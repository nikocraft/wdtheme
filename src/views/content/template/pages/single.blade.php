@push('content-custom-css')
    @if($css){{ $css }}@endif
@endpush

@php
    $contentType = $content->type->slug;
    $themeDefaultContentSettings = 'content.' . $contentType . '.settings';
    $showTitle = $content->settings->get('showTitle', get_theme_setting($themeDefaultContentSettings . '.showTitle'));
    $showMetaData = $content->settings->get('showMetaData', get_theme_setting($themeDefaultContentSettings . '.showMetaData'));
    $showAuthorBio = $content->settings->get('showAuthorBio', get_theme_setting($themeDefaultContentSettings . '.showAuthorBio'));
    $showComments = $content->settings->get('showComments', get_theme_setting($themeDefaultContentSettings . '.showComments'));

    // dd('who the fuck sends us here???');
@endphp

<div class="post">
    @if($showTitle)
        <div class="post-header">
            <h1 class="post-title">{{ $content->title }}</h1>
        </div>
    @endif

    @if($content->featuredimage && !empty(get_theme_setting('content.general.featuredImage.singlePageHeight')))
        <div class="post-featured-image" style='background-image: url({{ $content->featuredimage->original }});'></div>
    @elseif($content->featuredimage && empty(get_theme_setting('content.general.featuredImage.singlePageHeight')))
        <img src="{{ $content->featuredimage->original }}" class="post-featured-image img-responsive" alt="">
    @endif

    <div class="single-post-content">
        @include('content/template/pages/partials/content')
    </div>
</div>
