import Vue from 'vue';
import moment from 'moment';




Vue.filter('moment', function (date) {
  return moment(date).format('D MMM, Y HH:mmA');
});


Vue.filter('momentuni', function (date) {
 // return moment(date).format('D MMM, Y HH:mmA');

  return moment.unix(date,'X').format("D MMM, Y HH:mmA")
});
