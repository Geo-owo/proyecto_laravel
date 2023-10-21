<template>
    <div>
        <bootstrap-4-datatables :columns="columns" :data="rows" :filters="filter" :per-page="perPage"> </bootstrap-4-datatables>
        <bootstrap-4-datatables-pager vmodel="page" type="abbreviated"></bootstrap-4-datatables-pager>

    </div>
</template>

<script>

    export default{
        data(){
            return{
                columns:[
                {
                    label:'id',
                    field:'id'
                },
                {
                    label:'nombre',
                    field:'nombre'
                },
                {
                    label:'poblacion',
                    field:'poblacion'
                },
                {
                    label:'code',
                    field:'code'
                }
            ],

            rows:[],
            page:1,
            filter:'',
            perPage:10

            }

        },
        methods:{
                showEstados: function(){
                    axios.get('/estados/getEstados').them(function(res){
                        this.rows = res.data;

                    }.bind(this));
                }
            },

            created: function(){
                this.showEstados();
            }
    }

</script>