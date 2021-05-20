var app = new Vue({
    el: '#root',

    data: {

        genreSelected: "",
        cds: []
    },

    methods: {

        getDischi: function() {

            axios
            .get('http://localhost:8888/php-ajax-dischi/server.php', {
                params: {
                    genere: this.genreSelected
                }
            })
            .then( (response) => {

                this.cds = response.data;

            });
        }
    },

    mounted() {

        this.getDischi();

    }

})