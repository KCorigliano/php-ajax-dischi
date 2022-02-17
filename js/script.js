var app = new Vue({
    el: '#app',
    data: {
        discs: '',
    },
    mounted() {
        axios.get('http://localhost/php-ajax-dischi/axios/disc.php').then((result) => {
            console.log(result.data);
            this.discs=result.data;
        })
    },
  })