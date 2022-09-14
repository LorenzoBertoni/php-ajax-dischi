const app = new Vue({
    el:'#app',
    data: {
        discs: [],
        filteredDiscs: [],
        genreValue: ''
    },
    methods: {
        getFilter() {
            this.filteredDiscs = []
            axios.get('http://localhost/php-ajax-dischi/client_side/apiCall.php?genre=' + this.genreValue)
            .then(filteredResponse => {
                this.filteredDiscs.push(filteredResponse.data)
                console.log(filteredResponse.data)
            })
        }
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/client_side/apiCall.php')
        .then(response => {
            this.discs = response.data
        })
    }
})