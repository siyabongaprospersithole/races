<template>
    <div class="p-4 flex-grow">
        <p>Event Type: {{ racecard.eventType }}</p>
        <p>Status: {{ racecard.status }}</p>
        <p>Number</p>
        </div>
</template>


<script>
export default {
    mounted() {
        alert('Component mounted.');
        console.log(this.$route.params.racecard);
    },
    name: 'RaceCardRaces',
    data(){
        return {
            racecard: this.$route.params.racecard
        }
    },
  
    // get the racecard from the param
    

}
</script>