<template>
    <div>
        <button class="mybutton" v-for="c in data" v-bind:key v-text="c.name">{{c.name}}</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            axios.post('api/company',{})
                    .then(response=>{
                        this.data=response.data;
                    });
        },
        data:function(){
            return{
                data:[]
            }
        },
        props:['type','text'],
            
    }
</script>
<style>
.mybutton{
    color:red;
    background-color:cornsilk;
    padding: 30px 30px;
    margin:20px;
}

</style>