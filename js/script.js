var app = new Vue({
    el: '#app',
    data: {
        discsSource: [],
        discs: [],
        genres: [],
    },
    mounted() {
        axios.get('http://localhost/php-ajax-dischi/api/disc.php').then((result) => {
            this.discsSource = result.data;
            this.discs = result.data;        
        })
    },
    methods: {
        discsFilter(keyword){
            this.discs = this.discsListSource.filter((element) => element.genre.toLowerCase().includes(keyword))
        }
    },
})