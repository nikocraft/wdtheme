
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('root/bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vue from 'vue'

import { store } from 'frontend/comments/vuex/store'

import standardComponentsList from 'frontend/rendering/blocks/preparedList'
import ComponentWrapper from 'frontend/rendering/blocks/ComponentWrapper'
import localdateFilter from 'utils/filters/localdate'
import localdateDirective from 'utils/directives/localdate'
import VeeValidate from 'vee-validate'
import VueScrollTo from 'vue-scrollto'
import Comments from 'frontend/comments/Comments'
import CommentsTree from 'frontend/comments/CommentsTree'
import CommentBox from 'frontend/comments/CommentBox'

Vue.use(VueScrollTo)
Vue.use(VeeValidate)

Vue.component('component-wrapper', ComponentWrapper)
Vue.filter('localdate', localdateFilter)
Vue.directive('localdate', localdateDirective)

Vue.component('comments-tree', CommentsTree)
Vue.component('comment-box', CommentBox)

const app = new Vue({
    store,
    data: {
        standardComponents: standardComponentsList
    },
    el: '#app',
    components: { Comments }
});
