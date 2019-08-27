<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-2">
                    <router-link :to="{name: 'article.index'}">Back</router-link>
                </div>
                <div class="card">
                    <div class="card-header">Article Index</div>

                    <div class="card-body">
                        <form @submit.prevent="updatePost">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" v-model="post.title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Content</label>
                                <textarea v-model="post.content" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Update</button >
                            </div>
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
      created() {
        let uri = `http://blog.test/api/article/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.post = response.data;
        });
      },
        methods: {
            updatePost() {
            let uri = `http://blog.test/api/article/update/${this.$route.params.id}`;
            this.axios.post(uri, this.post).then((response) => {
                this.$router.push({name: 'article.index'});
            });
        }
      }
    }
</script>