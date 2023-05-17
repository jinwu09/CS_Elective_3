<script setup lang="ts">
import NavbarComponent from '@/components/NavbarComponent.vue'
import MessageStats from '@/components/MessageStats.vue'
import { ref } from 'vue'

const products = ref([{ name: 'sample', pictureLink: 'asd', sales: 123 }])
</script>

<template>
  <div class="flex flex-row gap-14">
    <NavbarComponent />
    <div class="container flex flex-col">
      <MessageStats />
      <div class="flex flex-row">
        <div
          v-for="(product, index) in products"
          :key="index"
          class="shadow-md rounded-3xl overflow-hidden flex flex-col w-72 bg-pink-400 relative"
        >
          <div class="h-16 text-center">
            <img class="bg-red-600" src="" alt="image here" />
          </div>
          <div class="flex flex-row justify-between p-7 bg-white">
            <div class="flex flex-col">
              <p>{{ product.name }}</p>
              <p>Sales: {{ product.sales }}</p>
            </div>
            <button class="px-10 rounded-full shadow-lg">Edit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
