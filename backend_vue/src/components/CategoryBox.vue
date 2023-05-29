<template>
  <div class="card w-100 h-100" style="margin-top: 10px">
    <div class="embed-responsive embed-responsive-16by9">
      <img 
        class="card-img-top embed-responsive-item"
        :src="category.images[0].src"
        alt="Card image cap"
      />
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ category.name }}</h5>
      <div class="d-flex flex-row justify-content-between">
        <div class="input-group col-md-5 col-8 p-0">
          <div class="input-group-prepend">
            <button
                class="flex btn btn-primary ml-auto bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                @click="$store.commit('addToCart', category.product)"
            >Add To Cart</button>
            <span class="input-group-text" style="float: right;">Quantity</span>
            <input type="number" class="form-control" style="width:1.5cm;" v-model="quantity"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: "CategoryBox",
  props: ["category"],
  methods: {},

  data(){
    return{
      quantity: 1,
    }
  },

  addToCart(){
          axios
            .post('', {
              productId: this.id,
              quantity: this.quantity,
            })
            .then((resp) => {
              if(resp.status == 201) {
                swal({
                  text: "Product added in cart",
                  icon: "success",
                });
              }
            }).catch((err) => console.log("err", err));
      }
};
</script>

<style scoped>
.card-img-top {
  object-fit: contain;
}

</style>