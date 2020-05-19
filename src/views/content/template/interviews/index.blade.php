<div class="posts">
    @foreach ( $posts as $post )
        <div class="interview">
            @if($post->featuredimage)
                <a href="/{{ $post->type->slug }}/{{ $post->slug }}">
                    <div class="post-featured-image" style='height: 300px; background-image: url({{ $post->featuredimage->original }});'></div>
                    {{-- <div class="post-image-container">
                        <img src="{{ $post->featuredimage->original }}" class="post-featured-image img-responsive">
                    </div> --}}
                </a>
            @endif
            <div class="post-content">
                <h3 class="post-title"><a class="post-title-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">{{ $post->title }}</a></h3>
            </div>
        </div>
    @endforeach
</div>
{{-- {{ $posts->links() }} --}}