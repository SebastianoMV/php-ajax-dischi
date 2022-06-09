const app = new Vue({
  el: '#app',

  data:{ 
    apiUrl: 'http://localhost/php-ajax-dischi/api.php?genre=',
    dischi:[],
    genre:'',

  },

  mounted() {
    this.getApi()
  },

  methods: {
    getApi(){
      axios.get(this.apiUrl + this.genre)
      .then(response =>{
        this.dischi = response.data;
        console.log(response.data);
        console.log(this.genre);
      })
    }
  },

})