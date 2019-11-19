<div class="posts">
    @foreach ( $posts as $post )
        <div class="post">
            <{{ get_theme_setting('content.general.postTitle.size') }} class="post-title"><a class="post-title-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">{{ $post->title }}</a></{{ get_theme_setting('content.general.postTitle.size') }}>

            <div class="post-meta">
                <div class="post-meta-detail">
                    Posted on {{ $post->created_at->format('Y-m-d') }} by {{ $post->author->username }}
                </div>
            </div>
            @if($post->featuredimage && !empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
                <a class="post-image-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">
                    <div class="post-featured-image" style='background-image: url({{ $post->featuredimage->original }});'></div>
                </a>
                {{-- <img src="{{ $post->featuredimage->original }}" class="img-responsive" alt=""> --}}
            @elseif($post->featuredimage && empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
                <img src="{{ $post->featuredimage->original }}" class="post-featured-image img-responsive" alt="">
            @endif

            {{-- <div class="post-excerpt">
                {{ get_excerpt($post, get_theme_setting('content.general.excerptLength')) }}
            </div> --}}

            @if(has_excerpt($post))
                <div class="post-excerpt">
                    {!! get_excerpt($post, get_theme_setting('content.general.excerptLength')) !!}
                </div>
            @elseif(has_text_block($post))
                <div class="post-excerpt text-block">
                    {!! get_text_block($post) !!}
                </div>
            @endif

            <div class="post-footer">
                <div class="post-meta-detail">
                    <div class="post-taxonomy">
                        @taxonomy([
                            'taxonomy' => 'Tags',
                            'post' => $post,
                            'commaSeparate' => false
                        ]) @endtaxonomy
                    </div>
                </div>
                <a class="btn btn-primary" href="/{{ $post->type->slug }}/{{ $post->slug }}">Read More</a>
            </div>
        </div>
    @endforeach
</div>
{{ $posts->links() }}