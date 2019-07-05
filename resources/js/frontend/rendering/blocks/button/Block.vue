<template>
    <div :class="['btn', textTag, 'button-'+uniqueId, customClass]">
        <a :href="link"
            :target="target"
            type="button"
            name="button"
            v-html="content">
        </a>
    </div>
</template>

<script>
    import Vue from 'vue'
    export default {
        props: {
            uniqueId: {type: Number, default: 0},
            content: {type: String, default: null},
            customClass: {type: String, default: ''},
            textTag: {type: String, default: 'h3'},

            onClick: {type: String, default: 'nothing'},
            link: {type: String, default: ''},
            target: {type: String, default: '_self'},
        },
    }
</script>
