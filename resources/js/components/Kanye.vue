<template>
    <div>
        <h1>Kanye has said once: </h1>
        <p v-for="quote in quotes" :key="quote.quote">
            <q>{{quote.quote}}</q>
        </p>
        <button @click="getQuotes">Refresh</button>
    </div>
</template>

<script>
export default {
    name: "Kanye",
    data() {
        return {
            quotes: []
        }
    },
    methods: {
        getQuotes() {
            let self = this;
            axios.get( 'api/quotes/5')
                .then(function( response ){
                    self.quotes = response.data;
                });
        }
    },
    mounted() {
        this.getQuotes()
    }
}
</script>

<style scoped>

</style>
