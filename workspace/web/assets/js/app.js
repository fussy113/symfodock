var Vue = require('vue');

import hello from './components/hello.vue'

var vm = new Vue({
  el: '#app',
  components: {
    hello,
  }
});
