const app = new Vue({
    el: '#app',
    data: {
      dischi: [],
    },
    mounted() {
      setTimeout(() => {
        axios.get('./api/dischi.php')
        .then(r => {
          this.dischi = r.data;
          console.log(this.dischi);
        })
        .catch( error => {
          console.log(error);
        })
        
      }, 2000);
    }
  })