const app = new Vue({
  el: '#app',

  data:{ 
    apiUrl: 'http://localhost/php-ajax-dischi/api.php',
    dischi:[],

  },

  mounted() {
    this.getApi()
  },

  methods: {
    getApi(){
      axios.get(this.apiUrl)
      .then(response =>{
        this.dischi = response.data;
        console.log(response.data);
      })
    }
  },

})