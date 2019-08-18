{{-- WIDGETS --}}
@php
    switch ($pageType) {
        case 'single':
            $contentTypeId = $content->type->slug;
            $contentId = $content->id;
            $widget = get_widget_by_area($widgets, 'sidebar', $contentTypeId, $contentId);
            break;
        case 'index':
            $contentTypeId = $contentType->slug;
            $widget = get_widget_by_area($widgets, 'sidebar', $contentTypeId);
            break;
        default:
            $contentTypeId = $contentType->slug;
            $widget = get_widget_by_area($widgets, 'sidebar', $contentTypeId);
            break;
    }

    if($widget)
        list($widgetBlockList, $widgetBlockIds) = process_widget_blocks($widget->blocks);
@endphp

@if($widget)
    @foreach($widgetBlockIds as $widgetBlockId)
        @php
            $widgetBlock = $widgetBlockList[$widgetBlockId];
            $settings = $widgetBlock->settings;
        @endphp

        <div class="widget">
            @if($settings->get('renderTitle'))<div class="widget-header"><{{ get_theme_setting('widgets.titleSize')}} class="widget-title">{{ $settings>get('blockTitle') }}</{{ get_theme_setting('widgets.titleSize')}}></div>@endif
            <div class="widget-body" style="padding: 10;">
                @component('content.render.rootwidget', [
                    'blockId' => $widgetBlockId,
                    'allWidgets' => $widgetBlockList
                ])@endcomponent
            </div>
        </div>
    @endforeach
@endif