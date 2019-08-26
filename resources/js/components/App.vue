<template>
  <div id="app">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-4">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link to="/" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/article" class="nav-link">Article</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/article/create" class="nav-link">Create Article</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/article/edit" class="nav-link">Edit Article</router-link>
        </li>
      </ul>
    </nav>
    <router-view></router-view>
  </div>
</template>

<script>
    export default{

    }
</script>