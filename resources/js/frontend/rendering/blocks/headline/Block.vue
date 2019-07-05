<template>
    <component v-if="onClick=='open-link'"
        :is="headlineTag"
        :class="['headline-block', 'headline-'+uniqueId, customClass]">
            <a :href="link" :target="target" v-html="content"></a>
    </component>
    <component v-else
        :is="headlineTag"
        :class="['headline-block', 'headline-'+uniqueId, customClass]"
        v-html="content"
    ></component>
</template>

<script>
    import Vue from 'vue'
    export default {
        props: {
            uniqueId: {type: Number, default: 0},
            content: {type: String, default: null},
            headlineTag: {type: String, default: 'h2'},
            customClass: {type: String, default: ''},

            onClick: {type: String, default: 'nothing'},
            link: {type: String, default: ''},
            target: {type: String, default: '_self'},
        },
    }
</script>
