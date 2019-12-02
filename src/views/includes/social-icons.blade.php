<!-- Social Media icons -->
<div class="social-media">
    @if(get_theme_setting('social.reddit'))
        <a href="{{ get_theme_setting('social.reddit') }}" title="Reddit">
            <i class="fab fa-reddit-alien"></i>
        </a>
    @endif
    @if(get_theme_setting('social.instagram'))
        <a href="{{ get_theme_setting('social.instagram') }}" title="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    @endif
    @if(get_theme_setting('social.twitter'))
        <a href="{{ get_theme_setting('social.twitter') }}" title="Twitter">
            <i class="fab fa-twitter"></i>
        </a>
    @endif
    @if(get_theme_setting('social.pinterest'))
        <a href="{{ get_theme_setting('social.pinterest') }}" title="Pinterest">
            <i class="fab fa-pinterest-p"></i>
        </a>
    @endif
    @if(get_theme_setting('social.artstation'))
        <a href="{{ get_theme_setting('social.artstation') }}" title="ArtStation">
            <i class="fab fa-artstation"></i>
        </a>
    @endif
    @if(get_theme_setting('social.behance'))
        <a href="{{ get_theme_setting('social.behance') }}" title="Behance">
            <i class="fab fa-behance"></i>
        </a>
    @endif
    @if(get_theme_setting('social.dribbble'))
        <a href="{{ get_theme_setting('social.dribbble') }}" title="Dribbble">
            <i class="fab fa-dribbble"></i>
        </a>
    @endif
    @if(get_theme_setting('social.youtube'))
        <a href="{{ get_theme_setting('social.youtube') }}" title="Youtube">
            <i class="fab fa-youtube"></i>
        </a>
    @endif
    @if(get_theme_setting('social.linkedin'))
        <a href="{{ get_theme_setting('social.linkedin') }}" title="LinkedIn">
            <i class="fab fa-linkedin-in"></i>
        </a>
    @endif
    @if(get_theme_setting('social.facebook'))
        <a href="{{ get_theme_setting('social.facebook') }}" title="Facebook">
            <i class="fab fa-facebook-square"></i>
        </a>
    @endif
</div>