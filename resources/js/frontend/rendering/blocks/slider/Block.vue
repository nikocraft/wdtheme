<template>
    <div @mouseover="mouseHover()" @mouseleave="mouseLeave()" class="slider-block" :class="'slider-'+uniqueId" style="position: relative; overflow: hidden;">
        <transition-group name="custom-classes-transition" :enter-active-class="'animated ' + enterTransition" :leave-active-class="'animated ' + leaveTransition">
            <component-wrapper v-for="(slide, index) in slides" :style="{'z-index': zindex(index)}"
                :uniqueId="slide.unique_id"
                v-show="visible(index)"
                :componentName="slide.type"
                v-bind="settings(slide.settings)"
                :content="slide.content"
                :subBlocks="slide.subBlocks"
                :content-render-style="contentRenderStyle"
                :key="slide.unique_id">
            </component-wrapper>
        </transition-group>

        <div v-show="displayButtons()" class="slider-buttons-wrapper">
            <span v-for="(slide, index) in slides" :key="index" @click="jumpToSlide(index)" class="slide-button" :class="{ 'slide-active-button': visible(index) }"></span>
        </div>
        <!-- <div v-if="showProgressBarFlag" class="slide-progress">
            <progress-bar type="line" ref="line" :options="progressBarOptions"></progress-bar>
        </div> -->
        <span v-show="displayArrows()" @click="prev()" class="arrow arrow-left"><i class="fa fa-chevron-left"></i></span>
        <span v-show="displayArrows()" @click="next()" class="arrow arrow-right"><i class="fa fa-chevron-right"></i></span>
    </div>
</template>

