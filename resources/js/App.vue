<template>
  <div id="app">
    <router-view></router-view>

  </div>
</template>

  <script>

import Index from './components/index';

  export default {
    
    name: 'App',
   
  components: {
    Index
  },
    data() {
    return {
      apiUrl: process.env.MIX_APP_URL,
    }
  },
 
  }
 
  </script>
  
  <style>
  /* Your application-wide CSS styles can be defined here */
  </style>
  