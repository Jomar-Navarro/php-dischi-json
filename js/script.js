console.log('PHP Dischi JSON');

const { createApp } = Vue;

createApp({

  data(){
    return{
      title: 'PHP Dischi JSON',
      apiUrl: 'server.php',
      lista_disc: []
    }
  },

  methods:{
    getApi(){
      axios.get(this.apiUrl)
      .then(result => {
        this.lista_disc = result.data;
        console.log(result.data);
      })
    }
  },

  mounted(){
    this.getApi();
  }

}).mount('#app')