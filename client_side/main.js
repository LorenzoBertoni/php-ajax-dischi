const app = new Vue({
    el:'#app',
    data: {
        discs: []
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/client_side/apiCall.php')
        .then(response => {
            this.discs = response.data
        })
    }
})