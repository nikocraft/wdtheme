<template>
    <a v-if="onClick=='open-link'" :href="link" :target="target">
        <div :class="['text-block', 'text-'+this.uniqueId]" v-html="content">
        </div>
    </a>

    <div  v-else :class="['text-block', 'text-'+this.uniqueId]" v-html="content">
    </div>
</template>

<script>
    import Vue from 'vue'
    export default {
        props: {
            uniqueId: {type: Number, default: 0},
            content: {type: String, default: null},
            customClass: {type: String, default: ''},

            onClick: {type: String, default: 'nothing'},
            link: {type: String, default: ''},
            target: {type: String, default: '_self'},
        }
    }
</script>
