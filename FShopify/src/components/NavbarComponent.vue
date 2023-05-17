<script setup lang="ts">
import { useRouter } from 'vue-router'

const router = useRouter()

const home = () => {
  router.push({
    name: 'home'
  })
}
const orders = () => {
  router.push({
    name: 'orders'
  })
}
const products = () => {
  router.push({
    name: 'products'
  })
}

const analytics = () => {
  router.push({
    name: 'analytics'
  })
}
</script>

<template>
  <div class="shadow-2xl shadow-blue-950">
    <div class="flex flex-col w-52 h-[100vh] mt-20 mx-5 gap-5">
      <!-- username -->
      <div class="flex flex-row gap-5">
        <img src="" alt="user icon" />
        <p>User Name</p>
      </div>
      <!-- home -->
      <button class="shadow-md rounded-lg" @click="home">
        <div class="flex flex-row gap-5 mx-5 my-2">
          <img src="" alt="home" />
          <p>home</p>
        </div>
      </button>
      <!-- Orders -->
      <button class="shadow-md rounded-lg" @click="orders">
        <div class="flex flex-row gap-5 mx-5 my-2">
          <img src="" alt="Orders" />
          <p>Orders</p>
        </div>
      </button>
      <!-- Products -->
      <button @click="products" class="shadow-md rounded-lg">
        <div class="flex flex-row gap-5 mx-5 my-2">
          <img src="" alt="Products" />
          <p>Products</p>
        </div>
      </button>
      <!-- Analytics -->
      <button @click="analytics" class="shadow-md rounded-lg">
        <div class="flex flex-row gap-5 mx-5 my-2">
          <img src="" alt="Analytics" />
          <p>Analytics</p>
        </div>
      </button>
    </div>
  </div>
</template>
