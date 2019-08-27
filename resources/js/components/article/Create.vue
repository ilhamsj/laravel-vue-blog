<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article Index</div>

                    <div class="card-body">
                        <form @submit.prevent="addPost" >
                            <input type="text" v-model="post.title">
                            <input type="text" v-model="post.content">
                            <button>Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                post: {}
            }
        },
        methods: {
            addPost() {
                let uri = 'http://blog.test/api/article/create';
                this.axios.post(uri, this.post).then((response) => {
                    this.$router.push({name: 'article.index'});
                });
            }
        },
    }
</script>
