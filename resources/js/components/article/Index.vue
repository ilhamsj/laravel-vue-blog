<template>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-2">
                <router-link :to="{name: 'article.create'}" class="md-raised">Create</router-link>
            </div>
            <table class="table border">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="post in posts" :key="post.id">
                        <td>{{ post.title }}</td>
                        <td>{{ post.content }}</td>
                        <td>
                            <router-link :to="{name: 'article_edit', params: { id: post.id }}" class="btn btn-primary btn-sm">Edit</router-link>
                            <button class="btn btn-danger btn-sm" @click="deletePost(post.id)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            let uri = 'http://blog.test/api/article';
            this.axios.get(uri).then(response => {
                this.posts = response.data.data;
            });
        },
        methods: {
            deletePost(id) {
                let uri = `http://blog.test/api/article/delete/${id}`;
                this.axios.delete(uri).then(response => {
                    this.posts.splice(this.posts.indexOf(id), 1);
                });
            }
        },
    }
</script>
