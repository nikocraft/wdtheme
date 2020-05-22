
<div class="container content-wrap">
    <div class="content content-{{$pageType}} content-left">
        @include('content/template/pages/'.$pageType)
    </div>

    <div class="sidebar sidebar-right">
        @include('includes/sidebar')
    </div>
</div>
