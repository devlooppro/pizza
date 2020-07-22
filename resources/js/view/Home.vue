<template>
    <main class="main">
        <h2 class="main__title">Please select PIZZA</h2>
        <div class="main__content">
            <PizzaCart v-for="pizza in pizzas" :key="pizza.id" :pizza="pizza" />
        </div>
    </main>
</template>

<script>
import { mapState } from "vuex";
import PizzaCart from "@/js/components/PizzaCart.vue";
export default {
    components: {
        PizzaCart
    },
    computed: {
        ...mapState({
            pizzas: state => state.pizza.pizzas
        })
    },
    created() {
        this.$store.dispatch("pizza/fetchPizzas");
        this.$store.dispatch("pizza/fetchAllIngredients");
    }
};
</script>

<style lang="scss" scoped>
.main {
    height: calc(100vh - 80px);
}
.main__title {
    text-align: center;
}
.main__content {
    display: flex;
    flex-wrap: wrap;
    max-width: 500px;
    justify-content: space-between;
    margin: auto;
}
</style>
