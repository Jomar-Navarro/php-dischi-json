console.log('PHP Dischi JSON');

const { createApp } = Vue;

createApp({

  data(){
    return{
      title: 'PHP Dischi JSON',
      apiUrl: 'server.php',
      lista_disc: [],
      newDisc: {
        title: '',
        author: '',
        poster: '',
        year: '',
        genre: '',
      }
    }
  },

  methods:{
    getApi(){
      axios.get(this.apiUrl)
      .then(result => {
        this.lista_disc = result.data;
        console.log(result.data);
      })
    },

    addNewDisc(){
      // console.log(this.newDisc);
      const data = new FormData();
      data.append('newDiscTitle', this.newDisc.title);
      data.append('newDiscAuthor', this.newDisc.author);
      data.append('newDiscPoster', this.newDisc.poster);
      data.append('newDiscYear', this.newDisc.year);
      data.append('newDiscGenre', this.newDisc.genre);

      console.log(data);

      axios.post(this.apiUrl, data)
      .then(result =>{
        console.log(result.data);
        this.lista_disc = result.data;
      })
    },

    removeDisc(index){
      
      const discToDelete = this.lista_disc[index];

      if(confirm(`Sei sicuro di voler eliminare il disco ${discToDelete.title}?`)){
        const data = new FormData();
        data.append('indexToDelete', index);
  
        axios.post(this.apiUrl, data)
        .then(result =>{
          this.lista_disc = result.data;
        })
      }
    }
  },

  mounted(){
    this.getApi();
  }

}).mount('#app')