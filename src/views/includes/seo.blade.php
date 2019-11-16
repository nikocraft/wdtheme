@switch($pageType)
    @case('single')
        @push('seo-meta-tags')
            <title>{{ $content->title }} - {{ get_website_setting('website.title') }}</title>
            <meta name="title" content="{{ get_website_setting('website.title') }} | {{ $content->title }}">
            <meta name="description" content="{{ get_seo_description($content) }}">
        @endpush

        @push('open-graph-meta-tags')
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://">
            <meta property="og:title" content="{{ $content->title }} | {{ get_website_setting('website.title') }}">
            <meta property="og:description" content="{{ get_seo_description($content) }}">
            <meta property="og:image" content="{{ get_seo_image($content) }}">
        @endpush

        @push('twitter-meta-tags')
            <meta property="twitter:card" content="summary_large_image">
            <meta property="twitter:url" content="https://">
            <meta property="twitter:title" content="{{ $content->title }} | {{ get_website_setting('website.title') }}">
            <meta property="twitter:description" content="{{ get_seo_description($content) }}">
            <meta property="twitter:image" content="{{ get_seo_image($content) }}">
        @endpush
    @break

    @default
        @push('seo-meta-tags')
            <title>{{ get_website_setting('website.title') }}</title>
            <meta name="title" content="{{ get_website_setting('website.title') }}">
        @endpush

        @push('open-graph-meta-tags')
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://">
            <meta property="og:title" content="{{ get_website_setting('website.title') }}">
            <meta property="og:description" content="{{ get_website_setting('website.description') }}">
        @endpush

        @push('twitter-meta-tags')
            <meta property="twitter:card" content="summary">
            <meta property="twitter:url" content="https://">
            <meta property="twitter:title" content="{{ get_website_setting('website.title') }}">
            <meta property="twitter:description" content="{{ get_website_setting('website.description') }}">
        @endpush
@endswitch