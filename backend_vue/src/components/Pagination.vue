<template>
    <section>
        <nav class="pagination-container">
            <a v-if="pagination.prevPage" @click="$emit('prev')" class="button is-small pagination-previous">
                Previous
            </a>
            <a class="button is-small pagination-previous" v-else disabled>
                Previous
            </a> 
            
            <span class="inner-pagination-content">
                <span class="pagination-seperator"></span>
               | {{ pagination.from }} of {{ pagination.total }} |
                <span class="pagination-seperator"></span>
            </span>
            
            <a v-if="pagination.nextPage" @click="$emit('next')" class="button is-small pagination-next">
                Next
            </a>
            <a class="button is-small pagination next" v-else disabled>
                Next
            </a>
        </nav>
    </section>
</template>

<script>
    export default{
        props: ['pagination']
    }
</script>

<style>

    .pagination-seperator {
        font-size: 22px;
        font-weight: 400;
    }

</style>