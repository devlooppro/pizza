import api from "@/js/api/request.js";

export const namespaced = true;

export const state = {
    pizzas: [],
    pizza: {},
    ingredients: []
};

export const mutations = {
    SET_PIZZAS(state, data) {
        state.pizzas = data.data;
    },
    SET_PIZZA(state, pizza) {
        state.pizza = pizza;
    },
    SET_IGREDIENTS(state, ingredients) {
        state.ingredients = ingredients.data;
    }
};

export const actions = {
    fetchPizzas({ commit }) {
        return api.getPizza().then(response => {
            commit("SET_PIZZAS", response.data);
        });
    },
    fetchPizza({ commit, getters }, id) {
        let pizza = getters.getPizzaById(id);
        commit("SET_PIZZA", pizza);
    },
    fetchAllIngredients({ commit }) {
        return api.getIngredients().then(response => {
            commit("SET_IGREDIENTS", response.data);
        });
    }
};

export const getters = {
    getPizzaById: state => id => {
        return state.pizzas.find(pizza => pizza.id == id);
    }
};
