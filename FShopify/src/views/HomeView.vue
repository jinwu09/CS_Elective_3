<script setup lang="ts">
import NavbarComponent from '@/components/NavbarComponent.vue'
import { ref } from 'vue'
import { useRouter } from 'vue-router'

const user = ref('User')
const stocks = ref(51651)
const totalSales = ref(101101)
</script>

<template>
  <div class="flex flex-row gap-14">
    <NavbarComponent />
    <div class="container mt-14 flex flex-col gap-6">
      <!-- message -->
      <div class="flex flex-col">
        <p class="text-lg">
          <b>Hey There {{ user }}</b>
        </p>
        <p>Here's what's happening</p>
        <p>to your store <b class="text-lg">today</b></p>
      </div>
      <!-- total stocks stuff -->
      <div class="flex flex-row gap-5">
        <!-- stocks -->
        <div class="flex flex-col rounded-2xl shadow-md shadow-gray-500 p-3">
          <p>Total Stock</p>
          <b class="text-lg text-center">{{ stocks }}</b>
        </div>
        <!-- total sales -->
        <div class="flex flex-col rounded-2xl shadow-md shadow-gray-500 p-3">
          <p>Todays Total Sales</p>
          <b class="text-lg text-center">P {{ totalSales }}</b>
        </div>
      </div>
      <!-- action stuff -->
      <div class="flex flex-col gap-3">
        <!-- check pending order -->
        <div class="flex rounded-lg shadow-md py-5 px-6 justify-between text-center">
          <p>Check pending Order</p>
          <button class="rounded-full shadow-md px-8 py2">Browse</button>
        </div>
        <!-- add a new product -->
        <div class="flex rounded-lg shadow-md py-5 px-6 justify-between text-center">
          <p>Add a New Product</p>
          <button class="rounded-full shadow-md px-8 py2">Add New</button>
        </div>
      </div>
    </div>
  </div>
</template>
