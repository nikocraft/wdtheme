{{-- Container --}}
.container {
    @style([ 'property' => 'width', 'value' => data_get($settings, 'global.container.width') ])
    @style([ 'property' => 'max-width', 'value' => data_get($settings, 'global.container.maxWidth') ])
}

@media (max-width: 1200px) {
    .container {
        width: 90%;
    }
}

@media (max-width: 992px) {
    .container {
        width: 100%;
    }
}