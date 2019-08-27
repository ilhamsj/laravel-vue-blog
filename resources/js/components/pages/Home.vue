<template>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Homepage</div>

                <div class="card-body" v-bind:title="message">
                    Helo
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                message: 'Good morning',
            }
        },
    }
</script>
