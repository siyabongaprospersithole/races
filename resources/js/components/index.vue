<template>
  <div class="flex items-center justify-center bg-indigo-100 w-screen min-h-screen" style="font-family: 'Muli', sans-serif;">
    <div class="container max-w-6xl mx-auto px-4">
      <div class="w-full text-center mb-8">
        <h1 class="text-3xl lg:text-4xl text-gray-700 font-extrabold">
          Race Cards
        </h1>
      </div>
      
      <!-- Grid Container for Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Dynamic Card Rendering -->
     
        <div class="flex flex-col bg-white rounded-lg shadow-md overflow-hidden" v-for="(card, index) in raceCards" :key="index" >

         

<router-link :to="'/racecard/'+ card.itw "  class=" no-underline p-4 bg-gray-700 text-white min-h-[100px]">
  
    <div >
      <h5 class="text-xl font-bold">{{ card.track }}</h5>
      <span class="text-sm">{{ card.date }}</span>
    </div>

</router-link>



  <div class="p-4 flex-grow">
    <p>Event Type: {{ card.eventType }}</p>
    <p>Status: {{ card.status }}</p>
    <p>Number of Races: {{ card.numberOfRaces }}</p>
  </div>
</div>




      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Index',
  data() {
    return {
      raceCards: [],
    }
  },
  created() {
    this.fetchRaceCards();
  },
  methods: {
    async fetchRaceCards() {
      let loader = this.$loading.show(); // Assuming this is part of a UI framework you're using

      const apiUrl = `/api/racecards`;
      try {
        const response = await fetch(apiUrl);
        if (response.ok) {
          const data = await response.json();
          this.raceCards = data;
        } else {
          this.handleError('Service is currently not available. Please try again later.');
        }
      } catch (error) {
        this.handleError('An error occurred while fetching the race cards.');
      } finally {
        loader.hide(); // Ensure loader is hidden regardless of outcome
      }
    },
    handleError(message) {
      console.error(message); // Log error to console (consider replacing with a call to your backend for logging)
      this.$swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: message,
      });
    }
  }
}
</script>
