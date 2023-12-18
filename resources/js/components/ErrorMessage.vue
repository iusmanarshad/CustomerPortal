<template>
    <div v-if="show" class="fixed top-0 right-0 m-4 p-4 bg-red-500 text-white rounded shadow">
      <template v-if="isList">
        <ul class="list-disc list-inside text-white">
          <li  v-for="(error, index) in messages" :key="index">{{ error }}</li>
        </ul>
      </template>
      <template v-else>
        {{ message }}
      </template>
      
    </div>
  </template>
  
  <script>
  export default {
    props: {
      show: Boolean,
      message: String,
      messages: Array,
      isList: Boolean,
    },
  };
  </script>