<div class="posts">
    @foreach ( $posts as $post )
        <a class="post" href="/{{ $post->type->slug }}/{{ $post->slug }}">
            <div class="post-content">
                <h3 class="post-title">{{ $post->title }}</h3>
                <div class="post-excerpt">
                    @if(has_excerpt($post))
                        {!! get_excerpt($post, 280) !!}
                    @elseif(has_text_block($post))
                        {!! get_text_block($post, 280) !!}
                    @endif
                </div>
            </div>

            <div class="post-meta">
                <div class="post-author">
                    <div class="post-author-image"><img style="width: 50px;" class="img-responsive" src="{{ get_gravatar($post->author->email, 100, 'mp') }}" /></div>
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
                        'commaSeparate' => false,
                        'noLinks' => true
                    ]) @endtaxonomy
                </div>
            </div>
        </a>
    @endforeach
</div>
{{-- {{ $posts->links() }} --}}