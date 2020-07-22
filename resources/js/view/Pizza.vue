<template>
    <div class="container">
        <main class="main">
            <h2 class="main__title">{{ pizza.name }}</h2>
            <div class="main__right-block" v-if="ingredients">
                <label
                    v-for="ingredient in ingredients"
                    :key="ingredient.id"
                    :for="'check' + ingredient.id"
                >
                    <input
                        type="checkbox"
                        name=""
                        :id="'check' + ingredient.id"
                        v-model="pizza.ingredients"
                        :value="ingredient"
                        @change="correctBasket(pizza.id, ingredient.id)"
                    />
                    {{ ingredient.name }}
                    <span class="price">{{ ingredient.price }}</span>
                </label>
            </div>
        </main>
    </div>
</template>

<script>
import { mapState } from "vuex";
export default {
    async created() {
        await this.$store.dispatch("pizza/fetchPizza", this.$route.params.id);
    },
    // data() {
    //     return {
    //         ing: []
    //     };
    // },
    computed: {
        ...mapState({
            pizza: state => state.pizza.pizza,
            ingredients: state => state.pizza.ingredients
        })
    },
    methods: {
        correctBasket(pizza_id, ingredient_id) {
            let checkbox = document.querySelector("#check" + ingredient_id);
            console.log(checkbox.checked);
            if (checkbox.checked) {
                console.log(pizza_id, ingredient_id);
                this.$store.dispatch("addIngredient", {
                    pizza_id,
                    ingredient_id
                });
            } else {
                this.$store.dispatch("deleteIngredient", {
                    pizza_id,
                    ingredient_id
                });
            }
        }
    }
};
</script>

<style lang="scss" scoped>
.container {
    display: flex;
    max-width: 600px;
    margin: auto;
    .main {
        padding: 20px;
        display: flex;
        justify-content: space-between;
        margin: auto;
        width: 100%;
        .main__title {
            margin: 0;
        }
        .main__right-block {
            display: flex;
            flex-direction: column;
            label {
                .price {
                    color: #d32f2f;
                }
            }
        }
    }
}
</style>
