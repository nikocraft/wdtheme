@extends('layouts.app')

@php
    $templatePath = 'content/template/default';

    switch ($pageType) {
        case 'single':
            $contentLayout = $content->layout ?? get_theme_setting('content.' . $contentType->slug  . '.layout.singlePage');
            break;
        default:
            $contentLayout = get_theme_setting('content.' . $contentType->slug . '.layout.indexPage');
            break;
    }
    if(is_null($contentLayout)) {
        $contentLayout = "content-fullwidth";
    }
@endphp

@include('includes/seo')

@section('hero')
    @if($pageType == 'index')
        @switch($contentType->front_slug)
            @case("posts")
                <div class="hero"><div class="hero-tagline">Stay up to date on the latest in web development.</div></div>
                @break
            @case("interviews")
                <div class="hero"><div class="hero-tagline">Interviews with interesting people in IT.</div></div>
                @break
            @case("meetups")
                <div class="hero"><div class="hero-tagline">Our web developer meetups.</div></div>
                @break
        @endswitch
    @endif
@endsection

@section('content')
    @switch($contentLayout)
        @case("content-fullwidth")
            @include($templatePath.'/layouts/content-fullwidth')
            @break
        @case("content-sidebar")
            @include($templatePath.'/layouts/content-sidebar')
            @break
        @case("sidebar-content")
            @include($templatePath.'/layouts/sidebar-content')
            @break
        @case("none")
            @include($templatePath.'/layouts/none')
            @break
    @endswitch
@endsection