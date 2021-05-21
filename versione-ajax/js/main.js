const app = new Vue({

    el: '#app',
    data: {

        albums: []

    },

    created() {
        axios.get('http://localhost:8888/php-ajax-dischi/versione-ajax/scripts/get-albums.php')
            .then(result => {

                console.log(result.data);
                this.albums = result.data;

            })
            .catch(err => {
                console.log(err)
            });
    }




});