@extends('layouts.app')

{{-- @include('includes/seo') --}}

@section('content')
<div class="content-wrap" style="background: #23263a; width: 100%;">
    <div class="container">
        <div class="user-profile" style="display: flex; flex-direction: column; align-items: center;">
            <div class="post-author" style="margin-top: 70px;">
                <div class="post-author-image"><img style="width: 220px; border-radius:50%;" class="img-responsive" src="{{ get_gravatar($user->email, 220, 'mp') }}" /></div>
            </div>
            <div style="margin: 40px 0; font-size: 40px; font-weight: 500; color: white;">{{ $user->firstname }} {{ $user->lastname }}</div>
            <div style="width: 50%; margin-bottom: 80px;">
                <h2 style="margin-top: 20px; margin-bottom: 20px; color: white; font-weight: bold;">Hi There!</h2>
                <div class="user-bio">{{ $user->bio }}</div>
            </div>
        </div>
    </div>
</div>
<div class="content-wrap">
    <div class="container">
        <div class="content-index" style="margin-top: 50px;">
            <h2 style="margin-left: 18px; margin-bottom: 30px; color: white; font-weight: bold;">My Articles</h2>
            <div class="posts">
                @foreach ( $user->content as $post )
                    <div class="post">
                        <div class="post-content">
                            <{{ get_theme_setting('content.general.postTitle.size') }} class="post-title"><a class="post-title-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">{{ $post->title }}</a></{{ get_theme_setting('content.general.postTitle.size') }}>
            
                            <div class="post-excerpt">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
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
                                    'commaSeparate' => false
                                ]) @endtaxonomy
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')

@endpush
