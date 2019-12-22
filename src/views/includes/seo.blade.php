@switch($pageType)
    @case('single')
        @push('seo-meta-tags')
            <title>{{ $content->title }} - {{ get_website_setting('website.general.title') }}</title>
            <meta name="title" content="{{ $content->title }} | {{ get_website_setting('website.general.title') }}">
            <meta name="description" content="{{ get_seo_description($content, get_theme_setting('seo.meta.description')) }}">
        @endpush

        @push('open-graph-meta-tags')
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://">
            <meta property="og:title" content="{{ $content->title }} | {{ get_website_setting('website.general.title') }}">
            <meta property="og:description" content="{{ get_seo_description($content, get_theme_setting('seo.meta.description')) }}">
            <meta property="og:image" content="{{ get_seo_image($content) }}">
        @endpush

        @push('twitter-meta-tags')
            <meta property="twitter:card" content="summary_large_image">
            <meta property="twitter:url" content="https://">
            <meta property="twitter:title" content="{{ $content->title }} | {{ get_website_setting('website.general.title') }}">
            <meta property="twitter:description" content="{{ get_seo_description($content, get_theme_setting('seo.meta.description')) }}">
            <meta property="twitter:image" content="{{ get_seo_image($content) }}">
        @endpush
    @break

    @default
        @push('seo-meta-tags')
            <title>{{ get_website_setting('website.general.title') }}</title>
            <meta name="title" content="{{ get_website_setting('website.general.title') }}">
        @endpush

        @push('open-graph-meta-tags')
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://">
            <meta property="og:title" content="{{ get_website_setting('website.general.title') }}">
            <meta property="og:description" content="{{ get_theme_setting('seo.meta.description') }}">
        @endpush

        @push('twitter-meta-tags')
            <meta property="twitter:card" content="summary">
            <meta property="twitter:url" content="https://">
            <meta property="twitter:title" content="{{ get_website_setting('website.general.title') }}">
            <meta property="twitter:description" content="{{ get_theme_setting('seo.meta.description') }}">
        @endpush
@endswitch