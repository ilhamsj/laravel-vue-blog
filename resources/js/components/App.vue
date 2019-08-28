<template>
  <div id="app">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-4">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link :to="{ name: 'home' }" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'article.index' }" class="nav-link">Article</router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'article.create' }" class="nav-link">Create Article</router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'editor' }" class="nav-link">Editor</router-link>
        </li>
      </ul>
    </nav>
    <transition name="fade">
      <router-view></router-view>
    </transition>  
  </div>
</template>

<script>
    export default{

    }
</script>