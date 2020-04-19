{{-- Container --}}
.container {
    @style([ 'property' => 'width', 'value' => data_get($settings, 'global.container.width') ])
    @style([ 'property' => 'max-width', 'value' => data_get($settings, 'global.container.maxWidth') ])
}

@media (max-width: 1400px) {
    .container {
        width: 95%;
    }
}

@media (max-width: 1300px) {
    .container {
        width: 100%;
    }
}