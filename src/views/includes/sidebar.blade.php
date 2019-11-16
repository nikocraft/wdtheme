@php
    $widgetGroup = get_widget_group('sidebar');
    $widgetGroupVisible = false;

    switch ($pageType) {
        case 'single':
            $contentTypeId = $content->type->slug;
            $contentId = $content->id;
            $widgetGroupVisible = is_widget_group_visible($widgetGroup, $contentTypeId, $contentId);
            break;
        case 'index':
            $contentTypeId = $contentType->slug;
            $widgetGroupVisible = is_widget_group_visible($widgetGroup, $contentTypeId);
            break;
        default:
            $contentTypeId = $contentType->slug;
            $widgetGroupVisible = is_widget_group_visible($widgetGroup, $contentTypeId);
            break;
    }

    if($widgetGroupVisible)
        list($widgets, $widgetsIds) = get_widgets($widgetGroup);
@endphp

@if($widgetGroupVisible)
    @foreach($widgetsIds as $widgetId)
        @php
            $widgetGroupBlock = $widgets[$widgetId];
            $settings = $widgetGroupBlock->settings;
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
                    'widgetId' => $widgetId,
                    'widgets' => $widgets
                ])@endcomponent
            </div>
        </div>
    @endforeach
@endif