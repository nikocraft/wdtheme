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