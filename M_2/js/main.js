/*******************
        VUE-JS
*******************/

const app = new Vue({
    el: '#app',
    data: {
        database: [],
    },
    created() {
        // get data
        axios
            .get('http://localhost/Esercizi%20Github/php-ajax-dischi/M_2/scripts/database.php')
            .then( result => {
                console.log(result.data);
                this.database = result.data;
            })
            .catch(err => {
                console.log(err);
            });
    },
});