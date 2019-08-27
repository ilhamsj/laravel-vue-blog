<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-2">
                    <router-link :to="{name: 'article.index'}">Back</router-link>
                </div>
                <form @submit.prevent="addPost" >
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" v-model="post.title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Content</label>
                        <textarea v-model="post.content" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Create</button >
                    </div>
                </form>
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