<script>
    import Vue from 'vue'
    import { processSettings } from 'utils/helpers.js'


    export default {
        data() {
            return {
                slider: null,
                duration: 500,
                transitions: {
                    fade: 'Fade',
                    slideHorisontal: 'Slide Horisontal',
                    slideVertical: 'Slide Vertical',
                    zoomOutSlideIn: 'Zoom Out Slide In',
                    rubberBand: 'Rubber Band',
                },
                slideDirection: '',
                currentSlide: 0,
                previousSlide: 0,
                showProgressBarFlag: (this.showProgressBar && this.autoplay),
                playTimer: null,
                mousehovering: false,
                windowWidth: 0,
                windowHeight: 0,
                progressBarOptions: {
                    color: this.progressBarColor,
                    strokeWidth: 0.25,
                    trailColor: 'rgba(0,0,0,0)'
                }
            }
        },
        props: {
            uniqueId: {type: String, default: '0'},
            blockTitle: {type: String, default: 'Slider'},
            slides: {type: Array, default: null},

            width: {type: String, default: '100%'},
            contentRenderStyle: {type: String, default: 'fluid'},

            showArrows: {type: String, default: 'always'},
            showButtons: {type: String, default: 'always'},
            autoplay: {type: Boolean, default: true},
            autoplayDuration: {type: Number, default: 3200},
            loop: {type: Boolean, default: true},
            transition: {type: String, default: 'slideHorisontal'},
            showProgressBar: {type: Boolean, default: false},
            progressBarColor: {type: String, default: '#007AFF'},

            heightResponsive: {type: Boolean, default: true},
            height: {type: String, default: '450px'},
            heightLarge: {type: String, default: '450px'},
            heightMedium: {type: String, default: '450px'},
            heightSmall: {type: String, default: '450px'},
            heightExtraSmall: {type: String, default: '450px'},

            // paddingResponsive: {type: Boolean, default: false},
            // padding: {type: String, default: '0px'},
            // paddingLarge: {type: String, default: '0px'},
            // paddingMedium: {type: String, default: '0px'},
            // paddingSmall: {type: String, default: '0px'},
            // paddingExtraSmall: {type: String, default: '0px'},

            marginResponsive: {type: Boolean, default: false},
            margin: {type: String, default: '0px 0px 15px'},
            marginLarge: {type: String, default: '0px 0px 15px'},
            marginMedium: {type: String, default: '0px 0px 15px'},
            marginSmall: {type: String, default: '0px 0px 15px'},
            marginExtraSmall: {type: String, default: '0px 0px 15px'},
        },
        computed: {
            sliderHeight() {
                return this.height
            },
            enterTransition() {
                var transition
                switch (this.transition) {
                    case 'fade':
                        transition = 'fadeIn'
                    break;

                    case 'slideHorisontal':
                        if(this.slideDirection == 'next')
                            transition = 'slideInRight'
                        else if(this.slideDirection == 'prev')
                            transition = 'slideInLeft'
                    break;

                    case 'slideVertical':
                        if(this.slideDirection == 'next')
                            transition = 'slideInUp'
                        else if(this.slideDirection == 'prev')
                            transition = 'slideInDown'
                    break;

                    case 'zoomOutSlideIn':
                        if(this.slideDirection == 'next')
                            transition = 'slideInRight'
                        else if(this.slideDirection == 'prev')
                            transition = 'slideInLeft'
                    break;

                    case 'rubberBand':
                        transition = 'fadeIn'
                    break;
                    default:
                }

                return transition
            },
            leaveTransition: function() {
                var transition
                switch (this.transition) {
                    case 'fade':
                        transition = 'fadeOut'
                    break;

                    case 'slideHorisontal':
                        if(this.slideDirection == 'next') {
                            transition = 'slideOutLeft'
                        } else if(this.slideDirection == 'prev') {
                            transition = 'slideOutRight'
                        }
                    break;

                    case 'slideVertical':
                        if(this.slideDirection == 'next')
                            transition = 'slideOutUp'
                        else if(this.slideDirection == 'prev')
                            transition = 'slideOutDown'
                    break;

                    case 'zoomOutSlideIn':
                        transition = 'zoomOut'
                    break;

                    case 'rubberBand':
                        transition = 'rubberBand'
                    break;
                    default:
                }

                return transition
            },
        },
        watch: {
            currentSlide(val, old) {
                this.previousSlide = val
            }
        },
        methods: {
            settings(settings) {
                return processSettings(settings)
            },
            getWindowWidth(event) {
                this.windowWidth = document.documentElement.clientWidth
            },
            getWindowHeight(event) {
                this.windowHeight = document.documentElement.clientHeight
            },
            displayButtons() {
                if(this.showButtons=='always')
                    return true
                else if(this.showButtons=='hover' && this.mousehovering)
                    return true
                else
                    return false
            },
            displayArrows() {
                if(this.showArrows=='always')
                    return true
                else if(this.showArrows=='hover' && this.mousehovering)
                    return true
                else
                    return false
            },
            mouseHover() {
                this.stopTimer()
                if(this.showProgressBarFlag) {
                    this.$refs.line.stop()
                    this.$refs.line.set(0)
                }
                this.mousehovering = true
            },
            mouseLeave() {
                this.startTimer()
                if(this.showProgressBarFlag) {
                    this.$refs.line.set(0)
                    this.$refs.line.animate(1, {duration: this.autoplayDuration})
                }
                this.mousehovering = false
            },
            startTimer() {
                this.playTimer = window.setInterval(this.next, this.autoplayDuration)
            },
            stopTimer() {
                window.clearInterval(this.playTimer)
                this.playTimer = null
            },
            jumpToSlide(index) {
                this.currentSlide = index

                if(this.currentSlide > this.previousSlide) {
                    this.slideDirection = 'next'
                }
                else if(this.currentSlide < this.previousSlide) {
                    this.slideDirection = 'prev'
                }
            },
            visible(val) {
                return val == this.currentSlide
            },
            zindex(val, old) {
                if(val == this.currentSlide)
                    return '1'
            },
            next() {
                if(this.showProgressBarFlag) {
                    this.$refs.line.set(0)
                    this.$refs.line.animate(1, {duration: this.autoplayDuration})
                }

                this.slideDirection = 'next'
                this.currentSlide = this.currentSlide + 1

                if(this.currentSlide > (this.slides.length-1))
                    this.currentSlide = 0
            },
            prev() {
                if(this.showProgressBarFlag) {
                    this.$refs.line.set(0)
                    this.$refs.line.animate(1, {duration: this.autoplayDuration})
                }

                this.slideDirection = 'prev'
                this.currentSlide = this.currentSlide - 1

                if(this.currentSlide < 0)
                    this.currentSlide = (this.slides.length-1)
            }
        },
        mounted() {
            if(this.autoplay) {
                this.startTimer()
                if(this.showProgressBarFlag) {
                    this.$refs.line.animate(1, {duration: this.autoplayDuration})
                }
            }
        }
    }
</script>

<style scoped lang="scss">
    .arrow {
        border: 0px solid rgba(173, 216, 230, 0.21);
        padding: 10px 15px;
        margin: 0;
        cursor: pointer;
        border-radius: 50%;
        background-color: rgba(43, 43, 43, 0.7);
        color: #b8c7ce;
        position: absolute;
        top: 50%;
        z-index: 10;
        transform: translateY(-50%);
        text-align: center;
        font-size: 12px;

        height: 35px;
        width: 35px;
        border-radius: 25px;
        display: flex;
        justify-content: center;
        align-items: center;

        &:hover {
            background-color: rgba(35, 35, 35, 0.8);
            border: 0px solid rgba(86, 132, 219, 0.18);
        }
    }


    .arrow i {
        font-size: 12px !important;
    }

    .arrow-left {
        left: 16px;
        padding: unset;
    }

    .arrow-right {
        right: 16px;
        padding: unset;
    }

    .slide-progress {
        position: absolute;
        bottom: 0px;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        z-index: 10;
    }

    .slider-buttons-wrapper {
        color: #b8c7ce;
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        z-index: 10;
        text-align: center;
        font-size: 15px;
    }

    .slide-button {
        cursor: pointer;
        display: inline-grid;
        width:12px;
        height:12px;
        border: 2px solid white;
        border-radius: 50%;
        background: transparent;
        margin: 2px;

        &:hover {
            background: white;
        }
    }

    .slide-active-button{
        border: 2px solid white;
        background-color: white;
    }
</style>
