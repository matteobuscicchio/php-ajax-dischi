let dischi = new Vue({
    el:'#dischi',
    data: {
        mDisks:[],
    },
    methods: {

        obtainInfo: function(){
            axios.get('./php/dbVue.php')
            .then(resp =>{
                this.mDisks = resp.data;
            })
        },

    },
    mounted(){
        this.obtainInfo();
    },
});