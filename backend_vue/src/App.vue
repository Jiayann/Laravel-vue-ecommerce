<script setup>
import { RouterView } from 'vue-router';
//import Dashboard from './views/Dashboard.vue'

</script>

<template>
  <div id="nav">
    <router-link to="/">Home    </router-link>|
    <router-link to="/">About</router-link>
    <router-view/>
  </div>
  
</template>

<style>
  #app{
  font-family:Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  position: absolute;
  top: 8px;
  left: 16px;
  max-width: fit-content;
  }

  #nav{
    padding: 30px;
    width: 1260px;
  }

  #nav a{
    font-weight: bold;
    color: #2c3e50;
  }

  #nav a.router-link-exact-active {
  color: #42b983;
  }
</style>
