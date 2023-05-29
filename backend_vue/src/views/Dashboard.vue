<template>
  <div class = "container">
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="pt-2">PRODUCTS</h3>
            <button class="btn" style="float:right">Cart</button>
        </div>
    </div>
    <Pagination :pagination="pagination" 
                @prev="--postsData.page; getCategories();"
                @next="postsData.page++; getCategories();">
    </Pagination>
    <div class="row">
      <div v-for= "category of categories" :key="category.id" class="col-xl-4 col-md-6 col-12 pt-3 d-flex">
        <CategoryBox :category="category"></CategoryBox>
      </div>
    </div>
    
  </div>
</template>

<script>

  import axios from "axios";
  import CategoryBox from "../components/CategoryBox.vue"
  import Pagination from "../components/Pagination.vue"
  //const axios = require("axios");
  
  export default{
    
    components: { 
      CategoryBox,
      Pagination
     },
    //pagination: { Pagination },

    mounted(){
      this.getCategories();
    },

    data(){
      return{
        
        categories: [],
        headers: [],
        postsUrl: "https://mangomart-autocount.myboostorder.com/wp-json/wc/v1/products",
        posts: [],
        postsData: {
          perPage: 10,
          page: 1
        },

        pagination:{
          prevPage: '',
          nextPage: '',
          totalPages: '',
          from: '',
          to: '',
          total: '',
        },
      }
    },

    methods: {
      getCategories() {
        axios.get(this.postsUrl, {params: this.postsData})
        .then((response) => {
          this.categories = response.data
          //this.headers = response.headers
          this.configPagination(response.headers)
          console.log(response)
          //console.log(response.headers)
        })
      },

      configPagination(headers){
        this.pagination.total = +headers['x-wp-total'];
        this.pagination.totalPages = +headers['x-wp-totalpages'];
        this.pagination.from = this.pagination.total ? ((this.postsData.page -1)*this.postsData.perPage) + 1: '';
        this.pagination.to = (this.postsData.page * this.postsData.per_page) > this.pagination.total ? this.pagination.total : this.postsData.page * this.postsData.per_page;
        this.pagination.prevPage = this.postsData.page > 1 ? this.postsData.page : '';
        this.pagination.nextPage = this.postsData.page < this.pagination.totalPages ? this.postsData.page + 1: '';
      }
    }
  }  
  
</script>

<style scoped>
  .btn{
    padding: 12px;
    width: 150px;
    background-color:lightgrey;
  
  }

</style>