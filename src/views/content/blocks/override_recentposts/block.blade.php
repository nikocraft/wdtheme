@php
    $settings = $renderData->block->getSettings();
    $posts = Content::where('content_type_id', $settings->postsType)->latest()->take($settings->numberOfPosts)->get();
@endphp

@foreach ($posts as $post)
    <div style="display: flex; flex-direction: row; border-bottom: 1px dotted #d6d6d6; padding: 10px 0px;">
        @if($post->featuredimage)<div style="background-image: url('{{ $post->featuredimage->medium }}'); background-size: cover; height: 80px; flex: 1;"></div>@endif
        <div style="flex: 2; padding-left: 12px;">
            <a style="color: #777;" href="{{ $post->slug }}"><b>{{ $post->title }}</b></a>
        </div>
    </div>
@endforeach