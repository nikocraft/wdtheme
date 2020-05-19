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
@endphp

<div class="interview">
    @if($showTitle)
        <div class="post-header">
            <h1 class="post-title">{{ $content->title }}</h1>
            @if($showMetaData)
                <div class="post-meta">
                    <div class="post-meta-detail">
                        Posted on {{ $content->created_at->format('Y-m-d') }} by {{ $content->author->firstname }} {{ $content->author->lastname }}
                    </div>
                </div>
            @endif
        </div>
    @endif

    @if($content->featuredimage && !empty(get_theme_setting('content.general.featuredImage.singlePageHeight')))
        <div class="post-featured-image" style='background-image: url({{ $content->featuredimage->original }});'></div>
    @elseif($content->featuredimage && empty(get_theme_setting('content.general.featuredImage.singlePageHeight')))
        <div class="post-image-container">
            <img src="{{ $content->featuredimage->original }}" class="post-featured-image img-responsive">
        </div>
    @endif

    <div class="single-post-content">
        @include('content/template/interviews/partials/content')
    </div>

    @if($showAuthorBio)
        <a class="link-to-author" href="/user/nikocraft">
            <div class="post-author">
                <div class="post-author-image"><img class="img-responsive" src="{{ get_gravatar($content->author->email, 90, 'mp') }}" /></div>
                <div class="post-author-detail">
                    <div class="post-author-name">{{ $content->author->firstname }} {{ $content->author->lastname }}</div>
                    <div class="post-author-bio">{{ $content->author->bio }}</div>
                </div>
            </div>
        </a>
    @endif
</div>
