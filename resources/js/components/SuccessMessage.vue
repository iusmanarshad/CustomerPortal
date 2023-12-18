<template>
    <div v-if="show" class="fixed top-0 right-0 m-4 p-4 bg-green-500 text-white rounded shadow">
      {{ message }}
    </div>
  </template>
  
  <script>
  export default {
    props: {
      show: Boolean,
      message: String,
    },
  };
  </script>