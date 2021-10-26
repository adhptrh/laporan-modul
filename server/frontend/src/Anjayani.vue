<template>
    <div>
        <p @click="clickme">Clickme {{$store.state.count}}</p>
        <div v-for="v in $store.state.arrtest" :key="v">
            <p>{{v.name}}</p>
        </div>
    </div>
</template>

<script>
export default {
    mounted()
    {
        this.$axios({
            url:"/wow",
            method:"get"
        });
    },
    methods: {
        clickme(e) {
            this.$store.commit("increments");
            this.$store.commit("insert",e);
            console.log(this.$store.state.count);
        }
    }
}
</script>