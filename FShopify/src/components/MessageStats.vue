<script setup lang="ts">
import { ref } from 'vue'

const month = ref(20)
const day = ref(10)
const toShip = ref(20)
const onShip = ref(10)
const Receive = ref(20)
const Returns = ref(10)
</script>

<template>
  <div class="flex flex-col gap-4 px-4 py-4 rounded-lg shadow-md">
    <div class="grid grid-cols-3 gap-6">
      <!-- month -->
      <div class="flex flex-col text-center rounded-lg py-3 px-6 shadow-sm shadow-gray-500">
        <p>Sold This Month</p>
        <b>{{ month }}</b>
      </div>
      <!-- to ship -->
      <div class="flex flex-col text-center rounded-lg py-3 px-6 shadow-sm shadow-gray-500">
        <p>Read to Ship</p>
        <b>{{ toShip }}</b>
      </div>
      <!-- Order Recieve -->
      <div class="flex flex-col text-center rounded-lg py-3 px-6 shadow-sm shadow-gray-500">
        <p>Order Receive</p>
        <b>{{ Receive }}</b>
      </div>
    </div>
    <div class="grid grid-cols-3 gap-6">
      <!-- Sold this day -->
      <div class="flex flex-col text-center rounded-lg py-3 px-6 shadow-sm shadow-gray-500">
        <p>Sold this Day</p>
        <b>{{ day }}</b>
      </div>
      <!-- On ship -->
      <div class="flex flex-col text-center rounded-lg py-3 px-6 shadow-sm shadow-gray-500">
        <p>On Ship</p>
        <b>{{ onShip }}</b>
      </div>
      <!-- Order Retruns -->
      <div class="flex flex-col text-center rounded-lg py-3 px-6 shadow-sm shadow-gray-500">
        <p>Order Returns</p>
        <b>{{ Returns }}</b>
      </div>
    </div>
  </div>
</template>
