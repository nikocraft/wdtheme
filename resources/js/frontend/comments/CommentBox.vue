<template>
    <div class="comment-box">
        <div class="comment-form">
            <div v-if="!loggedUser" class="form-group">
                <h3>Leave a Reply</h3>
                Your email address will not be published. Required fields are marked *
            </div>
            <div class="comment-data">
                <div v-if="!loggedUser" class="form-group comment-data-item">
                    <label for="name">Name</label> *
                    <input v-validate="'required'" data-vv-as="Name" name="name" type="text" class="form-control" v-model="name">
                    <span>{{ errors.first('name') }}</span>
                </div>
            
                <div v-if="!loggedUser" class="form-group comment-data-item">
                    <label for="email">Email</label> *
                    <input v-validate="'required|email'" data-vv-as="Email" name="email" type="text" class="form-control" v-model="email">
                    <span>{{ errors.first('email') }}</span>
                </div>

                <div v-if="!loggedUser" class="form-group comment-data-item">
                    <label for="website">Website</label>
                    <input type="text" name="website" class="form-control" v-model="website">
                </div>
            </div>

            <div class="form-group">
                <label for="body">Comment</label> <span v-if="!loggedUser">*</span>
                <textarea v-validate="'required'" data-vv-as="Comment" name="body" class="form-control" style="height: 105px;" v-model="body"></textarea>
                <span>{{ errors.first('body') }}</span>
            </div>

            <div class="form-group" style="display: flex; justify-content: flex-end;">
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

<style lang="scss">
    .comment-box {
        position: relative;
        margin-top: 15px;

        h3 {
            margin-top: 0px;
        }
    }

    .comment-form {
        padding: 10px 0px;
    }

    .comment-data {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding: 5px;
    }

    .comment-data-item {
        width: 100%;
        margin: 5px;
    }

    .spinner {
        display: flex;
        justify-content: center;
        position: absolute;
        top: -5px;
        background: rgba(255, 255, 255, 0.11);
        height: 100%;
        align-items: center;
        width: 100%;
        align-self: center;
    }

    .lds-dual-ring {
        display: flex;
        width: 64px;
        height: 64px;
    }

    .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 46px;
        height: 46px;
        margin: 1px;
        border-radius: 50%;
        border: 5px solid #cef;
        border-color: #cef transparent #cef transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }

    @keyframes lds-dual-ring {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }

</style>
