<script setup lang="ts">
import NavbarComponent from '@/components/NavbarComponent.vue'
import MessageStats from '@/components/MessageStats.vue'
import { ref } from 'vue'

const items = ref([{ orderID: 1, status: 'ongoing', price: 11, location: 'somewhere' }])
</script>

<template>
  <div class="flex flex-row gap-14">
    <NavbarComponent />
    <div class="container flex flex-col mt-12">
      <!-- some messages stuff -->
      <MessageStats />
      <!-- order stats -->
      <div class="flex flex-col mt-4 p-2 border-2 h-full">
        <div class="grid grid-cols-4 text-center">
          <p class="border-2">ORder ID</p>
          <p class="border-2">Status</p>
          <p class="border-2">Price</p>
          <p class="border-2">Location</p>
        </div>
        <div v-for="(item, index) in items" :key="index" class="grid grid-cols-4 text-center">
          <p class="border-2">{{ item.orderID }}</p>
          <p class="border-2">{{ item.status }}</p>
          <p class="border-2">{{ item.price }}</p>
          <p class="border-2">{{ item.location }}</p>
        </div>
      </div>
    </div>
  </div>
</template>
