const app = new Vue({
    el: '#app',
    data: {
      dischi: [],
    },
    mounted() {
      setTimeout(() => {
        axios.get('http://localhost/php/php-ajax-dischi/Milestone_2/api/dischi.php')
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