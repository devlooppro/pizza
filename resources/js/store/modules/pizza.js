import api from "@/js/api/request.js";

export const namespaced = true;

export const state = {
    pizzas: []
};

export const mutations = {
    SET_PIZZAS(state, data) {
        state.pizzas = data.data;
    }
};

export const actions = {
    fetchPizzas({ commit }) {
        return api.getPizza().then(response => {
            commit("SET_PIZZAS", response.data);
        });
    }
};
