<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-2">
                    <router-link :to="{name: 'article.index'}" class="btn btn-primary btn-sm">Back</router-link>
                </div>
                <div class="card">
                    <div class="card-header">Article Index</div>

                    <div class="card-body">
                        <form @submit.prevent="updatePost">
                            <input type="text" v-model="post.title">
                            <input type="text" v-model="post.content">
                            <button>Update</button>
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