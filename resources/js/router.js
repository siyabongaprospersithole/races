import axios from 'axios'
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)




const routes = [
  {
    path: '/',
    component: require('./components/index.vue').default,

   
  },
  {
    path: '/racecard/:id',
    component: require('./components/racecardracess.vue').default,
    beforeEnter: (to, from, next) => {
      alert('beforeEnter');
      // Example: Fetch or verify racecard exists
      axios
        .get(`/api/racecard/${to.params.id}`)
        .then(response => {
          
            to.params.racecard = response.data;
            next();
          
        }).catch(( error) => {

          console.log(error);
          next({ name: 'not-found' });
        });
    
    },

  },
  {
    path: '/not-found',
    name: 'not-found',
    //redirect to laravel out of spa 404,
    component: require('./components/not-found.vue').default,
  }
 


  //Customers
  // {
  //   path: '/quickbooks/customers',
  //   component: require('./components/quickbooks/customers/list.vue').default,
    
  //   props: (route) => ({ client_id: route.params.client_id, type: route.params.type }),
  //   name: 'recons.clients.view.folder',
  //   beforeEnter: (to, from, next) => {
  //   // set the html title
  //   document.title = 'Clients';
  //     // Continue to the route
  //     next();
  //   },
  //   beforeRouteUpdate(to, from, next) {
  //     // Fetch data or perform necessary updates here
  //     next();
  //   }
  // },



  //Customers
 
]

const router = new VueRouter({
  mode: 'history', // Use HTML5 History API for clean URLs
  routes
})

export default router
