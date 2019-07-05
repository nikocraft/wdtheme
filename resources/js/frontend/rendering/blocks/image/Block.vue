<template>
    <div v-if="onClick=='open-link'" :class="['image-'+uniqueId, customClass]">
        <a  :href="link" :target="target">
            <img v-if="image.id" :src="imageUrl" :class="[imageResponsive ? 'img-responsive' : '']">
        </a>
    </div>
    <div v-else :class="['image-'+uniqueId, customClass]">
        <img v-if="image.id" :src="imageUrl" :class="[imageResponsive ? 'img-responsive' : '']">
    </div>
</template>

<script>
    import Vue from 'vue'

    export default {
        data () {
            return {
                image: {
                    title: '',
                    caption: '',
                },
            }
        },
        props: {
            uniqueId: {type: Number, default: 0},
            content: {type: String, default: null},
            imagePosition: {type: String, default: 'center'},
            imageResponsive: {type: Boolean, default: true},
            imageSize: {type: String, default: 'original'},
            customClass: {type: String, default: ''},

            onClick: {type: String, default: 'nothing'},
            link: {type: String, default: ''},
            target: {type: String, default: '_self'},
        },
        computed: {
            imageUrl () {
                return this.getCorrectImageSize()
            }
        },
        methods: {
            getCorrectImageSize() {
                if(this.image.id) {
                    switch (this.imageSize) {
                        case 'original':
                            return '/' + this.image.path + this.image.filename + '.' + this.image.extension
                        break;

                        case 'large':
                            return '/' + this.image.path + this.image.filename + '_large.' + this.image.extension
                        break;

                        case 'medium':
                            return '/' + this.image.path + this.image.filename + '_medium.' + this.image.extension
                        break;

                        case 'thumb':
                            return '/' + this.image.path + this.image.filename + '_thumb.' + this.image.extension
                        break;

                        default:
                            return '/' + this.image.path + this.image.filename + '_large.' + this.image.extension
                    }
                }
            }
        },
        mounted () {
            if (this.content)
                this.image = JSON.parse(this.content)
        }
    }
</script>
