@php
    $widget = get_widget('sidebar');
    $widgetVisible = false;

    switch ($pageType) {
        case 'single':
            $contentTypeId = $content->type->slug;
            $contentId = $content->id;
            $widgetVisible = is_widget_visible($widget, $contentTypeId, $contentId);
            break;
        case 'index':
            $contentTypeId = $contentType->slug;
            $widgetVisible = is_widget_visible($widget, $contentTypeId);
            break;
        default:
            $contentTypeId = $contentType->slug;
            $widgetVisible = is_widget_visible($widget, $contentTypeId);
            break;
    }

    if($widgetVisible)
        list($widgetBlockList, $widgetBlockIds) = get_widget_blocks($widget);
@endphp

@if($widgetVisible)
    @foreach($widgetBlockIds as $widgetBlockId)
        @php
            $widgetBlock = $widgetBlockList[$widgetBlockId];
            $settings = $widgetBlock->settings;
        @endphp

        <div class="widget">
            @if($settings->get('renderTitle'))
                <div class="widget-header">
                    <{{ get_theme_setting('widgets.titleSize')}} class="widget-title">
                        {{ $settings->blockTitle }}
                    </{{ get_theme_setting('widgets.titleSize')}}>
                </div>
            @endif
            <div class="widget-body" style="padding: 10;">
                @component('content.render.rootwidget', [
                    'blockId' => $widgetBlockId,
                    'allBlocks' => $widgetBlockList
                ])@endcomponent
            </div>
        </div>
    @endforeach
@endif