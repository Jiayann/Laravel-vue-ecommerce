<template>
    <div>
        <h1>Vue Router Demo App</h1>
        <p>
            <router-link :to="{ name: 'index' }">INDEX</router-link> |
            <router-link :to="{ name: 'show' }">SHOW</router-link>
        </p>

        <div class="container">
            <router-view>hh</router-view>
        </div>
    </div>
</template>

<script>
    export default {
    }
</script>