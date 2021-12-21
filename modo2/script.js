// prendo database

const app = new Vue({
    el: '#app',
    data: {
        dischi: null,
    },
    created(){
        this.getDischi();
    },
    methods: {
        getDischi() {
            axios
            .get('http://localhost/esercizi/php-ajax-dischi/modo2/database.php')
            .then(response => {
                console.log(response.data);
                this.dischi = response.data;
            })
            .catch(err => {
                console.log(err);
            });
        }
    }
})

