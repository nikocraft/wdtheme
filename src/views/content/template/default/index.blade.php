<div class="hero"><div class="hero-welcome">Welcome to WebDevs!</div><div class="hero-tagline">Learn about latest in web development.</div></div>

<div class="posts">
    @foreach ( $posts as $post )
        <div class="post">
            <div class="post-content">
                <h3 class="post-title"><a class="post-title-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">{{ $post->title }}</a></h3>
                @if(has_excerpt($post))
                    <div class="post-excerpt">
                        {!! get_excerpt($post, 200) !!}
                    </div>
                @elseif(has_text_block($post))
                    <div class="post-excerpt text-block">
                        {!! get_text_block($post, 200) !!}
                    </div>
                @endif
            </div>

            <div class="post-meta">
                <a href="\user\{{ $post->author->slug }}">
                    <div class="post-author">
                        <div class="post-author-image"><img style="width: 50px;" class="img-responsive" src="{{ get_gravatar($post->author->email, 50, 'mp') }}" /></div>
                        <div class="post-author-detail">
                            <div class="post-author-label">
                                Author
                            </div>
                            <div class="post-author-name">{{ $post->author->firstname }} {{ $post->author->lastname }}</div>
                        </div>
                    </div>
                </a>
                <div class="post-taxonomy">
                    @taxonomy([
                        'taxonomy' => 'Tags',
                        'post' => $post,
                        'commaSeparate' => false
                    ]) @endtaxonomy
                </div>
            </div>
        </div>
    @endforeach
</div>
{{ $posts->links() }}