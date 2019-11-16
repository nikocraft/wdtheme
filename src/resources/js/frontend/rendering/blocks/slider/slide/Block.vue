<template>
    <!-- <div v-if="onClick=='open-link'" :class="['slide', 'slide-'+uniqueId]">
        <div :class="[container]">
            <a :href="link" :target="target" class="slide-link">
                <component-wrapper v-for="block in subBlocks"
                    :uniqueId="block.id"
                    :componentName="block.type"
                    v-bind="settings(block.settings)"
                    :content="block.content"
                    :subBlocks="block.subBlocks"
                    :key="block.uniqueId">
                </component-wrapper>
            </a>
        </div>
    </div> -->

    <div @click="windowOpenTrigger" :class="['slide', 'slide-'+uniqueId]">
        <div :class="[container]">
            <component-wrapper v-for="block in subBlocks"
                :uniqueId="block.unique_id"
                :componentName="block.type"
                v-bind="settings(block.settings)"
                :content="block.content"
                :subBlocks="block.subBlocks"
                :key="block.uniqueId">
            </component-wrapper>
        </div>
    </div>
</template>

<script>
    import { processSettings } from 'utils/helpers.js'
    export default {
        data: function data() {
            return {
                image: null,
                currentIndex: null,
                imageHeight: 0,
            }
        },
        props: {
            uniqueId: {type: Number, default: 0},
            visible: {type: Boolean, default: false},
            content: {type: String, default: ''},

            blockTitle: {type: String, default: 'Slide'},
            onClick: {type: String, default: 'nothing'},
            link: {type: String, default: ''},
            target: {type: String, default: '_self'},
            subBlocks: {type: Array, default: null},
            contentRenderStyle: {type: String, default: 'fluid'},
        },
        computed: {
            container () {
                if (this.contentRenderStyle == 'boxed') {
                    return 'container'
                }
                else {
                    return 'slider-fluid'
                }
            },
            // slideBackground () {
            //     let styleObj = {
            //         backgroundSize: 'cover',
            //         backgroundPosition: 'center',
            //         backgroundImage: this.image ? `url("${this.image}")` : 'none'
            //     }
            //     return styleObj
            // },
            slideStyles () {
                let styleObj = {
                    height: '100%',
                    width: (this.contentRenderStyle == 'boxed' ? '' : '100%'),
                    display: this.display,
                    'flex-direction': this.flexDirection,
                    'justify-content': this.justifyContent,
                    'align-items': this.alignItems
                }
                return styleObj
            }
        },
        methods: {
            windowOpenTrigger() {
                if(this.onClick=='open-link')
                    window.open(this.link, this.target)
            },
            settings(settings) {
                return processSettings(settings)
            },
        },
        mounted : function() {
            this.image = this.content
        }
    }
</script>

<style scoped lang="scss">
    .container {
        position: relative;
        height: 100%;
    }

    .container-responsive {
        width: 100%;
    }

    .slide {
        position: absolute;
        overflow: hidden;
        height: 100%;
        width: 100%;
        // display: flex;
        // align-items: center;
        // justify-content: center;
        // min-height: 150px;
        z-index: 10;
    }

    .layers-fluid {
        position: absolute;
    }

    .layers-boxed {
        position: relative;
    }

    a {
        align-items: unset;
    }

    a:hover, a:focus {
        text-decoration: none;
    }
</style>
