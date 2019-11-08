<template>
    <div class="comment-box">
        <div class="comment-form">
            <div class="comment-box-header">
                <h3>Leave a Reply</h3>
                <div>Your email address will not be published. Required fields are marked *</div>
            </div>

            <div v-if="!loggedUser" class="comment-data">
                <div class="comment-data-item">
                    <label for="name">Name</label> *
                    <input v-validate="'required'" data-vv-as="Name" name="name" type="text" class="form-input" v-model="name">
                    <span>{{ errors.first('name') }}</span>
                </div>
            
                <div class="comment-data-item">
                    <label for="email">Email</label> *
                    <input v-validate="'required|email'" data-vv-as="Email" name="email" type="text" class="form-input" v-model="email">
                    <span>{{ errors.first('email') }}</span>
                </div>

                <div class="comment-data-item">
                    <label for="website">Website</label>
                    <input type="text" name="website" class="form-input" v-model="website">
                </div>
            </div>

            <div class="comment-body">
                <div><label for="body">Comment</label> <span>*</span></div>
                <textarea v-validate="'required'" data-vv-as="Comment" name="body" class="form-input" v-model="body"></textarea>
                <span>{{ errors.first('body') }}</span>
            </div>

            <div class="comment-btn">
                <button @click="comment()" type="submit" name="button" class="btn btn-primary">Comment</button>
            </div>
        </div>

        <div v-if="showPostAnimation(comment.id)" class="spinner">
            <div class="lds-dual-ring"></div>
        </div>
    </div>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex'

    export default {
        data () {
            return {
                name: '',
                email: '',
                body: '',
                website: ''
            }
        },
        props: {
            commentId: { type: Number, default: null},
        },
        computed: {
            replyToComment: {
                get() {
                    return this.$store.getters.replyToComment
                },
                set(val) {
                    this.setReplyToComment(val)
                }
            },
            postingComment: {
                get() {
                    return this.$store.getters.postingComment
                }
            },
            loggedUser: {
                get() {
                    return this.$store.getters.user
                }
            },
        },
        methods: {
            ...mapActions([
                'postComment'
            ]),
            comment(commentId) {
                let comment = {
                    name: this.name,
                    email: this.email,
                    body: this.body,
                    website: this.website
                }
                this.postComment(comment)
                    .then(() => {
                        this.name = ''
                        this.email = ''
                        this.body = ''
                        this.website = ''
                    })
            },
            showPostAnimation() {
                if(this.replyToComment == this.commentId && this.postingComment)
                    return true
                else
                    return false
            },
        },
        mounted: function() {
        }
    }
</script>