<div class="hero"><div class="hero-welcome">Welcome to WebDevs!</div><div class="hero-tagline">Learn about latest in web development.</div></div>

<div class="posts">
    @foreach ( $posts as $post )
        <div class="post">
            <div class="post-content">
                <{{ get_theme_setting('content.general.postTitle.size') }} class="post-title"><a class="post-title-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">{{ $post->title }}</a></{{ get_theme_setting('content.general.postTitle.size') }}>

                <div class="post-excerpt">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </div>
            </div>

            <div class="post-meta">
                <div class="post-author">
                    <div class="post-author-image"><img style="width: 50px;" class="img-responsive" src="{{ get_gravatar($post->author->email, 50, 'mp') }}" /></div>
                    <div class="post-author-detail">
                        <div class="post-author-label">
                            Author
                        </div>
                        <div class="post-author-name">{{ $post->author->firstname }} {{ $post->author->lastname }}</div>
                    </div>
                </div>
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