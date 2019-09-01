<template>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="table-responsive-sm">
                <table class="table table-bordered  ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="post in posts" :key="post.id">
                            <td>{{ post.id }}</td>
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
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: [],
            }
        },
        created() {
            let apiUrl = 'http://blog.test/api/artikel';
            this.axios.get(apiUrl).then(response => {
                this.posts = response.data.data;
            });
        },
        methods: {
            deletePost(id) {
                let apiUrl = `http://blog.test/api/artikel/${id}`;
                this.axios.delete(apiUrl)
                    .then(response => {
                        this.posts.splice(this.posts.indexOf(id), 1);
                    });
            }
        },
    }
</script>
